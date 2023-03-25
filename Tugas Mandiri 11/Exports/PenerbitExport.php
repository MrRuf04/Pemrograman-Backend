<?php

namespace App\Exports;

use App\Models\Penerbit;
use Maatwebsite\Excel\Concerns\FromCollection;
use DB;

class PenerbitExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        DB::table('penerbit')->get();
        return Penerbit::all();
    }
}
