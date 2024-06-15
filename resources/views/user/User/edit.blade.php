@extends('user.layout.app')

@section('heading', 'User Edit Profile')

@section('main_content')
<form action="" method="post">
    @csrf
<div class="container">
    {{ $subtalent }}
    <div class="d-flex justify-content-between py-3">
        <div class="h4">Edit Mahasiswa</div>
        <div>
            <a href="" class="btn btn-primary">Back</a>
        </div>
    </div>
    <div class="card p-sm-5">
        <form class="row g-3">
            <div class="mb-3">
                <label for="Nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="Nama" value="{{ $data->name }}">
            </div>
            <div class="mb-3">
                <label for="Nama" class="form-label"> subtalent</label><br>
                @foreach ($talent as $item)

                <button class="custom-button"  type="button" data-bs-toggle="modal" data-bs-target="#myModal">{{ $item }}</button>
                @endforeach

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Photo</label>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile01">
                </div>
                </div>
            <div class="mb-3">
                <label for="NIM" class="form-label">@if($data->Professi == 'Mahasiswa')
                    NIM
                @else
                    NIP
                @endif</label>
                <input type="text" class="form-control" id="NP" value="{{ $data->Professi }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1", value="{{ $data->email }}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Nomor Handphone</label>
                <input type="text" class="form-control" id="no_telp" value="{{ $data->no_telp }}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" id="deskripsi" value="{{ $data->no_telp }}">
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
