<?php

    require_once 'config.inc.php';

    $nome = $_REQUEST['nome'];
    $descricao = $_REQUEST['descricao'];
    $preco = $_REQUEST['preco'];

    $sql = "INSERT INTO produtoseservicos (nome, descricao, preco) 
            VALUES ('$nome','$descricao','$preco')";

    if(mysqli_query($conexao, $sql)){
        echo "<h2>Corte cadastrado com sucesso</h2>";
    }else{
        echo "<h2>Erro ao corte</h2>";
    }

    mysqli_close($conexao);
