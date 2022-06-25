<?php

namespace App\Http\Controllers\Boy;
use App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Auth;



class OptionBoyController extends Controller
{
    // public function index($city)
    // {

        // return view('boy.',compact('city'));

        // $city = Club::get();
    // }
    public function create()
    {
        $boy = DB::table('boys')->get();
        return view('boy.option_register',compact('boy'));
    }

    public function store(Request $request)
    {
            $request->validate([
                'name' => ['required'],
                'city_name' => ['required'],

            ]);
            Session::put('city',  $request->city_name);
            Session::put('club',  $request->club_name);

        $boy = Boy::create([
            'name' => $request->club_name,
            'city_name' => $request->city_name,

        ]);

        return view('auth.register');




        // redirect()->route('auth.register')

        // return redirect()->route('boy.index');

    }
}
