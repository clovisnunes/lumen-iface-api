<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar pessoas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">

<a class="navbar-brand" href="#">
    <img src="/../img/vlc-player.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    MovG
</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Lista<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/pessoas/cadastro">Cadastro</a>
      </li>
    </ul>
    </div>
    </nav>

    <div class="container">
        <h1>Listagem de pessoas</h1>
        <ul class="list-group list-group-flush">
            <?php
                foreach($pessoas as $pessoa) {
                    echo ('<li class="list-group-item">' . $pessoa->nome . ", " . $pessoa->email . ", " . $pessoa->cpf . "</li>");
                }
            ?>
        </ul>
        <a href="/pessoas/cadastro" class="btn btn-link">Cadastro de pessoas</a>
    </div>
</body>
</html>