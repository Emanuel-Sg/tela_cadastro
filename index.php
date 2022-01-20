<?php

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Usuario</title>
    <link rel="stylesheet" href="./css/main.css">
    <script src="./js/main.js"></script>
</head>

<body>
    <div id="main-container">
        <h1>Cadastre-se para acessar o sistema</h1>
        <form id="register-form" action="">
            <div class="full-box">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" placeholder="Digite seu e-mail" data-min-length="2" data-email-validate>
            </div>
            <div class="half-box spacing">
                <label for="name">Nome</label>
                <input type="text" name="nome" id="nome" placeholder="Digite seu nome" data-required data-min-length="3" data-max-length="16">
            </div>
            <div class="half-box">
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" id="telefone" placeholder="Digite seu número" data-required data-only-letters>
            </div>
            <div class="half-box spacing">
                <label for="lastname">Senha</label>
                <input type="password" name="senha" id="senha" placeholder="Digite sua senha" data-password-validate data-required>
            </div>
            <div class="half-box">
                <label for="data_nasc">Data de Nascimento</label>
                <input type="date" name="data_nasc" id="data_nasc" placeholder="Digite sua data de nascimento" data-equal="datanasc">
            </div>
            <!-- Campo termo não funcional -->
            <div>
                <input type="checkbox" name="agreement" id="agreement">
                <label for="agreement" id="agreement-label">Eu li e aceito os <a href="#">termos de uso</a></label>
            </div>
            <div class="full-box">
                <input id="btn-submit" type="submit" value="Registrar">
            </div>
        </form>
    </div>
    <p class="error-validation template"></p>
    <script src="./js/main.js"></script>
</body>

</html>