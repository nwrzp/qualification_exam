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
            <?php if($_COOKIE['role'] == 1): ?>
            <div>
                <h1>Привет, пользователь</h1>
            </div>
            <?php else: ?>
            <div>
                <h1>Админ-панель</h1>
                <h2>Таблица товаров</h2>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">id</th>
                        <th scope="col">Название</th>
                        <th scope="col">Цена</th>
                        <th scope="col">Изображение</th>
                        <th scope="col">Изменить</th>
                        <th scope="col">Удалить</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        
                        $link = mysqli_connect("localhost", "root", "", "kval");
                        $sql = "SELECT * FROM `goods`";
                        $result = mysqli_query($link, $sql);

                        while($row = mysqli_fetch_array($result)):
                        
                        ?>
                        <tr>
                            <td><?=$row['id']?></td>
                            <td><?=$row['name']?></td>
                            <td><?=$row['price']?></td>
                            <td><?=$row['img']?></td>
                            <td><a href="/php/red.php?id=<?=$row['id']?>">Изменить</a></td>
                            <td><a href="/php/delete.php?id=<?=$row['id']?>">Удалить</a></td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
            <?php endif; ?>
        </section>

    </main>
    <footer>

    </footer>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/script.js"></script>
</body>
</html>
