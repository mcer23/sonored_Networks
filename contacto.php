<?php
//validando datos
$user="root";
$pass="";
$host="localhost";

//conectando a la bd
$connection=mysqli_connect($host,$user,$pass);
//llamado al input
$nombre=$_POST["nombre"];
$apellido=$_POST["apellidos"];
$colonia=$_POST["colonia"];
$telefono=$_POST["telefono"];
$mensaje=$_POST["mensaje"];

//Verificamos la conexión a la bd
if(!$connection){
    echo "No se ha podido conectar con el servidor", mysql_error();
}
    else{
    echo "Conexión exitosa";
    }
    //indicamos el nombre de la bd
    $datab="clientesSonored";
    $db=mysqli_select_db($connection,$datab);
    if(!$db){
        echo "No se ha podido conectar con la tabla";
    }
        else{
            echo "Conectada a la tabla";
        }
    $instruccion_SQL="INSERT INTO tabla (nombre, apellidos, colonia, telefono, mensaje)";
    $resultado =mysqli_query($connection,$instruccion_SQL);    
    //$consulta ="select * from tabla where id="2"; si queremos que nos muestre un registro especifico.
    $consulta="SELECT * FROM tabla";
    
$result=mysqli_query($connection, $consulta);
if(!$result){
    echo "No se ha podido a hacer la consulta";
}
    else{
        echo "Resultados ok";
    }





?>