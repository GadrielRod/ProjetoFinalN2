<?php
session_start();
?>
<!doctype html>
<html lang="pt-BR">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <link href="css/estilo.css?versao=<?=filemtime('css/estilo.css');?>" rel="stylesheet">  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

  <title>OverFans</title>
  <link rel="icon" type="image/x-icon" href="img/overwatch-icon.ico">
    <style>
    .masthead {
      height: 100vh;
      min-height: 500px;
      background-image: url('https://i.imgur.com/JSUq3Qx.png');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }
    .alert{ margin-bottom: 0;}
    </style>
    
    
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
     <a class="navbar-brand" href="index.php"><img src="img/logo--overwatch.svg" alt="" width="30" height="30"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Início</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Eventos
          </a>
          <ul class="dropdown-menu bg-dark border-0" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item text-white" href="conteudo/eventos.php">Eventos</a></li>  
            <li><a class="dropdown-item text-white" href="conteudo/e-sports.php">E-sports</a></li>
          </ul>
        </li>
      
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Historias
          </a>
          <ul class="dropdown-menu bg-dark border-0" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item text-white" href="conteudo/historia.php">Historias</a></li>  
            <li><a class="dropdown-item text-white" href="conteudo/herois.php">Herois</a></li>
            <li><a class="dropdown-item text-white" href="conteudo/quadrinho.php">Quadrinhos</a></li>
            <li><a class="dropdown-item text-white" href="conteudo/mapas.php">Mapas</a></li>
          </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="conteudo/skins.php">Skins</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="conteudo/patches.php">Patches</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="conteudo/sobre.php">Sobre</a>
        </li>
      
      
      </ul>
      <form method="POST" action="conteudo/buscar.php" class="d-flex">
        <input class="form-control me-2" name="buscar" type="search" placeholder="Pesquisar conteudo" aria-label="Pesquisar">
        <button class="btn btn-outline-warning" type="submit"><i class="fa fa-search"></i></button>
      </form>
    </div>
  </div>
</nav>
<?php if($_SESSION['MSG']){ printf($_SESSION['MSG']); unset($_SESSION['MSG']); } ?>
<header class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center text-white">
        <h1 class="font-weight-light gradient-text" style="font-family: overFont;font-size:70px;">OVERFANS</h1>
        <p class="lead">Sua fonte de OverWatch mais famosa do Brasil.</p>
      </div>
    </div>
  </div>
</header>


<section class="py-5">
  <div class="container">
    <h2 class="font-weight-light text-center">Escolha sua plataforma</h2>
    <p class="text-center">Saiba mais abaixo sobre como adquirir overwatch na sua plataforma de preferência</p>
  
    <div class="row">
        <div class="col-sm-3 text-center">
          <a href="https://us.shop.battle.net/en-us/product/overwatch?blzcmp=ow_buy_header" target="_blank"><img src="img/PC.png"></a>
        </div>
        
        <div class="col-sm-3 text-center">
          <a href="https://store.playstation.com/en-us/product/UP0002-CUSA01842_00-OWLEGENDARY00000" target="_blank"><img src="img/PS4.png"></a>
        </div>
        
        <div class="col-sm-3 text-center">
          <a href="https://www.microsoft.com/pt-br/p/overwatch-legendary-edition/9p2q994zwb64?rtc=1" target="_blank"><img src="img/XBOX.png"></a>
        </div>
        
        <div class="col-sm-3 text-center">
          <a href="https://www.nintendo.com/games/detail/overwatch-legendary-edition-switch/" target="_blank"><img src="img/SWITCH.png"></a>
        </div>
    </div>
    
    <div class="row">
        <div class="col-sm-6 text-center">
          <p style="background-color: #f79d19;padding:5px;">Overwatch é um jogo eletrônico multijogador de tiro em primeira pessoa desenvolvido e publicado pela Blizzard Entertainment. Foi lançado em 24 de maio de 2016 para Microsoft Windows, PlayStation 4 e Xbox One e em 15 de outubro de 2019 para Nintendo Switch. Descrito como um "hero shooter", Overwatch designa jogadores em dois times de seis, com cada jogador tendo liberdade em escolher mais de 30 personagens, conhecidos como "heris", cada um com um estilo de jogo nico, dividido em três papéis gerais adequados ao seu objetivo. Os jogadores de uma equipe trabalham juntos para proteger e defender pontos de controle em um mapa ou acompanhar uma carga útil pelo mapa em um período limitado de tempo. Os jogadores ganham recompensas cosmticas que no afetam a jogabilidade, como as skins de personagens e as poses de vitória, enquanto jogam. O jogo foi lançado inicialmente apenas como um título casual, mas um modo competitivo, vários modos de jogo 'arcade' e um navegador de servidor personalizável para jogadores foram adicionados após o lançamento. Alm disso, a Blizzard adicionou novos personagens, mapas e modos de jogo após o lançamento, todos gratuitos, com o único custo adicional para os jogadores sendo loot boxs opcionais para ganhar itens cosméticos.</p>
        </div>
        
        <div class="col-sm-3 text-center" style="background: #007dd1;height:100px;">
          <h6 style="float: left;font-size:25px;color:white;margin-top: 30px;">Último Heroi</h6>
          <img style="float: right;" src="img/home/last_hero.png">
        </div>
        
        <div class="col-sm-3 text-center" style="background: #353c42;height:100px;">
          <h6 style="float: left;font-size:25px;color:white;margin-top: 30px;">Último Mapa</h6>
          <img style="float: right;" width="97px;" src="img/home/last_map.png">
        </div>
        
    </div>
    
  
  </div>
</section>

<footer class="text-center text-lg-start bg-dark">
	<div class="text-center text-white p-4">
          Overwatch: FanPage - 2021: Todos os direitos reservados
  	</div>
</footer>

</body>

</html>
