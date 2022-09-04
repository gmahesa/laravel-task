 
<?php $__env->startSection('title', 'Kategori'); ?> 
<?php $__env->startSection('head'); ?>
<header >
                    <h1 class="title-site" font-family:stencil;>Rrose News- Kabar Burung</h1>
                    <p href="master.blade.php?page=kategori"class="description">Rahmat Agung Hadiwardoyo - 2017_237</p>
</header>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
<body>
<div class="btn-group btn">
    <a href="/post" class="btn btn-info bt-md">Berita </a>
			|
			<a href="/post/kategori"class="btn btn-info bt-md">Kategori</a>
			|
			<a href="/post/tag"class="btn btn-info bt-md">Tag</a>
    </div>
<table class="table table-hover table-striped" style="background-color:#ecf0f1;"> 
    <a>-KATEGORI-</a>
    <thead class="thead-dark" >     
        <tr  style="text-align: center" > 
            <th>No</th> 
            <th>Kategori</th>
            <th>Release</th> 
            <th>Aksi</th>
            </tr> 
    </thead> 
    <tbody  style="text-align: center"> <?php $no=0 ?> 
    <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
    <?php $no++ ?> 
        <tr> 
            <td><?php echo e($kat->id); ?></td> 
            
            <td><?php echo e($kat->nama_kategori); ?></td>
            <td style ="font-size: 13px"><?php echo e($kat->created_at->format('H.m ,M d, Y')); ?></td> 

            <td> 

                <a href="/post/hapusKat/<?php echo e($kat->id); ?>" class="btn btn-danger bt-sm">Delete </a>
		        
            </td> 
            
        </tr> 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
    </tbody> 
</table> 
<table ><tr>
<td>
<a href="/newskat" class="btn btn-primary bt-sm">Tambah </a>
</td>
<td width="600px"></td> <td></td>
<td> <?php echo $kategori->links(); ?></td>
</tr></table>
<?php $__env->stopSection(); ?>
</body>		
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webLaravel\resources\views/kategori.blade.php ENDPATH**/ ?>