@extends('reservas.principal')

@section('contenido-principal')
<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4>Detalle de Reserva</h4>
		</div>
		<div class="panel-body">
			@if(session('mensaje'))
			<div class="alert alert-success">
				{{ session('mensaje') }}
			</div>
			@endif

			@if($usuario->tipo  === 'docente')
			@include('reservas.vista.docente')
			@endif
			@if($usuario->tipo  === 'autorizado')
			@include('reservas.vista.autorizado')
			@endif

		</div>			
	</div>	
</div>     	
@endsection