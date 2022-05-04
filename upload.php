<?php

// Recebe dados do formulário
echo '<pre>';
print_r($_POST);
print_r($_FILES);
echo '</pre>';

// Salva arquivo enviado no servidor

move_uploaded_file($_FILES['arquivo']['tmp_name']
, 'arquivos/' . $_FILES['arquivo']['name']);

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Teste de Upload de arquivo</title>
</head>
<body>
    
    <!-- enctype="..." obrigatório para upload de arquivos -->
    <form action="upload.php" method="post" enctype="multipart/form-data">

        <p>Nome: <input type="text" name="nome" value="joca"></p>
        <p> E-mail: <input type="email" name="email" value="teste@teste"></p>

        <!-- Campo que pesquisa o arquivo a ser enviado (upload) no computador. -->   
        <p> Arquivo: <input type="file" name="arquivo"></p>       
       
        <p> <button type="submit">Enviar</button> </p>

    </form>


</body>
</html>