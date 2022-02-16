<?php
$users = ["Gabriel", "Nicolas", "Mathieu", "Corenthin", "Philippe"];
foreach($users as $key){
    echo $key ."<br>";
}
if(isset($_POST['nom'])){
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
