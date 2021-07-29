<?php

include('header.php');
?>
<main>
<?php

if(isset($_GET['page'])) {

    
    if ($_GET['page'] == 'accueil') {
        include ('accueil.php');
    } if ($_GET['page'] == 'catalogue'){
        include ('catalogue.php');

    } if ($_GET['page'] == 'article'){
        include ('catalogue/article.php');
    // fail open stream qui marche: ca veut dire qu'il le trouve pas

    }
} else {
    include ('accueil.php');
}
?>
</main>
<?php
include ('footer.php');
?>

