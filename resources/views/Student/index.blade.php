@extends('layouts.app')

@section('content')
    <h1 class="text-center my-4">Data Siswa Baru</h1>
        <div class="container">
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    <strong>{{ session('success') }}</strong>
                </div>
            @endif

            @if(session('update'))
                <div class="alert alert-primary" role="alert">
                    <strong>{{ session('update') }}</strong>
                </div>
            @endif

            @if(session('delete'))
                <div class="alert alert-danger" role="alert">
                    <strong>{{ session('delete') }}</strong>
                </div>
            @endif
                
            <div class="card">
                <div class="card-body">
                    <a href={{ url('students/create') }} class="btn btn-success mb-3">Tambah Data</a>
                    <a href={{ url('/cetak') }} class="btn btn-primary mb-3">Cetak Keseluruhan</a>

                    <div class="row mx-2">
                        <table class="table table-bordered text-center" id="Table">
                            <thead>
                                <tr>
                                    <th scope="col">No Daftar</th>
                                    <th scope="col">Nama Lengkap</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Alamat Lengkap</th>
                                    <th scope="col">Agama</th>
                                    <th scope="col">Asal SMP</th>
                                    <th scope="col">Jurusan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ( $data as $datas)
                                <tr>
                                    <th scope="row">{{ $datas->no }}</th>
                                    <td>{{ $datas->name }}</td>
                                    <td>{{ $datas->gender}}</td>
                                    <td>{{ $datas->address}}</td>
                                    <td>{{ $datas->religion}}</td>
                                    <td>{{ $datas->school}}</td>
                                    <td>{{ $datas->major}}</td>
                                    <td>
                                        <a href="{{ url('/students/edit/'.$datas->id) }}" class="btn btn-primary">Edit</a>
                                        <a class="btn btn-danger" onclick="return confirm ('Apakah yakin data akan di hapus?')" href="{{  url('students/delete/'.$datas->id) }}"> Delete</a>
                                        <a href={{ url('exportpdf/'.$datas->id) }} class="btn btn-warning" target="_black">Cetak</a>    
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    
@endsection