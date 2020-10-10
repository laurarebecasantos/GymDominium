<?php
session_start();
?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/cadastro.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Cadastro de clientes</title>
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
            <form method="post" action="inserir_cliente.php">
                <div class="card">
                    <div class="card-top">
                        <h2 class="title">Cadastro de clientes</h2>
                    </div>
                </div>
                <p>
                    <label for="nome_cadastro">Nome</label>
                    <input id="nome_cadastro" name="nome_cadastro" required="required" type="text"
                        placeholder="Alberto Rodrigues" />
                </p>

                <p>
                    <label for="estado_cadastro">Estado</label>
                    <input id="estado_cadastro" name="estado_cadastro" required="required" type="text" placeholder="São Paulo" />
                </p>

                <p>
                    <label for="cidade_cadastro">Cidade</label>
                    <input id="cidade_cadastro" name="cidade_cadastro" required="required" type="text" placeholder="Santos" />
                </p>

                <p>
                    <label for="rua_cadastro">Rua</label>
                    <input id="rua_cadastro" name="rua_cadastro" required="required" type="text"
                        placeholder="Rua Gonçalves Dias Numero 23" />
                </p>

                <p>
                    <label for="cep_cadastro">CEP</label>
                    <input id="cep_cadastro" name="cep_cadastro" required="required" type="text" placeholder="59336-839" />
                </p>

                <p>
                    <label for="telefone_cadastro">Telefone</label>
                    <input id="telefone_cadastro" name="telefone_cadastro" required="required" type="text"
                        placeholder="(11)98372-6033" />
                </p>

                <p>
                    <label for="cadastro_cpf">CPF</label>
                    <input id="cadastro_cpf" name="cadastro_cpf" required="required" type="text" placeholder="006.323.674-01" />
                </p>

        </div>

        <div class="custom-radio">
            <input id="sexo_masculino" name="sexo_masculino" value="1" type="radio">
            <label for="sexo_masculino">Masculino</label>
        </div>

        <div class="custom-radio">
            <input id="sexo_feminino" name="sexo_feminino" value="0" type="radio">
            <label for="sexo_feminino">Feminino</label>
        </div>

        <p>
            <br>
            <input type="submit" value="Cadastrar" />
        </p>

    </div>

</body>

</html>