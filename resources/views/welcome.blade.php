<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <title>Vintage</title>
</head>
<body>  
    <div class="container-fluid fixed-top" style="background-color: black;color: white;">
        <div class="row">
            <p style="margin-left: 45%;">FREE SHIPPING</p>
        </div>
    </div>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light top-custom">
        <div class="container">
            <a class="navbar-brand" href="{{ route('site') }}">Vintage</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              @foreach($categorys as $category)  
              <li class="nav-item active">
                <a class="nav-link" href="#">{{ $category->name }}</a>
            </li>
            @endforeach
        </ul>
    </div>
    <div id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>
        </li>
        <li class="nav-item">
            <a style="font-weight: 700;" class="nav-link" href="{{ route('home') }}">ADMIN AREA</a>
        </li>
    </ul>
</div>
</div>
</nav>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src=".../800x400?auto=yes&bg=777&fg=555&text=First slide" alt="First slide">
  </div>
</div>
</div>

<div class="container-fluid" style="background-color: black;color: white;">
    <div class="container">
        <div class="row pt-5">
            <div class="col-3">
                <p>A product of</p>
                <p>Vintage</p>
                <p>Collection</p>
            </div>
            <div class="col-3 text-center">
                <p style="font-weight: 500;font-size: 19px;">ABOUT</p>
                <p>OUR MISSION</p>
                <p>ABOUT US</p>
                <p>REVIEWS</p>
            </div>
            <div class="col-3 text-center">
                <p style="font-weight: 500;font-size: 19px;">MENU</p>
                @foreach($categorys as $category)
                <p style="text-transform: uppercase;">{{ $category->name }}</p>
                @endforeach
            </div>
            <div class="col-3">
                <p style="font-weight: 500;font-size: 19px;">SOCIAL MEDIA</p>
                <p style="font-size: 35px;"><i style="margin-right: 12px;" class="fab fa-facebook-square"></i><i style="margin-right: 12px;" class="fab fa-twitter-square"></i><i style="margin-right: 12px;" class="fab fa-youtube"></i></p>
            </div>
        </div>
        <div class="row pt-3 pb-3">
            <div class="col-md-6">
                <p>support@vincerowhaches.com</p>
            </div>
            <div class="col-md-6 text-right">
                <h6>2018 Vintage - All rights reserved.</h6>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>