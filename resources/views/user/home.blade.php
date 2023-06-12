<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Lugx Gaming Shop HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-lugx-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 589 lugx gaming

https://templatemo.com/tm-589-lugx-gaming

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="assets/images/logo.png" alt="" style="width: 158px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="/" class="active">Accueil</a></li>
                      @if (Route::has('login'))
                      @auth
                      <li><a href="/mesDemandes" >Mes demandes</a></li>
                      @endauth
                      @endif
                      <li><a href="shop.html">Documents</a></li>
                      <li><a href="product-details.html">Documents Details</a></li>
                      <li><a href="contact.html">Nous Contacter</a></li>
                      @if (Route::has('login'))
                        
                      @auth
                      <x-app-layout>
                    </x-app-layout>
                    
                      @else

                      
                      <li><a href="{{route('login')}}">Connexion</a></li>
                      <li><a href="{{route('register')}}">Inscription</a></li>

                      @endauth

                      @endif

                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="caption header-text">
            <h6>Bienvenue sur Dakar Documents</h6>
            <h2>La Meilleure plateforme de gestion Documents!</h2>
            <p>Notre Objectif est de faciliter la demande des documents administratifs des etudiants.</p>
            <div class="search-input">
              <form id="search" action="#">
                <input type="text" placeholder="Rechercher" id='searchText' name="searchKeyword" onkeypress="handle" />
                <button role="button">Rechercher un document</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-4 offset-lg-2">
          <div class="right-image">
            <img src="assets/images/Doc1.jpg" alt="">
            
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('user.document')

  @if (Route::has('login'))
                        
                      @auth
                      @include('user.appointment')
                      @else


                      @endauth

                      @endif

  
  

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2048 Groupeisi. All rights reserved. &nbsp;&nbsp; <a rel="nofollow" href="https://templatemo.com" target="_blank">Design: TemplateMo</a></p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</html>