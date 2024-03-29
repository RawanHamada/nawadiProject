@extends('layouts.register')
@section('page_header', 'تسجيل البنات')
@section('btn', 'تسجيل')

@section('content')
    <form id="form" class="form" action="{{ route('girl.store') }}" method="post">
        @csrf
        <div class="form-control">
            <label for="username">الاسم</label>
            <input type="text" name="name" placeholder="ادخل الاسم" id="username" required />
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
        <div class="form-control">
            <label for="text">السجل المدني</label>
            <input type="text" name="record" placeholder="السجل" id="text" required />
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
        <div class="form-control">
            <label for="phone_number">جوال ولي الأمر</label>
            <input type="text" name="f_phone" placeholder="أدخل رقم الجوال" id="phone_number" required />
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
        <div class="form-control">
            <label for="sec_phone_number">رقم جوال اخر</label>
            <input type="text" name="s_phone" placeholder="أدخل رقم جوال اخر" id="sec_phone_number" />
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
        <div class="form-control">
            <label for="student_class">الصف الدراسي المنتقل له الطالب</label>
            <input type="text" name="class" placeholder="أدخل الصف" id="student_class" required />
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
        <div class="form-control">
            <label for="school">المدرسة التي يدرس فيها الطالب</label>
            <input type="text" name="school" placeholder="أدخل اسم المدرسة" id="school" required />
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
        <div class="form-control">

            <label for="neighbor">الحي</label>
            <input type="text" name="neighbor" placeholder="أدخل اسم الحي" id="neighbor" required />
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>

        <div class="age">
            <label for="text">الفئة العمرية</label>
            <select name="age" class="form-control">
                <option selected>اختر الفئة العمرية</option>
                @foreach ($ages as $age)
                <option value="{{ $age->id }}">
                    {{ $age->age_group }}
                </option>
            @endforeach

            </select>
        </div>

        <div>
            <label>هل ترغب في نقل:</label>
            <section class="radio">
                <label for="yes">نعم</label>
                <input type="radio" name="move" id="yes" />

                <label for="no">لا</label>
                <input type="radio" name="move" id="no">

            </section>

        </div>

        <div class="form-control">
            <div class="input-group-prepend">
                <span class="input-group-text">ارفاق صورة للطالب:</span>
            </div>
            <div class="custom-file">
                <input name="photo" type="file" class="custom-file-input" id="inputGroupFile01">
            </div>
        </div>

        <div class="form-control">
            <label for="employee">رقم تسجيل الموظف</label>
            <input type="text" name="employee" placeholder="أدخل رقم الموظف" id="employee"  />
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>

        <div class="">
            <label>تم قراءة الشروط والتعليمات</label>

            <section class="reading">
                <label for="info">نعم</label>
                <input type="radio" name="condition" id="info" required />
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
