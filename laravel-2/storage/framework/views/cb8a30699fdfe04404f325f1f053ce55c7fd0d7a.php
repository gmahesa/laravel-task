 
<?php $__env->startSection('title', 'Tag'); ?> 
<?php $__env->startSection('head'); ?>
<header >
                    <h1 class="title-site" font-family:stencil;>Rrose News- Kabar Burung</h1>
                    <p href="master.blade.php?page=kategori"class="description">wat</p>
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
<a>-TAG-</a>
    <thead class="thead-dark" >     
        <tr  style="text-align: center"> 
            <th>No</th> 
            <th>Tag</th>
            <th>Release</th> 
            <th>Aksi</th>
            </tr> 
    </thead> 
    <tbody  style="text-align: center"> <?php $no=0 ?> 
    <?php $__currentLoopData = $tag; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
    <?php $no++ ?> 
        <tr> 
            <td><?php echo e($ta->id); ?></td> 
            <td><?php echo e($ta->nama_tag); ?></td>
            <td style ="font-size: 13px"><?php echo e($ta->created_at->format('H.m ,M d, Y')); ?></td> 

            <td> 
		        <a href="/post/hapusTag/<?php echo e($ta->id); ?>" class="btn btn-danger bt-sm">Delete </a>
            </td> 
            
        </tr> 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
    </tbody> 
</table> 
<table ><tr>
<td>
<a href="/newstag" class="btn btn-primary bt-sm">Tambah </a>
</td>
<td width="600px"></td> <td></td>
<td> <?php echo $tag->links(); ?></td>
</tr></table>
<?php $__env->stopSection(); ?>
</body>		
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\contohComposer\weblaravel\resources\views/tag.blade.php ENDPATH**/ ?>