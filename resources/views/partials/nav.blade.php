@if (Auth::user())

    <nav class="d-flex navbar navbar-expand-lg navbar-light bg-white shadow-sm  p-0 m-0">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <img src="{{ asset('img/logoappv1.png') }}" alt="eiffage_logo">
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                <li class="nav-item "><a class="nav-link" href="/"><i class="fas fa-house-user"></i> Accueil</a></li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-info" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <i class="fas fa-user-tie"></i> <strong>{{ Auth::user()->name }}</strong>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                        @can('manage-users')
                            <a class="dropdown-item" href="{{ route('admin.users.index') }}"><i class="fas fa-tasks"></i>
                                Gestion des utilisateurs
                            </a>
                            <a class="dropdown-item" href="{{ route('admin.users.index') }}"><i
                                    class="fas fa-file-upload"></i> Import GMAO
                            </a>
                        @endcan
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"><i
                                class="fas fa-sign-out-alt"></i>
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>

            </ul>
        </div>
    </nav>
@endif
