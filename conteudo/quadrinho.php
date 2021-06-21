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
  <!-- owl-carousel-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
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
    .btn-primary{
        background:#007DD1 !important;
    }
    .btn:hover{
        transform: scale(1.1);
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
            Historias
          </a>
          <ul class="dropdown-menu bg-dark border-0" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item text-white" href="historia.php">Historias</a></li>   
            <li><a class="dropdown-item text-white" href="herois.php">Herois</a></li>
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
        <h1 class="gradient-text" class="font-weight-light" style="font-family: overFont;font-size:70px;">QUADRINHOS</h1>
      </div>
    </div>
  </div>
</header>
<section class="container">
<div class="row pt-3">
    <div class="col-12">
        <div class="h3 text-warning fst-italic">Quadrinhos</div>
    </div>
    
</div>
<div class="owl-carousel owl-theme pt-3">
        <div class="item">
            <img src="../img/quadrinho/quadrinhos/image 1.png" alt="Justiceiro A Bordo #1" title="Justiceiro A Bordo #1">
            <div class="card">
              <div class="card-body">
                <div class="card-title h5">Justiceiro A <br>Bordo #1</div>
                <a href="https://playoverwatch.com/pt-br/media/stories/train-hopper/" target="_blank" class="btn btn-primary fw-bolder">Ver completo</a>
              </div>
            </div>
        </div>
        <div class="item">
            <img src="../img/quadrinho/quadrinhos/image 2.png" alt="Matador De Dragões #2" title="Matador De Dragões #2">
            <div class="card">
              <div class="card-body">
                <div class="card-title h5">Matador De <br>Dragões #2</div>
                <a href="https://playoverwatch.com/pt-br/media/stories/dragon-slayer/" target="_blank" class="btn btn-primary fw-bolder">Ver completo</a>
              </div>
            </div>
        </div>
        <div class="item">
            <img src="../img/quadrinho/quadrinhos/image 3.png" alt="Trabalho legítimo #3" title="Trabalho legítimo #3">
            <div class="card">
              <div class="card-body">
                <div class="card-title h5">Trabalho <br>legítimo #3</div>
                <a href="https://playoverwatch.com/pt-br/media/stories/going-legit/" target="_blank" class="btn btn-primary fw-bolder">Ver completo</a>
              </div>
            </div>
        </div>
        <div class="item">
            <img src="../img/quadrinho/quadrinhos/image 4.png" alt="Um Mundo Melhor #4" title="Um Mundo Melhor #4">
            <div class="card">
              <div class="card-body">
                <div class="card-title h5">Um Mundo <br>Melhor #4</div>
                <a href="https://playoverwatch.com/pt-br/media/stories/a-better-world/" target="_blank" class="btn btn-primary fw-bolder">Ver completo</a>
              </div>
            </div>
        </div>
        <div class="item">
            <img src="../img/quadrinho/quadrinhos/image 5.png" alt="Objetivo Da Missso #5" title="Objetivo Da Missso #5">
            <div class="card">
              <div class="card-body">
                <div class="card-title h5">Objetivo Da <br>Misssão #5</div>
                <a href="https://playoverwatch.com/pt-br/media/stories/mission-statement/" target="_blank" class="btn btn-primary fw-bolder">Ver completo</a>
              </div>
            </div>
        </div>
        <div class="item">
            <img src="../img/quadrinho/quadrinhos/image 6.png" alt="Destruidor #6" title="Destruidor #6">
            <div class="card">
              <div class="card-body">
                <div class="card-title h5 pb-4">Destruidor #6</div>
                <a href="https://playoverwatch.com/pt-br/media/stories/destroyer/" target="_blank" class="btn btn-primary fw-bolder">Ver completo</a>
              </div>
            </div>
        </div>
        <div class="item">
            <img src="../img/quadrinho/quadrinhos/image 7.png" alt="Legado #7" title="Legado #7">
            <div class="card">
              <div class="card-body">
                <div class="card-title h5 pb-4">Legado #7</div>
                <a href="https://playoverwatch.com/pt-br/media/stories/legacy/" target="_blank" class="btn btn-primary fw-bolder">Ver completo</a>
              </div>
            </div>
        </div>
        <div class="item">
            <img src="../img/quadrinho/quadrinhos/image 8.png" alt="Velhos Soldados #8" title="Velhos Soldados #8">
            <div class="card">
              <div class="card-body">
                <div class="card-title h5 pb-4">Velhos Soldados #8</div>
                <a href="https://playoverwatch.com/pt-br/media/stories/old-soldiers/" target="_blank" class="btn btn-primary fw-bolder">Ver completo</a>
              </div>
            </div>
        </div>
        <div class="item">
            <img src="../img/quadrinho/quadrinhos/image 9.png" alt="Junkenstein #9" title="Junkenstein #9">
            <div class="card">
              <div class="card-body">
                <div class="card-title h5 pb-4">Junkenstein #9</div>
                <a href="https://playoverwatch.com/pt-br/media/stories/junkenstein/" target="_blank" class="btn btn-primary fw-bolder">Ver completo</a>
              </div>
            </div>
        </div>
        <div class="item">
            <img src="../img/quadrinho/quadrinhos/image 10.png" alt="Reflexos #10" title="Reflexos #10">
            <div class="card">
              <div class="card-body">
                <div class="card-title h5 pb-4">Reflexos #10</div>
                <a href="https://playoverwatch.com/pt-br/media/stories/reflections/" target="_blank" class="btn btn-primary fw-bolder">Ver completo</a>
              </div>
            </div>
        </div>
        <div class="item">
             <img src="../img/quadrinho/quadrinhos/image 11.png" alt="Binário #11" title="Binário #11">
            <div class="card">
              <div class="card-body">
                <div class="card-title h5 pb-4">Binrio #11</div>
                <a href="https://playoverwatch.com/pt-br/media/stories/binary/" target="_blank" class="btn btn-primary fw-bolder">Ver completo</a>
              </div>
            </div>
        </div>
        <div class="item">
            <img src="../img/quadrinho/quadrinhos/image 12.png" alt="Insurreição #12" title="Insurreio #12">
            <div class="card">
              <div class="card-body">
                <div class="card-title h5 pb-4">Insurreição #12</div>
                <a href="https://playoverwatch.com/pt-br/media/stories/uprising/" target="_blank" class="btn btn-primary fw-bolder">Ver completo</a>
              </div>
            </div>
        </div>
        <div class="item">
            <img src="../img/quadrinho/quadrinhos/image 13.png" alt="Masquerade #13" title="Masquerade #13">
            <div class="card">
              <div class="card-body">
                <div class="card-title h5 pb-4">Masquerade #13</div>
                <a href="https://playoverwatch.com/pt-br/media/stories/masquerade/" target="_blank" class="btn btn-primary fw-bolder">Ver completo</a>
              </div>
            </div>
        </div>
        <div class="item">
            <img src="../img/quadrinho/quadrinhos/image 14.png" alt="Terra devastada #14" title="Terra devastada #14">
            <div class="card">
              <div class="card-body">
                <div class="card-title h5 pb-4">Terra devastada #14</div>
                <a href="https://playoverwatch.com/pt-br/media/stories/wasted-land/" target="_blank" class="btn btn-primary fw-bolder">Ver completo</a>
              </div>
            </div>
        </div>
        <div class="item">
            <img src="../img/quadrinho/quadrinhos/image 15.png" alt="Buscando #15" title="Buscando #15">
            <div class="card">
              <div class="card-body">
                <div class="card-title h5 pb-4">Buscando #15</div>
                <a href="https://playoverwatch.com/pt-br/media/stories/searching/" target="_blank" class="btn btn-primary fw-bolder">Ver completo</a>
              </div>
            </div>
        </div>
        <div class="item">
            <img src="../img/quadrinho/quadrinhos/image 16.png" alt="Retaliação #16" title="Retaliao #16">
            <div class="card">
              <div class="card-body">
                <div class="card-title h5 pb-4">Retaliação #16</div>
                <a href="https://playoverwatch.com/pt-br/media/stories/retribution/" target="_blank" class="btn btn-primary fw-bolder">Ver completo</a>
              </div>
            </div>
        </div>
        <div class="item">
            <img src="../img/quadrinho/quadrinhos/image 17.png" alt="Tracer-Londres Chamando 1 de 5 #17" title="Tracer-Londres Chamando 1 de 5 #17">
            <div class="card">
              <div class="card-body">
                <div class="card-title h5">Tracer-Londres Chamando 1 #17</div>
                <a href="https://playoverwatch.com/pt-br/media/stories/tracer-london-calling-1/" target="_blank" class="btn btn-primary fw-bolder">Ver completo</a>
              </div>
            </div>
        </div>
        <div class="item">
            <img src="../img/quadrinho/quadrinhos/image 18.png" alt="Tracer-Londres Chamando 2 de 5 #18" title="Tracer-Londres Chamando 2 de 5 #18">
            <div class="card">
              <div class="card-body">
                <div class="card-title h5">Tracer-Londres Chamando 2 #18</div>
                <a href="https://playoverwatch.com/pt-br/media/stories/tracer-london-calling-2/" target="_blank" class="btn btn-primary fw-bolder">Ver completo</a>
              </div>
            </div>
        </div>
        <div class="item">
             <img src="../img/quadrinho/quadrinhos/image 19.png" alt="Tracer-Londres Chamando 3 de 5 #18" title="Tracer-Londres Chamando 3 de 5 #18">
            <div class="card">
              <div class="card-body">
                <div class="card-title h5">Tracer-Londres Chamando 3 #19</div>
                <a href="https://playoverwatch.com/pt-br/media/stories/tracer-london-calling-3/" target="_blank" class="btn btn-primary fw-bolder">Ver completo</a>
              </div>
            </div>
        </div>
        <div class="item">
            <img src="../img/quadrinho/quadrinhos/image 20.png" alt="Tracer-Londres Chamando 4 de 5 #18" title="Tracer-Londres Chamando 4 de 5 #18">
            <div class="card">
              <div class="card-body">
                <div class="card-title h5">Tracer-Londres Chamando 4 #20</div>
                <a href="https://playoverwatch.com/pt-br/media/stories/tracer-london-calling-4/" target="_blank" class="btn btn-primary fw-bolder">Ver completo</a>
              </div>
            </div>
        </div>
        <div class="item">
            <img src="../img/quadrinho/quadrinhos/image 21.png" alt="Tracer-Londres Chamando 5 de 5 #18" title="Tracer-Londres Chamando 5 de 5 #18">
            <div class="card">
              <div class="card-body">
                <div class="card-title h5">Tracer-Londres Chamando 5 #21</div>
                <a href="https://playoverwatch.com/pt-br/media/stories/tracer-london-calling-5/" target="_blank" class="btn btn-primary fw-bolder">Ver completo</a>
              </div>
            </div>
        </div>
        <div class="item">
             <img src="../img/quadrinho/quadrinhos/image 22.png" alt="Terror De Halloween" title="Terror De Halloween">
            <div class="card">
              <div class="card-body">
                <div class="card-title h5">Terror De <br>Halloween</div>
                <a href="https://playoverwatch.com/pt-br/media/stories/halloween-terror/" target="_blank" class="btn btn-primary fw-bolder">Ver completo</a>
              </div>
            </div>
        </div>
        <div class="item">
            <img src="../img/quadrinho/quadrinhos/image 23.png" alt="Caça Ao Yeti" title="Caça Ao Yeti">
            <div class="card">
              <div class="card-body">
                <div class="card-title h5 pb-4">Caça Ao Yeti</div>
                <a href="https://playoverwatch.com/pt-br/media/stories/yeti-hunt/" target="_blank" class="btn btn-primary fw-bolder">Ver completo</a>
              </div>
            </div>
        </div>
    </div>
<div class="row">
    <div class="col-12">
        <div class="h3 text-warning fst-italic">Contos</div>
    </div>
</div>
<div class="owl-carousel owl-theme owl-2 pt-3">
        <div class="item">
            <img src="../img/quadrinho/quadrinhos/image 24.png" alt="De Pedra Em Pedra" title="De Pedra Em Pedra">
            <div class="card">
              <div class="card-body">
                <div class="card-title h5">De Pedra Em <br>Pedra</div>
                <a href="https://playoverwatch.com/pt-br/media/stories/stone-by-stone/" target="_blank" class="btn btn-primary fw-bolder">Ver completo</a>
              </div>
            </div>
        </div>
         <div class="item">
            <img src="../img/quadrinho/quadrinhos/image 25.png" alt="Valquíria" title="Valquíria">
            <div class="card">
              <div class="card-body">
                <div class="card-title h5 pb-4">Valquíria</div>
                <a href="https://playoverwatch.com/pt-br/media/stories/valkyrie/" target="_blank" class="btn btn-primary fw-bolder">Ver completo</a>
              </div>
            </div>
        </div>
        <div class="item">
            <img src="../img/quadrinho/quadrinhos/image 26.png" alt="O Que Voc Para Trs" title="O Que Você Para Trás">
            <div class="card">
              <div class="card-body">
                <div class="card-title h5">O Que Você Deixou Para Trás</div>
                <a href="https://playoverwatch.com/pt-br/media/stories/what-you-left-behind/" target="_blank" class="btn btn-primary fw-bolder">Ver completo</a>
              </div>
            </div>
        </div>
        <div class="item">
            <img src="../img/quadrinho/quadrinhos/image 27.png" alt="Bastet" title="Bastet">
            <div class="card">
              <div class="card-body">
                <div class="card-title h5 pb-4">Bastet</div>
                <a href="https://playoverwatch.com/pt-br/media/stories/bastet/" target="_blank" class="btn btn-primary fw-bolder">Ver completo</a>
              </div>
            </div>
        </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="h3 text-warning fst-italic">Animações</div>
    </div>
</div>
<div class="owl-carousel owl-theme owl-2 pt-3">
        <div class="item">
                <div class="ratio ratio-4x3">
                    <iframe src="https://www.youtube.com/embed/_MTimZTXlAU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="card-title h5">Curta de Animação: "Reunion"</div>
                    </div>
                </div>           
        </div>
        <div class="item">
                <div class="ratio ratio-4x3">
                    <iframe src="https://www.youtube.com/embed/zlEWKEQsgeQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="card-title h5">Curta de Animao: "Shooting Star"</div>
                    </div>
                </div>           
        </div>
        <div class="item">
                <div class="ratio ratio-4x3">
                    <iframe src="https://www.youtube.com/embed/M9xZ1nT8chQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="card-title h5">Curta de Animação: "Honor and Glory"</div>
                    </div>
                </div>           
        </div>
        <div class="item">
                <div class="ratio ratio-4x3">
                    <iframe src="https://www.youtube.com/embed/RPCItVuXMkI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="card-title h5">Curta de Animao: "Rise and Shine"</div>
                    </div>
                </div>           
        </div>
        <div class="item">
                <div class="ratio ratio-4x3">
                    <iframe src="https://www.youtube.com/embed/P95F9KKUYaQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="card-title h5">Curta de Animação: "Infiltration"</div>
                    </div>
                </div>           
        </div>
        <div class="item">
                <div class="ratio ratio-4x3">
                    <iframe src="https://www.youtube.com/embed/tsXPa_WZ2Lw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="card-title h5">Curta de Animaão: "The Last Bastion"</div>
                    </div>
                </div>           
        </div>
        <div class="item">
                <div class="ratio ratio-4x3">
                    <iframe src="https://www.youtube.com/embed/iqEOYSNS-1o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="card-title h5">Curta de Animaão: "Hero"</div>
                    </div>
                </div>           
        </div>
        <div class="item">
                <div class="ratio ratio-4x3">
                    <iframe src="https://www.youtube.com/embed/cBkoJcWHw6w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="card-title h5">Curta de Animaço: "Dragons"</div>
                    </div>
                </div>           
        </div>
        <div class="item">
                <div class="ratio ratio-4x3">
                    <iframe src="https://www.youtube.com/embed/amKzjdlonZU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="card-title h5">Curta de Animaço: "Alive"</div>
                    </div>
                </div>           
        </div>
        <div class="item">
                <div class="ratio ratio-4x3">
                    <iframe src="https://www.youtube.com/embed/zBJs_Wf9hQ4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="card-title h5">Curta de Animaço: "Recall"</div>
                    </div>
                </div>           
        </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="h3 text-warning fst-italic">Histórias de Origem</div>
    </div>
</div>
<div class="owl-carousel owl-theme owl-2 pt-3">
    <div class="item">
                <div class="ratio ratio-4x3">
                    <iframe src="https://www.youtube.com/embed/9Sir9_Zx9h0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="card-title h5">História De Origem: <br>Echo</div>
                    </div>
                </div>           
        </div>
        <div class="item">
                <div class="ratio ratio-4x3">
                    <iframe src="https://www.youtube.com/embed/j2fT2HI0_g4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="card-title h5">Histria De Origem: Sigma</div>
                    </div>
                </div>           
        </div>
        <div class="item">
                <div class="ratio ratio-4x3">
                    <iframe src="https://www.youtube.com/embed/3gkmteTkM_Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="card-title h5">História De Origem: Baptiste</div>
                    </div>
                </div>           
        </div>
        <div class="item">
                <div class="ratio ratio-4x3">
                    <iframe src="https://www.youtube.com/embed/DGNyGnXq8hg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="card-title h5">História De Origem: <br>Ashe</div>
                    </div>
                </div>           
        </div>
        <div class="item">
                <div class="ratio ratio-4x3">
                    <iframe src="https://www.youtube.com/embed/WTnyLh5_YFo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="card-title h5">História De Origem: <br>Wrecking Ball</div>
                    </div>
                </div>           
        </div>
        <div class="item">
                <div class="ratio ratio-4x3">
                    <iframe src="https://www.youtube.com/embed/hyJXDzohIrk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="card-title h5">História De Origem: <br>Brigitte</div>
                    </div>
                </div>           
        </div>
         <div class="item">
                <div class="ratio ratio-4x3">
                    <iframe src="https://www.youtube.com/embed/kT4uiQwRUIY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="card-title h5">História De Origem: <br>Moira</div>
                    </div>
                </div>           
        </div>
        <div class="item">
                <div class="ratio ratio-4x3">
                    <iframe src="https://www.youtube.com/embed/BeLZAq9LV_I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="card-title h5">Histria De Origem: <br>Doomfist</div>
                    </div>
                </div>           
        </div>
        <div class="item">
                <div class="ratio ratio-4x3">
                    <iframe src="https://www.youtube.com/embed/1H3RNGAu0Ug" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="card-title h5">Histria De Origem: <br>Orisa</div>
                    </div>
                </div>           
        </div>
        <div class="item">
                <div class="ratio ratio-4x3">
                    <iframe src="https://www.youtube.com/embed/usB3JDXGEQU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="card-title h5">História De Origem: <br>Sombra</div>
                    </div>
                </div>           
        </div>
        <div class="item">
                <div class="ratio ratio-4x3">
                    <iframe src="https://www.youtube.com/embed/1RX7-KKBCdc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="card-title h5">Histria De Origem: <br>Ana</div>
                    </div>
                </div>           
        </div>
</div>
</section>

<footer class="text-center text-lg-start bg-dark">
	<div class="text-center text-white p-4">
          Overwatch: FanPage - 2021: Todos os direitos reservados
  	</div>
</footer>

    <!--jquery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--owl carousel-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript">
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
    
    
})


    </script>

  </body>
</html>
<style>
    .owl-carousel .owl-nav button.owl-next, .owl-carousel .owl-nav button.owl-prev {
    background: #F06414;
}
</style>