<?php
require_once 'init.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
/*$produto[]=[
    'produto'=> $_POST['produto'],
    'preço'=> $_POST['preco'],
    'descricao'=> $_POST['descricao'],
    'preço'=> $_POST['preco'],
    'categoria'=> $_POST['categoria'],
    'arquivo'=> $_POST['arquivo']
*/

$_SESSION['produtos'][] = [
    'id' => count($_SESSION['produtos']) + 1,
    'nome' => $_POST['produto'],
    'preco' => $_POST['preco'],
    'descricao' => $_POST['descricao'],
    'categoria' => $_POST['categoria'],
    'imagem' => 'imagens/padrao.png' // por enquanto
];


$ids= array_column($_SESSION['produtos'], 'id');
$novoId = $ids ? max ($ids) +1: 1; 

header('location: index.php?produtoadd=1');
exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="style-cadastro.css">
    <title>cadastro |SkyStep <?php print $nome_loja;?></title>
    <link rel="icon" href="imagens/logo-site.png" type="image/png">
</head>

<body>
    <img src="imagens/logo-site.png" class="logo">
    <div class="box">
        <h1>Cadastro</h1>
        <form action="cadastro.php" method="POST">
            <div class="login-label">
                <div class="input-group">
                    <label>Nome</label>
                    <input type="nome" name="produto" placeholder="Digite o nome do produto">
                </div>

                <div class="input-group">
                    <label>Digite o Preço do produto</label>
                    <input type="number" placeholder="preço" name = "preco" required>
                </div>

                <div class="input-group">
                    <label>Digite a descrição do produto </label>
                    <input type="text" placeholder="descrição do produto" name = "descricao" required>
                </div>

                <div class="input-group">
                    <label>Digite a categoria do produto</label>
                    <input type="text" placeholder="'tenis_de_entrada' ou 'tenis_intermediario'" name = "categoria">
                </div>
                <div class="input-group">
                    <label>Selecione a foto do produto</label>
                    <input type="file" name="arquivo">
                </div>

            </div>
            <div class="btn">
                <input type="submit" value="Cadastrar">
            </div>
            <a href="index.php">home</a>
        </form>
    </div>

</body>

</html>