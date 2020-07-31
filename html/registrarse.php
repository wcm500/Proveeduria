<?php

try{
    global $cnx;
    
    $cnx= new PDO("sqlsrv:Server=localhost; Database=Proveeduria", "", "");
    
    echo "conectado";

    
if (isset($_POST['correo']) || isset($_POST['contrasena']) ||
isset($_POST['rol']) || isset($_POST['cedula']) ||
isset($_POST['Nombre']) || isset($_POST['apellido']) ||
isset($_POST['apellido2']) || isset($_POST['telefono'])) {

    
$correo = $_POST['correo'];
$cedula = $_POST['cedula'];

$contrasena=$_POST['contrasena'];
$nombre=$_POST['Nombre'];
$apellido=$_POST['apellido'];
$ROL=$_POST['rol'];
$segundo_apellido=$_POST['apellido2'];
$telefono=$_POST['telefono'];






$sql ="INSERT INTO USUARIO  (
    correo_usuario,
    contrasena_usuario,
    rol_usuario,
    cedula_usuario,
    nombre_usuario,
    primer_apellido_usuario,
    segundo_apellido_usuario,
    telefono_usuario
) VALUES('$correo'
                            ,'$contrasena',
                            '$ROL',
                            '$cedula',
                            '$nombre',
                            '$apellido',
                            '$segundo_apellido',
                            '$telefono' )";

$cnx->exec($sql);


echo "datos guardados <br><a href= '../registrarvista.html'>Volver</a>" ;


}

}

catch(PDOException $e){
    die("Eror al conectarse con sql server: ");
}




    # code...


?>