<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a  class="navbar-brand " href="{{route('homepage')}}" href="#page-top"><i class="fa-solid fa-dumbbell px-2" style="color: #ffc800;"></i>Gym</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link" href="#services">Servizi</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('corsi')}}">Corsi</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('contatti')}}">Contatti</a></li>
            </ul>
        </div>
    </div>
</nav>