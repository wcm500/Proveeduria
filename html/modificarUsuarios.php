<html>
<head>
	<meta charset="UTF-8">
	<title></title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="../css/estilosLogin.css">
	

</head>
<body>

    <form class="formulario" action ="modificarUsuarios.php" method="POST"> 
   
       <!--Formulario para registrar personas en el sistemas como compradores, ya que esto
          sera controlador por la parte del administrador de usuarios y le pide informacion basica
           para el registro dentro del sistema.-->
       
       <h1>Registrate</h1>
        <div class="contenedor">
        
        <div class="input-contenedor">
            <i class="fas fa-user icon"></i>
            <input type="text" name="Nombre" placeholder="Nombre Completo">
            
            </div>
   
            <div class="input-contenedor">
               <i class="fas fa-envelope icon"></i>
               <input type="text" name = "apellido" placeholder="Primer Apellido">
               
               </div>
            
            <div class="input-contenedor">
            <i class="fas fa-envelope icon"></i>
            <input type="text" name = "correo" placeholder="Correo Electronico">
            
            </div>
            <div class="input-contenedor">
               <i class="fas fa-envelope icon"></i>
               <input type="text" name = "telefono" placeholder="Telefono">
               
               </div>
               <div class="input-contenedor">
                   <i class="fas fa-envelope icon"></i>
                   <input type="text" name = "apellido2" placeholder="Segundo Apellido">
                   
                   </div>
   
            <div class="input-contenedor">
               <i class="fas fa-envelope icon"></i>
               <input type="text" name = "cedula" placeholder="cedula">
               
               </div>
               <div class="input-contenedor">
                   <i class="fas fa-envelope icon"></i>
                   <input type="text" name = "rol" placeholder="comprador" readonly>
                   
                   </div>
   
               
            
            <div class="input-contenedor">
           <i class="fas fa-key icon"></i>
            <input type="password" name = "contrasena" placeholder="Contraseña" required>
            
            </div>

        </div>
        <input type="submit" name = "Eliminar" value="Eliminar" class="button">
        <p>
        <input type="submit" name="Actualizar" value="Actualizar" class="button">
        <p>
        <input type="submit" name="Consulta" value="Consulta" class="button">
        <p>
        <input type="submit" name="Insertar" value="Insertar" class="button">
        
        
    </div>
            
        </div>

       </form>

    </body>
</html>



<?php
   try{
    $user="root";
    $pass="";
    $server="localhost";
    $db="pruebatarea";
    $con=mysqli_connect($server,$user,$pass);
    mysqli_select_db($con,$db);
    echo "<script>
    alert('Conectado a la base de datos');
</script>";

}
catch(PDOException $e){
    die("Eror al conectarse con Mysql ");
}

if (isset($_POST['correo']) || isset($_POST['contrasena']) ||
isset($_POST['rol']) || isset($_POST['cedula']) ||
isset($_POST['Nombre']) || isset($_POST['apellido']) ||
isset($_POST['apellido2']) || isset($_POST['telefono'])) {

$correo = $_POST['correo'];
$cedula = $_POST['cedula'];
$contrasena=$_POST['contrasena'];
$nombre=$_POST['Nombre'];
$apellido=$_POST['apellido'];

$segundo_apellido=$_POST['apellido2'];
$telefono=$_POST['telefono'];}

if (isset($_POST['Eliminar'])) {
    try {
        $con=mysqli_connect($server,$user,$pass);
        mysqli_select_db($con,$db);
    
        
        $cedula = $_POST['cedula'];
        
    
        
        if ( $cedula=="") {
            
            echo "<script>
            alert('La cedula esta vacia');
        </script>";
        
        }else{
    
            $existe = 0;
    
             $resultados = mysqli_query($con, "SELECT * FROM USUARIO WHERE CEDULA_USUARIO = '$cedula'");
        while ($consulta = mysqli_fetch_array($resultados)) {
    
            $existe ++;
        }
        if ($existe == 0) {
         echo "<script>
        alert('El usuario no existe.');
    </script>";
    
        }else{
    
            $_DELETE_SQL="DELETE FROM USUARIO  WHERE CEDULA_USUARIO = '$cedula'";
    
    
            mysqli_query($con,$_DELETE_SQL);
            ECHO  "<script>
            alert('Eliminado de la tabla');
        </script>";
        
    
        }
          
    
         
        }
    } catch (\Throwable $th) {
        echo "<script>
    alert('no se ha eliminado el usuario');
</script>";

    }
}

if (isset($_POST['Actualizar'])) {

    try {
    $con=mysqli_connect($server,$user,$pass);
    mysqli_select_db($con,$db);

    $correo = $_POST['correo'];
    $cedula = $_POST['cedula'];
    $contrasena=$_POST['contrasena'];
    $nombre=$_POST['Nombre'];
    $apellido=$_POST['apellido'];
    $ROL=$_POST['rol'];
    $segundo_apellido=$_POST['apellido2'];
    $telefono=$_POST['telefono'];

    
    if ($correo=="" || $cedula=="" || $contrasena=="" || $nombre=="" ||
        $apellido==""  || $segundo_apellido=="" || $telefono=="") {
        
            echo "<script>
            alert('La cedula esta vacia');
        </script>";
    }else{

        $existe = 0;

         $resultados = mysqli_query($con, "SELECT * FROM USUARIO WHERE CEDULA_USUARIO = '$cedula'");
    while ($consulta = mysqli_fetch_array($resultados)) {

        $existe ++;
    }
    if ($existe == 0) {
        echo "<script>
        alert('el usuario no existe');
    </script>";
    }else{

        $_update_sql = "UPDATE USUARIO SET 
        `correo_usuario` = '$correo' ,
        `contrasena_usuario`   = '$contrasena', 
        
        `cedula_usuario`  = '$cedula',
        `nombre_usuario`  = '$nombre', 
        `primer_apellido_usuario`  = '$apellido', 
        `segundo_apellido_usuario`  = '$segundo_apellido', 
        `telefono_usuario`  = '$telefono'
        
        where cedula_usuario= '$cedula'";



        mysqli_query($con,$_update_sql);

        echo "<script>
        alert('se ha actualizado los datos');
    </script>";

    }
      

     
    }
} catch (\Throwable $th) {
    echo "<script>
            alert('No se actualizo');
        </script>";
}
}

$existe = 0;
if (isset($_POST['Consulta'])) {
    $resultados = mysqli_query($con, "SELECT * FROM USUARIO WHERE CEDULA_USUARIO = '$cedula'");
    while ($consulta = mysqli_fetch_array($resultados)) {
        echo $consulta['correo_usuario']."<br>";
        echo $consulta['contrasena_usuario']."<br>";
        echo $consulta['nombre_usuario']."<br>";
        echo $consulta['segundo_apellido_usuario']."<br>";
        echo $consulta['telefono_usuario']."<br>";
        echo $consulta['primer_apellido_usuario']."<br>";
        
        
        $existe ++;
        


    }
    if ($existe == 0) {
        echo "<script>
        alert('Él usuario no existe');
    </script>";
    }
}
if (isset($_POST['Insertar'])) {
try {
    $con=mysqli_connect($server,$user,$pass);
    mysqli_select_db($con,$db);


    if ($correo=="" || $cedula=="" || $contrasena=="" || $nombre=="" ||
        $apellido==""  || $segundo_apellido=="" || $telefono=="") {
        
            echo "<script>
            alert('No se insertaron los datos');
        </script>";
    }else{
        mysqli_query($con, "INSERT INTO USUARIO 
            (`correo_usuario`, `contrasena_usuario`, `rol_usuario`, 
            `cedula_usuario`, `nombre_usuario`, `primer_apellido_usuario`, 
            `segundo_apellido_usuario`, `telefono_usuario`) 
            VALUES
            ('$correo',
            '$contrasena',
            '$ROL',
            '$cedula',
            '$nombre',
            '$apellido',
            '$segundo_apellido',
            '$telefono')");

            echo "<script>
            alert('Se ha insertado los datos');
            </script>";


    }
} catch (\Throwable $th) {
   echo "<script>
            alert('No se inserto los datos');
        </script>";
}
    



    }
?>

