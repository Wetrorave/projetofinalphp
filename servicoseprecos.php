<?php
    require_once "admin/config.inc.php";
    $sql = "SELECT * FROM promocao";
    $resultado = mysqli_query($conexao,$sql);
    $sql1 = "SELECT * FROM produtoseservicos";
    $resultado1 = mysqli_query($conexao,$sql1);

?>
<div>
    <h2>Promoções</h2>
    <p>Todas as Promoções Atuais</p>
    <div>
        <?php
            while($dados = mysqli_fetch_array($resultado)){
        ?>
        <div class="container mt-3">
            <h4><?=$dados['nome']?></h4>
            <p><s><?=$dados['preco']?></s></p>
            <h3><?=$dados['precocompromo']?></h3>
        </div>
        <?php
            }?>
    </div>
</div>
<div>
    <h2>Produtos e Serviços</h2>
    <p>Lista de Produtos e Serviços Oferecidos</p>
    <div>
        <?php
            while($dados1 = mysqli_fetch_array($resultado1)){
        ?>
        <div class="container mt-3">
            <h3><?=$dados1['nome']?> - <?=$dados1['preco']?></h3>
            <p><?=$dados1['descricao']?></p>
        </div>
        <?php
            }
        ?>
    </div>
</div>