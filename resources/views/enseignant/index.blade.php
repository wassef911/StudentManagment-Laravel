<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Gestion Enseignant</title>
  </head>
  <body class="bg-dark text-primary">
    @include("navbar")
<div class="d-flex justify-content-center align-items-center flex-wrap">


@if($layout == 'create')
    <div class="container-fluid mt-4 " id="create-form">
        <div class="row">
            <section class="col-md-7">
                @include("enseignant.enseignantListe")
            </section>
            <section class="col-md-5">
                <div class="card mb-3">
                    <img src="/assets/image2.png" class="img-fluid" alt="image">
                    <div class="card-body">
                        <h5 class="card-title">enter les informations du nouveau enseignant</h5>
                        <form action="{{ url('/store/enseignant') }}" method="post">
                            @csrf 
                            <div class="form-group">
                                <label>CIN</label>
                                <input name="cin" type="text" class="form-control"  placeholder="CIN Enseignant">
                            </div>
                            <div class="form-group">
                                <label>Nom</label>
                                <input name="nom" type="text" class="form-control"  placeholder="Nom Enseignant">
                            </div>      
                            <div class="form-group">
                                <label>Prenom</label>
                                <input name="prenom" type="text" class="form-control"  placeholder="Prenom Enseignant">
                            </div>
                            <div class="form-group">
                                <label>Telephone</label>
                                <input name="tel" type="text" class="form-control"  placeholder="Telephone Enseignant">
                            </div>
                            <div class="form-group">
                                <label>Mail</label>
                                <input name="mail" type="text" class="form-control"  placeholder="Mail Enseignant">
                            </div>
                            <div class="form-group">
                                <label>Numero de bureau</label>
                                <input name="numbur" type="text" class="form-control"  placeholder="Numero De Bureau Enseignant">
                            </div>
                            <div class="form-group">
                                <label>Grade</label>
                                <select name="grade" class="form-select">
                                    <option value="pr" selected>PR</option>
                                    <option value="mcf">MCF</option>
                                    <option value="contractuel">Contractuel</option>
                                  </select>                 
                            </div>
                            <input type="submit" class="btn btn-success" value="Enregistrer">
                            <input type="reset" class="btn btn-danger" value="Annuler">
                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>
@elseif($layout == 'show')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col">
                @include("enseignant.enseignantListe")
            </section>
            <section class="col"></section>
        </div>
    </div>
@elseif($layout == 'edit')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include("enseignant.enseignantListe")
            </section>
            <section class="col-md-5">
                <div class="card mb-3">
                    <img src="/assets/image1.png" class="img-fluid" alt="image">
                    <div class="card-body">
                        <h5 class="card-title">Mise a jour enseignants</h5>
                        <form action="{{ url('/update/enseignant/'.$enseignant->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>CIN</label>
                                <input value="{{ $enseignant->cin }}" name="cin" type="text" class="form-control"  placeholder="CIN Enseignant">
                            </div>
                            <div class="form-group">
                                <label>Nom</label>
                                <input value="{{ $enseignant->nom }}" name="nom" type="text" class="form-control"  placeholder="Nom Enseignant">
                            </div>
                            <div class="form-group">
                                <label>Prenom</label>
                                <input value="{{ $enseignant->prenom }}" name="prenom" type="text" class="form-control"  placeholder="Prenom Enseignant">
                            </div>
                            <div class="form-group">
                                <label>Telephone</label>
                                <input value="{{ $enseignant->tel }}" name="tel" type="text" class="form-control"  placeholder="Telephone Enseignant">
                            </div>
                            <div class="form-group">
                                <label>Mail</label>
                                <input value="{{ $enseignant->mail }}" name="mail" type="text" class="form-control"  placeholder="Mail Enseignant">
                            </div>
                            <div class="form-group">
                                <label>Numero De Bureau</label>
                                <input value="{{ $enseignant->numbur }}" name="numbur" type="text" class="form-control"  placeholder="Numero De Bureau Enseignant">
                            </div>
                            <div class="form-group">
                                <label>Grade</label>
                                <select class="form-select">
                                    <option value="pr" selected>PR</option>
                                    <option value="mcf">MCF</option>
                                    <option value="contractuel">Contractuel</option>
                                  </select>                 
                            </div>
                            <input type="submit" class="btn btn-success" value="Mise a jour">
                            <input type="reset" class="btn btn-danger" value="Annuler">
                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>
@endif

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>