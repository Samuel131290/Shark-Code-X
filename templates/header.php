<?php
include_once("helpers/url.php");
include_once("data/categories.php");
include_once("data/posts.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SharkCodeX</title> <!--Nome do site -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css"> <!--Cor de fundo -->
    <!--Estilo font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
</head>
<body>
    <header>
    <a href="<?= $BASE_URL?>" id="logo2">
        <img src="<?= $BASE_URL?>/img3/logo2.svg" alt="SharkCodeX">
    </a>
    <nav>
        <ul id="navbar">
            <li><a href="<?= $BASE_URL?>" class="nav-link">Home</a></li>
            <li><a href="<#>" class="nav-link">Categorias</a></li>
            <li><a href="<#>" class="nav-link">Sobre</a></li>
            <li><a href="<?= $BASE_URL?>contato.php" class="nav-link">Contato</a></li>
    </nav>
    </header>
