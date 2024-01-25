<?php
    include __DIR__."/partials/var.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Search Hotel</title>
</head>
<body>
    <header>
        <h1>Trova il tuo hotel</h1>
    </header>
    <main>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Nome Hotel</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Parcheggio</th>
                <th scope="col">Valutazione</th>
                <th scope="col">Distanza dal centro</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                </tr>
            </tbody>
        </table>
        <?php foreach($hotels as $hotel){ ?>
            <h5> <?php echo $hotel['name']; ?> </h5>
            <p> <?php echo $hotel['description']; ?> </p>
            <span><?php echo $hotel['parking'] ?? 'Parcheggio disponibile'; ?></span>
            <span>Voto: <?php echo $hotel['vote']; ?></span>
            <span>Distanza dal centro: <?php echo $hotel['distance_to_center']; ?></span>
            <hr>
        <?php } ?>
        
    </main>
</body>
</html>