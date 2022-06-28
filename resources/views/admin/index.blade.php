@extends('layouts.information')
@section('title', 'بيانات الذكور')
@section('page_header', 'بيانات المسجلين من الذكور')
@section('sub_header', 'فئة الأشبال')
@section('content')

    <tbody>
        @foreach ($boys as $boy)
            <tr>
                <td scope="row">اااا</td>
                <td class="data" class="data">ااااا</td>
                <td class="data" class="data"></td>
                <td class="data" class="data">
                    05989562566
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
@endsection
