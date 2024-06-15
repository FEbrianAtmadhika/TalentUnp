@extends('FrontHome.layout.app')
@section('title', 'Talent UNP')


@section('main_content')



@if($chosen == 1)
<div style="background-color:#E6F4F1; ">
<br><br>
<h1 style="font-family: Prata;" class="text-center p-4">SKILL YANG RELEVAN DENGAN : {{ $input }}</h1>

    <div class="container p-5">
       <div class="row gy-3" >
           @foreach ($data as $item )
           <div class="col-lg-4 col-md-6 col-sm-12">
               <div class="card-skill">
                 <div class="face face1">
                     <div class="content text-center">
                         <img src="{{ asset('img/d.jpg') }}">
                         <h3>{{ $item->nama_talent }}</h3>
                     </div>
                 </div>
                 <div class="face face2">
                     <div class="content text-center">
                         <p>{{ $item->anggota_count }} peserta</p>
                             <a href="{{ route('anggota_show', $item->id) }}">See More</a>
                     </div>
                 </div>
             </div>
             </div>
           @endforeach

       </div>
   </div>
  @elseif ($chosen == 2)
  <div class=" m-5 text-center ">
    <h1 style="font-family: Prata;">BAKAT YANG RELEVAN DENGAN : {{ $input }}</h1>
  </div>
  <div class="container">
    <div class="ag-format-container">
      <div class="ag-courses_box text-center">
        @foreach ($data as $item )
        <div class="ag-courses_item">
            <a href="{{ route('subtalent_show', $item->id) }}" class="ag-courses-item_link">
              <div class="ag-courses-item_bg"></div>

              <div class="ag-courses-item_title">
                {{ $item->kategori }}
              </div>
              <div class="ag-courses-item_title">
                <p style="font-size:24px" class="text-white"> {{ $item->subtalent_count }} Skills</p>
              </div>
            </a>
          </div>
        @endforeach
      </div>
      </div>
    </div>
    @else
    <div class="container overflow-hidden" >
        <div class="row gy-5">
            @foreach ($data as $item )
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card-per">
                  <div class="card-per-img">
                      <img src="{{$item->photo? asset('storage/public/img/'.$item->id.'/'.$item->photo) : asset('img/hu.JPG')}}">
                  </div>
                  <div class="desc">
                      <h6 class="primary-text">{{ $item->name }}</h6>
                      <h6 class="secondary-text">{{ $item->deskripsi }}</h6>
                  </div>
                  @auth
                  <a href="{{ route('profile_peserta', $item->id) }}"><button class="primary-text">View Profile</button></a>
                  @else
                  <a href="{{ route('user_login') }}"><button class="primary-text">View Profile</button></a>
                  @endauth
                </div>
            </div>
            @endforeach


    </div>
</div>
@endif
<br><br>
<div class="container-lg">
    {{ $data->appends(['input' => $input, 'selectedOption' => $chosen])->links() }}
</div>
</div>
@endsection
