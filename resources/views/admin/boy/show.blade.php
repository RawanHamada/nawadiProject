@extends('layouts.show_info')
@section('title', 'بيانات الطالب')
{{-- @section('page_header', 'بيانات المسجلين من الذكور') --}}

@section('content')
    <thead class="table-dark">
        <tr>
            <th scope="col">الرقم</th>
            <th scope="col">الاسم</th>
            <th scope="col">صورة الطالب</th>
            <th scope="col"> السجل المدني  </th>
            <th scope="col">رقم الجوال الأول </th>
            <th scope="col">رقم الجوال الثاني  </th>
            <th scope="col">الصف الدراسي  </th>
            <th scope="col">المدرسة</th>
            <th scope="col">الحي</th>
            <th scope="col">الفئـــــــــة العمريــــــة</th>
            <th scope="col">الرغبة في النقل </th>
            <th scope="col">النادي</th>
            <th scope="col">المدينة</th>
            <th scope="col"> رقم تسجيل الموظف</th>

        </tr>
    </thead>

    <tbody>
        {{-- @foreach ($boys as $boy) --}}
        <tr>
            <td scope="row">{{$boy->id}}</td>
            <td class="data" class="data">{{$boy->name}}</td>
            <td class="data" class="data">
                <img class="card-img-top img-fluid" src="{{ asset('photo') . '/' . $boy->photo }}" alt="image">
            </td>
            <td class="data" class="data">{{$boy->civil_record}}</td>
            <td class="data" class="data">{{$boy->first_phone}}</td>
            <td class="data" class="data">{{$boy->second_phone}}</td>
            <td class="data" class="data">{{$boy->class}}</td>
            <td class="data" class="data">{{$boy->school}}</td>
            <td class="data" class="data">{{$boy->neighborhood}}</td>
            <td class="data" class="data">{{$boy->age->age_group}}</td>
            <td class="data" class="data">
                @if ($boy->move == 'yes')
                    نعم
                @else
                لا
                @endif
            </td>
            <td class="data" class="data">
                {{-- {{$boy->club->club_name}} --}}
            </td>
            <td class="data" class="data"></td>
            <td class="data" class="data">{{$boy->employee}}</td>

        </tr>
        {{-- @endforeach --}}
    </tbody>
@endsection
