<?php
require "../../mysql/Query.php";
//creo funcion login, ojo aun no se ejecuta, sino cuando se llame
function getLogin($usuario, $clave)
{
    $query = new Query();
    $row = null;
    $sql = "SELECT * FROM `usuarios` WHERE `name` = '{$usuario}' AND `clave` = '{$clave}'";
    $row = $query->getFirst($sql);
    if($row){
        return true;
    }else{
        return false;
    }
}


if(empty($_POST['usuario']) || empty($_POST['clave']) )
{
    //vacio
    echo "faltan datos";
}else{
    //lleno
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    $login = getLogin($usuario, $clave);

    if($login){
        //creamos lasa variables de SESION
        echo "Bienvenido has inicado sesion";
        //redireccionar a la pagina de inicio
    }else{
        echo "Usuario o clave incorrecto";
    }
}

