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
  <title>OverFans - Patches</title>
  <link rel="icon" type="image/x-icon" href="../img/overwatch-icon.ico">
  <style>
    .masthead {
      height: 100vh;
      min-height: 500px;
      background-image: url('../img/patches/header.png'); /*imagem do topo*/
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }
     /* background */
    @media only screen and (max-width: 600px) {
      .masthead {
        background-image: url('../img/patches/header.png'); /*imagem do topo*/
        background-position: 10% 14%;  
      }
    }
    /* TABLET */
    @media only screen and (min-device-width: 768px){
      .masthead {
        background-image: url('../img/patches/header.png'); /*imagem do topo*/
        background-position: 3% 14%;   
      }
    }
    .col-centered{
        float: none;
        margin: 0 auto;
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
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Historias
          </a>
          <ul class="dropdown-menu bg-dark border-0" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item text-white" href="historia.php">Historias</a></li>  
            <li><a class="dropdown-item text-white" href="herois.php">Herois</a></li>
            <li><a class="dropdown-item text-white" href="quadrinho.php">Quadrinhos</a></li>
            <li><a class="dropdown-item text-white" href="mapas.php">Mapas</a></li>
          </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="skins.php">Skins</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="patches.php">Patches</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="sobre.php">Sobre</a>
        </li>
      
      </ul>
      <form method="POST" action="buscar.php" class="d-flex">
        <input class="form-control me-2" name="buscar" type="search" placeholder="Pesquisar conteudo" aria-label="Pesquisar">
        <button class="btn btn-outline-warning" type="submit"><i class="fa fa-search"></i></button>
      </form>
    </div>
  </div>
</nav>

<header class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center text-white">
        <h1 class="font-weight-light gradient-text" style="font-family: overFont;font-size:70px;">PATCHES</h1>
      </div>
    </div>
  </div>
</header>


<section class="py-5">
  <div class="container">
      
    <div class="row">
        <div class="col-sm-12 text-center">    
            <p>
                <img src="../img/logo--overwatch.svg" alt="" width="60" height="60">
            </p>
           
        </div>
        <hr>
        <div class="col-sm-9 text-center col-centered" style="background: url('../img/patches/retangulo.png');width: 695px;height: 100px;">
           <h1 style="font-weight:bold;margin-top:10px;">PATCH DE JUNHO DE 2021</h1>
           <button type="button" class="btn btn-warning" style="border-radius: 0px;margin-top: -4px;width: 50%;" onclick="window.location.href='https://playoverwatch.com/pt-br/news/patch-notes/live/2021/06';">SAIBA MAIS</button>
        </div>
    </div>
        <hr>
        <div class="row">
            <div class="col-sm-9 text-center col-centered" style="background: url('../img/patches/retangulo.png');width: 695px;height: 100px;">
               <h1 style="font-weight:bold;margin-top:10px;">PATCH DE MAIO DE 2021</h1>
               <button type="button" class="btn btn-warning" style="border-radius: 0px;margin-top: -4px;width: 50%;" onclick="window.location.href='https://playoverwatch.com/pt-br/news/patch-notes/live/2021/05';">SAIBA MAIS</button>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-9 text-center col-centered" style="background: url('../img/patches/retangulo.png');width: 695px;height: 100px;">
               <h1 style="font-weight:bold;margin-top:10px;">PATCH DE ABRIL DE 2021</h1>
               <button type="button" class="btn btn-warning" style="border-radius: 0px;margin-top: -4px;width: 50%;" onclick="window.location.href='https://playoverwatch.com/pt-br/news/patch-notes/live/2021/04';">SAIBA MAIS</button>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-9 text-center col-centered" style="background: url('../img/patches/retangulo.png');width: 695px;height: 100px;">
               <h1 style="font-weight:bold;margin-top:10px;">PATCH DE MARÇO DE 2021</h1>
               <button type="button" class="btn btn-warning" style="border-radius: 0px;margin-top: -4px;width: 50%;" onclick="window.location.href='https://playoverwatch.com/pt-br/news/patch-notes/live/2021/03';">SAIBA MAIS</button>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-9 text-center col-centered" style="background: url('../img/patches/retangulo.png');width: 695px;height: 100px;">
               <h1 style="font-weight:bold;margin-top:10px;">PATCH DE FEVEREIRO DE 2021</h1>
               <button type="button" class="btn btn-warning" style="border-radius: 0px;margin-top: -4px;width: 50%;" onclick="window.location.href='https://playoverwatch.com/pt-br/news/patch-notes/live/2021/02';">SAIBA MAIS</button>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-9 text-center col-centered" style="background: url('../img/patches/retangulo.png');width: 695px;height: 100px;">
               <h1 style="font-weight:bold;margin-top:10px;">PATCH DE JANEIRO DE 2021</h1>
               <button type="button" class="btn btn-warning" style="border-radius: 0px;margin-top: -4px;width: 50%;" onclick="window.location.href='https://playoverwatch.com/pt-br/news/patch-notes/live/2021/01';">SAIBA MAIS</button>
            </div>
        </div>
        <hr>
            
        <div class="text-center">
            <button type="button" class="btn btn-info" style="width:100%;" onclick="window.location.href='https://playoverwatch.com/pt-br/news/patch-notes/live'">VER MAIS</button>
        </div>
        
        
    </div>
    
  </div>

</section>

<footer class="text-center text-lg-start bg-dark">
	<div class="text-center text-white p-4">
         © Overwatch: FanPage - 2021: Todos os direitos reservados
  	</div>
</footer>

  </body>
</html>