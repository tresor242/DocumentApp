<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Mes demandes</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-lugx-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
  </head>
  <body style="background-color: rgb(76, 45, 230)">
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
                        <li><a href="/" >Accueil</a></li>
                        <li><a href="/mesDemandes" class="active">Mes demandes</a></li>
                        <li><a href="shop.html" >Documents</a></li>
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
    <h1 style="margin-top: 8%">Mes demandes</h1>
    <table class="table">
      <thead class="table-light">
        <tr>
          <td>#</td>
          <td>Nom et Prénoms</td>
          <td>Type</td>
          <td>E-mail</td>
          <td>Numéro</td>
          <td>Etat</td>
          <td>Actions</td>
        </tr>
      </thead>
      <tbody>
        @foreach ($demande as $d)
        <tr>
          <td>{{$d->id}}</td>
          <td>{{$d->user->nom}}  {{$d->user->prenom}}</td>
          <td>{{$d->type}}</td>
          <td>{{$d->user->email}}</td>
          <td>{{$d->user->telephone}}</td>
          <td>{{$d->etat}}</td>
          <td><i  class="bi bi-pencil"></i>  </td>
          
        </tr>
        @endforeach
      </tbody>
    </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>