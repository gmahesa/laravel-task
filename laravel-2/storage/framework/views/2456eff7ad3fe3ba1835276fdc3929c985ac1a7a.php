<th>No</th> 
<th>Nama</th>
<th>Email</th>
<th>Level</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php $no=0 ?>
<?php $__currentLoopData = App\User::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $no++ ?>
<tr>
<td><?php echo e($no); ?></td>
<td><?php echo e($user->name); ?></td>
<td><?php echo e($user->email); ?></td>
<td><?php echo e($user->level); ?></td>
<td> 
<?php echo Form::model($user, ['route' => ['user.destroy', 
$user], 'method'=>'delete', 'class' => 'forminline']); ?>


<a href="<?php echo e(route('user.edit',$user)); ?>" class="btn btn-xs btn-primary">edit</a> |
<?php echo Form::submit('delete', ['class'=>'btn btn-xs btndanger']); ?>

<?php echo Form::close(); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\xampp\htdocs\weblaravel2\resources\views/user/userIndex.blade.php ENDPATH**/ ?>