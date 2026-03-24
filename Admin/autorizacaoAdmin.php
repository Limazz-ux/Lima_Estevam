<?php
include("../conexao.php");

if(isset($_GET['acao']) && isset($_GET['id'])){

    $id = $_GET['id'];
    $acao = $_GET['acao'];

    if($acao == "aprovar"){
        // Exemplo: mover para tabela ativa ou liberar acesso
        echo "<script>
            alert('Requisição APROVADA com sucesso!');
            window.location.href='autorizacaoAdmin.php';
        </script>";
    }

    if($acao == "negar"){
        // Exemplo: deletar ou marcar como negado
        echo "<script>
            alert('Requisição NEGADA!');
            window.location.href='autorizacaoAdmin.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../styles/headerFooter.css">
    <link rel="stylesheet" href="../styles/autorizacaoAdmin.css">
    <link rel="shortcut icon" href="./imagens/logo_transparente_455D73.png" type="image/x-icon">
    <title>Requisiçoes</title>
</head>
<body>
<header>
        <div class="container header-content">

            <div class="logo">
                <a href="../Páginas Principais/PortaldoSite.php"><img src="../imagens/logo_transparente_branca.png" alt="Logo-Branca"></a>
                <hr>
                <span> <div class="Cliver">Lima Estevam</div>  Clínica Generalista</span>
            </div>

            <nav>
                <ul>
                   <li><a href="relatórioPacientes.php">Relatório</a></li>
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

    <main class="requisicoes-main container">
        <h1>Requisições</h1>
        <p>Abaixo está a lista de funcionários novos que precisam de autorização para acessar o sistema.</p>

    <section class="requisicoes-list">
        <article class="requisicao-card">
            <div class="funcionario-dados">
                <h2 class="funcionario-nome">Dr. Fulano</h2>
                <div class="funcionario-info-row">
                    <div class="info-field">
                        <span class="label">CRM</span>
                        <div class="value-box">909160</div>
                    </div>
                    <div class="info-field">
                        <span class="label">UF</span>
                        <div class="value-box">SP</div>
                    </div>
                    <button class="btn-autorizar" onclick="aprovar(1)">Autorizar</button>
                    <button class="btn-autorizar" onclick="negar(1)">Desaprovar</button>
                </div>
            </div>
            <div class="funcionario-photo"></div>
        </article>

        <article class="requisicao-card">
            <div class="funcionario-dados">
                <h2 class="funcionario-nome">Dr. Fulano</h2>
                <div class="funcionario-info-row">
                    <div class="info-field">
                        <span class="label">CRM</span>
                        <div class="value-box">909160</div>
                    </div>
                    <div class="info-field">
                        <span class="label">UF</span>
                        <div class="value-box">SP</div>
                    </div>
                    <button class="btn-autorizar" onclick="aprovar(1)">Autorizar</button>
                    <button class="btn-autorizar" onclick="negar(1)">Desaprovar</button>
                </div>
            </div>
            <div class="funcionario-photo"></div>
        </article>
    </section>
</main>

<footer>

    <div class="container footer-content">

        <div class="footer-logo">
            <img src="../imagens/logo_transparente_branca.png" alt="logo">
           <span> <div class="Cliver">Lima Estevam  Clínica Generalista</span>
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
<script>
function aprovar(id){
    window.location.href = "autorizacaoAdmin.php?acao=aprovar&id=" + id;
}

function negar(id){
    window.location.href = "autorizacaoAdmin.php?acao=negar&id=" + id;
}
</script>
</body>
</html>