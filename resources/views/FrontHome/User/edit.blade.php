@extends('FrontHome.layout.app')

@section('heading', 'User Edit Profile')

@section('main_content')
<form action="{{ route('user_update') }}" method="post" enctype="multipart/form-data">
    @csrf
<div class="container">
    <div class="d-flex justify-content-between py-3">
        <div class="h4">Edit Mahasiswa</div>
        <div>
            <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
        </div>
    </div>
    <div class="card p-sm-5">
        <form class="row g-3">
            <div class="mb-3">
                <label for="Nama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" value="{{ $data->name }}">
                @error('nama')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Photo</label>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" name="photo" >
                </div>
                @error('photo')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">CV</label>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" name="cv">
                </div>
                @error('cv')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>
            <div class="mb-3">
                <div class="mb-3">
                    <label for="NIM" class="form-label">@if($data->Professi == 'Mahasiswa')
                        NIM
                    @else
                        NIP
                    @endif</label>
                    <input type="text" class="form-control" name="NP" value="{{ $data->np }}">
                    @error('NP')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email", value="{{ $data->email }}">
                    @error('email')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Nomor Handphone</label>
                    <input type="text" class="form-control" name="no_telp" value="{{ $data->no_telp }}">
                    @error('no_telp')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi" value="{{ $data->no_telp }}">
                    @error('deskripsi')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>
            <button type="submit" class="btn btn-outline-primary w-25 ">update</button>
        </form>

    </div>
</div>
</form>

<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal content -->
      </div>
    </div>
  </div>
@endsection
