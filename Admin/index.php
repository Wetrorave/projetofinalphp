<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo</title>
    <style>
        body { margin: 0; font-family: Arial, sans-serif; background-color: #f4f4f4; }
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #333;
            padding-top: 20px;
            overflow-x: hidden;
        }
        .sidebar a {
            padding: 15px 25px;
            text-decoration: none;
            font-size: 18px;
            color: #ccc;
            display: block;
            transition: 0.3s;
        }
        .sidebar a:hover { color: #fff; background-color: #575757; }
        .content {
            margin-left: 250px;
            padding: 20px;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <a href="index.php">Inicio</a>
    <a href="?pg=clientes-admin">Clientes</a>
    <a href="?pg=produtos/servicos/servicos-admin">Administra Página de corte</a>
    <a href="?pg=produtos/promo/promo-admin">Administrar Página de promoção</a>
    <a href="?pg=galeria/galeria-admin">Administrar da galeria</a>
</div>

<div class="content">
    <?php
        echo "<h1>Painel administrativo</h1>";
    ?>
    <hr>
    <?php
        if(empty($_SERVER["QUERY_STRING"])){
        
            echo "<h2>Bem-vindo</h2>";
            echo "<p>Selecione uma opção no menu lateral para começar.</p>";
            
        }elseif($_GET['pg']){

            $pg = $_GET['pg'];
            include_once "$pg.php";
        }else{
            echo "Página não encontrada";
        }
    ?>
</div>

</body>
</html>
