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
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox-plus-jquery.min.js" integrity="sha512-6gudNVbNM/cVsLUMOb8g2b/RBqtQJ3aDfRFgU+5paeaCTtbYY/Dg00MzZq7r6RvJGI2KKtPBhjkHGTL/iOe21A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js" integrity="sha512-k2GFCTbp9rQU412BStrcD/rlwv1PYec9SNrkbQlo6RZCf75l6KcC3UwDY8H5n5hl4v77IDtIPwOk9Dqjs/mMBQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  

  <title>OverFans - Skins</title>
  <link rel="icon" type="image/x-icon" href="../img/overwatch-icon.ico">
  <style>
    .masthead {
      height: 120vh;
      min-height: 500px;
      background-image: url('../img/skins/skinHeader.jpg'); /*imagem do topo*/
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }
    /* background */
    @media only screen and (max-width: 600px) {
      .masthead {
        background-image: url('../img/skins/skinHeader.jpg'); /*imagem do topo*/
        background-position: 50% 14%;
      }
    }
    /* TABLET */
    @media only screen and (min-width:321px) and (max-width:766px){
      .masthead {
        background-image: url('../img/skins/skinHeader.jpg'); /*imagem do topo*/
        background-position: 50% 14%;   
      }
    
    }
    .col-centered{
        float: none;
        margin: 0 auto;
    }
    .card-title{
        text-transform: uppercase;
    }
    .item:hover{
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
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Histórias
          </a>
          <ul class="dropdown-menu bg-dark border-0" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item text-white" href="historia.php">Histórias</a></li>  
            <li><a class="dropdown-item text-white" href="herois.php">Heróis</a></li>
            <li><a class="dropdown-item text-white" href="quadrinho.php">Quadrinhos</a></li>
            <li><a class="dropdown-item text-white" href="mapas.php">Mapas</a></li>
          </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="skins.php">Skins</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="patches.php">Patches</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="sobre.php">Sobre</a>
        </li>
      
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Pesquisar conteudo" aria-label="Search">
        <button class="btn btn-outline-warning" type="submit"><i class="fa fa-search"></i></button>
      </form>
    </div>
  </div>
</nav>

<header class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center text-white" style=" padding-bottom: 5px; padding-left: 36px;">
        <h1 class="font-weight-light gradient-text" style="font-family: overFont;font-size:70px;">SKINS</h1>
      </div>
    </div>
  </div>
</header>



<section class="py-5">
  <div class="container">
      
    <div class="row">
        <div class="col-xl-12 text-center col-centered" style="background-color: #C4C4C4; width: 60%;"><h2>ANO NOVO LUNAR</h2></div>
    </div> 
    
    <div class="row" style="margin-top: 20px;">
    <div class="col-12">
        <div class="h3 text-warning fst-italic text-center">Lendárias</div>
    </div>
    </div>
    
    <div class="owl-carousel owl-theme owl-2 pt-3">
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004AA5.jpg" data-lightbox="anoNovo" data-title="Caçadora de tigre">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004AA5.jpg" alt="Caçadora de tigre" title="Caçadora de tigre">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">Caçadora de tigre</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004B17.jpg" data-lightbox="anoNovo" data-title="Fogo do drago">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004B17.jpg" alt="Fogo do dragao" title="Fogo do dragao">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">Fogo do Dragao</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004ACF.jpg" data-lightbox="anoNovo" data-title="KKACHI">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004ACF.jpg" alt="KKACHI" title="KKACHI">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">Kkachi</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004AD5.jpg" data-lightbox="anoNovo" data-title="SERPENTE BRANCA">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004AD5.jpg" alt="SERPENTE BRANCA" title="SERPENTE BRANCA">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">Serpente Branca</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004AE7.jpg" data-lightbox="anoNovo" data-title="TOURO DEMONIACO">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004AE7.jpg" alt="TOURO DEMONIACO" title="TOURO DEMONIACO">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">Touro Mecanico</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x025000000000297F.jpg" data-lightbox="anoNovo" data-title="DANÇARINA MASCARADA">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x025000000000297F.jpg" alt="DANÇARINA MASCARADA" title="DANÇARINA MASCARADA">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">Dançarina Mascarada</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x025000000000296D.jpg" data-lightbox="anoNovo" data-title="MIL FACES">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x025000000000296D.jpg" alt="MIL FACES" title="MIL FACES">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">Mil Faces</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000002956.jpg" data-lightbox="anoNovo" data-title="SAMUL NORI">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000002956.jpg" alt="SAMUL NORI" title="SAMUL NORI">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">Samul Nori</div>
                  </div>
                </div>
        </div>
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x02500000000028C7.jpg" data-lightbox="anoNovo" data-title="PERA">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x02500000000028C7.jpg" alt="PERA" title="PERA">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">Pera</div>
                  </div>
                </div>
        </div>
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000001B3E.jpg" data-lightbox="anoNovo" data-title="GUAN YU">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000001B3E.jpg" alt="GUAN YU" title="GUAN YU">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">Guan Yu</div>
                  </div>
                </div>
        </div>
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000001BC2.jpg" data-lightbox="anoNovo" data-title="HONG GILDONG">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000001BC2.jpg" alt="HONG GILDONG" title="HONG GILDONG">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">Hong Gildong</div>
                  </div>
                </div>
        </div>
    </div>    
    
    
    <div class="row" style="margin-top: 20px;">
    <div class="col-12">
        <div class="h3 fst-italic text-center" style="color: #ed3cef;">Epicas</div>
    </div>
    </div>
    
    <div class="owl-carousel owl-theme owl-2 pt-3">
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000D55.jpg" data-lightbox="anoNovoEpico" data-title="fogos de artificio">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000D55.jpg" alt="fogos de artificio" title="fogos de artificio">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">fogos de artificio</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000D53.jpg" data-lightbox="anoNovoEpico" data-title="fortuna">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000D53.jpg" alt="fortuna" title="fortuna">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">fortuna</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000E63.jpg" data-lightbox="anoNovoEpico" data-title="galo">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000E63.jpg" alt="galo" title="galo">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">galo</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000D54.jpg" data-lightbox="anoNovoEpico" data-title="qipao">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000D54.jpg" alt="qipao" title="qipao">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">qipao</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000E54.jpg" data-lightbox="anoNovoEpico" data-title="rosa">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000E54.jpg" alt="rosa" title="rosa">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">rosa</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000E5F.jpg" data-lightbox="anoNovoEpico" data-title="tal">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000E5F.jpg" alt="tal" title="tal">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">tal</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000002530.jpg" data-lightbox="anoNovoEpico" data-title="general">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000002530.jpg" alt="general" title="general">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">general</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000002468.jpg" data-lightbox="anoNovoEpico" data-title="sanye">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000002468.jpg" alt="sanye" title="sanye">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">sanye</div>
                  </div>
                </div>
        </div>
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004B34.jpg" data-lightbox="anoNovoEpico" data-title="xiake">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004B34.jpg" alt="xiake" title="xiake">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">xiake</div>
                  </div>
                </div>
        </div>
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004BCE.jpg" data-lightbox="anoNovoEpico" data-title="xiake">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004BCE.jpg" alt="médico da terracota" title="médico da terracota">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">médico da terracota</div>
                  </div>
                </div>
        </div>
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004BCF.jpg" data-lightbox="anoNovoEpico" data-title="xiake">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004BCF.jpg" alt="guarda imperial" title="guarda imperial">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">guarda imperial</div>
                  </div>
                </div>
        </div>
    </div>    
    
    
    <!-------- ============= ---------->
    
    <div class="row">
        <div class="col-xl-12 text-center col-centered" style="background-color: #C4C4C4; width: 60%;"><h2>ANIVERSÁRIO</h2></div>
    </div> 
    
    <div class="row" style="margin-top: 20px;">
    <div class="col-12">
        <div class="h3 text-warning fst-italic text-center">Lendrias</div>
    </div>
    </div>
    
    <div class="owl-carousel owl-theme owl-2 pt-3">
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000002AB6.jpg" data-lightbox="aniversario" data-title="gata preta">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000002AB6.jpg" alt="gata preta" title="gata preta">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">gata preta</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004965.jpg" data-lightbox="aniversario" data-title="gladiador">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004965.jpg" alt="gladiador" title="gladiador">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">gladiador</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004BCA.jpg" data-lightbox="aniversario" data-title="Junkfood">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004BCA.jpg" alt="Junkfood" title="Junkfood">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">Junkfood</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004A21.jpg" data-lightbox="aniversario" data-title="modernoso">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004A21.jpg" alt="modernoso" title="modernoso">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">modernoso</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004C60.jpg" data-lightbox="aniversario" data-title="venus">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004C60.jpg" alt="venus" title="venus">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">venus</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000002B1A.jpg" data-lightbox="aniversario" data-title="baile das mascaras">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000002B1A.jpg" alt="baile das mascaras" title="baile das mascaras">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">baile das mascaras</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x02500000000046C6.jpg" data-lightbox="aniversario" data-title="chapeuzinho vermelho">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x02500000000046C6.jpg" alt="chapeuzinho vermelho" title="chapeuzinho vermelho">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">chapeuzinho vermelho</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004668.jpg" data-lightbox="aniversario" data-title="Huitzilopochtli">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004668.jpg" alt="Huitzilopochtli" title="Huitzilopochtli">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">Huitzilopochtli</div>
                  </div>
                </div>
        </div>
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000002535.jpg" data-lightbox="aniversario" data-title="estudante">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000002535.jpg" alt="estudante" title="estudante">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">estudante</div>
                  </div>
                </div>
        </div>
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000002501.jpg" data-lightbox="aniversario" data-title="gargula">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000002501.jpg" alt="gargula" title="gargula">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">gargula</div>
                  </div>
                </div>
        </div>
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000002462.jpg" data-lightbox="aniversario" data-title="toxico">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000002462.jpg" alt="toxico" title="toxico">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">toxico</div>
                  </div>
                </div>
        </div>
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x025000000000156A.jpg" data-lightbox="aniversario" data-title="magica">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x025000000000156A.jpg" alt="magica" title="magica">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">magica</div>
                  </div>
                </div>
        </div>
    </div>    
    
    
    <div class="row" style="margin-top: 20px;">
    <div class="col-12">
        <div class="h3 fst-italic text-center" style="color: #ed3cef;">Epicas</div>
    </div>
    </div>
    
    <div class="owl-carousel owl-theme owl-2 pt-3">
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004BC9.jpg" data-lightbox="aniversarioEpico" data-title="ave do paraiso">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004BC9.jpg" alt="ave do paraiso" title="ave do paraiso">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">ave do paraiso</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004B31.jpg" data-lightbox="aniversarioEpico" data-title="bola 8">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004B31.jpg" alt="bola 8" title="bola 8">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">bola 8</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004BD8.jpg" data-lightbox="aniversarioEpico" data-title="cibermedica">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004BD8.jpg" alt="cibermedica" title="cibermedica">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">cibermedica</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x02500000000028AF.jpg" data-lightbox="aniversarioEpico" data-title="eletrica">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x02500000000028AF.jpg" alt="eletrica" title="eletrica">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">eletrica</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x02500000000027E4.jpg" data-lightbox="aniversarioEpico" data-title="fibra de carbono">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x02500000000027E4.jpg" alt="fibra de carbono" title="fibra de carbono">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">fibra de carbono</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000002821.jpg" data-lightbox="aniversarioEpico" data-title="meia-noite">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000002821.jpg" alt="meia-noite" title="meia-noite">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">meia-noite</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000001955.jpg" data-lightbox="aniversarioEpico" data-title="bitrate">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000001955.jpg" alt="bitrate" title="bitrate">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">bitrate</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000002829.jpg" data-lightbox="aniversarioEpico" data-title="fibra de carbono">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000002829.jpg" alt="fibra de carbono" title="fibra de carbono">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">fibra de carbono</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000002871.jpg" data-lightbox="aniversarioEpico" data-title="oro">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000002871.jpg" alt="oro" title="oro">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">oro</div>
                  </div>
                </div>
        </div>
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000001954.jpg" data-lightbox="aniversarioEpico" data-title="raio">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000001954.jpg" alt="raio" title="raio">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">raio</div>
                  </div>
                </div>
        </div>
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x025000000000194F.jpg" data-lightbox="aniversarioEpico" data-title="veneno">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x025000000000194F.jpg" alt="veneno" title="veneno">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">veneno</div>
                  </div>
                </div>
        </div>
    </div>    
    
     <!-------- ============= ---------->
    
    <div class="row">
        <div class="col-xl-12 text-center col-centered" style="background-color: #C4C4C4; width: 60%;"><h2>JOGOS DE VERO</h2></div>
    </div> 
    
    <div class="row" style="margin-top: 20px;">
    <div class="col-12">
        <div class="h3 text-warning fst-italic text-center">Lendárias</div>
    </div>
    </div>
    
    <div class="owl-carousel owl-theme owl-2 pt-3">
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x02500000000048C3.jpg" data-lightbox="verao" data-title="carate">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x02500000000048C3.jpg" alt="carate" title="carate">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">carate</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x025000000000484E.jpg" data-lightbox="verao" data-title="feskarn">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x025000000000484E.jpg" alt="feskarn" title="feskarn">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">feskarn</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x025000000000499E.jpg" data-lightbox="verao" data-title="pegando onda">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x025000000000499E.jpg" alt="pegando onda" title="pegando onda">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">pegando onda</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004667.jpg" data-lightbox="verao" data-title="salva-vidas">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004667.jpg" alt="salva-vidas" title="salva-vidas">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">salva-vidas</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004891.jpg" data-lightbox="verao" data-title="tropical">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004891.jpg" alt="tropical" title="tropical">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">tropical</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x025000000000172D.jpg" data-lightbox="verao" data-title="kendoka">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x025000000000172D.jpg" alt="kendoka" title="kendoka">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">kendoka</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x025000000000255A.jpg" data-lightbox="verao" data-title="luciobol">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x025000000000255A.jpg" alt="luciobol" title="luciobol">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">luciobol</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000002534.jpg" data-lightbox="verao" data-title="na crista da onda">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000002534.jpg" alt="na crista da onda" title="na crista da onda">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">na crista da onda</div>
                  </div>
                </div>
        </div>
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000001981.jpg" data-lightbox="verao" data-title="onda">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000001981.jpg" alt="onda" title="onda">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">onda</div>
                  </div>
                </div>
        </div>
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000001095.jpg" data-lightbox="verao" data-title="vitoria alada">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000001095.jpg" alt="vitoria alada" title="vitoria alada">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">vitoria alada</div>
                  </div>
                </div>
        </div>
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000001062.jpg" data-lightbox="verao" data-title="cabana">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000001062.jpg" alt="cabana" title="cabana">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">cabana</div>
                  </div>
                </div>
        </div>
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000001716.jpg" data-lightbox="verao" data-title="gridironhardt">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000001716.jpg" alt="gridironhardt" title="gridironhardt">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">gridironhardt</div>
                  </div>
                </div>
        </div>
    </div>    
    
    
    <div class="row" style="margin-top: 20px;">
    <div class="col-12">
        <div class="h3 fst-italic text-center" style="color: #ed3cef;">Epicas</div>
    </div>
    </div>
    
    <div class="owl-carousel owl-theme owl-2 pt-3">
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x02500000000049E3.jpg" data-lightbox="veraoEpico" data-title="castelinho de areia">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x02500000000049E3.jpg">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">castelinho de areia</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x02500000000049F0.jpg" data-lightbox="veraoEpico" data-title="sorvete">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x02500000000049F0.jpg">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">sorvete</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x02500000000049E8.jpg" data-lightbox="veraoEpico" data-title="union jack">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x02500000000049E8.jpg" alt="union jack" title="union jack">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">union jack</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000B1D.jpg" data-lightbox="veraoEpico" data-title="americano">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000B1D.jpg" alt="americano" title="americano">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">americano</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000001A3C.jpg" data-lightbox="veraoEpico" data-title="mexicana">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000001A3C.jpg" alt="mexicana" title="mexicana">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">mexicana</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000001A3B.jpg" data-lightbox="veraoEpico" data-title="tre konor">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000001A3B.jpg" alt="tre konor" title="tre konor">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">tre konor</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000001A3A.jpg" data-lightbox="veraoEpico" data-title="ireannach">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000001A3A.jpg" alt="ireannach" title="ireannach">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">ireannach</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000B25.jpg" data-lightbox="veraoEpico" data-title="eidgenossin">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000B25.jpg" alt="eidgenossin" title="eidgenossin">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">eidgenossin</div>
                  </div>
                </div>
        </div>
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000B26.jpg" data-lightbox="veraoEpico" data-title="nihon">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000B26.jpg" alt="nihon" title="nihon">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">nihon</div>
                  </div>
                </div>
        </div>
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000B28.jpg" data-lightbox="veraoEpico" data-title="taegeukgi">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000B28.jpg" alt="taegeukgi" title="taegeukgi">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">taegeukgi</div>
                  </div>
                </div>
        </div>
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000B27.jpg" data-lightbox="veraoEpico" data-title="tre konor">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000B27.jpg" alt="tre konor" title="tre konor">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">tre konor</div>
                  </div>
                </div>
        </div>
    </div>
    
    <!-------- ============= ---------->
    
    <div class="row">
        <div class="col-xl-12 text-center col-centered" style="background-color: #C4C4C4; width: 60%;"><h2>TERROR DE HALLOWEEN</h2></div>
    </div> 
    
    <div class="row" style="margin-top: 20px;">
    <div class="col-12">
        <div class="h3 text-warning fst-italic text-center">Lendrias</div>
    </div>
    </div>
    
    <div class="owl-carousel owl-theme owl-2 pt-3">
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004877.jpg" data-lightbox="halloween" data-title="dai-tengu">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004877.jpg" alt="dai-tengu" title="dai-tengu">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">dai-tengu</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x02500000000049D6.jpg" data-lightbox="halloween" data-title="holandes voador">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x02500000000049D6.jpg" alt="holandes voador" title="holandes voador">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">holandes voador</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004780.jpg" data-lightbox="halloween" data-title="karasu-tengu">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004780.jpg" alt="karasu-tengu" title="karasu-tengu">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">karasu-tengu</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x02500000000049B5.jpg" data-lightbox="halloween" data-title="lobisgorila">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x02500000000049B5.jpg" alt="lobisgorila" title="lobisgorila">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">lobisgorila</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x02500000000049E1.jpg" data-lightbox="halloween" data-title="shin-ryeong">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x02500000000049E1.jpg" alt="shin-ryeong" title="shin-ryeong">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">shin-ryeong</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000001A3F.jpg" data-lightbox="halloween" data-title="demnio">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000001A3F.jpg" alt="demnio">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">demnio</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000002A94.jpg" data-lightbox="halloween" data-title="escorpiao">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000002A94.jpg" alt="escorpiao" title="escorpiao">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">escorpiao</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x025000000000277F.jpg" data-lightbox="halloween" data-title="farao">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x025000000000277F.jpg" alt="farao" title="farao">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">farao</div>
                  </div>
                </div>
        </div>
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000002795.jpg" data-lightbox="halloween" data-title="feiticeira">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000002795.jpg" alt="feiticeira" title="feiticeira">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">feiticeira</div>
                  </div>
                </div>
        </div>
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000001968.jpg" data-lightbox="halloween" data-title="fogo-fatuo">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000001968.jpg" alt="fogo-fatuo" title="fogo-fatuo">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">fogo-fatuo</div>
                  </div>
                </div>
        </div>
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x025000000000194D.jpg" data-lightbox="halloween" data-title="armadura encantada">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x025000000000194D.jpg" alt="armadura encantada" title="armadura encantada">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">armadura encantada</div>
                  </div>
                </div>
        </div>
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000001A39.jpg" data-lightbox="halloween" data-title="banshee">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000001A39.jpg" alt="banshee" title="banshee">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">banshee</div>
                  </div>
                </div>
        </div>
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000001187.jpg" data-lightbox="halloween" data-title="cultista">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000001187.jpg" alt="cultista" title="cultista">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">cultista</div>
                  </div>
                </div>
        </div>
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x025000000000172A.jpg" data-lightbox="halloween" data-title="sexta-feira 76">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x025000000000172A.jpg" alt="sexta-feira 76" title="sexta-feira 76">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">sexta-feira 76</div>
                  </div>
                </div>
        </div>
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000BEE.jpg" data-lightbox="halloween" data-title="dragonesa">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000BEE.jpg" alt="dragonesa" title="dragonesa">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">dragonesa</div>
                  </div>
                </div>
        </div>
    </div>    
    
    
    <div class="row" style="margin-top: 20px;">
    <div class="col-12">
        <div class="h3 fst-italic text-center" style="color: #ed3cef;">Epicas</div>
    </div>
    </div>
    
    <div class="owl-carousel owl-theme owl-2 pt-3">
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004AD6.jpg" data-lightbox="halloweenEpica" data-title="boneca de trapos">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004AD6.jpg" alt="boneca de trapos" title="boneca de trapos">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">boneca de trapos</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004A07.jpg" data-lightbox="halloweenEpica" data-title="fantasma">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004A07.jpg" alt="fantasma" title="fantasma">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">fantasma</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004A89.jpg" data-lightbox="halloweenEpica" data-title="gigante de pedra">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004A89.jpg" alt="gigante de pedra" title="gigante de pedra">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">gigante de pedra</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000002AA1.jpg" data-lightbox="halloweenEpica" data-title="gorgona">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000002AA1.jpg" alt="gorgona" title="gorgona">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">gorgona</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000001B2F.jpg" data-lightbox="halloweenEpica" data-title="abobora">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000001B2F.jpg" alt="abobora" title="abobora">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">abobora</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000001B3D.jpg" data-lightbox="halloweenEpica" data-title="aranha">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000001B3D.jpg" alt="aranha" title="aranha">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">aranha</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000001B4C.jpg" data-lightbox="halloweenEpica" data-title="morto-vivo">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000001B4C.jpg" alt="morto-vivo" title="morto-vivo">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">morto-vivo</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000C8A.jpg" data-lightbox="halloweenEpica" data-title="coldhardt">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000C8A.jpg" alt="coldhardt" title="coldhardt">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">coldhardt</div>
                  </div>
                </div>
        </div>
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000C6D.jpg" data-lightbox="halloweenEpica" data-title="craniatta">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000C6D.jpg" alt="craniatta" title="craniatta">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">craniatta</div>
                  </div>
                </div>
        </div>
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000C68.jpg" data-lightbox="halloweenEpica" data-title="craniatta">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000C68.jpg" alt="craniatta" title="craniatta">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">demonio</div>
                  </div>
                </div>
        </div>
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000C71.jpg" data-lightbox="halloweenEpica" data-title="imortal">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000C71.jpg" alt="imortal" title="imortal">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">imortal</div>
                  </div>
                </div>
        </div>
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000C6C.jpg" data-lightbox="halloweenEpica" data-title="possuida">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000C6C.jpg" alt="possuida" title="possuida">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">possuida</div>
                  </div>
                </div>
        </div>
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000C69.jpg" data-lightbox="halloweenEpica" data-title="lapide">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000C69.jpg" alt="lapide" title="lapide">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">lapide</div>
                  </div>
                </div>
        </div>
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000C6A.jpg" data-lightbox="halloweenEpica" data-title="vampira">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000C6A.jpg" alt="vampira" title="vampira">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">vampira</div>
                  </div>
                </div>
        </div>
    </div>
    
      <!-------- ============= ---------->
    
    <div class="row">
        <div class="col-xl-12 text-center col-centered" style="background-color: #C4C4C4; width: 60%;"><h2>PARASO CONGELADO</h2></div>
    </div> 
    
    <div class="row" style="margin-top: 20px;">
    <div class="col-12">
        <div class="h3 text-warning fst-italic text-center">Lendárias</div>
    </div>
    </div>
    
    <div class="owl-carousel owl-theme owl-2 pt-3">
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004A28.jpg" data-lightbox="paraiso" data-title="brinquedo robtico">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004A28.jpg" alt="brinquedo robtico" title="brinquedo robtico">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">brinquedo robtico</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004AF2.jpg" data-lightbox="paraiso" data-title="imperatriz do gelo">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004AF2.jpg" alt="imperatriz do gelo" title="imperatriz do gelo">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">imperatriz do gelo</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004ACE.jpg" data-lightbox="paraiso" data-title="lenhador">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004ACE.jpg" alt="lenhador" title="lenhador">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">lenhador</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x02500000000048C2.jpg" data-lightbox="paraiso" data-title="maquinista">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x02500000000048C2.jpg" alt="maquinista" title="maquinista">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">maquinista</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x025000000000491F.jpg" data-lightbox="paraiso" data-title="pinquim">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x025000000000491F.jpg" alt="pinquim" title="pinquim">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">pinquim</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x02500000000027BB.jpg" data-lightbox="paraiso" data-title="jutunn">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x02500000000027BB.jpg" alt="jutunn" title="jutunn">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">jutunn</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x02500000000029A0.jpg" data-lightbox="paraiso" data-title="rei rato">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x02500000000029A0.jpg" alt="rei rato" title="rei rato">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">rei rato</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000002A8A.jpg" data-lightbox="paraiso" data-title="sincelo">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000002A8A.jpg" alt="sincelo" title="sincelo">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">sincelo</div>
                  </div>
                </div>
        </div>
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000CF9.jpg" data-lightbox="paraiso" data-title="mei natalina">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000CF9.jpg" alt="mei natalina" title="mei natalina">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">mei natalina</div>
                  </div>
                </div>
        </div>
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000C31.jpg" data-lightbox="paraiso" data-title="santaclad">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000C31.jpg" alt="santaclad" title="santaclad">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">santaclad</div>
                  </div>
                </div>
        </div>
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000BF1.jpg" data-lightbox="paraiso" data-title="yeti">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000BF1.jpg" alt="yeti" title="yeti">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">yeti</div>
                  </div>
                </div>
        </div>
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x025000000000194E.jpg" data-lightbox="paraiso" data-title="krampus">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x025000000000194E.jpg" alt="krampus" title="krampus">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">krampus</div>
                  </div>
                </div>
        </div>
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000001F4E.jpg" data-lightbox="paraiso" data-title="raposa da neve">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000001F4E.jpg" alt="raposa da neve" title="raposa da neve">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">raposa da neve</div>
                  </div>
                </div>
        </div>
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000001257.jpg" data-lightbox="paraiso" data-title="geada">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000001257.jpg" alt="geada" title="geada">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">geada</div>
                  </div>
                </div>
        </div>
    </div>    
    
    
    <div class="row" style="margin-top: 20px;">
    <div class="col-12">
        <div class="h3 fst-italic text-center" style="color: #ed3cef;">Epicas</div>
    </div>
    </div>
    
    <div class="owl-carousel owl-theme owl-2 pt-3">
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000CFC.jpg" data-lightbox="paraisoEpico" data-title="rudolph">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000CFC.jpg" alt="rudolph" title="rudolph">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">rudolph</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000CFB.jpg" data-lightbox="paraisoEpico" data-title="glida">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000CFB.jpg" alt="glida" title="glida">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">glida</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000CFD.jpg" data-lightbox="paraisoEpico" data-title="calafrio">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000CFD.jpg" alt="calafrio" title="calafrio">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">calafrio</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000CFE.jpg" data-lightbox="paraisoEpico" data-title="avarento">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000CFE.jpg" alt="avarento" title="avarento">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">avarento</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x02500000000024D9.jpg" data-lightbox="paraisoEpico" data-title="pra presente">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x02500000000024D9.jpg" alt="pra presente" title="pra presente">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">pra presente</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000002467.jpg" data-lightbox="paraisoEpico" data-title="inverno">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000002467.jpg" alt="inverno" title="inverno">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">inverno</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000002460.jpg" data-lightbox="paraisoEpico" data-title="festivo">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000002460.jpg" alt="festivo" title="festivo">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">festivo</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004AD4.jpg" data-lightbox="paraisoEpico" data-title="nevado">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004AD4.jpg" alt="nevado" title="nevado">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">nevado</div>
                  </div>
                </div>
        </div>
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004AA3.jpg" data-lightbox="paraisoEpico" data-title="duende">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004AA3.jpg" alt="duende" title="duende">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">duende</div>
                  </div>
                </div>
        </div>
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004ACD.jpg" data-lightbox="paraisoEpico" data-title="biscoito de gengibre">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004ACD.jpg" alt="biscoito de gengibre" title="biscoito de gengibre">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">biscoito de gengibre</div>
                  </div>
                </div>
        </div>
    </div>
    
    <!-------- ============= ---------->
    
    <div class="row">
        <div class="col-xl-12 text-center col-centered" style="background-color: #C4C4C4; width: 60%;"><h2>ARQUIVOS</h2></div>
    </div> 
    
    <div class="row" style="margin-top: 20px;">
    <div class="col-12">
        <div class="h3 text-warning fst-italic text-center">Lendárias</div>
    </div>
    </div>
    
    <div class="owl-carousel owl-theme owl-2 pt-3">
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004AA1.jpg" data-lightbox="arquivos" data-title="soldado: 1776">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004AA1.jpg">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">soldado: 1776</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004ADD.jpg" data-lightbox="arquivos" data-title="bushi">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004ADD.jpg" alt="bushi" title="bushi">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">bushi</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x02500000000028A8.jpg" data-lightbox="arquivos" data-title="cavalaria">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x02500000000028A8.jpg" alt="cavalaria" title="cavalaria">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">cavalaria</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000002AB5.jpg" data-lightbox="arquivos" data-title="aviadora">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000002AB5.jpg" alt="aviadora" title="aviadora">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">aviadora</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x025000000000245C.jpg" data-lightbox="arquivos" data-title="deadlock">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x025000000000245C.jpg" alt="deadlock" title="deadlock">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">deadlock</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000D05.jpg" data-lightbox="arquivos" data-title="blackwatch">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000D05.jpg" alt="blackwatch" title="blackwatch">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">blackwatch</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000F91.jpg" data-lightbox="arquivos" data-title="blackwatch">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000F91.jpg" alt="blackwatch" title="blackwatch">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">blackwatch</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000F77.jpg" data-lightbox="arquivos" data-title="cadete oxton">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000F77.jpg" alt="cadete oxton" title="cadete oxton">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">cadete oxton</div>
                  </div>
                </div>
        </div>
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000F8E.jpg" data-lightbox="arquivos" data-title="medica de combate ziegler">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000F8E.jpg" alt="medica de combate ziegler" title="medica de combate ziegler">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">medica de combate ziegler</div>
                  </div>
                </div>
        </div>
    </div>    
    
    
    <div class="row" style="margin-top: 20px;">
    <div class="col-12">
        <div class="h3 fst-italic text-center" style="color: #ed3cef;">Epicas</div>
    </div>
    </div>
    
    <div class="owl-carousel owl-theme owl-2 pt-3">
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004C1A.jpg" data-lightbox="arquivosEpica" data-title="camuflagem">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004C1A.jpg" alt="camuflagem" title="camuflagem">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">camuflagem</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004C00.jpg" data-lightbox="arquivosEpica" data-title="corredor">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004C00.jpg" alt="corredor" title="corredor">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">corredor</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004BD6.jpg" data-lightbox="arquivosEpica" data-title="subaqutico">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000004BD6.jpg" alt="subaqutico" title="subaqutico">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">subaqutico</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x02500000000028A6.jpg" data-lightbox="arquivosEpica" data-title="circo">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x02500000000028A6.jpg" alt="circo" title="circo">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">circo</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000002830.jpg" data-lightbox="arquivosEpica" data-title="ostentao">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000002830.jpg" alt="ostentao" title="ostentao">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">ostentao</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x025000000000286F.jpg" data-lightbox="arquivosEpica" data-title="piloto">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x025000000000286F.jpg" alt="piloto" title="piloto">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">piloto</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000FE8.jpg" data-lightbox="arquivosEpica" data-title="setor nulo">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000FE8.jpg" alt="setor nulo" title="setor nulo">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">setor nulo</div>
                  </div>
                </div>
        </div>
        
        <div class="item">
            <a href="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000FD9.jpg" data-lightbox="arquivosEpica" data-title="tenente wilhelm">
                <img src="https://d1u1mce87gyfbn.cloudfront.net/game/skins/0x0250000000000FD9.jpg" alt="tenente wilhelm" title="tenente wilhelm">
            </a>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title h6">tenente wilhelm</div>
                  </div>
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
    loop: true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
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