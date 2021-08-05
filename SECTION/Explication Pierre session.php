<!-- explication de Pierre pour la session -->
<?php

// vérifier ajout nouvel élément via formulaire du catalogue
if(isset($_POST['id'])) {
    // $tableau = ['id' => $_POST['id'], 'quantite' => $_POST['quantiteArticle']];
    

    // créer tableau associatif avec =>
    //  [] pour que quand on met une nouvelle case du tableau, si on fait array_push, pas besoin de [] vide
    $_SESSION['panierOuAutre'][] = ['id' => $_POST['id'], 'quantite' => $_POST['quantiteArticle']];
}

if(isset($_SESSION['panierOuAutre'])){
    foreach ($_SESSION['panierOuAutre'] as $elementPanier){
        // afficher panier genre 1 1
        // echo $elementPanier['id'];
        // echo $elementPanier['quantite'];
    
        // afficher correctement le panier
        // $elementPanier['quantite']); c'est quand on choisit genre 10 articles

        afficherPanier($elementPanier['id'], $elementPanier['quantite']);
    }
}

?>