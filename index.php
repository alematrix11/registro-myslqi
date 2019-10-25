
<?php 
    
    //Llamamos al archivo de la conexion
    include_once 'conexion.php';
    
    //LLamamos a la variable que le pasamos las variable de la conexion
    //Se establece una consulta SQL, para agregar registros a la tabla
    $conex->query("INSERT INTO registro(Nombre, Apellido, Email, Clave) 
    VALUES('PrimerNombre', 'SegundoNombre', 'PrimerEmail@gmail.com', 'PrimerClave')");

?>