<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #472183;">
    <div class="container text-white">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <img style="height: 30px;" src="img/logounp.png" alt="">
      <a class="navbar-brand text-white" href="#">Talent UNP</a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href={{ route('front_home') }}>Home</a>
          </li>
        </ul>
            <form class="d-flex" action="" method="get">
              <input class="form-control me-2 " type="text"  name="keyword" placeholder="Search" aria-label="Search">
            </form>
            @auth
            <img style="height: 30px;"  class="rounded-circle" src="{{ asset('img/hu.JPG') }}" alt="" data-bs-toggle="modal" data-bs-target="#exampleModal"/>
            <a class="nav-link active text-white" aria-current="page" href="{{ route('user_logout') }}"> | Logout</a>
            @else
            <a class="nav-link active text-white" aria-current="page" href="{{ route('user_login') }}">Login</a>
            @endauth
      </div>
    </div>
     </div>

  </nav>
  @auth
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Profile</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container">
                <div class="card p-sm-5">
                    <div class="center">
                    <img src="{{ asset('img/hu.JPG') }}"  class="img-fluid rounded-circle" width="100px"
                    height="100px" alt="">
                    </div>
                    <form class="row g-3" action="" method="post" enctype="multipart/form-data">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                  <td>Nama</td>
                                  <td>{{ Auth::guard()->user()->name }}</td>
                                </tr>
                                <tr>
                                    @if(Auth::guard()->user()->Professi == 'Mahasiswa')
                                    <td>NIM</td>
                                    <td>{{ Auth::guard()->user()->np }}</td>
                                    @else
                                    <td>NIP</td>
                                  <td>{{ Auth::guard()->user()->np }}</td>
                                    @endif

                                </tr>
                                <tr>
                                    <td>Professi</td>
                                    <td>{{Auth::guard()->user()->Professi}}</td>
                                  </tr>

                                  <tr>
                                    <td>no handphone</td>
                                    <td>{{ Auth::guard()->user()->no_telp }}</td>
                                  </tr>
                            </tbody>
                          </table>
                    </form>
                </div>
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a href="{{ route('user_edit') }}" type="button" class="btn btn-primary" >Edit Profil</a>
        </div>
      </div>
    </div>
  </div>
  @endauth

