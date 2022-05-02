<?php

/**
 * Arquivo que faz a configuração incial da página.
 * Por exemplo, conecta-se ao banco de dados.
 * 
 * A superglobal "$_SERVER['DOCUMENT_ROOT']" retorna o caminho da raiz do site no Windows.
 * Ex.: C:\xampp\htdocs 
 *     Referências:
 *     → https://www.w3schools.com/php/php_includes.asp
 *     → https://www.php.net/manual/pt_BR/function.include.php
 *     → https://www.php.net/manual/pt_BR/language.variables.superglobals.php
 */
require($_SERVER['DOCUMENT_ROOT'] . '/_config.php');

/***********************************************
 * Seus códigos PHP desta página iniciam aqui! *
 ***********************************************/

// Se usuário não está logado, redireciona para a página de perfil dele.
    if(isset($_COOKIE['user'])) header('Location: /');

// Se existe a variável "logout" no URL da página.

    if($_SERVER['QUERT_STRING'] === 'logout') {

        // Apaga o cookie, colocando o tempo de vida negativo (-1)

            setcookie('user', '',-1,'/');

        // Redirecionar para 'home' 
        
        header('Location: /');
    }


/************************************************
 * Seus códigos PHP desta página terminam aqui! *
 ************************************************/

/**
 * Variável que define o título desta página.
 * Essa variável é usada no arquivo "_header.php".
 * OBS: para a página inicial (index.php) usaremos o 'slogan' do site.
 *     Referências:
 *     → https://www.w3schools.com/php/php_variables.asp
 *     → https://www.php.net/manual/pt_BR/language.variables.basics.php
 */
$title = "Logout...";

/**
 * Inclui o cabeçalho da página.
 */
require($_SERVER['DOCUMENT_ROOT'] . '/_header.php');

?>

<section>

        <h2>Logout / Sair</h2>
        <p>Se você sair do aplicativo agora, terá que entrar novamente para ter acesso ao conteúdo exclusivo.</p>
        <p>Clique no botão abaixo para sair.</p>
        <p class="btn-center">
            <button type="button" onclick="location.href = '?logout'">Sair</button>
        </p>

</section>

<aside>

    <h3>Lateral</h3>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, aperiam corporis culpa consequatur iusto.</p>

</aside>

<?php

/**
 * Inclui o rodapé da página.
 */
require($_SERVER['DOCUMENT_ROOT'] . '/_footer.php');