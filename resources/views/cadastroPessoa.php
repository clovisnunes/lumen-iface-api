<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<?php
    // if($errors->any()) {

    //     echo("<div><ul>");
        
    //     foreach($errors->all() as $error) {
    //         echo("<li>" . $error . "</li>");
    //     }
        
    //     echo("</div></ul>");
    // }
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">

<a class="navbar-brand" href="#">
    <img src="/../img/vlc-player.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    MovG
</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/pessoas">Lista</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Cadastro<span class="sr-only">(current)</span></a>
      </li>
    </ul>
    </div>
    </nav>


<main>
<div class="container">
    <h1>Cadastro de pessoas</h1>
    <form action="/pessoas" method="post">
            <div class="form-group">
            <input type="text" name="nome" class="form-control" size="50" placeholder="João da Silva" maxlength="128">
            </div>
            <div class="form-group">
            <input type="text" name="email" class="form-control" size="50" placeholder="joão@dasilva.com" maxlength="128">
            </div>
            <div class="form-group">
            <input type="text" name="cpf" class="form-control" size="11" placeholder="99887766550" maxlength="11">
            </div>
            <input type="submit" name="cadastro" class="btn btn-primary" value="Cadastrar">
        </div>
    </form>
</div>
</main>

</body>
</html>