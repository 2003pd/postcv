<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\Mail;

class CompanyController extends Controller
{
    public function store(Request $request)
    {
        $company = Company::create([
            'company_name' => $request->company_name,
            'owner_name'   => $request->owner_name,
            'email'        => $request->email,
            'phone'        => $request->phone,
        ]);

        // ✅ MAIL TO ADMIN (existing – untouched)
        Mail::raw(
            "New Company Registered 🚀\n\n".
            "Company Name: {$company->company_name}\n".
            "Owner Name: {$company->owner_name}\n".
            "Email: {$company->email}\n".
            "Phone: {$company->phone}",
            function ($message) {
                $message->to('posturcv56@gmail.com')
                        ->subject('New Company Registration');
            }
        );

        // ✅ NEW: MAIL TO COMPANY (confirmation)
        Mail::raw(
            "Hello {$company->owner_name},\n\n".
            "Your company '{$company->company_name}' has been registered successfully 🎉\n".
            "Our team will contact you soon.\n\n".
            "Regards,\nPosturCV Team",
            function ($message) use ($company) {
                $message->to($company->email)
                        ->subject('Company Registration Successful');
            }
        );

        // ✅ NEW: If request is AJAX → JSON response
        if ($request->ajax()) {
            return response()->json([
                'status'  => true,
                'message' => 'Company Registered Successfully!'
            ]);
        }

        // ✅ OLD FLOW preserved (normal submit)
        return back()->with('success', 'Company Registered Successfully! Admin notified.');
    }
}
