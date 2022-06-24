<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link
          rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous"
        />
        <link rel="stylesheet" href="css/styles.css" />
        <title>Главная страница</title>
    </head>
    <body>
        <?php
            if(empty($_COOKIE['user'])):
        ?>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">Test-task</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="/test">Регистрация</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="/test/auth.php">Авторизация<span class="sr-only">(current)</span></a>
              </li>
            </ul>
          </div>
        </nav>
        <div class="container mt-4">
          <h1>Форма авторизации</h1>
          <br />
          <form action="validation-form/auth_check.php" method="POST">
            <input
              type="text"
              class="form-control"
              name="login"
              id="login"
              placeholder="Введите логин"
            /><br />
            <input
              type="text"
              class="form-control"
              name="pass"
              id="pass"
              placeholder="Введите пароль"
            /><br />
            <button class="btn btn-success" type="sumbit">Авторизоваться</button>
          </form>
        </div>
        <?php else: ?>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Test-task</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            Привет, <b><?=$_COOKIE['user']?></b> <a href="/test/validation-form/exit.php">Выйти с аккаунта</a>
                        </li>
                    </ul>
                </div>
            </nav>
        <?php endif; ?>
    </body>
</html>