 
<?php $__env->startSection('title', 'View'); ?> 
<?php $__env->startSection('head'); ?>
<header >
                    <h1 class="title-site" font-family:stencil;>View Berita</h1>
                    <p href="master.blade.php?page=kategori"class="description">Rahmat Agung Hadiwardoyo - 2017_237</p>
</header>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
<body >

<table class="table table-hover table-striped " style="background-color:#ecf0f1;"> 
<a>-DETAIL BERITA-</a>
    <thead class="bg-primary">     
        <tr> 
            <th>Komponen</th> 
            <th style="text-align: center" >Data</th>
            </tr> 
    </thead> 
    <tbody> 
        <tr> 
            <td>Judul</td>
            <td><?php echo e($post->title); ?></td> 
        </tr>
        <tr> 
            <td>Konten</td>
            <td><?php echo e($post->content); ?></td> 
        </tr>
        <tr>
            <td>Tag</td>
            <td>
            <?php $__currentLoopData = $post->tag; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo e(!empty($item->nama_tag) ? $item->nama_tag : '-'); ?>,
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </td>
            </tr>
        <tr>
            <td>Nama Penulis </td>
            <td>
                <?php echo e(!empty($post->pencipta->nama_pencipta) ? $post->pencipta->nama_pencipta : '-'); ?>

            </td>
        </tr>
        <tr>
            <td>Kategori </td>
            <td><?php echo e(!empty($post->kategori->nama_kategori) ? $post->kategori->nama_kategori : '-'); ?></td>
        </tr>
        <tr>
            <td>Tanggal Dibuat </td>
            <td style ="font-size: 13px"><?php echo e($post->created_at->format('H.m ,M d, Y')); ?></td> 
        </tr>
        <tr>
            <td> Tanggal Update</td>
            <td style ="font-size: 13px"><?php echo e($post->updated_at->format('H.m ,M d, Y')); ?></td> 
        </tr>
    </tbody> 

</table> 

<a href="/post" class="btn btn-primary bt-sm">Back </a>


<?php $__env->stopSection(); ?>

</body>
	
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webLaravel\resources\views/view.blade.php ENDPATH**/ ?>