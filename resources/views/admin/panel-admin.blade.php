@extends('layouts.app')

@section('htmlheader_title')
	
@endsection

@section('contentheader_title', 'Panel del administrador')

@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Home</div>
					<div class="panel-body">
						@include('flash::message')
                        @yield('forms')
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection