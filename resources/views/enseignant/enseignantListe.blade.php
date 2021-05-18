 <div class="card mb-3">
          <div class="card-body">
            <h5 class="card-title">La liste des enseignants </h5>      
            <p class="card-text text-secondary">Vous pouvez trouver ici toutes les informations sur les enseignants dans le système</p>
            @if(!isset($enseignants))
            <div class="d-flex justify-content-center">
              <h3 class="text-black-50">
                ce tableau est vide
              </h3>
            </div>
           @else
              <table class="table table-dark table-striped">
                  <thead class="thead-light">
                  <tr>
                      <th scope="col">CIM</th>
                      <th scope="col">Nom</th>
                      <th scope="col">Prenom</th>
                      <th scope="col">Operation</th>  
                  </tr>
                  </thead>
                  <tbody>
                   @foreach($enseignants as $enseignant)
                   <tr class="table-active">
                     <td>{{$enseignant->cin}}</td>
                     <td>{{$enseignant->nom}}</td>
                     <td>{{$enseignant->prenom}}</td>
                     <td>
                       <a type="button" class="btn btn-warning"  href="{{url('/edit/enseignant/'.$enseignant->id)}}">
                        modifier
                       </a>
                       <a type="button" class="btn btn-danger"  href="{{url('/destroy/enseignant/'.$enseignant->id)}}">
                         supprimer
                       </a>
                     </td>
                   </tr>
                   @endforeach
                  </tbody>
              </table>
              @endif
          </div>
  </div>