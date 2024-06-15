<?php $__env->startSection('heading', 'List Mahasiswa'); ?>
    
<?php $__env->startSection('main_content'); ?>
  <body>

    <div class="container">
        <div class="d-flex justify-content-between py-3">
            <div class="h4">Mahasiswa</div>
            <div>
                <a href="<?php echo e(route('admin_user_create')); ?>" class="btn btn-primary">CREATE</a>
            </div>
        </div>  
    </div>
    
    <div class="container p-2">
        <table class="table">
        <thead class="table-light">
            <tr>
                <th scope="col">No</th>             
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
              </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>         
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($item->name); ?></td>
                    <td><?php echo e($item->email); ?></td> 
                    <td> <a href="<?php echo e(route('admin_user_edit', $item->id )); ?>" button type="button" class="btn btn-primary">EDIT</a>
                        <a href="<?php echo e(route('admin_user_delete', $item->id )); ?>" button type="button" class="btn btn-danger" onclick="return confirm('are u sure?')">DELETE</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Project\mahasiswa_katalog\resources\views/admin/user/show.blade.php ENDPATH**/ ?>