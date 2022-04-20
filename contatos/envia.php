<?php


$title = "Faça Contato";

require($_SERVER['DOCUMENT_ROOT'] . '/_header.php');
require($_SERVER['DOCUMENT_ROOT'] . '/_config.php');

/**
 * Processa envio do formulário.
 */
//echo $_POST['nome'];
//exit;

/***********************************************
 * Seus códigos PHP desta página iniciam aqui! *
 ***********************************************/

    // Processa o formulário, se ele foi enviado
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

         // Cria e inicializa as variáveis usadas no script
        $nome = $email = $assunto = $mensagem = $feedback = '';

        // Recebe o campo 'nome' do formulário e sanitiza
        $nome = trim(htmlspecialchars($_POST['nome']));

        // Recebe o campo 'email' dor formulário e sanitiza
        $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));

        // Recebe o campo 'assunto' do formulário e sanitiza
        $assunto = trim(htmlspecialchars($_POST['assunto']));

        // Recebe o campo 'mensagem' do formulário e sanitiza
        $mensagem = trim(htmlspecialchars($_POST['mensagem']));

          // Verifica se tem algum campo vazio
    if($nome === '' OR $email === '' OR $assunto === '' OR $mensagem === '') {

        // Exibe mensagem de erro e não faz mais nada.
        $feedback = <<<HTML

        <h3>Oooops!</h3>
        <p>Não foi possível enviar o contato.</p>
        <p>Você precisa preencher todos os campos do formulário.</p>
        <p><button onclick="history.go(-1)">&larr; Voltar</button></p>

HTML;

    } else {
         /**
         * Se todos os campos estão preenchidos.
         * Salva dados no banco de dados.
         */

        // Query de escrita no banco
        $sql = <<<SQL

        INSERT INTO contacts (
        name,
        email,
        subject,
        message
        ) VALUES (
        '{$nome}',
        '{$email}',
        '{$assunto}',
        '{$mensagem}'
        );
SQL;

        // Escreve no banco de dados
        $conn->query($sql);

            // Obtem o primeiro nome do remetente



            // Gera um array com as partes do nome
            // $parts[0] contem o primeiro nome
            $parts = explode('', $nome);




        // Agradecer ao usuário
        $feedback = <<<HTML
        <h3>Olá {$parts[0]}!</h3>
        <p>Seu contato foi enviado com sucesso.</p>
        <p><em>Obrigado...</em></p>
        <p><button onclick="location.href = '/'"><i class="fa-solid fa-house-chimney"></i> Página inicial </button></p>

HTML;

// Envia e-mail para o administrador do site
// ATENÇÃO! Só funciona em provedor pago. não funciona em redes locais.

 // Mensagem do e-mail
 $mail_message = <<<TXT

 Novo contato enviado para Vitugo:
 
  - Remetente: {$nome}
  - E-mail: {$email}
  - Assunto: {$assunto}
  - Mensagem:
  {$mensagem}
 
 Obrigado...
 
 TXT;
 
         // Enviando e-mail para 'admin@vitugo.com'.
         mail('admin@vitugo.com', 'Um contato foi enviado.', $mail_message);
     







}
    


    } else {
    
        /**
         * Se o formulário NÃO foi enviado
         * sai desta página e mostra o formulário para o usuário.
         */
        header('Location: index.php');
    }

/************************************************
 * Seus códigos PHP desta página terminam aqui! *
 ************************************************/

?>

<section>

    <h2>Título da página</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, iste aliquam aperiam voluptatem molestias nemo odit unde modi cupiditate exercitationem doloremque quaerat soluta rerum quidem dignissimos officiis sapiente, aut alias!</p>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio soluta voluptatum consequatur voluptatibus cupiditate temporibus qui, nostrum deserunt minus laudantium in officia rem dignissimos facilis modi culpa error aliquam? Quam?</p>

</section>

<aside>

    <h3>Lateral</h3>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, aperiam corporis culpa consequatur iusto.</p>

</aside>

<?php

// Inclui o rodapé da página
require($_SERVER['DOCUMENT_ROOT'] . '/_footer.php');