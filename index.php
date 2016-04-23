<?php
/**
 * Created by PhpStorm.
 * User: odsadmin
 * Date: 15/04/2016
 * Time: 20:02
 */ ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Acceso</title>

    <!-- Bootstrap -->
    <link href="framework/bootstrap-3.3.6-dist/css/bootstrap.css" rel="stylesheet">
    <link href="framework/css/custom_styles.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:700italic,700,600italic,600,400italic,400,300italic,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>

</head>
<body>

<table id="apm-ds-header">
    <tr>
        <!-- tamaño 350 px -->
        <div id="apm-ds-header-a">
            <td width="350px" bgcolor="#eaeaea" align="center"> <!-- bgcolor="#aaaaaa" -->
                <label class="col-sm-12 control-label" for="sm" style="font-family: 'Calibri Light', sans-serif; font-size: 18pt; font-weight: 700;">agile-pm</label>
            </td>
        </div>

        <!-- tamaño 25 px -->
        <div id="apm-ds-header-separador">
            <td width="25px" bgcolor="#eaeaea" align="center"></td>
        </div>

        <!-- tamaño 925 px -->
        <div id="apm-ds-header-b">
            <td width="925px" bgcolor="#eaeaea" align="left></td>
        </div>

        <!-- tamaño 25 px -->
        <div id="apm-ds-header-separador">
            <td width="25px" bgcolor="#eaeaea" align="center"></td>
        </div>

        <!-- tamaño 425 px -->
        <div id="apm-ds-header-c">
            <td width="425px" bgcolor="#eaeaea"></td>
        </div>
    </tr>
</table>

<table>
    <tr>
        <!-- tamaño 350 px -->
        <div id="apm-ds-content-a">

            <td width="15px"></td><!-- separador -->
            <td width="335px" valign="top">

            </td>
        </div>

        <!-- tamaño 25 px -->
        <div id="apm-ds-content-separador">
            <td width="12px" valign="top"></td>
            <td width="1px" valign="top" bgcolor="#aaaaaa"></td>
            <td width="12px" valign="top"></td>
        </div>

        <!-- tamaño 925 px -->
        <div id="apm-ds-content-b">
            <td width="925px" valign="top">
                <table align="center"> <!-- max width = 650px -->
                    <tr>
                        <td height="10px" colspan="4"></td>
                    </tr>
                    <tr>
                        <td colspan="4" align="center">
                            <label style="font-family: 'Calibri Light', sans-serif; font-size: 16pt; font-weight: 700; color: #000000;">Acceso a la aplicación</label>
                        </td>
                    </tr>
                    <tr>
                        <td height="10px" colspan="4"></td>
                    </tr>
                    <tr>
                        <td width="150px"></td>
                        <td width="100px">
                            <a style="font-family: 'Calibri Light', sans-serif; font-size: 11pt; font-weight: 300; color: #000000;" href="none" class="without_href">Usuario</a>
                        </td>
                        <td width="250px">
                            <div class="col-sm-13">
                                <input type="text" class="form-control input-sm" id="usuario_codigo" placeholder="Obligatorio">
                            </div>
                        </td>
                        <td width="150px"></td>
                    </tr>
                    <tr>
                        <td height="10px" colspan="4"></td>
                    </tr>
                    <tr>
                        <td width="150px"></td>
                        <td width="100px">
                            <a style="font-family: 'Calibri Light', sans-serif; font-size: 11pt; font-weight: 300; color: #000000;" href="none" class="without_href">Contraseña</a>
                        </td>
                        <td width="250px">
                            <div class="col-sm-13">
                                <input type="password" class="form-control input-sm" id="usuario_contrasena" placeholder="Obligatorio">
                            </div>
                        </td>
                        <td width="150px"></td>
                    </tr>
                    <tr>
                        <td height="10px" colspan="4"></td>
                    </tr>
                    <tr>
                        <td colspan="4" align="center">
                            <div class="col-sm-13">
                                <button type="button" class="btn btn-default btn-sm">Acceder</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td height="10px" colspan="4"></td>
                    </tr>
                    <tr>
                        <td colspan="4" align="center">
                            <a style="font-family: 'Calibri Light', sans-serif; font-size: 11pt; font-weight: 300; color: #000000;" href="none" class="without_href">¿No tiene una cuenta? </a><a class="with_href" href="none" style="font-family: 'Calibri Light', sans-serif; font-size: 11pt; font-weight: 300; text-decoration: underline; color: #000000;" > Cree una.</a>
                        </td>
                    </tr>
                    <tr>
                        <td height="10px" colspan="4"></td>
                    </tr>
                    <tr>
                        <td colspan="4" align="center">
                            <a style="font-family: 'Calibri Light', sans-serif; font-size: 11pt; font-weight: 300; color: #000000;" href="none" class="without_href">¿Has olvidado tu contraseña? </a><a class="with_href" href="none" style="font-family: 'Calibri Light', sans-serif; font-size: 11pt; font-weight: 300; text-decoration: underline; color: #000000;"> Recupérala.</a>
                        </td>
                    </tr>
                    <tr>
                        <td height="30px" colspan="4"></td>
                    </tr>
                </table>
            </td>
        </div>

        <!-- tamaño 25 px -->
        <div id="apm-ds-content-separador">
            <td width="12px" valign="top"></td>
            <td width="1px" valign="top" bgcolor="#aaaaaa"></td>
            <td width="12px" valign="top"></td>
        </div>

        <!-- tamaño 425 px -->
        <div id="apm-ds-content-c">
            <td width="425px" valign="top">
                <table>
                    <tr>
                        <td colspan="4" height="40px"></td>
                    </tr>
                </table>
            </td>
        </div>
    </tr>
</table>

<table id="apm-ds-footer">
    <tr>
        <!-- objetivo: línea horizontal de separación entre el contenido y el pie de página -->
        <div id="apm-ds-footer-a-b-c">
            <td colspan="5" height="1px" bgcolor="#aaaaaa"></td>
        </div>
    </tr>
    <tr>
        <!-- objetivo: separador -->
        <div id="apm-ds-footer-separador">
            <td colspan="5" height="10px"></td>
        </div>
    </tr>
    <tr>
        <!-- objetivo: pie de página del menú izquierdo -->
        <div id="apm-ds-footer-a">
            <td width="350px"></td>
        </div>

        <!-- objetivo: separador -->
        <div id="apm-ds-footer-separador">
            <td width="25px"></td>
        </div>

        <!-- objetivo: pie de página del contenido de la página -->
        <div id="apm-ds-footer-b">
            <td width="925px" align="right">
                <img src="framework/material-design-icons-apm/action/ic_copyright_black_18dp.png">
                <a style="font-family: 'Calibri Light', sans-serif; font-size: 10pt; font-weight: 300; color: #000000;" href="www.google.es"> 2016 by carballo-team. All rights reserved.</a>
            </td>
        </div>

        <!-- objetivo: separador -->
        <div id="apm-ds-footer-separador">
            <td width="25px"></td>
        </div>

        <!-- objetivo: pie de página de la knowledge -->
        <div id="apm-ds-footer-c">
            <td width="425px"></td>
        </div>

    </tr>
</table>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="framework/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
</body>
</html>
