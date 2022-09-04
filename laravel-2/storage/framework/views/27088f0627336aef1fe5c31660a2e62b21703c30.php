<!DOCTYPE html>
<html>
<body>
  
    <div class="form-group"> 
        <?php echo Form::label('pencipta', 'Pencipta'); ?> 
     <?php echo Form::text('nama_pencipta', null, ['class'=>'form-control']); ?>

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

    <?php if(count(create()->$list_tag)>0): ?>
        <?php $__currentLoopData = create()->$list_tag; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
?>
</body>
</html><?php /**PATH C:\xampp\htdocs\webLaravel\resources\views/news/news-form.blade.php ENDPATH**/ ?>