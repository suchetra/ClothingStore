<p>
    Ajouter un nouvel article à la base de données.
</p>

<form action="index.php?page=displayArticle" method="POST" enctype="multipart/form-data" id="formAddArticle"
>
    <div>
        <input type="text" name="nom" required="required" placeholder="Entrez un article"/>
        <input type="number" name="prix" min="0" required="required" placeholder="Entrez un prix"/>
        <!-- <input type="file" name="photo" accept="image/*"  /> -->
        <input type="file" name="photo" />
    </div>
    <div>
        <textarea name="description" rows="8" cols="45" placeholder="Votre description du produit ici si besoin."></textarea>
        <input type="submit" value="Valider" />
    </div>
</form>



<?php
    // $_FILES['monfichier']['name']
    // $_FILES['monfichier']['tmp_name']
    // $_FILES['monfichier']['type']
?>

