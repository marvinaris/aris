@extends('admin.templates.main')


	{!! Form::open(['route'=> ['admin.user.update', $user], 'method' => 'PUT']) !!}
	<div class="form-group">
		{!! Form::label('name', 'nombre') !!}
		{!! Form::text('name',$user->name,['class'=> 'form-control', 'placeholder'=> 'nombre']) !!}
	</div>

<div class="form-group">
		{!! Form::label('email', 'email') !!}
		{!! Form::email('email',$user->email,['class'=> 'form-control', 'placeholder'=> 'correo electronico']) !!}
	</div>



	<div class="form-group">
		{!! Form::label('type','tipo') !!}
		{!! Form::select('type',['member'=> 'miembro','admin'=> 'administrador'],null,['class'=> 'form-control'])!!}
	</div>

	<div class="form-group">  
         {!! Form::submit('registrar',['class' => 'btn btn-primary']) !!}
	</div>


	{!! Form::close() !!}