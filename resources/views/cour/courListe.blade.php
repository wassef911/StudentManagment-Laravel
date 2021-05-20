 <div class="card mb-3">
          <div class="card-body">
            <h5 class="card-title">La liste des cours </h5>      
            <p class="card-text text-secondary">Vous pouvez trouver ici toutes les informations sur les étudiants dans le système</p>
            @if(!isset($cours))
            <div class="d-flex justify-content-center">
              <h3 class="text-black-50">
                ce tableau est vide
              </h3>
            </div>
           @else
              <table class="table table-dark table-striped">
                  <thead class="thead-light">
                  <tr>
                      <th scope="col">Nom</th>
                      <th scope="col">Description</th>
                      <th scope="col">Duree</th>
                      <th scope="col">Enseignant</th>
                      <th scope="col">Diplome</th>
                      <th scope="col">Operation</th>  
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($cours as $cour)
                    <tr class="table-active">
                      <td>{{$cour->nom}}</td>
                      <td>{{$cour->description}}</td>
                      <td>{{$cour->duree}}</td>
                      <td>{{$cour->enseignant}}</td>
                      <td>{{$cour->diplome}}</td>
                      <td>
                        <a type="button" class="btn btn-warning mb-1"  href="{{url('/edit/cour/'.$cour->id)}}">
                        <i class="bi bi-pencil-square"></i>
                        </a>
                        <a type="button" class="btn btn-danger"  href="{{url('/destroy/cour/'.$cour->id)}}">
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