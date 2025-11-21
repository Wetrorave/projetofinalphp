<?php

    require_once("config.inc.php");

    $id = $_GET['id'];

    $sql = "SELECT * FROM produtoseservicos WHERE id = $id";
    $resultado = mysqli_query($conexao, $sql);

    if($dados = mysqli_fetch_array($resultado)){
        $id = $dados['id'];
        $nome = $dados['nome'];
        $descricao = $dados['descricao'];
        $preco = $dados['preco'];
    }

?>

<h1>Alteração de corte</h1>
<form action="?pg=produtos/servicos/servicos-altera" method="post">
    <input type="hidden" name="id" value="<?=$id?>">
    <label>Nome</label>
    <input type="text" name="nome" value="<?=$nome?>"><br>
    <label>Descricao</label>
    <input type="text" name="descricao" value="<?=$descricao?>"><br>
    <label>Preco</label>
    <input type="text" name="preco" value="<?=$preco?>"><br>

    <input type="submit" value="Alterar">
</form>