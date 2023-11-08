<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title img src="img/logo.jpg">Cromate | Profile</title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link href="<?php echo e(asset('css/log.css')); ?>" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>






  <br><br><br>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">

          <div class="card card-primary card-outline">
            <div class="card-header p-1 " style="background-color: #233862">
            </div>
            <div class="card-body box-profile">


              <h3 class="profile-username text-center admin_name"><?php echo e(Auth::user()->name); ?></h3>

              <p class="text-muted text-center">Staff</p>

              <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp;  <?php echo e(Auth::user()->email); ?></li>
              <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Phone:</strong> &nbsp; <?php echo e(Auth::user()->phoneno); ?></li>
              <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Gender:</strong> &nbsp;  <?php echo e(Auth::user()->gender); ?></li>
              <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Location IoT:</strong> &nbsp; <?php echo e(Auth::user()->location); ?></li>
              <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Birthdate:</strong> &nbsp;  <?php echo e(Auth::user()->birthdate); ?></li>
              <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Address:</strong> &nbsp; <?php echo e(Auth::user()->address); ?></li>

            </div>
          </div>
        </div>

        <div class="col-md-9">
          <div class="card">
            <div class="card-header p-1 " style="background-color: #233862">

            </div>
            <div class="card-body">
            <h3>Change Profile</h3><br>
              <div class="tab-content">
                <div class="active tab-pane" id="personal_info">
                    <form action="<?php echo e(route('update')); ?>" id="profileform" method="post">
                        <form action="send_post.php" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>

                    <div class="form-group row">
                      <label for="name" class="col-sm-2 col-form-label">Name</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" placeholder="Name" value="<?php echo e(Auth::user()->name); ?>" name="name">
                        <span class="text-danger error-text name_error"></span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="email" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" placeholder="Email" value="<?php echo e(Auth::user()->email); ?>" name="email">
                        <span class="text-danger error-text email_error"></span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="phoneno" class="col-sm-2 col-form-label">Phone Number</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="phoneno" placeholder="Phone Number" value="<?php echo e(Auth::user()->phoneno); ?>" name="phoneno">
                        <span class="text-danger error-text phoneno_error"></span>
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="gender" placeholder="Gender" value="<?php echo e(Auth::user()->gender); ?>" name="gender">
                          <span class="text-danger error-text gender_error"></span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="religion" class="col-sm-2 col-form-label">Location IoT</label>
                        <div class="col-sm-10">

                          <input type="text" class="form-control" id="location" placeholder="Location" value="<?php echo e(Auth::user()->location); ?>" name="location">
                          <span class="text-danger error-text religion_error"></span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="birthdate" class="col-sm-2 col-form-label">Birthdate</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="birthdate" placeholder="Birthdate" value="<?php echo e(Auth::user()->birthdate); ?>" name="birthdate">
                          <span class="text-danger error-text birthdate_error"></span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="address" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="address" placeholder="Address" value="<?php echo e(Auth::user()->address); ?>" name="address">
                          <span class="text-danger error-text address_error"></span>
                        </div>
                      </div>
                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-danger">Save Changes</button>
                      </div>
                    </div>
                  </form>
                </div>

</body>
</html>



<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\FYP-Project\resources\views/profile.blade.php ENDPATH**/ ?>