<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
use App\Models\Penerbit;
use App\Exports\PenerbitExport;
use Maatwebsite\Excel\Facades\Excel;

class PenerbitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //dapatkan seluruh data pengarang dengan query builder
        $keyword = $request->get('keyword');

        $ar_penerbit = DB::table('penerbit')
            ->where('nama', 'like', '%' . $keyword . '%')
            ->orWhere('alamat', 'like', '%' . $keyword . '%')
            ->orWhere('email', 'like', '%' . $keyword . '%')
            ->orWhere('website', 'like', '%' . $keyword . '%')
            ->orWhere('telp', 'like', '%' . $keyword . '%')
            ->orWhere('cp', 'like', '%' . $keyword . '%')
            ->simplePaginate(5);
        return view('penerbit.index', compact('ar_penerbit', 'keyword'));
    }

    public function penerbitPDF()
    {
        $ar_penerbit = DB::table('penerbit')
            ->select('penerbit.*')
            ->get();
        $pdf = PDF::loadView('penerbit/penerbitPDF', ['ar_penerbit' => $ar_penerbit]);
        return $pdf->download('dataPenerbit.pdf');
    }

    public function penerbitcsv()
    {
        return Excel::download(new PenerbitExport, 'penerbit.csv');
    }


    public function headings(): array
    {
        return [
            'Nama', 'Alamat', 'Email', 'Website',
            'Telephone', 'CP'
        ];
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
