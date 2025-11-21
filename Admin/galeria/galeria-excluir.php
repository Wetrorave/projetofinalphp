<?php

    require_once "config.inc.php";

    $id = $_GET['id'];

    $sql = "DELETE FROM galeria WHERE id = $id";

    $resultado = mysqli_query($conexao, $sql);

    if($resultado){
        echo "<h2>Excluído com sucesso.</h2>";
        echo "<a href='?pg=galeria/galeria-admin'>Voltar</a>";
    }else{
        echo "<h2>Erro ao excluir.</h2>";
        echo "<a href='?pg=galeria/galeria-admin'>Voltar</a>";
    }
?>