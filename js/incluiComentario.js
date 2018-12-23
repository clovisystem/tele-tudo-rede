$("#comentario").enter(function(){
    var mensagem=$(this).val();
    
    if(insere!=''){
        var dados={comentario:mensagem}
        
        $.post('../comentario_enviado.php',dados,function(retorna){
            $(".comentarioRetorno").html(retorna);
        });
    }
    else{
        $(".comentarioRetorno").html('');
    }
})