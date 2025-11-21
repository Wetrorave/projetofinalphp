<?php

    require_once 'config.inc.php';

    echo "<h2>Galeria</h2>";
?>
<a href="?pg=galeria/galeria-form">Cadastrar novo Imagem</a>
</br>

<?php
    $sql = "SELECT * FROM galeria";

    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){
        while($dados = mysqli_fetch_array($resultado)){
             echo "<img src='galeria/imagens/".$dados['imagem']."' width='200'>";
             echo " | <a href='?pg=galeria/galeria-excluir&id=$dados[id]'>Excluir</a>";
        }
    }else{
        echo "<br>Nenhum imagem cadastrado!";
    }

    mysqli_close($conexao);

?>
