@extends('layouts.app')

@section('content')

<h1 class="text-center my-4">Edit Data Siswa Baru</h1>
<div class="container">
    <div class="card">
        <div class="card-body">
            <form action="{{ url('/students/update/'.$data->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mt-3">
                  <label for="no">No Registrasi</label>
                  <input type="number" name="no" id="no" class="form-control" placeholder="Masukkan No registrasi" value="{{ $data->no }}">
                </div>

                <div class="form-group mt-3">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan Nama peserta" value="{{ $data->name}}">
                </div>
                
                <div class="row mt-3">
                    <div class="form-group col-12">
                      <label for="keterangan" class="form-label">Jenis Kelamin</label>
                    </div>
                    <div class="form-check form-check-inline ml-3">
                      <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="laki-laki" {{ ($data->gender == "laki-laki") ? 'checked': ''}}>
                      <label class="form-check-label" for="inlineRadio1">Laki - Laki </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="perempuan" {{ ($data->gender == "perempuan") ? 'checked': ''}}>
                      <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                    </div>
                </div>

                <div class="form-group mt-3">
                    <label for="address">Alamat</label>
                    <textarea type="text" name="address" id="address" class="form-control" placeholder="Masukkan Alamat peserta">{{ $data->address }}</textarea>
                </div>

                <div class="form-group">
                    <label for="religion">Agama</label>
                    <select class="form-control" name="religion" id="religion">
                      <option selected>{{ $data->religion }}</option>
                          <option value="Islam">Islam</option>
                          <option value="Kristen">Kristen</option>
                          <option value="Katolik">Katolik</option>
                          <option value="Hindu">Hindu</option>
                          <option value="Budha">Budha</option>
                          <option value="Konghuchu ">Konghuchu</option>
                    </select>
                  </div>

                <div class="form-group mt-3">
                    <label for="school">Asal Sekolah</label>
                    <input type="text" name="school" id="school" class="form-control" placeholder="Masukkan Asal Sekolah peserta" value="{{ $data->school }}">
                </div>

                <div class="form-group">
                  <label for="major">Jurusan</label>
                  <select class="form-control" name="major" id="major">
                    <option selected>{{ $data->major }}</option>
                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                        <option value="Tataboga">Tataboga</option>
                        <option value="Multimedia">Multimedia</option>
                        <option value="Otomatisasi Tatakelola dan Perkantoran">Otomatisasi Tatakelola dan Perkantoran</option>
                        <option value="Bisnis Daring Pemasaran">Bisnis Daring Pemasaran</option>
                        <option value="Teknik Jaringan Komputer ">Teknik Jaringan Komputer </option>
                        <option value="Perhotelan">Perhotelan</option>
                  </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
    
            </form>

        </div>
    </div>
</div>

@endsection