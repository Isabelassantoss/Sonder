<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="/Sonder/assets/favicon.png">

    <title>Sonder - Música também conta histórias</title>

    <link rel="stylesheet" href="/Sonder/style/style.css">

</head>

<body>

    <header>

        <div class="logo">

            <a href="index.php">
                <img src="/Sonder/imagens/logo.png" alt="Logo Sonder">
            </a>
        </div>

        <nav>

            <a href="/Sonder/index.php">Início</a>

            <a href="/Sonder/login/login.php">Entrar</a>

            <a href="/Sonder/login/cadastra.php">Criar conta</a>

        </nav>

    </header>

    <main>

        <section class="apresentacao">

            <h2>Música também conta histórias.</h2>
            
            <p>
            Mergulhe em um universo sonoro feito por e para apaixonados por música. Nossa plataforma foi idealizada para quem não se contenta apenas em apertar o play, mas busca entender, sentir e eternizar cada experiência auditiva. Aqui, você tem a liberdade de descobrir faixas inexploradas, navegar por sonoridades de diferentes partes do mundo e se conectar diretamente com artistas emergentes e independentes que estão moldando o futuro da música.
            </p>

            <a class="botao" href="/Sonder/login/cadastra.php"> Criar minha conta <br> </a>

        </section>

    <section class="musicas">


            <div class="cards">


                <div class="card">

                    <img src="/Sonder/imagens/musica1.jpg" alt="Capa de música">

                    <h3>Novos sons</h3>

                    <p>
                        Encontre músicas que combinam com você.
                    </p>

                </div>


                <div class="card">

                    <img src="/Sonder/imagens/musica2.jpg" alt="Capa de música">

                    <h3>Novos artistas</h3>

                    <p>
                        Conheça artistas e descubra novas histórias.
                    </p>

                </div>


                <div class="card">

                    <img src="/Sonder/imagens/musica3.jpg" alt="Capa de música">

                    <h3>Suas avaliações</h3>

                    <p>
                        Relembre as músicas que você avaliou e confira suas opiniões.
                    </p>

                </div>

                <div class="card">

                    <img src="/Sonder/imagens/musica4.jpg" alt="Capa de música">

                    <h3>Compartilhe sua opinião</h3>

                    <p>
                        Avalie suas músicas favoritas e conte o que faz cada uma ser especial.
                    </p>

                </div>

                <div class="card">

                    <img src="/Sonder/imagens/musica5.jpg" alt="Capa de música">

                    <h3>Favoritas da comunidade</h3>

                    <p>
                        Descubra quais músicas conquistaram outros apaixonados por música.
                    </p>

                </div>




            </div>

        </section>
    </main>

    <?php include './includes/footer.php'; ?>

</body>

</html>