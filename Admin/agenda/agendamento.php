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
        <input type="date" name="data1" required min="<?php echo date('Y-m-d'); ?>"><br>

    <label for="horario">Selecione o Horário:</label>
    <select name="hora" required>
        <option>07:00</option>
        <option>07:30</option>
        <option>08:00</option>
        <option>08:30</option>
        <option>09:00</option>
        <option>09:30</option>
        <option>10:00</option>
        <option>10:30</option>
        <option>11:00</option>
        <option>11:30</option>
        <option>13:30</option>
        <option>14:00</option>
        <option>14:30</option>
        <option>15:00</option>
        <option>15:30</option>
        <option>16:00</option>
        <option>16:30</option>
    </select>
    <input type="submit" value="Agendar">

</form>

</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Pega o dia da semana (0 = domingo, 6 = sábado)
    $diaSemana = date('w', strtotime($_POST['data1']));

    if ($diaSemana == 0 || $diaSemana == 6) {
        echo "<p style='color:red;'>❌ Não é permitido agendar no sábado ou domingo.</p>";
    }
}
?>

