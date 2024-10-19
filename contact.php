<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- <?php require_once("nav.php"); ?> -->
    <?php require_once("home.php"); ?>
    <?php require_once("Contact.php"); ?>
    <?php $dataPost444 = $_POST;

    if (empty($dataPost444["area"])) {
        $dataPost444["area"] = "aucun";
    }



    $sqllll = 'INSERT INTO commentaires(commentaire1,commentaire2,commentaire3) VALUES (:commentaire1,:commentaire2,:commentaire3)';
    $creer = $baseDeDonnee3->prepare($sqllll);




    $creer->execute(
        [
            'commentaire1' => $dataPost444["area"],
            'commentaire2' => $dataPost444["area"],
            'commentaire3' => $dataPost444["area"]
        ]
    );


    ?>

    <?php if (isset($_SESSION["connexion"])): ?>
        <form action="modification.php" method="POST">
            <div>

            </div>
            <div>
                <input type="text">
            </div>
            <div>
                <h4>comments</h4>
                <textarea name="area" height="200px" width="200px" id="area"></textarea>
            </div>
            <input type="submit">
        </form>
    <?php endif; ?>


</body>

</html>
