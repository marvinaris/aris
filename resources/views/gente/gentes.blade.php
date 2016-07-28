@extends('admin.templates.main')

{!! Form::open(['route'=> 'gente.gentes.store', 'method'=>'POST'])   !!}

<div class="form-group">
	{!!  Form::label('gentes', 'gentes') !!}
	{!!  Form::text('gentes',null,['class'=>'form-control','placeholder'=>'gentes'])  !!}
</div>

<div class="form-group">
	{!!  Form::submit('enviar',['class'=>'btb btn-info'])   !!}

</div>

<a href="{{ route('gente.gentes.index') }}" class="btn btn-info">listar los tipos de gente</a>

{!!  Form::close() !!}

