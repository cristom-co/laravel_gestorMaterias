<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('/img/user3-128x128.jpg')}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif


        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            
            @if (Auth::user()->type == "admin")
                <li class="header">Administrador</li>
                <li class="active"><a href="{{ route('admin.index') }}"><i class='fa fa-link'></i> <span>Inicio</span></a></li>
                <li><a href="{{ url('admin/users') }}"><i class='fa fa-link'></i> <span>Usuarios</span></a></li>
                <li><a href="{{ url('admin/profesores') }}"><i class='fa fa-link'></i> <span>Profesores</span></a></li>
                <li><a href="{{ url('admin/carreras') }}"><i class='fa fa-link'></i> <span>Carreras</span></a></li>
                <li><a href="{{ url('admin/materias') }}"><i class='fa fa-link'></i> <span>Materias</span></a></li>
                <li><a href="{{ url('admin/estudiantes') }}"><i class='fa fa-link'></i> <span>Estudiantes</span></span></a></li>
            @else 
                <li class="header">Estudiante</li>
                <li class="active"><a href="{{ url('estudiante/materias_estudiante') }}"><i class='fa fa-link'></i> <span>Programacion Materias</span></a></li>
            @endif
            

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
