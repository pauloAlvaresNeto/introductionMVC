$(document).ready(function(){
    //monitora o clique do botão
    $('.btn-send').click(function(e){
        e.preventDefault()

        //coletar as informações digitadas/selecionadas no formulário
        let dados = $('#form').serialize()

        $.ajax({
            type: 'POST',
            datatype: 'JSON',
            assync: true,
            data: dados,
            url: '../modelo/retorno.php',
            success: function(){

            }
        })
        
    })
})