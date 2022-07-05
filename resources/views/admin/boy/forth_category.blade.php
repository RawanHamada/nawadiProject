@extends('layouts.info_category')
@section('title', 'بيانات الذكور')
@section('page_header', 'بيانات المسجلين من البنين')
{{-- @foreach ($ages as $age) --}}
    @section('sub_header', $ages[3]->age_group )


    @section('content')
        <tbody>
            @foreach ($ages[3]->boys as $boy)
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
    @endsection
{{-- @endforeach --}}
