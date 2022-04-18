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
            <input type="text" name="nome" id="nome" required minlength="3" value="Joca da Silva">
        </p>

        <p>
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" required value="joca@joca">
        </p>

        <p>
            <label for="assunto">Assunto:</label>
            <input type="text" name="assunto" id="assunto" required minlength="5" value="Assunto do Joca">
        </p>

        <p>
            <label for="mensagem">Mensagem:</label>
            <textarea name="mensagem" id="mensagem" required minlength="5">Mensagem do Joca</textarea>
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