<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/headerFooter.css">
    <link rel="stylesheet" href="../styles/procuraProntuarioDoutor.css">
    <link rel="shortcut icon" href="../imagens/logo_transparente_455D73.png" type="image/x-icon">
    <title>Pesquisar Prontuário</title>
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
                    <li><a href="../Médico PHP/pacientesDoutor.php">Pacientes</a></li>
                    <li><a href="../Médico PHP/procuraProntuario.php">Prontuário</a></li>
                    <li><a href="../Médico PHP/pedidos.php">Pedidos de Exame</a></li>
                </ul>
            </nav>

            <div class="header-buttons">
                <button>Doutor Miguel Lima</button>
            </div>

        </div>
    </header>

    <main class="find-patient-main container">
    <h1 class="main-title">Encontrar paciente</h1>

    <section class="search-section">
        <form class="search-form">
            <div class="search-input-group name">
                <label for="nome-completo">Nome Completo</label>
                <input type="text" id="nome-completo">
            </div>
            <div class="search-input-group cpf">
                <label for="cpf-busca">CPF</label>
                <input type="text" id="cpf-busca">
            </div>
            <div class="search-input-group date">
                <label for="data-nasc">Data de Nascimento</label>
                <input type="date" id="data-nasc">
            </div>
        </form>
    </section>

    <section class="results-grid">
        <article class="paciente-card">
            <a href="./prontuario.html">
            <div class="paciente-info">
                <h3>Nome do paciente</h3>
                <p><strong>Data de nascimento:</strong> dd/mm/aa</p>
                <p><strong>CPF:</strong></p>
                <p><strong>Telefone Celular:</strong></p>
                <p><strong>Motivo da Consulta:</strong> Estou me sentindo desanimada.</p>
            </div> </a>
            <div class="paciente-photo"></div>
        </article>

        <article class="paciente-card">
            <div class="paciente-info">
                <h3>Nome do paciente</h3>
                <p><strong>Data de nascimento:</strong> dd/mm/aa</p>
                <p>...</p>
            </div>
            <div class="paciente-photo"></div>
        </article>

        <article class="paciente-card">
            <div class="paciente-info">
                <h3>Nome do paciente</h3>
                <p>...</p>
            </div>
            <div class="paciente-photo"></div>
        </article>

        <article class="paciente-card">
            <div class="paciente-info">
                <h3>Nome do paciente</h3>
                <p>...</p>
            </div>
            <div class="paciente-photo"></div>
        </article>
    </section>
</main>

    <footer>

    <div class="container footer-content">

        <div class="footer-logo">
            <img src="../imagens/logo_transparente_branca.png" alt="Logo-Branca">
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