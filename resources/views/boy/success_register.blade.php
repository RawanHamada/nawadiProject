@extends('layouts.register')
@section('page_header', 'تم التسجيل بنجاح')
@section('content')

<section style="display: flex; justify-content: center" class="success-sec">
    <h3 style="padding-left: 5vh">
        {{$boy_name}}
    </h3>
    <h3>
        {{-- {{
    where($increment=0)
    $boy_phone
    $increment++
}} --}}
</h3>
</section>
    <form action="{{ route('home') }}">
    <button style="float: left;color: #fff;background-color: rgb(44, 132, 214)" name="home">عودة للصفحة الرئيسية</button>
</form>

@endsection
