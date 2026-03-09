<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Master;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function index($type){
        $data = Master::where('type',$type)->get();
        return view('admin.master.index', compact('data','type'));
    }

    public function store(Request $request){
        Master::create($request->only('type','name'));
        return back();
    }

    public function update(Request $request,$id){
        Master::find($id)->update($request->only('name'));
        return back();
    }

    public function delete($id){
        Master::find($id)->delete();
        return back();
    }
}
