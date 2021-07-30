<p>
    Ajouter un nouvel article à la base de données.
</p>

<form action="index.php?page=displayArticle" method="POST" enctype="multipart/form-data"
>
<p>
    <input type="text" name="nom" required="required" placeholder="Entrez un article"/>
    <input type="number" name="prix" min="0" required="required" placeholder="Entrez un prix"/>
    <!-- <input type="file" name="photo" accept="image/*"  /> -->
    <input type="file" name="photo" />

    <textarea name="description" rows="8" cols="45" placeholder="Votre description du produit ici."></textarea>
    <input type="submit" value="Valider" />
</p>



<?php
    // $_FILES['monfichier']['name']
    // $_FILES['monfichier']['tmp_name']
    // $_FILES['monfichier']['type']
?>

