<?php

    require_once("config.inc.php");

    $id = $_GET['id'];

    $sql = "SELECT * FROM clientes WHERE id = $id";
    $resultado = mysqli_query($conexao, $sql);

    if($dados = mysqli_fetch_array($resultado)){
        $id = $dados['id'];
        $nome = $dados['cliente'];
        $cidade = $dados['cidade'];
        $estado = $dados['estado'];
    }

?>

<h1>Alteração de Cliente</h1>
<form action="?pg=clientes-altera" method="post">
    <input type="hidden" name="id" value="<?=$id?>">
    <label>Nome</label>
    <input type="text" name="cliente" value="<?=$nome?>"><br>
    <label>Cidade</label>
    <input type="text" name="cidade" value="<?=$cidade?>"><br>
    <label>Estado</label>
    <input type="text" name="estado" value="<?=$estado?>"><br>

    <input type="submit" value="Alterar">
</form>