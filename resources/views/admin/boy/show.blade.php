@extends('layouts.show_info')
@section('title', 'بيانات الطالب')
{{-- @section('page_header', 'بيانات المسجلين من الذكور') --}}

@section('content')
    <thead class="table-dark">
        <tr>
            <th scope="col">الرقم</th>
            <th scope="col">الاسم</th>
            <th scope="col"> السجل المدني  </th>
            <th scope="col">رقم الجوال الأول </th>
            <th scope="col">رقم الجوال الثاني  </th>
            <th scope="col">الصف الدراسي المنتقل له الطالب</th>
            <th scope="col">المدرسة</th>
            <th scope="col">الحي</th>
            <th scope="col">الفئة العمرية</th>
            <th scope="col">الرغبة في النقل </th>
            <th scope="col">صورة الطالب</th>
            <th scope="col"> رقم تسجيل الموظف</th>

        </tr>
    </thead>

    <tbody>
        {{-- @foreach ($boys as $boy) --}}
        <tr>
            <td scope="row">{{$boy->id}}</td>
            <td class="data" class="data"></td>
            <td class="data" class="data"></td>
            <td class="data" class="data"></td>
            <td class="data" class="data"></td>
            <td class="data" class="data"></td>
            <td class="data" class="data"></td>
            <td class="data" class="data"></td>
            <td class="data" class="data"></td>
            <td class="data" class="data"></td>
            <td class="data" class="data"></td>
            <td class="data" class="data"></td>

        </tr>
        {{-- @endforeach --}}
    </tbody>
@endsection
