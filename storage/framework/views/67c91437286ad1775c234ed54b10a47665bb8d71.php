
<?php $__env->startSection('title', 'Talent UNP'); ?>


<?php $__env->startSection('main_content'); ?>
<?php if(auth()->guard()->check()): ?>

          <div class="container p-5" style="">
            <div class="card text-start " style="background-color: #BFA5A4; box-shadow: 15px 15px 15px rgba(0, 0, 0, 0.504); potition: absolut; z-index:-1;">
                <div class="row">
                <div class="col-md-6 col-lg-6 p-5 ">
                    <h1 style="font-family: Prata;">Lengkapi Data Kamu </h1>

                    <p style="font-size: 15px;">
                        lengkapi Data Kamu Agar Kamu Di lirik
                    </p>
                    <br><br>
                    <a href="<?php echo e(route('user_profile')); ?> " class="btn text-dark btn-outline-primary rounded-2" style="background: ">Lengkapi data</a>
                </div>
                <div class="col-md-6">
                    <div class="card" style="height: 400px;">
                    <img style="height: 400px;" src="<?php echo e(asset('img/2.jpg')); ?>" alt="...">
                    </div>
                </div>
                </div>
            </div>
            </div>
              <?php else: ?>
              <div style="background-color: rgba(255, 255, 255, 0)">
                <div id="carouselExampleDark" class="carousel carousel-dark slide md" data-bs-ride="carousel" style="potition: absolut; z-index:-1;">
                  <div class="carousel-inner" style="height: 700px">
                    <div class="carousel-item active" data-bs-interval="10000">
                      <img src="<?php echo e(asset('img/tr.jpg')); ?>" class="d-block w-100" style="height: 700px" alt="...">
                      <div class="carousel-caption d-md-block d-sm-block d-lg-block" style="height: 350px">
                        <h2 class="text-light" style="font-family: Abril Fatface;">Bakat Terbaik UNP</h2>
                        <p class="text-light" style="font-family: Abril Fatface;">Some representative placeholder content for the first slide.</p>
                      </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="10000">
                      <img src="<?php echo e(asset('img/fgc1.jpg')); ?>" class="d-block w-100" style="height: 700px" alt="...">
                      <div class="carousel-caption d-md-block d-sm-block d-lg-block" style="height: 350px">
                        <h2 class="text-light" style="font-family: Abril Fatface;">Bakat Terbaik UNP</h2>
                        <p class="text-light" style="font-family: Abril Fatface;">Some representative placeholder content for the first slide.</p>
                      </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="10000">
                      <img src="<?php echo e(asset('img/unp.jpg')); ?>" class="d-block w-100" style="height: 700px" alt="...">
                      <div class="carousel-caption d-md-block d-sm-block d-lg-block" style="height: 350px">
                        <h2 class="text-light" style="font-family: Abril Fatface;">Bakat Terbaik UNP</h2>
                        <p class="text-light" style="font-family: Abril Fatface;">Some representative placeholder content for the first slide.</p>
                      </div>
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>

          <?php endif; ?>

          <div style="background-color: #F1F6F5; " >
            <div class="container">
            <div class="p-5 text-center " >
              <h1 style="font-family: Prata;">AYO TEMUKAN BAKAT <br> KAMU CARI</h1>
            </div>

              <div class="ag-format-container potition-relative z-n1"  >
                <div class="ag-courses_box text-center">
                  <?php $__currentLoopData = $menutalent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="ag-courses_item">
                      <a href="<?php echo e(route('subtalent_show', $item->id)); ?>" class="ag-courses-item_link">
                        <div class="ag-courses-item_bg"></div>

                        <div class="ag-courses-item_title">
                          <?php echo e($item->kategori); ?>

                        </div>
                        <div class="ag-courses-item_title">
                          <p style="font-size:24px" > <?php echo e($item->subtalent_count); ?> Skills</p>
                        </div>
                      </a>
                    </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                </div>
              </div>
          </div>
          <div class="m-5">
            <?php if(auth()->guard()->check()): ?>
            <?php else: ?>
            <div class="container position-position-absolute">
                <div class="card  text-start">
                  <div class="row g">
                    <div class="col-sm-12 col-md-8 col-lg-6 p-5" style="background-color: #98B4B2; box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.504);">
                        <h1 style="font-family: Prata;"> Daftarkan Dirimu <br>Sekarang</h1>
                        <p >
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio cupiditate eos porro a,
                          unde corrupti fuga ea eum vero, saepe nemo accusamus nesciunt tempora! Aut ducimus porro perferendis id hic!
                        </p>
                        <br>
                        <a href="<?php echo e(route('user_user_create')); ?>" class="btn  btn-outline-primary text-dark rounded-2" >Daftar</a>
                    </div>
                    <div class="col-md-8 col-sm-12 col-lg-6">
                      <div class="card ratio ratio-4x3">
                        <img src="<?php echo e(asset('img/5.jpg')); ?>" class="w-100" style="box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.504);" alt="...">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <br><br>
          <br>
          <br>
            <?php endif; ?>
          <div class="container">
            <div class="row gy-5">
              <div class="col-sm-12 col-md-8 col-lg-6 ">
                <div class="card ratio ratio-4x3">
                <img style=" box-shadow: 6px 6px 6px rgba(0, 0, 0, 0.504);" src="<?php echo e(asset('img/3.jpg')); ?>" alt="">
              </div>
            </div>
              <div class="col-sm-12 col-md-8 col-lg-6 p-5 " style="background-color:#C7D2FF; box-shadow: 6px 6px 6px rgba(0, 0, 0, 0.504);">
                  <h1 style="font-family: Prata;">Gunakan Bakat-Bakat Terbaik Universitas Negeri Padang</h1>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit rem
                    commodi ex aliquam fugiat velit! Vel, molestias optio,
                    autem nesciunt iure provident rem sit libero mollitia ad delectus error laudantium.</p>

                </div>
              </div>

          </div>
        </div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('FrontHome.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Project\mahasiswa_katalog\resources\views/FrontHome/index.blade.php ENDPATH**/ ?>