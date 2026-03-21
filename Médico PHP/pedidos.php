<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/headerFooter.css">
    <link rel="stylesheet" href="../styles/pedidos.css">
    <link rel="shortcut icon" href="../imagens/logo_transparente_455D73.png" type="image/x-icon">
    <title>Pedidos</title>
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

    <main class="exame-main container">
    <section class="exame-card">
        <h1 class="exame-title">Pedido de Exame</h1>

        <form class="exame-form">
            <fieldset class="exame-section">
                <legend>Dados do Paciente</legend>
                <div class="input-row">
                    <div class="input-group flex-2">
                        <label>Nome do paciente</label>
                        <input type="text" name="nome_paciente">
                    </div>
                    <div class="input-group">
                        <label>Data de nascimento</label>
                        <input type="date" name="data_nasc">
                    </div>
                    <div class="input-group">
                        <label>Sexo</label>
                        <select name="sexo">
                            <option value="">Selecione</option>
                            <option value="M">Masculino</option>
                            <option value="F">Feminino</option>
                        </select>
                    </div>
                </div>
                <div class="input-row">
                    <div class="input-group">
                        <label>CPF</label>
                        <input type="text" name="cpf">
                    </div>
                    <div class="input-group">
                        <label>Convênio</label>
                        <select name="convenio">
                            <option value="">Selecione o convênio</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <label>Plano</label>
                        <select name="plano">
                            <option value="">Selecione o plano</option>
                        </select>
                    </div>
                </div>
            </fieldset>

            <fieldset class="exame-section doctor-info">
                <legend>Dados do Médico</legend>
                <div class="doctor-details">
                    <span><strong>Dr. Miguel Lima</strong></span>
                    <span>CRM 123456</span>
                    <span>Especialidade: Clinica Geral</span>
                </div>
            </fieldset>

            <fieldset class="exame-section">
                <legend>Exames Solicitados</legend>
                <div class="search-exams">
                    <input type="text" placeholder="Digite ou selecione os exames...">
                </div>
                <div class="exams-grid">
                    <label><input type="checkbox" checked> Hemograma completo</label>
                    <label><input type="checkbox" checked> Glicemia de jejum</label>
                    <label><input type="checkbox" checked> Triglicerídeos</label>
                    <label><input type="checkbox" checked> Creatinina</label>
                    <label><input type="checkbox"> TSH</label>
                    <label><input type="checkbox"> T4 livre</label>
                    <label><input type="checkbox"> Urina tipo 1 (EAS)</label>
                    <label><input type="checkbox" class="inline-check"> Outros: <input type="text" class="input-inline"></label>
                </div>
            </fieldset>

            <fieldset class="exame-section">
                <legend>Justificativa Clínica (opcional)</legend>
                <textarea rows="3"></textarea>
            </fieldset>

            <fieldset class="exame-section">
                <legend>Observações</legend>
                <label><input type="checkbox" checked> Jejum de 8 a 12 horas</label>
                <div class="input-inline-group">
                    <label><input type="checkbox"> Outras:</label>
                    <input type="text" class="input-full-line">
                </div>
            </fieldset>

            <div class="form-footer">
                <button type="submit" class="btn-send">Enviar</button>
            </div>
        </form>
    </section>
</main>

    <footer>

    <div class="container footer-content">

        <div class="footer-logo">
            <img src="./imagens/logo_transparente_branca.png" alt="logo">
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