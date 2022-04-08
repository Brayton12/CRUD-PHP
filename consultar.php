<?php 
    include("conexion/conexion.php");
    $con=conectar();
    $numero=$_REQUEST['numero'];
    

    $sql="SELECT *  FROM numaleatorio where numero=".$numero;
    $query=mysqli_query($con,$sql);
    
    $row=mysqli_fetch_array($query);
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/estilo.css">
    <title>PRUEBA TECNICA</title>
</head>

<body>
    <div class="container">
        
            
        <div class="col-md-12 md2">
            <div class="col-md-8">
            <?php  if (!empty($row)) {
                                 
                                 ?>
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>id</th>
                            <th>numeros</th>                            
                        </tr>
                    </thead>

                    <tbody>
                       
                        <tr>
                            <th><?php  echo $row['id']?></th>
                            <th><?php  echo $row['numero']?></th>                            
                        </tr>
                        
                    </tbody>
                </table>
                <?php  }else{?>
                    <div class="alert alert-warning" role="alert">
                        No existe este ID en la base de datos<a href="index.php" class="btn btn-primary">regresar al inicio</a>
                    </div>
                <?php } ?>
            </div>
            

        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

</html>