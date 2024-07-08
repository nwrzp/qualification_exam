<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Footwear</title>
</head>
<body>
    <?php

    $root = $_SERVER['DOCUMENT_ROOT'];
    include "$root/php/module/header.php";

    ?>


    <main>
        <section class="container">
            <div class="row">
                <?php 
                
                $link = mysqli_connect("localhost", "root", "", "kval");
                $sql = "SELECT * FROM `goods`";
                $result = mysqli_query($link, $sql);

                while($row = mysqli_fetch_array($result)):
                
                ?>


                <div class="col-lg-3 col-md-6 col-sm-12 mb-5">
                    <div class="card">
                        <img src="<?=$row['img']?>" class="card-img-top" alt="<?=$row['name']?>">
                        <div class="card-body">
                            <h5 class="card-title"><?=$row['name']?></h5>
                            <p class="card-text"><?=$row['price']?> ₽</p>
                            <a href="/pages/card.php?id=<?=$row['id']?>" class="btn btn-primary">Добавить в корзину</a>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </section>
    </main>
    <footer>

    </footer>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/script.js"></script>
</body>
</html>
