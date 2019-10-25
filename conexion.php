
<?php 

    //Creamos una variable donde vamos a crear la conexion
    //Se instancia con mysqli

    //1_ se agrega el host del servidor
    //2_ se agrega el usuario del servidor
    //3_ se agrega la contraseña del usuario del servidor
    //4_ se agrega se agrega el nombre de la base de datos
    $conex = new mysqli("localhost", "root", "", "usuarios");
    
    if($conex){
        echo '<br>La conexion se realizo con exito';
    }

    //Se verifica que la conexion esta funcionando
    if (mysqli_connect_errno()){
        
        //En caso de que la conexion no funciona, muestra que error tiene la conexion    
        printf("Conexion fallida", mysqli_connect_error());
    
    }
