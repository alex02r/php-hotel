<?php
    include __DIR__."/partials/var.php";

    //filtraggio per parcheggio
    $array_hotel = $hotels;
    if(isset($_GET['parking'])){
        $filter_array = [];
        foreach($hotels as $hotel){
            if($hotel['parking']){
                $filter_array[]=$hotel;
            }
        }
        $array_hotel = $filter_array;
    }

    //filtraggio per valutazione
    if (isset($_GET['voto']) && $_GET['voto'] != '') {
        $filter_array = [];
        foreach($array_hotel as $hotel){
            if($hotel['vote'] >= $_GET['voto']){
                $filter_array[] = $hotel;
            }
        }
        $array_hotel = $filter_array;
    }

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
    <?php include __DIR__.'/partials/templates/header.php' ; ?>
    
    <main>
        <div class="container py-5">
            <div class="row row-gap-3">
                <div class="col-12">
                    <form action="./index.php">
                        <div class="d-flex gap-3 align-items-center">
                            Filtra per:
                            <div class="">
                                <select class="form-select form-select-sm" name="voto" id="select">
                                    <option selected value="">Valutazione</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="parking" id="checkbox">
                                <label class="form-check-label" for="checkbox">
                                    Parcheggio
                                </label>
                            </div>
                            <button type="submit" class="btn btn-sm btn-dark">Filtra</button>
                        </div>
                    </form>
                </div>
                <div class="col-12">
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
                            <?php foreach($array_hotel as $hotel){ ?>
                                <tr>
                                <th scope="row"><?php echo $hotel['name']; ?></th>
                                <td><?php echo $hotel['description']; ?></td>
                                <td><?php echo $hotel['parking'] ? 'Si' : 'No'; ?></td>
                                <td><?php echo $hotel['vote']; ?></td>
                                <td><?php echo $hotel['distance_to_center']; ?> km</td>
                                </tr>
                            <?php } 
                                if($array_hotel == []){
                                    ?>
                                    <tr>
                                        <td colspan="5"> <?php echo "Nessun risultato trovato" ; ?> </td>
                                    </tr>
                                <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <?php include __DIR__.'/partials/templates/footer.php'; ?>
</body>
</html>