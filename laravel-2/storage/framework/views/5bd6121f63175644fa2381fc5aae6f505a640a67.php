 
<?php $__env->startSection('title', 'Berita'); ?> 
<?php $__env->startSection('head'); ?>
<header >
    <h1 class="title-site" font-family:stencil;>Halaman Pertama Portal- Kabar Burung</h1>
</header>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
<body >
<div class="btn-group btn">
    <a href="/post" class="btn btn-info bt-md">Berita </a>
			|
			<a href="/post/kategori"class="btn btn-info bt-md">Kategori</a>
            |
			<a href="/post/tag"class="btn btn-info bt-md">Tag</a>
            |
            <a href="<?php echo e(route('user.index')); ?>"class="btn btn-info bt-md">User</a>

</div>
<table class="table table-hover table-striped" style="background-color:#ecf0f1;"> 
<a>-LIST BERITA-</a>
    <thead class="thead-dark">     
        <tr style="text-align: center"> 
            <th>No</th> 
            <th>Title</th> 
            <th>Published</th>
            <th>Pencipta</th>
            <th>Tanggal</th>
            <th>Kategori</th> 
            <th>Aksi</th>
            </tr> 
    </thead> 
    <tbody > <?php $no=0 ?> 
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
    <?php $no++ ?> 
        <tr> 
            <td  style="text-align: center" ><?php echo e($no); ?></td> 
            <td><?php echo e($post->title); ?></td> 
            <td>
            <?php $__currentLoopData = $post->tag; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <strong><?php echo e(!empty($item->nama_tag) ? $item->nama_tag : '-'); ?>,</strong>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </td>
            <td>
                <?php echo e(!empty($post->pencipta->nama_pencipta) ? $post->pencipta->nama_pencipta : '-'); ?>

            </td>
            <td  style="text-align: center" ><?php echo e(!empty($post->kategori->nama_kategori) ? $post->kategori->nama_kategori : '-'); ?></td>
            <td style ="font-size: 13px"><?php echo e($post->created_at->format('H.m ,M d, Y')); ?></td> 
            
            
            <td  style="align: center" > 
                <a href="/edit/<?php echo e($post->id); ?>" class="btn btn-success bt-sm">Edit </a>
                <a href="/detail/<?php echo e($post->id); ?>" class="btn btn-info bt-sm">Detail </a>
                <a href="/post/<?php echo e($post->id); ?>" class="btn btn-danger bt-sm">Delete </a>
            </td> 
            
        </tr> 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
    </tbody> 

</table> 
<table ><tr>
<td>
<a href="/news" class="btn btn-primary bt-sm">Tambah </a>
</td>
<td width="600px"></td> <td></td>
<td> <?php echo $posts->links(); ?></td>
</tr></table>

<?php $__env->stopSection(); ?>

</body>
	
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\weblaravel2\resources\views/index.blade.php ENDPATH**/ ?>