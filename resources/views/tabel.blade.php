@extends('layouts.3')
@section('konten')
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<div  class="col-md-13">
  <table class="table table-bordered">
            <thead>
        <th>Id</th>
        <th>Nis</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Tempat Lahir</th>
        <th>Cita-Cita</th>
        <th>Tanggal lahir</th>
        <th>Hobi</th>
        <th>Foto</th>
            </thead>
            <tbody>
   @foreach ($c as $gg)
   <tr>
  <td>{{$gg -> id}}</td>
  <td>{{$gg -> nis}}</td>
  <td>{{$gg -> nama_siswa}}</td>
  <td>{{$gg -> alamat}}</td>
  <td>{{$gg -> tempat_lahir}}</td>
  <td>{{$gg -> cita_cita}}</td>
  <td>{{$gg -> tanggal_lahir}}</td>
  <td>{{$gg -> hobi}}</td>
    <td><img src="{{ asset('img/'.$gg->foto) }}" style="max-height: 120px;max-width: 150px;"></td>
</tr>
  @endforeach
            </tbody>
</tr>
</table>
</body>
</html>
@endsection