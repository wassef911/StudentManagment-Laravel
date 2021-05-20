<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Gestion diplome</title>
  </head>
  <body class="bg-dark text-primary">
    @include("navbar")
<div class="d-flex justify-content-center align-items-center flex-wrap">



@if($layout == 'create')
    <div class="container-fluid mt-4 " id="create-form">
        <div class="row">
            <section class="col-md-7">
                @include("diplome.diplomeListe")
            </section>
            <section class="col-md-5">
                <div class="card mb-3">
                    <img src="/assets/image2.png" class="img-fluid" alt="image">
                    <div class="card-body">
                        <h5 class="card-title">enter les informations du nouveau diplome</h5>
                        @if($errors->any())
                        @foreach ($errors->all() as $err)
                        <div class="alert alert-danger" role="alert">
                        {{$err}}
                        </div>
                        @endforeach
                        @endif
                        <form action="{{ url('/store/diplome') }}" method="post">
                            @csrf 
                            <div class="form-group">
                                <label>Nom</label>
                                <input name="nom" type="text" class="form-control"  placeholder="Nom Diplome">
                            </div>      
                            <div class="form-group">
                                <label>Description</label>
                                <input name="description" type="text" class="form-control"  placeholder="Description Diplome">
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
                @include("diplome.diplomeListe")
            </section>
            <section class="col"></section>
        </div>
    </div>
@elseif($layout == 'edit')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include("diplome.diplomeListe")
            </section>
            <section class="col-md-5">
                <div class="card mb-3">
                    <img src="/assets/image1.png" class="img-fluid" alt="image">
                    <div class="card-body">
                        <h5 class="card-title">Mise a jour diplomes</h5>
                        @if($errors->any())
                        @foreach ($errors->all() as $err)
                        <div class="alert alert-danger" role="alert">
                        {{$err}}
                        </div>
                        @endforeach
                        @endif
                        <form action="{{ url('/update/diplome/'.$diplome->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Nom</label>
                                <input value="{{ $diplome->nom }}" name="nom" type="text" class="form-control"  placeholder="Nom Diplome">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input value="{{ $diplome->prenom }}" name="description" type="text" class="form-control"  placeholder="Description Diplome">
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