<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Molengeek</title>

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
              <li class="nav-item">
                <a class="nav-link" href="/">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item active">
                <a class="nav-link" href="/demandeFormation">demande formation</a>
              </li>
              @if(Auth::Check())
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
            <h4>Formation Molengeek</h4>
            <h2>Choissisez votre futur chez nous</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
        <div class="container d-flex flex-column align-items-center">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Demande d'inscription</h2>
                    </div>
                </div>
            </div>
            <form action="/InscriptionEnvoie" method="post">
                @csrf
                <div class="row">
                    <div class="mb-3">
                        <label class="form-label">Nom :</label>
                        <input type="text" class="form-control" name='nom'>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3">
                        <label class="form-label">Prénom :</label>
                        <input type="text" class="form-control" name='prenom'>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3">
                        <label class="form-label">Email :</label>
                        <input type="text" class="form-control" name='email'>
                    </div>
                </div>
                <div class='row'>
                    <div class='mb-3'>
                        <select name="formation_id" style='width:220px'>
                          @foreach($formation as $element)
                            <option value="{{$element->id}}">{{$element->titre}}</option>
                          @endforeach
                        </select>
                    </div>
                </div>
                <div class='row d-flex justify-content-center'>
                    <button type="submit" class='btn btn-danger'>envoyer</button>
                </div>
            </form>
        </div>    
    </div>

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p class='text-center'>Copyright &copy; <span class='text-danger'> modifier par le groupe 5</span> 2020 Sixteen Clothing Co., Ltd.
                  
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
