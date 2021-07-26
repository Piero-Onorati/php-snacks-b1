<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php 

$campionato = [
    [
        'squadraCasa' => 'Francia',
        'squadraOspite' => 'Stati Uniti',
        'puntiCasa' => 83,
        'puntiOspite' => 76,
    ],
    [
        'squadraCasa' => 'Slovenia',
        'squadraOspite' => 'Argentina',
        'puntiCasa' => 118,
        'puntiOspite' => 100,
    ],
    [
        'squadraCasa' => 'Italia',
        'squadraOspite' => 'Germania',
        'puntiCasa' => 92,
        'puntiOspite' => 82,
    ],
    [
        'squadraCasa' => 'Australia',
        'squadraOspite' => 'Nigeria',
        'puntiCasa' => 84,
        'puntiOspite' => 67,
    ]
]

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

<ul>
    
    <?php for ($i=0; $i < count($campionato) ; $i++) { ?>

        <li>
            <?php echo $campionato[$i]['squadraCasa'] ?> - 
            <?php echo $campionato[$i]['squadraOspite'];?> | 
            <?php echo $campionato[$i]['puntiCasa'];?>-
            <?php echo $campionato[$i]['puntiOspite'];?>
        </li>

    <?php } ?>

</ul>
    
</body>
</html>