<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeSearchController extends Controller
{
    // HOME PAGE LOAD
    public function index()
    {
        return view('home', [
            'professions'   => User::select('profession')->whereNotNull('profession')->distinct()->get(),
            'countries'     => User::select('country')->whereNotNull('country')->distinct()->get(),
            'nationalities' => User::select('nationality')->whereNotNull('nationality')->distinct()->get(),
        ]);
    }

    // AJAX SEARCH
    public function search(Request $request)
    {
        $query = User::query();

        if ($request->profession) {
            $query->where('profession', 'LIKE', '%' . $request->profession . '%');
        }

        if ($request->country) {
            $query->where('country', 'LIKE', '%' . $request->country . '%');
        }

        if ($request->nationality) {
            $query->where('nationality', 'LIKE', '%' . $request->nationality . '%');
        }

        return response()->json($query->get());
    }
}
