<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Seleção de Horário com PHP</title>
</head>
<body>
    <h1>Cadastro do agendamento</h1>
    <form action="?pg=admin/agenda/agen-cadastro" method="post">
        <label>Nome</label>
        <input type="text" name="nome" placeholder="Seu nome"><br>
        <label>telefone</label>
        <input type="text" name="telefone" placeholder="Telefone"><br>
        <label>data</label>
        <input type="date" name="data1" ><br>

    <label for="horario">Selecione o Horário:</label>
    <select name="hora">
        <?php
            // Loop para as 24 horas do dia (0 a 23)
            for ($hora = 8; $hora <= 17; $hora++) {
                // Loop para os minutos (0 e 30)
                foreach (['00', '30'] as $minuto) {
                    // Formata a hora para ter sempre dois dígitos (ex: 09, 12)
                    $hora_formatada = str_pad($hora, 2, '0', STR_PAD_LEFT);
                    
                    // Concatena para formar o valor
                    $valor = $hora_formatada . ':' . $minuto;
                    
                    // Imprime a tag <option>
                    echo '<option value="' . $valor . '">' . $valor . '</option>' . "\n";
                }
            }
        ?>
    </select>
    <input type="submit" value="Agendar">

</form>

</body>
</html>