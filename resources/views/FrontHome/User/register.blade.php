<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="icon" type="image/png" href="{{ asset('img/logounp.png') }}"/>
    <title>Talent UNP</title>
</head>


<body style="background: linear-gradient(90deg, #C7C5F4, #3722d2);	">
              <div class="container justify-content-center">
                <div class="card  my-5 border-0 shadow rounded-3 overflow-hidden">
                  <div class="row g-2">
                    <div class="col-md-8 col-lg-6 co-sm-10 p-2" style="background: #1488CC;  /* fallback for old browsers */
                    background: -webkit-linear-gradient(to right, #2B32B2, #1488CC);  /* Chrome 10-25, Safari 5.1-6 */
                    background: linear-gradient(to right, #2B32B2, #1488CC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                    ">
                      <div class="card-left text-white" style=" background: #280ef100; background-size: cover;">
                        <div class="card-header text-center">
                          <h4><strong>Selamat Datang di Talent Universita Negeri Padang</strong></h4>
                        </div>
                        <div class="card-body">
                          <div class="text-center p-5">
                            <img src="{{ asset('img/logounp.png') }}" alt="" style="width: 45%; height:45%">
                            <h4>INFORMASI</h4>
                            <div class="text-start">
                              <p>Sebelum Anda melakukan pendaftaran akun, <strong>seluruh pendaftar harus Anggota Universitas Negeri Padang "Baik itu Mahasiswa, Dosen, dan Tenaga Kependidikan"</strong>.
                               Yang mana pada saat mengisi <strong>Nomor Pengenal,</strong> bagi Mahasiswa UNP diisi Dengan Nomor Induk Mahasiswa, bagi Dosen dan Tenaga Kependididikan diisi dengan Nomor Kartu Pegawai. Tenaga Kependidikan yang tidak memiliki Nomor Kartu Pegawai dapat menggunakan NIP. Selain dari pada itu tidak dapat mendaftar akun. <BR>Sekian Terima Kasih</p>
                                <hr>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8 col-lg-6 co-sm-10 p-5">
                      <div class="card-body">
                        <h2 class=" text-center mb-5 fw-light fs-5"><b>BUAT AKUN</b></h2>
                        <form method="POST" action="{{ route('register_submit') }}" enctype="multipart/form-data">
                          @csrf
                          <div class="mb-3">
                              <label for="" class="form-label">Nama</label>
                              <input type="text" class="form-control" name="name">
                          </div>
                          <div class="mb-3">
                          <div class="form-group">
                              <label>Jabatan</label>
                              <select name="professi" class="form-control">
                                      <option value="Mahasiswa">Mahasiswa</option>
                                      <option value="Dosen">Dosen</option>
                                      <option value="Tenaga Kependidikan">Tenaga Kependidikan</option>
                              </select>
                          </div>
                          </div>
                          <div class="mb-3">
                            <label for="" class="form-label">Nomor Pengenal</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                          <div class="mb-3">
                              <label for="" class="form-label">Alamat Email</label>
                              <input type="email" class="form-control" id="Email" name="email">
                          </div>
                          <div class="mb-3">
                              <label for="" class="form-label">Password</label>
                              <input type="password" class="form-control" id="password" name="password">
                          </div>
                          <div class=" mb-3">
                              <label class="form-label" for="">Repeat your password</label>
                              <input type="password" id="password" class="form-control form-control-lg" name="password_confirmation">
                          </div>
                            <div class="form-check mb-3">
                              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" >
                              <label class="form-check-label" for="form2Example3g">
                                I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                              </label>
                            </div>
                            <div class="d-grid mb-2">
                              <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" style="font-size: 0.9rem; letter-spacing: 0.05rem; padding: 0.75rem 1rem;" type="submit">Register</button>
                            </div>
                        </form>
                    <p class="text-center text-muted mt-3 mb-0">Sudah memiliki akun? <a href="{{ route('user_login') }}"
                      class="fw-bold text-body"><u>Login disini</u></a></p>
                      </div>
                    </div>
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
