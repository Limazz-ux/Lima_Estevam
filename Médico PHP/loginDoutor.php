<?php
session_start();
include("../conexao.php"); // ajuste o caminho se necessário

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $registro = $_POST['registro'];
    $senha = $_POST['senha'];

    // Evitar SQL Injection
    $registro = mysqli_real_escape_string($conn, $registro);
    $senha = mysqli_real_escape_string($conn, $senha);

    // Consulta no banco
    $sql = "SELECT * FROM medico WHERE CRM = '$registro'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {

        $medico = mysqli_fetch_assoc($result);

        // Verificação da senha (simples, igual ao seu banco)
        if ($senha == $medico['senha']) {

            $_SESSION['medico_id'] = $medico['id'];

            // Redireciona para painel do médico
            header("Location: portalDoutor.php");
            exit;

        } else {
            echo "<script>alert('Senha incorreta!');</script>";
        }

    } else {
        echo "<script>alert('CRM não encontrado!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/loginPaciente.css">
    <link rel="stylesheet" href="../styles/headerFooter.css">
    <link rel="shortcut icon" href="../imagens/logo_transparente_branca.png">
    <title>Login do Doutor</title>
</head>
<body>
    <header>
    <div class="container header-content">

        <div class="logo">
            <a href="../Páginas Principais/PortaldoSite.php"><img src="../imagens/logo_transparente_branca.png" alt="Logo-Branca"></a>
            <hr>
             <span><div class="Cliver">Lima Estevam</div> Clinica Generalista </span>
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

<main class="login-main">
    <section class="login-wrapper">
        <div class="login-card">
            <div class="logo">
                <img src="../imagens/logo_transparente_branca.png" alt="logo">
                <span><div class="Cliver">Lima Estevam</div> Clinica generalista </span>
            </div>
            <br>
            <form method="POST" action="">
                
                <label for="registro">Registro</label>
                <input type="number" id="registro" name="registro" required>

                <label for="senha">Senha</label>
               <input type="password" id="senha" name="senha" required>

                <div class="login-links">
                    <a href="../Médico PHP/primeiroAcessoMedico.php">Primeiro acesso? Clique aqui</a>       
                    <a href="../Médico PHP/esqueciSenhaDoutor.php">Esqueceu senha?</a>
                </div>
                <button type="submit" class="login-button">Entrar</button>
            </form>
        </div>
    </section>

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

<?php if (isset($_SESSION['senha_temporaria'])): ?>
<script>
    alert("Sua senha temporária é: <?php echo $_SESSION['senha_temporaria']; ?>");
</script>
<?php 
    unset($_SESSION['senha_temporaria']); // limpa depois de mostrar
endif; 
?>

</body>
</html>