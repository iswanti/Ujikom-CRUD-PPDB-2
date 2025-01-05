<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran Siswa Baru</title>
</head>
<body>

<style>
h1{
    font-family: Arial, Helvetica, sans-serif;
    text-align: center;
}

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Data Siswa Baru</h1>

<table id="customers">
    <tr>
        <th>No Daftar</th>
        <th>Nama Lengkap</th>
        <th>Jenis Kelamin</th>
        <th>Alamat Lengkap</th>
        <th>Agama</th>
        <th>Asal SMP</th>
        <th>Jurusan</th>
    </tr>
    
    @foreach ( $data as $datas)
    <tr>
        <td>{{ $datas->no }}</td>
        <td>{{ $datas->name }}</td>
        <td>{{ $datas->gender }}</td>
        <td>{{ $datas->address}}</td>
        <td>{{ $datas->religion}}</td>
        <td>{{ $datas->school}}</td>
        <td>{{ $datas->major}}</td>
    </tr>
    @endforeach
</table>

</body>