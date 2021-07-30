<p>
    Nouvel article ajouté à la base de données.

    <?php
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['photo']) AND $_FILES['photo']['error'] == 0)
{
    // Testons si le fichier n'est pas trop gros
    if ($_FILES['photo']['size'] <= 1000000)
    {
        // Testons si l'extension est autorisée
        $infosfichier = pathinfo($_FILES['photo']['name']);
        $extension_upload = $infosfichier['extension'];
        $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
        // si $extension_upload existe dans $extensions_autorisees
        if (in_array($extension_upload, $extensions_autorisees))
        {
            // On peut valider le fichier et le stocker définitivement
            move_uploaded_file($_FILES['photo']['tmp_name'], 'SECTION/uploads/' .basename($_FILES['photo']['name'])); 
            // renommer le fichier 
            
            echo "L'envoi a bien été effectué !";
        }
    }
}
echo '<br><br>';
echo $_POST['nom'];
echo $_POST['prix'];
?>
</p>
<img src="SECTION/uploads/<?php echo $_FILES['photo']['name'] ?>" width="100px">



