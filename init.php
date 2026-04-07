<?php

session_start(); //inicia a entrada de dados temporaria do usuario , variavel global para poder começar a usar session
require_once 'data.php'; //pega os dados de data.php

if (!isset($_SESSION['produtos'])){ //se ja existe ignora, se não, cria 
//!isset se ainda não foi setada 
    $_SESSION ['produtos'] = $produtos_base;
}


if (!isset($_SESSION['login'])){
    $_SESSION ['login'] = $login;
}
