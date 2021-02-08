<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">UNIPRO</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    @auth

    @if (Auth::user()->profile->nom =="Etudiant")

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('home')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    @endif
    @endauth

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Gestion Campagnes/Inscription
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Gestion Scolarité</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header"></h6>
                <a class="collapse-item" href="{{ route('nationnalite.index') }}">Gestion des Nationnalités</a>
                <a class="collapse-item" href="{{ route('etudiant.index') }}">Gestion des Etudiants</a>
                <a class="collapse-item" href="{{ route('annee.index') }}">Gestion des Annee Scolaire</a>
                <a class="collapse-item" href="{{ route('semestre.index') }}">Gestion des Semestre</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTree"
            aria-expanded="true" aria-controls="collapseTree">
            <i class="fas fa-fw fa-cog"></i>
            <span>Gestion des Paiements & Inscprition</span>
        </a>
        <div id="collapseTree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header"></h6>
                <a class="collapse-item" href="{{ route('inscription.index') }}">Gestion des Inscriptions</a>
                @auth
                    @if (Auth::user())
                    <a class="collapse-item" href="{{ route('paiement.index') }}">Gestion des Paiements</a>
                    <a class="collapse-item" href="{{ route('modepaiement.index') }}">Gestion des Mode de Paiements</a>
                    @endif
                @endauth
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFoor"
            aria-expanded="true" aria-controls="collapseFoor">
            <i class="fas fa-fw fa-cog"></i>
            <span>Gestion des Evaluations</span>
        </a>
        <div id="collapseFoor" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header"></h6>
                <a class="collapse-item" href="{{ route('evaluation.index') }}">Gestion des Evaluations</a>
                <a class="collapse-item" href="{{ route('note.index')}}">Gestion des Notes</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive"
            aria-expanded="true" aria-controls="collapseFive">
            <i class="fas fa-fw fa-cog"></i>
            <span>Gestion Cours</span>
        </a>
        <div id="collapseFive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header"></h6>
                <a class="collapse-item" href="{{ route('ec.index') }}">Gestion des EC </a>
                <a class="collapse-item" href="{{ route('professeur.index') }}">Gestion des professeurs </a>
                <a class="collapse-item" href="{{ route('absence.index') }}">Gestion des Absences </a>
                <a class="collapse-item" href="{{ route('salle.index') }}">Gestion des Salles </a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSix"
            aria-expanded="true" aria-controls="collapseSix">
            <i class="fas fa-fw fa-cog"></i>
            <span>Parcours et Formations</span>
        </a>
        <div id="collapseSix" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header"></h6>
                <a class="collapse-item" href="{{ route('classe.index') }}">Gestion des classes </a>
                <a class="collapse-item" href="{{ route('specialite.index') }}">Gestion des specialite </a>
                <a class="collapse-item" href="{{ route('mention.index') }}">Gestion des mentions </a>
                <a class="collapse-item" href="{{ route('ue.index') }}">Gestion des UE </a>
                <a class="collapse-item" href="{{ route('domaine.index') }}">Gestion des Domaines </a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <!--<li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="utilities-color.html">Colors</a>
                <a class="collapse-item" href="utilities-border.html">Borders</a>
                <a class="collapse-item" href="utilities-animation.html">Animations</a>
                <a class="collapse-item" href="utilities-other.html">Other</a>
            </div>
        </div>
    </li>-->
    <!-- Divider
    <hr class="sidebar-divider">

     Heading
    <div class="sidebar-heading">
        Addons
    </div>

     Nav Item - Pages Collapse Menu
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="{{ route('login')}}">Login</a>
                <a class="collapse-item" href="register.html">Register</a>
                <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="404.html">404 Page</a>
                <a class="collapse-item" href="blank.html">Blank Page</a>
            </div>
        </div>
    </li>

     Nav Item - Charts
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li>

     Nav Item - Tables
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li>-->
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    <div class="sidebar-card">
        <img class="sidebar-card-illustration mb-2" src="" alt="">
        <p class="text-center mb-2"><strong>School E-code</strong> Gestion de scolarité respectant le systeme LMD </p>
        <a class="btn btn-success btn-sm" href="">Veuillez consulter nos services!</a>
    </div>

</ul>
