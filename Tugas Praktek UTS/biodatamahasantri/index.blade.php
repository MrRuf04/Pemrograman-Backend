@extends('adminlte::page')
@section('title', 'Data Pegawai')
@section('content_header')
<h1>Data Biodata Mahasantri</h1>
@stop
@section('content') {{-- Isi Konten Data Biodata Mahasantri --}}
@php
$ar_judul = ['No','NIM','Nama','Jurusan','Alamat','Kota','Provinsi','Email'];
$no = 1;
@endphp
<a class="btn btn-primary btn-md"
href="{{ route('biodatamahasantri.create') }}" role="button">Tambah Mahasantri</a><br/><br/>
<table class="table table-striped">
<thead>
<tr>
@foreach($ar_judul as $jdl)
<th>{{ $jdl }}</th>
@endforeach
</tr>
</thead>
<tbody>
@foreach($ar_biodatamahasantri as $bio)
<tr>
<td>{{ $no++ }}</td>
<td>{{ $bio->nim }}</td>
<td>{{ $bio->nama }}</td>
<td>{{ $bio->jurusan }}</td>
<td>{{ $bio->alamat }}</td>
<td>{{ $bio->kota }}</td>
<td>{{ $bio->provinsi }}</td>
<td>{{ $bio->email }}</td>
</tr>
@endforeach
</tbody>
</table>
@stop