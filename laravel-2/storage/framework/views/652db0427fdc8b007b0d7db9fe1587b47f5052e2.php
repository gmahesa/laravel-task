 
<?php $__env->startSection('title', 'Create Kategori'); ?> 
<?php $__env->startSection('body'); ?> 
<?php echo Form::open(['url'=>'/storekat']); ?>  

 <legend>Create Kategori</legend> 
 <div class="form-group"> 
        <?php echo Form::label('kategori', 'Kategori'); ?> 
     <?php echo Form::text('nama_kategori', null, ['class'=>'form-control']); ?>

</div> 

    <?php echo Form::submit('save', ['class'=>'btn btn-primary']); ?> 
    <?php echo Form::close(); ?> <?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webLaravel\resources\views/news/create2.blade.php ENDPATH**/ ?>