<?php

    require_once 'config.inc.php';

    $nome = $_REQUEST['nome'];
    $preco = $_REQUEST['preco'];
    $precocompromo = $_REQUEST['precocompromo'];

    $sql = "INSERT INTO promocao (nome, preco, precocompromo) 
            VALUES ('$nome','$preco','$precocompromo')";

    if(mysqli_query($conexao, $sql)){
        echo "<h2>Promoção cadastrado com sucesso</h2>";
    }else{
        echo "<h2>Erro ao cadastrar</h2>";
    }

    mysqli_close($conexao);
