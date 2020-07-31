<html>
<head>
	<meta charset="UTF-8">
	<title></title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="../css/estilosLogin.css">
	

</head>
<body>

    <form class="formulario" action ="registrarvista.php" method="POST"> 
   
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
                   <i class="fas fa-envelope icon"></i>

                   <input type="text" name="departamento" list="departamento" placeholder="ingrese el departamento" >
                        <datalist id="departamento">
                        <option value="Financiero">  
                        <option value="Marketing">
                        <option value="Informatica">  
                        <option value="Limpieza">
                        <option value="RecursosHumanos">  
                        </datalist>
                   
                   </div>

                   
   
               
            
            <div class="input-contenedor">
           <i class="fas fa-key icon"></i>
            <input type="password" name = "contrasena" placeholder="Contraseña" required>
            
            </div>

        </div>
        <input type="submit" name="Insertar" value="Registrarse" class="button">
        <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         <p>¿Ya tienes una cuenta?<a class="link" href="../html/loginVista.php">Iniciar Sesion</a></p>
        <p>
        
        
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
    $db="proveeduria";
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
}

if (isset($_POST['Actualizar'])) {

   
}

$existe = 0;
if (isset($_POST['Consulta'])) {
    
}
if (isset($_POST['Insertar'])) {
try {
    $con=mysqli_connect($server,$user,$pass);
    mysqli_select_db($con,$db);

    if (isset($_POST['correo']) || isset($_POST['contrasena']) ||
isset($_POST['rol']) || isset($_POST['cedula']) ||
isset($_POST['Nombre']) || isset($_POST['apellido']) ||
isset($_POST['apellido2']) || isset($_POST['telefono']) ||
isset($_POST['departamento']) ) {

$correo = $_POST['correo'];
$cedula = $_POST['cedula'];
$contrasena=$_POST['contrasena'];
$nombre=$_POST['Nombre'];
$apellido=$_POST['apellido'];
$ROL=$_POST['rol'];
$segundo_apellido=$_POST['apellido2'];
$telefono=$_POST['telefono'];
$departamento=$_POST['departamento'];}


    if ($correo=="" || $cedula=="" || $contrasena=="" || $nombre=="" ||
        $apellido==""  || $segundo_apellido=="" || $telefono=="") {
        
            echo "<script>
            alert('No se insertaron los datos');
        </script>";
    }else{
        mysqli_query($con, "INSERT INTO usuario
            (`correo_usuario`, `contrasena_usuario`, `rol_usuario`, 
            `cedula_usuario`, `nombre_usuario`, `primer_apellido_usuario`, 
            `segundo_apellido_usuario`, `telefono_usuario`) 
            VALUES
            ('$correo',
            '$contrasena',
            'comprador',
            '$cedula',
            '$nombre',
            '$apellido',
            '$segundo_apellido',
            '$telefono')");






            echo "<script>
            alert('Se ha insertado los datos');
            </script>";


            $sql = "INSERT INTO `comprador`(`id_departamento`, `cedula_usuario`) 
            VALUES( ( select `id_departamento` from departamento where nombre_departamento = '$departamento'), 
            '$cedula')";


            mysqli_query($con,$sql);

            echo "<script>
            alert('Se ha creado un comprador');
            </script>";


    }
} catch (\Throwable $th) {
   echo "<script>
            alert('No se inserto los datos');
        </script>";
}
    



    }
?>
