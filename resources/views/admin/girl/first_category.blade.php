@extends('layouts.info_category')
@section('title', 'بيانات الذكور')
@section('page_header', 'بيانات المسجلين من البنين')
@section('sub_header', 'من الأول حتى الثالث')


@section('content')
    @foreach ($ages as $age)
        <tbody>
            @foreach ($age->boys as $boy)
                <tr>
                    <td scope="row">{{ $boy->id }}</td>
                    <td class="data" class="data">{{ $boy->name }}</td>
                    <td class="data" class="data"></td>
                    <td class="data" class="data">

                    </td>
                    <td class="data" class="data"></td>
                    <td class="data" class="data"></td>
                    <td class="data" class="data"></td>
                    <td class="data" class="data"></td>
                    {{-- <td class="data" class="data">نعم</td>
                     <td class="data" class="data">
                        صورة
                    </td> --}}

                </tr>
            @endforeach
        </tbody>
    @endforeach
@endsection
