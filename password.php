<?php 
require __DIR__ .  '/functions.php';

if(isset($_GET['length'])) {
    $result = generate_password($_GET['length']);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css'
        integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=='
        crossorigin='anonymous' />
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <div class="container mb-3 pt-3">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h1 class="text-white-50 mb-5">Strong Password Generator</h1>

                </div>
                <?php if(isset($result)) : ?>
                <div class="col-7">
                    <div class="alert alert-info">
                        La tua password è: <strong><?= $result ?></strong>
                    </div>
                </div>
                <?php endif ?>
                <div class="col-7">
                    <form action="password.php" method="GET" class="p-3 border border-1 rounded-2 bg-light">
                        <div class="row mb-3">
                            <label class="col-sm-7 col-form-label">Lunghezza password:</label>
                            <div class="col-sm-3">
                                <input type="number" name="length" id="lenght" class="form-control" min="5" value="5"
                                    step="1">
                            </div>

                        </div>

                        <div class="mb-3 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-3">Invia</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>