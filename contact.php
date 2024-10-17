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
        $baseDeDonnee3 = new PDO('mysql:host=localhost;port=3307;dbname=projet;charset=utf8', 'root', "root", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    // $updatesq5 = $baseDeDonnee3->prepare('SELECT departement_nom from departement WHERE departement_code > 40');
    
    // jointure
    // $updatesq5 = $baseDeDonnee3->
    //     prepare('SELECT email, Modification ,departement_nom
    //     FROM bolide
    //     INNER JOIN departement
    //     bolide_id ON departement_id 
    //     limit 1
    //     ');
    
    $updatesq5 = $baseDeDonnee3->
        prepare('SELECT commentaire1, prenom 
        FROM commentaires
        INNER JOIN utilisateurs
        com_id ON ut_id 
 
        ');

    $updatesq5->execute();

    $final = $updatesq5->fetchAll();

    foreach ($final as $key) {
        // echo $key["departement_nom"];
        echo $key["commentaire1"];
        echo $key["prenom"];
    }




    ?>
    <pre>
 <?php print_r($final) ?>    </pre>
    </pre>
</body>

</html>
