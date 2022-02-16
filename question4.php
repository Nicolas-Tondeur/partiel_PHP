<?php
$users = ["Gabriel", "Nicolas", "Mathieu", "Corenthin", "Philippe"];
foreach($users as $key){
    echo $key ."<br>";
}

// Si l'input et non null et que la valeur saisie correspond à un élément du tableau
// if(isset($_POST['nom']) && $_POST['nom'] == $users){
if(isset($_POST['nom'])){
// Alors afficher le contenu de l'input
    echo $_POST['nom'];

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <form method="POST">
        <label for="nom">Nom :  </label>
        <input type="str" name="nom">
        <br>
    </form>
</body>
</html>
