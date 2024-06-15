<?php $__env->startSection('title', 'Talent UNP'); ?>

<?php $__env->startSection('main_content'); ?>


<br>
      

    <div class="container overflow-hidden" >
        <div class="row gy-5">
            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card-per">
                  <div class="card-per-img">
                      <img class="ratio" src="<?php echo e(asset('storage/public/img/'.$item->id.'/'.$item->photo)); ?>">
                  </div>
                  <div class="desc">
                      <h6 class="primary-text"><?php echo e($item->name); ?></h6>
                      <h6 class="secondary-text"><?php echo e($item->deskripsi); ?></h6>
                  </div>
                  <a href="<?php echo e(route('profile_peserta', $item->id)); ?>"><button class="primary-text">View Profile</button></a>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</div>
    <br><br>
<br><br>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('FrontHome.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Project\mahasiswa_katalog\resources\views/FrontHome/peserta.blade.php ENDPATH**/ ?>