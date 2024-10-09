<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php $dataPost = $_POST;
require_once("mysql.php");
UPDATE recipes SET title = :title, recipe = :recipe WHERE recipe_id = :id
// empty isset
if (
    trim($dataPost["text"]) == ""
    || empty((string) $dataPost["text"])
    || trim($dataPost["textarea"]) == ""
    || empty((string) $dataPost["textarea"])
) {

    echo "vide";
} else {

    echo 'c bon';
}
$prenom = $dataPost['text'];
$recette = $dataPost['textarea'];
$requetteSql3 = $baseDeDonnee->prepare('INSERT TO users(prenom,recette) = :prenom , :recette');

$requetteSql3->execute(["prenom" => $prenom, "recette" => $recette]);

$fetch = $requetteSql3->fetchAll();


?>

<body>

</body>

</html>
