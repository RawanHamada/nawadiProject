<?php

namespace App\Http\Controllers\Boy;
use App\Http\Controllers\Auth;
use App\Models\Club;
use App\Models\City;
use App\Models\Age;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Auth;



class OptionBoyController extends Controller
{
    public function index(Request $request)
    {
        // $boy = $request->session()->get('boy');
        $boy = session('boy');

        // $boy =  Auth::guard(session('boy'));
        return view('boy.success_register', compact('boy'));

        // $city = Club::get();
    }
    public function create()
    {
        $boy = DB::table('boys')->get();
        $clubs = Club::get();
        $cities = City::all();
        return view('boy.option_register',compact('boy','clubs','cities'));
    }

    public function store(Request $request)
    {

            $validator =$request->validate([
                'city_name' => ['required'],
                'club_name' => ['required'],

            ]);

            // if($validator->fails()){
            //     dd($validator);
            // }

        //     Session::put('city',  $request->city_name);
        //     Session::put('club',  $request->club_name);

        //     Club::create([
        //     'club_name' => $request->club_name,
        //     'city_name' => $request->city_name,

        // ]);
        $ages =Age::all();

        return view('auth.register',compact('ages'));




        // redirect()->route('auth.register')

        // return redirect()->route('boy.index');

    }
}
