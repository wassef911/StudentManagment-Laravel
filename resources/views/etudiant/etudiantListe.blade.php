 <div class="card mb-3 shadow">
          <div class="card-body">
            <h5 class="card-title">La liste des etudiants </h5>      
            <p class="card-text text-secondary">Vous pouvez trouver ici toutes les informations sur les étudiants dans le système</p>
            @if(!isset($etudiants))
            <div class="d-flex justify-content-center">
              <h3 class="text-black-50">
                ce tableau est vide
              </h3>
            </div>
           @else
              <table class="table table-dark table-striped shadow">
                  <thead class="thead-light">
                  <tr>
                      <th scope="col">CIM</th>
                      <th scope="col">Nom</th>
                      <th scope="col">Prenom</th>
                      <th scope="col">Age</th>
                      <th scope="col">Diplome</th>
                      <th scope="col">Operation</th>  
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($etudiants as $etudiant)
                    <tr class="table-active">
                      <td>{{$etudiant->cin}}</td>
                      <td>{{$etudiant->nom}}</td>
                      <td>{{$etudiant->prenom}}</td>
                      <td>{{$etudiant->age}}</td>
                      <td>{{$etudiant->diplome}}</td>
                      <td>
                        <a type="button" class="btn btn-warning m-1"  href="{{url('/edit/etudiant/'.$etudiant->id)}}">
                        <i class="bi bi-pencil-square"></i>
                        </a>
                        <a type="button" class="btn btn-danger"  href="{{url('/destroy/etudiant/'.$etudiant->id)}}">
                        <i class="bi bi-eraser"></i>
                        </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
              </table>
              @endif
          </div>
  </div>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">