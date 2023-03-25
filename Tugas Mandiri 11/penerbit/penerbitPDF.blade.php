@php
$no = 1;
$ar_judul = ['No','Nama','Alamat','Email','Website','Telephone','CP'];
@endphp
<h3 align="center">Daftar Penerbit</h3>
<table border="1" width="100%" cellspacing="0" align="center">
<thead>
<tr bgcolor="pink">
@foreach( $ar_judul as $jdl )
<th>{{ $jdl }}</th>
@endforeach
</tr>
</thead>
<tbody>
@foreach($ar_penerbit as $penerbit)
<tr>
<td>{{ $no++ }}</td><td>{{ $penerbit->nama }}</td><td>{{ $penerbit->alamat }}</td>
<td>{{ $penerbit->email }}</td> <td>{{ $penerbit->website }}</td> <td>{{ $penerbit->telp }}</td> <td>{{ $penerbit->cp }}</td>
</tr>
@endforeach
</tbody>
</table>