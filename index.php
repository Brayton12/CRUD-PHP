<?php 
    include("conexion/conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM numaleatorio";
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
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-light bg-light">
                    <form class="form-inline" action="consultar.php">
                        <input class="form-control mr-sm-2" name="numero" type="search" placeholder="Buscar numero" aria-label="Search" pattern="^[0-9]+([,]?[0-9]+)*$">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </nav>
            </div>

            <div class="col md">


                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                    Registrar un numero
                </button>


                <!-- Modal -->

                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Registrar un numero</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="clases/metodos.php" method="post">
                                <div class="modal-body">

                                    <div class="form-group">
                                        <input type="hidden" name="accion" id="" value="insertar">
                                        <label for="exampleFormControlInput1">Escriba un numero</label>
                                        <input type="numeric" name="numero" class="form-control"
                                            id="exampleFormControlInput1" placeholder="1,2,3"
                                            pattern="^[0-9]+([,]?[0-9]+)*$">
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">

        <div class="col-md-12 md2">
            <div class="col-md-8">
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>numeros</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            while($row=mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <th><?php  echo $row['numero']?></th>


                            <th><a href="clases/metodos.php?accion=eliminar&id=<?php echo $row['id'] ?>"
                                    class="btn btn-danger">Eliminar</a></th>
                            <th><a href="consultar.php?numero=<?php echo $row['numero'] ?>"
                                    class="btn btn-primary">Consultar</a></th>
                        </tr>
                        <?php 
                           }
                        ?>
                    </tbody>
                </table>
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