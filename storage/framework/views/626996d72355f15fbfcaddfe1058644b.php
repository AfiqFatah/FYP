<!-- Main Code -->
<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Cropmate | Login</title>
    <style>
        .login {
            min-height: 100vh;
            }

            body {
            background-image: url('/img/background.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }


        .login-heading {
            font-weight: 300;
        }



        .btn-login {
            font-size: 0.9rem;
            letter-spacing: 0.05rem;
            padding: 0.75rem 1rem;
            border-radius: 3rem;

        }

        .loginpartition {
            background-color: #86a9f7;
            border-radius: 2rem;
            padding: 30px;
            padding-top: 40px;
            padding-bottom: 40px;
        }

        .left {
            float: left;
            width: 170px;

        }

        .right {
            float: right;
            width: 170px;
        }


    </style>




  </head>
  <body>
        <div class="container-fluid ps-md-0">
            <div class="row g-0">
                <div class="d-none d-md-flex align-items-center col-md-3 bg-image"></div>

                <div class="row justify-content-center col-md-8 col-lg-6">
                        <div class="login d-flex align-items-center py-5">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-9 col-lg-8 mx-auto">
                                        <h1 class="login-heading mb-4" >Login</h1><br>

                                            <!-- Sign In Form -->
                                            <div class="loginpartition">
                                                <form method="POST" action="<?php echo e(route('login')); ?>">
                                                    <?php echo csrf_field(); ?>
                                                    <!-- Input Email -->
                                                    <div class="form-floating mb-3">
                                                        <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus placeholder="name@example.com">
                                                        <label for="email">Email Address</label>

                                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong><?php echo e($message); ?></strong>
                                                                </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>

                                                    <!-- Input Password -->
                                                    <div class="form-floating mb-3">
                                                        <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password" placeholder="Password">
                                                        <label for="password">Password</label>

                                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong><?php echo e($message); ?></strong>
                                                                </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>

                                                    <!-- Remember Me Checkbox -->
                                                    <div class="form-check mb-3">
                                                        <input id="remember" type="checkbox" class="form-check-input" type="checkbox" value="" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                                        <label class="form-check-label" for="remember"> <?php echo e(__('Remember Me')); ?></label>
                                                    </div>

                                                    <!-- Forgot Password -->
                                                    <div class="d-grid">
                                                        <button type="submit" class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" > <?php echo e(__('Login')); ?> </button>
                                                        <div class="text-center ">
                                                            <?php if(Route::has('password.request')): ?>
                                                                <a class="btn btn-link text-black text-small" href="<?php echo e(route('password.request')); ?>">
                                                                    <?php echo e(__('Forgot Your Password?')); ?>

                                                                </a>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </form>

                                                <div class="left">
                                                    <h4 class="login-heading mb-4" style="font-size: 15px;">Not registered yet?</h4>
                                                </div>

                                                <div class="right">
                                                    <ul class="nav-item">
                                                        <a class="btn btn-link text-black text-small" href="<?php echo e(route('register')); ?>"><?php echo e(__('Create an account')); ?></a>
                                                    </ul>
                                                </div>
                                            </div><br><br>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\FYP-Project\resources\views/auth/login.blade.php ENDPATH**/ ?>