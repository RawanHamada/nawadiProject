<?php

namespace App\Http\Controllers\Admin;
use App\Models\Boy;
use App\Models\Age;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $age = Age::all();
        $boys = Boy::where('age_id', "=" , $age->id )->first();

        return view('admin.index',compact('boys'));
    }
}
