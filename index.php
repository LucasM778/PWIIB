<?php include "cabecalho.php"; ?>

<?php echo "<h1> Index do nosso projeto</h1>"; ?>

<button class="btn btn-success" onclick="Piscar(this)" >
    Piscando meu botão
</button>

<script>
    function Piscar(botao)
    {
        if(botao.classList.contains('btn-success'))
        {
            botao.classList.remove('btn-success')
            botao.classList.add('btn-danger')
        }else{
            botao.classList.remove('btn-danger')
            botao.classList.add('btn-success')
        }
    }
</script>


<?php include "rodape.php"; ?>