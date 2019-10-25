
<?php 
    
    //Llamamos al archivo de la conexion
    include_once 'conexion.php';
    
    //LLamamos a la variable que le pasamos las variable de la conexion
    //Se establece una consulta SQL, para agregar registros a la tabla
    //$conex->query("INSERT INTO registro(Nombre, Apellido, Email, Clave) 
    //VALUES('PrimerNombre', 'PrimerNombre', 'PrimerEmail@gmail.com', 'PrimerClave')");

    $consulta_datos = ("INSERT INTO registro(Nombre, Apellido, Email, Clave) 
    VALUES('PrimerNombre', 'PrimerApellido', 'PrimerEmail@gmail.com', 'PrimerClave')");

    $consulta_datos_2 = ("INSERT INTO registro(Nombre, Apellido, Email, Clave) 
    VALUES('SegundoNombre', 'SegundoApellido', 'SegundoEmail@gmail.com', 'SegundoClave')");

    $consulta_datos_3 = ("INSERT INTO registro(Nombre, Apellido, Email, Clave) 
    VALUES('TercerNombre', 'TercerApellido', 'TercerEmail@gmail.com', 'TercerClave')");

    $consulta_datos_4 = ("INSERT INTO registro(Nombre, Apellido, Email, Clave) 
    VALUES('CuartoNombre', 'CuartoApellido', 'CuartoEmail@gmail.com', 'CuartoClave')");

    //Utilizando la funcion de conexion de puede llamar simplement con su nombre
    consultarSQL($consulta_datos);
    consultarSQL($consulta_datos_2);
    consultarSQL($consulta_datos_3);
    consultarSQL($consulta_datos_4);

?>