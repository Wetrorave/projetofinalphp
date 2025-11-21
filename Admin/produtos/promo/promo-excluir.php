<?php

    require_once "config.inc.php";

    $id = $_GET['id'];

    $sql = "DELETE FROM promocao WHERE id = $id";

    $resultado = mysqli_query($conexao, $sql);

    if($resultado){
        echo "<h2>Promoção excluído com sucesso.</h2>";
        echo "<a href='?pg=produtos/promo/promo-admin'>Voltar</a>";
    }else{
        echo "<h2>Erro ao excluir promoção.</h2>";
        echo "<a href='?pg=produtos/promo/promo-admin'>Voltar</a>";
    }
