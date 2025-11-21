<?php

    require_once("config.inc.php");

    $id = $_GET['id'];

    $sql = "SELECT * FROM promocao WHERE id = $id";
    $resultado = mysqli_query($conexao, $sql);

    if($dados = mysqli_fetch_array($resultado)){
        $id = $dados['id'];
        $nome = $dados['nome'];
        $preco = $dados['preco'];
        $precocompromo = $dados['precocompromo'];
    }

?>

<h1>Alteração de Cliente</h1>
<form action="?pg=produtos/promo/promo-altera" method="post">
    <input type="hidden" name="id" value="<?=$id?>">
    <label>Nome da promoção</label>
    <input type="text" name="nome" value="<?=$nome?>"><br>
    <label>Preço normal</label>
    <input type="text" name="preco" value="<?=$preco?>"><br>
    <label>Preço na promoção</label>
    <input type="text" name="precocompromo" value="<?=$precocompromo?>"><br>

    <input type="submit" value="Alterar">
</form>