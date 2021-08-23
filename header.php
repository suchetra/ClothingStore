<?php session_start(); 
if (isset($_GET['destroy'])){  
    session_destroy(); 
}?>
<!-- § -->


<!-- // $_SESSION['panier'] = array();
// $_SESSION['panier']['id'] = array();
// $_SESSION['panier']['quantite'] = array();
// $_SESSION['panier']['prix'] = array(); -->





<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="CSS/style.css">
        <?php
        require ('ASIDE/functions.php');

        if(isset($_GET['page'])) {
            if (isset($_GET['article'])) {
                echo '<title>article '.$_GET['article'].$_GET['article'].'</title>';
            } elseif ($_GET['page'] == 'accueil') {
                echo '<title>Accueil</title>';
            } elseif ($_GET['page'] == 'catalogue'){
                echo '<title>catalogue</title>';
            } elseif ($_GET['page'] == 'catalogue2'){
                echo '<title>catalogue 2</title>';
            } elseif ($_GET['page'] == 'catalogue3'){
                echo '<title>catalogue 3</title>';
            } elseif ($_GET['page'] == 'panier'){
                echo '<title>panier</title>';
            } 
        } 
        ?>
    </head>
    <body>
        <form id="formHeader" action="index.php" method="GET">
        
        <?php 
        if (isset($_GET['prenom'])) {
            echo 'Bonjour '.$_GET['prenom'];
        } else {
            echo '<form id="formHeader" action="index.php" method="GET">';
            echo '<p><label for="prenom">Identifiant <input type="text" name="prenom"></label></p>';
            echo '<p><label for="mot">Mot de passe <input type="password" name="mot"></label></p>';
            echo '<p><input type="submit" value="Sign in"/></p>';
            echo '</form>';
        }
        ?>

    <nav>
        <ul>
            <li><a href="index.php?page=accueil">Accueil</a></li>
            <li><a href="index.php?page=catalogue">Catalogue</a></li>
            <li><a href="index.php?page=addArticle">Ajouter un article</a></li>
            <li><a href="index.php?page=panier">Panier</a></li>
            <li><a href="index.php?page=catalogue2">Catalogue 2</a></li>
            <li><a href="index.php?page=catalogue3">Catalogue 3</a></li>
        </ul>

        <?php

        // if(isset($_GET['li'])) {

        //     if ($_GET['li'] == 'accueil') {
        //         echo '<style>color: blue;</style>';
        //     } if ($_GET['li'] == 'catalogue'){
        //         echo '<style>color: blue;</style>';
        // } else {
        //     echo '<style>color: blue;</style>';
        // }

        ?> 


    </nav>
