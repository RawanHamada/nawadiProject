@extends('layouts.register')
@section('page_header', 'تسجيل البنين')
@section('btn', 'تسجيل')
@section('content')
    <form id="form" class="form" action="{{ route('boy.info') }}">
        <div class="form-control">

            <label for="neighbor">الحي</label>
            <input type="text" placeholder="أدخل اسم الحي" id="neighbor" required />
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>

        <div class="age">
            <label for="text">الفئة العمرية</label>
            <select class="form-control">
                <option selected>اختر</option>
                <option>براعم من 7 سنوات الى 9 سنوات</option>
                <option>اشبال من 7 سنوات الى 12 سنة</option>
                <option>فتيان من 12 سنة الى 15 سنة</option>
                <option>شباب من 16 سنة فأكثر</option>
            </select>
        </div>

        <div>
            <label>هل ترغب في نقل:</label>
            <section class="radio">
                <label for="yes">نعم</label>
                <input type="radio" name="radio1" id="yes" />

                <label for="no">لا</label>
                <input type="radio" name="radio1" id="no">

            </section>

        </div>

        <div class="form-control">
            <div class="input-group-prepend">
                <span class="input-group-text">ارفاق صورة للطالب:</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile01">
            </div>
        </div>

        <div class="form-control">
            <label for="neighbor">رقم تسجيل الموظف</label>
            <input type="text" placeholder="أدخل رقم الموظف" id="neighbor" required />
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>

        <div class="">
            <label>تم قراءة الشروط والتعليمات</label>

            <section class="reading">
                <label for="info">نعم</label>
                <input type="radio" id="info" required />
            </section>

            <!-- <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small> -->
        </div>

        <div class="conditions">
            <h4>الشروط والتعليمات:</h4>
            <section>
                <ul>
                    <li>لا يحق لي استرجاع رسوم تسجيل ابني بعد مضي ثلاثة أيام من ممارسة النشاط.</li>
                    <li>جميع بيانات ابني المدونة في هذه الاستمارة صحيحة</li>
                </ul>
            </section>
        </div>

    @endsection
