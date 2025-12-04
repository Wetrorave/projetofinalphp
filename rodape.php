<style>
    .footer-compacto {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        background-color: #fff; /* Fundo branco */
        border-top: 1px solid #ddd; /* Linha fina em cima */
        padding: 8px 0; /* Altura reduzida (apenas 8px de espaço) */
        font-size: 14px; /* Letra um pouco menor */
        z-index: 1000;
        box-shadow: 0 -2px 5px rgba(0,0,0,0.05); /* Sombra leve pra cima */
    }
    
    /* Ajuste para telas muito pequenas */
    @media (max-width: 400px) {
        .footer-compacto { font-size: 12px; }
    }
</style>

<footer class="footer-compacto text-center text-muted">
    <strong>Barbearia do Paulo - Estilo & cortes</strong> 
    <span class="mx-2">|</span> 
    <?php echo date('Y'); ?> &copy; Direitos Reservados
</footer>

</body>
</html>
