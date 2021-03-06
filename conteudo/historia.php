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
  <link href="../css/estilo.css?versao=<?=filemtime('../css/estilo.css');?>" rel="stylesheet">   

  <title>OverFans - Histria</title>
  <link rel="icon" type="image/x-icon" href="../img/overwatch-icon.ico">
  
  <link rel="icon" type="image/x-icon" href="../img/overwatch-icon.ico">
       <style>
        .masthead {
          height: 100vh;
          min-height: 500px;
          background-image: url('../img/historia/banner.png'); /*imagem do topo*/
          background-size: cover;
          background-position: center;
          background-repeat: no-repeat;
        }
        </style>
  
</head>

<body>
    <!--Inicio navbar-->
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
             <a class="navbar-brand" href="../index.php"><img src="../img/logo--overwatch.svg" alt="" width="30" height="30"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="../index.php">In??cio</a>
                </li>
        
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Eventos
                  </a>
                  <ul class="dropdown-menu bg-dark border-0" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item text-white" href="../conteudo/eventos.php">Eventos</a></li>
                    <li><a class="dropdown-item text-white" href="../conteudo/e-sports.php">E-sports</a></li>
                  </ul>
                </li>
              
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Historias
                  </a>
                  <ul class="dropdown-menu bg-dark border-0" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item text-white active" href="#">Historias</a></li>
                    <li><a class="dropdown-item text-white" href="../conteudo/herois.php">Herois</a></li>
                    <li><a class="dropdown-item text-white" href="../conteudo/quadrinho.php">Quadrinhos</a></li>
                    <li><a class="dropdown-item text-white" href="../conteudo/mapas.php">Mapas</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../conteudo/skins.php">Skins</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../conteudo/patches.php">Patches</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../conteudo/sobre.php">Sobre</a>
                </li>
              
              </ul>
              <form method="POST" action="buscar.php" class="d-flex">
                <input class="form-control me-2" name="buscar" type="search" placeholder="Pesquisar conteudo" aria-label="Pesquisar">
                <button class="btn btn-outline-warning" type="submit"><i class="fa fa-search"></i></button>
              </form>
            </div>
          </div>
        </nav>
        <!--Fim navbar-->
        
        <!--Inicio Header-->
        <header class="masthead">
          <div class="container h-100">
            <div class="row h-100 align-items-center">
              <div class="col-12 text-center text-white">
                <h1 class="font-weight-light gradient-text" style="font-family: overFont;font-size:70px;">HIST??RIA</h1>
              </div>
            </div>
          </div>
        </header>
        <!--Fim Header-->
        
        
        <div class="container">
            
            <!--Crise-->
            <div class="row">
                <div class="col-xl-12" style="background-color: #C4C4C4; text-align: center; padding: 1%; margin-top: 5%; width: 50%; margin-left: 25%;"><h2>Crise Ominica</h2></div>
            </div>
            <div class="row" style="margin-top: 4%; background-color: #CC9226;">
                <div class="col-xl-6" style=" text-align: center; vertical-align: center; font-weight: bold; font-size: 19px;">A Omnica Corporation revolucionou a fabrica????o robtica com a cria????o de "omniums". Mas os algoritmos de autoaperfei??oamento das f??bricas estavam repletos de defeitos e foram encerrados. Ap??s um per??odo de dorm??ncia, os omniums reativaram-se, produzindo um ex??rcito de omnics altamente adapt??veis que atacaram a humanidade, dando in??cio ?? Crise Omnium. Em resposta, muitos pa??ses desenvolveram iniciativas de defesa avan??ada, como o Programa de Soldados Avan??ados dos Estados Unidos e os Cruzados da Alemanha.</div>
                <div class="col-xl-6">
                    <img src="../img/historia/crise.jpg" class="img-fluid" alt="crise-ominica-foto" title="crise-ominica-foto">
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 second-ov-video" style="background-color:black; margin-top:3%;">
                        <div style="color:white; text-align: center; font-weight: bold;">Assista "Honor and Glory", Reinhardt reflete sobre uma batalha decisiva durante a Crise Omnic que o levou a se juntar ?? Overwatch.</div>
                        <div class="ratio ratio-16x9">
                            <iframe width="640" height="360" src="https://www.youtube.com/embed/M9xZ1nT8chQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                </div>
            </div>
            <!--Crise-->
            
            <!--Estabelecida-->
            
            <div class="row">
                <div class="col-xl-12" style="background-color: #C4C4C4; text-align: center; padding: 1%; margin-top: 5%; width: 50%; margin-left: 25%;"><h2>Overwatch estabelecida</h2></div>
            </div>
            <div class="row" style="margin-top: 4%; background-color: #CC9226;">
                <div class="col-xl-6" style=" text-align: center; vertical-align: center; font-weight: bold; font-size: 20px;">Com a escalada do conflito, as Na????es Unidas recrutaram her??is de todo o mundo para formar o "Overwatch". Por meio de uma s??rie de ataques perigosos, Overwatch conseguiu desligar os omniums e vencer a guerra. Nas d??cadas seguintes, a influncia de Overwatch cresceu. Al??m dos esfor??os militares de manuten??o da paz, a Overwatch foi pioneira em iniciativas cient??ficas para erradicar epidemias, reverter danos ecol??gicos e desenvolver novos avan??os na medicina. Por muitos anos, a organiza??o foi um s??mbolo de esperana para o mundo.</div>
                <div class="col-xl-6">
                    <img src="../img/historia/estabelecida.jpg" class="img-fluid" alt="overwatch-estabelecida-foto" title="overwatch-estabelecida-foto">
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 second-ov-video" style="background-color:black; margin-top:3%;">
                        <div style="color:white; text-align: center; font-weight: bold;">Assista "The Last Bastion", Um aut??mato de batalha esquecido reativa inesperadamente depois de permanecer adormecido no deserto desde a Crise Omnic.</div>
                        <div class="ratio ratio-16x9">
                            <iframe width="640" height="360" src="https://www.youtube.com/embed/tsXPa_WZ2Lw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                </div>
            </div>
            
            <!--Estabelecida-->
            
            <!--Queda-->
            <div class="row">
                <div class="col-xl-12" style="background-color: #C4C4C4; text-align: center; padding: 1%; margin-top: 5%; width: 50%; margin-left: 25%;"><h2>A Queda da overwatch</h2></div>
            </div>
            <div class="row" style="margin-top: 4%; background-color: #CC9226;">
                <div class="col-xl-6" style=" text-align: center; vertical-align: center; font-weight: bold; font-size: 16px;">Infelizmente, as coisas desandaram ap??s uma rixa entre seus l??deres: Morrison continuou como lder da Overwatch, enquanto que Reyes criou a Blackwatch, uma divis??o de opera????es especiais que lida com a amea??a de grupos terroristas que surgiram com o passar do tempo.
                    Algumas dessas organiza??es s??o a Talon, que quer iniciar uma segunda Crise Omnic; e a Null Sector, um grupo de Omnics que se revoltou contra a humanidade, por conta de persegui????es que eles sofreram em consequ??ncia da crise original.
                    A Overwatch ainda conseguiu manter a paz mundial por anos, mas a rixa entre Reyes e Morrison s?? piorou com o passar do tempo. Isso fez o grupo que d?? nome ao jogo ter sua imagem arranhada perante a opini??o p??blica mundial e seus pr??prios membros come??aram a brigar, o que resultou em uma investiga??o conduzida pela ONU.
                    Nesse intervalo de tempo, uma exploso destruiu o QG da equipe e, aparentemente, resultou na morte de Reyes e Morrison. A ONU aprovou o Ato Petras, que resultou no desligamento da Overwatch e proibiu qualquer atividade semelhante.</div>
                <div class="col-xl-6">
                    <img src="../img/historia/queda.png" class="img-fluid" alt="queda-overwatch-foto" title="queda-overwatch-foto">
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 second-ov-video" style="background-color:black; margin-top:3%;">
                        <div style="color:white; text-align: center; font-weight: bold;">Assista "Doom Fist Origin History", Doomfist escapa da pris??o e planeja tomar o controle de Talon, colocando os eventos em movimento para mergulhar o mundo no caos.</div>
                        <div class="ratio ratio-16x9">
                            <iframe width="640" height="360" src="https://www.youtube.com/embed/BeLZAq9LV_I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                </div>
            </div>
            <!--Queda-->
            
            <!--Recall-->
            <div class="row">
                <div class="col-xl-12" style="background-color: #C4C4C4; text-align: center; padding: 1%; margin-top: 5%; width: 50%; margin-left: 25%;"><h2>Recall</h2></div>
            </div>
            <div class="row" style="margin-top: 4%; background-color: #CC9226;">
                <div class="col-xl-6" style=" text-align: center; vertical-align: center; font-weight: bold; font-size: 18px;">O primeiro game come??a seis anos ap??s a aprova????o deste ato. Sem a presen??a da Overwatch, grandes corpora????es come??aram a brigar por poder e o terrorismo aumentou em v??rias partes do mundo. Al??m disso, surgiram ind??cios de uma segunda Crise Omnic.
                    O gorila Winston, ex-integrante da Overwatch, decidiu recriar a equipe, mesmo com o Ato Petras em vig??ncia, recrutando tanto antigos parceiros quanto novos integrantes. 
                    Tamb??m ?? revelada a informa??o de que Reyes e Morrison n??o morreram na explos??o, que foi causada por eles mesmos por conta de uma luta. Reyes se tornou um terrorista e assumiu a identidade de Reaper, enquanto que Morrison virou um vigilante conhecido pelo nome de Soldado 76, que quer descobrir as verdadeiras raz??es por tr??s do desligamento da Overwatch.</div>
                <div class="col-xl-6">
                    <img src="../img/historia/recall.jpg" class="img-fluid" alt="winston-foto" title="winston-foto">
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 second-ov-video" style="background-color:black; margin-top:3%;">
                        <div style="color:white; text-align: center; font-weight: bold;">Assista "Recall", Winston, um cientista brilhante e gorila geneticamente modificado, luta para decidir se deve chamar de volta os agentes de Overwatch.</div>
                        <div class="ratio ratio-16x9">
                            <iframe width="640" height="360" src="https://www.youtube.com/embed/zBJs_Wf9hQ4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                </div>
            </div>
            <!--Recall-->
            
            <!--2-->
            <div class="row">
                <div class="col-xl-12" style="background-color: #C4C4C4; text-align: center; padding: 1%; margin-top: 5%; width: 50%; margin-left: 25%;"><h2>Overwatch 2</h2></div>
            </div>
            <div class="row" style="margin-top: 4%; background-color: #CC9226;">
                <div class="col-xl-6" style=" text-align: center; vertical-align: center; font-weight: bold; font-size: 24px;">Overwatch 2 foi revelado como uma sequ??ncia para o FPS da Blizzard na BlizzCon 2019. O novo game FPS traz misses de campanha e cooperativas, um sistema de progress??o de n??veis, customiza????o de habilidades dos her??is, mapas novos e personagens novos. Alm de continuar a hist??ria do primeiro jogo. A data de lanamento de Overwatch 2 ainda n??o ?? certa.</div>
                <div class="col-xl-6">
                    <img src="../img/historia/2.jpg" class="img-fluid" alt="winston-foto" title="winston-foto">
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 second-ov-video" style="background-color:black; margin-top:3%;">
                        <div style="color:white; text-align: center; font-weight: bold;">Assista "Zero Hour",Winston, Tracer e Mei enfrentam adversidades esmagadoras quando o Setor Nulo ataca Paris.</div>
                        <div class="ratio ratio-16x9">
                            <iframe width="640" height="360" src="https://www.youtube.com/embed/GubjHz5--6M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                </div>
            </div>
            <!--2-->
            
            
        </div>
        
        <footer class="text-center text-lg-start bg-dark">
        	<div class="text-center text-white p-4" style="margin-top: 7%;">
                  Overwatch: FanPage - 2021: Todos os direitos reservados
          	</div>
        </footer>
  </body>
</html>