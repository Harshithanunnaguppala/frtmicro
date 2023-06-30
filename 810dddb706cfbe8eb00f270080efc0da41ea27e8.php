<?php $__env->startSection('titlr','dashboard'); ?>


<?php $__env->startSection("content"); ?>

<div id="mySidenav" class="sidenav">
    <a href="javascript:" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#about">Appointment</a>
    
  </div>


  <span onclick="openNav()">open</span>

    <div id="main">
        <table class="table">
            <tr>
                <th>S.No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Timing</th>
            </tr>
            <?php
                $appoint = DB::table('appointment')->get();
                $i = 0;
            ?>
            <?php $__currentLoopData = $appoint; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $apt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e(++$i); ?></td>
                    <td><?php echo e($apt->name); ?></td>
                    <td><?php echo e($apt->email); ?></td>
                    <td><?php echo e($apt->name); ?></td>
                    <td><?php echo e($apt->timing); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </table>
    </div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('Doctor.Layout.Doc.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Intern\resources\views/Doctor/dashboard.blade.php ENDPATH**/ ?>