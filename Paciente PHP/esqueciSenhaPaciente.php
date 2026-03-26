<?php
session_start();
include("../conexao.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = trim($_POST['email']);
    $email = mysqli_real_escape_string($conn, $email);

    // Verifica se email existe
    $sql = "SELECT * FROM pacientes WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) == 1) {

        // Gerar código de verificação (6 dígitos)
        $codigo = rand(100000, 999999);

        // Salvar na sessão
        $_SESSION['codigo_verificacao'] = $codigo;
        $_SESSION['email_recuperacao'] = $email;

        // Popup + redirecionamento para a página de digitar o código
        echo "<script>
            alert('Seu código de verificação é: $codigo');
            window.location.href = 'codigoVerificacao.php';
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
   <link rel="stylesheet" href="../styles/esqueciSenhaPaciente.css">
    <link rel="stylesheet" href="../styles/headerFooter.css">
    <link rel="shortcut icon" href="../imagens/logo_transparente_455D73.png">
    <title>Esqueci a senha | Lima Estevam</title>
</head>
<body>
    <header>
    <div class="container header-content">

         <div class="logo">
            <a href="../Páginas Principais/PortaldoSite.php"><img src="../imagens/logo_transparente_branca.png" alt="Logo-Branca"></a>
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

<main class="auth-main">
    <div class="auth-overlay"></div>
    
    <div class="auth-wrapper">
        <section class="auth-card">
            <div class="logo">
                <img src="../imagens/logo_transparente_branca.png" alt="Logo-Branca">
                <hr>
                <span><div class= "Cliver">Lima Estevam</div> Clinica generalista </span>
            </div>
                <br>
            <h2>ESQUECEU A SENHA?</h2>
            <p>Não se preocupe, digite o seu e-mail cadastrado para receber um código de alteração</p>
            
            <form method="post" action="">
                <label for="email">Digite o seu e-mail</label>
                <input type="email" name="email"  id="email" required>
                
               <button class= "btn-continue">Receber código</button>
            </form>
        </section>
    </div>
</main>

<footer>

    <div class="container footer-content">

        <div class="footer-logo">
            <img src="../imagens/logo_transparente_branca.png" alt="logo">
              <span><div class="Cliver">Lima Estevam</div> Clinica Generalista</span>
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