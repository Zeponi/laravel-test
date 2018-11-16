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

<div class="container-fluid" style="color: white; margin-top: 83px; background-size: cover; background-repeat: no-repeat; background-image: url({{ asset('img/banner.jpg') }});">
    <div style="padding: 10%;" class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 style="font-size: 40px; font-weight: 400;">Vintage Watches</h1>
                <p style="margin-bottom: auto; font-size: 20px;">A combination of beauty</p>
                <p style="font-size: 20px;" >whith perfection.</p>
            </div>
        </div>
    </div>    
</div>

<div class="container-fluid">
    <div class="row text-center test">
         <div class="col-md-12">
             <h1>FEATURED</h1>
             <h4>FOR MAN</h4>
         </div>
    </div>
</div>

<div class="container mb-3">
    <div class="row mt-5">
        @foreach($products as $product)
        <div class="col-md-4 text-center">
            <img style="width: 50%;" src="{{ asset($product->image) }}">
            <div class="row mt-4">
                <div class="col-md-6 text-left">
                    <p style="margin-bottom: auto;">{{ $product->category->name }}</p>
                    <h5>{{ $product->name }}</h5>       
                </div>
                <div class="col-md-6 text-right">
                    <h2 style="font-weight: 700; padding-top: 10px;padding-bottom: 10px;">$ {{ $product->price }}</h2>
                </div>
            </div>
            <div class="row text-center">
                <a style="margin-left: 30%;" href="{{ route('site.product', $product->id) }}" class="btn btn-default btn-lg button-custom">ADD TO CART</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="container-fluid">
    <div class="row text-center test">
         <div class="col-md-12">
             <h1>FEATURED</h1>
             <h4>FOR WOMAN</h4>
         </div>
    </div>
</div>

<div class="container">
    <div class="row mt-5">
        @foreach($products as $product)
        <div class="col-md-4 text-center">
            <img style="width: 50%;" src="{{ asset($product->image) }}">
            <div class="row mt-4">
                <div class="col-md-6 text-left">
                    <p style="margin-bottom: auto;">{{ $product->category->name }}</p>
                    <h5>{{ $product->name }}</h5>       
                </div>
                <div class="col-md-6 text-right">
                    <h2 style="font-weight: 700; padding-top: 10px;padding-bottom: 10px;">$ {{ $product->price }}</h2>
                </div>
            </div>
            <div class="row text-center">
                <a style="margin-left: 30%;" href="{{ route('site.product', $product->id) }}" class="btn btn-default btn-lg button-custom">ADD TO CART</a>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-md-12 text-center" style="margin-top: 10%;margin-bottom: 10%;">
            <h1 style="font-size: 55px; margin-bottom: -15px;">WANT 80% OFF?</h1><br>
            <h5>SUBSCRIBE BELOW TO GET</h5><br>
            <input class="mb-5 input-custom" type="email" name="email" placeholder="Email"><br>
            <button class="btn btn-default btn-lg button-custom">SUBSCRIBE</button>
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