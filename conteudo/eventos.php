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
    
      <title>OverFans - Eventos</title>
      <link rel="icon" type="image/x-icon" href="../img/overwatch-icon.ico">
       <style>
        .masthead {
          height: 100vh;
          min-height: 500px;
          background-image: url('../img/eventos/genji.jpg'); /*imagem do topo*/
          background-size: cover;
          background-position: center;
          background-repeat: no-repeat;
        }
    </style>
    </head>
    <body>
        <!--Incio navbar-->
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
             <a class="navbar-brand" href="../index.php"><img src="../img/logo--overwatch.svg" alt="" width="30" height="30"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link " aria-current="page" href="../index.php">Incio</a>
                </li>
        
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Eventos
                  </a>
                  <ul class="dropdown-menu bg-dark border-0" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item text-white active" href="#">Eventos</a></li>
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
                <h1 class="font-weight-light gradient-text" style="font-family: overFont;font-size:70px;">EVENTOS</h1>
              </div>
            </div>
          </div>
        </header>
        <!--Header-->
        
        <div class="container">
            
            <h3 style="text-align:center; margin-top:4%;">Todo ano acontecem eventos no mundo de Overwatch, que tm relação com a data, como ,por exemplo, o ano novo lunar, paraiso congelado e hallowen. Cada evento lança skins sobre o tema, onde os players podem comprar jogando.</h3>
            
            <!--Ano novo lunar-->
            <div class="row">
                <div class="col-md-12">
                    <img src="../img/eventos/anonovoeventos2.png" class="img-fluid" alt="ano-novo-lunar-foto" title="ano-novo-lunar-foto" style="margin-top:4%; width:100%">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p style="border: 3px solid #007DD1; padding:2%;margin-top:2%; text-align:justify">Para se correlacionar com o Ano Novo Chinês do mundo real, o evento Overwatch  realizado na mesma poca (normalmente do final de janeiro ao início de fevereiro) e tem o nome de acordo com o Zodaco Chinês; por exemplo, o primeiro evento que ocorreu em 2017 foi denominado "Ano do Galo". Os cosméticos presentes nesses eventos seguiram os temas das lendas chinesas. O evento introduziu o primeiro modo Capture the Flag para Overwatch chamado "Capture the Rooster"; A Blizzard tentou adicionar tal modo por alguns anos durante o desenvolvimento de Overwatch, mas teve dificuldade com a mecnica devido ao conjunto muito diferente de habilidades oferecidas pelos personagens que poderiam desequilibrar o modo para personagens de movimento rpido. Jogado no mapa da Torre Lijiang, normalmente usado para os modos de controle, cada time tem uma bandeira perto de sua base. Para capturar a bandeira do outro oponente, o personagem deve ficar perto da bandeira e no sofrer danos por alguns segundos. Depois de pegar a bandeira, eles devem devolvê-la à base de sua equipe, marcando um ponto se o fizerem. Se morrerem trazendo a bandeira de volta, ou um colega pode tentar capturá-la, ou a equipe adversária deve ficar perto da bandeira, evitando sofrer danos por alguns segundos, para devolv-la à sua base. As equipes podem pontuar com a bandeira da equipe adversária, mesmo que a bandeira de sua equipe tenha sido pega. A primeira equipe a três pontuações, ou a equipe com a pontuação mais alta após cinco minutos, vence a partida. Aps o evento, a Blizzard introduziu um modo Capture the Flag mais geral, jogável em qualquer um dos mapas de controle, nos modos Arcade, além de torná-lo uma opção para jogos personalizados com vrios parmetros ajustveis.
            
                    Um segundo novo modo, Bounty Hunter Brawl, foi adicionado no ano novo chins de 2021. Este modo é semelhante ao modo deathmatch, exceto que os jogadores ganham mais pontos eliminando o jogador atual que est marcado como alvo; o jogador que acerta o golpe final se torna o novo alvo, cuja localizaão é visvel para todos, mas eles tambm ganham sade total e obtêm um medidor de habilidade Ultimate completo. Aps o evento, o Bounty Hunter Brawl também foi adicionado como um modo para o jogo Arcade. O modo Bounty Hunter Brawl foi desenvolvido pela Blizzard enquanto brincava com uma abordagem gratuita para o modo Capture the Flag e eliminando o objetivo da bandeira enquanto ainda rastreia um jogador alvo.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div style="background-image: url(../img/eventos/anonovo.png); text-align: center;height:100%;"><a href="skins.php" style="text-decoration: none; color:white">Clique aqui para ver todas as skins j lanadas nesse evento.</a></div>
                </div>
            </div>
            <!--Ano novo lunar-->
            
            <!--Arquivos-->
            <div class="row">
                <div class="col-md-12">
                    <img src="../img/eventos/arquivoeventos2.png" class="img-fluid" alt="arquivos-foto" title="arquivos-foto" style="margin-bottom:-4%; width:100%">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p style="border: 3px solid #007DD1; padding:2%; text-align:justify">Os eventos Overwatch Archive são normalmente realizados em abril do ano e apresentam modos de arquivo cooperativos baseados na história e modos de Archive que a Blizzard usou para explorar a história dos personagens e narrativa. De acordo com Kaplan, os modos Archive eram algo que a Blizzard sentia que tinha solicitado pelos jogadores desde que começaram a oferecer os eventos sazonais. Os jogadores solicitaram eventos no temáticos de feriado, bem como buscaram mais detalhes sobre o cenário e a história do mundo Overwatch. Além disso, esses eventos adicionam itens cosméticos adicionais com base nos uniformes e na história das forças originais do Overwatch. Junto com o evento foram lanados quadrinhos digitais atrelados à narrativa da modalidade.

                    Nos eventos de arquivo normais, os jogadores selecionam entre quatro personagens pr-selecionados e, em seguida, lutam conforme orientado pela narração do jogo para atacar ou defender pontos das foras inimigas. Se um jogador foi derrubado, qualquer um dos outros jogadores sobreviventes poderia ajudá-lo interagindo com aquele personagem por alguns momentos. Se todos os quatro jogadores forem abatidos ou o explosivo for destrudo antes de chegar s portas seladas, a rodada termina como uma perda. Um modo separado permitia que os jogadores completassem a mesma misso sem serem limitados na seleço de personagens, mas sem nenhum dos caracteres específicos dilogo; A Blizzard adicionou isso com base no feedback de Junkenstein's Revenge, para fornecer uma maneira menos restritiva de aproveitar o modo de jogo. Para os primeiros trs anos do evento Arquivos, a Blizzard adicionou uma nova misso, enquanto no quarto ano, eles adicionaram variantes especiais destes missões que alteraram as condiões da partida, como quando a saúde de cada heri  reduzida pela metade, mas eles causam o dobro de danos.

                    O modo Archive foi considerado uma versão muito melhorada de um modo jogador versus ambiente em comparaço com o Revenge from the Halloween de Junkenstein. Cecilia D'Anastasio para Kotaku sentiu que o modo era muito mais dinâmico, pois exigia que os jogadores se movessem por todo o mapa em vez de ficar em um local geral, e como os quatro personagens padrão representam uma equipe equilibrada, o modo exige um trabalho de equipe e estratgia mais cuidadosos . D'Anastasio também sentiu que com novas linhas de voz para apoiar este modo, ajudou a estabelecer a tradião do jogo para os jogadores .Elementos dessas missões de arquivo foram usados como base para desenvolver o lado cooperativo do próximo Overwatch 2.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div style="background-image: url(../img/eventos/arquivos.png); text-align: center;height:100%;"><a href="skins.php" style="text-decoration: none; color:white">Clique aqui para ver todas as skins j lanadas nesse evento.</a></div>
                </div>
            </div>
            <!--Arquivos-->
            
            <!--Aniversrio-->
            <div class="row">
                <div class="col-md-12">
                    <img src="../img/eventos/aniversarioeventos2.jpg" class="img-fluid" alt="aniversario-foto" title="aniversario-foto" style="margin-top:4%; width:100%">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p  style="border: 3px solid #007DD1; padding:2%; margin-top:2%; text-align:justify;">Correspondendo ao lançamento do jogo em maio de cada ano, o evento de aniversário apresenta vrios novos cosméticos para muitos personagens. Ele também torna todos os cosméticos especiais que normalmente so bloqueados, exceto durante os eventos especiais, disponíveis para compra com moedas do jogo e possíveis de obter através de caixas de saque. Quase todos os modos de jogo especiais de todos os eventos tambm podem ser jogados. O modo Aniversário foi usado para introduzir novos recursos importantes para o jogo após os testes na Regio de Teste Público. O primeiro evento Anniversary adicionou três novos mapas de Arena usados para os jogos Elimination de menor escala, e que permaneceram em rotação após a conclusão dos eventos, bem como adicionando novos modos de jogo Elimination. "The Workshop", um sistema baseado em script para usuários para criar seus próprios jogos, lançados junto com o evento do 3 aniversrio, com vrios dos modos de jogo de usuário mais bem-sucedidos trazidos para o Arcade para todos jogarem.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div style="background-image: url(../img/eventos/aniversario.jpg); text-align: center;height:100%;"><a href="skins.php" style="text-decoration: none; color:white">Clique aqui para ver todas as skins j lanadas nesse evento.</a></div>
                </div>
            </div>
            <!--Aniversário-->
            
            <!--Jogos de vero-->
            <div class="row">
                <div class="col-md-12">
                    <img src="../img/eventos/veraoeventos2.png" class="img-fluid" alt="jogos-de-verao-foto" title="jogos-de-verao-foto" style="width:100%">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p  style="border: 3px solid #007DD1; padding:2%; text-align:justify;">O evento "Jogos de Vero" de Overwatch foi realizado pela primeira vez simultaneamente aos Jogos Olmpicos de Verão de 2016 e, desde então, é realizado anualmente. Os eventos geralmente so temáticos em torno de esportes e atividades de verão. Durante este evento, um modo especial de jogo chamado Lúcioball estará disponível. O Lúcioball foi pensado como um jogo de futebol futurista em que dois times de trs personagens de Lúcio tentam acertar a baliza do adversário. Jogados em partidas de quatro minutos no mapa especial do estdio, Estádio das Rãs, os jogadores usam dois tipos de ataques para controlar os movimentos da bola: principalmente, um ataque corpo a corpo e um estrondo snico secundário e poderoso que também pode repelir os adversrios (frequentemente chamado "booping" pelos jogadores). Os jogadores também podem usar as vantagens ambientais do nível (por exemplo, plataformas de salto e paredes de aumento de velocidade) para garantir uma vantagem estratgica no campo. O PC Gamer sentiu que o modo parecia mais um "jogo de carnaval multijogador do que um modo autnomo desenvolvido. "</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div style="background-image: url(../img/eventos/verao.png); text-align: center;height:100%;"><a href="skins.php" style="text-decoration: none; color:white">Clique aqui para ver todas as skins j lanadas nesse evento.</a></div>
                </div>
            </div>
            <!--Jogos de verão-->
            
            <!--Hallowen-->
            <div class="row">
                <div class="col-md-12">
                    <img src="../img/eventos/halloeventos2.png" class="img-fluid" alt="hallo-foto" title="hallo-foto" style="margin-bottom: -7%; width:100%; margin-top:-7%;">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p  style="border: 3px solid #007DD1; padding:2%; text-align:justify;">Os eventos de terror do Halloween acontecem no final de outubro para celebrar o Halloween. A maioria dos novos cosméticos adicionados é baseada em monstros clssicos e tropos de terror. Durante o Halloween Terror, o modo de jogo cooperativo "Junkenstein's Revenge" contra jogadores de computador está disponível. Em Junkenstein's Revenge, quatro jogadores guardam cooperativamente a porta de um castelo contra ondas de inimigos e chefes que se aproximam. Situado em uma seção temática do mapa de Eichenwalde do jogo, os jogadores selecionam um nível de dificuldade e escolhem entre os personagens Ana, Hanzo, McCree e Soldier: 76, antes de lutar contra drones "zomnic" estúpidos, "zumbardiers" de longo alcance, explodindo pneus e versões fantasiadas dos personagens Reaper, Roadhog, Symmetra, Mercy e Junkrat (como o titular Dr. Junkenstein). O modo de jogo inclui um novo trabalho de voz e é baseado em uma história em quadrinhos lançada simultaneamente. As iteraões posteriores adicionaram outros heróis que podem ser selecionados, bem como um modo secundário onde qualquer heri pode ser selecionado.

                    O novo modo foi geralmente elogiado pelos comentaristas. PC Gamer escreveu que o evento se assemelhava a um evento semelhante executado no jogo de tiro em equipe Team Fortress 2 desde 2012. Embora o revisor tenha achado o modo Junkenstein agradável, ele escreveu que em comparaão com o modo Mann vs. Mquina do Team Fortress 2, Junkenstein parecia "superficial" e semelhante ao Lúcioball em seu fluxo de mapa simplista, dando pouco espaço para a movimentaão do jogador. Ele também se perguntou por que o modo era limitado a quatro personagens específicos. Robert Purchase, de Eurogamer, achou o evento divertido e o considerou uma boa distração dos modos principais de Overwatch, mas também reconheceu que se continuasse após o evento Halloween Terror, se tornaria um modo de jogo obsoleto. Heather Alexandra para Kotaku sentiu que o modo demonstrou que um modo cooperativo jogador versus ambiente se encaixaria bem como um recurso permanente no Overwatch, j que exigia uma boa coordenaço de equipe para completar partidas mais desafiadoras.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div style="background-image: url(../img/eventos/hallo.png); text-align: center; height:100%;"><a href="skins.php" style="text-decoration: none; color:white">Clique aqui para ver todas as skins j lanadas nesse evento.</a></div>
                </div>
            </div>
            <!--Hallowen-->
            
            <!--Natal-->
            <div class="row">
                <div class="col-md-12">
                    <img src="../img/eventos/nataleventoss.png" class="img-fluid" alt="paraiso-congelado-foto" title="paraiso-congelado-foto" style="margin-top:4%; margin-bottom: 2%; width:100%">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p  style="border: 3px solid #007DD1; padding:2%; text-align:justify;">Os eventos Winter Wonderland normalmente acontecem no final do ano civil e no ano novo cronometrado com o inverno no hemisfério norte. Seus cosmticos tendem a apresentar tanto cosmticos com tema de inverno quanto aqueles relacionados ao Natal e outros eventos festivos semelhantes.

                    Dois modos de evento foram adicionados durante o Winter Wonderland. O primeiro é um modo deathmatch chamado "Ofensiva de bola de neve de Mei". O modo ocorre no mapa menor Ecopoint: Antarctica, introduzido nos meses anteriores para o jogo deathmatch padro. Seis jogadores cada um joga Mei, mas onde seu Blaster Endotrmico, que normalmente dispara um fluxo de frio prejudicial, pode disparar apenas uma nica bola de neve. Os jogadores devem encontrar uma pilha de bolas de neve espalhadas pelo mapa para recarregar a arma. Além disso, sua habilidade Ultimate permite que ela atire bolas de neve como uma metralhadora por um breve período. Caso contrrio, as outras habilidades de Mei (Ice Wall e Cyro-Freeze) permanecem as mesmas. Um nico golpe de bola de neve mata o atingido at que a rodada esteja completa. Kotaku afirma que esse modo geralmente no foi bem recebido pelos jogadores, pois o ato de ter que recarregar o Blaster deixava algum muito vulnervel e, com a mecânica da morte permanente em jogo, o modo no era divertido nem capturava o espírito de uma luta de bolas de neve.

                    O segundo novo modo é "Yeti Hunter", um modo assimétrico onde cinco jogadores, cada um jogando como Mei, tentam derrotar um jogador que controla Winston (agindo como Yeti) em uma batalha de chefe no palco da Vila do Nepal. Yeti Hunt é o primeiro modo Overwatch a usar a seleção de funço; os jogadores podem indicar sua preferência em jogar como Mei ou como Yeti. O jogador de Winston deve escapar do time Mei, que pode congelá-lo, usar paredes de gelo para impedir seu movimento ou pegá-lo em uma armadilha (que substitui o Ultimate usual de Mei). Depois de coletar quatro pedaços de carne, que aparecem aleatoriamente em locais pr-determinados ao redor do mapa, Winston libera sua habilidade Ultimate por um curto período que temporariamente aumenta sua saúde, reduz o cooldown de salto e d a ele poderosos ataques corpo a corpo. Quando um jogador Mei morre, eles reaparecem aps um pequeno atraso e custam uma vida de seu time. A partida termina quando a equipe Mei derrota Winston ou perde todas as suas cinco vidas. Kaplan descreveu o Yeti Hunt como um modo alegre a ser jogado por algumas partidas em vez de centenas de horas.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div style="background-image: url(../img/eventos/natal.png); text-align: center;height:100%;"><a href="skins.php" style="text-decoration: none; color:white">Clique aqui para ver todas as skins j lanadas nesse evento.</a></div>
                </div>
            </div>
            <!--Natal-->
            
        </div>
        
        <footer class="text-center text-lg-start bg-dark">
        	<div class="text-center text-white p-4" style="margin-top: 7%;">
                  Overwatch: FanPage - 2021: Todos os direitos reservados
          	</div>
        </footer>
        
    </body>
</html>