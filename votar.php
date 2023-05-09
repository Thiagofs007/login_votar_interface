<!DOCTYPE html>
<html>
    <head>
        <title>Votação</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
    <body>
    <div class="container text-center">
  <div class="row">
    <div class="col-1">
      &nbsp;
    </div>
    <div class="col bg-danger ">
        <form class="mb-3" method = "POST" action="" >
        <h1>Escolha uma opção</h1><br>
        <input type=radio name="op1" value="1">1° Opção &nbsp; &nbsp;<input type=radio name="op2" value="2">2° Opção &nbsp; &nbsp;<input type=radio name="op3" value="3">3° Opção 
        <br><br>
        <input class="bg-danger-subtle" type=submit name="Votar" value="Votar">
        <br><br>
        <?php
            $resulta = 0 ;
            $resultb = 0 ;
            $resultc = 0 ;

            if(isset($_POST["op1"])){
                $resulta++;
            }
            if(isset($_POST["op2"])){
                $resultb++;    
            }
            
            if(isset($_POST["op3"])){
                $resultc++;
            }
            echo "<h3>Resultados</h3>";
            echo("1° Opção:".$resulta);
            echo("<br>2° Opção:".$resultb);
            echo("<br>3° Opção:".$resultc);
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