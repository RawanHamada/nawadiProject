<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BoyAdminController extends Controller
{
    public function index()
    {
        // $age = Age::all();
        // $boys = Boy::where('age_id', "=" , $age->id )->first();
        $boys = Boy::with(['age'])->get();
        return view('admin.boy_info',compact('boys'));
    }

    public function first(){
        $boys = Boy::with(['age'])->get();
        return view('admin.first_category',compact('boys'));
    }
    public function second(){
        return view('admin.second_category',compact('boys'));
    }
    public function third(){

        return view('admin.third_category',compact('boys'));
    }
    public function forth(){

        return view('admin.forth_category',compact('boys'));

    }


}
