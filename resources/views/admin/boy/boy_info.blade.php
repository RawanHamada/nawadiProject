@extends('layouts.show_info')
@section('title', 'بيانات البنين')
@section('page_header', 'بيانات المسجلين من البنين')

@section('content')
    <thead class="table-dark">
        <tr>
            <th scope="col">الرقم</th>
            <th scope="col">الاسم</th>

            <th scope="col">رقم الجوال الأول </th>
            <th scope="col">رقم الجوال الثاني </th>
            <th scope="col"> العمليات </th>
            {{-- <th scope="col">صورة الطالب</th> --}}
        </tr>
    </thead>

    <tbody>
        @foreach ($boys as $boy)
            <tr>
                <td scope="row">{{ $boy->id }}</td>
                <td class="data" class="data">{{ $boy->name }}</td>
                <td class="data" class="data">{{ $boy->first_phone }}</td>
                <td class="data" class="data">{{ $boy->second_phone }}</td>
                <td class="data" class="data">
                    {{-- actions --}}
                    <ul  style="display: flex; justify-content: center;">

                        <li style="list-style: none; "
                        @if (Request::is('admin/boy/edit')) class="active" @endif>

                            <a style="margin-left: 5vh" href="{{ route('boy.edit', ['id' => $boy->id]) }}" class="btn btn-primary">
                                نقل
                            </a>

                        </li>

                        <li style="list-style: none" @if (Request::is('admin/boy/show')) class="active" @endif>

                            <a href="{{ route('boy.show', ['id' => $boy->id]) }}" class="btn btn-primary">
                                عرض
                            </a>
                        </li>
                    </ul>
                    {{-- end actions --}}

                    {{-- <form action="
                    {{ route('boy.show', ['id' => $boy->id]) }}
                    "
                        method="post">
                        @csrf
                        <button class="show" type="submit">عرض</button>
                    </form> --}}
                </td>

            </tr>
        @endforeach
    </tbody>

@endsection
