<style>
    .form-container {
        background-color: #fff;
        padding: 25px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        max-width: 500px; 
        font-family: Arial, sans-serif;
    }

   
    label {
        display: block; 
        margin-bottom: 8px;
        font-weight: bold;
        color: #333;
    }
    input[type="text"] {
        width: 100%; 
        padding: 10px;
        margin-bottom: 20px; 
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box; 
    }

    input[type="submit"] {
        background-color: black;
        color: white;
        padding: 12px 25px;
        border: none;
        border-radius: 5px;
        font-weight: bold;
        cursor: pointer;
        font-size: 16px;
        width: 100%; 
        transition: 0.3s;
    }

    input[type="submit"]:hover {
        background-color: #333;
    }
</style>

<h2>Cadastro de cortes</h2>

<div class="form-container">
    <form action="?pg=produtos/servicos/servicos-cadastro" method="post">
        
        <label>Nome do corte</label>
        <input type="text" name="nome" placeholder="Ex: Degradê, Social...">
        
        <label>Descrição</label>
        <input type="text" name="descricao" placeholder="Detalhes do corte...">
        
        <label>Preço (R$)</label>
        <input type="text" name="preco" placeholder="Ex: 35.00">

        <input type="submit" value="Cadastrar corte">
    </form>
</div>
