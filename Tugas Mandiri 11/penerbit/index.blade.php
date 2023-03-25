@extends('adminlte::page')
@section('title','Data Penerbit')
@section('content_header')
<h1>Data Penerbit</h1>
@stop
@section('content')
{{-- Isi Konten Data Penerbit --}}
@php
$ar_judul = ['No','Nama','Alamat','Email','Website','Telepon','CP'];
$no = 1; @endphp
<!-- <a class="btn btn-primary" href="{{ route('buku.create') }}"
    role="button">Tambah</a>&nbsp;&nbsp;&nbsp; -->
<a class="btn btn-secondary btn-md" href="{{ '/home' }}" role="button">Back</a>
<a href="{{ url('penerbitpdf') }}" class="btn btn-info">
<i class="fas fa-file-pdf"></i></a>
<a class="btn btn-warning" href="{{ url('penerbitcsv') }}"
role="button"><i class="fas fa-file-excel"></i></a>
<form action="{{route('penerbit.index')}}" class="mt-3">
    <div class="input-group">
        <input name="keyword" type="text" value="{{Request::get('keyword')}}" class="form-control" />
        <div class="input-group-append">
            <input type="submit" value="Filter" class="btn btn-primary">
        </div>
    </div>
</form>
<table class="table table-striped">
    <thead>
        <tr>
            @foreach($ar_judul as $jdl)
            <th>{{ $jdl }}</th> @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach($ar_penerbit as $pnt)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $pnt->nama }}</td>
            <td>{{ $pnt->alamat }}</td>
            <td>{{ $pnt->email }}</td>
            <td>{{ $pnt->website }}</td>
            <td>{{ $pnt->telp }}</td>
            <td>{{ $pnt->cp }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $ar_penerbit->links() }} {{-- link untuk pagination --}}
@stop
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
<script>
    console.log('Hi!');
</script>