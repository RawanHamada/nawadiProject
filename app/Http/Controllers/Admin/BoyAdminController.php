<?php

namespace App\Http\Controllers\Admin;
use App\Models\Boy;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Age;
use App\Exports\BoyExport;
use Maatwebsite\Excel\Facades\Excel;


// use Excel;

class BoyAdminController extends Controller
{
    public function index()
    {
        // $age = Age::all();
        // $boys = Boy::where('age_id', "=" , $age->id )->first();
        // $boys = Boy::with(['age'])->get();
        $boys = Boy::paginate(4);
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
        $ages =Age::all();
        $ageAll = Age::with(['boys'])->get();
    //   $boy_id = Boy::where('age_id', "=" , $ageAll[$id] )->first();
    //   $age_id = Age::where('id', "=" , $ages[$boy->age_id] )->first();

        // dd($age_id);
        return view('admin.boy.edit',compact('boy','ages','ageAll'));

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $boy = Boy::findOrfail($id);
        $boy->age_id =$request->current_age;
        $boy->old_age_id =$request-> age_old;
        $boy->save();

        return redirect()->route('boy.info');

    }

    public function export(){

        return Excel::download(new BoyExport, 'boylist.xlsx');

    }


}
