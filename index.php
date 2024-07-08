<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Footwear</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php

    $root = $_SERVER['DOCUMENT_ROOT'];
    include "$root/php/module/header.php";

    ?>

   
    <main>
        <section>
            <div class="banner">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <img src="img/banner1.png" class="img-fluid" alt="banner">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="block2">
                    <div class="row">
                        <div class="col-lg-6 p-3">
                            <img src="img/male.png" class="img-fluid" alt="banner">
                        </div>
                        <div class="col-lg-6 p-3">
                            <img src="img/female.png" class="img-fluid" alt="banner">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <h2>Наши партнеры</h2>
            <div class="row">
                <div class="col-lg-2 col-md-6 col-sm-12 mb-5">
                    <img src="img/brand1.png" class="rounded mx-auto d-block" alt="...">
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 mb-5">
                    <img src="/img/brand2.png" class="rounded mx-auto d-block" alt="...">
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 mb-5">
                    <img src="/img/brand3.png" class="rounded mx-auto d-block" alt="...">
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 mb-5">
                    <img src="/img/brand4.png" class="rounded mx-auto d-block" alt="...">
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 mb-5">
                    <img src="/img/brand5.png" class="rounded mx-auto d-block" alt="...">
                </div>
            </div>
        </section>
    </main>
    <footer>

    </footer>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/script.js"></script>
</body>
</html>
