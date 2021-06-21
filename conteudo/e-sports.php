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

  <title>OverFans - E-Sports</title>
  <link rel="icon" type="image/x-icon" href="../img/overwatch-icon.ico">
  
   <style>
    .masthead {
      height: 100vh;
      min-height: 500px;
      background-image: url('../img/e-sports/esports.jpg'); /*imagem do topo*/
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }
    
   .bg-secondary {
        background-color: #c4c4c4 !important;
    }
    .btn-warning {
        background-color: #F59C1D !important;
    }
    
    /* background */
    @media only screen and (max-width: 600px) {
      .masthead {
        background-image: url('../img/e-sports/esports.jpg'); /*imagem do topo*/
        background-position: 40% 14%;  
      }
    }
    /* TABLET */
    @media only screen and (min-width:321px) and (max-width:766px){
      .masthead {
        background-image: url('../img/e-sports/esports.jpg'); /*imagem do topo*/
        background-position: 40% 14%;   
      }
    
      /*Ordem da section*/
      .first-ov-video{
          order: 2;
      }
      .second-ov-video{
          order: 1;
      }
      .first-contenders-trials{
            order: 2;
      }
      .second-contenders-trials{
            order: 1;   
      }
      .first-ov-league{
          order: 2;
      }
      .second-ov-league{
          order: 1;
      }
    }
    
   </style>
</head> 
 <body id="e-sports">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
     <a class="navbar-brand" href="../index.php"><img src="../img/logo--overwatch.svg" alt="" width="30" height="30"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../index.php">Incio</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Eventos
          </a>
          <ul class="dropdown-menu bg-dark border-0" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item text-white" href="eventos.php">Eventos</a></li>
            <li><a class="dropdown-item text-white active" href="#">E-sports</a></li>
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
            <a class="nav-link" href="patches.php">Patches</a>
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
        <h1 class="gradient-text" class="font-weight-light" style="font-family: overFont;font-size:70px;">E-SPORTS</h1>
      </div>
    </div>
  </div>
</header>
<section>
    <div class="container">
        <div class="row pt-4">
            <div class="col-12 d-flex justify-content-center bg-secondary">
                <h1 class="h1">E-sports de overwatch</h1>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <div class="h5 font-weight-bold">E-sports de Overwatch oferece algo para todos: séries abrangentes de torneios que desafiam jogadores de todos os níveis de habilidade, jogos de alta intensidade narrados pelos anunciadores principais e equipes talentosas de todo o mundo.</div>
            </div>
            <div class="col-12 d-flex justify-content-center pt-2 pb-2">
                <h1 class="h1">Rumo ao profissional</h1>
            </div>
        </div>
        <div class="row pt-2 pb-2">
            <div class="col-12 col-md-7 first-ov-video">
                <div class="h5 font-weight-bold">Seu caminho ao nível profissional de e-sports de Overwatch começa no modo Competitivo de jogo e leva at à Liga Overwatch. Seja você um veterano do palco global ou um novato, entrando pela primeira vez no jogo organizado, há um torneio de Overwatch para você assistir ou competir!</div>
            </div>
            <div class="col-12 col-md-5 second-ov-video">
                <div class="card border">
                    <div class="card-body">
                    <div class="ratio ratio-16x9">
                        <iframe width="853" height="480" src="https://www.youtube.com/embed/iMBbdJ5X5YM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    </div>
                    <h5 class="card-title text-center border rounded-pill">Rumo ao nível profissional | e-sports de Overwatch</h5>
                </div>
            </div>
        </div>
        <div class="row pt-2 pb-2">
            <div class="col-12 col-md-5">
                <img class="img-fluid" src="../img/e-sports/ow-open-division-logo.png" alt="overwatch Open-league" title="Overwatch Open-League">
            </div>
            <div class="col-12 col-md-7 bg-secondary">
                <div class="h3 text-center pb-2">Diviso Aberta</div>
                <div class="h5 font-weight-bold pb-5">Os jogadores de PC de Overwatch de qualquer nível de habilidade podem participar da Diviso Aberta de Overwatch escolhendo uma das regiões: Coreia, China, Austrália, América do Sul, América do Norte, Europa ou Pacfico. Se voc é um herói de fila do competitivo que quer tentar o jogo competitivo organizado, essa é sua chance!</div>
                <div class="d-grid gap-2 col-6 mx-auto">
                <a href="https://playoverwatch.com/pt-br/esports/open-division/" class="btn btn-warning border border-0">Saiba Mais</a>
                </div>
            </div>
        </div>
        <div class="row pt-2 pb-2">
            <div class="col-12 col-md-7 bg-secondary first-contenders-trials">
                <div class="h3 text-center pb-5">Contenders Trials</div>
                <div class="h5 font-weight-bold pb-5">Ao final de cada Temporada de Contenders, as quatro melhores equipes da Diviso Aberta em cada regio serão convidadas para competir no Contender Trials, um torneio de oito equipes com promoção e rebaixamento para Overwatch Contenders.</div>
                <div class="d-grid gap-2 col-6 mx-auto">
                <a href="https://overwatchleague.com/en-us/news/21508788/introducing-the-inaugural-contenders-trials-teams" class="btn btn-warning border border-0">Saiba Mais</a>
                </div>
            </div>
            <div class="col-12 col-md-5 second-contenders-trials">
                <img class="img-fluid" src="../img/e-sports/ow-contenders-trials-logo.png" alt="overwatch Open-league" title="Overwatch Open-League">
            </div>
        </div>
        <div class="row pt-2 pb-2">
            <div class="col-12 col-md-5">
                <img class="img-fluid" src="../img/e-sports/ow-contenders-logo.png" alt="overwatch Open-league" title="Overwatch Open-League">
            </div>
            <div class="col-12 col-md-7 bg-secondary">
                <div class="h3 text-center pb-5">Contender</div>
                <div class="h5 font-weight-bold pb-5">Entrar na Overwatch Contenders  um grande marco para um aspirante a profissional de Overwatch. Em cada uma das sete regies, doze equipes reunirão times promissores para competir em vrias temporadas por ano. Aqueles que saírem vitoriosos terão mais chance de serem chamados por caça-talentos da Liga Overwatch.</div>
                <div class="d-grid gap-2 col-6 mx-auto">
                <a href="https://overwatchleague.com/en-us/contenders" class="btn btn-warning border border-0">Saiba Mais</a>
                </div>
            </div>
        </div>
        <div class="row pt-2 pb-2">
            <div class="col-12 col-md-7 bg-secondary first-ov-league">
                <div class="h3 text-center pb-2 first-ov-league">Overwatch League</div>
                <div class="h5 font-weight-bold pb-4">A Liga Overwatch é a primeira liga global de e-sports com equipes baseadas em cidades, elaborada para celebrar os melhores dentre os melhores. Atualmente ela é formada por campees escolhidos a dedo, mas os futuros competidores provavelmente sero selecionados por caa-talentos da Liga Overwatch dentre os talentos da Overwatch Contenders, garantindo que a Liga Overwatch seja sempre abastecida por atletas testados. Com a estabilidade dos salrios e benefícios, os jogadores de melhor carreira de Overwatch no mundo batalharo durante o ano em busca de sua vaga no Campeonato da Liga Overwatch e de milhes de dlares em prmio!</div>
                <div class="d-grid gap-2 col-6 mx-auto">
                <a href="https://overwatchleague.com/en-us/" class="btn btn-warning border border-0">Saiba Mais</a>
                </div>
            </div>
            <div class="col-12 col-md-5 second-ov-league">
                <img class="img-fluid" src="../img/e-sports/ow-league-logo.png" alt="overwatch Open-league" title="Overwatch Open-League">
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