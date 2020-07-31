    <!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="../css/estilosLogin.css">
	

</head>  

<!---Formulario para inciar session el usuario, con los diferentes roles.-->
<body>
    <form class="formulario" action="loginvista.php" method= "POST">
    
    <h1>Login</h1>
     <div class="contenedor">
     
     
         
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="text" name = "correo" placeholder="Correo Electronico">
         
         </div>
         
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="password" name = "contrasena" placeholder="Contraseña" >
         
         </div>
         <input type="button" id ="inicio" value="Login" class="button" onclick = "login()"> <!--Boton para entrar al menu-->
         <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         <p>¿No tienes una cuenta? <a class="link" href="../html/registrarvista.php">Registrate </a></p>
     </div>
     <script> src = "../js/jquery-3.2.1.js"</script>
     
    
    </form>

    <!--Este metodo sirve para los ingresar los diferntes usuarios al sistema
                y valir el login mediante lo ingresado en las cajas de texto-->
    <script>
         



    

        </script>
</body>
</html>

<?php


/*Conexion */ 

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
/*
session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $correo = mysqli_real_escape_string($db,$_POST['correo']);
      $contrasena = mysqli_real_escape_string($db,$_POST['contrasena']); 
      
      $sql = "SELECT cedula_usuario FROM Usuario WHERE correo_usuario = '$correo' and contrasena_usuario = '$contrasena'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("correousuario");
         $_SESSION['login_user'] = $correo;
         
         header("location: enviarMensaje.html");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }

*/








/*
if (isset($_POST['correo']) || isset($_POST['contrasena'])) {
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    
}


$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$query = mysqli_query($con, "SELECT * FROM USUARIO WHERE correo_usuario = '$correo'
                         AND contrasena_usuario = '$contrasena'" );

$nr = mysqli_num_rows($query);

if ($nr == 1) {
    echo "Bienvenido".$correo;
}else if ($nr == 0){
    echo "No ingresO :(";
}

*/



/*
if(isset($_SESSION['rol'])){
    switch ($_SESSION['rol']) {
        case 1:
            header('location: MenuUsuario.html');
            break;
        case 2:
            header('location: panelControl_Aprob_Finan.php');
            break;
        case 3:
            header('location: panelControl_Jefe_Finan.php');
            break;
        
        default:
            # code...
            break;
    }
}
*/
/*
if (isset($_POST['correo']) && isset($_POST['contrasena']) ) {
    $correo= $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $user="root";
    $pass="";
    $server="localhost";
    $db="pruebatarea";
    $con=mysqli_connect($server,$user,$pass);
    mysqli_select_db($con,$db);

    $query = mysqli_query($con, "SELECT * FROM USUARIO WHERE correo_usuario = '$correo' AND contrasena_usuario = '$contrasena'");

    if (mysqli_num_rows($query)==0) {
        echo "<script>alert('No ingreso al sistema')</script>";

    }else{

        $row = mysqli_fetch_assoc($query);
        $_SESSION['correo'] = $row ['correo_usuario'];
        $_SESSION['rol'] = $row['rol_usuario'];


        if ($row['rol_usuario'] == "comprador") {
            echo "<script>alert('Ingreso como comprador')</script>";
            # code...
        }
        elseif ($row['rol_usuario'] = "financiero") {
            echo "<script>alert('Ingreso como Aprobador Financiero')</script>";
        }
        elseif ($row['rol_usuario'] = "jefe") {
            echo "<script>alert('Ingreso como Aprobador Jefe')</script>";
        }
        else{
            echo "<script>alert('Problemas al entrar')</script>";
        }
    }

 


}
*/

?>