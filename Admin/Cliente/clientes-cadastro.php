<?php

    require_once 'config.inc.php';

    $cliente = $_REQUEST['cliente'];
    $cidade = $_REQUEST['cidade'];
    $estado = $_REQUEST['estado'];

    $sql = "INSERT INTO clientes (cliente, cidade, estado) 
            VALUES ('$cliente','$cidade','$estado')";

    if(mysqli_query($conexao, $sql)){
        echo "<h2>Cliente cadastrado com sucesso</h2>";
    }else{
        echo "<h2>Erro ao cadastrar</h2>";
    }

    mysqli_close($conexao);

