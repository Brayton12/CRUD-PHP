<?php
include("../conexion/conexion.php");
$con=conectar();

if (!empty($_GET['accion'])) {
    $accion=$_GET['accion'];
}else{  $accion=$_REQUEST['accion']; }

switch ($accion) {
    case 'eliminar':
        
        if (!empty($_GET['id'])) {
            $id=$_GET['id'];

            $sql="DELETE FROM numaleatorio  WHERE id='$id'";
            $query=mysqli_query($con,$sql);

            if($query){
                Header("Location: ../index.php");
            }
        }else{}
        break;
    case 'insertar':
        
        
        $numero=$_POST['numero'];
        


        $sql="INSERT INTO numaleatorio (numero) VALUES('$numero')";
        $query= mysqli_query($con,$sql);

        if($query){
            
            Header("Location: ../index.php");
            
        }else {
        }
        break;
    
    default:
        # code...
        break;
}
?>