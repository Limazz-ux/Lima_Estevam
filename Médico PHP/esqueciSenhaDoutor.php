<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/esqueciSenhaDoutor.css">
    <link rel="stylesheet" href="../styles/headerFooter.css">
    <link rel="shortcut icon" href="../imagens/logo_transparente_455D73.png">
    <title>Esqueci a Senha</title>
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
                    <li><a href="./sobre.html">Sobre</a></li>
                    <li><a href="./especialidades.html">Especialidades</a></li>
                    <li><a href="./faleConosco.html">Fale Conosco</a></li>
                    <li><a href="./ondeEstamos.html">Onde Estamos</a></li>
                </ul>
            </nav>

            <div class="header-buttons">
                <button>Agendar Consulta</button>
                <button>Portal Dr.</button>
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
            
            <div class="auth-content">
                <h2>ESQUECEU A SENHA?</h2>
                <p>Não se preocupe, digite o seu e-mail bussiness cadastrado para receber um código para alteração</p>
                
                <form class="auth-form">
                    <div class="auth-input-group">
                        <label for="email">Digite o seu e-mail</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <a href="../Médico PHP/codigoVerificacaoDoutor.php">Receber Código</a>
                </form>
            </div>
        </section>
    </div>
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