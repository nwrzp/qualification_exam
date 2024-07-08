<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
        <div class="container">
      <div class="row-12">
        <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
            <a class="navbar-brand" href="#"><b>Footwear</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100 d-flex justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pages/catalog.php">Каталог</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">История</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">О компании</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Вход
                        </a>
                        <?php if($_COOKIE['id']== ''): ?>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Регистрация</a></li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">Авторизация</a></li>
                        </ul>
                        <?php else: ?>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/pages/account.php">ЛК</a></li>
                            <li><a class="dropdown-item" href="/php/exit.php">Выход</a></li>
                        </ul>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>



 <!-- Modal reg -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Регистрация</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3 needs-validation" novalidate action="/php/reg.php" method="POST">
                    <div class="col-md-12">
                        <label for="validationCustom01" class="form-label">Имя</label>
                        <input type="text" class="form-control" name="name" id="validationCustom01" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationCustom01" class="form-label">Логин</label>
                        <input type="text" class="form-control" name="login" id="validationCustom01" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationCustom01" class="form-label">Почта</label>
                        <input type="email" class="form-control" name="email" id="validationCustom01" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                
                    <div class="col-md-12">
                        <label for="validationCustom01" class="form-label">Пароль</label>
                        <input type="password" class="form-control" name="pass" id="validationCustom01" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Регистрация</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal auth -->
<div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdrop1Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdrop1Label">Авторизация</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3 needs-validation" novalidate action="/php/auth.php" method="POST">
                    <div class="col-md-12">
                        <label for="validationCustom011" class="form-label">Логин</label>
                        <input type="text" class="form-control" name="login" id="validationCustom011" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationCustom012" class="form-label">Пароль</label>
                        <input type="password" class="form-control" name="pass" id="validationCustom012" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Войти</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>