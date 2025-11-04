<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Rossi FutStore</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/projeto_pi_php/public/css/style.css"/>
</head>

<body>
    
    <header class="menu-bg;">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="http://localhost/projeto_pi_php/app/Views/dashBoard.php">RossiFutStore</a>
                
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/projeto_pi_php/app/Views/">Home</a>
                        </li>
                        <li class="nav-item">
                             <a class="nav-link" href="http://localhost/projeto_pi_php/app/Views/listagem.php">Lista de usuarios</a>
                        </li>
                        <li class="nav-item">
                             <a class="nav-link" href="http://localhost/projeto_pi_php/app/Views/cadastro.php">Cadastro de usuario</a>
                        </li>
                    </ul>
                     <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                     </form>
                 </div>
             </nav>
    </header>

    <h1 class="introducao">Estilo único, como você.</h1>

    <section class="sobre" id="sobre">
        <div class="sobre-info">
            <h1>Sobre</h1>
            <p>A <strong>Rossi FutStore</strong> é apaixonada pelo esporte mais amado do mundo. 
    Nossa missão é oferecer aos torcedores camisas oficiais e licenciadas dos principais clubes do Brasil e do exterior.</p>

            <p>Com envio rápido para todo o Brasil, promoções exclusivas e atendimento de qualidade, 
    a Rossi FutStore é o lugar certo para vestir a paixão pelo futebol. </p>
        </div>
        <div>
            <img src="https://preview.redd.it/shirt-collection-v0-ll2n46k2l7jf1.jpeg?auto=webp&s=11384659cde3ec74d4b1f93e2a1d86ed6c053e2b" alt="foto-sobre">
        </div>
        <div>
            <img src="https://www.ultimadivisao.com.br/wp-content/uploads/2023/05/whatsapp-image-2023-05-03-at-205255-1.jpeg" alt="foto-sobre">
        </div>
    </section>

    <section class="produtos" id="produtos">
        <h1>Produtos</h1>
        <div class="produtos-container">
            <div class="produtos-item sp">
                <h2>São Paulo</h2>
                <img src="https://m.media-amazon.com/images/I/51Qy5SLkusL._AC_SX679_.jpg" alt="foto-camiseta-purple">
            </div>
            <div class="produtos-item miami">
                <h2>Inter Miami</h2>
                <img src="https://static.netshoes.com.br/produtos/camisa-inter-miami-home-2526-sn-torcedor-adidas-masculina/18/FBA-3616-018/FBA-3616-018_zoom1.jpg?ts=1740134875&ims=1088x" alt="foto-camiseta-Pink">
            </div>
            <div class="produtos-item pal">
                <h2>Palmeiras</h2>
                <img src="https://m.media-amazon.com/images/I/61nzcRQjMVL._AC_SX679_.jpg" alt="foto-camiseta-green">
            </div>
        </div>
    </section>

    <section class="preco" id="preco">
        <div class="preco-item">
            <h2>Camisetas</h2>
            <span>A partir de <sup>R$</sup>79</span>
            <ul>
                <li>Camisas de clubes nacionais</li>
                <li>Modelos retrô</li>
                <li>Kits infantis</li>
                <li>Tecido simples</li>
            </ul>
            <a href=""> Comprar</a>
        </div>

        <div class="preco-item">
            <h2>Camisetas</h2>
            <span>A partir de <sup>R$</sup>129</span>
            <ul>
                <li>Camisetas oficiais</li>
                <li>Estampas atuais</li>
                <li>Tecido confortável</li>
                <li>Entrega padrão</li>
            </ul>
            <a href=""> Comprar</a>
        </div>

        <div class="preco-item">
            <h2>Camisetas</h2>
            <span>A partir de <sup>R$</sup>199</span>
            <ul>
                <li>Camiseta oficial de jogo</li>
                <li>Qualidade premium</li>
                <li>Escudo bordado</li>
                <li>Entrega expressa</li>
            </ul>
            <a href=""> Comprar</a>
        </div>
    </section>

    <section class="qualidade" id="qualidade">
        <div class="qualidade-item">
            <h2>Produto Original</h2>
            <p>Camisas licenciadas e com nota fiscal.</p>
        </div>

        <div class="qualidade-item">
            <h2>Entrega Rápida</h2>
            <p>Receba em até 3 dias úteis em regiões do Sudeste.</p>
        </div>

        <div class="qualidade-item">
            <h2>Parcelamento</h2>
            <p>Parcele suas compras em até 10x sem juros.</p>
        </div>

        <div class="qualidade-item">
            <h2>Variedade de Times</h2>
            <p>Brasileiros, europeus, seleções e edições retrô.</p>
        </div>

        <div class="qualidade-item">
            <h2>Atendimento Personalizado</h2>
            <p>Suporte via WhatsApp e e-mail para tirar dúvidas.</p>
        </div>

        <div class="qualidade-item">
            <h2>Frete Grátis</h2>
            <p>Em compras acima de R$ 300 para todo o Brasil.</p>
        </div>
    </section>

    <section class="loja">
        <div class="loja-info">
            <h1>RossiFutStore</h1>
            <p>Envie seu email para saber das promoções</p>
        </div>
        <form class="loja-form">
            <input type="text" placeholder="Seu e-mail">
            <button type="submit">Enviar</button>
        </form>
    </section>

    <footer class="footer">
        <p> RossiFutStore © Todos os direitos reservados.</p>
       </footer>
</body>

</html>