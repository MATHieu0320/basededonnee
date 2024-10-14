<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php require_once("nav.php");

    $dataPost333 = $_POST;

    if (
        !isset($dataPost333["adresse"])
        || !isset($dataPost333["lock"])
        || !filter_var($dataPost333["adresse"], FILTER_VALIDATE_EMAIL)
    ) {

        echo "email non valid";

    } else {
        echo " c bon";
        $email = $dataPost333["adresse"];
        $password = $dataPost333["lock"];
        $nouveauClient = [
            "Email" => $email,
            "Password" => $password,
        ];


        array_push($tableauClient, $nouveauClient);

    }
    ?>
    <form action="site.php" method="POST">
        <div>
            <label for="adresse">Email</label>
            <input type="email" id="adresse" name="adresse">
        </div>
        <div>
            <label for="lock">Mot de passe</label>
            <input type="password" id="lock" name="lock">
        </div>
        <input type="submit">
    </form>


</body>

</html>