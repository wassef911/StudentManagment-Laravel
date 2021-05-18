<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Gestion etudiant</title>
  </head>
  <body class="bg-dark text-primary">
    @include("navbar")
<div class="d-flex justify-content-center align-items-center flex-wrap">



@if($layout == 'create')
    <div class="container-fluid mt-4 " id="create-form">
        <div class="row">
            <section class="col-md-7">
                @include("etudiant.etudiantListe")
            </section>
            <section class="col-md-5">
                <div class="card mb-3">
                    <img src="/assets/image2.png" class="img-fluid" alt="image">
                    <div class="card-body">
                        <h5 class="card-title">enter les informations du nouveau etudiant</h5>
                        <form action="{{ url('/store/etudiant') }}" method="post">
                            @csrf 
                            <div class="form-group">
                                <label>CIN</label>
                                <input name="cin" type="text" class="form-control"  placeholder="CIN Etudiant">
                            </div>
                            <div class="form-group">
                                <label>Nom</label>
                                <input name="nom" type="text" class="form-control"  placeholder="Nom Etudiant">
                            </div>      
                            <div class="form-group">
                                <label>Prenom</label>
                                <input name="prenom" type="text" class="form-control"  placeholder="Prenom Etudiant">
                            </div>
                            <div class="form-group">
                                <label>Telephone</label>
                                <input name="tel" type="text" class="form-control"  placeholder="Telephone Etudiant">
                            </div>
                            <div class="form-group">
                                <label>Age</label>
                                <input name="age" type="text" class="form-control"  placeholder="Age Etudiant">
                            </div>
                            <div class="form-group">
                                <label>Diplome</label>
                                <input name="diplome" type="text" class="form-control"  placeholder="Diplome Etudiant">
                            </div>
                            <div class="form-group">
                                <label>Mail</label>
                                <input name="mail" type="text" class="form-control"  placeholder="Diplome Etudiant">
                            </div>
                            <div class="form-group">
                                <label>Login</label>
                                <input name="login" type="text" class="form-control"  placeholder="Login Etudiant">
                            </div>
                            <div class="form-group">
                                <label>Mot De Passe</label>
                                <input name="mdp" type="password" class="form-control"  placeholder="Mot De Passe Etudiant">
                            </div>
                            <div class="form-group">
                                <label>Group</label>
                                <input name="group" type="text" class="form-control"  placeholder="Group Etudiant">
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
                @include("etudiant.etudiantListe")
            </section>
            <section class="col"></section>
        </div>
    </div>
@elseif($layout == 'edit')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include("etudiant.etudiantListe")
            </section>
            <section class="col-md-5">
                <div class="card mb-3">
                    <img src="/assets/image1.png" class="img-fluid" alt="image">
                    <div class="card-body">
                        <h5 class="card-title">enter les informations du nouveau etudiant</h5>
                        <form action="{{ url('/update/etudiant/'.$etudiant->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>CIN</label>
                                <input value="{{ $etudiant->cin }}" name="cin" type="text" class="form-control"  placeholder="CIN Etudiant">
                            </div>
                            <div class="form-group">
                                <label>Nom</label>
                                <input value="{{ $etudiant->nom }}" name="nom" type="text" class="form-control"  placeholder="Nom Etudiant">
                            </div>
                            <div class="form-group">
                                <label>Prenom</label>
                                <input value="{{ $etudiant->prenom }}" name="prenom" type="text" class="form-control"  placeholder="Prenom Etudiant">
                            </div>
                            <div class="form-group">
                                <label>Telephone</label>
                                <input value="{{ $etudiant->tel }}" name="tel" type="text" class="form-control"  placeholder="Telephone Etudiant">
                            </div>
                            <div class="form-group">
                                <label>Age</label>
                                <input value="{{ $etudiant->age }}" name="age" type="text" class="form-control"  placeholder="Age Etudiant">
                            </div>
                            <div class="form-group">
                                <label>Diplome</label>
                                <input value="{{ $etudiant->diplome }}" name="diplome" type="text" class="form-control"  placeholder="Diplome Etudiant">
                            </div>
                            <div class="form-group">
                                <label>Mail</label>
                                <input value="{{ $etudiant->mail }}" name="mail" type="text" class="form-control"  placeholder="Mail Etudiant">
                            </div>
                            <div class="form-group">
                                <label>Login</label>
                                <input value="{{ $etudiant->login }}" name="login" type="text" class="form-control"  placeholder="Login Etudiant">
                            </div>
                            <div class="form-group">
                                <label>Mot De Passe</label>
                                <input value="{{ $etudiant->mdp }}" name="mdp" type="password" class="form-control"  placeholder="Mot De Passe Etudiant">
                            </div>
                            <div class="form-group">
                                <label>Group</label>
                                <input value="{{ $etudiant->group }}" name="group" type="text" class="form-control"  placeholder="Group Etudiant">
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