<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php require_once("nav.php");
    try {
        $baseDeDonnee3 = new PDO('mysql:host=localhost;port=3307;dbname=automobile;charset=utf8', 'root', "root", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    // $updatesq5 = $baseDeDonnee3->prepare('SELECT departement_nom from departement WHERE departement_code > 40');
    $updatesq5 = $baseDeDonnee3->
        prepare('SELECT departement.departement_nom bolide.email from bolide INNERT JOIN bolide ON departement.id = bolide.id');

    $updatesq5->execute();

    $final = $updatesq5->fetchAll();

    foreach ($final as $key) {
        // echo $key["departement_nom"];
        echo $key;
    }




    ?>

</body>

</html>
