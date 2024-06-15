@extends('user.layout.app')

@section('heading', 'User Create Profile')

@section('main_content')

        <div class="container">
            <div class="h4 text-black">Fomulir Mahasiswa</div>
        </div>
    <div class="container p-5">
        <div class="card p-sm-5">
            {{ $data }}
            <form class="row g-3"  action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Mahasiswa</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Foto</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="photo" name="photo">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="NIM" class="form-label">NIM</label>
                    <input type="text" name="nim" id="nim" placeholder="Enter Nim" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat">
                </div>
                <div class="col-md-6">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" name="jurusan">
                </div>
                <div class="col-md-6">
                    <label for="tahunMasuk" class="form-label">Tahun Masuk</label>
                    <input type="text" class="form-control" id="tahun_masuk" name="tahun_masuk">
                </div>
                <div class="mb-3">
                    <label for="desk" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" aria-label="With textarea"></textarea>
                  </div>
                <div class="mb-3">
                    <label for="noHp" class="form-label">Nomor Handphone</label>
                    <input type="text" class="form-control" id="no_telp" name="no_telp">
                </div>
                <button type="submit" class="btn btn-primary w-25 ">Submit</button>
            </form>
        </div>
    </div>
@endsection
