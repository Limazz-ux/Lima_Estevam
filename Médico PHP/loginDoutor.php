<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Projeto-Clinica-Lima-Estevam/styles/loginDoutor.css">
    <link rel="stylesheet" href="../Projeto-Clinica-Lima-Estevam/styles/headerFooter.css">
    <link rel="shortcut icon" href="../Projeto-Clinica-Lima-Estevam/imagens/logo_transparente_455D73.png">
    <title>Login Doutor</title>
</head>
<body>
    <header>
        <div class="container header-content">

            <div class="logo">
            <a href="../Páginas Principais/PortaldoSite.php"><img src="../Projeto-Clinica-Lima-Estevam/imagens/logo_transparente_branca.png" alt="Logo-Branca"></a>
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
    <main class="auth-main">
    <div class="auth-overlay"></div>
    
    <div class="auth-wrapper">
        <section class="auth-card">
            <header class="auth-card-header">
                <div class="auth-logo"></div>
                <div class="auth-brand">
                    <h1>LIMA ESTEVAM</h1>
                    <span>Clínica Generalista</span>
                </div>
            </header>
            
            <form class="auth-form">
                <div class="auth-input-group">
                    <label for="registro">Registro</label>
                    <input type="text" id="registro" name="registro" required>
                </div>

                <div class="auth-input-group">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" required>
                </div>

                <div class="auth-links">
                    <a href="../Médico PHP/primeiroAcessoMedico.php">Primeiro acesso? Clique aqui</a>
                    <a href="../Médico PHP/esqueciSenhaDoutor.php">Esqueceu senha?</a>
                </div>
                
                <a href="../Médico PHP/portalDoutor.php">Entrar</a>
            </form>
        </section>
    </div>
</main>
<footer>

    <div class="container footer-content">

        <div class="footer-logo">
            <img src="../Projeto-Clinica-Lima-Estevam/imagens/logo_transparente_branca.png" alt="logo">
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