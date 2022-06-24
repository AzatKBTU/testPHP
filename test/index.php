<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/styles.css" />
    <title>Форма регистрации</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Test-task</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="/test">Регистрация <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/test/auth.php">Авторизация</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container mt-4">
      <h1>Форма регистрации</h1>
      <br />
      <form action="validation-form/check.php" method="POST">
        <input
          type="text"
          class="form-control"
          name="name"
          id="name"
          placeholder="Введите имя"
        /><br />
        <input
          type="text"
          class="form-control"
          name="email"
          id="email"
          placeholder="Введите почту"
        /><br />
        <input
          type="text"
          class="form-control"
          name="pass1"
          id="pass1"
          placeholder="Введите пароль"
        /><br />
          <input
                  type="text"
                  class="form-control"
                  name="pass2"
                  id="pass2"
                  placeholder="Введите пароль повторно"
          /><br />
        <button class="btn btn-success" type="sumbit">Регистрация</button>
      </form>
    </div>
  </body>
</html>
