<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css">
    <meta name="viewport" content="width=
    .+, initial-scale=1.0">
    <title>Document</title>
    <?php
    try {
        $baseDeDonnee = new PDO("mysql:host=localhost;port=3307;dbname=tout3;charset=utf8", "root", "root", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    } catch (PDOException $e) {
        die("Message d'erreur" . $e->getMessage());
    }
    $requetteSql = 'SELECT * FROM users WHERE email = :email AND full_name = :full_name';

    $prepareLaRequette = $baseDeDonnee->prepare($requetteSql);


    $prepareLaRequette->execute(['email' => 'mathieu.nebra@exemple.com', 'full_name' => 'Mathieu Nebra']);


    $users = $prepareLaRequette->fetchAll();


    // insert into
    $requetteSql2 = 'INSERT INTO users(full_name,email) VALUES (:full_name, :email)';

    $preparationSql = $baseDeDonnee->prepare($requetteSql2);
    $preparationSql->execute([
        'full_name' => 'Cassoulet',
        'email' => 'Etape 1 : Des flageolets ! Etape 2 : Euh ...',

    ]);
    $users2 = $execution->fetchAll();
    // $format = 'Il y a %d singes dans le %s';
    // echo sprintf($format, "48", "parc");
    
    foreach ($users as $key) {
        echo $key["email"] . "
        \n";
        echo $key["full_name"];
    }
    ?>
</head>

<body>
    <form action="mysqlreception.php" method="POST">
        <div>
            <label for="text">Votre Prenom</label>
            <input type="text" name="text" id="text">
        </div>
        <div>
            <h2>Entrez votre recette</h2>
            <textarea name="textarea" id="textarea" height="200px"></textarea>
        </div>
        <input type="submit" name="submit">
    </form>
</body>

</html>
