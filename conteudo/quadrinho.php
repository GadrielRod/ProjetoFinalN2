<!doctype html>
<html lang="pt-br">
<head>   
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <link href="../css/estilo.css?versao=<?=filemtime('../css/estilo.css');?>" rel="stylesheet"> 
<link rel="stylesheet" href="/node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />

  <title>OverFans - Quadrinhos</title>
  <link rel="icon" type="image/x-icon" href="../img/overwatch-icon.ico">
   <style>
    .masthead {
      height: 30vh;
      min-height: 500px;
      background-image: url('../img/quadrinho/headerquadrinhos.png'); /*imagem do topo*/
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }
     /* background */
    @media only screen and (max-width: 600px) {
      .masthead {
        background-image: url('../img/quadrinho/headerquadrinhos.png'); /*imagem do topo*/
        background-position: 40% 14%;  
      }
    }
    /* TABLET */
    @media only screen and (min-width:321px) and (max-width:766px){
      .masthead {
        background-image: url('../img/quadrinho/headerquadrinhos.png'); /*imagem do topo*/
        background-position: 40% 14%;   
      }
      
    }
   </style>
  
</head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
     <a class="navbar-brand" href="index.php"><img src="../img/logo--overwatch.svg" alt="" width="30" height="30"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="../index.php">Início</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Eventos
          </a>
          <ul class="dropdown-menu bg-dark border-0" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item text-white" href="eventos.php">Eventos</a></li>  
            <li><a class="dropdown-item text-white" href="e-sports.php">E-sports</a></li>
          </ul>
        </li>
      
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Histrias
          </a>
          <ul class="dropdown-menu bg-dark border-0" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item text-white" href="historia.php">Histórias</a></li>   
            <li><a class="dropdown-item text-white" href="herois.php">Heris</a></li>
            <li><a class="dropdown-item text-white active" href="#">Quadrinhos</a></li>
            <li><a class="dropdown-item text-white" href="mapas.php">Mapas</a></li>
          </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="skins.php">Skins</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="patches.php">Patches</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="sobre.php">Sobre</a>
        </li>
      
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Pesquisar contedo" aria-label="Search">
        <button class="btn btn-outline-success" type="submit"><i class="fa fa-search"></i></button>
      </form>
    </div>
  </div>
</nav>
<header class="masthead">
    <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center text-white">
        <h1 class="gradient-text" class="font-weight-light" style="font-family: overFont;font-size:70px;">QUADRINHOS</h1>
      </div>
    </div>
  </div>
</header>
<section>

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner Carousel-item-wrapper">
                <div class="carousel-item active py-5">
                    <div class="row">
                        <div class="col-sm-6 col-12">
                            <img src="../img/quadrinho/quadrinhos/image 1.png" class="d-block " alt="...">
                        </div>
                        <div class="col-sm-6 col-12">
                            <img src="../img/quadrinho/quadrinhos/image 1.png" class="d-block " alt="...">
                        </div>
                    </div>
                </div>
                <div class="carousel-item py-5">
                    <div class="row">
                        <div class="col-sm-6 col-12">
                            <img src="../img/quadrinho/quadrinhos/image 1.png" class="d-block " alt="...">
                        </div>
                        <div class="col-sm-6 col-12">
                            <img src="../img/quadrinho/quadrinhos/image 1.png" class="d-block " alt="...">
                        </div>
                    </div>
                </div>
                <div class="carousel-item py-5 ">
                    <div class="row">
                        <div class="col-sm-6 col-12">
                            <img src="../img/quadrinho/quadrinhos/image 1.png" class="d-block " alt="...">
                        </div>
                        <div class="col-sm-6 col-12">
                            <img src="../img/quadrinho/quadrinhos/image 1.png" class="d-block " alt="...">
                        </div>
                    </div>
                </div>
                <div class="carousel-item py-5">
                    <div class="row">
                        <div class="col-sm-6">slide 7</div>
                        <div class="col-sm-6">slide 8</div>
                    </div>
                </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>

<footer class="text-center text-lg-start bg-dark">
	<div class="text-center text-white p-4">
          Overwatch: FanPage - 2021: Todos os direitos reservados
  	</div>
</footer>

  </body>
</html>
<style>
    @media (max-width: 959px)
.Carousel-item-wrapper {
    overflow-x: scroll;
    -webkit-overflow-scrolling: touch;
    overflow-y: visible;
    white-space: nowrap;
    padding-top: 13px;
    padding-bottom: 6px;
    width: auto!important;
    -webkit-transform: initial!important;
    transform: none!important;
}
</style>
