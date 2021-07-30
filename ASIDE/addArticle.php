<p>
    Ajouter un nouvel article à la base de données.
</p>

<form action="index.php?page=displayArticle" method="POST">
<p>
    <input type="text" name="nom" required="required" placeholder="Entrez un article"/>
    <input type="number" name="prix" min="0" required="required" placeholder="Entrez un prix"/>
    <!-- <input type="file" name="photo" accept="image/*"  /> -->
    <input type="text" name="photo"  placeholder="Entrez l'url de l'image"/>

    <textarea name="description" rows="8" cols="45" placeholder="Votre description du produit ici."></textarea>
    <input type="submit" value="Valider" />
</p>


<?php
//    echo "<pre>";
   print_r($_FILES);
//    echo 'ee';
//    echo "</pre>";
   ?>
<form action="" method="post" enctype="multipart/form-data">
   <input type="file" name="file">
   <input type="submit" value="Upload Image">
</form>
</form>