@extends('admin.templates.main')
{!! Form::open(['route'=> ['gente.gentes.update', $gente], 'method'=>'PUT'])   !!}

<div class="form-group">
	{!!  Form::label('gentes', 'gentes') !!}
	{!!  Form::text('gentes',$gente->gentes,['class'=>'form-control', 'placeholder'=>'gente'])  !!}
</div>

<div class="form-group">
	{!!  Form::submit('enviar',['class'=>'btb btn-info'])   !!}

</div>

<a href="{{ route('gente.gentes.index') }}" class="btn btn-info">listar los tipos de gente</a>

{!!  Form::close() !!}