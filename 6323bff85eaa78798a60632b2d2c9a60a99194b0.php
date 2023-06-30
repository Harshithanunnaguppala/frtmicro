 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(asset('style.css')); ?>">

    <title>Doctor's | <?php echo $__env->yieldContent('title'); ?></title>
 </head>
 <body>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('Doctor.Auth.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

 </body>
 </html>
<?php /**PATH C:\xampp\htdocs\Intern\resources\views/Doctor/Layout/Doctor.blade.php ENDPATH**/ ?>