<?php


    $local = "localhost";
    $usuario = "id19693792_mt_cell";
    $senha = "MateusGustavoKalebe123_";
    $banco = "id19693792_loja";


    $conexao = mysqli_connect($local,$usuario,$senha,$banco);
    
    //outra alternativa (mais trabalhosa)
    //" mysqli_connect("locahost", "root", "", "eteot") "

    header("Content-Type: text/html; charset=utf-8");
    mysqli_query($conexao, "SET NAMES 'utf-8'");  
    mysqli_query($conexao, "SET character_set_connection = utf-8"); 
    mysqli_query($conexao, "SET character_set_client = utf-8"); 
    mysqli_query($conexao, "SET character_set_results = utf-8");
    
   

?>