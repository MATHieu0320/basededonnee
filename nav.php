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

    $tableauClient = [

        [
            "Email" => "pa@gmail.com",
            "Password" => "pa",
        ],
        [
            "Email" => "patric@gmail.com",
            "Password" => "patric",
        ],
        [
            "Email" => "bastien@gmail.com",
            "Password" => "bastien",
        ]


    ];
    try {
        $baseDeDonnee2 = new PDO('mysql:host=localhost;port=3307;dbname=automobile;charset=utf8', 'root', "root", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }


    ?>
    <ul>
        <li><a href="site.php">Site de Voiture</a></li>
        <li><a href="home.php">Home</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="modification.php">Modification voiture</a></li>

    </ul>
</body>

</html>