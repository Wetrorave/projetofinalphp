<?php

    require_once 'Admin/config.inc.php';

    $nome = $_REQUEST['nome'];
    $telefone = $_REQUEST['telefone'];
    $data1 = $_REQUEST['data1'];
    $hora = $_REQUEST['hora'];

    $sql = "INSERT INTO agendamentos (nome, telefone, data_agendamento, hora) 
            VALUES ('$nome','$telefone','$data1','$hora')";

    if(mysqli_query($conexao, $sql)){
        echo "<h2>Agendamento cadastrado com sucesso</h2>";
    }else{
        echo "<h2>Erro aoAgendar</h2>";
    }

    mysqli_close($conexao);
?>
