
<!DOCTYPE html>
<html lang="es">
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
        <br>
        <input type="submit" value="Actualizar" value="Actualizar" class="button">
        
        
    </div>
            
        </div>

       </form>

    </body>
    </html>