<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyRegistration;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class CompanyLoginController extends Controller
{
    // 🔔 Admin Email (change here)
    protected $adminEmail = 'admin@yourdomain.com';

    // ================= SHOW LOGIN =================
    public function showForm()
    {
        return view('login');
    }

    // ================= REGISTER / LOGIN =================
    public function join(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'mode' => 'required'
        ]);

        $company = CompanyRegistration::where('email', $request->email)->first();

        // -------- REGISTER --------
        if ($request->mode === 'register') {

            if ($company) {
                return back()->with('error', 'Email already registered');
            }

            if (!$request->company_name || !$request->phone_number) {
                return back()->with('error', 'Company name & phone required');
            }

            $company = CompanyRegistration::create([
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'company_name' => $request->company_name,
                'phone_number' => $request->phone_number,
            ]);

            // 📧 ADMIN MAIL – REGISTER
            Mail::raw(
                "New company registered\n\nEmail: {$company->email}\nCompany: {$company->company_name}\nPhone: {$company->phone_number}",
                function ($msg) {
                    $msg->to($this->adminEmail)
                        ->subject('New Company Registration');
                }
            );
        }

        // -------- LOGIN --------
        else {

            if (!$company) {
                return back()->with('error', 'Email not registered');
            }

            if (!Hash::check($request->password, $company->password)) {
                return back()->with('error', 'Incorrect password');
            }

            // 📧 ADMIN MAIL – LOGIN
            Mail::raw(
                "Company logged in\n\nEmail: {$company->email}\nCompany: {$company->company_name}",
                function ($msg) {
                    $msg->to($this->adminEmail)
                        ->subject('Company Login Alert');
                }
            );
        }

        // -------- SESSION --------
        Session::put('company', [
            'id' => $company->id,
            'email' => $company->email,
            'name' => $company->company_name,
        ]);

        return redirect('/professionals');
    }

    // ================= FORGOT PASSWORD =================
    public function forgot(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $company = CompanyRegistration::where('email', $request->email)->first();

        if (!$company) {
            return back()->with('error', 'Email not found');
        }

        $company->reset_token = Str::random(50);
        $company->save();

        // 📧 ADMIN MAIL – FORGOT PASSWORD
        Mail::raw(
            "Password reset requested\n\nEmail: {$company->email}",
            function ($msg) {
                $msg->to($this->adminEmail)
                    ->subject('Password Reset Requested');
            }
        );

        return redirect('/reset-password/' . $company->reset_token);
    }

    // ================= RESET PASSWORD =================
    public function reset(Request $request)
    {
        $request->validate([
            'password' => 'required|min:6',
            'token' => 'required'
        ]);

        $company = CompanyRegistration::where('reset_token', $request->token)->first();

        if (!$company) {
            return back()->with('error', 'Invalid or expired link');
        }

        $company->password = Hash::make($request->password);
        $company->reset_token = null;
        $company->save();

        // 📧 ADMIN MAIL – PASSWORD RESET SUCCESS
        Mail::raw(
            "Password updated successfully\n\nEmail: {$company->email}",
            function ($msg) {
                $msg->to($this->adminEmail)
                    ->subject('Password Reset Completed');
            }
        );

        return redirect('/login')->with('success', 'Password updated successfully');
    }

    // ================= LOGOUT =================
    public function logout()
    {
        Session::forget('company');
        return redirect('/login')->with('success', 'Logged out successfully');
    }
}
