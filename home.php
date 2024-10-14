<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php require_once("nav.php");

    $dataPost222 = $_POST;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dataPost222 = $_POST;


        if (

            !isset($dataPost222["mail"])
            || !isset($dataPost222["motdepasse"])
            || !filter_var($dataPost222["mail"], FILTER_VALIDATE_EMAIL)

        ) {

            echo "Votre email n'est pas valid , ";
        } else {

            foreach ($tableauClient as $key) {
                if (
                    $key["Email"] === $dataPost222["mail"]
                    && $key["Password"] === $dataPost222["motdepasse"]
                ) {


                    $_SESSION["connexion"] = [
                        "Email" => $dataPost222["mail"],
                        "motdepasse" => $dataPost222["motdepasse"],
                        "modele" => $dataPost222["textvoiture"],
                        "probleme" => $dataPost222["area"],
                    ];

                    $Email = $dataPost222["mail"];
                    $motdepasse = $dataPost222["motdepasse"];
                    $moddele = $dataPost222["textvoiture"];
                    $probleme = $dataPost222["area"];
                    $id = $dataPost222["id"];

                    $updatesql = $baseDeDonnee2->prepare('UPDATE bolide SET email = :email ,mot_de_passe = :mot_de_passe ,Choisir_Une_voiture = :Choisir_Une_voiture ,Modification= :Modification WHERE email = :email');

                    $updatesql->execute([
                        "email" => $Email,
                        "mot_de_passe" => $motdepasse,
                        "Choisir_Une_voiture" => $moddele,
                        "Modification" => $probleme,

                    ]);



                    // setcookie(
                    //     'connexion',
                    //     $key["Email"],
                    //     [
                    //         'expires' => time() + 365 * 24 * 3600,
                    //         'secure' => true,
                    //         'httponly' => true,
                    //     ]
                    // )
    
                    // ;
    
                }
                break;



            }


        }


        if (!isset($_SESSION["connexion"])) {
            echo "Ne marche pas .";
        } else {
            echo $$_SESSION["connexion"]["Email"];
        }

    }


    ?>
</body>

</html>