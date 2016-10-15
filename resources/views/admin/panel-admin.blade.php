@extends('home')

@section('contentheader_title', 'Panel del administrador')

@section('forms')
	<div class="col-lg-4"><!-- Apply any bg-* class to to the info-box to color it -->
<div class="info-box bg-red">
  <span class="info-box-icon"><i class="fa fa-users"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">Usuarios</span>
    <span class="info-box-number">{{ $registros['usuarios'] }}</span>

  </div><!-- /.info-box-content -->
</div><!-- /.info-box --></div>
	<div class="col-lg-4"><!-- Apply any bg-* class to to the info-box to color it -->
<div class="info-box bg-yellow">
  <span class="info-box-icon"><i class="fa fa-building"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">Profesores</span>
    <span class="info-box-number">{{ $registros['profesores'] }}</span>
  </div><!-- /.info-box-content -->
</div><!-- /.info-box --></div>
	<div class="col-lg-4"><!-- Apply any bg-* class to to the info-box to color it -->
<div class="info-box bg-green">
  <span class="info-box-icon"><i class="fa fa-university"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">Carreras</span>
    <span class="info-box-number">{{ $registros['carreras'] }}</span>
  </div><!-- /.info-box-content -->
</div><!-- /.info-box --></div>

<div class="col-lg-6">
	<div class="info-box bg-aqua">
  <span class="info-box-icon"><i class="fa fa-book"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">Materias</span>
    <span class="info-box-number">{{ $registros['materias'] }}</span>
  </div><!-- /.info-box-content -->
</div><!-- /.info-box -->
</div>
<div class="col-lg-6">
	<div class="info-box bg-red">
  <span class="info-box-icon"><i class="fa fa-graduation-cap"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">Estudiantes</span>
    <span class="info-box-number">{{ $registros['estudiantes'] }}</span>
  </div><!-- /.info-box-content -->
</div><!-- /.info-box -->
</div>
@endsection