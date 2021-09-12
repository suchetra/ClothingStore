<?php

// on vérifie si le formulaire a été envoyé
if(!empty($_POST)){
    // var_dump($_POST);
    // le formulaire a été envoyé
    // on vérifie que tous les champs requis sont remplis
    if(isset($_POST["nickname"], $_POST["email"], $_POST["pass"]) && !empty($_POST["nickname"]) && !empty($_POST["email"]) && !empty($_POST["pass"])
    ){
        // le formulaire est complet
        // on récupère les données en les protégeant
        // strip_tags pour éviter le Cross-site scripting (html javascript qui sont utilisés)
        $pseudo = strip_tags($_POST["nickname"]);

        // pour vérifier que c'est un email on peut utiliser des expressions régulières https://www.commentcamarche.net/contents/803-php-expressions-regulieres ou des fonctions comme filter_var (avec un filtre spécifique)
        if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            die("L'adresse email est incorrecte");
        }

        // on va hasher le mot de passe
        // on choisit l'algorithme pour hasher le mot de passe après le $_POST, le hashage est différent du chiffrement (ce dernier est déchiffrable)
        // $pass = password_hash($_POST["pass"], PASSWORD_ARGON2ID);
        $pass = password_hash($_POST["pass"], PASSWORD_BCRYPT);

        // pour vérifier le mot de passe sur notre site comme un echo
        // die($pass);

        // on enregistre en bdd
        // require_once ""

    } else{
        die("Le formulaire est incomplet");
    }
}

?>

<h1>Inscription</h1>

<form method="post">
    <div>
        <label for="pseudo">Pseudo</label>
        <input type="text" name="nickname" id="pseudo">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <label for="pass">Mot de passe</label>
        <input type="password" name="pass" id="pass">
    </div>
    <button type="submit">M'inscrire</button>
</form>

