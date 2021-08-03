<h1>Résultat de la recherche</h1>

<?php 
    if (isset($_POST['search'])) {
        include ('SECTION/article.php');
    } 

    echo '<form action="index.php?page=search" id="formHeader" method="POST">
    <p><label for="search">Rechercher <input type="search" name="search"></label></p><button>Search</button>
    </form>';

?>

</div>

