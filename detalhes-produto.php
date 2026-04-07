<?php
require_once 'init.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="imagens/logo-site.png">
    <link rel="stylesheet" href="style-detalhes.css">
    <title>Nike Precision VII - SkyStep <?php print $nome_loja;?></title>
</head>

<body>
    <?php
    require 'partials/header.php';
    ?>
    <div class="container">
        <img src="imagens/logo-jordan-branca.png">
        <img src="imagens/nike.png">
        <img src="imagens/puma.png">
        <img src="imagens/adidas.png">
        <img src="imagens/underarmour.png">
    </div>

    <main class="produto-container">
        <div class="produto-box">
            <div class="produto-img">
                <img src="https://imgcentauro-a.akamaihd.net/660x660/9883943QA9.jpg">
            </div>

            <div class="produto-info">
                <h1>Nike Precision VII</h1>
                <p class="descricao">
                    Domine a quadra com o Nike Precision VII. Ideal para jogadores que buscam
                    estabilidade, conforto e controle em cada movimento. Seu design moderno
                    garante desempenho e estilo dentro e fora das quadras.
                </p>

                <span class="preco">R$ 250,00</span>

                <div class="tamanhos">
                    <p>Tamanho:</p>
                    <button>38</button>
                    <button>39</button>
                    <button>40</button>
                    <button>41</button>
                    <button>42</button>
                </div>

                <div class="acoes">
                    <button class="btn"><a href="login.php">Comprar Agora</a></button>
                    <button class="btn">Adicionar ao Carrinho</button>
                </div>

            </div>

        </div>

    </main>

    <footer class="footer">

        <div class="footer-container">

            <div class="footer-box">
                <h3>SkyStep</h3>
                <p>Os melhores tênis para estilo e performance.</p>
                <img src="imagens/logo-site.png" id="logo-footer">
            </div>

            <div class="footer-box">
                <h3>Contato</h3>
                <p>Email: contato@skystep.com</p>
                <p>Telefone: (19) 99999-9999</p>
                <img src="imagens/telefone-tocando.png" id="tel-footer">
            </div>

            <div class="footer-box">
                <form class="label-contato">
                    <h3>Avalie nosso site</h3>

                    <input type="text" placeholder="Seu nome" required>
                    <input type="email" placeholder="Seu email" required>
                    <textarea placeholder="Seu comentário"></textarea>

                    <button type="submit" class="btn">Enviar</button>
                </form>
            </div>

        </div>

        <div class="footer-bottom">
            <p>© 2026 SkyStep - Todos os direitos reservados</p>
        </div>

    </footer>

</body>
</html>