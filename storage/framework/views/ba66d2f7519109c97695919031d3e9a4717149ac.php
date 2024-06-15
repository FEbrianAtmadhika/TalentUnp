<?php $__env->startSection('heading', 'User Create'); ?>
    
<?php $__env->startSection('main_content'); ?>
<form action="<?php echo e(route('admin_user_store')); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    .<div class="container">
        <div class="card p-sm-5">
            <form class="row g-3">
                <div class="mb-3">
                    <label for="" class="form-label">Nama Mahasiswa</label>
                    <input type="text" class="form-control" id="Name" name="name">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="Email" name="email" placeholder="enter here"  >
                </div>
               <div class="mb-3">
                      <label for="" class="form-label">Password</label>
                      <input type="password" class="form-control" name="password" id="password" placeholder="enter here">
                </div>    
                <div class="mb-3">
                    <label for="" class="form-label">Retype Password</label>
                    <input type="password" class="form-control" name="password_confirmation" id="password" placeholder="enter here">
                </div>
                <button type="submit" class="btn btn-primary w-25 ">Submit</button>
            </form>
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Project\mahasiswa_katalog\resources\views/admin/user/create.blade.php ENDPATH**/ ?>