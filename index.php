<?php include('header.php'); ?>

<main>
    <article>
        <?php
            if(isset($_GET['page'])) {
                if (isset($_GET['page'])){
                    include 'SECTION/'.$_GET['page'].'.php';
                }
            } else {
                include ('SECTION/accueil.php');
            }
        ?>
    </article>
</main>

<?php
include ('footer.php');
?>

