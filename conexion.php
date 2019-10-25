
<?php 

    //Se crea una funcion, a la que se le debe pasar una query, lo que sera la consulta que se hace a la base de datos
    function consultarSQL($query){
        
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
        
        $conex-> set_charset("utf-8");
        $conex-> autocommit(FALSE);
        $conex-> begin_transaction(MYSQLI_TRANS_START_WITH_CONSISTENT_SNAPSHOT);
        
        //Se establece un condicional para cuando la consulta se realiza correctamente
        //Se establece la consulta y se guarda en una variable consulta
        if($consulta = $conex->query($query)){
            
            //Se llama al metodo commit
            if($conex->commit()){
            
                echo '<br>Datos guardados';
            
            }else{
            
                echo '<br>Error datos no guardados';
            
            }
           
        }else{
            
            //Se llama al metodo commit
            $conex->rollback();
            
                echo '<br>Error datos no guardados';
            
        }
           
        return $consulta;
           
    }