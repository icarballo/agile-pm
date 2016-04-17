<?php
/**
 * Created by PhpStorm.
 * User: icarballo
 * Date: 26/3/16
 * Time: 21:00
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Form | Project</title>

    <!-- Bootstrap -->
    <link href="bootstrap-3.3.6-dist/css/bootstrap.css" rel="stylesheet">
    <link href="custom_styles.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:700italic,700,600italic,600,400italic,400,300italic,300' rel='stylesheet' type='text/css'>

</head>
<body>

<form class="form-horizontal">

    <div class="form-group">
        <div class="col-sm-1"></div>
        <label class="col-sm-2 control-label" for="sm" style="font-family: 'Open Sans', sans-serif; font-size: 14pt; font-weight: 700; color: #008800;">Form | Project</label>
        <div class="col-sm-5"></div>
    </div>

    <div class="form-group" hidden>
        <div class="col-sm-1"></div>
        <label class="col-sm-2 control-label" for="sm" style="font-family: 'Open Sans', sans-serif; font-size: 12pt; font-weight: 700; color: #000000;">Identificador</label>
        <div class="col-sm-2">
            <input type="text" class="form-control input-sm" id="project_id" placeholder="Obligatorio">
        </div>
        <label class="col-sm-3 control-label" for="sm" style="font-family: 'Open Sans', sans-serif; font-size: 12pt; font-weight: 300; color: #737373;"></label>
    </div>

    <div class="form-group">
        <div class="col-sm-1"></div>
        <label class="col-sm-2 control-label" for="sm" style="font-family: 'Open Sans', sans-serif; font-size: 12pt; font-weight: 700; color: #000000;">Código de proyecto</label>
        <div class="col-sm-2">
            <input type="text" class="form-control input-sm" id="proyecto_codigo" placeholder="Obligatorio">
        </div>
        <label class="col-sm-3 control-label" for="sm" style="font-family: 'Open Sans', sans-serif; font-size: 12pt; font-weight: 300; color: #737373;">Asigna un código identificativo al poryecto.</label>
    </div>

    <div class="form-group">
        <div class="col-sm-1"></div>
        <label class="col-sm-2 control-label" for="sm" style="font-family: 'Open Sans', sans-serif; font-size: 12pt; font-weight: 700; color: #000000;">Etiqueta</label>
        <div class="col-sm-2">
            <input type="text" class="form-control input-sm" id="proyecto_etiqueta" placeholder="Obligatorio">
        </div>
        <label class="col-sm-3 control-label" for="sm" style="font-family: 'Open Sans', sans-serif; font-size: 12pt; font-weight: 300; color: #737373;">Asigna un etiqueta para enlazar elementos al proyecto automáticamente.</label>
    </div>

    <div class="form-group">
        <div class="col-sm-1"></div>
        <label class="col-sm-2 control-label" for="sm" style="font-family: 'Open Sans', sans-serif; font-size: 12pt; font-weight: 700; color: #000000;">Fecha de Inicio</label>
        <div class="col-sm-2">
            <input type="text" class="form-control input-sm" id="proyecto_fecha_inicio" placeholder="Obligatorio">
        </div>
        <label class="col-sm-3 control-label" for="sm" style="font-family: 'Open Sans', sans-serif; font-size: 12pt; font-weight: 300; color: #737373;"></label>
    </div>

    <div class="form-group">
        <div class="col-sm-1"></div>
        <label class="col-sm-2 control-label" for="sm" style="font-family: 'Open Sans', sans-serif; font-size: 12pt; font-weight: 700; color: #000000;">Descripción</label>
        <div class="col-sm-2">
            <textarea class="form-control" rows="4"></textarea>
        </div>
        <label class="col-sm-3 control-label" for="sm" style="font-family: 'Open Sans', sans-serif; font-size: 12pt; font-weight: 300; color: #737373;"></label>
    </div>
    <div class="form-group">
        <div class="col-sm-1"></div>
        <label class="col-sm-2 control-label" for="sm" style="font-family: 'Open Sans', sans-serif; font-size: 12pt; font-weight: 700; color: #000000;">Tipo de proyecto</label>
        <div class="col-sm-2">
            <input type="text" class="form-control input-sm" id="project_type_id" placeholder="Obligatorio">
        </div>
        <label class="col-sm-3 control-label" for="sm" style="font-family: 'Open Sans', sans-serif; font-size: 12pt; font-weight: 300; color: #737373;">Asigna una organización a tus prouectos.</label>
    </div>
    <div class="form-group">
        <div class="col-sm-1"></div>
        <label class="col-sm-2 control-label" for="sm" style="font-family: 'Open Sans', sans-serif; font-size: 12pt; font-weight: 700; color: #000000;">Estado del proyecto</label>
        <div class="col-sm-2">
            <input type="text" class="form-control input-sm" id="project_status_id" placeholder="Obligatorio">
        </div>
        <label class="col-sm-3 control-label" for="sm" style="font-family: 'Open Sans', sans-serif; font-size: 12pt; font-weight: 300; color: #737373;"></label>
    </div>
    <div class="form-group">
        <div class="col-sm-1"></div>
        <div class="col-sm-2"></div>
        <div class="col-sm-4">
            <a class="btn btn-default" href="#" role="button">Nuevo</a>
            <a class="btn btn-default" href="#" role="button">Guardar</a>
            <a class="btn btn-default" href="#" role="button">Eliminar</a>
        </div>
        <div class="col-sm-1">
        </div>

</form>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
</body>
</html>
