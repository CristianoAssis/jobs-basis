<!DOCTYPE html>
<html>
  <head>
      <title>Vaga Basis - Gerador de Imagem</title>
      <meta charset="UTF-8">

      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/global.css">
      <link rel="stylesheet" type="text/css" href="css/single.css">
  </head>

  <body>
    <div id="content-export">

      <header>
        <img src="img/single/logo-basis.jpg" />
        <br/>
        <label>Vaga em Aberto</label>
        <br/>
        <textarea class="titulo">Título Vaga</textarea>
      </header>

      <div class="text-content">
      
        <div class="content-gray">
            <b>Formação:</b>
            <textarea onkeyup="auto_grow(this)">digite a formação aqui...</textarea>

            <b>Conhecimento:</b>
            <textarea onkeyup="auto_grow(this)">digite os conhecimentos necessários aqui...</textarea>

            <b>Desejável</b>
            <textarea onkeyup="auto_grow(this)">digite as habilidades necessárias aqui...</textarea>
        </div>

        <div class="content-dark">
          <p>Interessados Cadastrar Currículo pelo site:</p>
          
            <a href="#">www.basis.com.br/trabalhe-conosco</a> </br>
            <a href="#">ou pelo email: rh@basis.com.br</a>
          
        </div>

      </div>

      <img id="change-url" class="image" src="img/single/gerente.png" />


    </div><!-- / content-export -->
         
    <div class="btn-download">
      <select id="combo">
        <option value="gerente">Gerentes, Requisitos e Outros</option>
        <option value="java">Java</option>
        <option value="estagio">Estágio</option>
        <option value="desenvolvimento">Desenvolvimento em Geral</option>
      </select>
      <br/>
      <br/>

      <a id="generatorImg">Clique aqui para finalizar</a> 
      <a id="downloadImg" href="" style="display:none;" download>Fazer Download</a>

      <a class="voltar" href="index.html">Voltar</a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src="js/html2canvas.js"></script>
      
      <script>
         $(function(){

          $("#generatorImg").click(function(){

            html2canvas($("#content-export"), {
              onrendered: function(canvas) {

                var imgsrc = canvas.toDataURL("image/png");
                console.log(imgsrc);
                $("#downloadImg").attr('href',imgsrc);
                $("#generatorImg").hide();
                $("#downloadImg").show();

                $('#downloadImg').click(function() {
                    location.reload();
                });

              }

            });

          }); 

          $('#combo').change(function(){
            if($(this).val() == 'java'){
              $('#change-url').attr('src','img/single/java.png');
            }
            if($(this).val() == 'gerente'){
              $('#change-url').attr('src','img/single/gerente.png');
            }
            if($(this).val() == 'desenvolvimento'){
              $('#change-url').attr('src','img/single/desenvolvimento.png');
            }
            if($(this).val() == 'estagio'){
              $('#change-url').attr('src','img/single/stag.png');
            }
          });

        });

        // Auto Size Textarea Campo
        function auto_grow(element) {
            element.style.height = "15px";
            element.style.height = (element.scrollHeight)+"px";
        }
      </script>

   </body>
</html>