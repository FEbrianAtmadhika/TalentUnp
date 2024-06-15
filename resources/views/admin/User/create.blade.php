@extends('admin.layout.app')

@section('heading', 'User Create')
    
@section('main_content')
<form action="{{ route('admin_user_store') }}" method="post" enctype="multipart/form-data">
    @csrf
    .<div class="container">
        <div class="card p-sm-5">
            <form class="row g-3">
                <div class="mb-3">
                    <label for="" class="form-label">Nama Mahasiswa</label>
                    <input type="text" class="form-control" id="Name" name="name">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="Email" name="email" placeholder="enter here"  >
                </div>
               <div class="mb-3">
                      <label for="" class="form-label">Password</label>
                      <input type="password" class="form-control" name="password" id="password" placeholder="enter here">
                </div>    
                <div class="mb-3">
                    <label for="" class="form-label">Retype Password</label>
                    <input type="password" class="form-control" name="password_confirmation" id="password" placeholder="enter here">
                </div>
                <button type="submit" class="btn btn-primary w-25 ">Submit</button>
            </form>
        </div>
    </div>
</form>
@endsection