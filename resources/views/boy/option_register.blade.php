@extends('layouts.register')
@section('page_header', 'تسجيل البنين')
@section('btn', 'التالي')
@section('content')
    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
       {{-- {{dd($club->city_name)}} --}}

    <form id="form" class="form" action="{{ route('boy.store') }}" method="POST">
        @csrf
        <input type="hidden" name="type" value="{{$type}}">
        <div class="age">
            <label for="text">المدينة</label>
            <select name="city_name" class="form-control">
                <option selected>اختر</option>
                @foreach ($cities as $city)
                <option value="
                {{$city->id}}
                ">
                    {{$city->city_name}}
                </option>
                @endforeach
            </select>
        </div>
        <div class="age">
            <label for="text">الاندية المتاحة</label>
            <select name="club_name" class="form-control">
                <option selected>اختر</option>
                @foreach ($clubs as $club)
                <option value="{{$club->club_name}}">{{$club->club_name}}</option>
                @endforeach
            </select>
        </div>

        {{-- <button type="submit">
            التالي
        </button>
    </form> --}}

@endsection
