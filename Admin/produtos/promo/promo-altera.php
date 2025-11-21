<?php

    require_once "config.inc.php";

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $precocompromo = $_POST['precocompromo'];

    $sql = "UPDATE clientes SET
            nome = '$nome',
            preco = '$preco',
            precocompromo = '$precocompromo'
            WHERE id = '$id'";

    if(mysqli_query($conexao, $sql)){
        echo "<h2>Dados atualizados com sucesso</h2>";
        echo "<a href='?pg=produtos/promo/promo-admin'>Voltar</a>";
    }else{
        echo "<h2>Erro ao atualizar os dados</h2>";
        echo "<a href='?pg=produtos/promo/promo-admin'>Voltar</a>";
    }