<?php

namespace App\Http\Controllers\Boy;
use App\Models\Boy;
use App\Models\Age;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BoyController extends Controller
{
    // public function index()
    // {
    //     $age = Age::all();
    //     // Auth::guard( session('guardName') )->user()->id;
    //     // $age_id = Age::where('')
    //     $boys = Boy::where('age_id', "=" , $age->id )->first();
    //     // $boys = DB::table('boys')->get();
    //     // $boys = Boy::get();

    //     return view('boy.index',compact('boys'));
    // }
    public function create()
    {
        return view('boy.index');
    }
}
