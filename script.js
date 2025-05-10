const botoes = document.querySelectorAll('.clique');


botoes.forEach(button => {
    button.addEventListener('click', function(e) {
        console.log(e.target)
        if(e.target.classList.contains('Numero_Sorteado'))
            {
                if(confirm("Tem certeza que vai desmarcar ?")){
                e.target.classList.remove('Numero_Sorteado');
                }
            }else{
        e.target.classList.add('Numero_Sorteado');
        var numeroSorteado = document.getElementById("Vertical")
        numeroSorteado.innerText = e.target.innerText;
            }
    });
});