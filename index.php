
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css'
    integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=='
    crossorigin='anonymous' referrerpolicy='no-referrer' />
    <link rel="stylesheet" href="./style.css">
    <title></title>
</head>
<body>

<h1>Boolshop</h1>

    <section>
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
                new cibo ('https://cdn.shopify.com/s/files/1/0545/1907/0903/products/Amanova_Adult_digestive_comida_seca_monoproteica_hipoalergenica_para_perros_adultos_ideal_para_piel_delicada_todas_las_razas_cordero_fresco_sin_harinas_de_carne_sin_cereales_260x.jpg?v=1644931556', 'Royal Canin', 43.99, $categoria['Cane'], '546g', 'ingredienti: prosciutto, riso'), 
                new cibo ('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS47qhV1IfqMfBJfof18REOSvDgudrjTEqN2ZREshWdvhf8vHhOt3jr8tum0tx312o2SlE&usqp=CAU', 'Almo Nature', 44.99, $categoria['Cane'], '600g', 'ingredienti: manzo, cereali'),
                new accessori ('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDq8C2idaZzTQ10fim4KYMKa27JLySlbnxBqB5yH5n79-BaVccghx02PQVHpsGb8BP1ZQ&usqp=CAU', 'Voliera Ferplast Bella Casa', 184.99, $categoria['Uccello'], 'Materiale: Legno' , 'Dimensioni: M: L83xP x H153 cm'),
                new giocattoli ('https://ss-pics.s3.eu-west-1.amazonaws.com/files/1865766/large-42535_pla_trixie_plueschmaus_grau_und_weiss_ret_01_7.jpg?1618590859', 'Topini di peluche Trixie', 4.99, $categoria['Gatto'], 'Caratteristiche: Morbido con codine in gomma', 'Dimensioni: 8.5cm x 10cm'),
            ];



            foreach($prodotto as $elem){

                echo '<div class="card">';
                    echo "<img src='$elem->immagine'>";
                    echo'<br>';        
                    echo "<h2>$elem->nome</h2>";
                    echo '<br>';
                    echo "<h5>$elem->prezzo</h5>";
                    echo '<br>';
                echo "</div>";

            }
        ?>

    </section>


    
</body>
</html>