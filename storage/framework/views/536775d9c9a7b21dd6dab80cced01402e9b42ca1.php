<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="icon" type="image/png" href="<?php echo e(asset('img/logounp.png')); ?>"/>
        <link rel="stylesheet" href="<?php echo e(asset('dist/css/login.css')); ?>">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    

<div class="container-log p-5">
    <div class="box-log d-flex justify-content-center p-5">
        <div class="screen" style="height: 900px;">
            <div class="screen__content">
                <?php if(session()->get('success')): ?>
                    <div class="alert alert-success"><?php echo e(session()->get('success')); ?></div>
                <?php elseif(session()->get('error')): ?>
                    <div class="alert alert-danger"><?php echo e(session()->get('error')); ?></div>
                <?php endif; ?>
                <div class="text-center p-5">
                    <a href="" ><img src="<?php echo e(asset('img/logounp.png')); ?>" class="img-fluid" width="200px" height="200px" alt=""></a>
                </div>
                <form class="login"  action="<?php echo e(route('user_login_submit')); ?>" method="POST">

                    <div class="d-flex justify-content-center">
                        <?php echo e(csrf_field()); ?>

                        <h3 class="font-weight-bold text-dark" style="font-family: poppins;">Login</h3>
                    </div>
                    <div class="login__field">
                        <i style="font-size:24px" class="login__icon material-icons">&#xe7fd;</i>
                        <input type="text" class="login__input <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" placeholder="email" value="<?php echo e(old('email')); ?>">
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger"><?php echo e($message); ?></div>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  <?php if(session()->get('error')): ?>
                        <div class="text-danger"><?php echo e(session()->get('error')); ?></div>
                  <?php endif; ?>
                    </div>
                    <div class="login__field">
                        <i style="font-size:24px" class="login__icon fa">&#xf023;</i>
                        <input type="password" class="login__input <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" placeholder="Password">
                        <?php $__errorArgs = ['password'];
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

                    <button type="submit"  class="button login__submit text-center">
                        <span class="button__text ">Log In</span>
                        <i class="button__icon fa fa-chevron-right" style="font-size:20px"></i>
                    </button>
                </form>
                <div class="forget-pas">
                    <a href="#" class="btn text-white btn-sm btn-lg btn-md">Lupa Password?</a>
                </div>
                <div class="register">
                    <p>Belum punya akun?<a href="<?php echo e(route('user_user_create')); ?>" class="btn text-white btn-sm btn-lg btn-md">Register Now</a></p>
                </div>
            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>
        </div>
    </div>

</div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

</body>

</html>
<?php /**PATH D:\Laravel Project\mahasiswa_katalog\resources\views/user/login.blade.php ENDPATH**/ ?>