<h1>
    Nouvel article ajouté
</h1>
<p>Merci d'avoir ajouté votre article !</p><p>voici le résumé :</p>
<div>
<?php

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     if (isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0) {

    // echo 'Nom : '.htmlspecialchars($_POST['nom']).'<br>'.'Prix : '.$_POST['prix'].'<br>'.'Photo : '.'../images/'.$_POST['photo'].'<br>'.'<br>'.$_POST['description'];
    echo 'Nom : '.htmlspecialchars($_POST['nom']).'<br>'.'Prix : '.$_POST['prix'].'<br>'.'<img class="img" src="' . $_POST['photo'] . '" /><br>'.'<br>'.$_POST['description'];
    // }
// }
?>
</div>



<!-- include 'SECTION/'.$_GET['page'].'.php'; -->