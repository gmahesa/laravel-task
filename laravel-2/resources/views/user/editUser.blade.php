{!! Form::model($user, ['route' => ['user.update', $user],'method'=>'PUT']) !!}
@include('user._user-form')
{!! Form::close() !!} 