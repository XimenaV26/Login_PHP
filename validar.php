<?php
 //Llamar a la conexión de la base de datos
 include('db.php');

 //Estas dos variables van a recibir los datos ingresados en el index
 $USUARIO1=$_POST['usuario'];
 $PASSWORD1=$_POST['password'];

 //Creación de una variable llamada Consulta para llamar a la base de datos 
$consulta="SELECT* FROM personal where usuario ='$USUARIO1' and password= '$PASSWORD1' ";

//Creación de la variable "resultado" para guaradar las variables. Query va a almacenar la conexión
$resultado=mysqli_query($conexion, $consulta);

//Creacion de la variable "filas" que va a guardar los resultados. 
$filas=mysqli_num_rows($resultado);

//Creacion de sentencia para validar que los datos sean correctos. 
if($filas){
    header("location:home.html");
}else{
    include("index.html");
    ?>
    <h1>ERROR DE AUTENTICIDAD</h1>
    <?php
}

//Se muestra el resultado que se esta mandando y se almacena en resultado
mysqli_free_result($resultado);

//Cerramos conexión 
mysqli_close($conexion);

?>

 
 