<?php

namespace App\Exports;

use App\Models\Boy;

use Maatwebsite\Excel\Concerns\FromCollection;
// use Maatwebsite\Excel\Concerns\WithHeadings;

class BoyExport implements FromCollection
// , WithHeadings
{
    // public function headings():array{
    //     return[
    //         'Id',
    //         'Name'
    //     ];
    // }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Boy::all();
        // return collect(Boy::getBoy());
    }
}
