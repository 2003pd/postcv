<?php

namespace App\Http\Controllers;
use App\Models\ContactInfo;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
        ]);

        ContactInfo::create($request->all());

        return back()->with('success','Message sent successfully!');
    }

    // ADMIN VIEW
    public function index()
    {
        $contacts = ContactInfo::latest()->get();
        return view('admin.contact_list', compact('contacts'));
    }
}
