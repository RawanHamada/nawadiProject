@extends('layouts.show_info')
@section('title', 'نقل البنين ')
    @section('content')
    <form  id="form" class="form" action="
    {{ route('boy.update',$boy->id) }}   " method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden"
        {{-- name="type" --}}
        name="_method" value="put">
        <div >
            <label style="margin-left: 50%" for="text">من</label>
            <select style="width: 20%; margin-right: 40%; height: 45px" name="age_old" class="form-control">
                {{-- <option selected>اختر</option> --}}
                {{-- @foreach ($ages as $age) --}}
                <option selected value="
                {{-- {{$ageAll[0]->id}} --}}
                {{$boy->age->id}}

                {{-- {{dd($ages->$boy)}} --}}
                ">
                {{$boy->age->age_group}}
                    {{-- {{$ageAll[0]->age_group}} --}}
                </option>
                {{-- @endforeach --}}
            </select>
        </div>
        <div >
            <label style="margin-left: 50%" for="text">الى </label>
            <select style="width: 20%; margin-right: 40% ;height: 45px" name="current_age" class="form-control">
                {{-- <option selected>اختر</option> --}}
                @foreach ($ageAll as $age)
                <option selected value="
                {{$age->id}}
                ">
                {{$age->age_group}}
            </option>
                @endforeach
            </select>
        </div>
        <button style="margin-left: 46%; padding:10px 40px" type="submit">
                نقل
            </button>


    @endsection
