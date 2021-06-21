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
    
  <title>OverFans - Herois</title>
  <link rel="icon" type="image/x-icon" href="../img/overwatch-icon.ico">
  <style>
        .masthead {
          height: 100vh;
          min-height: 500px;
          background-image: url('../img/herois/header.png'); /*imagem do topo*/
          background-size: cover;
          background-position: center;
          background-repeat: no-repeat;
        }
        .owl-carousel .owl-nav button.owl-next, .owl-carousel .owl-nav button.owl-prev {
            background: #F06414;
        }
        .item h3{
            color: #d0d0dc;
            text-transform: uppercase;
        }
        
        .item .name{
            position: relative;
            height: 70px;
            bottom: 100px;
            opacity: 0;
            transition: 0.5s;
            animation-delay: 1s;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            background: rgba(40,53,79);
            text-align: center;
        }
        .item:hover img{
            transform: scale(1.1);
        }
        .item:hover .name{
            position: relative;
            bottom: 40px;
            opacity: 1;
            transform: scale(1.1);
        }
        .name{
            padding-top: 15px;
        }
    </style>
</head>
<body>
    <!--Inicio navbar-->
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
                <li><a class="dropdown-item text-white active" href="#">Herois</a></li>
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
    
    <!--Fim navbar-->
    
    <!--Header-->
    <header class="masthead">
          <div class="container h-100">
            <div class="row h-100 align-items-center">
              <div class="col-12 text-center text-white">
                <h1 class="font-weight-light gradient-text" style="font-family: overFont;font-size:70px;">HEROIS</h1>
              </div>
            </div>
          </div>
    </header>
    <!--Header-->
    
    <div class="container">
        
    <h1 style="margin-top:5%; text-align:center; color:#ffc107;">DPS</h1>
    
    
    <!--DPS-->
    <div class="owl-carousel owl-theme pt-3">
        <div class="item">
            <a href="#ashe"><img src="../img/herois/ashe.png" alt="Ashe" title="Ashe" onClick="ashe();" style="cursor: pointer;"></a>
            <div class="name">
                <h3>Ashe</h3>
            </div>
        </div>
        <div class="item">
            <a href="#bastion"><img src="../img/herois/bastion.png" alt="Bastion" title="Bastion" onClick="bastion();" style="cursor: pointer;"></a>
            <div class="name">
                <h3>Bastion</h3>
            </div>
        </div>
        <div class="item">
            <a href="#doomfist"><img src="../img/herois/doomfist.png" alt="Doomfist" title="Doomfist" onClick="doomfist();" style="cursor: pointer;"></a>
            <div class="name">
                <h3>Doomfist</h3>
            </div>
        </div>
        <div class="item">
            <a href="#echo"><img src="../img/herois/echo.png" alt="Echo" title="Echo" onClick="echo();" style="cursor: pointer;"></a>
            <div class="name">
                <h3>Echo</h3>
            </div>
        </div>
        <div class="item">
            <a href="#genji"><img src="../img/herois/genji.png" alt="Genji" title="Genji" onClick="genji();" style="cursor: pointer;"></a>
            <div class="name">
                <h3>Genji</h3>
            </div>
        </div>
        <div class="item">
            <a href="#hanzo"><img src="../img/herois/hanzo.png" alt="Hanzo" title="Hanzo" onClick="hanzo();" style="cursor: pointer;"></a>
            <div class="name">
                <h3>Hanzo</h3>
            </div>
        </div>
        <div class="item">
            <a href="#junkrat"><img src="../img/herois/junkrat.png" alt="Junkrat" title="Junkrat" onClick="junkrat();" style="cursor: pointer;"></a>
            <div class="name">
                <h3>Junkrat</h3>
            </div>
        </div>
        <div class="item">
            <a href="#mccree"><img src="../img/herois/mccree.png" alt="Mccree" title="Mccree" onClick="mccree();" style="cursor: pointer;"></a>
            <div class="name">
                <h3>Mccree</h3>
            </div>
        </div>
        <div class="item">
            <a href="#mei"><img src="../img/herois/mei.png" alt="Mei" title="Mei" onClick="mei();" style="cursor: pointer;"></a>
            <div class="name">
                <h3>Mei</h3>
            </div>
        </div>
        <div class="item">
            <a href="#pharah"><img src="../img/herois/pharah.png" alt="Pharah" title="Pharah" onClick="pharah();" style="cursor: pointer;"></a>
            <div class="name">
                <h3>Pharah</h3>
            </div>
        </div>
        <div class="item">
             <a href="#reaper"><img src="../img/herois/reaper.png" alt="Reaper" title="Reaper" onClick="reaper();" style="cursor: pointer;"></a>
            <div class="name">
                <h3>Reaper</h3>
            </div>
        </div>
        <div class="item">
            <a href="#soldado"><img src="../img/herois/soldado.png" alt="Soldado" title="Soldado" onClick="soldado();" style="cursor: pointer;"></a>
            <div class="name">
                <h3>Soldado: 76</h3>
            </div>
        </div>
        <div class="item">
            <a href="#sombra"><img src="../img/herois/sombra.png" alt="Sombra" title="Sombra" onClick="sombra();" style="cursor: pointer;"></a>
            <div class="name">
                <h3>Sombra</h3>
            </div>
        </div>
        <div class="item">
            <a href="#sym"><img src="../img/herois/symmetra.png" alt="Symmetra" title="Symmetra" onClick="sym();" style="cursor: pointer;"></a>
            <div class="name">
                <h3>Symmetra</h3>
            </div>
        </div>
        <div class="item">
            <a href="#tob"><img src="../img/herois/torbjorn.png" alt="Tobjorn" title="Tobjorn" onClick="tob();" style="cursor: pointer;"></a>
            <div class="name">
                <h3>Torbjorn</h3>
            </div>
        </div>
        <div class="item">
            <a href="#tracer"><img src="../img/herois/tracer.png" alt="Tracer" title="Tracer" onClick="tracer();" style="cursor: pointer;"></a>
            <div class="name">
                <h3>Tracer</h3>
            </div>
        </div>
        <div class="item">
            <a href="#widow"><img src="../img/herois/widowmaker.png" alt="Widowmaker" title="Widowmaker" onClick="widow();" style="cursor: pointer;"></a>
            <div class="name">
                <h3>Widowmaker</h3>
            </div>
        </div>
    </div>
    <!--DPS-->
    
    <h1 style="margin-top:5%; text-align:center; color:#ffc107;">Tank</h1>
    
    
    <!--Tank-->
    <div class="owl-carousel owl-theme pt-3">
        <div class="item">
            <a href="#dva"><img src="../img/herois/dva.png" alt="D.va" title="D.va" onClick="dva();" style="cursor: pointer;"></a>
            <div class="name">
                <h3>D.va</h3>
            </div>
        </div>
        <div class="item">
            <a href="#orisa"><img src="../img/herois/orisa.png" alt="Orisa" title="Orisa" onClick="orisa();" style="cursor: pointer;"></a>
            <div class="name">
                <h3>Orisa</h3>
            </div>
        </div>
        <div class="item">
            <a href="#rein"><img src="../img/herois/rein.png" alt="Reinhardt" title="Reinhardt" onClick="rein();" style="cursor: pointer;"></a>
            <div class="name">
                <h3>Reinhardt</h3>
            </div>
        </div>
        <div class="item">
            <a href="#roadhog"><img src="../img/herois/roadhog.png" alt="Roadhog" title="Roadhog" onClick="roadhog();" style="cursor: pointer;"></a>
            <div class="name">
                <h3>Roadhog</h3>
            </div>
        </div>
        <div class="item">
            <a href="#sigma"><img src="../img/herois/sigma.png" alt="Sigma" title="Sigma" onClick="sigma();" style="cursor: pointer;"></a>
            <div class="name">
                <h3>Sigma</h3>
            </div>
        </div>
        <div class="item">
            <a href="#winston"><img src="../img/herois/winston.png" alt="Winston" title="Winston" onClick="winston();" style="cursor: pointer;"></a>
            <div class="name">
                <h3>Winston</h3>
            </div>
        </div>
        <div class="item">
            <a href="#ball"><img src="../img/herois/ball.png" alt="Ball" title="Ball" onClick="ball();" style="cursor: pointer;"></a>
            <div class="name">
                <h3>Ballwrecking Ball</h3>
            </div>
        </div>
        <div class="item">
            <a href="#zarya"><a href="#zarya"><img src="../img/herois/zarya.png" alt="Zarya" title="Zarya" onClick="zarya();" style="cursor: pointer;"></a>
            <div class="name">
                <h3>Zarya</h3>
            </div>
        </div>
    </div>
    <!--Tank-->
    
    <h1 style="margin-top:5%; text-align:center; color:#ffc107;">Support</h1>
    
    <!--Support-->
    <div class="owl-carousel owl-theme pt-3">
        <div class="item">
            <a href="#ana"><img src="../img/herois/ana.png" alt="Ana" title="Ana" onClick="ana();" style="cursor: pointer;"></a>
            <div class="name">
                <h3>Ana</h3>
            </div>
        </div>
        <div class="item">
            <a href="#bap"><img src="../img/herois/baptiste.png" alt="Baptiste" title="Baptiste" onClick="bap();" style="cursor: pointer;"></a>
            <div class="name">
                <h3>Baptiste</h3>
            </div>
        </div>
        <div class="item">
            <a href="#brig"><img src="../img/herois/brigitte.png" alt="Brigitte" title="Brigitte" onClick="brig();" style="cursor: pointer;"></a>
            <div class="name">
                <h3>Brigitte</h3>
            </div>
        </div>
        <div class="item">
            <a href="#lucio"><img src="../img/herois/lucio.png" alt="Lucio" title="Lucio" onClick="lucio();" style="cursor: pointer;"></a>
            <div class="name">
                <h3>Lucio</h3>
            </div>
        </div>
        <div class="item">
            <a href="#mercy"><img src="../img/herois/mercy.png" alt="Mercy" title="Mercy" onClick="mercy();" style="cursor: pointer;"></a>
            <div class="name">
                <h3>Mercy</h3>
            </div>
        </div>
        <div class="item">
            <a href="#moira"><img src="../img/herois/moira.png" alt="Moira" title="Moira" onClick="moira();" style="cursor: pointer;"></a>
            <div class="name">
                <h3>Moira</h3>
            </div>
        </div>
        <div class="item">
            <a href="#zen"><img src="../img/herois/zen.png" alt="Zennyatta" title="Zennyatta" onClick="zen();" style="cursor: pointer;"></a>
            <div class="name">
                <h3>Zennyatta</h3>
            </div>
        </div>
    </div>
    <!--Support-->
    
    
    <div id="historia" style="background-color: #F06414; text-align: justify; color:white;  margin-top: 5%;">
    </div>
    
    <div  id="skills" class="row" style="margin-top: 3%;">
    </div>
    
    </div>

    <footer class="text-center text-lg-start bg-dark">
        <div class="text-center text-white p-4" style="margin-top: 7%;">
              Overwatch: FanPage - 2021: Todos os direitos reservados
          </div>
    </footer>
    
    <!--jquery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--owl carousel-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!--Script pro slide-->
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
    <!--Script pro slide-->
    
    <!--Script para funes-->
    <script>
        function ana(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Uma das fundadoras de Overwatch, Ana usa suas habilidades e seu conhecimento para defender seu lar e as pessoas que ela ama.Como a Crise Ômnica teve um peso muito grande para o Egito, as forças de segurança esvaziadas e sem pessoal do país se apoiaram nos franco-atiradores de elite. Entres eles, Ana Amari, que era considerada por muitos a melhor do mundo. Sua destreza com as armas, tomada rápida de decisões e instintos, fizeram dela uma seleão natural para se juntar à força de ataque de Overwatch que terminou a guerra. Seguindo o sucesso da missão original de Overwatch, Ana serviu muitos anos como a Segunda no Comando para o Comandante de Ataque Morrison. Apesar de suas grandes responsabilidades liderando a organizaço, Ana se recusou a deixar as operaes de combate. Ela continuou ativa até seus cinquenta anos de idade, até acreditarem que ela morreu nas mãos de uma agente da Talon conhecida como “Widowmaker”, durante uma missão de resgate de refns. Na verdade, Ana sobreviveu a esse encontro, mesmo que gravemente ferida e tendo perdido seu olho direito. Durante sua recuperao, ela sentiu o peso de uma vida gasta no combate e decidiu permanecer distante dos conflitos mundiais que se alargavam. Entretanto, com o passar do tempo, ela se deu conta de que não podia fazer nada enquanto sua cidade e as pessoas inocentes ao seu redor eram ameaados por outros. Agora, Ana voltou à luta para proteger seu país das forças que poderiam desestabilizá-lo; e mais importante, para manter sua famlia e seus aliados mais prximos em segurança.</div>";
            document.getElementById("skills").innerHTML = `
            <div class="col-xl-4" id="ana">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1; ">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/20707fd82265412fdc6d2353daa88ec7558cd71c89aa3ac6cf0e78bbbfcabd80.png" alt="DARDO SONÍFERO">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-5">
                        <h5 class="card-title pb-5">DARDO SONÍFERO</h5>
                        <p class="card-text pb-5">Ana dispara um dardo de sua arma secundária, deixando seus inimigos inconscientes (porém eles despertam ao receber dano).</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/c8190b234bf0a0e28eecffe162d0c942e6b8656e95f4688c6ca3b025fa5a487d.png" alt="GRANADA BIÓTICA">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">GRANADA BIÓTICA</h5>
                        <p class="card-text">Ana lança uma granada bitica que causa dano aos inimigos e cura os aliados em uma pequena área de efeito. Aliados afetados recebem por tempo limitado cura aumentada de todas as fontes, enquanto inimigos pegos pela explosão não podem se curar por alguns instantes.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4" style="color: white">
            <div class="card mb-3" style="max-width: 540px; background-color: #353C42;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/6fda18b343f3fd0e8dc50fa5a91589e1ca9ed7471a354f61dfc9f22b27b19497.png" alt="ESTIMULANTE">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-4">
                        <h5 class="card-title pb-5">ESTIMULANTE</h5>
                        <p class="card-text pb-5">Depois que Ana atinge seus aliados com um estimulante de combate, eles causam mais dano e recebem menos dano dos ataques inimigos temporariamente.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>  
            `;
            
            
        }

        function bap(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Baptiste  um médico de combate de elite e ex-agente da Talon que usa suas habilidades para ajudar vtimas da guerra. O menino Jean-Baptiste Augustine foi um dos 30 milhões de órfãos deixados pela Crise Ômnica. Diante da limitação de oportunidades e recursos, acabou se alistando na Coalizão Caribenha, uma fora militar criada no arquipélago em resposta à crise. Guiado pelo desejo inato de ajudar o prximo, Baptiste seguiu em sua nova família como médico de combate, atuando no braço de elite das tropas de operações especiais da Coalizão. Ao se desligar da tropa, o socorrista não encontrou mercado para suas habilidades únicas e acabou recorrendo a uma das poucas saídas disponveis: entrar para a Talon, uma das organizações mercenrias que aproveitaram para lucrar com o caos do pós-guerra. Pela primeira vez na vida, Baptiste teve algum sossego. Suas misses eram fáceis e bem remuneradas, o que lhe permitiu fazer planos de montar uma clínica médica em sua cidade natal. Mas, aos poucos, sua unidade ficou mais e mais brutal, com chacinas e baixas civis. Confrontado pela realidade cruel da equipe mercenária, o médico deu-se conta de que perpetuava o mesmo ciclo de violência que destruiu sua comunidade e abandonou o grupo, enojado pelos próprios atos e determinado a cimentar um novo caminho para si. A Talon, no entanto, no o deixaria partir. Baptiste sabia demais e precisava ser silenciado. O médico vagou ento de cidade em cidade para não chamar atenção, sem nunca deixar de atuar em açes humanitárias pelo mundo inteiro. Muitos agentes, inclusive alguns de seus ex-colegas, revezaram-se na caada, e os poucos que conseguiram rastreá-lo nunca mais foram vistos. Hoje, Baptiste trabalha por um mundo melhor, curando quando  possível e combatendo quando é preciso. O médico sabe que não pode mudar o prprio passado, mas o que importa é fazer a diferença aqui e agora.</div>";
            document.getElementById("skills").innerHTML = `
            <div class="col-xl-3" id="bap">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1; ">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/d887d165f7b0eb98a30af8f274ff740c6c7735af719b93e95dd9da17558815d8.png" alt="PULSO REGENERADOR">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body mb-4">
                        <h5 class="card-title">PULSO REGENERADOR</h5>
                        <p class="card-text">Baptiste ativa um pulso regenerador intenso que cura a si e aos aliados próximos ao longo do tempo.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-3">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/d66d82bab88fc813080dd15e31629cc3aa7c8b41cfb41d5b962b628dd345e433.png" alt="CAMPO DE IMORTALIDADE">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body">
                        <h5 class="card-title">CAMPO DE IMORTALIDADE</h5>
                        <p class="card-text">Baptiste usa um dispositivo para criar um campo que impede a morte de aliados. Esse gerador pode ser destruído.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-3" style="color: white">
            <div class="card mb-3" style="max-width: 540px; background-color: #353C42;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/0a31371b55e4007e67a86f8495949970d20f64b2f0166e78d3fd16217e090a83.png" alt="MATRIZ AMPLIFICADORA">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body mb-2">
                        <h5 class="card-title" style="font-size: 18px;">MATRIZ AMPLIFICADORA</h5>
                        <p class="card-text">Baptiste cria uma matriz que dobra o dano e a cura dos projteis de aliados que cruzam a rea de aço.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            
            <div class="col-xl-3">
            <div class="card mb-3" style="max-width: 540px; background-color: #C4C4C4;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/0d598afba5a03761d617d735d5435323c56108655b5017ddf8c36c4af36b9b73.png" alt="EXOBOTAS">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-5">
                        <h5 class="card-title pt-4 pb-4">EXOBOTAS</h5>
                        <p class="card-text pt-5 pb-5">Baptiste se agacha e salta mais alto.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            `;
            
            
        }

        function brig(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Agora em aço nas linhas de frente, Brigitte Lindholm pegou em armas para defender os indefesos. Filha mais nova do criador de armas Torbjrn Lindholm, Brigitte foi a primeira dos filhos dele a demonstrar interesse em engenharia mecânica. Brigitte passou muito do tempo livre dela na oficina do pai, aprendendo o ofício e melhorando suas habilidades. A aptidão de Brigitte para a engenharia igualava-se a do pai, mas o interesse primário dela estava na fabricação de armadura e sistemas defensivos, ao contrrio de Torbjrn, que era conhecido (e infame) no mundo todo pelas armas que criou. Todos esperavam que Brigitte continuasse o aprendizado e seguisse os passos do pai. S que seus planos mudaram graas à influência de outra figura importante da vida dela: Reinhardt Wilhelm, amigo do pai e tambm colega dele na Overwatch. Amigo próximo da família e padrinho de Brigitte, Reinhardt contava  menina histrias de heróis e cavaleiros. Depois da aposentadoria de Reinhardt e da queda da Overwatch, o guerreiro declarou que partiria numa jornada por justiça, tornando-se cavaleiro andante. Antes que ele partisse, Brigitte o surpreendeu com um pedido para acompanhá-lo como sua escudeira. Reinhardt aceitou. Como escudeira, Brigitte tinha muitas responsabilidades, sendo a mais importante a manuteno da armadura de Cruzado de Reinhardt (um design que ela conhecia, pois a verso atual fora criada pelo pai dela). S que, mais e mais, ela percebeu que a tarefa principal dela era cuidar de Reinhardt, tentando protegê-lo do próprio entusiasmo exagerado conforme o corpo dele ia sendo destrudo pelos anos de combate. No fim, ela percebeu que não bastaria ser uma mera mecânica e que a melhor forma de ajudar Reinhardt seria se tornar uma guerreira também. Enquanto Reinhardt a treinava em combate, Brigitte começou a criar a própria armadura em segredo. Agora Brigitte luta ao lado de Reinhardt para proteger a ele e todos aqueles que precisem de ajuda enquanto cavaleiro e escudeira viajam para melhorar o mundo, uma batalha de cada vez.</div>";
            document.getElementById("skills").innerHTML = `
            <div class="col-xl-3" id="brig">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1; ">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/5f9f1e00af992f4a090cafc8e83821dd2848f22cb9e0205fafcedacb26bd7335.png" alt="KIT DE REPAROS">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body mb-5">
                        <h5 class="card-title pb-5">KIT DE REPAROS</h5>
                        <p class="card-text pb-4">Cura um aliado por um curto período.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-3">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/50af1a0bc61a1f022fe2ee69aa460f151aba3c0ccde41377bfb0d5c45b2c55a3.png" alt="DISPARO AÇOITADOR">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body">
                        <h5 class="card-title">DISPARO AOITADOR</h5>
                        <p class="card-text">Brigitte arremessa o mangual a uma longa distância, causando dano e empurrando um inimigo para longe dela.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-3">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/2b1bb6338180161e55c5f2184879dce395eca9e58f974befe729293fcc3dfdca.png" alt="BARREIRA DE ESCUDO">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body">
                        <h5 class="card-title">BARREIRA DE ESCUDO</h5>
                        <p class="card-text pb-4">Brigitte cria uma barreira de energia à frente, absorvendo uma quantidade limitada de dano.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-3">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/79f145b07b35e744fd0400dceff5fb11a06f9a73c48809f1cfb462fe82fe1185.png" alt="GOLPE DE ESCUDO">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body">
                        <h5 class="card-title">GOLPE DE ESCUDO</h5>
                        <p class="card-text pb-4">Ao acionar a Barreira de Escudo, Brigitte pode dar uma arremetida para atordoar um inimigo.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            
            <div class="row">
            <div class="col-xl-4"></div>
            <div class="col-xl-4" style="color: white">
            <div class="card mb-3" style="max-width: 540px; background-color: #353C42;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/08552423da53faa55238bd66a2a72d32d1038e42f2eebc911921bc9d5d575432.png" alt="REAGRUPAR">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 18px;">REAGRUPAR</h5>
                        <p class="card-text">Brigitte anda mais rápido e concede a todos os aliados próximos uma armadura que dura até ser destruda por dano.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-xl-4"></div>
            </div>
            
            `;
            
            
        }

        function lucio(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Lúcio é uma celebridade internacional que inspira a mudança social atravs de suas músicas e aões. Lúcio Correia dos Santos cresceu no Rio de Janeiro, em uma favela pobre e super populosa, que sofreu muito com o revs financeiro após a Crise mnica. Com o Brasil iniciando o longo processo de recuperação, ele quis encontrar uma forma de avivar os espíritos daqueles a seu redor. Ele encontrou o que procurava na música e no poder que ela tem de aproximar as pessoas, ajudando-as at mesmo a esquecer seus problemas, mesmo que apenas por um momento. Ele se apresentava nas ruas, em festas na comunidade, e quando foi ficando mais velho, em uma srie de shows lendários da cena underground. Mas a comunidade unida de Lúcio se transformou em um caos quando a Corporao Vishkar, uma multinacional, assinou um contrato para reconstruir grandes porçes da cidade. Foi dito a Lúcio e seus vizinhos que o desenvolvimento melhoraria suas vidas. Mas essa promessa nunca virou realidade. A Vishkar impôs um controle a seus residentes sob a alegaão de construir uma sociedade com mais ordem: colocando toques de recolher, atacando comportamentos que a companhia via como imorais e explorando a população como força de trabalho barata. Lúcio não podia aceitar isso. Ele roubou a tecnologia sônica da Vishkar que havia sido usada para oprimir a população e converteu em uma ferramenta para motivá-los à aço. Com uma revolta popular, eles expulsaram a Vishkar de suas vizinhanas. A liderança de Lúcio o transformou da noite para o dia em celebridade e um símbolo de mudança social positiva. Sua música teve uma explosão de popularidade. Antes ele se apresentava localmente, agora ele enchia as arenas ao redor do mundo. Com sua nova fama, Lúcio percebeu que tinha a oportunidade de fazer a diferena e mudar o mundo para melhor.</div>";
            document.getElementById("skills").innerHTML = `
            <div class="col-xl-4" id="lucio">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1; ">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/9f4ab602b5e8be4a9b8d6312ae22e7b9f23f73d132f7955bfe7c1e838ca5ef9f.png" alt="TRANSIÇÃO">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">TRANSIÃO</h5>
                        <p class="card-text">Lúcio se energiza continuamente, assim como aliados próximos, com sua música. Ele pode trocar entre duas músicas: uma amplifica a velocidade de movimento, enquanto a outra recupera vida.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/023a4fcb7ff780b15f62a894fa4ee07f13428c3f1cee17d575884dbe820e0c13.png" alt="SOLTA O SOM">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-5">
                        <h5 class="card-title">SOLTA O SOM</h5>
                        <p class="card-text pb-4 pt-4">Lcio aumenta o volume de seus alto-falantes, aumentando os efeitos de suas músicas.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4" style="color: white">
            <div class="card mb-3" style="max-width: 540px; background-color: #353C42;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/21c5a17be341a3c0da2dcc9372f4f3c88ef622c80776360bd844d0fba3eb88a7.png" alt="BARREIRA DE SOM">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-5">
                        <h5 class="card-title">BARREIRA DE SOM</h5>
                        <p class="card-text">Ondas protetoras irradiam do Amplificador Snico do Lúcio, garantindo escudos pessoais a ele e a aliados próximos por um breve momento.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>  
            `;
            
            
        }

        function mercy(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Um anjo da guarda para aqueles em seus cuidados, Dra. Angela Ziegler é uma curandeira sem igual, uma cientista brilhante e uma defensora convicta da paz. Ziegler se tornou a chefe de cirurgia em um proeminente hospital suíço, antes de ser pioneira em avanos no campo da nanobiologia aplicada, que melhorou radicalmente o tratamento de doenas e ferimentos mortais. Foram estas percias que atraíram a atenção da Overwatch. Com o falecimento de seus pais devido à guerra, Ziegler se opunha à abordagem militar da organizaço em manter a paz mundial. Por fim, ela reconheceu que a Overwatch oferecia a ela a oportunidade de salvar vidas em uma escala muito maior. Como chefe das pesquisas médicas da Overwatch, Angela buscou alavancar seu trabalho de cura na linha de frente, em situaões de crise. O resultado foi a armadura de resposta rpida Valquíria, a qual a própria Ziegler pilotou em diversas misses da Overwatch. Apesar de suas contribuiçes para a Overwatch, ela se estranhava constantemente com seus superiores e com os objetivos globais da instituição. Quando a Overwatch se dissipou, Ziegler se dedicou a ajudar aqueles afetados pela guerra. Apesar de passar a maior parte do tempo cuidando dos que tudo perderam nas áreas em crise ao redor do mundo, pode-se contar com a Dra. Ziegler para usar sua armadura de Valquria sempre que inocentes estiverem em perigo.</div>";
            document.getElementById("skills").innerHTML = `
            <div class="col-xl-3" id="mercy">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1; ">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/e6d6f1f8288bb9a61fcfb85db90a49d3228277d18ac190898567bed4e7799ddc.png" alt="ANJO DA GUARDA">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body">
                        <h5 class="card-title">ANJO DA GUARDA</h5>
                        <p class="card-text">Mercy voa na direção de um aliado que ela tenha mirado, permitindo alcançá-lo rapidamente para fornecer assistência em momentos cruciais.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-3">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/d26768cf459611eedc4fdcc9096ad3b196e8b2babb0782cf24d56f108325e3bb.png" alt="RESSURREIÇÃO">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body mb-5">
                        <h5 class="card-title">RESSURREIÃO</h5>
                        <p class="card-text pt-5 pb-5">Mercy traz um aliado morto de volta  batalha, com vida máxima.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-3" style="color: white">
            <div class="card mb-3" style="max-width: 540px; background-color: #353C42;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/0f5455a8a464e85370365bc954dc6c1cca11f4f5c09e7e6eee7a3dde29170c9e.png" alt="VALQURIA">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body mb-5">
                        <h5 class="card-title pb-4" style="font-size: 18px;">VALQURIA</h5>
                        <p class="card-text pb-5 pt-5">Ganha a habilidade de voar. Habilidades são aprimoradas.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            
            <div class="col-xl-3">
            <div class="card mb-3" style="max-width: 540px; background-color: #C4C4C4;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/d53b51360a83f35c450211d4a38859c839ad5720379d2e275a4f5826f3fe9967.png" alt="DESCENSO ANGELICAL">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-5">
                        <h5 class="card-title pb-4">DESCENSO ANGELICAL</h5>
                        <p class="card-text pt-4 pb-4">Impulsionada por sua armadura de Valquíria, Mercy reduz a velocidade de sua descida em grandes alturas.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            `;
            
            
        }

        function moira(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Tão brilhante quanto controversa, a cientista Moira O’Deorain pesquisa o que há de mais avançado na engenharia genética, buscando uma forma de reescrever os fundamentos que constroem a vida. Mais de uma dcada atrs, O’Deorain causou um alvoroço ao publicar um trabalho controverso detalhando uma metodologia para criar programas genéticos personalizados que poderiam alterar o DNA em nvel celular. Parecia um passo promissor para superar doenas e síndromes e maximizar o potencial humano. O evento foi seguido por discordâncias entre seus colegas. Muitos consideraram seu trabalho perigoso devido às consequências éticas e O'Deorain foi acusada de ter o mesmo desejo científico de avanço sem restrições que muitos acreditam ter causado a Crise Ômnica. Alm disso, outros geneticistas foram incapazes de reproduzir os resultados das pesquisas de Moira, o que trouxe questionamentos a suas descobertas. Em vez de alavancar sua carreira, seu trabalho acabou prejudicando imensamente sua reputaão. Ela recebeu investimento com uma oferta de uma fonte improvável: a Blackwatch, a equipe de operações secretas da Overwatch. Ela continuou seu trabalho das sombras enquanto desenvolvia armas e tecnologias novas para a organização. Seu emprego era um segredo bem guardado até que foi descoberto devido às investigações após o incidente de Veneza. Muitos oficiais de alto escalo na Overwatch juraram não saber de sua afiliao à equipe. Aps a Overwatch ter sido desfeita, O'Deorain foi forçada a buscar fontes alternativas de custeamento. Dessa vez, ela foi convidada para se juntar ao coletivo científico que fundou a cidade de Oásis. Ainda assim, alguns dizem que a organização secreta Talon já a financiava por anos, ajudando em seus experimentos em troca do uso de seus resultados para fins prprios. Apesar de O'Deorain buscar o avanço cientfico a qualquer custo, seu trabalho ainda é desconhecido pela maioria. Mas agora que ela foi libertada de todas as amarras,  só uma questo de tempo até tudo mudar.</div>";
            document.getElementById("skills").innerHTML = `
            <div class="col-xl-4" id="moira">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1; ">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/a5a235623aeb7fce1ce8e545e5be2d95b48fddf609c174fc5067efd7681ac72f.png" alt="ORBE BIÓTICO">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">ORBE BITICO</h5>
                        <p class="card-text">Moira lança uma esfera biótica que rebate. Ela pode escolher entre um efeito de regeneraço que cura aliados ao passar por eles ou de deterioraão que causa dano aos inimigos.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/ba44615a7e3799d50bc2194079dd88177f98d4050a28acba6cd33ad1daaf7b5b.png" alt="DESVANECER">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-5">
                        <h5 class="card-title">DESVANECER</h5>
                        <p class="card-text pb-4 pt-4">Moira se teletransporta rapidamente por distâncias curtas.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4" style="color: white">
            <div class="card mb-3" style="max-width: 540px; background-color: #353C42;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/23d3ef53fd21d04e7e7b137b38e87c61b3d65394393dc00759ceb65d406e37b9.png" alt="COALESCNCIA">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-5">
                        <h5 class="card-title">COALESCÊNCIA</h5>
                        <p class="card-text">Moira canaliza um raio de longa distância que pode curar aliados ou atravessar barreiras para causar dano a seus inimigos.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>  
            `;
            
            
        }

        function zen(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Zenyatta é um monge ômnico que vagueia pelo mundo em busca de iluminaão espiritual. Dizem que aqueles que cruzam seu caminho nunca serão os mesmos. Anos atrás, após a Crise Ômnica, um grupo de robôs ômnicos exilados vivenciou o que eles descrevem como um despertar espiritual. Eles abandonaram suas vidas pré-programadas para estabelecer um monastrio comunal nas profundezas do Himalaia. Aps muitos anos de meditação sobre a natureza da existência, eles passaram a acreditar que eram mais do que inteligncias artificiais e que, como os humanos, possuam a essncia de uma alma. Reconhecendo a igualdade espiritual que tinham com os humanos, os monges, liderados pelo misterioso robô conhecido como Tekhartha Mondatta, procuraram curar as feridas causadas uma geração antes pela Crise Ômnica e trazer humanos e robôs de volta a uma sociedade em harmonia. Sua mensagem foi abraada por milhares de pessoas ao redor do mundo e eles se tornaram celebridades globais. Mas um monge, Zenyatta, discordava dessa nova direção. Ele acreditava que o caminho para reparar os problemas entre humanos e mnicos não era através do ensino dogmático, mas através da conexo e do envolvimento interpessoal. Por fim, Zenyatta seguiu seu prprio caminho. Ele escolheu deixar o monastério e vagar pelo mundo, ajudando aqueles que ele encontrar a superarem suas batalhas pessoais e encontrarem a paz interior. Mas, quando necessário, ele irá lutar para proteger os inocentes, sejam eles ômnicos ou humanos.</div>";
            document.getElementById("skills").innerHTML = `
            <div class="col-xl-4" id="zen">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1; ">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/999f5d34dd3c8dfb045bc69129d1b6aac547b98e252b68f2599b878d15d841cb.png" alt="ORBE DA HARMONIA">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-4">
                        <h5 class="card-title">ORBE DA HARMONIA</h5>
                        <p class="card-text">Zenyatta lana um orbe sobre o ombro de um alvo aliado. Enquanto Zenyatta mantiver uma linha de viso, o orbe recupera lentamente a vida do aliado. Somente um aliado pode receber os benefcios do orbe de cada vez.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/f416ae3c602c4f920551057176a3618441f943a0faea5e3cf77dc5db0e5128a5.png" alt="ORBE DA DISCÓRDIA">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-5">
                        <h5 class="card-title">ORBE DA DISCÓRDIA</h5>
                        <p class="card-text">Prender o orbe da discrdia a um oponente amplifica a quantidade de dano que ele recebe enquanto Zenyatta mantiver uma linha de visão. Somente um inimigo pode sofrer os efeitos do orbe de cada vez.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4" style="color: white">
            <div class="card mb-3" style="max-width: 540px; background-color: #353C42;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/6ac5d4f08023cafc9f5412e45141cddecfdb2cb43ecf8415c12d1d161cce4678.png" alt="TRANSCENDNCIA">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">TRANSCENDÊNCIA</h5>
                        <p class="card-text">Zenyatta entra em um estado de existência elevada por um breve período de tempo. Enquanto transcende, Zenyatta não pode usar suas habilidades ou armas, mas é imune ao dano e restaura automaticamente a vida dele e de aliados próximos.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>  
            `;
            
            
        }

        function dva(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>D.Va é uma ex-gamer profissional que sabe como usar suas habilidades para pilotar um mecha de última geração na defesa de sua cidade natal. Vinte anos atrás, a Coréia do Sul foi atacada por um mnico monstruoso que surgiu das profundezas do Mar da China Oriental. O construto enorme causou danos catastróficos às cidades costais antes de ser forçado a recuar para debaixo das ondas. Em resposta, o governo da Coria do Sul desenvolveu uma unidade drone blindada e mecanizada, chamada de MEKA, para proteger ambientes urbanos em combates futuros com a ameaça ômnica. Os medos do governo se mostraram bem fundados à medida que um padro de ataques perturbador surgiu. A cada determinado número de anos, a monstruosidade se levantava do mar para atacar a Coréia do Sul e seus vizinhos. O ômnico aprendia com cada ataque, sempre se reconfigurando em uma forma diferente e aparecendo com novas armas e funcionalidades. Cada incidente terminava em um impasse, com a monstruosidade derrotada, porém não destruda. Com o ômnico sempre se adaptando, ele eventualmente conseguiu interferir com o controle de drones da rede MEKA, forando os militares a colocarem pilotos nos mechas. Com dificuldades para achar candidatos apropriados, o governo recorreu aos jogadores de videogames profissionais, que tinham os reflexos e instintos necessários para operar os sistemas avançados das armas dos mechas. Os melhores foram selecionados, incluindo a campe mundial, Hana Song, conhecida tambm como 'D.Va'. Famosa por suas habilidades de elite, D.Va era uma competidora feroz, que jogava para vencer a qualquer custo, e tinha a reputação bem fundamentada de não mostrar misericórdia por seus oponentes. Vendo sua nova misso como um jogo, D.Va avana ferozmente em batalha junto com o resto de sua unidade MEKA, pronta para agir em defesa de sua nao a qualquer momento. Recentemente, ela começou a fazer streams de suas operações de combate para seus adorados fãs e o crescimento de seus seguidores a transformou em um ícone global.</div>";
            document.getElementById("skills").innerHTML = `
            <div class="col-xl-3" id="dva">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1; ">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/89d6beb25b21eacd5a181b96438436692d9ad403fcef19873e506f6d46ed37a3.png" alt="PROPULSORES">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body">
                        <h5 class="card-title">PROPULSORES</h5>
                        <p class="card-text">O mecha da D.Va se lança no ar e sua fora a empurra para frente. Ela pode virar e mudar de direção ou atropelar seus inimigos, empurrando-os para trás.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-3">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/3a98edf05de3697c0b63e52f5eb59ef635a1f6a29d7a62d6ab1f490e28991bfe.png" alt="MATRIZ DE DEFESA">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body mb-4">
                        <h5 class="card-title">MATRIZ DE DEFESA</h5>
                        <p class="card-text">D.Va pode ativar seus projetores frontais por um curto período. Enquanto os projetores estiverem ativos, deterão projéteis iminentes.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-3">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/1787326d46d04aa10872fc30fe512ab3575781735110dfb178ff38da352facb7.png" alt="MICRO MÍSSEIS">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body mb-5">
                        <h5 class="card-title pb-4">MICRO MÍSSEIS</h5>
                        <p class="card-text pt-5 pb-5">D.VA lança uma salva de foguetes explosivos.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-3">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/848d8cd24eb0327a023a564447d79dd8b367c21a378d328cd92896a21b775219.png" alt="CHAMAR MECHA">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body mb-5">
                        <h5 class="card-title">CHAMAR MECHA</h5>
                        <p class="card-text">Se sua armadura de batalha for destruída, D.Va pode chamar um mecha novinho em folha para retornar para as trincheiras.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            
            <div class="row">
            <div class="col-xl-4"></div>
            <div class="col-xl-4" style="color: white">
            <div class="card mb-3" style="max-width: 540px; background-color: #353C42;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/f76e4b710ceb71f2e260029fc8d0ad15b227e3f006ab1b6c0c4e44da98c2d614.png" alt="AUTODESTRUIR">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 18px;">AUTODESTRUIR</h5>
                        <p class="card-text">D.Va ejeta de seu mecha e arma seu reator para explodir, causando dano massivo a seus inimigos prximos.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-xl-4"></div>
            </div>
            
            `;
            
            
        }

        function orisa(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Construída a partir das peças de um OR15, os robôs de defesa de curta duração de Numbani, Orisa  a mais nova protetora da cidade, mas ela ainda tem muito o que aprender. Colocada em funcionamento antes da Crise Ômnica, a linha OR14 'Idina' de robs de segurança foi construída no enorme mnium de produção nigeriano. Aps a guerra, eles saram de linha, juntamente com vrios outros modelos usados durante a crise. Vinte anos depois, Numbani reativou e reiniciou o programa OR14 para proteger a cidade contra ameaças externas. Esses novos OR15 foram implantados por um breve período antes de serem destruídos em um ataque de Doomfist. Após o ataque, o programa foi desmontado e o governo vendeu o estoque restante de OR15s. Algumas peças foram adquiridas por Efi Oladele, uma garota gnio de apenas 11 anos de idade cujas precoces realizações na área de robótica já haviam lhe rendido um 'prêmio de gênio' da Fundaão Adawe. Com a aprovação de seus pais extremamente compreensivos e mente aberta, Efi gastou a maior parte do seu prêmio na compra de um robô OR15 desativado. Ela acreditava que Numbani precisava de um protetor e que um OR15 aprimorado seria capaz de fazer isso. Efi consertou e reconfigurou o rob e instalou um núcleo de personalidade que ela mesma projetou. Ela chamou a mais nova heroína de Numbani de Orisa. Orisa já mostrou que pode ser útil para a cidade, mas ainda se esforça para encontrar seus protocolos ideais. A falta de experiência da ômnica às vezes faz dela um estorvo, mas, felizmente, graças à disposição de Efi em fazer as modificaçes necessárias e à inteligência artificial adaptativa de Orisa, tanto robô quanto criadora sempre conseguiram ajustar as coisas. Neste início de carreira como guardiã, Orisa tem muito o que aprender sobre suas prprias funcionalidades e sobre o mundo. Mas enquanto ela for guiada pelo ilimitado otimismo de Efi e por seu crescente senso de honra e dever, Orisa estará pronta para proteger sua criadora e Numbani a qualquer custo.</div>";
            document.getElementById("skills").innerHTML = `
            <div class="col-xl-3" id="orisa">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1; ">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/d697fa90726cf683222920822d2ee00a85e0420c6cbc6ec2365573f313d06357.png" alt="FORTIFICAR">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body mb-5">
                        <h5 class="card-title">FORTIFICAR</h5>
                        <p class="card-text">Orisa reduz temporariamente o dano recebido e não pode ser afetada por efeitos que impedem suas ações.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-3">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/0ccf984506779d8ac96eb75f386fcfd8a781e1b01fcfd42da90343ff75888d33.png" alt="PARADOS!">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body">
                        <h5 class="card-title">PARADOS!</h5>
                        <p class="card-text">Orisa lança uma carga de grvitons que pode ser detonada para desacelerar inimigos próximos e pux-los para o centro da explosão.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-3" >
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/dd5eae0eb278e6f844f2694ea349cadd782c4e17535dc29e23ba5cd461b85c6a.png" alt="BARREIRA PROTETORA">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body mb-5">
                        <h5 class="card-title" style="font-size: 18px;">BARREIRA PROTETORA</h5>
                        <p class="card-text pt-5 pb-1">Orisa cria uma barreira fixa que protege a ela e seus aliados de fogo inimigo.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            
            <div class="col-xl-3" style="color: white">
            <div class="card mb-3" style="max-width: 540px; background-color: #353C42;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/613c5ce0514904872b7d7ef026222a34a691674255c4c132acf6ecf276b80640.png" alt="AMPLIFICADOR">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-3">
                        <h5 class="card-title">AMPLIFICADOR</h5>
                        <p class="card-text pt-5 pb-1">Orisa implanta um dispositivo que aumenta o dano causado por aliados em seu campo de visão.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            `;
            
            
        }

        function rein(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Reinhardt Wilhelm se veste como um heri de eras passadas que vive pelos nobres códigos do valor, da justiça e da coragem. Mais de trinta anos atrs, Overwatch foi fundada para resistir à ameaa das rebeliões de robôs ao redor do mundo. Reinhardt, um soldado alemão altamente condecorado, foi inserido como parte da equipe de ataque original da Overwatch, que pôs fim à Crise Ômnica. Aps a decisão do conflito, Overwatch se tornou uma instituição global, mantenedora da paz em um mundo castigado pela guerra. Reinhardt provou ser um dos seus heróis mais leais. A tica incomparável e a personalidade fortssima de Reinhardt conquistaram a admiração dos seus companheiros e superiores. Sem nunca ter medo de falar o que pensava, ele era o defensor mais vigoroso da Overwatch e, quando necessrio, seu crítico mais duro, lembrando constantemente que a Overwatch havia sido criada para ser uma fora do bem. Tendo servido até quase os sessenta anos, Reinhardt teve que encarar a aposentadoria obrigatória das operaões de combate. Desanimado por ter sido tirado do seu dever, Reinhardt temia que seus dias de propsito e glória haviam terminado. Conforme os tempos ficavam mais sombrios e a Overwatch se tornava suspeita de corrupo e rebelião, Reinhardt só podia assistir enquanto a causa pela qual ele havia dedicado sua vida para defender era cercada de desgraa. Apesar da Overwatch ter sido eventualmente dissolvida, Reinhardt não estava feliz em ficar sentado enquanto o mundo caa em desordem. Colocando mais uma vez sua armadura de Cruzado, ele fez votos de lutar pela justiça por toda a Europa como um cavaleiro dos tempos antigos, defendendo os inocentes e conquistando coraões e mentes com a promessa de dias melhores pela frente.</div>";
            document.getElementById("skills").innerHTML = `
            <div class="col-xl-3" id="rein">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1; ">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/299d97f5f256197df2698c32678314f9e08f04bbf68eba3801992e08281fd481.png" alt="CAMPO DE BARREIRA">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body">
                        <h5 class="card-title">CAMPO DE BARREIRA</h5>
                        <p class="card-text">Reinhardt projeta uma barreira frontal ampla, que pode absorver uma quantidade substancial de dano antes de ser destruída. Apesar de Reinhardt poder proteger a si mesmo e seus companheiros com a barreira, ele não pode atacar enquanto a mantém.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-3">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/40c9f1c060033e58120c9ec174008b8f5d833412923f7f351a32e5df47fe8166.png" alt="INVESTIDA">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body mb-5">
                        <h5 class="card-title">INVESTIDA</h5>
                        <p class="card-text pb-4">Reinhardt avança em linha reta, carregando o primeiro inimigo que aparecer na sua frente e tirando os outros do caminho. Se ele colidir com uma parede, o adversário que estiver carregando sofrerá dano extremo.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-3" >
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/568a5f49875557f735af36dce68474a923f7e8582a7be20fb68b6ee66ac077e6.png" alt="TIRO FLAMEJANTE">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body mb-5">
                        <h5 class="card-title pb-5 pt-1" style="font-size: 18px;">TIRO FLAMEJANTE</h5>
                        <p class="card-text pt-5 pb-5">Ao brandir seu Martelo Propulsor, Reinhardt lança um projétil flamejante que perfura e inflige dano a qualquer inimigo que tocar.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            
            <div class="col-xl-3" style="color: white">
            <div class="card mb-3" style="max-width: 540px; background-color: #353C42;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/a63041a68d81c202a47a95035878edcfa75d5aa3f72414a7e84e1b1a68594bed.png" alt="ABALO TERRESTRE">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-5">
                        <h5 class="card-title pt-5 pb-1 mb-4">ABALO TERRESTRE</h5>
                        <p class="card-text pb-5 pt-5 mb-5">Reinhardt bate seu martelo propulsor no chão com força, infligindo dano e derrubando todos os inimigos a sua frente.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            `;
            
            
        }

        function roadhog(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Roadhog é um matador sanguinário com uma reputaão merecida por crueldade e destruição gratuita. Após a Crise Ômnica, oficiais do governo entregaram o omnium australiano e as terras nos arredores aos ômnicos que quase destruíram o país, na esperança de estabelecer um acordo de paz duradouro. Esse acordo de paz desalojou permanentemente Mako Rutledge e um grande número de residentes da rea: um conjunto de sobreviventes, fazendeiros solares e pessoas que só queriam ficar em paz. Furiosos com a perda de seus lares, Mako e outros residentes recorreram a uma rebelião violenta. Eles formaram a Frente de Liberao Australiana e atacaram o omnium e sua população robô para tomar de volta as terras que tinham sido roubadas deles. Os eventos continuaram a ganhar maiores propores at que a FLA sabotou o núcleo de fusão do omnium, resultando em uma explosão que destruiu o omnium, irradiou os arredores e sucateou o Deserto Australiano com metal retorcido e destroços por quilômetros. Mako viu seu lar se tornar uma terra devastada apocalíptica e isso o mudou para sempre. Adaptando-se a seu ambiente, ele pôs uma máscara e partiu pelas autoestradas quebradas do Deserto Australiano em sua moto decrépita. Aos poucos, sua humanidade foi esquecida. Os últimos vestígios de Mako desapareceram e nasceu o matador impiedoso, Roadhog.</div>";
            document.getElementById("skills").innerHTML = `
            <div class="col-xl-4" id="roadhog">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1; ">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/9cb8d867671bf917a9ba5d4a28ab6cb6ceeb10de2813567fcad97aca32c58499.png" alt="PEGANDO FÔLEGO">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-5">
                        <h5 class="card-title">PEGANDO FLEGO</h5>
                        <p class="card-text mb-5 pb-4">Roadhog recupera partes de sua vida depois de um breve período de tempo.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/139deabeb3d62c451b558367bf5e64641583355d99ed90fe42107a5716fdca3b.png" alt="CORRENTE DE GANCHO">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-5">
                        <h5 class="card-title">CORRENTE DE GANCHO</h5>
                        <p class="card-text mb-4 pb-4">Roadhog lana sua corrente em um alvo, se ela acerta, ele o puxa para perto.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4" style="color: white">
            <div class="card mb-3" style="max-width: 540px; background-color: #353C42;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/4da2a0d46056c6570af1e85be8697eb6e912f09c840d6702bbf5feb2f0bccb23.png" alt="CAIR MATANDO">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">CAIR MATANDO</h5>
                        <p class="card-text">Depois de amontoar um carregador superior em sua Arma de Sucata, Roadhog despeja muniço. Por um curto período de tempo, ele  capaz de de lançar um fluxo de estilhaços que arremessa os inimigos para trs.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>  
            `;
            
            
        }

        function sigma(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>A vida de Dr. Siebren de Kuiper, astrofísico brilhante, mudou para sempre quando um experimento catastrófico lhe deu o poder de controlar a gravidade. Agora, a Talon o manipula para seus próprios fins. De Kuiper era considerado um pioneiro em sua rea. Ele dedicou a vida a encontrar uma forma de controlar a gravidade. Renomado tanto por sua pesquisa inovadora quanto por sua personalidade excêntrica, conduziu a maior parte dos estudos no seu laboratório em Haia. Acreditando estar prximo de alcançar seu objetivo, realizou seu experimento mais importante a bordo de uma estaão espacial internacional. Mas algo deu errado, causando a formação de um efêmero buraco negro. De Kuiper só foi exposto a ele por um breve instante, porm sofreu graves danos psicológicos. A área ao redor dele comeou a apresentar estranhas variações na gravidade, que ora se elevava, ora caía, em função de suas reaões. Ele teve que ser tirado dali imediatamente. Ao retornar  Terra, De Kuiper foi mantido em quarentena em instalaes governamentais secretas. Em meio a desvarios acerca dos padrões do universo, ao dano psíquico sofrido e a anomalias gravitacionais, ele foi considerado perigoso e passou anos confinado, sendo denominado 'Cobaia Sigma'. Isolado e incapaz de controlar seus poderes, De Kuiper se refugiou em sua própria mente, achando que jamais voltaria a ver o mundo exterior. Quando soube da existência de De Kuiper, a Talon se infiltrou nas instalações e o retirou de lá, planejando se aproveitar de sua genialidade e de suas pesquisas. Sob a custdia da organização, De Kuiper lentamente ganhou controle dos seus poderes. A gravidade passou a se alterar de acordo com sua vontade e ele estava mais perto do que nunca de alcanar o objetivo de toda uma vida. Porém, o mesmo experimento que expandira sua mente também a esfacelara, e ele agora lutava para juntar os pedaços. De Kuiper continua desenvolvendo seus poderes na esperana de desvendar os segredos do universo, sem saber que tanto ele quanto sua pesquisa esto sendo usados pela Talon.</div>";
            document.getElementById("skills").innerHTML = `
            <div class="col-xl-3" id="sigma">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1; ">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/ae2c31f159331f73739932e85dc21bdfa8eb4f2b2d2de4e89c1488445da34ffb.png" alt="BARREIRA EXPERIMENTAL">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body">
                        <h5 class="card-title">BARREIRA EXPERIMENTAL</h5>
                        <p class="card-text">Sigma lança uma barreira flutuante no local escolhido. A barreira pode ser dispensada a qualquer instante.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-3">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/a7401d18a391bc0eafddd8fc47a31ccc7f277190ab61ed14ae98408f576d6a23.png" alt="PUNHO CINÉTICO">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body mb-5">
                        <h5 class="card-title">PUNHO CINÉTICO</h5>
                        <p class="card-text pb-5 pt-4">Sigma paralisa projéteis no ar, convertendo-os em escudos.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-3" >
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/594b0ecbb34b41b288c08bc7b040b273f25289ef0afc2d00828d6a30a0687236.png" alt="ACREÇÃO">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body mb-5">
                        <h5 class="card-title" style="font-size: 18px;">ACREÇÃO</h5>
                        <p class="card-text pt-5">Sigma junta uma massa de escombros e a atira em um inimigo para derrub-lo.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            
            <div class="col-xl-3" style="color: white">
            <div class="card mb-3" style="max-width: 540px; background-color: #353C42;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/7140d3eaf82e580ab465dcdb04bd1faaf77ac54550a12d17ecde7c4e87e963e0.png" alt="FLUXO GRAVITACIONAL">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">FLUXO GRAVITACIONAL</h5>
                        <p class="card-text">No auge do seu poder, Sigma ala voo, ergue os inimigos na área escolhida, lança-os para o alto e os atira no chão novamente.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            `;
            
            
        }

        function winston(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Um gorila geneticamente modificado altamente inteligente, Winston é um cientista brilhante e um herói do potencial humano. A Colônia Lunar do Horizonte foi estabelecida como um primeiro passo para uma nova exploração do espao pela humanidade. Entre seus residentes, estava um grupo de gorilas geneticamente melhorados que deveriam testar os efeitos da vida prolongada no espaço. Um dos gorilas apresentou um desenvolvimento cerebral tão rápido com a terapia genética que foi levado aos cuidados do Dr. Harold Winston, que o ensinou ciências e o inspirou com histórias da ingenuidade humana. O jovem gorila passou seus dias ajudando nos experimentos dos cientistas, assistindo ao distante mundo azul do lado de fora da janela do seu habitat, sonhando com as infinitas possibilidades que o aguardavam l fora. Mas sua vida se transformou em caos quando os outros gorilas começaram uma rebelião, mataram os cientistas da misso e tomaram a posse da colônia. Tomando o nome do seu amado cuidador humano, Winston construiu um foguete improvisado e fugiu para a Terra. Lá, ele encontrou um novo lar na Overwatch, uma organização que representava tudo o que ele aprendeu a admirar sobre a humanidade. Winston finalmente poderia viver pelos ideais heroicos que haviam se instaurado nele. Agora, com a queda da Overwatch, Winston ficou isolado, novamente tirado do mundo em que ele acredita, mas ansiando para que os dias de heroísmo retornem.</div>";
            document.getElementById("skills").innerHTML = `
            <div class="col-xl-4" id="winston">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1; ">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/dbad1fe535da5b932ad706a0ca06373d530f1210cbbb095ef1bc8b3a7cc64172.png" alt="SALTO A JATO">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-5">
                        <h5 class="card-title">SALTO A JATO</h5>
                        <p class="card-text mb-5 pt-5 pb-5">Com a ajuda do seu jato de energia, Winston ataca pelo ar, causando dano significativo e atordoando inimigos prximos ao aterrissar.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/469c290ded9fd33ce4ed927fc2da12c97483711e155f73bd7eaa05a399d5dbff.png" alt="PROJETOR DE BARREIRA">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-5">
                        <h5 class="card-title">PROJETOR DE BARREIRA</h5>
                        <p class="card-text mb-5 pt-5">O Projetor de Barreira de Winston estende um campo em forma de bolha que absorve dano até ser destruído. Aliados dentro da barreira podem atirar de dentro dela.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4" style="color: white">
            <div class="card mb-3" style="max-width: 540px; background-color: #353C42;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/685608721cb914e0412a090eb1e89c0f5d10edfb3dbc34218ba3acd35611c990.png" alt="FÚRIA PRIMATA">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">FÚRIA PRIMATA</h5>
                        <p class="card-text">Winston retorna à sua natureza animal, aumentando significativamente sua vida e deixando-o mais difícil de matar, fortalecendo seu ataque corpo-a-corpo e permitindo a ele usar sua habilidade Salto a Jato com maior frequência. Durante sua fúria, Winston só é capaz de realizar ataques corpo-a-corpo e com o Salto a Jato.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>  
            `;
            
            
        }

        function ball(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Em um dos diversos experimentos realizados na Colnia Lunar Horizon, os cientistas submeteram animais a terapia gentica para avaliar a capacidade de adaptaço deles a períodos longos de habitação na lua. Como efeito colateral inesperado, vrios exibiram um crescimento excepcional em tamanho fsico e funções cerebrais. Embora as cobaias, na sua maioria, fossem gorilas e outros primatas, havia algumas exceções, como um hamster chamado Hammond. Assim como nos outros casos, a inteligncia de Hammond cresceu e despertou a curiosidade dele em relao ao mundo ao seu redor. Para grande espanto e deleite dos cientistas, ele vivia fugindo para outras partes da base lunar. Embora sempre o encontrassem e o devolvessem à sua cela, eles nunca descobriram o verdadeiro propósito das escapadas noturnas. O que eles não sabiam é que Hammond estava ocupado aprendendo o ofício de mecnico, o que logo seria útil. A colônia virou um pandemônio quando alguns dos gorilas se rebelaram contra os cientistas humanos e assumiram o controle. Entretanto, nem todos os animais participaram da rebelião, e um dos gorilas, Winston, estava matutando um plano para fugir para a Terra. Hammond sentiu que era sua oportunidade. Ele construiu uma cápsula improvisada e acoplou-a secretamente à nave de Winston enquanto o gorila decolava. Quando os dois entraram na atmosfera terrestre, Hammond se soltou e aterrissou em um local diferente: a região desértica da Austrália. Hammond modificou sua cápsula de fuga para entrar na lucrativa arena de batalha de mechas do Ferro-velho. Subindo no ranque de lutadores, Wrecking Ball passou de concorrente a campeão, embora a identidade do piloto permanecesse um mistrio para todos. Juntando seus ganhos, Hammond conseguiu aprimorar o mecha o bastante para sobreviver na perigosa jornada para sair do deserto controlado pelos Junkers. Agora livre para ir e vir, Hammond está explorando o mundo e vivendo novas aventuras pelo caminho.</div>";
            document.getElementById("skills").innerHTML = `
            <div class="col-xl-3" id="ball">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1; ">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/b7f7e90bf3c3f26704133263896bded18e523e29dad2fe04c5f3c1bfa4472579.png" alt="ROLAGEM">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body mb-5">
                        <h5 class="card-title">ROLAGEM</h5>
                        <p class="card-text mb-5 pt-4">Wrecking Ball se transforma em uma bola, aumentando sua velocidade máxima de movimento.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-3">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/e81e6ba9fb3391f29528021e453a0d3c16da1fc5e378994e6d00783356e0f2c9.png" alt="GARRA">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body">
                        <h5 class="card-title">GARRA</h5>
                        <p class="card-text">Wrecking Ball joga uma garra para se prender a um ponto e se balançar. Se ele atingir um inimigo com um balanço energizado, o inimigo sofrerá dano e será empurrado.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-3">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/fa65af9c692405f968fafbeedcdfc9092b38a050dc3562bd41280390ccd7a21d.png" alt="ESCUDO ADAPTATIVO">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body">
                        <h5 class="card-title">ESCUDO ADAPTATIVO</h5>
                        <p class="card-text">Os escudos pessoais temporários de Wrecking Ball absorvem dano, oferecendo defesas mais fortes se mais oponentes estiverem por perto.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-3">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/3e884373721448d109c1646599cfe651a5bccdbc7a12d5062372c91b28acd80c.png" alt="BATE-ESTACA">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body mb-5">
                        <h5 class="card-title">BATE-ESTACA</h5>
                        <p class="card-text mb-5 pt-4">Wrecking Ball bate no chão, causando dano aos inimigos e lanando-os no ar.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            
            <div class="row">
            <div class="col-xl-4"></div>
            <div class="col-xl-4" style="color: white">
            <div class="card mb-3" style="max-width: 540px; background-color: #353C42;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/17a54a345b715bc4301b330d8eb394f57e1c66308a8cba67f426de76a71ba868.png" alt="CAMPO MINADO">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 18px;">CAMPO MINADO</h5>
                        <p class="card-text">Wrecking Ball lana uma série de minas de proximidade de longa duraço que explodem ao entrar em contato com inimigos.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-xl-4"></div>
            </div>
            
            `;
            
            
        }

        function zarya(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Aleksandra Zaryanova é uma das mulheres mais fortes do mundo, uma atleta aclamada que sacrificou o triunfo pessoal para proteger sua família, amigos e país em tempos de guerra. Aleksandra nasceu em uma vila remota na Sibéria, que era uma das linhas de frente na Crise Ômnica, que começou por volta de trinta anos atrás. Apesar das forças russas terem derrotado os robs e desligado seu omnium, a região foi devastada pelo conflito. Aleksandra, que era apenas uma criança na época, foi cercada pela destruiço pós-guerra, e com o passar dos anos, ela jurou que se tornaria forte para ajudar seu povo a se recuperar. Focando em levantamento de peso e fisiculturismo, Aleksandra foi identificada pelo programa nacional de atletas como uma estrela em potencial. Ela treinou, extensivamente, subindo nos rankings enquanto representava seu país, com expectativas de quebrar antigos recordes nos campeonatos mundiais que viriam. Entretanto, na véspera do torneio, um ataque veio do dormente omnium siberiano e sua vila foi lançada na guerra mais uma vez. Aleksandra imediatamente se retirou da competião e correu para casa para se alistar às forças locais de defesa, sacrificando a vida de fama e fortuna que ela poderia ter tido. Agora ela serve ao dever, sendo um símbolo para alguns e brava companheira de guerra para outros. Mas para Aleksandra,  uma chance de usar sua grande força para proteger aqueles que ama.</div>";
            document.getElementById("skills").innerHTML = `
            <div class="col-xl-4" id="zarya">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1; ">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/2d462e28ae2fc60b3ef9c32702bbc88936885dd7d20746a31dd2e3c51c20f199.png" alt="BARREIRA DE PARTÍCULAS">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">BARREIRA DE PARTÍCULAS</h5>
                        <p class="card-text">O Canhão de Partculas pode emitir uma barreira individual que protege Zarya contra ataques eminentes, redirecionando a energia deles para aumentar o dano de sua própria arma e a largura de seu raio.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/6e42984ee8329a50e9c2460ae2df7670d7be9846a093c336e4576d1eea1fb2f1.png" alt="BARREIRA PROJETADA">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">BARREIRA PROJETADA</h5>
                        <p class="card-text">Zarya cerca um dos membros de sua equipe com uma barreira de energia que simultaneamente absorve fogo inimigo e aumenta o poder de seu Canhão de Partculas.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4" style="color: white">
            <div class="card mb-3" style="max-width: 540px; background-color: #353C42;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/e58e60f939026f3d0ee95cf3a0b5fc8091da3c35a178d34c358700f3720a70d3.png" alt="SURTO DE GRÁVITONS">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-5">
                        <h5 class="card-title">SURTO DE GRÁVITONS</h5>
                        <p class="card-text pb-4">Zarya lança uma bomba de gravidade que atrai os combatentes inimigos, causando dano enquanto eles estão presos.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>  
            `;
            
            
        }

        function ashe(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Ashe, a líder ambiciosa e calculista da gangue Deadlock, é uma figura respeitada no submundo do crime. Nascida em uma família rica, Ashe cresceu cercada de privilégios. Seus pais eram consultores de negócios bastante procurados por CEOs poderosos do mundo todo. Embora dessem pouca atenção à menina, que geralmente ficava sob os cuidados do mordomo ômnico da família, Bob, eles lhe proporcionaram todas as oportunidades de vencer na vida. Mas um encontro fortuito com um rufião local chamado Jesse McCree e uma série de crimes improvisados juntos abriram os olhos dela para sua verdadeira vocação. A satisfação de enganar seus alvos e a emoão de levar a melhor transformou-a em uma fora da lei. Junto com os outros trs fundadores da gangue Deadlock, Ashe começou a chamar a atenão com roubos cada vez maiores e mais extravagantes. A rápida ascenso do bando gerou desavenas com outras organizaçes criminosas do sudoeste americano, e os encontros muitas vezes descambavam para a violncia. Após anos de conflitos e derramamento de sangue, a moça convocou os líderes dos maiores grupos. Ashe viu o potencial de crescimento da influência de todos. Ela usou o que havia aprendido com o negócio dos pais para levar ordem a esses grupos. A proposta era fazer as gangues trabalharem em conjunto (ou pelo menos não umas contra as outras). Seus princpios: cumpram a palavra dada, no cooperem com a lei, respeitem o território dos outros e sempre punam os traidores. Sem precisar mais gastar energia em picuinhas com outras gangues, Ashe agora expande sua reputação por todo o sudoeste americano. Uma srie de roubos e operações audaciosas a colocou no topo da lista dos mais procurados pelas autoridades e cimentou seu legado como lenda dos fora da lei.</div>";
            document.getElementById("skills").innerHTML = `
            <div class="col-xl-4" id="ashe">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1; ">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/a326b202a821ab3e196d1faab6144460f470001b26a8b6f2ab96cb3af5f325b3.png" alt="DINAMITE">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">DINAMITE</h5>
                        <p class="card-text">Ashe joga um explosivo que detona após um breve intervalo ou assim que é atingido por um tiro. A explosão da Dinamite tambm ateia fogo aos inimigos, causando dano ao longo do tempo.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/e18f7b6e464f0cf34789babf7a76b7e1d851e62102dccfe10769bcf8716e5554.png" alt="ESCOPETA">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-5">
                        <h5 class="card-title">ESCOPETA</h5>
                        <p class="card-text mb-4 pb-4">Ashe dispara nos inimigos à frente para afastá-los e jogar-se para trás, ganhando mais mobilidade.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4" style="color: white">
            <div class="card mb-3" style="max-width: 540px; background-color: #353C42;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/e788b12d476e896dac3831bbc0842fb3b4d07a89b3c337959d9a6cd6ea5a7df5.png" alt="B.O.B.">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-4">
                        <h5 class="card-title">B.O.B.</h5>
                        <p class="card-text">Ashe chama Bob, seu fiel ajudante ômnico, que avança, joga os inimigos para o alto e usa seus canhões de braço para forar adversários a procurar cobertura.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>  
            `;
            
            
        }

        function bastion(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Outrora combatente na linha de frente na devastadora Crise Ômnica, esta curiosa unidade Bastion agora explora o mundo, fascinada pela natureza, porm cautelosa com uma humanidade temível. Originalmente criadas para propósitos de manutenção da paz, as unidades robóticas Bastion possuam a habilidade nica de se reconfigurar rapidamente em um modo de canho de ataque. Porém, durante a Crise Ômnica, elas foram postas contra seus criadores humanos, dando volume ao exército rebelde de ômnicos. Após a resoluço da crise, quase todas elas foram destruídas ou desmontadas. Até hoje, as unidades Bastion ainda simbolizam os horrores do conflito. Uma unidade Bastion singular, altamente danificada nas batalhas finais da guerra, ficou esquecida por mais de uma década. Ela esteve adormecida, exposta aos elementos e enferrujando enquanto a natureza lentamente a reclamava. Coberto por cips e raízes, e servindo de ninho para pequenos animais, o robô permaneceu inerte, aparentemente desapercebido da passagem do tempo. Isso at um dia fatídico, quando se reativou inesperadamente. Com sua programaão de combate perdida, ele demonstrara curiosidade intensa sobre o mundo natural e seus habitantes. Esta inquisitiva unidade Bastion saiu  explorar seus arredores, em busca de seus propósitos em um planeta devastado pela guerra. Apesar de 'Bastion' parecer gentil — ou at inofensivo, por vezes — sua programaço de combate central assume o controle quando a unidade sente perigo, utilizando seu arsenal completo para eliminar qualquer coisa que perceba como ameaça. Isso gerou situaões de conflito com os poucos humanos que encontrou, levando-o a evitar áreas povoadas, favorecendo as regiões selvagens e inexploradas do mundo.</div>";
            document.getElementById("skills").innerHTML = `
            <div class="col-xl-4" id="bastion">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1; ">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/56bef8912e83cac59dc0acb08bcaef591ff2ed52385424e8d753c03bbb77e4e9.png" alt="RECONFIGURAR">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-5">
                        <h5 class="card-title">RECONFIGURAR</h5>
                        <p class="card-text pt-4 pb-5">Bastion se transforma entre seus dois modos primários de combate para se adaptar às condiçes de batalha.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/1f8c772ca7d072fcd1efe05b616758598339deeb46956fd9ab7cf6daa185823f.png" alt="AUTO REPARO">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-5">
                        <h5 class="card-title">AUTO REPARO</h5>
                        <p class="card-text mb-5 pt-1">Bastion recupera sua vida, porém, ele no pode utilizar suas armas enquanto o processo de reparo estiver em efeito.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4" style="color: white">
            <div class="card mb-3" style="max-width: 540px; background-color: #353C42;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/3b6776324cac7381da3234ce508031f59bbf4ed658ec221d37fc817ab2c987fd.png" alt="CONFIGURAÇÃO: TANQUE">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">CONFIGURAÇÃO: TANQUE</h5>
                        <p class="card-text">No modo Tanque, Bastion expõe esteiras e um canhão poderoso de longo alcance. Os cartuchos explosivos do canhão detonam alvos em um grande raio, mas Bastion só pode permanecer neste modo por um curto período.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>  
            `;
            
            
        }

        function doomfist(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Recm-liberto de sua prisão, Doomfist est determinado a lançar o mundo em um novo conflito que ele acredita que fará a humanidade mais forte. Akande Ogundimu nasceu em uma famlia nigeriana de boa reputaão e herdou sua companhia de tecnologia de prostéticos. Uma figura carismática e altamente inteligente, Ogundimu ajudou a expandir os negócios da famlia, os colocando rumo ao futuro, enquanto dedicava seu tempo livre a sua primeira paixão, as artes marciais. Ele treinou em estilos de luta africanos, incluindo Dambe e Gidigbo, assim como luta livre e outros sistemas de combate modernos, incorporando as técnicas mais eficientes em seu repertrio. Ogundimu competiu em torneios por todo o continente, utilizando habilidade e intuiço para ler os oponentes com sua grande velocidade e fora. Mas quando perdeu seu braço como resultado da Crise mnica, pareceu ser o fim de sua carreira nas artes marciais, antes mesmo de atingir seu potencial. A prótese cibernética de sua companhia permitiu que ele se recuperasse de seus ferimentos, o tornando ainda mais forte, mas essas melhorias o impediram de competir. Ele tentou se devotar aos negócios com o mesmo zelo que tinha pela luta, mas não encontrou nada para preencher o vazio até que ele recebeu uma nova oportunidade de Akinjide Adeyemi, mais conhecido como o segundo Doomfist, o Flagelo de Numbani. Adeyemi ofereceu a Ogundimu a chance de lutar com ele como mercenário. Após a cautela inicial, Ogundimu aceitou e descobriu que ele agora tinha uma arena na qual podia liberar sua nova e melhorada potencialidade. Por fim, Adeyemi o levou para a Talon. A crença da Talon de que a humanidade seria fortalecida pelo conflito reverberou com as experincias pessoais de Ogundimu. Mas além disso, os conflitos de poder da Talon criaram um novo desafio que permitiu que ele usasse seu talento na sala de reunies da mesma forma que usava sua astúcia em combate. Adeyemi era um recurso muito til à Talon, mas a organizaço via muito mais potencial em Ogundimu, com sua inteligncia e habilidade de ser um comandante inspirador. Enquanto Adeyemi se sentia satisfeito com os lucros das pilhagens em Numbani, Ogundimu tinha uma visão muito maior. Essa diferença de ambição levaria Ogundimu a matar seu mestre e tomar o manto de Doomfist, junto com a manopla homnima. Como o novo Doomfist, Ogundimu subiu bastante na Talon e ajudou a orquestrar um conflito que a organização esperava que algum dia tomaria o mundo. Porm, antes de seu plano ser concludo, Ogundimu foi derrotado e capturado pela equipe de ataque ttico da Overwatch, composta por Tracer, Winston e Genji. Ele foi aprisionado em uma instituio de segurana máxima por anos, onde esperou pacientemente o acontecimento dos eventos que tinha incitado. Finalmente, ele sentiu que o tempo havia chegado para seu retorno. Ele fugiu de sua prisão e recuperou a manopla de Doomfist depois de uma batalha unilateral com a nova defesa de Numbani formada por robôs OR15. Agora, ele retomou seu posto no conselho interno da Talon e está pronto para começar uma guerra que mais uma vez consumirá o planeta.</div>";
            document.getElementById("skills").innerHTML = `
            <div class="col-xl-3" id="doomfist">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1; ">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/20f721d5fd05f91e203d6e0007a137bdc90a161356f85d5aa88b2ab02b8da22b.png" alt="ABALO SÍSMICO">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body mb-5">
                        <h5 class="card-title">ABALO SÍSMICO</h5>
                        <p class="card-text pt-3">Doomfist salta para a frente batendo no cho, trazendo inimigos próximos para sua direço.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-3">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/848cefbe4a5fa35c2f62f31118262532e6414bbe80fc5e1d8d2f198ebdae9d60.png" alt="GANCHO ASCENDENTE">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body mb-5">
                        <h5 class="card-title">GANCHO ASCENDENTE</h5>
                        <p class="card-text pt-3">Doomfist acerta um gancho nos inimigos em sua frente, lançando-os no ar.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-3" >
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/aa2a067fe151ac2795fe77546711c07be5f0880d9ae5dce554cab0c933d927f0.png" alt="SOCO FOGUETE">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 18px;">SOCO FOGUETE</h5>
                        <p class="card-text">Depois de carregar, Doomfist se lana para frente e arremessa um inimigo para trás, causando dano adicional se ele atingir uma parede.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            
            <div class="col-xl-3" style="color: white">
            <div class="card mb-3" style="max-width: 540px; background-color: #353C42;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/fa96b2650987b3784a725a0fb1704f7191a686a4f42c9ccf61c404e2f08b158c.png" alt="IMPACTO METEORO">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-5">
                        <h5 class="card-title">IMPACTO METEORO</h5>
                        <p class="card-text mb-3 pt-5">Doomfist salta para os céus, depois acerta o chão, causando dano significativo.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            `;
            
            
        }

        function echo(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Para mapear as origens do projeto Echo, é importante investigar a história pessoal da cientista cingapuriana Dra. Mina Liao, que posteriormente seria conhecida como uma das fundadoras da Overwatch. Mas, antes de entrar na organização, ela era considerada uma das maiores especialistas nas áreas de robtica e inteligência artificial e trabalhava na Corporação Ômnica. L, a Dra. Liao integrou a equipe responsável pelo projeto de criação dos mnicos, as máquinas que travariam uma guerra contra a humanidade durante a Crise mnica. No fim, foi essa experincia que a fez ser recrutada pela Overwatch, para que pudesse deter suas próprias criações. Nem mesmo essa catástrofe foi suficiente para abalar a crença de Liao no potencial da vida artificial de melhorar a vida de toda a humanidade. Ela sonhava em aperfeiçoar o design original dos ômnicos, e essas teorias se tornaram a base do projeto Echo. No entanto, graças s restriçes da Overwatch à pesquisa e ao desenvolvimento de inteligncia artificial após a Crise mnica, a cingapuriana foi obrigada a limitar as potencialidades de Echo. O que ela criou foi um robô adaptativo multifuncional, que poderia ser programado para aprender diversas funções, de assistência mdica a construção, mas com limites bem claros na tomada de decises independente. Echo continha diversas camadas de proteço, sistemas antifalha e medidas de segurana para mantê-la sob controle. Ela foi usada com êxito em missões de teste com a equipe de ataque da Overwatch, mas a liderança da organizaço hesitava em utilizá-la em tempo integral. Mas, em segredo, Liao programou Echo com uma poderosa inteligência artificial que aprende pela observação. Após milhares de horas na presença da cientista, muito do comportamento de Liao, inclusive seu modo de falar, foi adotado pela robô. Pouqussimas pessoas sabiam desse potencial, e entre elas estava o agente da Blackwatch Jesse McCree, que às vezes era destacado para proteger a cientista. Quando Liao morreu em um ataque a uma instalação da Overwatch, a liderança da organização hesitou em dar continuidade a um projeto tão perigoso, e todo o desenvolvimento de Echo foi suspenso, e o robô, posto em quarentena. Após se juntar  nova equipe da Overwatch para defender Paris do ataque do Setor Nulo, Echo está atuando como integrante permanente da equipe pela primeira vez. Entretanto, ninguém sabe como ela pode evoluir no futuro à medida que entrar em contato com novas pessoas, ideias e situações sem a orientação da Dra. Liao.</div>";
            document.getElementById("skills").innerHTML = `
            <div class="col-xl-3" id="echo">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1; ">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/dcaa626e367b80b5bcd2425e26e0075b5343990785bc96e1705325904f73fe96.png" alt="BOMBAS ADERENTES">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body mb-5">
                        <h5 class="card-title">BOMBAS ADERENTES</h5>
                        <p class="card-text pb-3">Echo dispara uma saraivada de bombas aderentes que explodem após um tempo.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-3">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/711f211c988ff1fafe99276bddefa3a861789e4b27859260e8ad87df5b879337.png" alt="VOO">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body mb-5">
                        <h5 class="card-title">VOO</h5>
                        <p class="card-text mb-5 pt-3 pb-4">Echo avança rapidamente e depois pode voar à vontade.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-3">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/6552feeb85a32ae7131df50f61a9c0fa24bf347bf007e208a356a940561129ae.png" alt="FEIXE CONCENTRADO">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 18px">FEIXE CONCENTRADO</h5>
                        <p class="card-text">Echo canaliza um raio por alguns segundos, causando muito dano a alvos com menos da metade da vida.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-3">
            <div class="card mb-3" style="max-width: 540px; background-color: #C4C4C4;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/e90772df1f7e55d4ea6e639ce909773ae2e28172d06afd8afa00e85bbef0a20d.png" alt="PLANAR">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body mb-5">
                        <h5 class="card-title">PLANAR</h5>
                        <p class="card-text mb-5 pt-5 pb-3">Echo pode planar enquanto cai.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            
            <div class="row">
            <div class="col-xl-4"></div>
            <div class="col-xl-4" style="color: white">
            <div class="card mb-3" style="max-width: 540px; background-color: #353C42;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/457d6ebcb2b92d1e7f7a7174b426903879e131422196825589adbc5e5d9f7efb.png" alt="DUPLICAR">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 18px;">DUPLICAR</h5>
                        <p class="card-text">Echo duplica um heri inimigo selecionado e pode usar as habilidades dele.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-xl-4"></div>
            </div>
            
            `;
            
            
        }

        function genji(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>O ciborgue Genji Shimada fez as pazes com seu corpo aprimorado que ele antes rejeitava e, ao fazê-lo, pode descobrir uma humanidade maior. Como filho mais novo do mestre do clã ninja dos Shimada, Genji viveu uma vida de luxo e privilégio. Ele tinha pouco interesse nos negcios ilegais de sua família, e apesar de gostar e ser excelente em seu treino ninja, ele passou a maior parte de seu tempo curtindo uma vida de playboy. Muitos no clã consideravam o estilo de vida do Genji um perigo para o cl e tinham ressentimento contra seu pai por protegê-lo. Com a morte do líder do clã, o irmão mais velho de Genji, Hanzo, exigiu que Genji tivesse um papel mais ativo no império de seu pai falecido. Genji se recusou, enfurecendo Hanzo. A tensão entre os irmos acabou em um confronto violento que deixou Genji a beira da morte. Hanzo acreditou que tinha matado seu irmão, mas Genji foi resgatado pela Overwatch e a intervenção da Dra. Angela Ziegler. A força de segurana global via Genji como um possvel recurso em suas operações para deter o clã Shimada. Como os ferimentos de Genji o deixaram a beira da morte, a Overwatch se ofereceu para reconstruir seu corpo em troca de sua ajuda. Ele passou por um longo processo de cibernetização, o que aumentou sua velocidade e agilidade naturais e potencializou suas habilidades ninja. Transformado em uma arma viva, Genji tomou como seu dever desmantelar o império criminoso de sua família. Mas  medida que o tempo passou, Genji se sentiu cada vez mais em conflito consigo mesmo. Ele tinha repulsa das partes mecânicas de seu corpo e não aceitava o que tinha se tornado. Quando sua missão foi completada, ele abandonou a Overwatch e vagou o mundo em busca de sentido. Ele vagou por muitos anos antes de encontrar o monge mnico, Zenyatta. Apesar de Genji inicialmente ter rejeitado a sabedoria de Zenyatta, o benevolente ômnico jamais desistiu. Com o tempo, Zenyatta se tornou seu mentor, e com a tutela do monge, Genji se reconciliou com sua existência dupla tanto como homem quanto mquina. Ele aprendeu a aceitar que, apesar de ter um corpo de ciborgue, sua alma humana estava intacta e passou a ver sua nova forma como um presente e uma fora única. Agora, pela primeira vez em sua vida, Genji está livre. Nem mesmo ele pode dizer para onde seu caminho eventualmente o levará.</div>";
            document.getElementById("skills").innerHTML = `
            <div class="col-xl-4" id="genji">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1; ">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/9e46bda733749ddd6512b61c021b4487b6201338a9ff39c716e4ee06e5d63a58.png" alt="DESVIAR">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-5">
                        <h5 class="card-title">DESVIAR</h5>
                        <p class="card-text">Com ataques velozes de sua espada, Genji reflete projéteis iminentes e os lança de volta em seu oponente.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/a6639d5240b77967a734fc5e2af960fd38dccd834430a4a3409add345bb7e21e.png" alt="GOLPE VELOZ">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">GOLPE VELOZ</h5>
                        <p class="card-text">Genji avança para frente, golpeando com sua katana e passando por inimigos em seu caminho. Se Genji eliminar um alvo com essa habilidade, ele pode us-la de novo instantaneamente.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4" style="color: white">
            <div class="card mb-3" style="max-width: 540px; background-color: #353C42;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/e9c3c82c08ce1a6006dbdf6905591040ed83ddceba81efb2e526c217cd57c931.png" alt="LÂMINA DO DRAGÃO">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-4">
                        <h5 class="card-title">LMINA DO DRAGÃO</h5>
                        <p class="card-text">Genji brande sua katana por um breve período de tempo. Até embainhar sua espada, Genji consegue acertar golpes mortais em qualquer alvo ao seu alcance.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>  
            `;
            
            
        }

        function hanzo(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Aperfeiçoando suas habilidades como arqueiro e assassino, Hanzo Shimada almeja mostrar-se digno como guerreiro sem par. A família Shimada foi estabelecida séculos atrs, um clã de assassinos cujo poder cresceu através dos anos, permitindo que construíssem um vasto império criminal que lucrava de vantajosas negociaões de armas e substâncias ilegais. Como filho mais velho do chefe da família, Hanzo tinha o dever de suceder seu pai e governar o império Shimada. Desde jovem, ele foi treinado para essa responsabilidade, demonstrando aptidão natural para a liderana e possuindo um entendimento inato de estratégias e táticas. Ele tambm se sobressaia em áreas prticas: era um prodgio em artes marciais, esgrima e no arco e flecha. Com a morte de seu pai, os anciões do clã deram instruções para que Hanzo endireitasse seu rebelde irmão mais novo, para que ele também pudesse ajudar a governar o imprio Shimada. Quando seu irmão se recusou, Hanzo foi forçado a matá-lo. Este ato partiu o coraão de Hanzo, levando-o a rejeitar o legado de seu pai, fazendo com que ele abandonasse o cl e tudo pelo que trabalhara tanto para atingir. Agora, Hanzo viaja o mundo, aperfeiçoando suas habilidades como guerreiro, tentando restaurar sua honra e dar descanso aos fantasmas de seu passado.</div>";
            document.getElementById("skills").innerHTML = `
            <div class="col-xl-3" id="hanzo">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1; ">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/6a71d18cc52e49380aa9eb57f979524033a3e79bd3153900a12bb553d5a0e6f0.png" alt="FLECHA SNICA">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body">
                        <h5 class="card-title">FLECHA SÔNICA</h5>
                        <p class="card-text">Hanzo dispara uma flecha que contém um rastreador sonar. Qualquer inimigo no raio de detecço é marcado como visvel, tornando a caçada mais fcil para Hanzo e seus aliados.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-3">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/92c56621ba267d94f16baacda3f10ba7777b475935981b02e5026449d8e3d79c.png" alt="FLECHAS DA TEMPESTADE">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body mb-5">
                        <h5 class="card-title">FLECHAS DA TEMPESTADE</h5>
                        <p class="card-text mb-5 pt-4">As próximas flechas atiradas por Hanzo serão instantâneas mas causaro dano reduzido.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-3" >
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/cd1390347345e7825dff95758b3d5ed02a3497a013400a4faaefb2c77f07ee14.png" alt="SALTO">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body mb-5">
                        <h5 class="card-title" style="font-size: 18px;">SALTO</h5>
                        <p class="card-text mb-5 pt-5 pb-4">Hanzo pode executar um salto duplo, permitindo que ele mude de direção no ar.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            
            <div class="col-xl-3" style="color: white">
            <div class="card mb-3" style="max-width: 540px; background-color: #353C42;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/f2d63b8f0e19e91d2c1199ed3ac0f20bb180dabe9ad1ffc7d1f1e880e58f0220.png" alt="GOLPE DO DRAGÃO">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">GOLPE DO DRAGÃO</h5>
                        <p class="card-text pt-5">Hanzo invoca uma emanação dracnica que percorre o ar em linha. Ela atravessa as paredes em seu caminho, devorando qualquer inimigo que encontrar.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            `;
            
            
        }

        function junkrat(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Junkrat é um lunático obcecado por explosivos que vive para causar destruião e caos. O ataque ao núcleo de fuso do omnium australiano alterou para sempre a paisagem do Deserto Australiano. Aps a detonaço, a rea foi transformada em uma terra devastada, árdua e irradiada, cheia de destroos e fragmentos de metal retorcido da instalaço arruinada, e inóspita para a maioria. Mas há aqueles que sobreviveram. Com o nome de Junkers, eles se aproveitaram das cascas do omnium e criaram uma sociedade cruel e sem lei em suas sombras. Junkrat era um deles, sobrevivendo da posse de metais e componentes das ruínas. Como muitos outros, ele foi afetado pela radiação remanescente. Esse toque de loucura fez dele ideal para manejar explosivos perigosos, uma paixo que logo se tornou uma obsessão. Ele ganhou notoriedade quando descobriu um segredo extremamente valioso nos ossos do omnium. Apesar de poucos saberem a natureza do que ele encontrou, ele mesmo assim foi perseguido por caçadores de recompensa, gangues e oportunistas, aonde quer que fosse, até que fez um acordo com o executor Junker conhecido como Roadhog, que relutantemente concordou em ser seu guarda-costas pessoal em troca de metade dos esplios. Agora, com Roadhog ao seu lado, Junkrat deixou o Deserto Australiano e embarcou em uma onda de crimes internacionais, deixando para trás apenas um rastro de destruiço.</div>";
            document.getElementById("skills").innerHTML = `
            <div class="col-xl-3" id="junkrat">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1; ">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/1d6135a3089363cf2c59d5157740cf5dc4ad572bc215553672a79812c397dbd2.png" alt="MINA DE CONCUSSO">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body mb-5">
                        <h5 class="card-title">MINA DE CONCUSSÃO</h5>
                        <p class="card-text">Depois de colocar uma de suas Minas de Concussão caseira, Junkrat pode ativá-la para causar danos aos inimigos e os mandar pelos ares... ou impulsionar ele mesmo pelo ar.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-3">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/425136ea32c08355f33df230d900a8cc8010ee7a2b27314f6a1e395bd78eb5aa.png" alt="ARMADILHA DE AÇO">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body mb-5">
                        <h5 class="card-title">ARMADILHA DE AO</h5>
                        <p class="card-text mb-5">Junkrat joga uma armadilha de metal dentada gigante. Caso um inimigo passe muito perto da armadilha, ela se agarra a ele, causando dano e imobilizando.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-3" >
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/82e123991088b3c13edb1158d0bc4281f752896f8f3ddb76d4e3407e8f52f88d.png" alt="CAOS TOTAL">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body mb-5">
                        <h5 class="card-title" style="font-size: 18px;">CAOS TOTAL</h5>
                        <p class="card-text mb-5 pt-5 pb-5">O senso de humor bisonho do Junkrat persiste após sua morte. Ao morrer, ele deixa para trás uma série de granadas.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            
            <div class="col-xl-3" style="color: white">
            <div class="card mb-3" style="max-width: 540px; background-color: #353C42;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/d16b5c6c337b1c0ecee3e5bf0760c870927e921fed8f0caed12dcb996b5347ae.png" alt="PNEU DA MORTE">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">PNEU DA MORTE</h5>
                        <p class="card-text">Junkrat dá a partida em uma bomba relógio motorizada e a envia pelo campo de batalha, subindo em paredes e obstáculos. Ele pode detonar remotamente o Pneu da Morte para causar danos srios aos inimigos pegos na exploso ou esperar que ele exploda sozinho.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            `;
            
            
        }

        function mccree(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Armado com seu revólver Pacificador, o fora da lei Jesse McCree faz justiça com seus próprios termos. McCree já tinha uma reputação como membro da notória gangue Deadlock, que traficava armas ilcitas e equipamentos militares por todo o Sudoeste Americano, quando ele e seus comparsas foram apreendidos por uma operação da Overwatch. Com suas habilidades como atirador e sua engenhosidade, ele foi dado a escolha de apodrecer em uma prisão de segurança máxima ou de se juntar  Blackwatch, a divisão de operaões secretas da Overwatch. Ele escolheu a segunda opço. Apesar de cínico no começo, ele passou a acreditar que podia compensar pelos pecados que cometera no passado, acertando as injustias do mundo. McCree se satisfez com a flexibilidade delegada ao grupo clandestino Blackwatch, liberto de burocracias e protocolos. Mas à medida que a influncia da Overwatch enfraqueceu, membros rebeldes dentro da Blackwatch tramaram para derrubar a organização e usá-la para seus prprios fins. Sem querer participar dessas disputas internas, McCree resolveu partir sozinho e desapareceu. Anos depois, ele ressurgiu como um atirador mercenrio. Mas apesar de seus talentos serem buscados por grupos grandes e pequenos, ele só luta por causas que acredita serem justas.</div>";
            document.getElementById("skills").innerHTML = `
            <div class="col-xl-4" id="mccree">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1; ">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/24a3f2f619859812bba6b6374513fa971b6b19ccb34950c02118b41cc4f93142.png" alt="ROLAMENTO">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-5">
                        <h5 class="card-title">ROLAMENTO</h5>
                        <p class="card-text pt-5">McCree mergulha na direção em que est se movendo, recarregando seu Pacificador sem esforo algum no processo.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/c9de6a63247025da4b96ad4a3e36fe2675a5ac9da3b42384590f99eed8f1d9b3.png" alt="CLARÃO">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-5">
                        <h5 class="card-title">CLARÃO</h5>
                        <p class="card-text pt-5">McCree lança uma granada ofuscante que explode logo após deixar sua mão. A explosão atordoa os inimigos num pequeno raio.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4" style="color: white">
            <div class="card mb-3" style="max-width: 540px; background-color: #353C42;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/346cb576a19f978a7b2c52859c5639423f076d66ca740658da0d46955ab2c97d.png" alt="TIRO CERTEIRO">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">TIRO CERTEIRO</h5>
                        <p class="card-text">Focar. Mirar. Sacar. McCree toma alguns preciosos instantes para mirar. Quando está pronto para disparar, ele atira em todos os inimigos em seu campo de viso. Quanto mais fracos seus alvos, mais rápido ele dispara seus tiros mortais.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>  
            `;
            
            
        }

        function mei(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Mei é uma cientista que faz a luta pela preservaço do meio ambiente com suas prprias mãos. Apesar de muitos atribuírem os aumentos dos fenômenos climáticos inexplicados ao advento de novas tecnologias, o rápido crescimento da populao ômnica e o aumento drástico do consumo de recursos, as verdadeiras causas permaneciam desconhecidas. Para achar uma soluão, a Overwatch estabeleceu uma srie de observatórios ecolgicos em locais remotos e críticos pelo mundo. Mei-Ling Zhou era um membro dessa iniciativa multifacetada. Uma climatologista sem igual, ela introduziu inovaões tecnolgicas de primeira linha no campo de manipulaço climática que protegeu áreas de risco dentro e fora da Ásia. Foi designado a ela a estaço do programa de monitoramento no Observatório: Antártica, quando um desastre aconteceu: uma tempestade polar catastrófica soterrou a instalaço e a isolou do mundo exterior, deixando as instalaões danificadas e os cientistas presos. Com seus suprimentos acabando aos poucos, eles entraram em um estado crioesttico em uma última tentativa de sobreviver at que o resgate pudesse ser feito. Mas o resgate nunca veio. Anos depois quando a câmera criognica foi finalmente descoberta, Mei, ainda em hibernação, foi a única sobrevivente. O mundo em que Mei acordou tinha passado por mudanas consideráveis: a Overwatch já não existia, os problemas climticos haviam piorado e nenhum dos observatórios ecológicos estavam em operaço. Todas as pistas que eles tinha descoberto haviam se perdido. Mei decidiu continuar seu trabalho sozinha. Equipada com uma verso portátil de sua tecnologia de manipulaão climática, ela viaja ao redor do mundo, na esperança de reestabelecer a rede ecológica e rastrear as causas das ameaças ao ecossistema do planeta.</div>";
            document.getElementById("skills").innerHTML = `
            <div class="col-xl-4" id="mei">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1; ">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/b9507f892676c729768b3cb9eec4fb2195bbadb1f229a6a332d282ffa32410db.png" alt="CONGELAMENTO CRIOGÊNICO">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-4">
                        <h5 class="card-title">CONGELAMENTO CRIOGÊNICO</h5>
                        <p class="card-text">Mei se envolve instantaneamente em um bloco de gelo espesso. Ela se cura e ignora dano enquanto está envolvida, mas não pode se mover ou usar habilidades.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/0608319e5f26acafd19a0afd682f3c73c5b70cbfc93d59f58f28eef5cd0eb2e7.png" alt="MURALHA DE GELO">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-5">
                        <h5 class="card-title">MURALHA DE GELO</h5>
                        <p class="card-text pt-5">Mei cria uma enorme muralha de gelo que obstrui as linhas de visão, interrompe movimentos e bloqueia ataques.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4" style="color: white">
            <div class="card mb-3" style="max-width: 540px; background-color: #353C42;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/892fd12cc3f8bd3b54bbc175b6d8caecdedaa819c819c5fc216c3c2b4f486a3f.png" alt="NEVASCA">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">NEVASCA</h5>
                        <p class="card-text">Mei lança um drone de manipulaço climática que emite rajadas de vento e neve em uma rea ampla. Inimigos pegos na nevasca so desacelerados e recebem dano e aqueles que ficarem nela por muito tempo são congelados.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>  
            `;
            
            
        }

        function pharah(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>O comprometimento com o dever de Fareeha Amari corre em suas veias. Ela vem de uma longa linhagem de soldados altamente condecorados e tem um desejo intenso de servir com honra. Quando criança, Fareeha sonhava em seguir os passos de sua mãe e se juntar à força de manutenço da paz, Overwatch. Ela se alistou no exército egpcio e sua persistência constante e proezas táticas a levaram ao alto escalão. Ela era uma líder corajosa e conquistou a lealdade de todos àqueles que serviram sob seu comando. Com sua ficha exemplar, Fareeha foi bem colocada para se juntar às fileiras da Overwatch, porém, antes de ter essa oportunidade, a Overwatch se dissolveu. Depois de deixar o exército com uma recomendaão por serviços exemplares, ela recebeu uma oferta de emprego na Helix Segurança Internacional, uma firma de segurança privada, contratada para proteger a instalaço de pesquisa de inteligência artificial abaixo do Planalto de Giza. A instalaço ultra secreta foi apontada como vital para a segurança não apenas da regio, mas também de diversos pases ao redor do mundo. Fareeha ficou contente em aceitar a misso e recebeu treinamento na Raptora Mark VI, uma armadura de combate experimental, projetada para mobilidade rápida e poder de fogo devastador. Sob o codinome Pharah”, ela trabalha para proteger a instalaão de IA. Apesar de lamentar o fim da Overwatch, ela ainda sonha em lutar pelo bem e fazer diferença em escala global.</div>";
            document.getElementById("skills").innerHTML = `
            <div class="col-xl-4" id="pharah">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1; ">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/ab8ffe4008a1c257f1014d55a5306fcd3d81cde8ffad569b240f74c4c13a4130.png" alt="SALTO FOGUETE">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-4">
                        <h5 class="card-title">SALTO FOGUETE</h5>
                        <p class="card-text">Impulsionada pelos propulsores de sua armadura, Pharah sobe bem alto pelos ares.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/9747b440730824756ae2d17e4d1f38468f36c985c35f56cf1f175a613279479a.png" alt="EXPLOSÃO CONCUSSIVA">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">EXPLOSÃO CONCUSSIVA</h5>
                        <p class="card-text">Pharah dispara um foguete de pulso que lança para longe os inimigos que atinge.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4" style="color: white">
            <div class="card mb-3" style="max-width: 540px; background-color: #353C42;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/0708775beda1d200b586ae1d019522ea5ad8baa9bdcbbe076854102830f9fdae.png" alt="BOMBARDEIO">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-4">
                        <h5 class="card-title">BOMBARDEIO</h5>
                        <p class="card-text">Pharah direciona uma salva contnua de mini-foguetes para destruir grupos de inimigos.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>  
            `;
            
            
        }

        function reaper(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Há quem fale sobre um terrorista em um manto preto, conhecido apenas como Reaper. Sua identidade e motivaões são um mistério. O que se sabe é que onde ele aparece, a morte o segue. O Reaper é um mercenário extremamente volátil, um matador sem remorso ou piedade, responsável por ataques terroristas ao redor do mundo. Ele lutou em muitos conflitos armados nas últimas décadas, sem demonstrar qualquer lealdade a nenhuma causa ou organização. Sobreviventes descreveram uma sombra negra, vagando como fantasma pelos campos de batalha mais infernais. Os poucos corpos recuperados daqueles que ele assassinou so pálidos, vazios e sem vida, com suas células apresentando sinais intensos de degradação. É possível que ele seja o resultado da falha de um experimento genético, que força suas células a se degenerarem e regenerarem simultaneamente, em uma velocidade ultra acelerada. Aqueles que têm tentado rastrear seus movimentos comearam a enxergar um padrão em suas apariçes. Eles acreditam que Reaper está caando antigos agentes da Overwatch e os eliminando sistematicamente.</div>";
            document.getElementById("skills").innerHTML = `
            <div class="col-xl-4" id="reaper">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1; ">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/dbcceb2a764dcf8bb808078f7a32a039fd259c72e557dcde3fb70b2041247c9a.png" alt="FORMA FANTASMA">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">FORMA FANTASMA</h5>
                        <p class="card-text">Reaper se torna uma sombra por um curto perodo de tempo. Enquanto est nessa forma, ele não recebe dano e pode atravessar inimigos, mas no pode usar suas armas ou outras habilidades.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/bad9345de1f04a46f219364952464c38d2b2a9afa335df6894cde81565816fa4.png" alt="PASSOS DAS SOMBRAS">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-5">
                        <h5 class="card-title">PASSOS DAS SOMBRAS</h5>
                        <p class="card-text pt-4">Após marcar um destino, Reaper desaparece e reaparece naquele destino.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4" style="color: white">
            <div class="card mb-3" style="max-width: 540px; background-color: #353C42;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/e35595575880a304e14d427a0f9f5f04dc0886ba0f4cadd731ac935174f031e2.png" alt="DESABROCHAR DA MORTE">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">DESABROCHAR DA MORTE</h5>
                        <p class="card-text">Em um movimento rápido, Reaper esvazia as duas espingardas infernais em velocidade relâmpago, infligindo dano massivo aos inimigos nas proximidades.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>  
            `;
            
            
        }

        function soldado(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Atualmente o alvo de uma caçada internacional, o vigilante conhecido como Soldado: 76 trava uma guerra pessoal para expor a verdade por trs do colapso da Overwatch. Soldado: 76 se revelou em uma série de ataques ao redor do mundo, que tinham como alvo instituições financeiras, corporações sombrias e instalaões da Overwatch. Apesar de para o mundo suas motivações serem desconhecidas, h quem afirme que ele é um ex-agente da Overwatch, determinado a trazer  tona a conspiraão que derrubou a organização. Sua identidade continua um mistério, mas acredita-se que ele foi treinado como um membro do 'programa de aprimoramento de soldados' dos Estados Unidos. Ele possui capacidades físicas que excedem as de um soldado convencional, assim como outros aprimoramentos que fazem dele um combatente sem rival. Ele também possui um arsenal de ponta, do qual grande parte foi roubada da Overwatch em suas invasões. Implacvel em sua busca para encontrar aqueles responsáveis pela queda da Overwatch, Soldado: 76 não parará por nada até traz-los à justiça.</div>";
            document.getElementById("skills").innerHTML = `
            <div class="col-xl-3" id="soldado">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1; ">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/8fedb348952552227b6e2ec85cf14214106b901afce2a9657267153bb2a8cac3.png" alt="FOGUETES HÉLIX">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body mb-5">
                        <h5 class="card-title">FOGUETES HÉLIX</h5>
                        <p class="card-text pt-4">Pequenos foguetes saem do Rifle de Pulso de Soldado: 76 de uma única vez. A explosão do foguete inflige dano aos inimigos em curto alcance.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-3">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/8408bacddfb4ac7b971dd14f6d8c9d211459fb159b459c3e6eaf06bc0a38bcb2.png" alt="DISPARADA">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body">
                        <h5 class="card-title">DISPARADA</h5>
                        <p class="card-text">Caso ele precise fugir de um tiroteio ou voltar para um, Soldado: 76 pode avançar com uma exploso de velocidade. Sua corrida termina se ele realizar outra aço alm de avançar para frente.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-3" >
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/aaadd3dee89ac8797ecb7a1e647f574a034b1930726296fd17946d343254bdf0.png" alt="CAMPO BIÓTICO">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body mb-1">
                        <h5 class="card-title" style="font-size: 18px;">CAMPO BIÓTICO</h5>
                        <p class="card-text pt-4">O Soldado: 76 instala um emissor biótico no chão. Sua projeção energtica restaura a vida de 76 e quaisquer membros de sua equipe no campo.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            
            <div class="col-xl-3" style="color: white">
            <div class="card mb-3" style="max-width: 540px; background-color: #353C42;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/5e8d4b8fb5cd1271314b8462012e9894c811a7c4857739e73bde53f2431e673d.png" alt="VISOR TTICO">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body">
                        <h5 class="card-title">VISOR TÁTICO</h5>
                        <p class="card-text">O visor tático de localizaço do Soldado: 76 fixa sua mira no alvo mais próximo. Se um inimigo deixa seu campo de visão, Soldado 76 pode rapidamente trocar para outro alvo.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            `;
            
            
        }

        function sombra(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Uma das hackers mais famosas do mundo, Sombra usa informaçes para manipular aqueles que estão no poder. Muito antes de assumir o nome de Sombra, ░░ era uma das milhares de crianças que ficaram rfãs aps a Crise mnica. Com muita da infraestrutura de seu país destruída, ela sobreviveu utilizando seus dons naturais de computaço como hacker. Depois disso, ░░░░ foi acolhida pela gangue mexicana Los Muertos, os ajudando em sua revolução pessoal contra o governo. Los Muertos acreditavam que a reconstrução do México havia favorecido os ricos e mais influentes, deixando para trás os mais necessitados. Após tantas conquistas, ░░░░░ estava plenamente confiante de suas habilidades, mas foi pega desprevenida quando esbarrou em uma rede de conspiração global, que tambm a percebeu. Com sua segurança comprometida, ░░░ foi forçada a excluir todos os rastros de sua existência e se escondeu. Ela mais tarde ressurgiu como Sombra, melhorada e determinada a descobrir a verdade por trás da conspiração que ela descobriu. Sombra lançou ataques cibernéticos ainda mais audaciosos e conseguiu com suas explorações conquistar muitos admiradores, incluindo a Talon. Ela se juntou  organizaço e acredita-se que contribuiu para ataques cibernéticos macios contra corporaçes com fortes laos governamentais. Essas façanhas incitaram uma revolta popular no México contra a LumériCo e violaram a segurança das Indstrias Volskaya, a indústria russa responsável pela manufatura da defesa anti-mnica. Agora, junto a Talon e seus recursos abundantes, Sombra pode focar em seu objetivo real: expor a conspiração e usar este poder para seus objetivos pessoais.</div>";
            document.getElementById("skills").innerHTML = `
            <div class="col-xl-3" id="sombra">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1; ">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/3ebcefc44a278d93afa8339e7e8758e6d471566fdd122d20d9b8ab7269a12017.png" alt="HACKEAR">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body mb-5">
                        <h5 class="card-title pt-4">HACKEAR</h5>
                        <p class="card-text mb-5 pt-5 pb-5">Sombra hackeia seus inimigos os impedindo temporariamente de usar suas habilidades ou kits médicos, os tornando inúteis para seus oponentes.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-3">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/270bcdf26d66cda1f488e9b3286c3cb467c6e622d729420406ce69218380ae1a.png" alt="FURTIVIDADE">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body">
                        <h5 class="card-title pt-4">FURTIVIDADE</h5>
                        <p class="card-text">Sombra se torna invisível, durante o qual sua velocidade  aumentada consideravelmente. A habilidade é desativada ao atacar, receber dano ou usar habilidades ofensivas. Sombra não captura objetivos quando está invisível.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-3" >
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/e81f286184e24512c724af16a960a1faca6ade164238b025d19da64226f05f4d.png" alt="TRANSLOCADOR">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body mb-5">
                        <h5 class="card-title pt-1" style="font-size: 18px;">TRANSLOCADOR</h5>
                        <p class="card-text mb-4 pt-5">Sombra lança um sinalizador translocador. Ela pode retornar instantaneamente para a localizaão do translocador enquanto ele estiver ativo (inclusive enquanto ele estiver no ar).</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            
            <div class="col-xl-3" style="color: white">
            <div class="card mb-3" style="max-width: 540px; background-color: #353C42;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/6104a559ac558db8f7356a10b419d1330e98758ba9f8099666d694c088c64265.png" alt="PEM">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body mb-5">
                        <h5 class="card-title">PEM</h5>
                        <p class="card-text pt-5">Sombra realiza uma descarga de energia eletromagntica de amplo alcance, destruindo barreiras e escudos inimigos e hackeando todos os oponentes pegos na explosão.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            `;
            
            
        }

        function sym(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Symmetra literalmente dobra a realidade. Ao manipular construtos de luz sólida, ela altera o mundo conforme a sua vontade, na esperana de criar uma sociedade perfeita. Após a Crise Ômnica, a Corporação Vishkar do sul da Índia iniciou um trabalhoso processo de criação de novas cidades autossustentveis para abrigar a população deslocada da naço. Uma dessas cidades, Utopaea, foi criada com o uso de tecnologias radicais de luz sólida que permitem aos seus arquitetos darem forma a ruas, utilidades e habitações da cidade em um piscar de olhos. Depois de ter sido identificada como um dos poucos capazes de se tornarem um arquiteto dobrador de luz, a jovem Satya Vaswani foi arrancada da extrema pobreza e posta aos cuidados da academia de arquitetura de Vishkar, sem nunca voltar para casa. Isolada e sozinha na sua nova vida, Satya mergulhou nos estudos e no treinamento. Ela rapidamente se agarrou s aplicaões da tecnologia e se tornou uma das melhores alunas de sua turma. Satya abordou a manipulaão de luz sólida de uma forma diferente de seus colegas com suas construções mais metódicas e mecânicas. Em vez disso, ela tecia seus constructos com os movimentos da dana tradicional da sua terra natal. Apesar de ser uma das melhores arquitetas de Utopaea, a Corporação Vishkar viu um potencial muito maior nas habilidades de Satya. Dando a ela o apelido de 'Symmetra', Vishkar a enviou em missões clandestinas ao redor do mundo para defender seus interesses corporativos e expandir sua influência para outros países. Symmetra acredita que suas aões servem a um bem maior na sociedade. Mas, em alguns momentos, ela se questiona se o controle e a ordem que ela deseja realmente são o melhor para a humanidade.</div>";
            document.getElementById("skills").innerHTML = `
            <div class="col-xl-4" id="sym">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1; ">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/6ca1ad903ec0121026994bd2318dd5f2488ba40e5dbf5bdb2d5fad8474359253.png" alt="TORRE DE SENTINELA">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-5">
                        <h5 class="card-title">TORRE DE SENTINELA</h5>
                        <p class="card-text pt-4">Symmetra lança uma pequena torre que automaticamente dispara exploses redutoras de velocidade no inimigo mais próximo dentro de seu alcance. Até trs torres podem ser construídas no campo de batalha de uma só vez.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/13b45663f441144ded977e8ccf9ed180c213176206a9f6f9e189e29f09a03b64.png" alt="TELETRANSPORTADOR">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">TELETRANSPORTADOR</h5>
                        <p class="card-text">Symmetra posiciona uma plataforma temporária de sada de teletransporte a distância e a conecta a uma plataforma de entrada em sua posição atual. Aliados (e algumas de suas habilidades, como o Pneu da Morte de Junkrat) podem viajar pelas duas plataformas instantaneamente.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4" style="color: white">
            <div class="card mb-3" style="max-width: 540px; background-color: #353C42;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/366a8cb1fd0718d4e2307674c713277b2a6c095c1997ddb7f4b9d9779063adb1.png" alt="BARREIRA DE FTONS">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-5">
                        <h5 class="card-title">BARREIRA DE FoTONS</h5>
                        <p class="card-text mb-5 pt-5 pb-5">Symmetra arma uma barreira de energia enorme que impede ataques a distância e corta todo o mapa.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>  
            `;
            
            
        }

        function tob(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>No seu auge, Overwatch possuía um dos armamentos mais avanados do planeta, que remetia de volta  oficina de um habilidoso engenheiro chamado Torbjrn Lindholm. Antes da Crise mnica, Torbjrn ganhou notoriedade por projetar sistemas de armas, usados por países de todo o mundo. No entanto, sua crena de que a tecnologia deve servir a uma perspectiva melhor para a humanidade o fez entrar em conflito com seus empregadores, que desejavam controlar suas armas usando inteligncia computacional interconectada. Torbjörn tinha uma profunda desconfiança da inteligência computacional consciente e, enquanto muitos de seus companheiros consideravam isso uma paranoia, seus piores medos se tornaram realidade quando as populações de robôs do mundo se viraram contra seus criadores humanos durante a Crise Ômnica. Por ser um gnio da engenharia, ele foi recrutado para juntar-se  equipe de ataque original do Overwatch e suas diversas invenções provaram-se fundamentais para acabar com a crise. Nos anos seguintes, a Overwatch se tornou uma força de paz internacional e Torbjörn continuou sendo um recurso crítico para todas as suas necessidades tecnológicas e sistemas de armas exclusivos. Mas após a queda da Overwatch, muitas das armas de Torbjörn foram roubadas ou escondidas por todo o mundo. Sentindo-se responsvel por suas criações, Torbjrn est determinado a impedi-las de continuarem caindo nas mãos erradas e causando estragos a inocentes.</div>";
            document.getElementById("skills").innerHTML = `
            <div class="col-xl-4" id="tob">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1; ">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/a3791d6155a72f1dd4109d99a7d730b5f489f0442abd6582b429bcca36a2dc75.png" alt="POSICIONAR TORRE">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-5">
                        <h5 class="card-title">POSICIONAR TORRE</h5>
                        <p class="card-text pt-5">Torbjörn posiciona uma torre que se autoconstri. Ela segue e ataca inimigos automaticamente.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/b59687c0dd86bbc41b754388e7b21deba5397c61808c0d9b375c062c9eaf85ac.png" alt="SOBRECARGA">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-5">
                        <h5 class="card-title">SOBRECARGA</h5>
                        <p class="card-text">Torbjörn ganha armadura adicional, além de aumento nas velocidades de ataque, movimento e recarregamento por um curto perodo.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4" style="color: white">
            <div class="card mb-3" style="max-width: 540px; background-color: #353C42;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/640e2363d97cfe133716bb2811d5dedb18faddb50ebbf77c415163ea50e87b41.png" alt="NÚCLEO FUNDIDO">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-4">
                        <h5 class="card-title">NÚCLEO FUNDIDO</h5>
                        <p class="card-text">Torbjörn cria poças de escria incandescente que causam enorme dano contnuo (além de dano extra a armaduras) e podem atrapalhar a movimentaão dos inimigos em locais importantes.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>  
            `;
            
            
        }

        function tracer(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>A ex-agente da Overwatch conhecida como Tracer  uma aventureira que salta no tempo e é uma fora incontrolável para o bem. Lena Oxton (codinome: 'Tracer') foi a pessoa mais jovem a ser introduzida no programa de voo experimental da Overwatch. Conhecida por suas habilidades de voo destemidas, ela foi escolhida a dedo para testar o prottipo de um caça teleportador, o Slipstream. Mas, durante seu primeiro voo, a matriz de teleporte do avião sofreu um defeito e ele desapareceu. Lena foi dada como morta. Ela reapareceu meses depois, mas seu incidente causou uma grande mudança nela: suas molculas foram dessincronizadas pelo fluxo do tempo. Tendo sofrido uma 'desassociação cronolgica', ela era um fantasma, desaparecendo por horas e at mesmo dias. Mesmo nos breves momentos em que ela estava presente, ela não conseguia manter uma forma física. Médicos e cientistas da Overwatch ficaram perplexos e o caso da Tracer parecia não ter esperanças, at que um cientista chamado Winston projetou o acelerador cronolgico, um dispositivo capaz de manter Tracer ancorada no presente. Alm disso, ele deu a Tracer a habilidade de controlar seu prprio tempo, permitindo a ela acelerar e desacelerar o tempo à sua vontade. Com suas novas habilidades, ela se tornou uma das agentes mais eficazes da Overwatch. Desde a dissolução da Overwatch, Tracer continua corrigindo malfeitores e lutando pelo bem sempre que surge a oportunidade.</div>";
            document.getElementById("skills").innerHTML = `
            <div class="col-xl-4" id="tracer">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1; ">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/ce6f7a05967a422d81325c87d74414a50beac1649c7e14033207f77aafb6bd1b.png" alt="TELEPORTAR">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">TELEPORTAR</h5>
                        <p class="card-text">Tracer some horizontalmente no espaço, na direço para qual ela estiver se movendo, e reaparece alguns metros depois. Ela armazena até trs cargas da habilidade de teleportar e gera mais cargas a cada poucos segundos.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/30939502a8576da1fdcad8c7d21881e32066fb28847fc7df874b1436689e3425.png" alt="RECORDAÇÃO">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-5">
                        <h5 class="card-title">RECORDAÇO</h5>
                        <p class="card-text pt-5">Tracer volta no tempo, retornando sua vida, munição e posição no mapa precisamente para o ponto em que estavam alguns segundos atrás.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4" style="color: white">
            <div class="card mb-3" style="max-width: 540px; background-color: #353C42;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/383e9b039efb93da77bb91fbeb3654ef50724e0cea0de76b2cc1c4db43de9a6d.png" alt="BOMBA ELETROMAGNÉTICA">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">BOMBA ELETROMAGNTICA</h5>
                        <p class="card-text">Tracer joga uma grande bomba que adere a qualquer superfcie ou oponente que tiver o azar de ser atingido por ela. Após um breve período, a bomba explode, causando dano alto a todos os inimigos dentro do raio de sua explosão.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>  
            `;
            
            
        }

        function widow(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Widowmaker é a assassina perfeita: uma matadora paciente e impiedosamente eficiente que não mostra emoo nem remorso. Acredita-se que, na sua antiga vida, Widowmaker foi casada com Gérard Lacroix, um agente da Overwatch que liderava operaçes contra a organizaão terrorista Talon. Depois de diversas tentativas frustradas de eliminar Gérard, a Talon decidiu mudar seu foco para sua esposa, Amélie. Os agentes da Talon a sequestraram e a sujeitaram a um intenso programa de recondicionamento neural. Eles destruíram sua vontade, suprimiram sua personalidade e a reprogramaram como uma agente dormente. Ela eventualmente foi encontrada pelos agentes da Overwatch, aparentemente sem nenhum arranhão, e voltou à sua vida normal. Duas semanas depois, ela matou Gérard enquanto ele dormia. Com sua misso concluída, Amélie voltou à Talon e eles concluíram o processo de transformá-la em uma arma viva. Ela recebeu extenso treinamento em artes ocultas e, ento, sua fisiologia foi alterada, reduzindo drasticamente seu ritmo cardíaco, o que deixou sua pele azul e fria, e entorpeceu sua capacidade de sentir emoções humanas. Amélie j no existia mais. Agora, Widowmaker  a assassina mais eficaz da Talon, sentindo muito pouco alm da satisfaço de um trabalho bem feito.</div>";
            document.getElementById("skills").innerHTML = `
            <div class="col-xl-4" id="widow">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1; ">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/72fec7acac37ad840835839e72f368134498583686e91f7e30fe5d48aa44f7a1.png" alt="ARPU">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">ARPÉU</h5>
                        <p class="card-text">Widowmaker lança um arpéu em direção ao local em que ela estiver apontando. Quando o gancho se conecta com uma superfcie escalável, ela é puxada rapidamente na direção dele, permitindo a ela expandir sua viso do campo de batalha e escapar ou flanquear alvos.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/82bb61b02224901170d8dc2fae143e695649cdfd7f5173a0e63a7742fd45bd84.png" alt="MINA VENENOSA">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-5">
                        <h5 class="card-title">MINA VENENOSA</h5>
                        <p class="card-text">Widowmaker adere um mina venenosa de ativação rpida a quase qualquer superfície. Quando um alvo se move dentro do alcance do mecanismo de ativação da mina, ela explode, lanando gás venenoso aos inimigos nas proximidades.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4" style="color: white">
            <div class="card mb-3" style="max-width: 540px; background-color: #353C42;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/b7783e8f83afc45dac37b80d0801a5b8200727e3dde299510d2f1886e0c7237b.png" alt="VISÃO INFRAVERMELHO">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-4">
                        <h5 class="card-title">VISO INFRAVERMELHO</h5>
                        <p class="card-text">O visor de reconhecimento de Widowmaker permite a ela enxergar assinaturas térmicas através de paredes e objetos durante um período moderado de tempo. Essa visão melhorada é compartilhada com seus aliados.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>  
            `;
            
            
        }

       
    
    </script>
    <!--Script para funções-->
    
</body>
</html>