<!DOCTYPE html>
<html>
  <head>
      <title>Vaga Basis</title>
      <meta charset="UTF-8">

      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/global.css">
  </head>

  <body class="mult">
    <div id="content-export">

      <header>
        <img src="img/mult/headerPcd.png" />
      </header>

      <div class="text-content">
      
        <div class="content-gray">
            <div style="text-align: center;">
              <b>Formação:</b>
              <textarea style="text-align: center;" onkeyup="auto_grow(this)">Nível Superior na area de TI ou Concluído</textarea>
            </div>
            <hr>
            <ul>
              <li>
                <b><input type="text" value="Cargo Aqui"> </b>
                <textarea onkeyup="auto_grow(this)">digite a formação aqui...</textarea>

                <b><input type="text" value="Cargo Aqui"> </b>
                <textarea onkeyup="auto_grow(this)">digite a formação aqui...</textarea>
              </li>

              <li>
                <b><input type="text" value="Cargo Aqui"> </b>
                <textarea onkeyup="auto_grow(this)">digite a formação aqui...</textarea>

                 <b><input type="text" value="Cargo Aqui"> </b>
                <textarea onkeyup="auto_grow(this)">digite a formação aqui...</textarea>
              </li>

            </ul>
            
        </div>

        <img src="img/mult/footer.png" alt="Footer Image" />

      </div>

    </div><!-- / content-export -->
         
    <div class="btn-download">
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