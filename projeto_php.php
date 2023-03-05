<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="estilo.css">
    <title>XPTO</title>
    
</head>
<body>
     <img src="imagem/imagem.png" alt="Logo">
     <h1>Empresa XPTO</h1>
    <ul>
          <li><a accesskey="1" href="home.html" target="_blank" rel="next">Home</a></li> 
          <li><a href="contato.html" rel="next">contato</a></li>
    </ul>
      <!--Para o usuario por seu nome -->
<form action="nome" method="get">
  <label for="GET-name">Name:</label>
  <input id="GET-name" type="text" name="name"> <br>

<!--Para o usuario colocar seu email-->
<form action="email" method="get">
  <label for="GET-email">E-mail:</label>
  <input id="GET-email" type="text" name="name"> <br>

<!--Para o usuario colocar seu Comentário-->
<form action="comentario" method="get">
  <label for="GET-comentario">Comentário:</label>
  <input id="GET-comentario" type="text" name="name"> <br>

<!--Colocar tag para o usuario selecionar -->
<form action="" method="post">
  <fieldset>
    <legend>*</legend>
    <input type="checkbox" name="checkbox" id="checkbox"> <label for="checkbox">Concordo com os <a href="Termos.html"target="_blank">Termos de Uso</a> do formúlario.</label> <br>
  </fieldset>
   
</form> 
  <!--Botão de salvar -->
    <label for="post-salvar"></label>
    <blockquote><input type="submit" value="Save"id="Salvar"></blockquote>
</body>
   
  
  <div>
    <p>Copyright © 2023</p>
  </div>

  

</body>
</html>