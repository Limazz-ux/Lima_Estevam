<?php
session_start();
include("../conexao.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $codigo_digitado = $_POST['codigo'];
    $nova_senha = $_POST['nova_senha'];
    $confirmar_senha = $_POST['confirmar_senha'];

    // ✅ Verifica se as senhas são iguais
    if ($nova_senha != $confirmar_senha) {
        echo "<script>alert('As senhas não coincidem!');</script>";
        exit();
    }

    // ✅ Verifica código
    if ($codigo_digitado == $_SESSION['codigo_verificacao']) {

        $email = $_SESSION['email_recuperacao'];

        // Atualiza senha (SEM criptografia)
        $sql = "UPDATE pacientes SET senha = '$nova_senha' WHERE email = '$email'";

        if (mysqli_query($conn, $sql)) {

            // Limpa sessão
            unset($_SESSION['codigo_verificacao']);
            unset($_SESSION['email_recuperacao']);

            echo "<script>
                alert('Senha alterada com sucesso!');
                window.location.href = 'loginDoutor.php';
            </script>";

        } else {
            echo "<script>alert('Erro ao atualizar senha!');</script>";
        }

    } else {
        echo "<script>alert('Código incorreto!');</script>";
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
    <title>Verificação</title>
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

<main class="auth-main">
    <div class="auth-overlay"></div>
    
    <div class="auth-wrapper">
        <section class="auth-card">
            <div class="logo"><img src="../imagens/logo_transparente_branca.png" alt="Logo-Branca">
                <hr>
                <span><div class= "Cliver">Lima Estevam</div> Clinica generalista </span>
            </div>
            <br>
            <h2>Alteração de Senha</h2>
            
            <form class="auth-form">
                <div class="auth-input-group">
                    <label for="codigo">Digite o Código</label>
                    <input type="text" id="codigo">
                </div>

                <div class="auth-input-group">
                    <label for="nova-senha">Nova Senha</label>
                    <input type="password" id="nova-senha">
                </div>

                <div class="auth-input-group">
                    <label for="confirmar-senha">Confirmar Senha</label>
                    <input type="password" id="confirmar-senha">
                </div>
                

                <button class= "btn-continue">Alterar</button>
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







