<style>
    /* --- CSS ISOLADO (Só afeta esta área de preços) --- */
    
    /* Container principal para não vazar estilo pro site todo */
    .pagina-precos {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        text-align: center;
        padding: 40px 15px;
        background-color: #f8f9fa; /* Fundo cinza suave apenas nesta área */
        border-radius: 8px;
        margin: 20px auto;
    }

    /* Títulos desta seção */
    .pagina-precos h2 {
        color: #333;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: 800;
        margin-top: 40px;
        margin-bottom: 10px;
    }

    .pagina-precos p.subtitulo {
        color: #666;
        margin-bottom: 30px;
        font-size: 1.1rem;
    }

    /* --- ESTILO DAS TABELAS --- */
    .tabela-estilizada {
        width: 100%;
        max-width: 900px;         /* Largura máxima */
        margin: 0 auto;           /* Centraliza a tabela */
        border-collapse: collapse;
        background-color: #fff;   /* Fundo branco */
        box-shadow: 0 8px 20px rgba(0,0,0,0.1); /* Sombra elegante */
        border-radius: 10px;
        overflow: hidden;         /* Arredonda os cantos */
        text-align: left;         /* Texto interno alinhado à esquerda */
    }

    /* Cabeçalho Preto */
    .tabela-estilizada thead tr {
        background-color: #212529;
        color: #fff;
    }

    .tabela-estilizada th, 
    .tabela-estilizada td {
        padding: 15px 20px;
        border-bottom: 1px solid #eee;
    }

    /* Zebrado (Linhas cinzas e brancas) */
    .tabela-estilizada tbody tr:nth-of-type(even) {
        background-color: #f9f9f9;
    }
    
    /* Efeito Hover */
    .tabela-estilizada tbody tr:hover {
        background-color: #e2e6ea;
        transition: 0.2s;
    }

    /* --- Formatação de Preços --- */
    
    /* Coluna de Preço Normal (Verde) */
    .preco-normal {
        font-weight: bold;
        color: #28a745;
        text-align: right;
        font-size: 1.1rem;
        width: 150px;
    }

    /* Preço Antigo (Riscado) */
    .preco-velho {
        text-decoration: line-through;
        color: #dc3545; /* Vermelho */
        font-size: 0.9rem;
        margin-right: 10px;
    }
    
    /* Preço Novo (Promoção) */
    .preco-promo {
        font-weight: 800;
        color: #28a745; /* Verde forte */
        font-size: 1.2rem;
    }

    /* Alinha cabeçalhos de preço à direita */
    .text-right { text-align: right; }
</style>

<?php
    require_once "admin/config.inc.php";
    
    // Consultas ao Banco
    $sql_promo = "SELECT * FROM promocao";
    $resultado_promo = mysqli_query($conexao, $sql_promo);
    
    $sql_prod = "SELECT * FROM produtoseservicos";
    $resultado_prod = mysqli_query($conexao, $sql_prod);
?>

<div class="pagina-precos">

    <h2>🔥 Promoções do Mês</h2>
    <p class="subtitulo">Aproveite nossos descontos exclusivos por tempo limitado</p>
    
    <table class="tabela-estilizada">
        <thead>
            <tr>
                <th>Serviço / Produto</th>
                <th class="text-right">De</th>
                <th class="text-right">Por Apenas</th>
            </tr>
        </thead>
        <tbody>
            <?php while($dados = mysqli_fetch_array($resultado_promo)){ ?>
            <tr>
                <td><strong><?=$dados['nome']?></strong></td>
                
                <td class="text-right">
                    <span class="preco-velho">R$ <?=$dados['preco']?></span>
                </td>
                
                <td class="text-right">
                    <span class="preco-promo">R$ <?=$dados['precocompromo']?></span>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <br><br> <h2>✂️ Tabela de Preços & Serviços</h2>
    <p class="subtitulo">Confira nossa lista completa de procedimentos</p>

    <table class="tabela-estilizada">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição Detalhada</th>
                <th class="text-right">Valor</th>
            </tr>
        </thead>
        <tbody>
            <?php while($dados1 = mysqli_fetch_array($resultado_prod)){ ?>
            <tr>
                <td><strong><?=$dados1['nome']?></strong></td>
                
                <td style="color: #666; font-size: 0.95rem;">
                    <?=$dados1['descricao']?>
                </td>
                
                <td class="preco-normal">
                    R$ <?=$dados1['preco']?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

</div>
