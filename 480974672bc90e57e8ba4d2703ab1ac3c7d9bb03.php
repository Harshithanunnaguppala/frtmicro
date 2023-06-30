<?php $__env->startSection('title','Login'); ?>


<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">Login</div>
    <div class="card-body">
        <form method="POST" action="<?php echo e(route('doctor.login.save')); ?>">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='email'>
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name='password'>
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="<?php echo e(route('doctor.registration')); ?>">Create New Account</a>
          </form>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Doctor.Layout.Doctor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Intern\resources\views/Doctor/Auth/login.blade.php ENDPATH**/ ?>