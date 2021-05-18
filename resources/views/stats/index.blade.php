<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Gestion Institut</title>
  </head>
  <body class="bg-dark text-primary">
    @include("navbar")
    <br>
    <h4 class="text-center text-white">Le nombre total des diplomes : <span class="font-weight-bold">{{ count($nbDip)}} </span></h1>
    <div class="d-flex flex-row justify-content-center align-items-center w-25 p-4" >
        <canvas id="InscritA" width="400" height="400"></canvas>
    </div>
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <script type="text/javascript">
    var nombreEtudiant = [@for ($i = 0; $i < count($nbDip); $i++)
                @if ($i<count($nbDip)-1) {{ $nbDip[$i]->nombreEtudients }}, @else {{ $nbDip[$i]->nombreEtudients }}
                @endif
     @endfor];
     var ListeDiplome = [@for ($i = 0; $i < count($nbDip); $i++)
                @if ($i<count($nbDip)-1) '{{ $nbDip[$i]->nom }}', @else '{{ $nbDip[$i]->nom }}'
                @endif
     @endfor];
     var ctx = document.getElementById('InscritA').getContext('2d');
var InscritA = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ListeDiplome,
        datasets: [{
            label: 'Nombre des etudiant',
            data: nombreEtudiant,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
            </script>    
  </html>
