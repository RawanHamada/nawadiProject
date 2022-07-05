<?php

namespace App\Http\Controllers\Admin;
use App\Models\Boy;

use App\Http\Controllers\Controller;
use App\Models\Age;
use Illuminate\Http\Request;

class BoyAdminController extends Controller
{
    public function index()
    {
        // $age = Age::all();
        // $boys = Boy::where('age_id', "=" , $age->id )->first();
        // $boys = Boy::with(['age'])->get();
        $boys = Boy::all();
        return view('admin.boy.boy_info',compact('boys'));
    }

    public function show($id){
        $boy = Boy::findOrFail($id);

        return view('admin.boy.show',compact('boy'));

    }

    public function first(){
        $ages = Age::with(['boys'])->get();
        return view('admin.boy.first_category',compact('ages'));
    }
    public function second(){
        $ages = Age::with(['boys'])->get();
        return view('admin.boy.second_category',compact('ages'));
    }
    public function third(){
        $ages = Age::with(['boys'])->get();
        return view('admin.boy.third_category',compact('ages'));
    }
    public function forth(){
        $ages = Age::with(['boys'])->get();
        // dd($ages[1]->id);
        // $boy = Boy::where('age_id', "=" , $ages->id )->first();
        return view('admin.boy.forth_category',compact('ages'));

    }

    public function edit($id)
    {
        // $boy = Auth::guard(session('guardName'))->user($id);
        $boy = Boy::findOrFail($id);

        return view('admin.boy.edit',compact('boy'));

    }


}
