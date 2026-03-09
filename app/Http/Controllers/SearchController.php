<?php

namespace App\Http\Controllers;

use App\Models\Professional;
use App\Models\Master;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = Professional::query();

        if ($request->profession) {
            $query->where('profession_id', $request->profession);
        }

        if ($request->location) {
            $query->where('location_id', $request->location);
        }

        if ($request->service) {
            $query->where('service_id', $request->service);
        }

        if ($request->nationality) {
            $query->where('nationality_id', $request->nationality);
        }

        $professionals = $query->get();

        // profession cards ke liye (agar same page pe chahiye)
        $professions = Master::where('type','profession')->get();

        return view('search_result', compact('professionals','professions'));
    }
}
