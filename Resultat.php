<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php $DataPost = $_POST;
    $tab = [

        [
            "email" => "riche@gmail.com",
            "mdp" => "riche",
        ],
        [
            "email" => "clavier@gmail.com",
            "mdp" => "clavier",
        ],
        [
            "email" => "ecran@gmail.com",
            "mdp" => "ecran",
        ],
    ];


    if (
        !isset($DataPost["email"])
        || !isset($DataPost["password"])
        || !filter_var($DataPost["email"], FILTER_VALIDATE_EMAIL)
        || empty($DataPost["password"])
    ) {
        echo "n est pas valid";
    } else {
        foreach ($tab as $key) {
            echo $key['email'];
            if ($key["mdp"] == $DataPost["password"] && $key["email"] == $DataPost["email"]) {


                $_SESSION["LOGGED_USER"] = [
                    "email" => $key['email']

                ];
            } else {
                echo "email non valid bd ,";
            }
        }


    }


    ?>
    <?php if (isset($_SESSION["LOGGED_USER"])): ?>
        <h1>Bienvenue <?php echo htmlspecialchars($_SESSION['LOGGED_USER']['email']) ?></h1>
    <?php else:
        echo "Introuvable dans la base de donnée"; ?>
    <?php endif; ?>
</body>

</html>