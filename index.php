<?php 
    require_once __DIR__ . '/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Pet eCommerce</title>
</head>
<body>
    <div class="container">
        <div class="row">

            <!-- Print dell'array degli articoli di cibo -->
            <?php foreach($articoliCibo as $item) { ?>
                <div class="col-3 py-2">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $item->immagine ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $item->nome ?></h5>
                            <p class="card-text"><?php echo $item->descrizione ?></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?php echo '€'.$item->prezzo ?></li>
                            <li class="list-group-item"><?php echo $item->genere->genere ?></li>
                            <li class="list-group-item"><?php echo $item->disponibilita ?></li>
                            <li class="list-group-item"><?php echo $item->proteine ?></li>
                        </ul>
                    </div>
                </div>
            <?php } ?>

            <!-- Print dell'array degli articoli giochi -->
            <?php foreach($articoliGiochi as $item) { ?>
                <div class="col-3 py-2">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $item->immagine ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $item->nome ?></h5>
                            <p class="card-text"><?php echo $item->descrizione ?></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?php echo '€'.$item->prezzo ?></li>
                            <li class="list-group-item"><?php echo $item->genere->genere ?></li>
                            <li class="list-group-item"><?php echo $item->disponibilita ?></li>
                            <li class="list-group-item"><?php echo $item->materiale ?></li>
                        </ul>
                    </div>
                </div>
            <?php } ?>

            <!-- Print dell'array degli articoli accessori -->
            <?php foreach($articoliAccessori as $item) { ?>
                <div class="col-3 py-2">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $item->immagine ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $item->nome ?></h5>
                            <p class="card-text"><?php echo $item->descrizione ?></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?php echo '€'.$item->prezzo ?></li>
                            <li class="list-group-item"><?php echo $item->genere->genere ?></li>
                            <li class="list-group-item"><?php echo $item->disponibilita ?></li>
                            <li class="list-group-item"><?php echo $item->necessita ?></li>
                        </ul>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>