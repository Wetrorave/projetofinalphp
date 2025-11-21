<?php

    require_once "config.inc.php";

    $id = $_GET['id'];

    $sql = "DELETE FROM produtoseservicos WHERE id = $id";

    $resultado = mysqli_query($conexao, $sql);

    if($resultado){
        echo "<h2>Corte excluído com sucesso.</h2>";
        echo "<a href='?pg=produtos/servicos/servicos-admin'>Voltar</a>";
    }else{
        echo "<h2>Erro ao excluir corte.</h2>";
        echo "<a href='?pg=produtos/servicos/servicos-admin'>Voltar</a>";
    }
