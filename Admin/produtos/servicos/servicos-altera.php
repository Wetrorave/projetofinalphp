<?php

    require_once "config.inc.php";

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];

    $sql = "UPDATE produtoseservicos SET
            nome = '$nome',
            descricao = '$descricao',
            preco = '$preco'
            WHERE id = '$id'";

    if(mysqli_query($conexao, $sql)){
        echo "<h2>Dados atualizados com sucesso</h2>";
        echo "<a href='?pg=produtos/servicos/servicos-admin'>Voltar</a>";
    }else{
        echo "<h2>Erro ao atualizar os dados</h2>";
        echo "<a href='?pg=produtos/servicos/servicos-admin'>Voltar</a>";
    }