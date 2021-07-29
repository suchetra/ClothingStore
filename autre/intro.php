<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    
    <style>
        body {
            background-color: grey;
        }
        p {
            font-size: 3rem;
            color: white;

        }
        p a {
            text-decoration: none;
            color: white;
        }
        p a:hover {
            color: green;
        }
        form {
            display:flex;
            flex-direction: column;
            align-items: center;
        }

        #button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form action="index2.php" method="GET">
        <p><label for="prenom">Prénom <input type="text" name="prenom"></label></p>
        <p><label for="nom">Nom <input type="text" name="nom"></label></p>
        <p><input type="submit" value="Rentrer sur le site !" id="button"/></p>
    </form>

    <p>
        <!-- <a href="index2.php?nom=AZER&amp;prenom=aze">Dis-moi bonjour !</a> -->
        
        
        <!-- <a href="index2.php">Rentrer sur le site !</a> -->
    </p>
</body>
</html>