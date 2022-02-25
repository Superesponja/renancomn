    
    if(window.SimpleSlide){
        new SimpleSlide({
            slide: 'principal', // nome do atributo data-slide="principal"           
            time: 3000, // tempo de transição dos slides            
        });
    }

    if(window.SimpleAnime){
        new SimpleAnime();
    }

    if(window.SimpleForm){
        new SimpleForm({
        form: ".formphp",
        button: "#enviar",
        erro: "<div id='form-erro'><h2>Erro no envio!</h2><p>tente para o email: renan@renancomn.com.br .",
        sucesso: "<div id='form-sucesso'><h2>Formulário enviado com sucesso</h2><p>Em breve, retornaremos o contato.",
        });
    }
    
