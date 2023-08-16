<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>





  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu">
            @foreach($categorieDamostrare as $cat)
            <li><a class="dropdown-item" href="{{route('categorie',['categoria'=>$cat])}}">{{$cat}}</a></li>
            @endforeach
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu">
            @foreach($marcheDamostrare as $marc)
            <li><a class="dropdown-item" href="{{route('marche',['marca'=>$marc])}}">{{$marc}}</a></li>
            @endforeach
          </ul>
        </li>

      </ul>
    </div>
  </div>
</nav>












<section class="container mt-5" >
<div class="row" >
@foreach($artMarc as $article)
<div class="col-12 col-md-3 my-3">
<div class="card" style="width: 18rem; background-color:rgb(212, 210, 210)">
<img class="px-2 py-2" style="height: 400px;" src="{{ $article['foto'] }}" alt="">
<div class="card-body">
<h5 class="card-title">{{ $article['nome'] }}</h5>
<p class="card-text">{{ $article['marca'] }}</p>
<p class="card-text">{{ $article['prezzo'] }}</p>
</div>
</div>
</div>
@endforeach
</div>
</section>




















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>