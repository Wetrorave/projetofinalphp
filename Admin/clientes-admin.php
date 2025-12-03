<?php
    require_once 'config.inc.php';
?>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }

    h2 {
        color: #333;
        border-bottom: 2px solid #333;
        padding-bottom: 10px;
        margin-bottom: 20px;
    }
    .card-agendamento {
        background-color: white;
        padding: 20px;
        margin-bottom: 15px;
        border-radius: 8px; 
        border-left: 6px solid #333; /* Detalhe lateral escuro */
        box-shadow: 0 2px 5px rgba(0,0,0,0.1); /* Sombra */
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    /* Área dos Checkboxes */
    .status-area {
        background-color: #f9f9f9;
        padding: 10px;
        border-radius: 4px;
        font-size: 14px;
        color: #555;
        margin-bottom: 10px;
    }
    .status-area label {
        margin-right: 15px;
        cursor: pointer;
    }

    /*(Nome, telefone...) */
    .dados-texto {
        font-size: 16px;
        color: #333;
        line-height: 1.6;
    }
    .dados-texto strong {
        color: #000;
    }
    .btn-excluir {
        background-color: #dc3545;
        color: white;
        padding: 8px 15px;
        text-decoration: none;
        font-weight: bold;
        border-radius: 5px;
        font-size: 14px;
        display: inline-block;
        width: fit-content; 
        margin-top: 10px;
        transition: 0.3s;
    }
    .btn-excluir:hover {
        background-color: #a71d2a; 
    }
</style>

<?php
    echo "<h2>Agendamentos</h2>";

    $sql = "SELECT * FROM agendamentos ORDER BY data_agendamento ASC, hora ASC";

    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){
        while($dados = mysqli_fetch_array($resultado)){
            echo "<div class='card-agendamento'>";
            echo "<div class='status-area'>";
            echo "<label><input type='checkbox' name='servico' value='Barba'> Já foi atendido</label>";
            echo "<label><input type='checkbox' name='servico' value='Barba'> Não veio</label>";
            echo "</div>";

            echo "<div class='dados-texto'>";
            echo "<strong>Id:</strong> ".$dados['id'] . " | ";
            echo "<strong>Nome:</strong> ".$dados['nome'] . "<br>";
            echo "<strong>Telefone:</strong> ".$dados['telefone'] . "<br>";
            echo "<strong>Data:</strong> ".$dados['data_agendamento'] . " | ";
            echo "<strong>Hora:</strong> ".$dados['hora'];
            echo "</div>";

            
            echo "<a href='?pg=Agenda/agen-excluir&id={$dados['id']}' class='btn-excluir'>Excluir Agendamento</a>";
            
            
            echo "</div>";
        }
    }else{
        echo "<p style='padding:15px;'>Nenhum cliente agendado!</p>";
    }

    mysqli_close($conexao);
?>
