<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Gestion Institut</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page"  href="{{url('/')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/create/etudiant')}}">Etudiant</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/create/enseignant')}}">Enseignant</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/create/diplome')}}">Diplome</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/create/cour')}}">Cour</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/getStats')}}">Statistique</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>