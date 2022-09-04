 
<?php $__env->startSection('title', 'Create Tag'); ?> 
<?php $__env->startSection('body'); ?> 
<?php echo Form::open(['url'=>'/storetag']); ?>  

 <legend>Create Tag</legend> 
 <div class="form-group"> 
        <?php echo Form::label('tag', 'Tag'); ?> 
     <?php echo Form::text('nama_tag', null, ['class'=>'form-control']); ?>

</div> 

    <?php echo Form::submit('Simpan', ['class'=>'btn btn-primary']); ?> 
    <?php echo Form::close(); ?> <?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\weblaravel2\resources\views/news/create3.blade.php ENDPATH**/ ?>