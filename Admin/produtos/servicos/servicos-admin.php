<?php

    require_once 'config.inc.php';

    echo "<h2>Corte e serviços</h2>";
?>
<a href="?pg=produtos/servicos/servicos-form">Cadastrar novo corte</a>

<?php
    $sql = "SELECT * FROM produtoseservicos";

    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){
        while($dados = mysqli_fetch_array($resultado)){
            echo "<hr>";
            echo "Id: ".$dados['id'];
            echo " | Nome: ".$dados['nome'];
            echo " | Cidade: ".$dados['descricao'];
            echo " | Estado: ".$dados['preco'];
            echo " | <a href='?pg=produtos/servicos/servicos-form-altera&id=$dados[id]'>Editar</a>";
            echo " | <a href='?pg=produtos/servicos/servicos-excluir&id=$dados[id]'>Excluir</a>";
            echo "<hr>";
        }
    }else{
        echo "<br>Nenhum cliente cadastrado!";
    }

    mysqli_close($conexao);

?>
