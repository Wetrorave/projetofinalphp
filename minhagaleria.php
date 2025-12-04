<?php

    require_once 'Admin/config.inc.php';

    echo "<h2>Galeria</h2>";
?>
<?php
    $sql = "SELECT * FROM galeria";

    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){
        while($dados = mysqli_fetch_array($resultado)){
             echo "<img src='Admin/galeria/imagens/".$dados['imagem']."' width='200'>";
        }
    }else{
        echo "<br>Nenhum imagem cadastrado!";
    }

    mysqli_close($conexao);

?>
