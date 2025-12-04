<style>
    /* Configuração do container do slide */
    .carousel-item {
        height: 400px;             /* Altura fixa (diminuí um pouco para não ficar gigante) */
        background-color: #212121; /* Fundo cinza escuro (para preencher as sobras laterais) */
    }

    /* Configuração da imagem */
    .carousel-item img {
        height: 100%;              /* Ocupa toda a altura disponível */
        width: 100%;               /* Ocupa toda a largura disponível */
        object-fit: contain;       /* O SEGREDO: Faz a imagem caber INTEIRA sem cortar nada */
    }

    /* Ajuste da legenda */
    .carousel-caption {
        background: rgba(0, 0, 0, 0.6);
        border-radius: 10px;
        padding: 10px;
        bottom: 20px; /* Sobe um pouco a legenda */
    }

    /* Ajuste para celular */
    @media (max-width: 768px) {
        .carousel-item {
            height: 250px; /* Menor ainda no celular */
        }
    }
</style>

<div id="demo" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>

    <div class="carousel-inner">
        
        <div class="carousel-item active">
            <img src="https://content.latest-hairstyles.com/wp-content/uploads/textured-crop-low-taper-fade-haircut.jpg" alt="Taper Fade">
            <div class="carousel-caption">
                <h3>Taper Fade</h3>
                <p>Corte simples e estiloso</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="https://i.pinimg.com/736x/3b/58/3e/3b583ee7f1d80cc5cdec2455b2920c69.jpg" alt="Apenas na tesoura">
            <div class="carousel-caption">
                <h3>Apenas na tesoura</h3>
                <p>Só tesoura, sem máquinas</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="https://i.ytimg.com/vi/xeaywER10-4/maxresdefault.jpg" alt="Navalhado">
            <div class="carousel-caption">
                <h3>Navalhado</h3>
                <p>Lateral na navalha</p>
            </div>
        </div>

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<div class="container-fluid mt-3 text-center">
    <h3>Exemplos de corte</h3>
    <p>Visualize nossa qualidade. Renove seu estilo hoje.</p>
</div>
