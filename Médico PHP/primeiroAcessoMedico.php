<?php
session_start();
include("../conexao.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $crm = $_POST['crm'];
    $uf = $_POST['uf'];

    // Proteção básica contra SQL Injection
    $crm = mysqli_real_escape_string($conn, $crm);
    $uf = mysqli_real_escape_string($conn, $uf);

    // Verifica se existe médico
    $sql = "SELECT * FROM medico WHERE CRM = '$crm' AND uf = '$uf'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {

        //  Gerar senha aleatória
        $senha_aleatoria = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"), 0, 8);

        // (Recomendado) criptografar senha
        $senha_hash = password_hash($senha_aleatoria, PASSWORD_DEFAULT);

        // Atualizar senha no banco
        $update = "UPDATE medico SET senha = '$senha_hash' WHERE CRM = '$crm' AND uf = '$uf'";
        mysqli_query($conn, $update);

        // Guardar senha para mostrar no popup
        $_SESSION['senha_temporaria'] = $senha_aleatoria;

        // Redirecionar
        header("Location: loginDoutor.php");
        exit();

    } else {
        echo "<script>alert('CRM ou UF não encontrados!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../styles/primeiroAcessoMedico.css">
    <link rel="stylesheet" href="../styles/headerFooter.css">
    <link rel="shortcut icon" href="../imagens/logo_transparente_455D73.png">
    <title>Primeiro Acesso</title>
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
    
    <main class="request-access-main">
    <div class="container">
        <section class="request-access-content">
            <h1>Solicitação de acesso</h1>
            <p>
                Digite o seu CRM e a UF. A previsão de autotização do acesso é dentro de 24 horas, 
                se caso ainda não tiver recebido nenhuma notificação. Mande um e-mail ou mande 
                uma mensagem para o Whatssap área de TI da clínica
            </p>

            <div class="form-container">
                <h2>Solicitação de acesso</h2>
                
                <form class="request-form" method="POST">
                    <div class="input-row">
                        <div class="input-group crm">
                            <label for="crm">CRM</label>
                            <input type="text" id="crm" name="crm" required>
                        </div>
                        
                        <div class="input-group uf">
                            <label for="uf">UF</label>
                            <input type="text" id="uf" name="uf" required>
                                  <div class="button-wrapper">
                            
                        </div>
                    </div>
                    <div class="button-wrapper">
                            <button type="submit" class="login-button">Solicitar</button>
</div>
                    
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