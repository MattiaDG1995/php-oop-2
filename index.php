<?php
include_once __DIR__ . '/classi/categoria.php';
include_once __DIR__ . '/classi/cibo.php';
include_once __DIR__ . '/classi/accessori.php';
include_once __DIR__ . '/classi/giocattoli.php';
include_once __DIR__ . '/classi/prodotto.php';

$categoria=[
    'Cane' => new categoria('cane', '<i class="fa-solid fa-dog"></i>'),
    'Gatto' => new categoria('gatto', '<i class="fa-solid fa-cat"></i>'),
    'Uccello' => new categoria('uccello', '<i class="fa-solid fa-dove"></i>')
];

$prodotto=[
    new Prodotto('img', 'Royal Canin', 43.99, $categoria['Cane'])
];

foreach($prodotto as $elem){
    echo get_class($elem);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css'
    integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=='
    crossorigin='anonymous' referrerpolicy='no-referrer' />
    <title></title>
</head>
<body>
    
</body>
</html>