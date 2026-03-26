<?php
session_start();
include("../conexao.php");

// 1. Lógica para Excluir (Usando o nome correto da tabela)
if (isset($_GET['excluir'])) {
    $id = intval($_GET['excluir']);
    $sql_delete = "DELETE FROM AgendarConsulta WHERE id = $id";
    if (mysqli_query($conn, $sql_delete)) {
        echo "<script>alert('Agendamento excluído com sucesso!'); window.location.href='relatorioPacientes.php';</script>";
    } else {
        echo "<script>alert('Erro ao excluir: " . mysqli_error($conn) . "');</script>";
    }
}

// 2. Busca os dados (Ajustado para as suas colunas reais)
$query = "SELECT id, especialidade, medico, data_consulta, motivo_consulta FROM AgendarConsulta ORDER BY data_consulta DESC";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/headerFooter.css">
    <link rel="stylesheet" href="../styles/relatorioPacientes.css">
    <link rel="shortcut icon" href="../imagens/logo_transparente_455D73.png">
    <title>Agendamentos | Lima Estevam</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
                <li><a href="pacientes.php">Pacientes</a></li>
                <li><a href="prontuario.php">Prontuário</a></li>
                <li><a href="relatorioPacientes.php" class="active">Agendamentos</a></li>
            </ul>
        </nav>
    </div>
</header>

<main>
    <div style="width: 90%; margin: 20px auto;">
        <h2 style="color: #455d73; margin-bottom: 20px;">Relatório de Agendamentos</h2>
        
        <table border="1" style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="background-color: #455d73; color: white;">
                    <th>Médico</th>
                    <th>Especialidade</th>
                    <th>Data</th>
                    <th>Motivo</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['medico']; ?></td>
                        <td><?php echo $row['especialidade']; ?></td>
                        <td><?php echo date('d/m/Y', strtotime($row['data_consulta'])); ?></td>
                        <td><?php echo $row['motivo_consulta']; ?></td>
                        <td>
                            <a href="remarcar.php?id=<?php echo $row['id']; ?>" style="color: blue;">Remarcar</a> | 
                            <a href="?excluir=<?php echo $row['id']; ?>" style="color: red;" onclick="return confirm('Deseja excluir este agendamento?')">Excluir</a>
                        </td>
                    </tr>
                <?php } 
                } else {
                    echo "<tr><td colspan='5' style='text-align:center;'>Nenhum agendamento encontrado.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</main>

<footer>
    <div class="container footer-content">
        <div class="footer-logo">
            <img src="../imagens/logo_transparente_branca.png" alt="logo">
            <span><div class="Cliver">Lima Estevam</div> Clínica Generalista</span>  
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


</html>