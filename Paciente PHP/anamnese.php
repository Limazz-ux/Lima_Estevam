<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/anamnese.css">
    <link rel="stylesheet" href="../styles/headerFooter.css">
    <link rel="shortcut icon" href="../imagens/logo_transparente_455D73.png">
    <title>Anamnese</title>
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

    <main class="anamnese-main">

    <!-- BANNER -->
    <section class="anamnese-banner">
        <div class="anamnese-overlay"></div>
        <div class="anamnese-banner-content">
            <h1>Anamnese</h1>
            <p>
                A anamnese serve para verificar o estado da sua saúde atual.
                Responda atentamente. Toda informação é necessária para sabermos
                termos o melhor tratamento da sua saúde.
            </p>
        </div>
    </section>

    <!-- FORM -->
    <section class="anamnese-container">
        <form method="POST">

            <!-- HISTÓRICO -->
            <div class="anamnese-box">
                <h2>Histórico de Saúde</h2>

                <div class="anamnese-grid">

                    <!-- COLUNA 1 -->
                    <div>
                        <label>Já teve alguma doença grave?</label>
                        <div class="radio-group">
                            <label><input type="radio" name="doenca_grave" value="sim"> Sim</label>
                            <label><input type="radio" name="doenca_grave" value="nao"> Não</label>
                        </div>

                        <label>Se sim qual?</label>
                        <input type="text" name="doenca_grave_desc">

                        <label>Já realizou cirurgias?</label>
                        <div class="radio-group">
                            <label><input type="radio" name="cirurgia" value="sim"> Sim</label>
                            <label><input type="radio" name="cirurgia" value="nao"> Não</label>
                        </div>

                        <label>Se sim qual?</label>
                        <input type="text" name="cirurgia_desc">

                        <label>Possui doenças crônicas?</label>
                        <div class="radio-group">
                            <label><input type="radio" name="doenca_cronica" value="sim"> Sim</label>
                            <label><input type="radio" name="doenca_cronica" value="nao"> Não</label>
                        </div>

                        <label>Se sim qual?</label>
                        <input type="text" name="doenca_cronica_desc">
                    </div>

                    <!-- COLUNA 2 -->
                    <div>
                        <label>Faz uso de medicamentos?</label>
                        <div class="radio-group">
                            <label><input type="radio" name="medicamento" value="sim"> Sim</label>
                            <label><input type="radio" name="medicamento" value="nao"> Não</label>
                        </div>

                        <label>Se sim qual? (Descreva)</label>
                        <textarea name="medicamento_desc"></textarea>

                        <label>Possui alguma alergia?</label>
                        <div class="radio-group">
                            <label><input type="radio" name="alergia" value="sim"> Sim</label>
                            <label><input type="radio" name="alergia" value="nao"> Não</label>
                        </div>

                        <label>Se sim qual?</label>
                        <input type="text" name="alergia_desc">
                    </div>

                    <!-- COLUNA 3 -->
                    <div>
                        <label>Alguém da sua família possui:</label>

                        <div class="checkbox-group">
                            <label><input type="checkbox" name="familia[]" value="diabetes"> Diabetes</label>
                            <label><input type="checkbox" name="familia[]" value="hipertensao"> Hipertensão</label>
                            <label><input type="checkbox" name="familia[]" value="cardiaca"> Doença cardíaca</label>
                            <label><input type="checkbox" name="familia[]" value="hereditaria"> Doenças hereditárias</label>
                            <label><input type="checkbox" name="familia[]" value="outros"> Outros</label>
                            <label><input type="checkbox" name="familia[]" value="nenhum"> Nenhuma das opções</label>
                        </div>

                        <label>Qual?</label>
                        <input type="text" name="familia_desc">

                        <label>Se você for mulher, diga:</label>
                        <div class="checkbox-group">
                            <label><input type="checkbox" name="mulher[]" value="gravida"> Está grávida?</label>
                            <label><input type="checkbox" name="mulher[]" value="amamentando"> Amamentando</label>
                            <label><input type="checkbox" name="mulher[]" value="anticoncepcional"> Usa anticoncepcional?</label>
                            <label><input type="checkbox" name="mulher[]" value="nenhum"> Nenhuma das opções</label>
                        </div>
                    </div>

                </div>
            </div>

            <!-- HÁBITOS -->
            <div class="anamnese-box">
                <h2>Hábitos Diários</h2>

                <div class="anamnese-grid-4">

                    <div>
                        <label>Fuma?</label>
                        <div class="radio-group">
                            <label><input type="radio" name="fuma" value="sim"> Sim</label>
                            <label><input type="radio" name="fuma" value="nao"> Não</label>
                        </div>

                        <label>Bebe?</label>
                        <div class="radio-group">
                            <label><input type="radio" name="bebe" value="sim"> Sim</label>
                            <label><input type="radio" name="bebe" value="nao"> Não</label>
                        </div>
                    </div>

                    <div>
                        <label>Pratica atividade física?</label>
                        <div class="radio-group">
                            <label><input type="radio" name="atividade" value="sim"> Sim</label>
                            <label><input type="radio" name="atividade" value="nao"> Não</label>
                        </div>

                        <label>Qual é a frequência?</label>
                        <input type="text" name="atividade_freq">
                    </div>

                    <div>
                        <label>Como você considera sua alimentação?</label>
                        <div class="radio-group">
                            <label><input type="radio" name="alimentacao" value="boa"> Boa</label>
                            <label><input type="radio" name="alimentacao" value="media"> Mediana</label>
                            <label><input type="radio" name="alimentacao" value="ruim"> Ruim</label>
                        </div>

                        <label>Como você avalia o seu sono?</label>
                        <div class="radio-group">
                            <label><input type="radio" name="sono" value="bom"> Bom</label>
                            <label><input type="radio" name="sono" value="medio"> Mediano</label>
                            <label><input type="radio" name="sono" value="ruim"> Ruim</label>
                        </div>
                    </div>

                    <div>
                        <label>Como você avalia a sua saúde mental?</label>
                        <div class="radio-group">
                            <label><input type="radio" name="mental" value="boa"> Boa</label>
                            <label><input type="radio" name="mental" value="media"> Mediana</label>
                            <label><input type="radio" name="mental" value="ruim"> Ruim</label>
                        </div>

                        <label>Como você avalia a sua hidratação?</label>
                        <div class="radio-group">
                            <label><input type="radio" name="hidratacao" value="boa"> Boa</label>
                            <label><input type="radio" name="hidratacao" value="media"> Mediana</label>
                            <label><input type="radio" name="hidratacao" value="ruim"> Ruim</label>
                        </div>
                    </div>

                </div>

                <div class="anamnese-btn">
                    <a href="../Paciente PHP/agendarConsultaPaciente.php">Agendar Consulta</a>
                </div>

            </div>

        </form>
    </section>

</main>

    <footer>

    <div class="container footer-content">

        <div class="footer-logo">
            <img src="../imagens/logo_transparente_branca.png" alt="logo">
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