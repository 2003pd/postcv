<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;
use App\Models\Candidate;
use App\Models\CandidateContact;



class CandidateController extends Controller
{
    // ===== SHOW PROFESSIONALS + SEARCH/FILTER =====
    public function professionals(Request $request)
    {
        $query = Candidate::query();

        // search by name
        if ($request->name) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        // filter by country
        if ($request->country) {
            $query->where('country', $request->country);
        }

        // filter by profession
        if ($request->profession) {
            $query->where('profession', $request->profession);
        }

        $candidates = $query->latest()->get();

        // dropdown data
        $countries = Candidate::select('country')->distinct()->pluck('country');
        $professions = Candidate::select('profession')->distinct()->pluck('profession');

        return view('professionals', compact('candidates','countries','professions'));
    }

    // ===== STORE FORM DATA =====
  public function store(Request $request)
{
       $data = $request->validate([
        'name'        => 'required|string|max:255',
        'email'       => 'required|email|max:255',
        'profession'  => 'required|string|max:255',
        'expertise'   => 'required|string|max:255',
        'country'     => 'required|string|max:100',
        'nationality' => 'required|string|max:100',
        'gender' => 'required|in:male,female,other',

        'photo'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'resume'      => 'nullable|mimes:pdf,doc,docx|max:4096',
    ]);

    
    if ($request->hasFile('photo')) {
        $photoName = time().'_'.uniqid().'.'.$request->photo->getClientOriginalExtension();
        $request->photo->move(public_path('photos'), $photoName);
        $data['photo'] = 'photos/'.$photoName;
    }

       
    if ($request->hasFile('resume')) {
        $resumeName = time().'_resume.'.$request->resume->getClientOriginalExtension();
        $request->resume->move(public_path('resumes'), $resumeName);
        $data['resume'] = $resumeName; // only filename
    }



    Candidate::create($data);

    return redirect()->back()->with('success', ' Apply ho successfully!');

}



public function contactForm($id)
{
    $candidate = Candidate::findOrFail($id);
    return view('contact_candidate', compact('candidate'));
}


public function sendMessage(Request $request)
{
    $request->validate([
        'company_name' => 'required',
        'company_email' => 'required|email',
        'candidate_email' => 'required|email',
    ]);

    $msg = "
Company Name: {$request->company_name}
Company Email: {$request->company_email}

This company viewed your resume and wants to contact you.
";

    Mail::raw($msg, function ($mail) use ($request) {
        $mail->to($request->candidate_email)
             ->subject('A company viewed your resume');
    });

    return back()->with('success','Message sent to candidate successfully!');
}
 public function form($id)
    {
        $candidate = Candidate::findOrFail($id);
        return view('candidate_view_form', compact('candidate'));
    }



    


public function submit(Request $request)
{
    // ✅ validation
    $request->validate([
        'candidate_id' => 'required|exists:candidates,id',
        'company_name' => 'required|string|max:255',
        'email'        => 'required|email',
        'phone'        => 'required'
    ]);

    // ✅ candidate fetch
    $candidate = Candidate::findOrFail($request->candidate_id);

    // ✅ SAVE TO DB
    CandidateContact::create([
        'candidate_id' => $candidate->id,
        'company_name' => $request->company_name,
        'email'        => $request->email,
        'phone'        => $request->phone,
    ]);

// ✅ optional mail (clean headers + visible info in body)
Mail::raw(
    "📩 New Contact Request\n\n".
    "Company Name: {$request->company_name}\n".
    "Company Email: {$request->email}\n".
    "Company Phone: {$request->phone}\n\n".
    "Candidate Name: {$candidate->name}\n".
    "Candidate Profession: {$candidate->profession}\n".
    "Candidate Country: {$candidate->country}\n\n".
    "— PosturCV System",
    function ($m) {
        $m->from('posturcv56@gmail.com', 'PosturCV');
        $m->to('posturcv56@gmail.com');
        $m->subject('PosturCV – New Contact Request');
    }
);



    // ✅ resume button visible
    return back()->with([
        'success' => 'Request sent successfully!',
        'showResume' => true,
        'candidateId' => $candidate->id
    ]);
}







// public function openResume($id)
// {
//     $candidate = Candidate::findOrFail($id);

//     $path = public_path('resumes/'.$candidate->resume);

//     abort_if(!file_exists($path), 404);

//     return response()->file($path);
// }
public function openResume($id)
{
    $candidate = Candidate::whereNotNull('resume')->findOrFail($id);

    $path = public_path('resumes/' . $candidate->resume);

    abort_unless(file_exists($path), 404);

    return response()->file($path);
}






}
