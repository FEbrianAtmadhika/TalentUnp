<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/png" href="<?php echo e(asset('img/logounp.png')); ?>"/>
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">
    <?php echo $__env->make('FrontHome.layout.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('FrontHome.layout.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <link rel="stylesheet" href="<?php echo e(asset('dist/css/nav.css')); ?>">

</head>

<body >
<div id="app">
    <div class="main-wrapper" >

        <?php echo $__env->make('FrontHome.layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="main-content " style="z-index: -1">
            <section class="section">
                <div class="section-header">
                    <?php echo $__env->yieldContent('main_content'); ?>
                </div>



            </section>
        </div>

    </div>
</div>

<br><br>

<?php echo $__env->make('FrontHome.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('FrontHome.layout.scripts_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html>
<?php /**PATH D:\Laravel Project\mahasiswa_katalog\resources\views/FrontHome/layout/app.blade.php ENDPATH**/ ?>