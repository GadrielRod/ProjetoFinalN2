<?php
    session_start();
    
    $campo_pesquisar = $_POST['buscar'];
    $pag01 = "e-sport";
    $pag02 = "evento";
    $pag03 = "heroi";
    $pag04 = "historia";
    $pag05 = "mapa";
    $pag06 = "patch";
    $pag07 = "quadrinho";
    $pag08 = "skin";
    $pag09 = "sobre";
    
    if(strpos($campo_pesquisar, $pag01) !== false){
        header("location: e-sports.php");
    }elseif(strpos($campo_pesquisar, $pag02) !== false){
        header("location: eventos.php");
    }elseif(strpos($campo_pesquisar, $pag03) !== false){
        header("location: herois.php");
    }elseif(strpos($campo_pesquisar, $pag04) !== false){
        header("location: historia.php");
    }elseif(strpos($campo_pesquisar, $pag05) !== false){
        header("location: mapas.php");
    }elseif(strpos($campo_pesquisar, $pag06) !== false){
        header("location: patches.php");
    }elseif(strpos($campo_pesquisar, $pag07) !== false){
        header("location: quadrinho.php");
    }elseif(strpos($campo_pesquisar, $pag08) !== false){
        header("location: skins.php");
    }elseif(strpos($campo_pesquisar, $pag09) !== false){
        header("location: sobre.php");
    }else{
        header("location: ../index.php");
        $_SESSION['MSG'] = '<div class="alert alert-danger text-center">Nada encontrado para sua pesquisa</div>';
    }
?>