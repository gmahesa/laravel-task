<?php $__env->startSection('body'); ?>

      <form method="post" action="<?php echo e(route('post.update', 1)); ?>">
        <?php echo method_field('PATCH'); ?>
        <?php echo csrf_field(); ?>
        <div class="form-group">
          <label for="name">Share Name:</label>
          <input type="text" class="form-control" name="share_name" value=<?php echo e($post->id); ?> />
        </div>
        <div class="form-group">
          <label for="price">Share Price :</label>
          <input type="text" class="form-control" name="share_price" value=<?php echo e($post->title); ?> />
        </div>
        <div class="form-group">
          <label for="quantity">Share Quantity:</label>
          <input type="text" class="form-control" name="share_qty" value=<?php echo e($post->content); ?> />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webLaravel\resources\views/news/_news-form.blade.php ENDPATH**/ ?>