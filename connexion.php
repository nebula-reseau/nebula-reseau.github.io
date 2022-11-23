<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nebula</title>
    <link rel="stylesheet" href="css/connexion.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="icon" type="image/jpg" href="icone.jpg" />
</head>
<body>
    <!-- Haut de page -->
    <header>
        <p>Connexion / Inscription</p>
    </header>

    <!-- Menu de navigation -->
    <nav class="menu">
        <ul>
            <li class="btn"><a href="index.html">Nebula</a></li>
            <li class="btn"><a href="messagerie.html"><img class="messagerie" src="outline_chat_white_24dp.png"></a></li>
            <li class="btn"><a href="http://google.com" target="_blank"><img src="settings_48.png" alt="Paramètres"></a></li>
        </ul>
    </nav>
    <div class="menu"></div>

    <!-- Contenu sous forme de boite -->
    <h1 class="welcome">Bienvenue !!!</h1>
    <h1 class="nebula">Nebula</h1>

    <p>Nom : <?= '$pseudo'; ?></p>
    <p>Email : <?= '$email'; ?></p>
    <p>Age = <?= '$age'; ?></p>

    <form method="post">
        <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo" required>
        <input type="text" name="age" id="age" placeholder="Age" required>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <input type="submit" name="formsend" id="formsend">
    </form>

    <?php
        if(isset($_POST['formsend'])){
            $pseudo = $_POST['pseudo'];
            $age = $_POST['age'];
            $email = $_POST['email'];
            if(!empty($pseudo) && !empty($age) && !empty($email)){
                echo "Votre pseudo : ".$_POST['pseudo'];
                echo "Votre age : ".$_POST['age'];
                echo "Votre email : ".$_POST['email'];
            }
        }
    ?>

    <!-- Pied de page -->
    <footer>
        <p>
            Copyright &copy; Nebula-Réseau - 2022-2023 - All right  reserved
        </p>
    </footer>
</body>
</html>