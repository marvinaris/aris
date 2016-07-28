@extends('admin.templates.main')
<a href="{{ route('admin.user.create') }}" class="btn btn-info">Registrarse</a>
<table class="table table-striped">
	<thead>
		<th>id</th>
		<th>nombre</th>
		<th>correo</th>
		<th>tipo</th>
		<th>accion</th>
	</thead>
	<tbody>
		@foreach($user as $use)
		<tr>
			<td>{{ $use->id  }}</td>
			<td>{{ $use->name }}</td>
			<td>{{ $use->email  }}</td>
			<td>{{ $use->type }}  </td>
			<td><a href="{{ route('admin/user/destroy',$use->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
			<a href="{{ route('admin.user.edit', $use->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a></td>

		</tr>

		@endforeach
	</tbody>

	
</table>
{!! $user->render() !!}