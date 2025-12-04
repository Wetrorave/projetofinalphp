<?php

require_once "config.inc.php";

$nome = $_FILES['arquivo']['name'];
$temp = $_FILES['arquivo']['tmp_name'];

// pasta onde as imagens serão salvas
move_uploaded_file($temp, "galeria/imagens/" . $nome);

// salva o nome no banco
$sql = "INSERT INTO galeria (imagem) VALUES ('$nome')";

if(mysqli_query($conexao, $sql)){
        echo "<h2>Cadastrado com sucesso</h2>";
    }else{
        echo "<h2>Erro ao cadastrar</h2>";
    }

echo "Imagem enviada!";
echo "<a href='?pg=galeria/galeria-admin'>Voltar</a>";
?>
