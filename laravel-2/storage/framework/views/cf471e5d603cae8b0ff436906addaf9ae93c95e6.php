<div class="form-group">
<?php echo Form::label('nama', 'Nama'); ?> 
<?php echo Form::text('name', null, ['class'=>'formcontrol']); ?>

</div>

<div class="form-group">
<?php echo Form::label('email', 'Email'); ?>

<?php echo Form::email('email', null, ['class'=>'formcontrol']); ?>

</div>

<div class="form-group">
<?php echo Form::label('level', 'Level'); ?> <br>
<?php echo Form::radio('level', 'operator',null,['class'=>'form-radio']); ?> Operator <br>

<?php echo Form::radio('level', 'admin',
null, ['class'=>'form-radio']); ?> Administrator
</div>


<div class="form-group">
  <?php echo Form::label('password','Password',['class'=>'form-label']); ?>

  <input id="password" type="password" class="formcontrol<?php echo e($errors->has('password')? ' is-invalid':''); ?>" name="password" required>
</div>
<?php echo Form::submit('Save', ['class'=>'btn btnprimary']); ?>


<?php /**PATH C:\xampp\htdocs\weblaravel2\resources\views/user/_user-form.blade.php ENDPATH**/ ?>