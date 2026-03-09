<?php

namespace App\Http\Controllers;
use App\Models\CandidateView;
use Illuminate\Support\Facades\DB;
use App\Models\Candidate;
use App\Models\CandidateContact;

use Illuminate\Http\Request;
use App\Models\Profession;
use App\Models\Location;
use App\Models\Service;
use App\Models\Nationality;
use Illuminate\Support\Facades\File; 


class AdminController extends Controller
{
   /* DASHBOARD */


public function dashboard()
{
    $latestContacts = CandidateContact::with('candidate')
        ->latest()
        ->take(5)
        ->get();

    $candidates = Candidate::latest()->get();

    return view('admin.dashboard', [
        'professions'   => \App\Models\Profession::all(),
        'locations'     => \App\Models\Location::all(),
        'services'      => \App\Models\Service::all(),
        'nationalities' => \App\Models\Nationality::all(),
        'latestContacts'=> $latestContacts,
        'candidates'    => $candidates,
    ]);
}


    /* STORE */
   public function store(Request $r, $type)
{
    $r->validate(['name'=>'required']);

    if($type=='profession'){
        \DB::table('professions')->insert(['name'=>$r->name]);
    }

    if($type=='location'){
        \DB::table('locations')->insert(['name'=>$r->name]);
    }

    if($type=='service'){
        \DB::table('services')->insert(['name'=>$r->name]);
    }

    if($type=='nationality'){
        \DB::table('nationalities')->insert(['name'=>$r->name]);
    }

    return back();
}


    /* DELETE */
    public function delete($type, $id)
    {
        if($type=='profession') Profession::findOrFail($id)->delete();
        if($type=='location') Location::findOrFail($id)->delete();
        if($type=='service') Service::findOrFail($id)->delete();
        if($type=='nationality') Nationality::findOrFail($id)->delete();

        return back();
    }
public function candidateViews()
{
    // For TABLE (all records)
    $views = CandidateView::latest()->get();

    // For GRAPH (date-wise total views)
    $chartData = DB::table('candidate_views')
        ->select(DB::raw('DATE(created_at) as date'), DB::raw('COUNT(*) as total'))
        ->groupBy('date')
        ->orderBy('date','ASC')
        ->get();

    return view('admin.candidate_views', compact('views','chartData'));
}
public function deleteCandidate($id)
{
    Candidate::findOrFail($id)->delete();
    return back()->with('success','Candidate deleted successfully');
}
public function allCandidates(){
    $candidates = Candidate::latest()->get();
    return view('admin.candidates', compact('candidates'));
}

public function manageCandidates(){
    $candidates = Candidate::latest()->get();
    return view('admin.manage_candidates', compact('candidates'));
}







    // ===============================
    // DELETE CANDIDATE PHOTO
    // ===============================
    public function deletePhoto($id)
    {
        $candidate = Candidate::findOrFail($id);

        if ($candidate->photo && File::exists(public_path($candidate->photo))) {
            File::delete(public_path($candidate->photo));
        }

        $candidate->photo = null;
        $candidate->save();

        return back()->with('success', 'Photo deleted successfully');
    }

    // ===============================
    // DELETE CANDIDATE RESUME
    // ===============================
    public function deleteResume($id)
    {
        $candidate = Candidate::findOrFail($id);

        if ($candidate->resume && File::exists(public_path('resumes/'.$candidate->resume))) {
            File::delete(public_path('resumes/'.$candidate->resume));
        }

        $candidate->resume = null;
        $candidate->save();

        return back()->with('success', 'Resume deleted successfully');
    }



}
