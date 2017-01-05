function trataBusca(texto){
        
        if (texto.indexOf("-") >= 0){
            var firstPart = texto.split('-');
            var newText = firstPart[0].replace(/\s/g, '_');
            return newText;
        }else{
            var newText = texto.replace(/\s/g, '_');
            return newText;
        }
    }   
    
    function primeiraMaisc(text){
        text = text.toLowerCase().replace(/(?:^|\s)\S/g, function(a) { return a.toUpperCase(); });
        return text;
    }
    
    (function worker() {
        $.ajax({
          type: "GET",  
          url: 'ajax/aovivo.php',
          dataType: "xml",
          success: function(data) {
              
            $musica = $(data).find( "musica" );
           
            //console.log('>'+$musica.text()+'<');
            
            if($musica.text()=='Radio Mania FM'){
                
                $('.capa').attr("src",'imagens/thumb-capa.jpg');
                $('.musica').html($musica.text());
                $('.artista').html('');
                
            }else if($musica.text()==''){
                
                $('.musica').html('RÃ¡dio Mania');
                
            }else if(primeiraMaisc($musica.text())!=$('.musica').html()){

                //console.log('atualiza');
            
                $('.musica').html(primeiraMaisc($musica.text()));

                $artista = $(data).find( "artista" );
                $('.artista').html(primeiraMaisc($artista.text()));

                    //console.log('busca imagem');
                    //console.log("track=" + trataBusca($('.musica').html() ) + " " + trataBusca( $('.artista').html() ) + '&musica='+$musica.text()+'&artista='+$artista.text());
                    
                    $.ajax({
                        type: "GET",
                        data : "track=" + trataBusca($('.musica').html() ) + " " + trataBusca( $('.artista').html() ) + '&musica='+$musica.text()+'&artista='+$artista.text(),
                        url: 'ajax/capa.php',
                        dataType: "json",
                        success: function(dataCapa) {
                          $('.capa').attr("src",dataCapa.url);
                          //console.log("track=" + trataBusca($('.musica').html() ) + " " + trataBusca( $('.artista').html() ));
                        }
                      });
                
            }
                
            
          },
          complete: function() {
            
            setTimeout(worker, 5000);
          }/*,
          error: function(data){
                console.log('erro');
                console.log(data);
                
                worker();
            }*/
        });
      })();
