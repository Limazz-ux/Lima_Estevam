<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/cadastroPaciente.css">
    <link rel="stylesheet" href="../styles/headerFooter.css">
    <link rel="shortcut icon" href="../imagens/logo_transparente_455D73.png">
    <title>Cadastro Paciente - Clínica Lima Estevam</title>
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
    <main class="cadastro-main">

        <section class="cadastro-container">

            <h1>Cadastre-se</h1>
            <p class="cadastro-info">
                Em conformidade com a Lei Geral de Proteção de Dados (Lei nº 13.709/2018), informamos que a Lima Estevam coleta apenas os dados estritamente necessários para ter o maior cuidado com o paciente. Os dados (nome, e-mail, telefone) são armazenados em ambiente seguro.
            </p>

            <form method="POST">

                <!-- IDENTIFICAÇÃO -->
                <div class="cadastro-box">
                    <h2>Identificação</h2>

                    <div class="cadastro-grid">

                        <div class="cadastro-col">
                            <label>Nome Completo</label>
                            <input type="text" name="nome">

                            <label>E-mail</label>
                            <input type="email" name="email" >

                            <label>Senha</label>
                            <input type="password" name="senha">

                            <label>Confirmação de Senha</label>
                            <input type="password" name="confirmar_senha">

                            <label>Número de telefone</label>
                            <input type="tel" name="telefone">

                            <label>CPF</label>
                            <input type="text" name="cpf">

                            <label>RG</label>
                            <input type="text" name="rg">

                            <div class="linha-dupla">
                                <div>
                                    <label>Data de nascimento</label>
                                    <input type="date" name="data_nascimento">
                                </div>
                                <div>
                                    <label>Idade</label>
                                    <input type="number" name="idade">
                                </div>
                            </div>
                        </div>

                        <div class="cadastro-col">
                            <h3>Contato de Emergência 1</h3>

                            <label>Nome Completo</label>
                            <input type="text" name="emergencia1_nome">

                            <label>Número de telefone</label>
                            <input type="tel" name="emergencia1_tel">

                            <label>Grau de parentesco</label>
                            <input type="text" name="emergencia1_parentesco">

                            <h3>Contato de Emergência 2</h3>

                            <label>Nome Completo</label>
                            <input type="text" name="emergencia2_nome">

                            <label>Número de telefone</label>
                            <input type="tel" name="emergencia2_tel">

                            <label>Grau de parentesco</label>
                            <input type="text" name="emergencia2_parentesco">
                        </div>

                    </div>
                </div>

                <!-- ENDEREÇO -->
                <div class="cadastro-box">
                    <h2>Endereço</h2>

                    <div class="cadastro-endereco">

                        <div class="linha">
                            <div class="flex-3">
                                <label>Rua</label>
                                <input type="text" name="rua">
                            </div>

                            <div class="flex-1">
                                <label>Nº</label>
                                <input type="number" name="numero">
                            </div>

                            <div class="flex-2">
                                <label>CEP</label>
                                <input type="text" name="cep">
                            </div>

                            <div class="flex-2">
                                <label>Complemento</label>
                                <input type="text" name="complemento">
                            </div>

                            <div class="flex-2">
                                <label>Bairro</label>
                                <input type="text" name="bairro">
                            </div>
                        </div>

                        <div class="linha">
                            <div class="flex-3">
                                <label>Cidade</label>
                                <input type="text" name="cidade">
                            </div>

                            <div class="flex-1">
                                <label>UF</label>
                                <input type="text" name="uf" maxlength="2">
                            </div>
                        </div>

                    </div>

                    <div class="cadastro-btn">
                        <button type="submit">Cadastrar</button>
                    </div>

                </div>

            </form>

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