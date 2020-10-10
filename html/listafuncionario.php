<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/listafuncionario.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Geral</title>
</head>

<body>

    <input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
        <header>Menu</header>
        <a href="#" class="active">
            <i class="fas fa-chart-line"></i>
            <span>Dashboard</span>
        </a>
        <a href="cadastro.php">
            <i class="fas fa-user-check"></i>
            <span>Cadastro</span>
        </a>
        <a href="cadastrofuncionario.php">
            <i class="fas fa-user-check"></i>
            <span>Cadastro Fun</span>
        </a>
        <a href="listafuncionario.php">
            <i class="fas fa-user-friends"></i>
            <span>Funcionarios</span>
        </a>
        <a href="listaalunos.php">
            <i class="fas fa-user-friends"></i>
            <span>Alunos</span>
        </a>
        <a href="#">
            <i class="fas fa-swimmer"></i>
            <span>Atividades</span>
        </a>
        <a href="">
            <i class="fas fa-file-alt"></i>
            <span>Relatórios</span>
        </a>

    </div>

    <table class="styled-table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Sexo</th>
                <th>Cargo</th>
                <th>Email</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>Edição</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Dom</td>
                <td>Masculino</td>
                <td>Recepcionista</td>
                <td>dom@gmail.com</td>
                <td>666.666.666-66</td>
                <td>(81)99999-9999</td>
                <td>
                    <i class="fas fa-pen material-icons button edit"></i>
                    <i class="fas fa-trash-alt material-icons button delete"></i>
                </td>
            </tr>
            <tr class="active-row">
                <td>Melissa</td>
                <td>Feminina</td>
                <td>Instrutora</td>
                <td>melissa@gmail.com</td>
                <td>666.666.666-66</td>
                <td>(81)99999-9999</td>
                <td>
                    <i class="fas fa-pen material-icons button edit"></i>
                    <i class="fas fa-trash-alt material-icons button delete"></i>
                </td>

            </tr>


            <!-- and so on... -->
        </tbody>

    </table>

</body>

</html>