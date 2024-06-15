<?php $__env->startSection('title', 'Profile'); ?>

<?php $__env->startSection('main_content'); ?>

<div class="w-100 p-5 " style="background-image: linear-gradient(to right top, #2f58cd, #4258cf, #5258d0, #6058d1, #6c58d2, #6860d6, #6468da, #6170dd, #517fdf, #4a8cde, #4d97da, #5ba1d5) ; background-size:100% 400px; background-repeat: no-repeat;">
<div class="container " style="padding-top:150px;display: flex; justify-content: center;align-items: center;">
  <div class=" border p-5 border-0 card w-50" style="backdrop-filter: blur(15px); box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1); border-top: 1px solid rgba(255, 255, 255, 0.5);border-radius: 10px;background: rgba(255, 255, 255, 0.413);
  z-index: 0;">
  <div class=" p-5 text-center p-sm-2 p-md-2" >
    <img  style="box-shadow: 0 5px 15px -8px rgba(0,0,0,.24), 0 8px 10px -5px rgba(0,0,0,.2);"
    class="img-fluid rounded-circle ratio-1x1 w-50" src="<?php echo e($data->photo ? asset('storage/public/img/'.$data->id.'/'.$data->photo) : asset('img/hu.JPG')); ?>" alt=""/>
   <br><br>
      <h2 style="font-family: 'Times New Roman', Times, serif; font-size: 1.e8m; font-weight: bolder;"><?php echo e($data->name); ?></h2>

      <h2 style="font-size: 24px font-family: 'Times New Roman', Times, serif;font-size:1.4em ;color: #03a9f4;font-weight: bold;"> <?php echo e($data->Professi); ?></h2>
<br>
<div class="d-flex justify-content-center">
  <div class="box tex-center px-3">
 <a href="https://wa.me/<?php echo e($data->no_telp); ?>?text=Hai%20<?php echo e($data->name); ?>" class="btn btn-outline-dark" style="box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);border-radius: 50%; width: 50px;height: 50px;justify-content: center; display: flex;align-items: center;"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
  <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
</svg></a>
  </div>
  <div class="box tex-center px-3 " >
    <a class="btn btn-outline-dark " style="box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);border-radius: 50%; width: 50px;height: 50px;justify-content: center; display: flex;align-items: center;"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
      <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
    </svg></a>
     </div>
     <div class="box tex-center px-3">
      <a class="btn btn-outline-dark" style="box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);border-radius: 50%; width: 50px;height: 50px;justify-content: center; display: flex;align-items: center;"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
      </svg></a>
       </div>
       <div class="box tex-center px-3">
        <a class="btn btn-outline-dark" style="box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);border-radius: 50%; width: 50px;height: 50px;justify-content: center; display: flex;align-items: center;"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
          <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
        </svg></a>
         </div>

</div>

  </div>
</div>
</div>
</div>


<div style="background:#BECAFF">

  <div class="container p-5">
    <div class="row g-2">
      <div class="col-6 col-md-4">
        <div class="card" style="backdrop-filter: blur(15px); box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1); border-top: 1px solid rgba(255, 255, 255, 0.5);border-radius: 10px;background: rgba(255, 255, 255, 0.178);
        z-index: 0;">
          <div class="card-body">
            <h2 class="card-title" style="font-family: Prata;">Personal Informasi</h2>
            <hr>
                <div class="box mx-3 " style=" box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);backdrop-filter: blur(15px);border-bottom: 3px solid rgb(79, 78, 78)">
                  <div class="d-flex flex-row bd-highlight align-items-center px-2">
                    <div class="p-2 bd-highlight px-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                      </svg>
                    </div>
                    <div class="p-2 bd-highlight py-2">
                  <h5 style="font-family: 'Times New Roman', Times, serif;" ><b><u>Nama</u></b></h5>
                  <h6 style="font-size: 22px; font-family: 'Times New Roman', Times, serif;">&ensp; <?php echo e($data->name); ?></</h6>
                </div>
                </div>
              </div>
              <div class="box mx-3 " style=" box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);backdrop-filter: blur(15px);border-bottom: 3px solid rgb(79, 78, 78)">
                <div class="d-flex flex-row bd-highlight align-items-center px-2">
                  <div class="p-2 bd-highlight px-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                      <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                    </svg>
                  </div>
                  <div class="p-2 bd-highlight py-2">
                <h5 style="font-family: 'Times New Roman', Times, serif;" ><b><u><?php if($data->Professi = "Mahasiswa"): ?>NIM
                  <?php else: ?>
                  NIP
                  <?php endif; ?>
                </u></b></h5>
                <h6 style="font-size: 22px; font-family: 'Times New Roman', Times, serif;">&ensp; <?php echo e($data->np); ?></</h6>
              </div>
              </div>
            </div>
              <div class="box mx-3 " style=" box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);backdrop-filter: blur(15px);border-bottom: 3px solid rgb(79, 78, 78)">
                <div class="d-flex flex-row bd-highlight align-items-center px-2">
                  <div class="p-2 bd-highlight px-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
                      <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2H2Zm-2 9.8V4.698l5.803 3.546L0 11.801Zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 9.671V4.697l-5.803 3.546.338.208A4.482 4.482 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671Z"/>
                      <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034v.21Zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791Z"/>
                    </svg>
                  </div>
                  <div class="p-2 bd-highlight py-2">
                <h5 style="font-family: 'Times New Roman', Times, serif;" ><b><u>Email</u></b></h5>
                <h6 style="font-size: 22px; font-family: 'Times New Roman', Times, serif;">&ensp; hudiyamubarokah</h6>
              </div>
              </div>
            </div>
            <div class="box mx-3 " style=" box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);backdrop-filter: blur(15px);border-bottom: 3px solid rgb(79, 78, 78)">
              <div class="d-flex flex-row bd-highlight align-items-center px-2">
                <div class="p-2 bd-highlight px-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-workspace" viewBox="0 0 16 16">
                    <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H4Zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                    <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2H2Z"/>
                  </svg>
                </div>
                <div class="p-2 bd-highlight py-2">
              <h5 style="font-family: 'Times New Roman', Times, serif;" ><b><u>Pekerjaan</u></b></h5>
              <h6 style="font-size: 22px; font-family: 'Times New Roman', Times, serif;">&ensp; <?php echo e($data->Professi); ?></</h6>
            </div>
            </div>
          </div>
            <div class="box mx-3 " style=" box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);backdrop-filter: blur(15px);border-bottom: 3px solid rgb(79, 78, 78)">
              <div class="d-flex flex-row bd-highlight align-items-center px-2">
                <div class="p-2 bd-highlight px-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                  </svg>
                </div>
                <div class="p-2 bd-highlight py-2">
              <h5 style="font-family: 'Times New Roman', Times, serif;" ><b><u>Nomor Kontak</u></b></h5>
              <h6 style="font-size: 22px; font-family: 'Times New Roman', Times, serif;">&ensp; <?php echo e($data->no_telp); ?></</h6>
            </div>
            </div>
          </div>
                <div class="p-3">
                  <a href="<?php echo e(route('user_edit')); ?>" class="btn text-white w-25 " style="background: #288F8B">update</a>
                </div>
          </div>


        </div>
      </div>
      <div class="col-sm-6 col-md-8">
        <div class="card" style="backdrop-filter: blur(15px); box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1); border-top: 1px solid rgba(255, 255, 255, 0.5);border-radius: 10px;background: rgba(255, 255, 255, 0.178);
        z-index: 0;">
          <div class="card-body">
            <h2 class="card-title mx-4" style="font-family: Prata;">Talent</h2>
            <hr>
            <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="box mx-3 " style=" box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);backdrop-filter: blur(15px);border-bottom: 3px solid rgb(79, 78, 78)">
              <div class="d-flex flex-row bd-highlight align-items-center px-2">
                <div class="p-2 bd-highlight px-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
                    <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                  </svg>
                </div>
                <div class="p-2 bd-highlight py-2">
              <h5 style="font-family: 'Times New Roman', Times, serif;" ><b><?php echo e($item); ?></b></h5>

            </div>
            </div>
            <p class="card-text"></p>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div></div>
        <div class="card mt-3" style="backdrop-filter: blur(15px); box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1); border-top: 1px solid rgba(255, 255, 255, 0.5);border-radius: 10px;background: rgba(255, 255, 255, 0.178);
        z-index: 0;">
          <div class="card-body">
            <div class="d-flex justify-content-between ">
              <h2 class="card-title mx-4" style="font-family: Prata;">Skill</h2>
              <button class="btn text-light p-2 mx-5" style="background-color: #327b3f;" type="button" data-bs-toggle="modal" data-bs-target="#add">Add <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
              </svg></button>

            </div>
            <hr>

              <?php $__currentLoopData = $talent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="mt-2">
              <div class="box mx-3 " style=" box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);backdrop-filter: blur(15px);border-bottom: 3px solid rgb(79, 78, 78)">
                <div class="d-flex mb-3 align-items-center py-2 px-2">
                  <div class="px-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-tags-fill" viewBox="0 0 16 16">
                      <path d="M2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2zm3.5 4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                      <path d="M1.293 7.793A1 1 0 0 1 1 7.086V2a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l.043-.043-7.457-7.457z"/>
                    </svg>
                  </div>
                  <div class="py-2">
                <h4 style="font-family: 'Times New Roman', Times, serif;" ><b><?php echo e($item->nama_talent); ?></b></h4>
              </div>
              <div class="ms-auto ">
                <a href="<?php echo e(route('user_del_skill',  $item->id)); ?>" class="text-decoration-none btn " type="button" >
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                  </svg>
                </a>
              </div>
              </div>
              </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


          </div>
      </div>
      <div class="card mt-3" style="backdrop-filter: blur(15px); box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1); border-top: 1px solid rgba(255, 255, 255, 0.5);border-radius: 10px;background: rgba(255, 255, 255, 0.178);
        z-index: 0;">
          <div class="card-body">
            <div class="d-flex justify-content-between ">
              <h2 class="card-title mx-4" style="font-family: Prata;">CV & Sertifikat</h2>
              <button class="btn text-light p-2 mx-5" style="background-color: #327b3f;" type="button" data-bs-toggle="modal" data-bs-target="#addSertifikat"> Add Sertifikat <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
              </svg></button>

            </div>
            <hr>

              <?php $__currentLoopData = $data->file; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="mt-2">
              <div class="box mx-3 " style=" box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);backdrop-filter: blur(15px);border-bottom: 3px solid rgb(79, 78, 78)">
                <div class="d-flex mb-3 align-items-center py-2 px-2">
                  <div class="px-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-tags-fill" viewBox="0 0 16 16">
                      <path d="M2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2zm3.5 4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                      <path d="M1.293 7.793A1 1 0 0 1 1 7.086V2a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l.043-.043-7.457-7.457z"/>
                    </svg>
                  </div>
                  <div class="py-2">
                    <a href="<?php echo e(route('view_pdf',  $item->id)); ?>"class="text-decoration-none">
                <h4 style="font-family: 'Times New Roman', Times, serif; color: black" ><b><?php echo e($item->judul); ?></b></h4><a>
              </div>
              <div class="ms-auto ">
                <a href="<?php echo e(route('user_del_sertifikat',  $item->id)); ?>" class="text-decoration-none btn " type="button" >
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                  </svg>
                </a>
              </div>
              </div>
              </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


          </div>
      </div>
    </div>
  </div>
  <div class="container p-5">
    <div class="card " style="background: rgb(154, 101, 101)">
      
      <nav>
        <div class="nav nav-tabs text-dark" id="nav-tab" role="tablist">
          <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Tentang Kamu</button>
          <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
            <a type="button" class="btn border border-0 position-relative"> Pesan
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                99+
                <span class="visually-hidden">unread messages</span>
              </span>
            </a>
          </button>
        </div>
      </nav>
      <hr class="mx-3">
      <div class="tab-content p-3 px-5" id="nav-tabContent">
        <div class="tab-pane fade show active" data-bs-spy="scroll" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
           Asperiores facere veritatis eaque, totam dolorum eius mollitia repudiandae itaque laborum quibusdam ut,
          natus error nam aspernatur dicta enim impedit recusandae. Perspiciatis!
        </div>
        <div class="tab-pane fade" id="nav-profile" data-bs-spy="scroll" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
          <div class="box" style=" box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);backdrop-filter: blur(15px);border-bottom: 3px solid rgb(79, 78, 78)">
            <div class="card mb-3 " style="background: #288f8c00">


            <div class="row g-0">
              <div class="col-md-4 py-1 px-2 " style="width: 100px;">
                <a href="" class=""> <img src="<?php echo e(asset('img/hu.JPG')); ?>" alt="" class="ratio ratio-1x1  rounded-circle"></a>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title" style="font-family: 'Times New Roman', Times, serif"><b><u>Hudiya Mubarokah</u></b></h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                </div>
              </div>
            </div>
          </div>
        </div>
        </div>

      </div>
    </div>
  </div>
</div>
</div>
<div class="">

</div>


  


  <div class="modal fade" style=" box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);backdrop-filter: blur(15px);border-bottom: 3px solid rgb(79, 78, 78)" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" >
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Skills</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <!-- Example split danger button -->
            <form action="<?php echo e(route('user_add_skill')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group mb-3">
                    <label>Skills</label>
                    <select name="skill" class="form-control">
                        <?php $__currentLoopData = $skill; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->id); ?>">
                                <?php echo e($item->nama_talent); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
    </form>
        </div>
    </div>
    </div>
  </div>

<br>
<div class="modal fade" id="addSertifikat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Sertifikasi</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <!-- Example split danger button -->
            <form action="<?php echo e(route('user_add_sertifikat')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for="Nama" class="form-label">Judul Sertifikat</label>
                    <input type="text" class="form-control" name="judul">
                    <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Sertifikat</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="file">
                    </div>
                    <?php $__errorArgs = ['cv'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
    </form>
        </div>
    </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('FrontHome.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Project\mahasiswa_katalog\resources\views/FrontHome/User/profile.blade.php ENDPATH**/ ?>