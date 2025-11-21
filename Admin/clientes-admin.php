<?php

    require_once '../config.inc.php';

    echo "<h2>Agendamentos</h2>";
?>

<?php
    $sql = "SELECT * FROM agendamentos";

    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){
        while($dados = mysqli_fetch_array($resultado)){
            echo "<hr>";
            echo "Id: ".$dados['id'];
            echo " | Nome: ".$dados['nome'];
            echo " | telefone: ".$dados['telefone'];
            echo " | dataagendamento: ".$dados['data_agendamento'];
            echo " | hora: ".$dados['hora'];
            echo " | <a href='?pg=Agenda/agen-excluirr&id=$dados[id]'>Excluir</a>";
            echo "<hr>";
        }
    }else{
        echo "Nenhum cliente agendado!";
    }

    mysqli_close($conexao);

?>