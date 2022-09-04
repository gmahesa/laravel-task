<?php $__env->startSection('title', 'Halaman Utama Portal - Kabar Burung'); ?>
<?php $__env->startSection('content'); ?>
<?php echo Form::open(['route' => 'user.store']); ?>

<?php echo $__env->make('user._user-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo Form::close(); ?>                  
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\weblaravel2\resources\views/user/createUser.blade.php ENDPATH**/ ?>