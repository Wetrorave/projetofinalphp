<?php
    require_once "admin/config.inc.php";
    $sql = "SELECT * FROM clientes";
    $resultado = mysqli_query($conexao,$sql);

?>
<div class="container mt-3">
    <h2>Lista de Clientes</h2>
    <p>Todos os clientes que a empresa atende no momento</p>
    <table class="table table-dark table-hover">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Cidade</th>
            <th>Estado</th>
        </tr>
        </thead>
        <tbody>
        <?php
            while($dados = mysqli_fetch_array($resultado)){
        ?>

        <tr>
            <td><?=$dados['cliente']?></td>
            <td><?=$dados['cidade']?></td>
            <td><?=$dados['estado']?></td>
        </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
</div>