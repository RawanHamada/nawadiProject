<?php

namespace App\Http\Controllers\Boy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BoyController extends Controller
{
    public function index()
    {
        $boys = DB::table('boys')->get();

        return view('boy.index',compact('boys'));
    }
    public function create()
    {
        return view('boy.second_register');
    }
}
