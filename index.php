<?php

include('header.php');
?>
<main>
<?php

if(isset($_GET['page'])) {

    
    if ($_GET['page'] == 'accueil') {
        include ('SECTION/accueil.php');
    } if ($_GET['page'] == 'catalogue'){
        include ('SECTION/catalogue.php');

    } if ($_GET['page'] == 'article'){
        include ('SECTION/article.php');
    // fail open stream qui marche: ca veut dire qu'il le trouve pas

    }
} else {
    include ('SECTION/accueil.php');
}
?>
</main>
<?php
include ('footer.php');
?>

