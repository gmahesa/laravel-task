 
<?php $__env->startSection('title', 'Create Berita'); ?> 
<?php $__env->startSection('body'); ?> 
<?php echo Form::open(['url'=>'/store']); ?>  

 <legend>Create Berita</legend> 
 <div class="form-group"> 
        <?php echo Form::label('pencipta', 'Pencipta'); ?> 
     <?php echo Form::text('nama_pencipta', null, ['class'=>'form-control']); ?>

</div> 
    <div class="form-group"> 
        <?php echo Form::label('title', 'Title'); ?> 
        <?php echo Form::text('title', null, ['class'=>'form-control']); ?> 
    </div>
    <div class="form-group"> 
        <?php echo Form::label('content', 'Konten'); ?> 
        <?php echo Form::textarea('content', null, ['class'=>'form-control']); ?>

    </div> 
    <div class="form-group"> 
        <?php echo Form::label('published', 'Published'); ?> 
        <?php echo Form::select('published', ['yes' => 'Yes', 'no' => 'No'], null, ['class'=>'form-control']); ?> 
    </div> 
    <div class="form-group"> 
        <?php echo Form::label('kategori', 'Kategori'); ?> 
        <?php if(count($list_berita)>0): ?> 
        <?php echo Form::select('id_kategori',$list_berita, null, ['class'=>'form-control','id'=>'id_kategori','placeholder'=>'Pilih Kategori']); ?> 
        <?php else: ?> 
        <p>tidak ada pilihan Kategori</p> 
        <?php endif; ?> 
    </div>

<div class="form-group">
    <?php echo Form::label('tag', 'Tag Berita'); ?>

    <?php if(count($list_tag)>0): ?>
        <?php $__currentLoopData = $list_tag; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="checkbox">
                <label><?php echo Form::checkbox('tag[]',$key, null); ?>

                        <?php echo e($value); ?>

                </label>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
    <p>tidak ada pilihan</p>
    <?php endif; ?>
</div>

    <?php echo Form::submit('Save', ['class'=>'btn btn-primary']); ?> 
    <?php echo Form::close(); ?> <?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\weblaravel2\resources\views/news/create.blade.php ENDPATH**/ ?>