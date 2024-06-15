<?php $__env->startSection('title', 'Talent UNP'); ?>


<?php $__env->startSection('main_content'); ?>



<?php if($chosen == 1): ?>
<div style="background-color:#E6F4F1; ">
<br><br>
<h1 style="font-family: Prata;" class="text-center p-4">SKILL YANG RELEVAN DENGAN : <?php echo e($input); ?></h1>

    <div class="container p-5">
       <div class="row gy-3" >
           <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <div class="col-lg-4 col-md-6 col-sm-12">
               <div class="card-skill">
                 <div class="face face1">
                     <div class="content text-center">
                         <img src="<?php echo e(asset('img/d.jpg')); ?>">
                         <h3><?php echo e($item->nama_talent); ?></h3>
                     </div>
                 </div>
                 <div class="face face2">
                     <div class="content text-center">
                         <p><?php echo e($item->anggota_count); ?> peserta</p>
                             <a href="<?php echo e(route('anggota_show', $item->id)); ?>">See More</a>
                     </div>
                 </div>
             </div>
             </div>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

       </div>
   </div>
  <?php elseif($chosen == 2): ?>
  <div class=" m-5 text-center ">
    <h1 style="font-family: Prata;">BAKAT YANG RELEVAN DENGAN : <?php echo e($input); ?></h1>
  </div>
  <div class="container">
    <div class="ag-format-container">
      <div class="ag-courses_box text-center">
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="ag-courses_item">
            <a href="<?php echo e(route('subtalent_show', $item->id)); ?>" class="ag-courses-item_link">
              <div class="ag-courses-item_bg"></div>

              <div class="ag-courses-item_title">
                <?php echo e($item->kategori); ?>

              </div>
              <div class="ag-courses-item_title">
                <p style="font-size:24px" class="text-white"> <?php echo e($item->subtalent_count); ?> Skills</p>
              </div>
            </a>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      </div>
    </div>
    <?php else: ?>
    <div class="container overflow-hidden" >
        <div class="row gy-5">
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card-per">
                  <div class="card-per-img">
                      <img src="<?php echo e($item->photo? asset('storage/public/img/'.$item->id.'/'.$item->photo) : asset('img/hu.JPG')); ?>">
                  </div>
                  <div class="desc">
                      <h6 class="primary-text"><?php echo e($item->name); ?></h6>
                      <h6 class="secondary-text"><?php echo e($item->deskripsi); ?></h6>
                  </div>
                  <?php if(auth()->guard()->check()): ?>
                  <a href="<?php echo e(route('profile_peserta', $item->id)); ?>"><button class="primary-text">View Profile</button></a>
                  <?php else: ?>
                  <a href="<?php echo e(route('user_login')); ?>"><button class="primary-text">View Profile</button></a>
                  <?php endif; ?>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </div>
</div>
<?php endif; ?>
<br><br>
<div class="container-lg">
    <?php echo e($data->appends(['input' => $input, 'selectedOption' => $chosen])->links()); ?>

</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('FrontHome.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Project\mahasiswa_katalog\resources\views/FrontHome/search_result.blade.php ENDPATH**/ ?>