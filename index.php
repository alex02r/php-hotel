<?php
    include __DIR__."/partials/var.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Search Hotel</title>
</head>
<body>
    <header>
        <h1>Trova il tuo hotel</h1>
    </header>
    <main>
        <?php foreach($hotels as $hotel){ ?>
            <h5> <?php echo $hotel['name']; ?> </h5>
            <p> <?php echo $hotel['name']; ?> </p>
            <span><?php echo $hotel['name'] ?? 'Parcheggio disponibile' ; ?></span>
            <span>Voto: <?php echo $hotel['vote']; ?></span>
            <span>Distanza dal centro: <?php echo $hotel['distance_to_center']; ?></span>
            <hr>
        <?php } ?>
        
    </main>
</body>
</html>