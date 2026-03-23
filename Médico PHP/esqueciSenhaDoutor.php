<?php
session_start();
include("../conexao.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = trim($_POST['email']);
    $email = mysqli_real_escape_string($conn, $email);

    // Verifica se email existe
    $sql = "SELECT * FROM medico WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) == 1) {

        // Gerar código de verificação (6 dígitos)
        $codigo = rand(100000, 999999);

        // Salvar na sessão
        $_SESSION['codigo_verificacao'] = $codigo;
        $_SESSION['email_recuperacao'] = $email;

        // Popup + redirecionamento
        echo "<script>
            alert('Seu código de verificação é: $codigo');
            window.location.href = 'codigoVerificacaoDoutor.php';
        </script>";

    } else {
        echo "<script>alert('Email não encontrado!');</script>";
    }
}
?>

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
                <a href="../Páginas Principais/PortaldoSite.php">
                    <img src="../imagens/logo_transparente_branca.png" alt="Logo-Branca">
                </a>
                <hr>
                <span>
                    <div class="Cliver">Lima Estevam</div> 
                    Clinica Generalista
                </span>
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
                    <div class="logo">
                        <img src="../imagens/logo_transparente_branca.png" alt="Logo-Branca">
                        <hr>
                        <span>
                            <div class="Cliver">Lima Estevam</div> 
                            Clinica generalista
                        </span>
                    </div>
                </header>

                <div class="auth-content">
                    <h2>ESQUECEU A SENHA?</h2>
                    <p>
                        Não se preocupe, digite o seu e-mail business cadastrado 
                        para receber um código para alteração
                    </p>

                    <form class="auth-form" method="POST">
                        <div class="auth-input-group">
                            <label for="email">Digite o seu e-mail</label>
                            <input type="email" id="email" name="email" required>
                        </div>

                        <div class="button-wrapper">
                            <button type="submit">Solicitar</button>
                        </div>
                    </form>
                </div>

            </section>
        </div>
    </main>

    <footer>
        <div class="container footer-content">

            <div class="footer-logo">
                <img src="../imagens/logo_transparente_branca.png" alt="logo">
                <span>
                    <div class="Cliver">Lima Estevam</div> 
                    Clinica Generalista
                </span>
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