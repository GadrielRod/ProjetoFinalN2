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
              <a class="nav-link " aria-current="page" href="../index.php">In??cio</a>
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
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Uma das fundadoras de Overwatch, Ana usa suas habilidades e seu conhecimento para defender seu lar e as pessoas que ela ama.Como a Crise ??mnica teve um peso muito grande para o Egito, as for??as de seguran??a esvaziadas e sem pessoal do pa??s se apoiaram nos franco-atiradores de elite. Entres eles, Ana Amari, que era considerada por muitos a melhor do mundo. Sua destreza com as armas, tomada r??pida de decis??es e instintos, fizeram dela uma sele??o natural para se juntar ?? for??a de ataque de Overwatch que terminou a guerra. Seguindo o sucesso da miss??o original de Overwatch, Ana serviu muitos anos como a Segunda no Comando para o Comandante de Ataque Morrison. Apesar de suas grandes responsabilidades liderando a organiza??o, Ana se recusou a deixar as operaes de combate. Ela continuou ativa at?? seus cinquenta anos de idade, at?? acreditarem que ela morreu nas m??os de uma agente da Talon conhecida como ???Widowmaker???, durante uma miss??o de resgate de refns. Na verdade, Ana sobreviveu a esse encontro, mesmo que gravemente ferida e tendo perdido seu olho direito. Durante sua recuperao, ela sentiu o peso de uma vida gasta no combate e decidiu permanecer distante dos conflitos mundiais que se alargavam. Entretanto, com o passar do tempo, ela se deu conta de que n??o podia fazer nada enquanto sua cidade e as pessoas inocentes ao seu redor eram ameaados por outros. Agora, Ana voltou ?? luta para proteger seu pa??s das for??as que poderiam desestabiliz??-lo; e mais importante, para manter sua famlia e seus aliados mais prximos em seguran??a.</div>";
            document.getElementById("skills").innerHTML = `
            <div class="col-xl-4" id="ana">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1; ">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/20707fd82265412fdc6d2353daa88ec7558cd71c89aa3ac6cf0e78bbbfcabd80.png" alt="DARDO SON??FERO">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-5">
                        <h5 class="card-title pb-5">DARDO SON??FERO</h5>
                        <p class="card-text pb-5">Ana dispara um dardo de sua arma secund??ria, deixando seus inimigos inconscientes (por??m eles despertam ao receber dano).</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/c8190b234bf0a0e28eecffe162d0c942e6b8656e95f4688c6ca3b025fa5a487d.png" alt="GRANADA BI??TICA">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">GRANADA BI??TICA</h5>
                        <p class="card-text">Ana lan??a uma granada bitica que causa dano aos inimigos e cura os aliados em uma pequena ??rea de efeito. Aliados afetados recebem por tempo limitado cura aumentada de todas as fontes, enquanto inimigos pegos pela explos??o n??o podem se curar por alguns instantes.</p>
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
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Baptiste  um m??dico de combate de elite e ex-agente da Talon que usa suas habilidades para ajudar vtimas da guerra. O menino Jean-Baptiste Augustine foi um dos 30 milh??es de ??rf??os deixados pela Crise ??mnica. Diante da limita????o de oportunidades e recursos, acabou se alistando na Coaliz??o Caribenha, uma fora militar criada no arquip??lago em resposta ?? crise. Guiado pelo desejo inato de ajudar o prximo, Baptiste seguiu em sua nova fam??lia como m??dico de combate, atuando no bra??o de elite das tropas de opera????es especiais da Coaliz??o. Ao se desligar da tropa, o socorrista n??o encontrou mercado para suas habilidades ??nicas e acabou recorrendo a uma das poucas sa??das disponveis: entrar para a Talon, uma das organiza????es mercenrias que aproveitaram para lucrar com o caos do p??s-guerra. Pela primeira vez na vida, Baptiste teve algum sossego. Suas misses eram f??ceis e bem remuneradas, o que lhe permitiu fazer planos de montar uma cl??nica m??dica em sua cidade natal. Mas, aos poucos, sua unidade ficou mais e mais brutal, com chacinas e baixas civis. Confrontado pela realidade cruel da equipe mercen??ria, o m??dico deu-se conta de que perpetuava o mesmo ciclo de viol??ncia que destruiu sua comunidade e abandonou o grupo, enojado pelos pr??prios atos e determinado a cimentar um novo caminho para si. A Talon, no entanto, no o deixaria partir. Baptiste sabia demais e precisava ser silenciado. O m??dico vagou ento de cidade em cidade para n??o chamar aten????o, sem nunca deixar de atuar em a??es humanit??rias pelo mundo inteiro. Muitos agentes, inclusive alguns de seus ex-colegas, revezaram-se na caada, e os poucos que conseguiram rastre??-lo nunca mais foram vistos. Hoje, Baptiste trabalha por um mundo melhor, curando quando  poss??vel e combatendo quando ?? preciso. O m??dico sabe que n??o pode mudar o prprio passado, mas o que importa ?? fazer a diferen??a aqui e agora.</div>";
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
                        <p class="card-text">Baptiste ativa um pulso regenerador intenso que cura a si e aos aliados pr??ximos ao longo do tempo.</p>
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
                        <p class="card-text">Baptiste usa um dispositivo para criar um campo que impede a morte de aliados. Esse gerador pode ser destru??do.</p>
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
                        <p class="card-text">Baptiste cria uma matriz que dobra o dano e a cura dos projteis de aliados que cruzam a rea de a??o.</p>
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
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Agora em a??o nas linhas de frente, Brigitte Lindholm pegou em armas para defender os indefesos. Filha mais nova do criador de armas Torbjrn Lindholm, Brigitte foi a primeira dos filhos dele a demonstrar interesse em engenharia mec??nica. Brigitte passou muito do tempo livre dela na oficina do pai, aprendendo o of??cio e melhorando suas habilidades. A aptid??o de Brigitte para a engenharia igualava-se a do pai, mas o interesse prim??rio dela estava na fabrica????o de armadura e sistemas defensivos, ao contrrio de Torbjrn, que era conhecido (e infame) no mundo todo pelas armas que criou. Todos esperavam que Brigitte continuasse o aprendizado e seguisse os passos do pai. S que seus planos mudaram graas ?? influ??ncia de outra figura importante da vida dela: Reinhardt Wilhelm, amigo do pai e tambm colega dele na Overwatch. Amigo pr??ximo da fam??lia e padrinho de Brigitte, Reinhardt contava  menina histrias de her??is e cavaleiros. Depois da aposentadoria de Reinhardt e da queda da Overwatch, o guerreiro declarou que partiria numa jornada por justi??a, tornando-se cavaleiro andante. Antes que ele partisse, Brigitte o surpreendeu com um pedido para acompanh??-lo como sua escudeira. Reinhardt aceitou. Como escudeira, Brigitte tinha muitas responsabilidades, sendo a mais importante a manuteno da armadura de Cruzado de Reinhardt (um design que ela conhecia, pois a verso atual fora criada pelo pai dela). S que, mais e mais, ela percebeu que a tarefa principal dela era cuidar de Reinhardt, tentando proteg??-lo do pr??prio entusiasmo exagerado conforme o corpo dele ia sendo destrudo pelos anos de combate. No fim, ela percebeu que n??o bastaria ser uma mera mec??nica e que a melhor forma de ajudar Reinhardt seria se tornar uma guerreira tamb??m. Enquanto Reinhardt a treinava em combate, Brigitte come??ou a criar a pr??pria armadura em segredo. Agora Brigitte luta ao lado de Reinhardt para proteger a ele e todos aqueles que precisem de ajuda enquanto cavaleiro e escudeira viajam para melhorar o mundo, uma batalha de cada vez.</div>";
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
                        <p class="card-text pb-4">Cura um aliado por um curto per??odo.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-3">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/50af1a0bc61a1f022fe2ee69aa460f151aba3c0ccde41377bfb0d5c45b2c55a3.png" alt="DISPARO A??OITADOR">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body">
                        <h5 class="card-title">DISPARO AOITADOR</h5>
                        <p class="card-text">Brigitte arremessa o mangual a uma longa dist??ncia, causando dano e empurrando um inimigo para longe dela.</p>
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
                        <p class="card-text pb-4">Brigitte cria uma barreira de energia ?? frente, absorvendo uma quantidade limitada de dano.</p>
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
                        <p class="card-text">Brigitte anda mais r??pido e concede a todos os aliados pr??ximos uma armadura que dura at?? ser destruda por dano.</p>
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
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>L??cio ?? uma celebridade internacional que inspira a mudan??a social atravs de suas m??sicas e a??es. L??cio Correia dos Santos cresceu no Rio de Janeiro, em uma favela pobre e super populosa, que sofreu muito com o revs financeiro ap??s a Crise mnica. Com o Brasil iniciando o longo processo de recupera????o, ele quis encontrar uma forma de avivar os esp??ritos daqueles a seu redor. Ele encontrou o que procurava na m??sica e no poder que ela tem de aproximar as pessoas, ajudando-as at mesmo a esquecer seus problemas, mesmo que apenas por um momento. Ele se apresentava nas ruas, em festas na comunidade, e quando foi ficando mais velho, em uma srie de shows lend??rios da cena underground. Mas a comunidade unida de L??cio se transformou em um caos quando a Corporao Vishkar, uma multinacional, assinou um contrato para reconstruir grandes por??es da cidade. Foi dito a L??cio e seus vizinhos que o desenvolvimento melhoraria suas vidas. Mas essa promessa nunca virou realidade. A Vishkar imp??s um controle a seus residentes sob a alega??o de construir uma sociedade com mais ordem: colocando toques de recolher, atacando comportamentos que a companhia via como imorais e explorando a popula????o como for??a de trabalho barata. L??cio n??o podia aceitar isso. Ele roubou a tecnologia s??nica da Vishkar que havia sido usada para oprimir a popula????o e converteu em uma ferramenta para motiv??-los ?? a??o. Com uma revolta popular, eles expulsaram a Vishkar de suas vizinhanas. A lideran??a de L??cio o transformou da noite para o dia em celebridade e um s??mbolo de mudan??a social positiva. Sua m??sica teve uma explos??o de popularidade. Antes ele se apresentava localmente, agora ele enchia as arenas ao redor do mundo. Com sua nova fama, L??cio percebeu que tinha a oportunidade de fazer a diferena e mudar o mundo para melhor.</div>";
            document.getElementById("skills").innerHTML = `
            <div class="col-xl-4" id="lucio">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1; ">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/9f4ab602b5e8be4a9b8d6312ae22e7b9f23f73d132f7955bfe7c1e838ca5ef9f.png" alt="TRANSI????O">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">TRANSI??O</h5>
                        <p class="card-text">L??cio se energiza continuamente, assim como aliados pr??ximos, com sua m??sica. Ele pode trocar entre duas m??sicas: uma amplifica a velocidade de movimento, enquanto a outra recupera vida.</p>
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
                        <p class="card-text pb-4 pt-4">Lcio aumenta o volume de seus alto-falantes, aumentando os efeitos de suas m??sicas.</p>
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
                        <p class="card-text">Ondas protetoras irradiam do Amplificador Snico do L??cio, garantindo escudos pessoais a ele e a aliados pr??ximos por um breve momento.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>  
            `;
            
            
        }

        function mercy(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Um anjo da guarda para aqueles em seus cuidados, Dra. Angela Ziegler ?? uma curandeira sem igual, uma cientista brilhante e uma defensora convicta da paz. Ziegler se tornou a chefe de cirurgia em um proeminente hospital su????o, antes de ser pioneira em avanos no campo da nanobiologia aplicada, que melhorou radicalmente o tratamento de doenas e ferimentos mortais. Foram estas percias que atra??ram a aten????o da Overwatch. Com o falecimento de seus pais devido ?? guerra, Ziegler se opunha ?? abordagem militar da organiza??o em manter a paz mundial. Por fim, ela reconheceu que a Overwatch oferecia a ela a oportunidade de salvar vidas em uma escala muito maior. Como chefe das pesquisas m??dicas da Overwatch, Angela buscou alavancar seu trabalho de cura na linha de frente, em situa??es de crise. O resultado foi a armadura de resposta rpida Valqu??ria, a qual a pr??pria Ziegler pilotou em diversas misses da Overwatch. Apesar de suas contribui??es para a Overwatch, ela se estranhava constantemente com seus superiores e com os objetivos globais da institui????o. Quando a Overwatch se dissipou, Ziegler se dedicou a ajudar aqueles afetados pela guerra. Apesar de passar a maior parte do tempo cuidando dos que tudo perderam nas ??reas em crise ao redor do mundo, pode-se contar com a Dra. Ziegler para usar sua armadura de Valquria sempre que inocentes estiverem em perigo.</div>";
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
                        <p class="card-text">Mercy voa na dire????o de um aliado que ela tenha mirado, permitindo alcan????-lo rapidamente para fornecer assist??ncia em momentos cruciais.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-3">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/d26768cf459611eedc4fdcc9096ad3b196e8b2babb0782cf24d56f108325e3bb.png" alt="RESSURREI????O">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body mb-5">
                        <h5 class="card-title">RESSURREI??O</h5>
                        <p class="card-text pt-5 pb-5">Mercy traz um aliado morto de volta  batalha, com vida m??xima.</p>
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
                        <p class="card-text pb-5 pt-5">Ganha a habilidade de voar. Habilidades s??o aprimoradas.</p>
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
                        <p class="card-text pt-4 pb-4">Impulsionada por sua armadura de Valqu??ria, Mercy reduz a velocidade de sua descida em grandes alturas.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            `;
            
            
        }

        function moira(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>T??o brilhante quanto controversa, a cientista Moira O???Deorain pesquisa o que h?? de mais avan??ado na engenharia gen??tica, buscando uma forma de reescrever os fundamentos que constroem a vida. Mais de uma dcada atrs, O???Deorain causou um alvoro??o ao publicar um trabalho controverso detalhando uma metodologia para criar programas gen??ticos personalizados que poderiam alterar o DNA em nvel celular. Parecia um passo promissor para superar doenas e s??ndromes e maximizar o potencial humano. O evento foi seguido por discord??ncias entre seus colegas. Muitos consideraram seu trabalho perigoso devido ??s consequ??ncias ??ticas e O'Deorain foi acusada de ter o mesmo desejo cient??fico de avan??o sem restri????es que muitos acreditam ter causado a Crise ??mnica. Alm disso, outros geneticistas foram incapazes de reproduzir os resultados das pesquisas de Moira, o que trouxe questionamentos a suas descobertas. Em vez de alavancar sua carreira, seu trabalho acabou prejudicando imensamente sua reputa??o. Ela recebeu investimento com uma oferta de uma fonte improv??vel: a Blackwatch, a equipe de opera????es secretas da Overwatch. Ela continuou seu trabalho das sombras enquanto desenvolvia armas e tecnologias novas para a organiza????o. Seu emprego era um segredo bem guardado at?? que foi descoberto devido ??s investiga????es ap??s o incidente de Veneza. Muitos oficiais de alto escalo na Overwatch juraram n??o saber de sua afiliao ?? equipe. Aps a Overwatch ter sido desfeita, O'Deorain foi for??ada a buscar fontes alternativas de custeamento. Dessa vez, ela foi convidada para se juntar ao coletivo cient??fico que fundou a cidade de O??sis. Ainda assim, alguns dizem que a organiza????o secreta Talon j?? a financiava por anos, ajudando em seus experimentos em troca do uso de seus resultados para fins prprios. Apesar de O'Deorain buscar o avan??o cientfico a qualquer custo, seu trabalho ainda ?? desconhecido pela maioria. Mas agora que ela foi libertada de todas as amarras,  s?? uma questo de tempo at?? tudo mudar.</div>";
            document.getElementById("skills").innerHTML = `
            <div class="col-xl-4" id="moira">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1; ">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/a5a235623aeb7fce1ce8e545e5be2d95b48fddf609c174fc5067efd7681ac72f.png" alt="ORBE BI??TICO">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">ORBE BITICO</h5>
                        <p class="card-text">Moira lan??a uma esfera bi??tica que rebate. Ela pode escolher entre um efeito de regenera??o que cura aliados ao passar por eles ou de deteriora??o que causa dano aos inimigos.</p>
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
                        <p class="card-text pb-4 pt-4">Moira se teletransporta rapidamente por dist??ncias curtas.</p>
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
                        <h5 class="card-title">COALESC??NCIA</h5>
                        <p class="card-text">Moira canaliza um raio de longa dist??ncia que pode curar aliados ou atravessar barreiras para causar dano a seus inimigos.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>  
            `;
            
            
        }

        function zen(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Zenyatta ?? um monge ??mnico que vagueia pelo mundo em busca de ilumina??o espiritual. Dizem que aqueles que cruzam seu caminho nunca ser??o os mesmos. Anos atr??s, ap??s a Crise ??mnica, um grupo de rob??s ??mnicos exilados vivenciou o que eles descrevem como um despertar espiritual. Eles abandonaram suas vidas pr??-programadas para estabelecer um monastrio comunal nas profundezas do Himalaia. Aps muitos anos de medita????o sobre a natureza da exist??ncia, eles passaram a acreditar que eram mais do que inteligncias artificiais e que, como os humanos, possuam a essncia de uma alma. Reconhecendo a igualdade espiritual que tinham com os humanos, os monges, liderados pelo misterioso rob?? conhecido como Tekhartha Mondatta, procuraram curar as feridas causadas uma gera????o antes pela Crise ??mnica e trazer humanos e rob??s de volta a uma sociedade em harmonia. Sua mensagem foi abraada por milhares de pessoas ao redor do mundo e eles se tornaram celebridades globais. Mas um monge, Zenyatta, discordava dessa nova dire????o. Ele acreditava que o caminho para reparar os problemas entre humanos e mnicos n??o era atrav??s do ensino dogm??tico, mas atrav??s da conexo e do envolvimento interpessoal. Por fim, Zenyatta seguiu seu prprio caminho. Ele escolheu deixar o monast??rio e vagar pelo mundo, ajudando aqueles que ele encontrar a superarem suas batalhas pessoais e encontrarem a paz interior. Mas, quando necess??rio, ele ir?? lutar para proteger os inocentes, sejam eles ??mnicos ou humanos.</div>";
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
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/f416ae3c602c4f920551057176a3618441f943a0faea5e3cf77dc5db0e5128a5.png" alt="ORBE DA DISC??RDIA">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-5">
                        <h5 class="card-title">ORBE DA DISC??RDIA</h5>
                        <p class="card-text">Prender o orbe da discrdia a um oponente amplifica a quantidade de dano que ele recebe enquanto Zenyatta mantiver uma linha de vis??o. Somente um inimigo pode sofrer os efeitos do orbe de cada vez.</p>
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
                        <h5 class="card-title">TRANSCEND??NCIA</h5>
                        <p class="card-text">Zenyatta entra em um estado de exist??ncia elevada por um breve per??odo de tempo. Enquanto transcende, Zenyatta n??o pode usar suas habilidades ou armas, mas ?? imune ao dano e restaura automaticamente a vida dele e de aliados pr??ximos.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>  
            `;
            
            
        }

        function dva(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>D.Va ?? uma ex-gamer profissional que sabe como usar suas habilidades para pilotar um mecha de ??ltima gera????o na defesa de sua cidade natal. Vinte anos atr??s, a Cor??ia do Sul foi atacada por um mnico monstruoso que surgiu das profundezas do Mar da China Oriental. O construto enorme causou danos catastr??ficos ??s cidades costais antes de ser for??ado a recuar para debaixo das ondas. Em resposta, o governo da Coria do Sul desenvolveu uma unidade drone blindada e mecanizada, chamada de MEKA, para proteger ambientes urbanos em combates futuros com a amea??a ??mnica. Os medos do governo se mostraram bem fundados ?? medida que um padro de ataques perturbador surgiu. A cada determinado n??mero de anos, a monstruosidade se levantava do mar para atacar a Cor??ia do Sul e seus vizinhos. O ??mnico aprendia com cada ataque, sempre se reconfigurando em uma forma diferente e aparecendo com novas armas e funcionalidades. Cada incidente terminava em um impasse, com a monstruosidade derrotada, por??m n??o destruda. Com o ??mnico sempre se adaptando, ele eventualmente conseguiu interferir com o controle de drones da rede MEKA, forando os militares a colocarem pilotos nos mechas. Com dificuldades para achar candidatos apropriados, o governo recorreu aos jogadores de videogames profissionais, que tinham os reflexos e instintos necess??rios para operar os sistemas avan??ados das armas dos mechas. Os melhores foram selecionados, incluindo a campe mundial, Hana Song, conhecida tambm como 'D.Va'. Famosa por suas habilidades de elite, D.Va era uma competidora feroz, que jogava para vencer a qualquer custo, e tinha a reputa????o bem fundamentada de n??o mostrar miseric??rdia por seus oponentes. Vendo sua nova misso como um jogo, D.Va avana ferozmente em batalha junto com o resto de sua unidade MEKA, pronta para agir em defesa de sua nao a qualquer momento. Recentemente, ela come??ou a fazer streams de suas opera????es de combate para seus adorados f??s e o crescimento de seus seguidores a transformou em um ??cone global.</div>";
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
                        <p class="card-text">O mecha da D.Va se lan??a no ar e sua fora a empurra para frente. Ela pode virar e mudar de dire????o ou atropelar seus inimigos, empurrando-os para tr??s.</p>
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
                        <p class="card-text">D.Va pode ativar seus projetores frontais por um curto per??odo. Enquanto os projetores estiverem ativos, deter??o proj??teis iminentes.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-3">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/1787326d46d04aa10872fc30fe512ab3575781735110dfb178ff38da352facb7.png" alt="MICRO M??SSEIS">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body mb-5">
                        <h5 class="card-title pb-4">MICRO M??SSEIS</h5>
                        <p class="card-text pt-5 pb-5">D.VA lan??a uma salva de foguetes explosivos.</p>
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
                        <p class="card-text">Se sua armadura de batalha for destru??da, D.Va pode chamar um mecha novinho em folha para retornar para as trincheiras.</p>
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
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Constru??da a partir das pe??as de um OR15, os rob??s de defesa de curta dura????o de Numbani, Orisa  a mais nova protetora da cidade, mas ela ainda tem muito o que aprender. Colocada em funcionamento antes da Crise ??mnica, a linha OR14 'Idina' de robs de seguran??a foi constru??da no enorme mnium de produ????o nigeriano. Aps a guerra, eles saram de linha, juntamente com vrios outros modelos usados durante a crise. Vinte anos depois, Numbani reativou e reiniciou o programa OR14 para proteger a cidade contra amea??as externas. Esses novos OR15 foram implantados por um breve per??odo antes de serem destru??dos em um ataque de Doomfist. Ap??s o ataque, o programa foi desmontado e o governo vendeu o estoque restante de OR15s. Algumas pe??as foram adquiridas por Efi Oladele, uma garota gnio de apenas 11 anos de idade cujas precoces realiza????es na ??rea de rob??tica j?? haviam lhe rendido um 'pr??mio de g??nio' da Funda??o Adawe. Com a aprova????o de seus pais extremamente compreensivos e mente aberta, Efi gastou a maior parte do seu pr??mio na compra de um rob?? OR15 desativado. Ela acreditava que Numbani precisava de um protetor e que um OR15 aprimorado seria capaz de fazer isso. Efi consertou e reconfigurou o rob e instalou um n??cleo de personalidade que ela mesma projetou. Ela chamou a mais nova hero??na de Numbani de Orisa. Orisa j?? mostrou que pode ser ??til para a cidade, mas ainda se esfor??a para encontrar seus protocolos ideais. A falta de experi??ncia da ??mnica ??s vezes faz dela um estorvo, mas, felizmente, gra??as ?? disposi????o de Efi em fazer as modifica??es necess??rias e ?? intelig??ncia artificial adaptativa de Orisa, tanto rob?? quanto criadora sempre conseguiram ajustar as coisas. Neste in??cio de carreira como guardi??, Orisa tem muito o que aprender sobre suas prprias funcionalidades e sobre o mundo. Mas enquanto ela for guiada pelo ilimitado otimismo de Efi e por seu crescente senso de honra e dever, Orisa estar?? pronta para proteger sua criadora e Numbani a qualquer custo.</div>";
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
                        <p class="card-text">Orisa reduz temporariamente o dano recebido e n??o pode ser afetada por efeitos que impedem suas a????es.</p>
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
                        <p class="card-text">Orisa lan??a uma carga de grvitons que pode ser detonada para desacelerar inimigos pr??ximos e pux-los para o centro da explos??o.</p>
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
                        <p class="card-text pt-5 pb-1">Orisa implanta um dispositivo que aumenta o dano causado por aliados em seu campo de vis??o.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            `;
            
            
        }

        function rein(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Reinhardt Wilhelm se veste como um heri de eras passadas que vive pelos nobres c??digos do valor, da justi??a e da coragem. Mais de trinta anos atrs, Overwatch foi fundada para resistir ?? ameaa das rebeli??es de rob??s ao redor do mundo. Reinhardt, um soldado alem??o altamente condecorado, foi inserido como parte da equipe de ataque original da Overwatch, que p??s fim ?? Crise ??mnica. Aps a decis??o do conflito, Overwatch se tornou uma institui????o global, mantenedora da paz em um mundo castigado pela guerra. Reinhardt provou ser um dos seus her??is mais leais. A tica incompar??vel e a personalidade fortssima de Reinhardt conquistaram a admira????o dos seus companheiros e superiores. Sem nunca ter medo de falar o que pensava, ele era o defensor mais vigoroso da Overwatch e, quando necessrio, seu cr??tico mais duro, lembrando constantemente que a Overwatch havia sido criada para ser uma fora do bem. Tendo servido at?? quase os sessenta anos, Reinhardt teve que encarar a aposentadoria obrigat??ria das opera??es de combate. Desanimado por ter sido tirado do seu dever, Reinhardt temia que seus dias de propsito e gl??ria haviam terminado. Conforme os tempos ficavam mais sombrios e a Overwatch se tornava suspeita de corrupo e rebeli??o, Reinhardt s?? podia assistir enquanto a causa pela qual ele havia dedicado sua vida para defender era cercada de desgraa. Apesar da Overwatch ter sido eventualmente dissolvida, Reinhardt n??o estava feliz em ficar sentado enquanto o mundo caa em desordem. Colocando mais uma vez sua armadura de Cruzado, ele fez votos de lutar pela justi??a por toda a Europa como um cavaleiro dos tempos antigos, defendendo os inocentes e conquistando cora??es e mentes com a promessa de dias melhores pela frente.</div>";
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
                        <p class="card-text">Reinhardt projeta uma barreira frontal ampla, que pode absorver uma quantidade substancial de dano antes de ser destru??da. Apesar de Reinhardt poder proteger a si mesmo e seus companheiros com a barreira, ele n??o pode atacar enquanto a mant??m.</p>
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
                        <p class="card-text pb-4">Reinhardt avan??a em linha reta, carregando o primeiro inimigo que aparecer na sua frente e tirando os outros do caminho. Se ele colidir com uma parede, o advers??rio que estiver carregando sofrer?? dano extremo.</p>
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
                        <p class="card-text pt-5 pb-5">Ao brandir seu Martelo Propulsor, Reinhardt lan??a um proj??til flamejante que perfura e inflige dano a qualquer inimigo que tocar.</p>
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
                        <p class="card-text pb-5 pt-5 mb-5">Reinhardt bate seu martelo propulsor no ch??o com for??a, infligindo dano e derrubando todos os inimigos a sua frente.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            `;
            
            
        }

        function roadhog(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Roadhog ?? um matador sanguin??rio com uma reputa??o merecida por crueldade e destrui????o gratuita. Ap??s a Crise ??mnica, oficiais do governo entregaram o omnium australiano e as terras nos arredores aos ??mnicos que quase destru??ram o pa??s, na esperan??a de estabelecer um acordo de paz duradouro. Esse acordo de paz desalojou permanentemente Mako Rutledge e um grande n??mero de residentes da rea: um conjunto de sobreviventes, fazendeiros solares e pessoas que s?? queriam ficar em paz. Furiosos com a perda de seus lares, Mako e outros residentes recorreram a uma rebeli??o violenta. Eles formaram a Frente de Liberao Australiana e atacaram o omnium e sua popula????o rob?? para tomar de volta as terras que tinham sido roubadas deles. Os eventos continuaram a ganhar maiores propores at que a FLA sabotou o n??cleo de fus??o do omnium, resultando em uma explos??o que destruiu o omnium, irradiou os arredores e sucateou o Deserto Australiano com metal retorcido e destro??os por quil??metros. Mako viu seu lar se tornar uma terra devastada apocal??ptica e isso o mudou para sempre. Adaptando-se a seu ambiente, ele p??s uma m??scara e partiu pelas autoestradas quebradas do Deserto Australiano em sua moto decr??pita. Aos poucos, sua humanidade foi esquecida. Os ??ltimos vest??gios de Mako desapareceram e nasceu o matador impiedoso, Roadhog.</div>";
            document.getElementById("skills").innerHTML = `
            <div class="col-xl-4" id="roadhog">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1; ">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/9cb8d867671bf917a9ba5d4a28ab6cb6ceeb10de2813567fcad97aca32c58499.png" alt="PEGANDO F??LEGO">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-5">
                        <h5 class="card-title">PEGANDO FLEGO</h5>
                        <p class="card-text mb-5 pb-4">Roadhog recupera partes de sua vida depois de um breve per??odo de tempo.</p>
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
                        <p class="card-text">Depois de amontoar um carregador superior em sua Arma de Sucata, Roadhog despeja muni??o. Por um curto per??odo de tempo, ele  capaz de de lan??ar um fluxo de estilha??os que arremessa os inimigos para trs.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>  
            `;
            
            
        }

        function sigma(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>A vida de Dr. Siebren de Kuiper, astrof??sico brilhante, mudou para sempre quando um experimento catastr??fico lhe deu o poder de controlar a gravidade. Agora, a Talon o manipula para seus pr??prios fins. De Kuiper era considerado um pioneiro em sua rea. Ele dedicou a vida a encontrar uma forma de controlar a gravidade. Renomado tanto por sua pesquisa inovadora quanto por sua personalidade exc??ntrica, conduziu a maior parte dos estudos no seu laborat??rio em Haia. Acreditando estar prximo de alcan??ar seu objetivo, realizou seu experimento mais importante a bordo de uma esta??o espacial internacional. Mas algo deu errado, causando a forma????o de um ef??mero buraco negro. De Kuiper s?? foi exposto a ele por um breve instante, porm sofreu graves danos psicol??gicos. A ??rea ao redor dele comeou a apresentar estranhas varia????es na gravidade, que ora se elevava, ora ca??a, em fun????o de suas rea??es. Ele teve que ser tirado dali imediatamente. Ao retornar  Terra, De Kuiper foi mantido em quarentena em instalaes governamentais secretas. Em meio a desvarios acerca dos padr??es do universo, ao dano ps??quico sofrido e a anomalias gravitacionais, ele foi considerado perigoso e passou anos confinado, sendo denominado 'Cobaia Sigma'. Isolado e incapaz de controlar seus poderes, De Kuiper se refugiou em sua pr??pria mente, achando que jamais voltaria a ver o mundo exterior. Quando soube da exist??ncia de De Kuiper, a Talon se infiltrou nas instala????es e o retirou de l??, planejando se aproveitar de sua genialidade e de suas pesquisas. Sob a custdia da organiza????o, De Kuiper lentamente ganhou controle dos seus poderes. A gravidade passou a se alterar de acordo com sua vontade e ele estava mais perto do que nunca de alcanar o objetivo de toda uma vida. Por??m, o mesmo experimento que expandira sua mente tamb??m a esfacelara, e ele agora lutava para juntar os peda??os. De Kuiper continua desenvolvendo seus poderes na esperana de desvendar os segredos do universo, sem saber que tanto ele quanto sua pesquisa esto sendo usados pela Talon.</div>";
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
                        <p class="card-text">Sigma lan??a uma barreira flutuante no local escolhido. A barreira pode ser dispensada a qualquer instante.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-3">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/a7401d18a391bc0eafddd8fc47a31ccc7f277190ab61ed14ae98408f576d6a23.png" alt="PUNHO CIN??TICO">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body mb-5">
                        <h5 class="card-title">PUNHO CIN??TICO</h5>
                        <p class="card-text pb-5 pt-4">Sigma paralisa proj??teis no ar, convertendo-os em escudos.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-3" >
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/594b0ecbb34b41b288c08bc7b040b273f25289ef0afc2d00828d6a30a0687236.png" alt="ACRE????O">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body mb-5">
                        <h5 class="card-title" style="font-size: 18px;">ACRE????O</h5>
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
                        <p class="card-text">No auge do seu poder, Sigma ala voo, ergue os inimigos na ??rea escolhida, lan??a-os para o alto e os atira no ch??o novamente.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            `;
            
            
        }

        function winston(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Um gorila geneticamente modificado altamente inteligente, Winston ?? um cientista brilhante e um her??i do potencial humano. A Col??nia Lunar do Horizonte foi estabelecida como um primeiro passo para uma nova explora????o do espao pela humanidade. Entre seus residentes, estava um grupo de gorilas geneticamente melhorados que deveriam testar os efeitos da vida prolongada no espa??o. Um dos gorilas apresentou um desenvolvimento cerebral t??o r??pido com a terapia gen??tica que foi levado aos cuidados do Dr. Harold Winston, que o ensinou ci??ncias e o inspirou com hist??rias da ingenuidade humana. O jovem gorila passou seus dias ajudando nos experimentos dos cientistas, assistindo ao distante mundo azul do lado de fora da janela do seu habitat, sonhando com as infinitas possibilidades que o aguardavam l fora. Mas sua vida se transformou em caos quando os outros gorilas come??aram uma rebeli??o, mataram os cientistas da misso e tomaram a posse da col??nia. Tomando o nome do seu amado cuidador humano, Winston construiu um foguete improvisado e fugiu para a Terra. L??, ele encontrou um novo lar na Overwatch, uma organiza????o que representava tudo o que ele aprendeu a admirar sobre a humanidade. Winston finalmente poderia viver pelos ideais heroicos que haviam se instaurado nele. Agora, com a queda da Overwatch, Winston ficou isolado, novamente tirado do mundo em que ele acredita, mas ansiando para que os dias de hero??smo retornem.</div>";
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
                        <p class="card-text mb-5 pt-5">O Projetor de Barreira de Winston estende um campo em forma de bolha que absorve dano at?? ser destru??do. Aliados dentro da barreira podem atirar de dentro dela.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4" style="color: white">
            <div class="card mb-3" style="max-width: 540px; background-color: #353C42;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/685608721cb914e0412a090eb1e89c0f5d10edfb3dbc34218ba3acd35611c990.png" alt="F??RIA PRIMATA">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">F??RIA PRIMATA</h5>
                        <p class="card-text">Winston retorna ?? sua natureza animal, aumentando significativamente sua vida e deixando-o mais dif??cil de matar, fortalecendo seu ataque corpo-a-corpo e permitindo a ele usar sua habilidade Salto a Jato com maior frequ??ncia. Durante sua f??ria, Winston s?? ?? capaz de realizar ataques corpo-a-corpo e com o Salto a Jato.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>  
            `;
            
            
        }

        function ball(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Em um dos diversos experimentos realizados na Colnia Lunar Horizon, os cientistas submeteram animais a terapia gentica para avaliar a capacidade de adapta??o deles a per??odos longos de habita????o na lua. Como efeito colateral inesperado, vrios exibiram um crescimento excepcional em tamanho fsico e fun????es cerebrais. Embora as cobaias, na sua maioria, fossem gorilas e outros primatas, havia algumas exce????es, como um hamster chamado Hammond. Assim como nos outros casos, a inteligncia de Hammond cresceu e despertou a curiosidade dele em relao ao mundo ao seu redor. Para grande espanto e deleite dos cientistas, ele vivia fugindo para outras partes da base lunar. Embora sempre o encontrassem e o devolvessem ?? sua cela, eles nunca descobriram o verdadeiro prop??sito das escapadas noturnas. O que eles n??o sabiam ?? que Hammond estava ocupado aprendendo o of??cio de mecnico, o que logo seria ??til. A col??nia virou um pandem??nio quando alguns dos gorilas se rebelaram contra os cientistas humanos e assumiram o controle. Entretanto, nem todos os animais participaram da rebeli??o, e um dos gorilas, Winston, estava matutando um plano para fugir para a Terra. Hammond sentiu que era sua oportunidade. Ele construiu uma c??psula improvisada e acoplou-a secretamente ?? nave de Winston enquanto o gorila decolava. Quando os dois entraram na atmosfera terrestre, Hammond se soltou e aterrissou em um local diferente: a regi??o des??rtica da Austr??lia. Hammond modificou sua c??psula de fuga para entrar na lucrativa arena de batalha de mechas do Ferro-velho. Subindo no ranque de lutadores, Wrecking Ball passou de concorrente a campe??o, embora a identidade do piloto permanecesse um mistrio para todos. Juntando seus ganhos, Hammond conseguiu aprimorar o mecha o bastante para sobreviver na perigosa jornada para sair do deserto controlado pelos Junkers. Agora livre para ir e vir, Hammond est?? explorando o mundo e vivendo novas aventuras pelo caminho.</div>";
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
                        <p class="card-text mb-5 pt-4">Wrecking Ball se transforma em uma bola, aumentando sua velocidade m??xima de movimento.</p>
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
                        <p class="card-text">Wrecking Ball joga uma garra para se prender a um ponto e se balan??ar. Se ele atingir um inimigo com um balan??o energizado, o inimigo sofrer?? dano e ser?? empurrado.</p>
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
                        <p class="card-text">Os escudos pessoais tempor??rios de Wrecking Ball absorvem dano, oferecendo defesas mais fortes se mais oponentes estiverem por perto.</p>
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
                        <p class="card-text mb-5 pt-4">Wrecking Ball bate no ch??o, causando dano aos inimigos e lanando-os no ar.</p>
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
                        <p class="card-text">Wrecking Ball lana uma s??rie de minas de proximidade de longa dura??o que explodem ao entrar em contato com inimigos.</p>
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
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Aleksandra Zaryanova ?? uma das mulheres mais fortes do mundo, uma atleta aclamada que sacrificou o triunfo pessoal para proteger sua fam??lia, amigos e pa??s em tempos de guerra. Aleksandra nasceu em uma vila remota na Sib??ria, que era uma das linhas de frente na Crise ??mnica, que come??ou por volta de trinta anos atr??s. Apesar das for??as russas terem derrotado os robs e desligado seu omnium, a regi??o foi devastada pelo conflito. Aleksandra, que era apenas uma crian??a na ??poca, foi cercada pela destrui??o p??s-guerra, e com o passar dos anos, ela jurou que se tornaria forte para ajudar seu povo a se recuperar. Focando em levantamento de peso e fisiculturismo, Aleksandra foi identificada pelo programa nacional de atletas como uma estrela em potencial. Ela treinou, extensivamente, subindo nos rankings enquanto representava seu pa??s, com expectativas de quebrar antigos recordes nos campeonatos mundiais que viriam. Entretanto, na v??spera do torneio, um ataque veio do dormente omnium siberiano e sua vila foi lan??ada na guerra mais uma vez. Aleksandra imediatamente se retirou da competi??o e correu para casa para se alistar ??s for??as locais de defesa, sacrificando a vida de fama e fortuna que ela poderia ter tido. Agora ela serve ao dever, sendo um s??mbolo para alguns e brava companheira de guerra para outros. Mas para Aleksandra,  uma chance de usar sua grande for??a para proteger aqueles que ama.</div>";
            document.getElementById("skills").innerHTML = `
            <div class="col-xl-4" id="zarya">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1; ">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/2d462e28ae2fc60b3ef9c32702bbc88936885dd7d20746a31dd2e3c51c20f199.png" alt="BARREIRA DE PART??CULAS">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">BARREIRA DE PART??CULAS</h5>
                        <p class="card-text">O Canh??o de Partculas pode emitir uma barreira individual que protege Zarya contra ataques eminentes, redirecionando a energia deles para aumentar o dano de sua pr??pria arma e a largura de seu raio.</p>
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
                        <p class="card-text">Zarya cerca um dos membros de sua equipe com uma barreira de energia que simultaneamente absorve fogo inimigo e aumenta o poder de seu Canh??o de Partculas.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4" style="color: white">
            <div class="card mb-3" style="max-width: 540px; background-color: #353C42;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/e58e60f939026f3d0ee95cf3a0b5fc8091da3c35a178d34c358700f3720a70d3.png" alt="SURTO DE GR??VITONS">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-5">
                        <h5 class="card-title">SURTO DE GR??VITONS</h5>
                        <p class="card-text pb-4">Zarya lan??a uma bomba de gravidade que atrai os combatentes inimigos, causando dano enquanto eles est??o presos.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>  
            `;
            
            
        }

        function ashe(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Ashe, a l??der ambiciosa e calculista da gangue Deadlock, ?? uma figura respeitada no submundo do crime. Nascida em uma fam??lia rica, Ashe cresceu cercada de privil??gios. Seus pais eram consultores de neg??cios bastante procurados por CEOs poderosos do mundo todo. Embora dessem pouca aten????o ?? menina, que geralmente ficava sob os cuidados do mordomo ??mnico da fam??lia, Bob, eles lhe proporcionaram todas as oportunidades de vencer na vida. Mas um encontro fortuito com um rufi??o local chamado Jesse McCree e uma s??rie de crimes improvisados juntos abriram os olhos dela para sua verdadeira voca????o. A satisfa????o de enganar seus alvos e a emo??o de levar a melhor transformou-a em uma fora da lei. Junto com os outros trs fundadores da gangue Deadlock, Ashe come??ou a chamar a aten??o com roubos cada vez maiores e mais extravagantes. A r??pida ascenso do bando gerou desavenas com outras organiza??es criminosas do sudoeste americano, e os encontros muitas vezes descambavam para a violncia. Ap??s anos de conflitos e derramamento de sangue, a mo??a convocou os l??deres dos maiores grupos. Ashe viu o potencial de crescimento da influ??ncia de todos. Ela usou o que havia aprendido com o neg??cio dos pais para levar ordem a esses grupos. A proposta era fazer as gangues trabalharem em conjunto (ou pelo menos n??o umas contra as outras). Seus princpios: cumpram a palavra dada, no cooperem com a lei, respeitem o territ??rio dos outros e sempre punam os traidores. Sem precisar mais gastar energia em picuinhas com outras gangues, Ashe agora expande sua reputa????o por todo o sudoeste americano. Uma srie de roubos e opera????es audaciosas a colocou no topo da lista dos mais procurados pelas autoridades e cimentou seu legado como lenda dos fora da lei.</div>";
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
                        <p class="card-text">Ashe joga um explosivo que detona ap??s um breve intervalo ou assim que ?? atingido por um tiro. A explos??o da Dinamite tambm ateia fogo aos inimigos, causando dano ao longo do tempo.</p>
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
                        <p class="card-text mb-4 pb-4">Ashe dispara nos inimigos ?? frente para afast??-los e jogar-se para tr??s, ganhando mais mobilidade.</p>
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
                        <p class="card-text">Ashe chama Bob, seu fiel ajudante ??mnico, que avan??a, joga os inimigos para o alto e usa seus canh??es de bra??o para forar advers??rios a procurar cobertura.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>  
            `;
            
            
        }

        function bastion(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Outrora combatente na linha de frente na devastadora Crise ??mnica, esta curiosa unidade Bastion agora explora o mundo, fascinada pela natureza, porm cautelosa com uma humanidade tem??vel. Originalmente criadas para prop??sitos de manuten????o da paz, as unidades rob??ticas Bastion possuam a habilidade nica de se reconfigurar rapidamente em um modo de canho de ataque. Por??m, durante a Crise ??mnica, elas foram postas contra seus criadores humanos, dando volume ao ex??rcito rebelde de ??mnicos. Ap??s a resolu??o da crise, quase todas elas foram destru??das ou desmontadas. At?? hoje, as unidades Bastion ainda simbolizam os horrores do conflito. Uma unidade Bastion singular, altamente danificada nas batalhas finais da guerra, ficou esquecida por mais de uma d??cada. Ela esteve adormecida, exposta aos elementos e enferrujando enquanto a natureza lentamente a reclamava. Coberto por cips e ra??zes, e servindo de ninho para pequenos animais, o rob?? permaneceu inerte, aparentemente desapercebido da passagem do tempo. Isso at um dia fat??dico, quando se reativou inesperadamente. Com sua programa??o de combate perdida, ele demonstrara curiosidade intensa sobre o mundo natural e seus habitantes. Esta inquisitiva unidade Bastion saiu  explorar seus arredores, em busca de seus prop??sitos em um planeta devastado pela guerra. Apesar de 'Bastion' parecer gentil ??? ou at inofensivo, por vezes ??? sua programa??o de combate central assume o controle quando a unidade sente perigo, utilizando seu arsenal completo para eliminar qualquer coisa que perceba como amea??a. Isso gerou situa??es de conflito com os poucos humanos que encontrou, levando-o a evitar ??reas povoadas, favorecendo as regi??es selvagens e inexploradas do mundo.</div>";
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
                        <p class="card-text pt-4 pb-5">Bastion se transforma entre seus dois modos prim??rios de combate para se adaptar ??s condi??es de batalha.</p>
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
                        <p class="card-text mb-5 pt-1">Bastion recupera sua vida, por??m, ele no pode utilizar suas armas enquanto o processo de reparo estiver em efeito.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4" style="color: white">
            <div class="card mb-3" style="max-width: 540px; background-color: #353C42;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/3b6776324cac7381da3234ce508031f59bbf4ed658ec221d37fc817ab2c987fd.png" alt="CONFIGURA????O: TANQUE">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">CONFIGURA????O: TANQUE</h5>
                        <p class="card-text">No modo Tanque, Bastion exp??e esteiras e um canh??o poderoso de longo alcance. Os cartuchos explosivos do canh??o detonam alvos em um grande raio, mas Bastion s?? pode permanecer neste modo por um curto per??odo.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>  
            `;
            
            
        }

        function doomfist(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Recm-liberto de sua pris??o, Doomfist est determinado a lan??ar o mundo em um novo conflito que ele acredita que far?? a humanidade mais forte. Akande Ogundimu nasceu em uma famlia nigeriana de boa reputa??o e herdou sua companhia de tecnologia de prost??ticos. Uma figura carism??tica e altamente inteligente, Ogundimu ajudou a expandir os neg??cios da famlia, os colocando rumo ao futuro, enquanto dedicava seu tempo livre a sua primeira paix??o, as artes marciais. Ele treinou em estilos de luta africanos, incluindo Dambe e Gidigbo, assim como luta livre e outros sistemas de combate modernos, incorporando as t??cnicas mais eficientes em seu repertrio. Ogundimu competiu em torneios por todo o continente, utilizando habilidade e intui??o para ler os oponentes com sua grande velocidade e fora. Mas quando perdeu seu bra??o como resultado da Crise mnica, pareceu ser o fim de sua carreira nas artes marciais, antes mesmo de atingir seu potencial. A pr??tese cibern??tica de sua companhia permitiu que ele se recuperasse de seus ferimentos, o tornando ainda mais forte, mas essas melhorias o impediram de competir. Ele tentou se devotar aos neg??cios com o mesmo zelo que tinha pela luta, mas n??o encontrou nada para preencher o vazio at?? que ele recebeu uma nova oportunidade de Akinjide Adeyemi, mais conhecido como o segundo Doomfist, o Flagelo de Numbani. Adeyemi ofereceu a Ogundimu a chance de lutar com ele como mercen??rio. Ap??s a cautela inicial, Ogundimu aceitou e descobriu que ele agora tinha uma arena na qual podia liberar sua nova e melhorada potencialidade. Por fim, Adeyemi o levou para a Talon. A cren??a da Talon de que a humanidade seria fortalecida pelo conflito reverberou com as experincias pessoais de Ogundimu. Mas al??m disso, os conflitos de poder da Talon criaram um novo desafio que permitiu que ele usasse seu talento na sala de reunies da mesma forma que usava sua ast??cia em combate. Adeyemi era um recurso muito til ?? Talon, mas a organiza??o via muito mais potencial em Ogundimu, com sua inteligncia e habilidade de ser um comandante inspirador. Enquanto Adeyemi se sentia satisfeito com os lucros das pilhagens em Numbani, Ogundimu tinha uma vis??o muito maior. Essa diferen??a de ambi????o levaria Ogundimu a matar seu mestre e tomar o manto de Doomfist, junto com a manopla homnima. Como o novo Doomfist, Ogundimu subiu bastante na Talon e ajudou a orquestrar um conflito que a organiza????o esperava que algum dia tomaria o mundo. Porm, antes de seu plano ser concludo, Ogundimu foi derrotado e capturado pela equipe de ataque ttico da Overwatch, composta por Tracer, Winston e Genji. Ele foi aprisionado em uma instituio de segurana m??xima por anos, onde esperou pacientemente o acontecimento dos eventos que tinha incitado. Finalmente, ele sentiu que o tempo havia chegado para seu retorno. Ele fugiu de sua pris??o e recuperou a manopla de Doomfist depois de uma batalha unilateral com a nova defesa de Numbani formada por rob??s OR15. Agora, ele retomou seu posto no conselho interno da Talon e est?? pronto para come??ar uma guerra que mais uma vez consumir?? o planeta.</div>";
            document.getElementById("skills").innerHTML = `
            <div class="col-xl-3" id="doomfist">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1; ">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/20f721d5fd05f91e203d6e0007a137bdc90a161356f85d5aa88b2ab02b8da22b.png" alt="ABALO S??SMICO">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body mb-5">
                        <h5 class="card-title">ABALO S??SMICO</h5>
                        <p class="card-text pt-3">Doomfist salta para a frente batendo no cho, trazendo inimigos pr??ximos para sua dire??o.</p>
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
                        <p class="card-text pt-3">Doomfist acerta um gancho nos inimigos em sua frente, lan??ando-os no ar.</p>
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
                        <p class="card-text">Depois de carregar, Doomfist se lana para frente e arremessa um inimigo para tr??s, causando dano adicional se ele atingir uma parede.</p>
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
                        <p class="card-text mb-3 pt-5">Doomfist salta para os c??us, depois acerta o ch??o, causando dano significativo.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            `;
            
            
        }

        function echo(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Para mapear as origens do projeto Echo, ?? importante investigar a hist??ria pessoal da cientista cingapuriana Dra. Mina Liao, que posteriormente seria conhecida como uma das fundadoras da Overwatch. Mas, antes de entrar na organiza????o, ela era considerada uma das maiores especialistas nas ??reas de robtica e intelig??ncia artificial e trabalhava na Corpora????o ??mnica. L, a Dra. Liao integrou a equipe respons??vel pelo projeto de cria????o dos mnicos, as m??quinas que travariam uma guerra contra a humanidade durante a Crise mnica. No fim, foi essa experincia que a fez ser recrutada pela Overwatch, para que pudesse deter suas pr??prias cria????es. Nem mesmo essa cat??strofe foi suficiente para abalar a cren??a de Liao no potencial da vida artificial de melhorar a vida de toda a humanidade. Ela sonhava em aperfei??oar o design original dos ??mnicos, e essas teorias se tornaram a base do projeto Echo. No entanto, gra??as s restri??es da Overwatch ?? pesquisa e ao desenvolvimento de inteligncia artificial ap??s a Crise mnica, a cingapuriana foi obrigada a limitar as potencialidades de Echo. O que ela criou foi um rob?? adaptativo multifuncional, que poderia ser programado para aprender diversas fun????es, de assist??ncia mdica a constru????o, mas com limites bem claros na tomada de decises independente. Echo continha diversas camadas de prote??o, sistemas antifalha e medidas de segurana para mant??-la sob controle. Ela foi usada com ??xito em miss??es de teste com a equipe de ataque da Overwatch, mas a lideran??a da organiza??o hesitava em utiliz??-la em tempo integral. Mas, em segredo, Liao programou Echo com uma poderosa intelig??ncia artificial que aprende pela observa????o. Ap??s milhares de horas na presen??a da cientista, muito do comportamento de Liao, inclusive seu modo de falar, foi adotado pela rob??. Pouqussimas pessoas sabiam desse potencial, e entre elas estava o agente da Blackwatch Jesse McCree, que ??s vezes era destacado para proteger a cientista. Quando Liao morreu em um ataque a uma instala????o da Overwatch, a lideran??a da organiza????o hesitou em dar continuidade a um projeto t??o perigoso, e todo o desenvolvimento de Echo foi suspenso, e o rob??, posto em quarentena. Ap??s se juntar  nova equipe da Overwatch para defender Paris do ataque do Setor Nulo, Echo est?? atuando como integrante permanente da equipe pela primeira vez. Entretanto, ningu??m sabe como ela pode evoluir no futuro ?? medida que entrar em contato com novas pessoas, ideias e situa????es sem a orienta????o da Dra. Liao.</div>";
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
                        <p class="card-text pb-3">Echo dispara uma saraivada de bombas aderentes que explodem ap??s um tempo.</p>
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
                        <p class="card-text mb-5 pt-3 pb-4">Echo avan??a rapidamente e depois pode voar ?? vontade.</p>
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
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>O ciborgue Genji Shimada fez as pazes com seu corpo aprimorado que ele antes rejeitava e, ao faz??-lo, pode descobrir uma humanidade maior. Como filho mais novo do mestre do cl?? ninja dos Shimada, Genji viveu uma vida de luxo e privil??gio. Ele tinha pouco interesse nos negcios ilegais de sua fam??lia, e apesar de gostar e ser excelente em seu treino ninja, ele passou a maior parte de seu tempo curtindo uma vida de playboy. Muitos no cl?? consideravam o estilo de vida do Genji um perigo para o cl e tinham ressentimento contra seu pai por proteg??-lo. Com a morte do l??der do cl??, o irm??o mais velho de Genji, Hanzo, exigiu que Genji tivesse um papel mais ativo no imp??rio de seu pai falecido. Genji se recusou, enfurecendo Hanzo. A tens??o entre os irmos acabou em um confronto violento que deixou Genji a beira da morte. Hanzo acreditou que tinha matado seu irm??o, mas Genji foi resgatado pela Overwatch e a interven????o da Dra. Angela Ziegler. A for??a de segurana global via Genji como um possvel recurso em suas opera????es para deter o cl?? Shimada. Como os ferimentos de Genji o deixaram a beira da morte, a Overwatch se ofereceu para reconstruir seu corpo em troca de sua ajuda. Ele passou por um longo processo de cibernetiza????o, o que aumentou sua velocidade e agilidade naturais e potencializou suas habilidades ninja. Transformado em uma arma viva, Genji tomou como seu dever desmantelar o imp??rio criminoso de sua fam??lia. Mas  medida que o tempo passou, Genji se sentiu cada vez mais em conflito consigo mesmo. Ele tinha repulsa das partes mec??nicas de seu corpo e n??o aceitava o que tinha se tornado. Quando sua miss??o foi completada, ele abandonou a Overwatch e vagou o mundo em busca de sentido. Ele vagou por muitos anos antes de encontrar o monge mnico, Zenyatta. Apesar de Genji inicialmente ter rejeitado a sabedoria de Zenyatta, o benevolente ??mnico jamais desistiu. Com o tempo, Zenyatta se tornou seu mentor, e com a tutela do monge, Genji se reconciliou com sua exist??ncia dupla tanto como homem quanto mquina. Ele aprendeu a aceitar que, apesar de ter um corpo de ciborgue, sua alma humana estava intacta e passou a ver sua nova forma como um presente e uma fora ??nica. Agora, pela primeira vez em sua vida, Genji est?? livre. Nem mesmo ele pode dizer para onde seu caminho eventualmente o levar??.</div>";
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
                        <p class="card-text">Com ataques velozes de sua espada, Genji reflete proj??teis iminentes e os lan??a de volta em seu oponente.</p>
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
                        <p class="card-text">Genji avan??a para frente, golpeando com sua katana e passando por inimigos em seu caminho. Se Genji eliminar um alvo com essa habilidade, ele pode us-la de novo instantaneamente.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4" style="color: white">
            <div class="card mb-3" style="max-width: 540px; background-color: #353C42;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/e9c3c82c08ce1a6006dbdf6905591040ed83ddceba81efb2e526c217cd57c931.png" alt="L??MINA DO DRAG??O">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-4">
                        <h5 class="card-title">LMINA DO DRAG??O</h5>
                        <p class="card-text">Genji brande sua katana por um breve per??odo de tempo. At?? embainhar sua espada, Genji consegue acertar golpes mortais em qualquer alvo ao seu alcance.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>  
            `;
            
            
        }

        function hanzo(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Aperfei??oando suas habilidades como arqueiro e assassino, Hanzo Shimada almeja mostrar-se digno como guerreiro sem par. A fam??lia Shimada foi estabelecida s??culos atrs, um cl?? de assassinos cujo poder cresceu atrav??s dos anos, permitindo que constru??ssem um vasto imp??rio criminal que lucrava de vantajosas negocia??es de armas e subst??ncias ilegais. Como filho mais velho do chefe da fam??lia, Hanzo tinha o dever de suceder seu pai e governar o imp??rio Shimada. Desde jovem, ele foi treinado para essa responsabilidade, demonstrando aptid??o natural para a liderana e possuindo um entendimento inato de estrat??gias e t??ticas. Ele tambm se sobressaia em ??reas prticas: era um prodgio em artes marciais, esgrima e no arco e flecha. Com a morte de seu pai, os anci??es do cl?? deram instru????es para que Hanzo endireitasse seu rebelde irm??o mais novo, para que ele tamb??m pudesse ajudar a governar o imprio Shimada. Quando seu irm??o se recusou, Hanzo foi for??ado a mat??-lo. Este ato partiu o cora??o de Hanzo, levando-o a rejeitar o legado de seu pai, fazendo com que ele abandonasse o cl e tudo pelo que trabalhara tanto para atingir. Agora, Hanzo viaja o mundo, aperfei??oando suas habilidades como guerreiro, tentando restaurar sua honra e dar descanso aos fantasmas de seu passado.</div>";
            document.getElementById("skills").innerHTML = `
            <div class="col-xl-3" id="hanzo">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1; ">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/6a71d18cc52e49380aa9eb57f979524033a3e79bd3153900a12bb553d5a0e6f0.png" alt="FLECHA SNICA">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body">
                        <h5 class="card-title">FLECHA S??NICA</h5>
                        <p class="card-text">Hanzo dispara uma flecha que cont??m um rastreador sonar. Qualquer inimigo no raio de detec??o ?? marcado como visvel, tornando a ca??ada mais fcil para Hanzo e seus aliados.</p>
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
                        <p class="card-text mb-5 pt-4">As pr??ximas flechas atiradas por Hanzo ser??o instant??neas mas causaro dano reduzido.</p>
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
                        <p class="card-text mb-5 pt-5 pb-4">Hanzo pode executar um salto duplo, permitindo que ele mude de dire????o no ar.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            
            <div class="col-xl-3" style="color: white">
            <div class="card mb-3" style="max-width: 540px; background-color: #353C42;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/f2d63b8f0e19e91d2c1199ed3ac0f20bb180dabe9ad1ffc7d1f1e880e58f0220.png" alt="GOLPE DO DRAG??O">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">GOLPE DO DRAG??O</h5>
                        <p class="card-text pt-5">Hanzo invoca uma emana????o dracnica que percorre o ar em linha. Ela atravessa as paredes em seu caminho, devorando qualquer inimigo que encontrar.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            `;
            
            
        }

        function junkrat(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Junkrat ?? um lun??tico obcecado por explosivos que vive para causar destrui??o e caos. O ataque ao n??cleo de fuso do omnium australiano alterou para sempre a paisagem do Deserto Australiano. Aps a detona??o, a rea foi transformada em uma terra devastada, ??rdua e irradiada, cheia de destroos e fragmentos de metal retorcido da instala??o arruinada, e in??spita para a maioria. Mas h?? aqueles que sobreviveram. Com o nome de Junkers, eles se aproveitaram das cascas do omnium e criaram uma sociedade cruel e sem lei em suas sombras. Junkrat era um deles, sobrevivendo da posse de metais e componentes das ru??nas. Como muitos outros, ele foi afetado pela radia????o remanescente. Esse toque de loucura fez dele ideal para manejar explosivos perigosos, uma paixo que logo se tornou uma obsess??o. Ele ganhou notoriedade quando descobriu um segredo extremamente valioso nos ossos do omnium. Apesar de poucos saberem a natureza do que ele encontrou, ele mesmo assim foi perseguido por ca??adores de recompensa, gangues e oportunistas, aonde quer que fosse, at?? que fez um acordo com o executor Junker conhecido como Roadhog, que relutantemente concordou em ser seu guarda-costas pessoal em troca de metade dos esplios. Agora, com Roadhog ao seu lado, Junkrat deixou o Deserto Australiano e embarcou em uma onda de crimes internacionais, deixando para tr??s apenas um rastro de destrui??o.</div>";
            document.getElementById("skills").innerHTML = `
            <div class="col-xl-3" id="junkrat">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1; ">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/1d6135a3089363cf2c59d5157740cf5dc4ad572bc215553672a79812c397dbd2.png" alt="MINA DE CONCUSSO">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body mb-5">
                        <h5 class="card-title">MINA DE CONCUSS??O</h5>
                        <p class="card-text">Depois de colocar uma de suas Minas de Concuss??o caseira, Junkrat pode ativ??-la para causar danos aos inimigos e os mandar pelos ares... ou impulsionar ele mesmo pelo ar.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-3">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/425136ea32c08355f33df230d900a8cc8010ee7a2b27314f6a1e395bd78eb5aa.png" alt="ARMADILHA DE A??O">
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
                        <p class="card-text mb-5 pt-5 pb-5">O senso de humor bisonho do Junkrat persiste ap??s sua morte. Ao morrer, ele deixa para tr??s uma s??rie de granadas.</p>
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
                        <p class="card-text">Junkrat d?? a partida em uma bomba rel??gio motorizada e a envia pelo campo de batalha, subindo em paredes e obst??culos. Ele pode detonar remotamente o Pneu da Morte para causar danos srios aos inimigos pegos na exploso ou esperar que ele exploda sozinho.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            `;
            
            
        }

        function mccree(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Armado com seu rev??lver Pacificador, o fora da lei Jesse McCree faz justi??a com seus pr??prios termos. McCree j?? tinha uma reputa????o como membro da not??ria gangue Deadlock, que traficava armas ilcitas e equipamentos militares por todo o Sudoeste Americano, quando ele e seus comparsas foram apreendidos por uma opera????o da Overwatch. Com suas habilidades como atirador e sua engenhosidade, ele foi dado a escolha de apodrecer em uma pris??o de seguran??a m??xima ou de se juntar  Blackwatch, a divis??o de opera??es secretas da Overwatch. Ele escolheu a segunda op??o. Apesar de c??nico no come??o, ele passou a acreditar que podia compensar pelos pecados que cometera no passado, acertando as injustias do mundo. McCree se satisfez com a flexibilidade delegada ao grupo clandestino Blackwatch, liberto de burocracias e protocolos. Mas ?? medida que a influncia da Overwatch enfraqueceu, membros rebeldes dentro da Blackwatch tramaram para derrubar a organiza????o e us??-la para seus prprios fins. Sem querer participar dessas disputas internas, McCree resolveu partir sozinho e desapareceu. Anos depois, ele ressurgiu como um atirador mercenrio. Mas apesar de seus talentos serem buscados por grupos grandes e pequenos, ele s?? luta por causas que acredita serem justas.</div>";
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
                        <p class="card-text pt-5">McCree mergulha na dire????o em que est se movendo, recarregando seu Pacificador sem esforo algum no processo.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/c9de6a63247025da4b96ad4a3e36fe2675a5ac9da3b42384590f99eed8f1d9b3.png" alt="CLAR??O">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-5">
                        <h5 class="card-title">CLAR??O</h5>
                        <p class="card-text pt-5">McCree lan??a uma granada ofuscante que explode logo ap??s deixar sua m??o. A explos??o atordoa os inimigos num pequeno raio.</p>
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
                        <p class="card-text">Focar. Mirar. Sacar. McCree toma alguns preciosos instantes para mirar. Quando est?? pronto para disparar, ele atira em todos os inimigos em seu campo de viso. Quanto mais fracos seus alvos, mais r??pido ele dispara seus tiros mortais.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>  
            `;
            
            
        }

        function mei(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Mei ?? uma cientista que faz a luta pela preserva??o do meio ambiente com suas prprias m??os. Apesar de muitos atribu??rem os aumentos dos fen??menos clim??ticos inexplicados ao advento de novas tecnologias, o r??pido crescimento da populao ??mnica e o aumento dr??stico do consumo de recursos, as verdadeiras causas permaneciam desconhecidas. Para achar uma solu??o, a Overwatch estabeleceu uma srie de observat??rios ecolgicos em locais remotos e cr??ticos pelo mundo. Mei-Ling Zhou era um membro dessa iniciativa multifacetada. Uma climatologista sem igual, ela introduziu inova??es tecnolgicas de primeira linha no campo de manipula??o clim??tica que protegeu ??reas de risco dentro e fora da ??sia. Foi designado a ela a esta??o do programa de monitoramento no Observat??rio: Ant??rtica, quando um desastre aconteceu: uma tempestade polar catastr??fica soterrou a instala??o e a isolou do mundo exterior, deixando as instala??es danificadas e os cientistas presos. Com seus suprimentos acabando aos poucos, eles entraram em um estado crioesttico em uma ??ltima tentativa de sobreviver at que o resgate pudesse ser feito. Mas o resgate nunca veio. Anos depois quando a c??mera criognica foi finalmente descoberta, Mei, ainda em hiberna????o, foi a ??nica sobrevivente. O mundo em que Mei acordou tinha passado por mudanas consider??veis: a Overwatch j?? n??o existia, os problemas climticos haviam piorado e nenhum dos observat??rios ecol??gicos estavam em opera??o. Todas as pistas que eles tinha descoberto haviam se perdido. Mei decidiu continuar seu trabalho sozinha. Equipada com uma verso port??til de sua tecnologia de manipula??o clim??tica, ela viaja ao redor do mundo, na esperan??a de reestabelecer a rede ecol??gica e rastrear as causas das amea??as ao ecossistema do planeta.</div>";
            document.getElementById("skills").innerHTML = `
            <div class="col-xl-4" id="mei">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1; ">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/b9507f892676c729768b3cb9eec4fb2195bbadb1f229a6a332d282ffa32410db.png" alt="CONGELAMENTO CRIOG??NICO">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-4">
                        <h5 class="card-title">CONGELAMENTO CRIOG??NICO</h5>
                        <p class="card-text">Mei se envolve instantaneamente em um bloco de gelo espesso. Ela se cura e ignora dano enquanto est?? envolvida, mas n??o pode se mover ou usar habilidades.</p>
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
                        <p class="card-text pt-5">Mei cria uma enorme muralha de gelo que obstrui as linhas de vis??o, interrompe movimentos e bloqueia ataques.</p>
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
                        <p class="card-text">Mei lan??a um drone de manipula??o clim??tica que emite rajadas de vento e neve em uma rea ampla. Inimigos pegos na nevasca so desacelerados e recebem dano e aqueles que ficarem nela por muito tempo s??o congelados.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>  
            `;
            
            
        }

        function pharah(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>O comprometimento com o dever de Fareeha Amari corre em suas veias. Ela vem de uma longa linhagem de soldados altamente condecorados e tem um desejo intenso de servir com honra. Quando crian??a, Fareeha sonhava em seguir os passos de sua m??e e se juntar ?? for??a de manuten??o da paz, Overwatch. Ela se alistou no ex??rcito egpcio e sua persist??ncia constante e proezas t??ticas a levaram ao alto escal??o. Ela era uma l??der corajosa e conquistou a lealdade de todos ??queles que serviram sob seu comando. Com sua ficha exemplar, Fareeha foi bem colocada para se juntar ??s fileiras da Overwatch, por??m, antes de ter essa oportunidade, a Overwatch se dissolveu. Depois de deixar o ex??rcito com uma recomenda??o por servi??os exemplares, ela recebeu uma oferta de emprego na Helix Seguran??a Internacional, uma firma de seguran??a privada, contratada para proteger a instala??o de pesquisa de intelig??ncia artificial abaixo do Planalto de Giza. A instala??o ultra secreta foi apontada como vital para a seguran??a n??o apenas da regio, mas tamb??m de diversos pases ao redor do mundo. Fareeha ficou contente em aceitar a misso e recebeu treinamento na Raptora Mark VI, uma armadura de combate experimental, projetada para mobilidade r??pida e poder de fogo devastador. Sob o codinome Pharah???, ela trabalha para proteger a instala??o de IA. Apesar de lamentar o fim da Overwatch, ela ainda sonha em lutar pelo bem e fazer diferen??a em escala global.</div>";
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
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/9747b440730824756ae2d17e4d1f38468f36c985c35f56cf1f175a613279479a.png" alt="EXPLOS??O CONCUSSIVA">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">EXPLOS??O CONCUSSIVA</h5>
                        <p class="card-text">Pharah dispara um foguete de pulso que lan??a para longe os inimigos que atinge.</p>
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
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>H?? quem fale sobre um terrorista em um manto preto, conhecido apenas como Reaper. Sua identidade e motiva??es s??o um mist??rio. O que se sabe ?? que onde ele aparece, a morte o segue. O Reaper ?? um mercen??rio extremamente vol??til, um matador sem remorso ou piedade, respons??vel por ataques terroristas ao redor do mundo. Ele lutou em muitos conflitos armados nas ??ltimas d??cadas, sem demonstrar qualquer lealdade a nenhuma causa ou organiza????o. Sobreviventes descreveram uma sombra negra, vagando como fantasma pelos campos de batalha mais infernais. Os poucos corpos recuperados daqueles que ele assassinou so p??lidos, vazios e sem vida, com suas c??lulas apresentando sinais intensos de degrada????o. ?? poss??vel que ele seja o resultado da falha de um experimento gen??tico, que for??a suas c??lulas a se degenerarem e regenerarem simultaneamente, em uma velocidade ultra acelerada. Aqueles que t??m tentado rastrear seus movimentos comearam a enxergar um padr??o em suas apari??es. Eles acreditam que Reaper est?? caando antigos agentes da Overwatch e os eliminando sistematicamente.</div>";
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
                        <p class="card-text">Reaper se torna uma sombra por um curto perodo de tempo. Enquanto est nessa forma, ele n??o recebe dano e pode atravessar inimigos, mas no pode usar suas armas ou outras habilidades.</p>
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
                        <p class="card-text pt-4">Ap??s marcar um destino, Reaper desaparece e reaparece naquele destino.</p>
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
                        <p class="card-text">Em um movimento r??pido, Reaper esvazia as duas espingardas infernais em velocidade rel??mpago, infligindo dano massivo aos inimigos nas proximidades.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>  
            `;
            
            
        }

        function soldado(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Atualmente o alvo de uma ca??ada internacional, o vigilante conhecido como Soldado: 76 trava uma guerra pessoal para expor a verdade por trs do colapso da Overwatch. Soldado: 76 se revelou em uma s??rie de ataques ao redor do mundo, que tinham como alvo institui????es financeiras, corpora????es sombrias e instala??es da Overwatch. Apesar de para o mundo suas motiva????es serem desconhecidas, h quem afirme que ele ?? um ex-agente da Overwatch, determinado a trazer  tona a conspira??o que derrubou a organiza????o. Sua identidade continua um mist??rio, mas acredita-se que ele foi treinado como um membro do 'programa de aprimoramento de soldados' dos Estados Unidos. Ele possui capacidades f??sicas que excedem as de um soldado convencional, assim como outros aprimoramentos que fazem dele um combatente sem rival. Ele tamb??m possui um arsenal de ponta, do qual grande parte foi roubada da Overwatch em suas invas??es. Implacvel em sua busca para encontrar aqueles respons??veis pela queda da Overwatch, Soldado: 76 n??o parar?? por nada at?? traz-los ?? justi??a.</div>";
            document.getElementById("skills").innerHTML = `
            <div class="col-xl-3" id="soldado">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1; ">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/8fedb348952552227b6e2ec85cf14214106b901afce2a9657267153bb2a8cac3.png" alt="FOGUETES H??LIX">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body mb-5">
                        <h5 class="card-title">FOGUETES H??LIX</h5>
                        <p class="card-text pt-4">Pequenos foguetes saem do Rifle de Pulso de Soldado: 76 de uma ??nica vez. A explos??o do foguete inflige dano aos inimigos em curto alcance.</p>
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
                        <p class="card-text">Caso ele precise fugir de um tiroteio ou voltar para um, Soldado: 76 pode avan??ar com uma exploso de velocidade. Sua corrida termina se ele realizar outra a??o alm de avan??ar para frente.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-3" >
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/aaadd3dee89ac8797ecb7a1e647f574a034b1930726296fd17946d343254bdf0.png" alt="CAMPO BI??TICO">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body mb-1">
                        <h5 class="card-title" style="font-size: 18px;">CAMPO BI??TICO</h5>
                        <p class="card-text pt-4">O Soldado: 76 instala um emissor bi??tico no ch??o. Sua proje????o energtica restaura a vida de 76 e quaisquer membros de sua equipe no campo.</p>
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
                        <h5 class="card-title">VISOR T??TICO</h5>
                        <p class="card-text">O visor t??tico de localiza??o do Soldado: 76 fixa sua mira no alvo mais pr??ximo. Se um inimigo deixa seu campo de vis??o, Soldado 76 pode rapidamente trocar para outro alvo.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            `;
            
            
        }

        function sombra(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Uma das hackers mais famosas do mundo, Sombra usa informa??es para manipular aqueles que est??o no poder. Muito antes de assumir o nome de Sombra, ?????? era uma das milhares de crian??as que ficaram rf??s aps a Crise mnica. Com muita da infraestrutura de seu pa??s destru??da, ela sobreviveu utilizando seus dons naturais de computa??o como hacker. Depois disso, ???????????? foi acolhida pela gangue mexicana Los Muertos, os ajudando em sua revolu????o pessoal contra o governo. Los Muertos acreditavam que a reconstru????o do M??xico havia favorecido os ricos e mais influentes, deixando para tr??s os mais necessitados. Ap??s tantas conquistas, ??????????????? estava plenamente confiante de suas habilidades, mas foi pega desprevenida quando esbarrou em uma rede de conspira????o global, que tambm a percebeu. Com sua seguran??a comprometida, ????????? foi for??ada a excluir todos os rastros de sua exist??ncia e se escondeu. Ela mais tarde ressurgiu como Sombra, melhorada e determinada a descobrir a verdade por tr??s da conspira????o que ela descobriu. Sombra lan??ou ataques cibern??ticos ainda mais audaciosos e conseguiu com suas explora????es conquistar muitos admiradores, incluindo a Talon. Ela se juntou  organiza??o e acredita-se que contribuiu para ataques cibern??ticos macios contra corpora??es com fortes laos governamentais. Essas fa??anhas incitaram uma revolta popular no M??xico contra a Lum??riCo e violaram a seguran??a das Indstrias Volskaya, a ind??stria russa respons??vel pela manufatura da defesa anti-mnica. Agora, junto a Talon e seus recursos abundantes, Sombra pode focar em seu objetivo real: expor a conspira????o e usar este poder para seus objetivos pessoais.</div>";
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
                        <p class="card-text mb-5 pt-5 pb-5">Sombra hackeia seus inimigos os impedindo temporariamente de usar suas habilidades ou kits m??dicos, os tornando in??teis para seus oponentes.</p>
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
                        <p class="card-text">Sombra se torna invis??vel, durante o qual sua velocidade  aumentada consideravelmente. A habilidade ?? desativada ao atacar, receber dano ou usar habilidades ofensivas. Sombra n??o captura objetivos quando est?? invis??vel.</p>
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
                        <p class="card-text mb-4 pt-5">Sombra lan??a um sinalizador translocador. Ela pode retornar instantaneamente para a localiza??o do translocador enquanto ele estiver ativo (inclusive enquanto ele estiver no ar).</p>
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
                        <p class="card-text pt-5">Sombra realiza uma descarga de energia eletromagntica de amplo alcance, destruindo barreiras e escudos inimigos e hackeando todos os oponentes pegos na explos??o.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            `;
            
            
        }

        function sym(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Symmetra literalmente dobra a realidade. Ao manipular construtos de luz s??lida, ela altera o mundo conforme a sua vontade, na esperana de criar uma sociedade perfeita. Ap??s a Crise ??mnica, a Corpora????o Vishkar do sul da ??ndia iniciou um trabalhoso processo de cria????o de novas cidades autossustentveis para abrigar a popula????o deslocada da na??o. Uma dessas cidades, Utopaea, foi criada com o uso de tecnologias radicais de luz s??lida que permitem aos seus arquitetos darem forma a ruas, utilidades e habita????es da cidade em um piscar de olhos. Depois de ter sido identificada como um dos poucos capazes de se tornarem um arquiteto dobrador de luz, a jovem Satya Vaswani foi arrancada da extrema pobreza e posta aos cuidados da academia de arquitetura de Vishkar, sem nunca voltar para casa. Isolada e sozinha na sua nova vida, Satya mergulhou nos estudos e no treinamento. Ela rapidamente se agarrou s aplica??es da tecnologia e se tornou uma das melhores alunas de sua turma. Satya abordou a manipula??o de luz s??lida de uma forma diferente de seus colegas com suas constru????es mais met??dicas e mec??nicas. Em vez disso, ela tecia seus constructos com os movimentos da dana tradicional da sua terra natal. Apesar de ser uma das melhores arquitetas de Utopaea, a Corpora????o Vishkar viu um potencial muito maior nas habilidades de Satya. Dando a ela o apelido de 'Symmetra', Vishkar a enviou em miss??es clandestinas ao redor do mundo para defender seus interesses corporativos e expandir sua influ??ncia para outros pa??ses. Symmetra acredita que suas a??es servem a um bem maior na sociedade. Mas, em alguns momentos, ela se questiona se o controle e a ordem que ela deseja realmente s??o o melhor para a humanidade.</div>";
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
                        <p class="card-text pt-4">Symmetra lan??a uma pequena torre que automaticamente dispara exploses redutoras de velocidade no inimigo mais pr??ximo dentro de seu alcance. At?? trs torres podem ser constru??das no campo de batalha de uma s?? vez.</p>
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
                        <p class="card-text">Symmetra posiciona uma plataforma tempor??ria de sada de teletransporte a dist??ncia e a conecta a uma plataforma de entrada em sua posi????o atual. Aliados (e algumas de suas habilidades, como o Pneu da Morte de Junkrat) podem viajar pelas duas plataformas instantaneamente.</p>
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
                        <p class="card-text mb-5 pt-5 pb-5">Symmetra arma uma barreira de energia enorme que impede ataques a dist??ncia e corta todo o mapa.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>  
            `;
            
            
        }

        function tob(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>No seu auge, Overwatch possu??a um dos armamentos mais avanados do planeta, que remetia de volta  oficina de um habilidoso engenheiro chamado Torbjrn Lindholm. Antes da Crise mnica, Torbjrn ganhou notoriedade por projetar sistemas de armas, usados por pa??ses de todo o mundo. No entanto, sua crena de que a tecnologia deve servir a uma perspectiva melhor para a humanidade o fez entrar em conflito com seus empregadores, que desejavam controlar suas armas usando inteligncia computacional interconectada. Torbj??rn tinha uma profunda desconfian??a da intelig??ncia computacional consciente e, enquanto muitos de seus companheiros consideravam isso uma paranoia, seus piores medos se tornaram realidade quando as popula????es de rob??s do mundo se viraram contra seus criadores humanos durante a Crise ??mnica. Por ser um gnio da engenharia, ele foi recrutado para juntar-se  equipe de ataque original do Overwatch e suas diversas inven????es provaram-se fundamentais para acabar com a crise. Nos anos seguintes, a Overwatch se tornou uma for??a de paz internacional e Torbj??rn continuou sendo um recurso cr??tico para todas as suas necessidades tecnol??gicas e sistemas de armas exclusivos. Mas ap??s a queda da Overwatch, muitas das armas de Torbj??rn foram roubadas ou escondidas por todo o mundo. Sentindo-se responsvel por suas cria????es, Torbjrn est determinado a impedi-las de continuarem caindo nas m??os erradas e causando estragos a inocentes.</div>";
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
                        <p class="card-text pt-5">Torbj??rn posiciona uma torre que se autoconstri. Ela segue e ataca inimigos automaticamente.</p>
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
                        <p class="card-text">Torbj??rn ganha armadura adicional, al??m de aumento nas velocidades de ataque, movimento e recarregamento por um curto perodo.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4" style="color: white">
            <div class="card mb-3" style="max-width: 540px; background-color: #353C42;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/640e2363d97cfe133716bb2811d5dedb18faddb50ebbf77c415163ea50e87b41.png" alt="N??CLEO FUNDIDO">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-4">
                        <h5 class="card-title">N??CLEO FUNDIDO</h5>
                        <p class="card-text">Torbj??rn cria po??as de escria incandescente que causam enorme dano contnuo (al??m de dano extra a armaduras) e podem atrapalhar a movimenta??o dos inimigos em locais importantes.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>  
            `;
            
            
        }

        function tracer(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>A ex-agente da Overwatch conhecida como Tracer  uma aventureira que salta no tempo e ?? uma fora incontrol??vel para o bem. Lena Oxton (codinome: 'Tracer') foi a pessoa mais jovem a ser introduzida no programa de voo experimental da Overwatch. Conhecida por suas habilidades de voo destemidas, ela foi escolhida a dedo para testar o prottipo de um ca??a teleportador, o Slipstream. Mas, durante seu primeiro voo, a matriz de teleporte do avi??o sofreu um defeito e ele desapareceu. Lena foi dada como morta. Ela reapareceu meses depois, mas seu incidente causou uma grande mudan??a nela: suas molculas foram dessincronizadas pelo fluxo do tempo. Tendo sofrido uma 'desassocia????o cronolgica', ela era um fantasma, desaparecendo por horas e at mesmo dias. Mesmo nos breves momentos em que ela estava presente, ela n??o conseguia manter uma forma f??sica. M??dicos e cientistas da Overwatch ficaram perplexos e o caso da Tracer parecia n??o ter esperan??as, at que um cientista chamado Winston projetou o acelerador cronolgico, um dispositivo capaz de manter Tracer ancorada no presente. Alm disso, ele deu a Tracer a habilidade de controlar seu prprio tempo, permitindo a ela acelerar e desacelerar o tempo ?? sua vontade. Com suas novas habilidades, ela se tornou uma das agentes mais eficazes da Overwatch. Desde a dissolu????o da Overwatch, Tracer continua corrigindo malfeitores e lutando pelo bem sempre que surge a oportunidade.</div>";
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
                        <p class="card-text">Tracer some horizontalmente no espa??o, na dire??o para qual ela estiver se movendo, e reaparece alguns metros depois. Ela armazena at?? trs cargas da habilidade de teleportar e gera mais cargas a cada poucos segundos.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/30939502a8576da1fdcad8c7d21881e32066fb28847fc7df874b1436689e3425.png" alt="RECORDA????O">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-5">
                        <h5 class="card-title">RECORDA??O</h5>
                        <p class="card-text pt-5">Tracer volta no tempo, retornando sua vida, muni????o e posi????o no mapa precisamente para o ponto em que estavam alguns segundos atr??s.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4" style="color: white">
            <div class="card mb-3" style="max-width: 540px; background-color: #353C42;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/383e9b039efb93da77bb91fbeb3654ef50724e0cea0de76b2cc1c4db43de9a6d.png" alt="BOMBA ELETROMAGN??TICA">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">BOMBA ELETROMAGNTICA</h5>
                        <p class="card-text">Tracer joga uma grande bomba que adere a qualquer superfcie ou oponente que tiver o azar de ser atingido por ela. Ap??s um breve per??odo, a bomba explode, causando dano alto a todos os inimigos dentro do raio de sua explos??o.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>  
            `;
            
            
        }

        function widow(){
            document.getElementById("historia").innerHTML = "<div style='padding: 2%';>Widowmaker ?? a assassina perfeita: uma matadora paciente e impiedosamente eficiente que n??o mostra emoo nem remorso. Acredita-se que, na sua antiga vida, Widowmaker foi casada com G??rard Lacroix, um agente da Overwatch que liderava opera??es contra a organiza??o terrorista Talon. Depois de diversas tentativas frustradas de eliminar G??rard, a Talon decidiu mudar seu foco para sua esposa, Am??lie. Os agentes da Talon a sequestraram e a sujeitaram a um intenso programa de recondicionamento neural. Eles destru??ram sua vontade, suprimiram sua personalidade e a reprogramaram como uma agente dormente. Ela eventualmente foi encontrada pelos agentes da Overwatch, aparentemente sem nenhum arranh??o, e voltou ?? sua vida normal. Duas semanas depois, ela matou G??rard enquanto ele dormia. Com sua misso conclu??da, Am??lie voltou ?? Talon e eles conclu??ram o processo de transform??-la em uma arma viva. Ela recebeu extenso treinamento em artes ocultas e, ento, sua fisiologia foi alterada, reduzindo drasticamente seu ritmo card??aco, o que deixou sua pele azul e fria, e entorpeceu sua capacidade de sentir emo????es humanas. Am??lie j no existia mais. Agora, Widowmaker  a assassina mais eficaz da Talon, sentindo muito pouco alm da satisfa??o de um trabalho bem feito.</div>";
            document.getElementById("skills").innerHTML = `
            <div class="col-xl-4" id="widow">
            <div class="card mb-3" style="max-width: 540px; background-color: #007DD1; ">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/72fec7acac37ad840835839e72f368134498583686e91f7e30fe5d48aa44f7a1.png" alt="ARPU">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">ARP??U</h5>
                        <p class="card-text">Widowmaker lan??a um arp??u em dire????o ao local em que ela estiver apontando. Quando o gancho se conecta com uma superfcie escal??vel, ela ?? puxada rapidamente na dire????o dele, permitindo a ela expandir sua viso do campo de batalha e escapar ou flanquear alvos.</p>
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
                        <p class="card-text">Widowmaker adere um mina venenosa de ativa????o rpida a quase qualquer superf??cie. Quando um alvo se move dentro do alcance do mecanismo de ativa????o da mina, ela explode, lanando g??s venenoso aos inimigos nas proximidades.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-xl-4" style="color: white">
            <div class="card mb-3" style="max-width: 540px; background-color: #353C42;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://d15f34w2p8l1cc.cloudfront.net/overwatch/b7783e8f83afc45dac37b80d0801a5b8200727e3dde299510d2f1886e0c7237b.png" alt="VIS??O INFRAVERMELHO">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body mb-4">
                        <h5 class="card-title">VISO INFRAVERMELHO</h5>
                        <p class="card-text">O visor de reconhecimento de Widowmaker permite a ela enxergar assinaturas t??rmicas atrav??s de paredes e objetos durante um per??odo moderado de tempo. Essa vis??o melhorada ?? compartilhada com seus aliados.</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>  
            `;
            
            
        }

       
    
    </script>
    <!--Script para fun????es-->
    
</body>
</html>