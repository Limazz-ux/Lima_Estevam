<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/agendarConsultaPaciente.css">
    <link rel="stylesheet" href="../styles/headerFooter.css">
    <link rel="shortcut icon" href="../imagens/logo_transparente_455D73.png">
    <title>Agendar Consulta</title>
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
<main class="agendamento-main">

    <section class="agendamento-container">

        <div class="agendamento-card">
            <h1>Agendar Consulta</h1>

            <form method="POST">

                <!-- Especialidade -->
                <label>Especialidade:</label>
                <select name="especialidade" >
                    <option value="">Selecione</option>
                    <option>Clínico Geral</option>
                    <option>Ortopedista</option>
                    <option>Fisioterapia</option>
                    <option>Nutricionista</option>
                    <option>Cardiologista</option>
                    <option>Psicóloga</option>
                </select>

                <!-- Médico -->
                <label>Médico:</label>
                <input type="text" name="medico" placeholder="Ex: Dra Natália">

                <!-- Data -->
                <label>Data:</label>
                <input type="date" name="data">

                <!-- Horário -->
                <label>Horário:</label>
                <input type="time" name="horario">

                <!-- Motivo -->
                <label>Motivo da consulta:</label>
                <textarea name="motivo" placeholder="Descreva o por quê você está vindo à clínica"></textarea>

                <!-- Observações -->
                <label>Observações:</label>
                <textarea name="observacoes" placeholder="Caso tiver algo importante coloque aqui"></textarea>

                <button class="btn-agendar" type="submit">Agendar</button>

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
</body>
</html>