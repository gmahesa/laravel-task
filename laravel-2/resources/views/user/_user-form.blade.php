<div class="form-group">
{!! Form::label('nama', 'Nama') !!} 
{!! Form::text('name', null, ['class'=>'formcontrol']) !!}
</div>

<div class="form-group">
{!! Form::label('email', 'Email') !!}
{!! Form::email('email', null, ['class'=>'formcontrol'])!!}
</div>

<div class="form-group">
{!!
Form::label('level', 'Level') !!} <br>
{!!
Form::radio('level', 'operator',null,['class'=>'form-radio'])!!} Operator <br>

{!! Form::radio('level', 'admin',
null, ['class'=>'form-radio']) !!} Administrator
</div>


<div class="form-group">
  {!! Form::label('password','Password',['class'=>'form-label']) !!}
  <input id="password" type="password" class="formcontrol{{$errors->has('password')? ' is-invalid':''}}" name="password" required>
</div>
{!! Form::submit('Save', ['class'=>'btn btnprimary'])!!}

