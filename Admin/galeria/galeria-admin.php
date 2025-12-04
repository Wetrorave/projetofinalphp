<?php
    require_once 'config.inc.php';
?>

<style>
    /* Estilos do botão Novo/Cadastrar */
    .btn-novo {
        background-color: black;
        color: white;
        padding: 12px 25px;
        text-decoration: none;
        font-weight: bold;
        border-radius: 5px;
        display: inline-block;
        margin-bottom: 20px;
        font-family: Arial, sans-serif;
        border: 1px solid black;
        transition: 0.3s;
    }
    .btn-novo:hover { background-color: #333; }

    /* Estilos do botão Editar (Não usado, mas mantido para consistência) */
    .btn-editar {
        background-color: black;
        color: white;
        padding: 6px 15px;
        text-decoration: none;
        font-weight: bold;
        border-radius: 4px;
        font-size: 14px;
        margin-right: 5px;
        font-family: Arial, sans-serif;
        display: inline-block;
        transition: 0.3s;
    }
    .btn-editar:hover { background-color: #555; }

    /* Estilos do botão Excluir */
    .btn-excluir {
        background-color: #dc3545; /* Cor vermelha */
        color: white;
        padding: 6px 15px;
        text-decoration: none;
        font-weight: bold;
        border-radius: 4px;
        font-size: 14px;
        font-family: Arial, sans-serif;
        display: inline-block;
        transition: 0.3s;
        margin-left: 5px; /* Adicionado um pouco de margem para separar da imagem */
    }
    .btn-excluir:hover { background-color: #a71d2a; }

    /* Estilos para a lista de imagens, se necessário. */
    .galeria-item {
        margin-bottom: 15px;
        border: 1px solid #eee;
        padding: 10px;
        display: inline-block;
        vertical-align: top;
        margin-right: 15px;
    }
</style>

<h2>Galeria</h2>

<a href="?pg=galeria/galeria-form" class="btn-novo">Cadastrar nova Imagem</a>
<div style="clear: both;"></div> <?php
    $sql = "SELECT * FROM galeria";

    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){
        while($dados = mysqli_fetch_array($resultado)){
             echo "<div class='galeria-item'>";
             echo "<img src='galeria/imagens/".$dados['imagem']."' width='200' alt='Imagem da Galeria'>";
             // Aplica o estilo btn-excluir
             echo "<br><a href='?pg=galeria/galeria-excluir&id=$dados[id]' class='btn-excluir' style='margin-top: 10px;'>Excluir</a>";
             echo "</div>";
        }
    }else{
        echo "<br><p>Nenhuma imagem cadastrada!</p>";
    }

    mysqli_close($conexao);

?>
