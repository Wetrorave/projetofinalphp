<?php
    require_once 'config.inc.php';
?>

<style>
    
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

    .btn-excluir {
        background-color: #dc3545; 
        color: white;
        padding: 6px 15px;
        text-decoration: none;
        font-weight: bold;
        border-radius: 4px;
        font-size: 14px;
        font-family: Arial, sans-serif;
        display: inline-block;
        transition: 0.3s;
    }
    .btn-excluir:hover { background-color: #a71d2a;  }

    .tabela-lista {
        width: 100%;
        border-collapse: collapse;
        font-family: Arial, sans-serif;
        margin-top: 10px;
    }
    .tabela-lista th, .tabela-lista td {
        border-bottom: 1px solid #ddd;
        padding: 12px;
        text-align: left;
    }
    .tabela-lista th {
        background-color: #f2f2f2;
        color: #333;
    }
</style>

<h2>Corte e serviços</h2>

<a href="?pg=produtos/servicos/servicos-form" class="btn-novo">Cadastrar novo corte</a>

<?php
    $sql = "SELECT * FROM produtoseservicos";
    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){
        
        echo "<table class='tabela-lista'>";
        echo "<thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </tr>
              </thead>";
        echo "<tbody>";

        while($dados = mysqli_fetch_array($resultado)){
            echo "<tr>";
            echo "<td>" . $dados['id'] . "</td>";
            echo "<td>" . $dados['nome'] . "</td>";
            echo "<td>" . $dados['descricao'] . "</td>";
            echo "<td>R$ " . $dados['preco'] . "</td>";
            
            echo "<td>
                    <a href='?pg=produtos/servicos/servicos-form-altera&id={$dados['id']}' class='btn-editar'>Editar</a>
                    <a href='?pg=produtos/servicos/servicos-excluir&id={$dados['id']}' class='btn-excluir'>Excluir</a>
                  </td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";

    } else {
        echo "<p>Nenhum serviço cadastrado!</p>";
    }

    mysqli_close($conexao);
?>
