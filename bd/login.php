<?php
session_start();
include('./conexion.inc.php');
//crear el objeto de la conexion
$con=new Conexion();
$link=$con->Conectar();
//generar la consulta de usuarion y password
$usuario=(isset($_POST['usuario']))?$_POST['usuario']:'';//Guarda el usuario
$password=(isset($_POST['password']))?$_POST['password']:'';//Guarda la contraseña
//COnsultar en la BD que exista
$sql="select u.id_r, r.descrip_r as rol from usuario u join roles as r on u.id_r=r.id_r where usuario='$usuario' and password='$password'";
$res = $link->prepare($sql);//preparar la consulta
$res->execute();//ejecutar la consulta

if($res->rowCount()>=1){//si en el array hay un registro o más
    $data=$res->fetchAll(PDO::FETCH_ASSOC);
    //CREAR LAS VARIABLES DE SESION 
    $_SESSION['usuario']=$usuario;
    //controlar el rol de sesion 
    $_SESSION['roles']=$data[0]['id_r'];
    $_SESSION['desc']=$data[0]['rol'];
}else{
    $_SESSION['usuario']=NULL;
    $data=NULL;
}
print json_encode($data);
$link=NULL;

?>