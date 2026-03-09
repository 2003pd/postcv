<?php

namespace App\Http\Controllers;

use App\Models\Master;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'professions'   => Master::where('type','profession')->get(),
            'locations'     => Master::where('type','location')->get(),
            'services'      => Master::where('type','service')->get(),
            'nationalities' => Master::where('type','nationality')->get(),
        ]);
    }
}
