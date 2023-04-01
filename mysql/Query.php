<?php
require "Conexion.php";
class Query
{
    public function getFirst($sql)
    {
        $conexion = new Conexion();
        $statement = $conexion->CONEXION->prepare($sql);
        $statement->execute();
        $row = $statement->fetch();
        return $row;
    }
}


