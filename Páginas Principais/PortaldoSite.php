<?php
// Aqui você pode iniciar sessões ou incluir configurações, se quiser futuramente
// session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/portalSite.css">
    <link rel="stylesheet" href="../styles/headerFooter.css">
    <link rel="shortcut icon" href="..//imagens/logo_transparente_455D73.png" type="image/x-icon">
    <title>Clínica Lima Estevam</title>
</head>

<body>

<header>
    <div class="container header-content">

        <div class="logo">
            <a href="../Páginas Principais/PortaldoSite.php">
                <img src="../imagens/logo_transparente_branca.png" alt="Logo-Branca">
            </a>
            <hr>
            <span><div class="Cliver">Lima Estevam</div> Clínica Generalista</span>
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
<div class="banner">

</div>

<section class="blog">

    <div class="container">

        <div class="blog-header">
            <h3>Dicas de Saúde</h3>
        </div>

        <div class="blog-cards">

            <div class="card">
                <div class="img">
                    <a href="../blogs/pagBlog01.php">
                        <img src="../imagens/foto Blog1.png" alt="Corrida">
                    </a>
                </div>
                <p>
                    A prática regular de corrida pode estimular a atividade cerebral, melhorar o foco e reduzir o estresse, contribuindo para uma mente mais saudável no dia a dia.
                </p>
            </div>

            <div class="card">
                <div class="img">
                    <a href="../blogs/pagBlog02.php">
                        <img src="../imagens/foto Blog2.png" alt="Fisioterapia">
                    </a>
                </div>
                <p>
                    A fisioterapia auxilia na recuperação de lesões, melhora a mobilidade e promove mais qualidade de vida para pacientes de todas as idades.
                </p>
            </div>

            <div class="card">
                <div class="img">
                    <a href="../blogs/pagBlog03.php">
                        <img src="../imagens/foto Blog3.png" alt="Cardiologia">
                    </a>
                </div>
                <p>
                    Alguns sintomas e fatores de risco indicam que é importante procurar um especialista para avaliar a saúde do coração e prevenir possíveis complicações.
                </p>
            </div>

        </div>

    </div>

</section>


<footer>

    <div class="container footer-content">

        <div class="footer-logo">
            <img src="../imagens/logo_transparente_branca.png" alt="logo">
            <span><div class="Cliver">Lima Estevam</div>   Clínica Generalista </span>
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
        © <?php echo date("Y"); ?> Clínica Lima Estevam
    </div>

</footer>

</body>
</html>