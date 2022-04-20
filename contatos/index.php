<?php

$title = "Faça Contato";

require($_SERVER['DOCUMENT_ROOT'] . '/_header.php');
require($_SERVER['DOCUMENT_ROOT'] . '/_config.php');


?>

<section>

    <h2>Faça Contato</h2>
    <form action="envia.php" method="post">
        <p>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required minlength="3">
            <!-- O Campo é obrigatório e deve ter pelo menos 3 caracteres -->
        </p>

        <p>
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" required>
            <!-- O campo é obrigatório e deve ser um email - type="email" --> 
        </p>

        <p>
            <label for="assunto">Assunto:</label>
            <input type="text" name="assunto" id="assunto" required minlength="5">
            <!-- O campo é obrigatório e deve ter pelo menos 5 caracteres --> 
        </p>

        <p>
            <label for="mensagem">Mensagem:</label>
            <textarea name="mensagem" id="mensagem" required minlength="5"></textarea>
            <!-- O campo é obrigatório e deve ter pelo menos 5 caracteres -->
        </p>

        <p>
            <button type="submit">Enviar</button>
        </p>

    
    </form>
    
</section>

<aside>

    <h3>Lateral</h3>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, aperiam corporis culpa consequatur iusto.</p>

</aside>

<?php

// Inclui o rodapé da página
require($_SERVER['DOCUMENT_ROOT'] . '/_footer.php');