<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

$name = $_GET['name'];
$age = $_GET['age'];
$email = $_GET['email'];
// var_dump($name);
// var_dump($age);
// var_dump($email);

if (empty($_GET['name']) || empty($_GET['age']) || empty($_GET['email'])) {
    $stringa = 'all the fields must be completed';
    
} else {
    if( strlen($name)>3 && 
    strpos($email, '@') && 
    strpos($email, '.') && 
    is_numeric($age)
    ){
        $stringa = 'accesso consentito';
    } else {
        $stringa = 'accesso negato';
    }

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

<form action="" method="get" id="form1">
    <input type="text" name="name">
    <input type="text" name="age"> 
    <input type="text" name="email"> 
    <button type="submit" form="form1">SUBMIT</button>
</form>

<p> esito: <?php echo $stringa; ?></p>
    
</body>
</html>