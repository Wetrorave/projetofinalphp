<style>
    /* --- Estilo Geral da Página (CORREÇÃO DE ALINHAMENTO) --- */
    body {
        background-color: #f8f9fa;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Fonte mais bonita */
        
        /* AQUI ESTÁ A MÁGICA: */
        text-align: center; /* Centraliza todos os textos soltos */
        padding: 30px 15px; /* Cria uma margem para não colar nas bordas da tela */
    }

    /* Títulos (h1, h2, etc) */
    h1, h2, h3, h4, h5 {
        color: #333;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: 700;
        margin-bottom: 30px; /* Espaço abaixo do título */
    }

    /* Parágrafos soltos ou textos sem tag */
    p, div {
        color: #555;
        font-size: 1.1rem;
        margin-bottom: 15px;
    }

    /* --- A Tabela de Preços --- */
    table {
        width: 100%;
        max-width: 800px;         /* Largura máxima elegante */
        margin: 0 auto 50px auto; /* "margin: auto" garante que a TABELA fique no meio */
        
        /* O conteúdo DENTRO da tabela deve ser alinhado à esquerda para leitura */
        text-align: left; 
        
        border-collapse: collapse;
        background-color: #fff;
        box-shadow: 0 10px 20px rgba(0,0,0,0.1); /* Sombra mais destacada */
        border-radius: 10px;
        overflow: hidden;
    }

    /* Cabeçalho da Tabela */
    thead tr {
        background-color: #212529;
        color: #fff;
    }

    th, td {
        padding: 18px 25px; /* Bastante espaço para não ficar espremido */
        border-bottom: 1px solid #eee;
    }

    /* Efeito Zebrado e Hover */
    tbody tr:nth-of-type(even) { background-color: #f9f9f9; }
    tbody tr:hover { background-color: #f1f1f1; transition: 0.3s; }

    /* Destaque do Preço (Última Coluna) */
    td:last-child {
        font-weight: bold;
        color: #28a745;
        text-align: right; /* Preço alinhado à direita fica mais bonito */
        font-size: 1.1em;
    }
    
    th:last-child { text-align: right; }
</style>
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
