@extends('admin.templates.main')

<table class="table table-striped">
	<thead>
		<th>id</th>
		<th>tipo de gente</th>
	</thead>
	<tbody>
		@foreach($gente as $gentes)
		<tr>
			
			<td>{{  $gentes->id }}</td>
			<td>{{ $gentes->gentes }}</td>
			<td><a href="{{ route('gente/gentes/destroy',$gentes->id) }}" class="btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
			<a href="{{ route('gente.gentes.edit',$gentes->id)  }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a></td>
			
		</tr>
		@endforeach
	</tbody>

</table>

{!! $gente->render() !!}