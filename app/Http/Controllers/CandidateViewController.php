<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;
use App\Models\CandidateView;
use Illuminate\Support\Facades\Mail;

class CandidateViewController extends Controller
{
    public function form($id)
    {
        $candidate = Candidate::findOrFail($id);
        return view('candidate_view_form', compact('candidate'));
    }

    public function submit(Request $request)
{
    $request->validate([
        'company_name'=>'required',
        'email'=>'required|email',
        'phone'=>'required',
        'candidate_id'=>'required'
    ]);

    // save view
    CandidateView::create([
        'company_name' => $request->company_name,
        'email' => $request->email,
        'phone' => $request->phone,
        'candidate_id' => $request->candidate_id,
        'created_at' => now('Asia/Kolkata'),
        'updated_at' => now('Asia/Kolkata'),
    ]);

    // get candidate name
    $candidate = \App\Models\Candidate::find($request->candidate_id);
    $candidateName = $candidate ? $candidate->name : 'N/A';

    // send mail
    Mail::raw(
        "A company has viewed a candidate profile.\n\n".
        "Company Name: {$request->company_name}\n".
        "Candidate ID: {$request->candidate_id}\n".
        "Candidate Name: {$candidateName}\n".
        "Company Email: {$request->email}\n".
        "Phone: {$request->phone}\n".
        "Date: ". now('Asia/Kolkata')->format('d M Y, h:i A'),
        function($msg){
            $msg->to('priyankadhusiya189@gmail.com')
                ->subject('Candidate Profile Viewed');
        }
    );

    return back()->with('success','Message sent to admin');
}

}
