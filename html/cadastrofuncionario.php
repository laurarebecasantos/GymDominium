<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/cadastrofuncionario.css">
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
            <span>Cadastro Cli</span>
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

    <div class="content">
        <!--FORMULÁRIO DE LOGIN-->

        <div id="cadastro_cliente">
            <form method="post" action="">
                <p>
                    <label for="nome_cadastro">Nome</label>
                    <input id="nome_cadastro" name="nome" required="required" type="text"
                        placeholder="Alberto Rodrigues" />
                </p>

                <p>
                    <label for="telefone_cadastro">Telefone</label>
                    <input id="telefone_cadastro" name="telefone" required="required" type="text"
                        placeholder="(11)98372-6033" />
                </p>

                <p>
                    <label for="cadastro_cpf">CPF</label>
                    <input id="cadastro_cpf" name="cpf" required="required" type="text" placeholder="006.323.674-01" />
                </p>

                <p>
                    <label for="email_cadastro">Email</label>
                    <input id="email_cadastro" name="email" required="required" type="text"
                        placeholder="aaaaaa@gmail.com" />
                </p>

                <p>
                    <label for="senha_cadastro">Senha</label>
                    <input id="senha_cadastro" name="senha_cadastro" required="required" type="password"
                        placeholder="ex. 1234" />
                </p>

                <form action="/action_page.php">
                    <label for="cars">Selecione o cargo do funcionario: </label>
                    <select id="cargo" name="cargo">
                        <option value="volvo">Recepcionista</option>
                        <option value="saab">Instrutor</option>
                    </select>
                </form>


        </div>

        <div class="custom-radio">
            <br>
            <input id="sexo_masculino" name="sexo" value="1" type="radio">
            <label for="sexo_masculino">Masculino</label>
        </div>

        <div class="custom-radio">
            <input id="sexo_feminino" name="sexo" value="0" type="radio">
            <label for="sexo_feminino">Feminino</label>
        </div>

        <p>
            <br>
            <input type="submit" value="Cadastrar" />
        </p>

    </div>

</body>

</html>