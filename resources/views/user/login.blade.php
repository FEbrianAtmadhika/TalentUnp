<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="icon" type="image/png" href="{{ asset('img/logounp.png') }}"/>
        <link rel="stylesheet" href="{{ asset('dist/css/login.css') }}">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    {{-- <div class="container p-5 w-50 align-self-center">
          <div class="card p-sm-5 border border-dark" style="background-color: white; ">
            <div class="modal-header mx-auto">
                <img src="{{ asset('img/logounp.png') }}" alt="" class="img-fluid" width="200px"
                    height="200px">
            </div>
            <div class="modal-header mx-auto">
                <p>
                <h3 class="font-weight-bold text-dark" style="font-family: poppins;"  id="exampleModalLabel">Login</h3>
                </p>
            </div>
            @if (session()->get('success'))
                <div class="alert alert-success">{{ session()->get('success') }}</div>
            @elseif (session()->get('error'))
                <div class="alert alert-danger">{{ session()->get('error') }}</div>
            @endif
            <div class="login-form">
                <form action="{{ route('user_login_submit') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="" class="form-label">Email Address</label>
                      <input type="email" class="form-control border border-dark @error ('email') is-invalid @enderror" name="email" placeholder="email" value="{{ old('email') }}">
                      @error('email')
                            <div class="text-danger">{{ $message }}</div>
                      @enderror
                      @if (session()->get('error'))
                            <div class="text-danger">{{ session()->get('error') }}</div>
                      @endif
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control border border-dark @error ('password') is-invalid @enderror" name="password" placeholder="Password">
                      @error('password')
                            <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                  </form>
            </div>

        </div>
        </div>
<br>
<br> --}}

<div class="container-log p-5">
    <div class="box-log d-flex justify-content-center p-5">
        <div class="screen" style="height: 900px;">
            <div class="screen__content">
                @if (session()->get('success'))
                    <div class="alert alert-success">{{ session()->get('success') }}</div>
                @elseif (session()->get('error'))
                    <div class="alert alert-danger">{{ session()->get('error') }}</div>
                @endif
                <div class="text-center p-5">
                    <a href="" ><img src="{{ asset('img/logounp.png') }}" class="img-fluid" width="200px" height="200px" alt=""></a>
                </div>
                <form class="login"  action="{{ route('user_login_submit') }}" method="POST">

                    <div class="d-flex justify-content-center">
                        {{ csrf_field() }}
                        <h3 class="font-weight-bold text-dark" style="font-family: poppins;">Login</h3>
                    </div>
                    <div class="login__field">
                        <i style="font-size:24px" class="login__icon material-icons">&#xe7fd;</i>
                        <input type="text" class="login__input @error ('email') is-invalid @enderror" name="email" placeholder="email" value="{{ old('email') }}">
                        @error('email')
                        <div class="text-danger">{{ $message }}</div>
                  @enderror
                  @if (session()->get('error'))
                        <div class="text-danger">{{ session()->get('error') }}</div>
                  @endif
                    </div>
                    <div class="login__field">
                        <i style="font-size:24px" class="login__icon fa">&#xf023;</i>
                        <input type="password" class="login__input @error ('password') is-invalid @enderror" name="password" placeholder="Password">
                        @error('password')
                              <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit"  class="button login__submit text-center">
                        <span class="button__text ">Log In</span>
                        <i class="button__icon fa fa-chevron-right" style="font-size:20px"></i>
                    </button>
                </form>
                <div class="forget-pas">
                    <a href="#" class="btn text-white btn-sm btn-lg btn-md">Lupa Password?</a>
                </div>
                <div class="register">
                    <p>Belum punya akun?<a href="{{route('user_user_create') }}" class="btn text-white btn-sm btn-lg btn-md">Register Now</a></p>
                </div>
            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>
        </div>
    </div>

</div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

</body>

</html>
