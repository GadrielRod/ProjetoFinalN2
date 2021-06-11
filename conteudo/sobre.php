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
  <title>OverFans - Sobre</title>
  <link rel="icon" type="image/x-icon" href="../img/overwatch-icon.ico">
  <style>
    .masthead {
      height: 100vh;
      min-height: 500px;
      background-image: url('https://i.imgur.com/4bXN4Go.jpg'); /*imagem do topo*/
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }
    .col-centered{
        float: none;
        margin: 0 auto;
    }
    </style>
    <script>
        function opiniao(){
    			var nome = document.getElementById('nome').value;
				var comentario = document.getElementById('comentario').value;

				alert("Nome: "+ nome + "\nSeu comentário: " + comentario);
			}
    </script>
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
            <a class="nav-link" href="skins.php">Skins</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="patches.php">Patches</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#">Sobre</a>
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
        <h1 class="font-weight-light gradient-text" style="font-family: overFont;font-size:70px;">SOBRE</h1>
      </div>
    </div>
  </div>
</header>


<section class="py-5">
  <div class="container">
      
    <div class="row">
        <div class="col-sm-12 text-center" style="background: #353c42;color:white;padding:5px;border-radius:5px;">    
            <p>
                Overwatch é um jogo de tiro em equipe que conta com um elenco diversificado de heróis poderosíssimos. Viaje pelo mundo, monte uma equipe e dispute objetivos em combates 6v6 de tirar o fôlego.
            </p>
            <p>
                Ao entrar em uma partida de Overwatch, você precisa escolher um herói para jogar. Talvez um gorila da lua munido de uma bazuca lhe parea atraente. Talvez você prefira uma revolucionária que viaja no tempo. Ou será que um DJ com batidas matadoras faz mais o seu estilo? Não importa quem voc queira ser, na certa há um herói de Overwatch para você.
            </p>
        </div>
        <hr>
        <div class="col-sm-6 text-center col-centered">
         <h5 class="text-center" style="background: steelblue;color: white;padding:5px;">Deixe sua opinião abaixo para melhorarmos o site</h5>
        </div>
    </div>
    
    <div class="row">
      <div class="col-sm-7  col-centered">  
        <form method="POST">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome" required>
             </div>
             
             <div class="form-group">
                <label>E-mail</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Digite seu e-mail" required>
             </div>
             
              <div class="form-group">
                <label>Comentário</label>
                <textarea type="text" class="form-control" name="comentario" id="comentario" placeholder="Digite seu comentário" required></textarea>
             </div>
             <hr>
            <button style="float: right;" type="submit" class="btn btn-primary" onclick="opiniao();">Enviar opinião</button>
        </form>
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