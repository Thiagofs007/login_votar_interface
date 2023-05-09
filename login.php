<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
    <body>
    <div class="container text-center">
  <div class="row">
    <div class="col-1">
    &nbsp;
    </div>
    <div class="col">
    &nbsp;<br>
    </div>
    <div class="col-1">
    &nbsp;
    </div>
  </div>
</div>
    <div class="container-fluid text-start f-5  ">
  <div class="row">
    <div class="col-1">
      &nbsp;
    </div>
    <div class="col bg-info text-center">
    <form method = "POST" action="">
        <h1><b>Faça seu Login</b></h1><br><br>
        Nome: <input type=text name=nome>
        <br><br>
        Crie uma senha: <input type=password name=senha>
        <br><br>
        <input class="bg-info-subtle" type=submit name="criarconta" value="criar conta">
        <br><br>
        <?php
            $nome = "thiago";
            $senha = "123";
           
            if(($_POST["nome"]) == $nome && ($_POST["senha"]) == $senha){
                header("Location: result.php");
            }
        ?>
        </form>
    </div>
    <div class="col-1">
      &nbsp;
    </div>
  </div>
</div>
    </body>
</html>