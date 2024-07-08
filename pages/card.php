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
        <section class="container my-5">
            <?php 
            include("$root/php/db.php");
            $id = $_GET['id'];
            $card = $mysql->query("SELECT * FROM `goods` WHERE `id` = '$id'");
            $cards = mysqli_fetch_assoc($card);
            ?>
            <h1>Товар</h1>
            <div class="col-12">
            <div class="container_card_profile">
           <div class="left-column"><img src="<?=$row['img']?>" alt="<?=$row['name']?>"/> </div>
             <div class="right-column">
               <div class="product-description"><?=$row['name']?>
                 <p><h1>Товар</h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam vero asperiores eum rem perspiciatis totam hic, quo voluptate doloribus quos pariatur repellat est enim dolor reiciendis nobis cum, eius provident. Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore numquam atque maiores, possimus porro, quia recusandae exercitationem laudantium totam sequi perferendis ab distinctio expedita iusto ea eveniet voluptate molestias alias?</p></div>
                <div class="product-price"><?=$row['price']?> ₽</div>
               <div><a class="btn btn-dark" href="#">Добавить в корзину</a></div>
             </div>
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
