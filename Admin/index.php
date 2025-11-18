<?php
    echo "Painel administrativo";
?>

<nav>
    <a href="index.php">Inicio</a>
    <a href="?pg=clientes-admin">Clientes</a>
    <a href="?pg=paginas-admin">Administra Páginas</a>
    <a href="?pg=contato-admin">Administrar Contatos</a>
</nav>
<?php
    // Conteúdo
    if(empty($_SERVER["QUERY_STRING"])){
        $var = "principal";
        include_once "$var.php";
    }elseif($_GET['pg']){
        $pg = $_GET['pg'];
        include_once "$pg.php";
    }else{
        echo "Página não encontrada";
    }
?>
