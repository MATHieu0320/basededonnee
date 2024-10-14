<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php



    require_once(__DIR__ . './nav.php');
    require_once(__DIR__ . ' ./home.php');
    require_once(__DIR__ . ' ./CreerCompte.php');


    ?>

    <?php if (!isset($_SESSION["connexion"])): ?>
        <form action="home.php" method="POST">
            <div>
                <label for="id">Identifiant</label>
                <input type="hidden" id="id" name="id" value="">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="mail">
            </div>
            <div>
                <label for="mdp">Mot de passe</label>
                <input type="password" id="mdp" name="motdepasse">
            </div>
            <div>
                <label for="text">Modele de voiture</label>
                <input type="text" id="text" name="textvoiture">
            </div>
            <div>
                <h4>Modification à apporter à votre voiture</h4>
                <textarea name="area" id="textarea"> </textarea>
            </div>
            <input type="submit">
        </form>
    <?php else:
        echo "Message envoyé" ?>
    <?php endif; ?>
    <pre>
        <?php print_r($tableauClient) ?>    </pre>
</body>

</html>