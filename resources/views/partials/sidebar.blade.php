<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('dashboard') }}" class="brand-link">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-bold">Microcurriculos </span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('identificacion') }}" class="nav-link {{ request()->routeIs('identificacion') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-id-card"></i>
                        <p>Identificación</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('propositos-formativos') }}" class="nav-link {{ request()->routeIs('propositos-formativos') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Propósitos Formativos</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('competencias') }}" class="nav-link {{ request()->routeIs('competencias') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tasks"></i>
                        <p>Competencias</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('plan-tematico') }}" class="nav-link {{ request()->routeIs('plan-tematico') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-list"></i>
                        <p>Plan Temático</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('evaluacion') }}" class="nav-link {{ request()->routeIs('evaluacion') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-clipboard-check"></i>
                        <p>Evaluación</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('perfil-docente') }}" class="nav-link {{ request()->routeIs('perfil-docente') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Perfil Docente</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>


<!-- Estilos CSS -->

<style>
    /* Estilos para el sidebar */
    .main-sidebar {
        background: #00450f;
        /* Color oscuro de fondo */
        color: #fff;
        /* Color del texto */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        /* Sombra */
    }

    .brand-link {
        display: flex;
        align-items: center;
        padding: 10px;
        background: #00450f;
        /* Color de fondo para el encabezado del sidebar */
        border-bottom: 1px solid #495057;
    }

    .brand-image {
        width: 40px;
        height: 40px;
        margin-right: 10px;
    }

    .nav-link {
        display: flex;
        align-items: center;
        padding: 10px 15px;
        color: #adb5bd;
        /* Color de texto de los enlaces */
        border-radius: 5px;
        transition: background 0.3s, color 0.3s;
    }

    .nav-link:hover {
        background: #495057;
        /* Color de fondo al pasar el cursor */
        color: #fff;
        /* Color de texto al pasar el cursor */
    }

    .nav-icon {
        margin-right: 10px;
    }

    .badge-info {
        background: #17a2b8;
        /* Color del badge */
    }

    .nav-sidebar>.nav-item {
        border-bottom: 1px solid #495057;
        /* Línea divisoria entre ítems */
    }

    .nav-sidebar>.nav-item:last-child {
        border-bottom: none;
    }
</style>