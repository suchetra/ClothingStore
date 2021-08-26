<?php include('header.php'); ?>

<main>
    <?php
        // if(isset($_GET['page'])) {
        if (isset($_GET['page'])){
            include 'SECTION/'.$_GET['page'].'.php';
        // }
        } else {
            include ('SECTION/accueil.php');
        }
    ?>
</main>

<?php
include ('footer.php');
?>

