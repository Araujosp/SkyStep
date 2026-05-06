<?php
require_once 'init.php';

$categoria_get = isset($_GET['categoria']) ? trim ($_GET['categoria']): ''; 
/*
// isset = se a variavel categoria existir
//($_get['categoria']) coleta os dados da URL
// ? = 
//trim () = remover espaços em branco no começo e no fim

/*
isset()	verifica se existe
?	se sim
trim()	limpa espaços
:	se não
''	vazio
*/

//if(isset($_GET['categoria'])) {
  //  print $_GET['categoria'];
//}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="icon" href="imagens/logo-site.png">
    <link rel="stylesheet" href="style.css">
    <title> SkyStep<?php print $nome_loja;?>  </title>
</head>

<body>
    <?php
    require './partials/header.php';
    echo '<nav class="navbar">';
    echo'<ul>';
    if (isset($_GET['produtoadd']) && $_GET['produtoadd'] === '1'){
    print '<p> Produto adicionado com sucesso!</p>';
} 

foreach ($categorias as $keycat => $nome){
    echo "<li><a href='index.php?categoria=$keycat'>$nome</a></li>";
}
    echo '</ul>
    </nav>'
    ?>
    <div class="container">
        <img src="imagens/logo-jordan-branca.png">
        <img src="imagens/nike.png">
        <img src="imagens/puma.png">
        <img src="imagens/adidas.png">
        <img src="imagens/underarmour.png">
    </div>
    <main class="main">

    <?php
    echo'<div class="card-mae" id="produtos">';
        foreach($_SESSION['produtos'] as $produto){

            if($categoria_get == '' ||$produto ['categoria'] == $categoria_get){ 
            


            echo '<div class="card">
            <div class="card-img">
                <img src="'.$produto['imagem'].'">
            </div>
            <div class="card-content">
                <h3>"'.$produto['nome'].'"</h3>
                <p>"'.$produto['descricao'].'"</p>
                <span>'.$produto['preco'].'</span>
                <a href="detalhes-produto.php"><div class="btn">Compre Aqui</div></a>
            </div>
        </div>';
            }
        }
        echo'</div>';
    ?>
</main>
    <?php 
    require 'partials/footer.php'
    ?>
</body>
</html>
<!--
tanto de linha que economizei
<div class="card-mae" id="produtos">
        <div class="card">
            <div class="card-img">
                <img src="https://imgcentauro-a.akamaihd.net/660x660/9883943QA9.jpg">
            </div>
            <div class="card-content">
                <h3>Nike Precision VII</h3>
                <p>Domine a Quadra com o Tênis Nike Precision VII Masculino</p>
                <span>R$ 250,00</span>
                <a href="detalhes-produto.php"><div class="btn">Compre Aqui</div></a>
            </div>
        </div>
