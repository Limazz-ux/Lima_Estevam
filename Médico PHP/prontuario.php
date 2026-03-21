<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/headerFooter.css">
    <link rel="stylesheet" href="./styles/prontuario.css">
    <link rel="shortcut icon" href="./imagens/logo_transparente_455D73.png" type="image/x-icon">
    <title>Prontuário do Paciente</title>
</head>
<body>
    <header>
        <div class="container header-content">

            <div class="logo">
                <a href="./PortaldoSite.html"><img src="./imagens/logo_transparente_branca.png" alt="Logo-Branca"></a>
                <hr>
                <span>Lima Estevam <br> Clínica Generalista</span>
            </div>

            <nav>
                <ul>
                    <li><a href="./pacientesDoutor.html">Pacientes</a></li>
                    <li><a href="./procuraProntuarioDoutor.html">Prontuário</a></li>
                    <li><a href="./pedidosExame.html">Pedidos de Exame</a></li>
                </ul>
            </nav>

            <div class="header-buttons">
                <button>Doutor Miguel Lima</button>
            </div>

        </div>
    </header>

    <main class="prontuario-main container">
    <h1 class="paciente-nome">Nome do paciente</h1>

    <section class="ficha-clinica">
        <div class="bloco-ficha">
            <h2>Histórico de Saúde</h2>
            <div class="ficha-grid">
                <div class="ficha-col">
                    <div class="pergunta">
                        <span>Já teve alguma doença grave?</span>
                        <div class="opcoes">
                            <label><input type="radio" name="doenca_grave"> Sim</label>
                            <label><input type="radio" name="doenca_grave" checked> Não</label>
                        </div>
                        <input type="text" placeholder="Se sim qual? (Qual?)">
                    </div>
                    </div>
                
                <div class="ficha-col">
                    <div class="pergunta">
                        <span>Faz uso de medicamentos</span>
                        <div class="opcoes">
                            <label><input type="radio" name="medicamentos"> Sim</label>
                            <label><input type="radio" name="medicamentos" checked> Não</label>
                        </div>
                        <textarea placeholder="Se sim qual? (Qual?) Descreva a dosagem..."></textarea>
                    </div>
                </div>

                <div class="ficha-col">
                    <div class="pergunta">
                        <span>Alguém da sua família possui</span>
                        <div class="checkbox-group">
                            <label><input type="checkbox"> Diabetes</label>
                            <label><input type="checkbox"> Hipertensão</label>
                            <label><input type="checkbox" checked> Nenhuma das opções</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bloco-ficha habits">
            <h2>Hábitos Diários</h2>
            <div class="ficha-grid">
                </div>
        </div>
    </section>

    <section class="prontuario-medico">
        <div class="bloco-prontuario">
            <h2>Prontuário</h2>
            <form>
                <div class="input-full">
                    <label>Qual é a sua principal queixa?</label>
                    <input type="text">
                </div>
                <div class="input-full">
                    <label>Quando os sintomas começaram e como evoluíram desde então?</label>
                    <input type="text">
                </div>
                <div class="input-full">
                    <label>Exame Físico Geral</label>
                    <textarea></textarea>
                </div>
                <div class="input-half-row">
                    <div class="input-full">
                        <label>Diagnóstico</label>
                        <input type="text">
                    </div>
                    <div class="input-full">
                        <label>Tratamento</label>
                        <input type="text">
                    </div>
                </div>
                <div class="footer-prontuario">
                    <div class="input-full">
                        <label>Indicações de saúde (Orientação física e mental)</label>
                        <input type="text">
                    </div>
                    <button type="submit" class="btn-salvar">Salvar Prontuário</button>
                </div>
            </form>
        </div>
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