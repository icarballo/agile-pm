<?php
/**
 * Created by PhpStorm.
 * User: odsadmin
 * Date: 22/04/2016
 * Time: 7:23
 */

function funct_valida_usuario ($usuario_codigo)
{

    // Conectarse a la base de datos
    $dbconn = new mysqli($dbhost,$user,$password,$database);

    // Preparar y ejecutar sentencias
    $stm = $dbconn->prepare("select usuario_id from tm_usuarios where usuario_codigo=? ");

    if (!$stm) {
        print ("Error en prepare: " . $dbconn->error . "n");
        exit;
    }

//i – número entero
//d – número fraccionario
//s – texto (string)

    if (!$stm->bind_param("s",$usuario_codigo)) {
        print("Error en bind_param: " . $stm->error . "n");
        exit;
    }

    $stm->bind_result($usuario_id);

// Desconectarse de la base de datos
    $dbconn->close();

}

?>