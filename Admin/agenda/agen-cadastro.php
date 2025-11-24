<?php

    require_once 'Admin/config.inc.php';

    $nome = $_REQUEST['nome'];
    $telefone = $_REQUEST['telefone'];
    $data1 = $_REQUEST['data1'];
    $hora = $_REQUEST['hora'];

    $sqlCheck = "SELECT * FROM agendamentos WHERE data_agendamento = '$data1' AND hora = '$hora' LIMIT 1";

$resultCheck = mysqli_query($conexao, $sqlCheck);

if(mysqli_num_rows($resultCheck) > 0){
    echo "<h2>❌ Esse horário já está ocupado!</h2>";
    echo "<p>Tente escolher outro horário.</p>";

    mysqli_close($conexao);
    exit; // não deixa seguir
}

    $sql = "INSERT INTO agendamentos (nome, telefone, data_agendamento, hora) 
            VALUES ('$nome','$telefone','$data1','$hora')";

    if(mysqli_query($conexao, $sql)){
        echo "<h2>Agendamento cadastrado com sucesso</h2>";
        echo "<p><strong>Você marcou para:</strong> $data1 às $hora</p>";
    }else{
        echo "<h2>Erro aoAgendar</h2>";

    }

    mysqli_close($conexao);
?>