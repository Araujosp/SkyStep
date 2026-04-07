<?php
require_once 'init.php';

$login[]=[
    'email'=> $_POST['email'],
    'senha'=> $_POST['senha']
];

print_r($_POST);
if ($_SERVER['REQUEST_METHOD'] === 'POST'){

$ids= array_column($produtos_base, 'id');
$novoId = $ids ? max ($ids) +1: 1; 

}

print_r($login);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="style-login.css">
    <title>Login |SkyStep <?php print $nome_loja;?></title>
    <link rel="icon" href="imagens/logo-site.png" type="image/png">
</head>

<body>
    <div class="box">
        <h1>Login</h1>

        <form action="login.php" method= "POST">
            <div class="login-label">
                <div class="input-group">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Digite seu email">
                </div>

                <div class="input-group">
                    <label>Senha</label>
                    <input type="password" name="senha" placeholder="Digite sua senha">
                </div>
            </div>

            <div class="extra-links">
                <label>
                    <input type="checkbox" id="relembra"> Relembra-me
                </label>
                <a href="#">Esqueceu a Senha ?</a>
            </div>

            <div class="btn">
                <a href="#"><input type="submit" value="Entrar" ></a> 
            </div>
        </form>
    </div>

</body>
</html>