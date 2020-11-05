<nav class="sidebar navbar-expand-md  bg-danger pl-2 h-100 text-center">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#left-menu"
        aria-controls="left-menu" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        {{-- <span class="navbar-toggler-icon">MENU</span>
        --}}
        MENU <span class="arrow-menu"><i class="fas fa-arrow-down"></i></span>
    </button>


    <div class="collapse navbar-collapse" id="left-menu">

        <ul class="nav flex-column   pb-5">
            <li class="nav-item mt-5 {{ active('/') }}"><a class="nav-link " href="/"><i class="fas fa-house-user"></i>
                    Accueil</a></li>

            <h3 class="mt-3">Contrats</h3>
            <li class="nav-item {{ active('indicateurs') }}"><a class="nav-link"
                    href="{{ route('indicateurs.index') }}"><i class="fas fa-bookmark"></i>
                    Indicateurs</a></li>
            <li class="nav-item {{ active('sites') }}"><a class="nav-link" href="{{ route('sites.index') }}"><i
                        class="fas fa-building"></i>
                    Sites</a></li>
            <li class="nav-item {{ active('locaux') }}"><a class="nav-link" href="{{ route('locaux.index') }}"><i
                        class="fas fa-warehouse"></i>
                    Locaux</a></li>
            <li class="nav-item {{ active('equipements') }}"><a class="nav-link"
                    href="{{ route('equipements.index') }}"><i class="fas fa-fire-extinguisher"></i> Equipements</a>
            </li>
            <li class="nav-item {{ active('famille_equipements') }}"><a class="nav-link"
                    href="{{ route('famille_equipements.index') }}"><i class="fas fa-cubes"></i> Familles
                    Equipements</a>
            </li>
            <li class="nav-item {{ active('calendriers_scolaire') }}"><a class="nav-link"
                    href="{{ route('calendriers_scolaire.index') }}"><i class="fas fa-calendar-alt"></i> Calendriers
                    Scolaires</a></li>
            <li class="nav-item {{ active('fermetures') }}"><a class="nav-link"
                    href="{{ route('fermetures.index') }}"><i class="fas fa-store-alt-slash"></i> Fermetures</a></li>
            <li class="nav-item {{ active('taux_disponibilites') }}"><a class="nav-link"
                    href="{{ route('taux_disponibilites.index') }}"><i class="fas fa-chart-pie"></i> Taux de
                    disponibilite</a></li>
            <li class="nav-item {{ active('niveaux_retenues') }}"><a class="nav-link"
                    href="{{ route('niveaux_retenues.index') }}"><i class="fas fa-chart-bar"></i> Niveaux de retenue</a>
            </li>
            <li class="nav-item {{ active('temps_retablissements') }}"><a class="nav-link"
                    href="{{ route('temps_retablissements.index') }}"><i class="fas fa-hourglass-start"></i> Temps de
                    retablissement</a></li>
            <li class="nav-item {{ active('reactivites') }}"><a class="nav-link"
                    href="{{ route('reactivites.index') }}"><i class="fas fa-user-clock"></i>
                    Reactivites</a></li>
            <li class="nav-item {{ active('periodicites') }}"><a class="nav-link"
                    href="{{ route('periodicites.index') }}"><i class="fab fa-creative-commons-sampling"></i>
                    Periodicites</a></li>
            <li class="nav-item {{ active('periodes') }}"><a class="nav-link" href="{{ route('periodes.index') }}"><i
                        class="far fa-calendar-plus"></i>
                    Periodes</a></li>

            <hr>

            <h3>OT</h3>

            <li class="nav-item {{ active('operations') }}"><a class="nav-link"
                    href="{{ route('operations.index') }}"><i class="fas fa-wrench"></i>
                    Operations</a></li>
            <li class="nav-item {{ active('valeurs_indicateurs') }}"><a class="nav-link"
                    href="{{ route('valeurs_indicateurs.index') }}"><i class="fas fa-level-up-alt"></i> Valeurs
                    Indicateurs</a></li>

        </ul>
    </div>
</nav>
