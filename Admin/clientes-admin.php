<?php

    require_once 'config.inc.php';

    echo "<h2>Clientes</h2>";
?>
<a href="?pg=clientes-form">Cadastrar novo cliente</a>

<?php
    $sql = "SELECT * FROM clientes";

    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){
        while($dados = mysqli_fetch_array($resultado)){
            echo "<hr>";
            echo "Id: ".$dados['id'];
            echo " | Nome: ".$dados['cliente'];
            echo " | Cidade: ".$dados['cidade'];
            echo " | Estado: ".$dados['estado'];
            echo " | <a href='?pg=clientes-form-altera&id=$dados[id]'>Editar</a>";
            echo " | <a href='?pg=clientes-excluir&id=$dados[id]'>Excluir</a>";
            echo "<hr>";
        }
    }else{
        echo "Nenhum cliente cadastrado!";
    }

    mysqli_close($conexao);

?>


