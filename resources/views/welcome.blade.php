<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sixteen Clothing HTML Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
        <a class="navbar-brand" href="/"><h2>MOLEN<em>GEEK</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="/demandeFormation">demande formation</a>
              </li>
              @if(Auth::check())
              <li class="nav-item">
                <a class="nav-link" href="/demandeDePc">demande de pc</a>
              </li>
              @endif
              @auth
              @if(Auth::user()->etat_id == '3')
                <li>
                  <a href="/home" class="nav-link">admin</a>
                </li>
              @endif
              @endauth
              @if(Auth::check() == false)
              <li class="nav-item">
                <a class="nav-link border" href="/login">se connecter</a>
              </li>
              @elseif(Auth::check())
              <li>
              <a href="{{ route('logout') }}"
              onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                              <button class=' btn btn-danger'>
                                  {{ __('se déconnecter') }}
                              </button>
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
              </li>
              @endif
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h1 class='text-danger' style='text-shadow: 1px 1px 0 #000,
    -1px 1px 0 #000,
    1px -1px 0 #000,
    -1px -1px 0 #000,
    0px 1px 0 #000,
    0px -1px 0 #000,
    -1px 0px 0 #000,
    1px 0px 0 #000,
    2px 2px 0 #000,
    -2px 2px 0 #000,
    2px -2px 0 #000,
    -2px -2px 0 #000,
    0px 2px 0 #000,
    0px -2px 0 #000,
    -2px 0px 0 #000,
    2px 0px 0 #000,
    1px 2px 0 #000,
    -1px 2px 0 #000,
    1px -2px 0 #000,
    -1px -2px 0 #000,
    2px 1px 0 #000,
    -2px 1px 0 #000,
    2px -1px 0 #000,
    -2px -1px 0 #000;'>Formation Molengeek</h1>
            <h2 class='text-warning' style='text-shadow: 1px 1px 0 #000,
    -1px 1px 0 #000,
    1px -1px 0 #000,
    -1px -1px 0 #000,
    0px 1px 0 #000,
    0px -1px 0 #000,
    -1px 0px 0 #000,
    1px 0px 0 #000,
    2px 2px 0 #000,
    -2px 2px 0 #000,
    2px -2px 0 #000,
    -2px -2px 0 #000,
    0px 2px 0 #000,
    0px -2px 0 #000,
    -2px 0px 0 #000,
    2px 0px 0 #000,
    1px 2px 0 #000,
    -1px 2px 0 #000,
    1px -2px 0 #000,
    -1px -2px 0 #000,
    2px 1px 0 #000,
    -2px 1px 0 #000,
    2px -1px 0 #000,
    -2px -1px 0 #000;'>Choissisez votre futur chez nous</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class='container text-center mx-5 my-5'>
      <h1 class='mb-5'>Qu'est ce que {{$description[0]->titre}}</h1>
      <p class='mx-5'>{{$description[0]->texte}}</p>
      <hr>
    </div>
    <div class='container my-5'>
      <h1 class='text-center mb-5'>Nos Formations</h1>
      <div class="row">
        @foreach($formations as $element)
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{$element->titre}}</h5>
              <p>horaire : {{$element->horaire}}</p>
              <p>durée : {{$element->durée}}</p>
              <p>coût : {{$element->prix}}</p>
              <p class="card-text">{{$element->description}}</p>
              <a href="/demandeFormation" class="btn btn-primary">t'inscrire</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <hr>
    </div>
    <div class='container'>
      <h1 class='text-center my-5'>Les News</h1>
          <div class="row row-cols-1 row-cols-md-2 g-4 container mx-auto">
            @foreach($cards as $card)
            <div class="col">
              <div class="card">
                <img src="{{asset('images/'.$card->image)}}" class="card-img-top" alt="..." height='200px' width='300px'>
                <div class="card-body">
                  <h5 class="card-title">{{$card->titre}}</h5>
                  <p class="card-text">{{$card->description}}</p>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <hr>
      </div>
      <div class='container my-5 text-center'>
        <h1>Contactez nous....</h1>
        <p>{{$contact[0]->tel}}</p>
        <p>{{$contact[0]->mail}}</p>
        <p>{{$contact[0]->adresse}}</p>
        <iframe src="{{$contact[0]->map}}" frameborder="0"></iframe>
      </div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; <span class='text-danger'> modifier par le groupe 5</span> 2020 Sixteen Clothing Co., Ltd.
            
            - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="{{asset('js/app.js')}}"></script>

  </body>

</html>
