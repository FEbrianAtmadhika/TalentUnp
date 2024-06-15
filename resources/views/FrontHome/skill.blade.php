@extends('FrontHome.layout.app')

@section('title', 'Talent UNP')

@section('main_content')


<div clasa=" " style="background-color:#E0F1F0">
  <div class="p-5 container">
    <div class="p-2">
      <div class="card text-start p-4 " style="background-color: #3B8D8B; box-shadow: 0px 15px 15px rgba(0, 0, 0, 0.504);">
        <div class="row">
          <div class="col-sm-6 col-md-6 p-5 text-white">
              <h1 style="font-family: Prata;"> Temukan Bakatnya <br> Sekarang Juga </h1>

              <p >
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio cupiditate eos porro a,
                unde corrupti fuga ea eum vero, saepe nemo accusamus nesciunt tempora! Aut ducimus porro perferendis id hic!
              </p>
          </div>
          <div class="col-md-6">
            <div class="card w-300px">
              <img src="{{ asset('img/5.jpg') }}" alt="...">
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>

<div style="background-color:#E6F4F1; ">
      <div class="container p-5">
        <h1 style="font-family: Prata;" class="text-center">Bakat-Bakat Terbaik <br> Universitas Negeri Padang</h1>
         <div class="row gy-3" >
             @foreach ($subtalent as $item )
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
       </div>

    </div>


@endsection
