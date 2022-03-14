<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/custom-bootstrap.css" />
    <link rel="stylesheet" href="/css/website.css" />

    <script src="https://cdn.tiny.cloud/1/m3hz4cg05xyawh6oij7oqfhs82e3sbhwud17vgxco9lbbg4j/tinymce/5/tinymce.min.js" referrerpolicy="origin" />
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    

    <title>@yield('title')</title>
  </head>
  <body>
      <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-caque">
  <a class="navbar-brand" href="/">Bella Beautifful</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">


      <li class="nav-item active">
        <a class="nav-link" href="/">Home </a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="/login">Login </a>
      </li>

      <!-- li class="nav-item">
        <a class="nav-link" href="/quem-somos">Quem Somos</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Categoria
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contato</a>
      </li -->
   

    @auth()

    
    <li class="nav-item active">
        <a class="nav-link" href="/dashboard">Home </a>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Categoria
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/categoria/create">Criar</a>
          <a class="dropdown-item" href="/categoria">Editar</a>
          
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Produtos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/produtos/create">Criar</a>
          <a class="dropdown-item" href="/produtos">Editar</a>
          
        </div>
      </li>

      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Marketing
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/marketing/captura">Capturar Celulares</a>
          
          <a class="dropdown-item" href="/campanha">Enviar Campanha</a>
          
        </div>
      </li>

          
    <li class="nav-item active">
        <a class="nav-link" href="/sair"><button class="btn btn-danger btn-sm">Sair</button> </a>
      </li>
      

    @endauth

    </ul>
    
  </div>
</nav>
      </header>
        @yield('content')


        <footer class="container-fluid bg-caque">

          <section class="container p-4 text-center">
          <h5 class="text-white text-center">Fique por dentro das novidades e Promoções</h5>
          <p class="text-white text-center">Assine nossa Newsletter receba informações em seu whatsApp</p>
          <div class="col-md-6 offset-md-3">
          <form method="POST" action="/assinar" class="form-inline">
         @csrf
        
          <input type="text" name="name" class="form-control p-2 m-2" placeholder="Seu Nome"/>
    
          <input type="text" name="whatsapp" class="form-control p-2 m-2" placeholder="Seu WhatsApp" />
          <input type="submit"  class="btn btn-warning p-2 m-2" value="Cadastrar" />
           </div>
          
           </div>
          </form>
          </div>
          </section>
        
        </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>