<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class ProfessionalController extends Controller
{
    public function index()
    {
        $professions = [
            'Engineer','Doctor','Lawyer','Teacher',
            'Designer','Developer','Accountant'
        ];

        return view('professionals.index', compact('professions'));
    }

    public function form($profession)
    {
        return view('professionals.form', compact('profession'));
    }

    public function generatePdf(Request $request)
    {
        $data = $request->all();

        $pdf = PDF::loadView('professionals.pdf', compact('data'));

        return $pdf->stream('professional_form.pdf'); // open in browser
    }
}
