<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
  <div class="container col-sm-9">
    <div class="row">
      <div class="col-sm-3">
        <img src="imagem/imagem.png" alt="Logotipo da empresa com dois triângulos sobrepostos.">
      </div>
          <div class="col-sm-9">
            <h1>Empresa XPTO</h1>
    
               <ul class="container d-lg-block d-sm-none" id="atalhos">
                <li><a href="home.html"rel="next">Home</a></li>
                <li><a href="contato.html"rel="next">contato</a></li>
                </ul>
            </div> 
            
  </div> 
          <section class="row">
            <div class="col-12 d-none">
              <h2 id="Menu">Menu</h2>
            </div>
            <div class="col-sm-10 d-lg-none">
                <div class="pos-f-t">
                  <div class="collapse" id="navbarToggleExternalContent">
                    <div class="text-black-50 h5">
                      <h3 class="text-black-50 h5"><a href="home.html" accesskey="1">Home</a></h3>
                      <span class="text-muted"><a href="teste2.html" accesskey="2">Contato</a></span>
                    </div>
                  </div>
                  <nav class="navbar navbar-dark bg-transparent">
                    <button class="navbar-toggler badge-dark"type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Alterna navegação">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  </nav>

                </div>
            </div>
          </section>
            
              
              <form class="needs-validation" novalidate>
                <div class="form-row">
                  <h2 id="formulario">Formulário de Contato</h2>
                  <div class="container ">
                    <label for="validationCustom01">Nome</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="Nome*" value="" required>
                    <div class="valid-feedback">
                      Tudo certo!
                    </div>
                  <div class="invalid-feedback">
                    *Campo Obrigatório
                  </div>
                  </div>
                  <div class="container ">
                    <label for="validationCustom02">E-mail</label>
                    <input type="text" class="form-control" id="validationCustom02" placeholder="E-mail*" value="" required>
                    <div class="valid-feedback">
                      Tudo certo!
                    </div>
                    <div class="invalid-feedback">
                      *Campo Obrigatório
                    </div>
              
                    <div class="container col-sm-12">
                      <label for="validationCustom02">Mensagem</label>
                      <textarea class="form-control" id="Mensagem" placeholder="Mensagem" required></textarea>
                      <div class="valid-feedback">
                        Tudo certo!
                      </div>
                    </div>
                    <div class="invalid-feedback">
                      *Campo Obrigatório
                    </div>
              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                  <label class="form-check-label" for="invalidCheck">
                    Concordo com os<a href="Termos.html"> termos e condições</a>
                  </label>
                  <div class="invalid-feedback">
                    Você deve concordar, antes de continuar.
                  </div>
                </div>
              </div>
              <button class="btn btn-primary" type="submit">Enviar</button>
            </form>
              <footer class="row">
                <div class="col-12">
                  <p>Copyright © 2021</p>
                </div>
              </footer>
            </div>
            </form>
  
  
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <noscript>Atualize seu navegador</noscript>
  <script>
    // Exemplo de JavaScript inicial para desativar envios de formulário, se houver campos inválidos.
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Pega todos os formulários que nós queremos aplicar estilos de validação Bootstrap personalizados.
        var forms = document.getElementsByClassName('needs-validation');
        // Faz um loop neles e evita o envio
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
    </script>

</body>
</html>


