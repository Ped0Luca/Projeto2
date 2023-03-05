<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
</head>
<body>
    <h1>Formulário de Contato</h1>
    <!--Para o usuario por seu nome -->
<form action="" method="get">
    <label for="GET-name">Name:</label>
    <input id="GET-name" type="text" name="name"> <br>

 <!--Para o usuario colocar seu email-->
  <form action="" method="get">
    <label for="GET-email">E-mail:</label>
    <input id="GET-email" type="text" name="name"> <br>

  <!--Para o usuario colocar seu Comentário-->
  <form action="" method="get">
    <label for="GET-comentario">Comentário:</label>
    <input id="GET-comentario" type="text" name="name"> <br>

 <!--Colocar tag para o usuario selecionar -->
  <form action="" method="post">
    <fieldset>
      <legend></legend>
      <input type="checkbox" name="checkbox" id="checkbox"> <label for="checkbox">Concordo com os <a href="Termos.html"target="_blank">Termos de Uso</a> do formúlario.</label> <br>

    </fieldset>
    <!--Botão de salvar -->
    <blockquote><input type="submit" value="Save"></blockquote>
  </form>
</body>
</html>