<style>
    /* Estilo Minimalista e Limpo */
    .secao-contato {
        padding: 60px 20px; /* Espaço em cima e embaixo */
        text-align: center; /* CENTRALIZA TUDO */
        color: #333;
    }

    .titulo-contato {
        text-transform: uppercase;
        font-weight: 800;
        letter-spacing: 2px;
        margin-bottom: 40px;
        color: #000;
        border-bottom: 3px solid #28a745; /* Tracinho verde embaixo do título */
        display: inline-block;
        padding-bottom: 10px;
    }

    /* Estilo dos blocos de texto */
    .item-contato {
        margin-bottom: 40px; /* Espaço entre um assunto e outro */
    }

    .item-contato h4 {
        font-size: 1.2rem;
        font-weight: bold;
        color: #212529;
        margin-bottom: 10px;
    }

    .item-contato p {
        font-size: 1.1rem;
        line-height: 1.6;
        color: #555;
        margin: 0;
    }

    .icone-grande {
        font-size: 2rem;
        display: block;
        margin-bottom: 10px;
    }

    /* Botão WhatsApp Discreto */
    .zap-btn {
        display: inline-block;
        background-color: #25D366;
        color: #fff;
        padding: 6px 16px;
        border-radius: 20px;
        text-decoration: none;
        font-size: 0.9rem;
        margin-top: 10px;
        font-weight: 500;
    }
    .zap-btn:hover {
        background-color: #1ebc57;
        color: #fff;
    }
</style>

<div class="secao-contato">

    <h3 class="titulo-contato">Fale Conosco</h3>

    <div class="row justify-content-center">
        
        <div class="col-md-4 item-contato">
            <span class="icone-grande">📍</span>
            <h4>Onde Estamos</h4>
            <p>
                Rua Exemplo, 123 – Bairro Fictício<br>
                Cidade Modelo – PB
            </p>
            <a href="#" style="color: #007bff; font-size: 0.9rem;">Ver no mapa</a>
        </div>

        <div class="col-md-4 item-contato">
            <span class="icone-grande">📱</span>
            <h4>Canais de Atendimento</h4>
            <p>(99) 9 0000-0000</p>
            <p>paulobarbeiro@exemplo.com.br</p>
            
            <a href="#" class="zap-btn">Chamar no WhatsApp</a>
        </div>

        <div class="col-md-4 item-contato">
            <span class="icone-grande">⏰</span>
            <h4>Horário de Funcionamento</h4>
            <p>Seg a Sex: 09h às 18h</p>
            <p>Sábado: 08h às 14h</p>
            <p style="color: #d9534f;">Domingo: Fechado</p>
        </div>

    </div>
    
    <div class="row mt-4">
        <div class="col-12">
            <p style="font-style: italic; color: #777;">
                🚗 Referência: Próximo à praça central (fictícia).
            </p>
        </div>
    </div>

</div>
