<?php
// Aqui você pode iniciar sessões ou incluir configurações, se quiser futuramente
// session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/sobre.css">
    <link rel="stylesheet" href="../styles/headerFooter.css">
    <link rel="shortcut icon" href="..//imagens/logo_transparente_455D73.png" type="image/x-icon">
    <title>Sobre</title>
</head>
<body>
    <header>
    <div class="container header-content">

        <div class="logo">
            <a href="../Páginas Principais/PortaldoSite.php"><img src="../imagens/logo_transparente_branca.png" alt="Logo-Branca"></a>
            <hr>
            <span>Lima Estevam <br> Clínica Generalista</span>
        </div>

        <nav>
            <ul>
                <li><a href="../Páginas Principais/sobre.php">Sobre</a></li>
                <li><a href="../Páginas Principais/especialidades.php">Especialidades</a></li>
                <li><a href="../Páginas Principais/faleConosco.php">Fale Conosco</a></li>
                <li><a href="../Páginas Principais/ondeEstamos.php">Onde Estamos</a></li>
            </ul>
        </nav>

        <div class="header-buttons">
            <a href="../Paciente PHP/loginPaciente.php">
                <button>Agendar Consulta</button>
            </a>
            <a href="../Médico PHP/loginDoutor.php">
                <button>Portal Dr.</button>
            </a>
        </div>
    </div>
</header>
<main>

    <!-- SOBRE -->
    <section class="sobre">
        <div class="container">

            <h1>Sobre nós</h1>

            <p class="subtitulo">
                A nossa história surge a partir de uma ideia entre dois médicos que
                colocam como prioridade o condicionamento físico como parte do
                tratamento do paciente
            </p>

            <div class="sobre-conteudo">

                <div class="sobre-frase">
                    Cuidar de você é <br>
                    a nossa <br>
                    prioridade
                </div>

                <div class="sobre-texto">
                    A nossa história surge a partir de uma ideia entre dois médicos
                    que colocam como prioridade o condicionamento físico como parte
                    do tratamento do paciente
                </div>

            </div>

        </div>
    </section>

    <!-- COMPROMISSO -->
    <section class="compromisso">
        <img src="../imagens/sobre_imagem.png" alt="banner">
    </section>

</main>
<footer>

    <div class="container footer-content">

        <div class="footer-logo">
            <img src="../imagens/logo_transparente_branca.png" alt="logo">
            <p>Lima Estevam <br> Clínica Generalista</p>
        </div>

        <div>
            <h4>Central de ajuda</h4>
            <p>Perguntas frequentes</p>
            <p>Fale conosco</p>
        </div>

        <div>
            <h4>Central de Informações</h4>
            <p>Whatsapp<br>(11) 9543-1234</p>
            <p>Telefone<br>(11) 4123-456</p>
        </div>

    </div>

    <div class="copyright">
    © 2026 Clínica Lima Estevam
    </div>

</footer>
</body>
</html>