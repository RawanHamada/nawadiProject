@extends('layouts.boy_register')
@section('page_header', 'تسجيل البنين')
@section('btn', 'التالي')

@section('content')
    <form id="form" class="form" action="{{ route('boy.sec_register') }}">
        <div class="form-control">
            <label for="username">الاسم</label>
            <input type="text" placeholder="ادخل الاسم" id="username" required />
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
        <div class="form-control">
            <label for="text">السجل المدني</label>
            <input type="text" placeholder="السجل" id="text" required />
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
        <div class="form-control">
            <label for="phone_number">جوال ولي الأمر</label>
            <input type="text" placeholder="أدخل رقم الجوال" id="phone_number" required />
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
        <div class="form-control">
            <label for="sec_phone_number">رقم جوال اخر</label>
            <input type="text" placeholder="أدخل رقم جوال اخر" id="sec_phone_number" />
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
        <div class="form-control">
            <label for="student_class">الصف الدراسي المنتقل له الطالب</label>
            <input type="text" placeholder="أدخل الصف" id="student_class" required />
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
        <div class="form-control">
            <label for="school">المدرسة التي يدرس فيها الطالب</label>
            <input type="text" placeholder="أدخل اسم المدرسة" id="school" required />
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>

    @endsection
