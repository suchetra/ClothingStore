<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <?php
        
    require ('ASIDE/functions.php');

    if(isset($_GET['page'])) {
            if (isset($_GET['article'])) {
                echo '<title>article '.$_GET['article'].'</title>';
            } else {

                if ($_GET['page'] == 'accueil') {
                    echo '<title>Accueil</title>';
                } if ($_GET['page'] == 'catalogue'){
                    echo '<title>catalogue</title>';
                    
                } 
                // pas besoin de ça ?
                // if ($_GET['page'] == 'article'){
                //     echo '<title>article</title>';
                // }
            }
            // pistes fausses
            // if ($_GET['page'] == 'article=1'){
            //     echo '<title>article1</title>';
            // }
            // if ($_GET['page'] == 'article2'){
            //     echo '<title>article2</title>';
            // }
            // if ($_GET['page'] == 'article&article=3'){
            //     echo '<title>article3</title>';
            // }
            
        } else {
            echo '<title>Accueil</title>';
        }

        ?>

        <link rel="stylesheet" href="CSS/style.css">
    </head>
    <body>
        
        <?php 
        
        // if (isset($_GET['nom']) AND isset($_GET['prenom'])) {
        //     echo 'Bonjour ' . $_GET['nom'] . ' ' . $_GET['prenom'];
        // } else {
        //     echo 'Pas de prénom défini !';
        // }    
        // 

        
        // if ($_GET['nom'] == 'Nicolas') {
        // if (isset($_GET['prenom'])) {
        //     echo 'Bonjour ' . $_GET['prenom'];
        // } else {
        //     echo 'Mauvais identifiant !';
        // } else {
        //     echo 'Mauvais identifiant !';
        // }

        ?>


        <form id="formHeader" action="index.php" method="GET">
        <?php 

        if (isset($_GET['prenom'])) {
            echo 'Bonjour ' . $_GET['prenom'];

        } else {

            echo '<p><label for="prenom">Identifiant <input type="text" name="prenom"></label></p>';

            echo '<p><label for="mot">Mot de passe <input type="password" name="mot"></label></p>';

            echo '<p><input type="submit" value="Sign in"/></p>
            ';
        }
        ?>

        
            
        </form>    

        <!-- <form id="formHeader" action="index.php" method="GET">
            <p><label for="prenom">Identifiant <input type="text" name="prenom"></label></p>

            <p><label for="mot">Mot de passe <input type="password" name="mot"></label></p>

            <p><input type="submit" value="Sign in"/></p>
        </form>     -->
<nav>
    <ul>
        <li><a href="index.php?page=accueil">Accueil</a></li>
        <li><a href="index.php?page=catalogue">Catalogue</a></li>
        <li>#</li>
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
