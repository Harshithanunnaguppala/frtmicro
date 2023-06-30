<?php $__env->startSection('title', 'signup'); ?>


<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">Login</div>
    <div class="card-body">
        <form action="<?php echo e(route('doctor.registration.save')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Full Name</label>
              <input type="text" class="form-control"  name="name">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Specialisation</label>
                <input type="text" class="form-control"  name="spl">
              </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirmation">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            Already Registered?<a href="<?php echo e(route('doctor.login')); ?>">Login</a>
          </form>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Doctor.Layout.Doctor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Intern\resources\views/Doctor/Auth/signup.blade.php ENDPATH**/ ?>