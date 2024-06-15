@extends('FrontHome.layout.app')

@section('title', 'Talent UNP')

@section('main_content')


<br>
      {{-- <div class="container">
      <div class="row row-cols-md-3 g-4 p-5">
        @foreach ($user as $item)
        <div class="col">
            <div class="card h-100" style="background-color: #E7F6F2; box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.54);">
              <div class="card-header text-center">
                  <img src="{{ asset('storage/public/img/'.$item->id.'/'.$item->photo) }}" alt="" class="img-fluid rounded-circle d-block mx-auto mb-3" width="100px"
                          height="100px">
              </div>
              <div class="card-body">
                <h5 class="card-title text-center"> {{ $item->name }}</h5>
                <p class="card-text">{{ $item->deskripsi }}<br>
                    @auth
                    <a href="{{ route('profile_peserta', $item->id) }}">see more</a>
                    @else
                    <a href="{{ route('user_login') }}">see more</a>
                    @endauth

              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div> --}}

    <div class="container overflow-hidden" >
        <div class="row gy-5">
            @foreach ($user as $item )
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card-per">
                  <div class="card-per-img">
                      <img class="ratio" src="{{ asset('storage/public/img/'.$item->id.'/'.$item->photo) }}">
                  </div>
                  <div class="desc">
                      <h6 class="primary-text">{{ $item->name }}</h6>
                      <h6 class="secondary-text">{{ $item->deskripsi }}</h6>
                  </div>
                  <a href="{{ route('profile_peserta', $item->id) }}"><button class="primary-text">View Profile</button></a>
                </div>
            </div>
            @endforeach

    </div>
</div>
    <br><br>
<br><br>
@endsection
