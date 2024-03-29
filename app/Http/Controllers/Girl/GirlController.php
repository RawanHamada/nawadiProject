<?php

namespace App\Http\Controllers\Girl;
use Illuminate\Support\Facades\DB;
use App\Models\Club;
use App\Models\City;
use App\Models\Age;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GirlController extends Controller
{
    public function create($type)
    {

        // $ages = DB::table('ages')->get();
        // $girl = DB::table('girls')->get();
        $clubs = Club::get();
        $cities = City::all();
        return view('girl.option_register',compact('clubs','cities','type'));

        // return view('girl.create', compact('ages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $validator =$request->validate([
                'city_name' => ['required'],
                'club_name' => ['required'],

            ]);

        $ages =Age::all();
        $type = $request->type;
        return view('auth.register',compact('ages','type'));



    }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => ['required'],
    //         'description' => ['required', 'min:20', 'max:250'],
    //         'city_id' => ['required'],
    //         'location' => ['required'],
    //         'type' => ['required'],
    //         'price' => ['required', 'numeric'],
    //         'gallery' => ['nullable'],
    //         'features' => ['required'],
    //     ]);

    //     // Uploads Multi-image For image folder
    //     $img_path = null;

    //     if ($request->hasFile('photo')) {
    //         $files = $request->file('photo'); // Uploaded File Objects

    //             $img_path = $files->store('/', [
    //                 'disk' => 'photo',
    //             ]);

    //             $image = $img_path;


    //     }else{
    //         $img_path = null;
    //     }


    //     $girl = Girl::create([
    //         'name' => $request->name,
    //         'description' => $request->description,
    //         'location' =>$request->location,
    //         'city_id' => $request->city_id,
    //         'type' => $request->type,
    //         'price' => $request->price,
    //         'rating' => 0,
    //         'gallery' => $image,
    //         'features' => $request->features,
    //         'status' => 'Available',
    //         'owner_id' => Auth::guard(session('guardName'))->user()->id,
    //     ]);


    //     return redirect()->route('home');

    // }

}
