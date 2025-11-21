<?php

    require_once 'config.inc.php';

    echo "<h2>Promoções</h2>";
?>
<a href="?pg=produtos/promo/promo-form">Cadastrar novo promoção</a>

<?php
    $sql = "SELECT * FROM promocao";

    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){
        while($dados = mysqli_fetch_array($resultado)){
            echo "<hr>";
            echo "Id: ".$dados['id'];
            echo " | Nome da promoção: ".$dados['nome'];
            echo " | Preco normal: ".$dados['preco'];
            echo " | Preco com promo: ".$dados['precocompromo'];
            echo " | <a href='?pg=produtos/promo/promo-form-altera&id=$dados[id]'>Editar</a>";
            echo " | <a href='?pg=produtos/promo/promo-excluir&id=$dados[id]'>Excluir</a>";
            echo "<hr>";
        }
    }else{
        echo "<br>Nenhum peomoçõa cadastrado!";
    }

    mysqli_close($conexao);

?>
