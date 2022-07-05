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


        return view('admin.index');
    }
}
