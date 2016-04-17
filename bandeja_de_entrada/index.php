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
    <title>Bandeja de entrada</title>

    <!-- Bootstrap -->
    <link href="../framework/bootstrap-3.3.6-dist/css/bootstrap.css" rel="stylesheet">
    <link href="../framework/css/custom_styles.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:700italic,700,600italic,600,400italic,400,300italic,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>

</head>
<body> <!-- style="background-color:#e6e6e6" -->

<table>
    <tr>
        <!-- tamaño 350 px -->
        <div id="apm-ds-header-a">
            <td width="350px" bgcolor="#aaaaaa" align="center"> <!-- bgcolor="#aaaaaa" -->
                <label class="col-sm-12 control-label" for="sm" style="font-family: 'Calibri Light', sans-serif; font-size: 18pt; font-weight: 700;">Agile <br> Project Management</label>
            </td>
        </div>

        <!-- tamaño 25 px -->
        <div id="apm-ds-header-separador">
            <td width="25px" bgcolor="#aaaaaa" align="center"></td>
        </div>

        <!-- tamaño 925 px -->
        <div id="apm-ds-header-b">
            <td width="925px" bgcolor="#aaaaaa" align="left"> <!-- bgcolor="#aaaaaa" -->
                <img src="../framework/material-design-icons-apm/action/ic_list_black_24dp.png">&nbsp;<a style="font-family: 'Calibri Light', sans-serif; font-size: 12pt; font-weight: 300; color: #000000;" href="../bandeja_de_entrada/index.php">Listas</a>&nbsp;
                <img src="../framework/material-design-icons-apm/action/ic_chrome_reader_mode_black_24dp.png">&nbsp;<a style="font-family: 'Calibri Light', sans-serif; font-size: 12pt; font-weight: 300; color: #000000;" href="../recopilar/index.php">Recopilar</a>&nbsp;
                <img src="../framework/material-design-icons-apm/action/ic_settings_black_24dp.png">&nbsp;<a style="font-family: 'Calibri Light', sans-serif; font-size: 12pt; font-weight: 300; color: #000000;" href="www.google.es">Procesar</a>&nbsp;
                <img src="../framework/material-design-icons-apm/action/ic_assignment_black_24dp.png">&nbsp;<a style="font-family: 'Calibri Light', sans-serif; font-size: 12pt; font-weight: 300; color: #000000;" href="www.google.es">Revisar</a>&nbsp;
                <img src="../framework/material-design-icons-apm/action/ic_work_black_24dp.png">&nbsp;<a style="font-family: 'Calibri Light', sans-serif; font-size: 12pt; font-weight: 300; color: #000000;" href="www.google.es">Proyectos</a>&nbsp;
                <img src="../framework/material-design-icons-apm/action/ic_visibility_black_24dp.png">&nbsp;<a style="font-family: 'Calibri Light', sans-serif; font-size: 12pt; font-weight: 300; color: #000000;" href="www.google.es">Perspectiva</a>&nbsp;
                <img src="../framework/material-design-icons-apm/action/ic_assessment_black_24dp.png">&nbsp;<a style="font-family: 'Calibri Light', sans-serif; font-size: 12pt; font-weight: 300; color: #000000;" href="www.google.es">Informes</a>&nbsp;
            </td>
        </div>

        <!-- tamaño 25 px -->
        <div id="apm-ds-header-separador">
            <td width="25px" bgcolor="#aaaaaa" align="center"></td>
        </div>

        <!-- tamaño 425 px -->
        <div id="apm-ds-header-c">
            <td width="425px" bgcolor="#aaaaaa"> <!-- bgcolor="#aaaaaa" -->
                <img src="../framework/material-design-icons-apm/social/ic_notifications_none_black_24dp.png">&nbsp;<a style="font-family: 'Calibri Light', sans-serif; font-size: 12pt; font-weight: 300; color: #000000;" href="www.google.es"></a>
                <img src="../framework/material-design-icons-apm/action/ic_perm_identity_black_36dp.png">&nbsp;<a style="font-family: 'Calibri Light', sans-serif; font-size: 12pt; font-weight: 300; color: #000000;" href="www.google.es">Login</a>
            </td>
        </div>
    </tr>
</table>

<table>
    <tr>
        <!-- tamaño 350 px -->
        <div id="apm-ds-content-a">

            <td width="15px"></td><!-- separador -->
            <td width="335px" valign="top">
                <table border="0">
                    <tr>
                        <td colspan="3">&nbsp;</td> <!-- separador -->
                    </tr>
                    <tr bgcolor="#eaeaea">
                        <td width="30px"><img src="../framework/material-design-icons-apm/content/ic_inbox_black_24dp.png"></td>
                        <td width="305px" valign="middle">
                            <a style="font-family: 'Calibri Light', sans-serif; font-size: 12pt; font-weight: 300; color: #000000;" href="../bandeja_de_entrada/index.php">Bandeja de entrada</a>
                        </td>
                    </tr>
                    <tr>
                        <td height="5px" colspan="2"></td> <!-- separador -->
                    </tr>
                    <tr>
                        <td height="1px" colspan="2" bgcolor="#aaaaaa"></td> <!-- linea divisoria -->
                    </tr>
                    <tr>
                        <td height="5px" colspan="2"></td> <!-- separador -->
                    </tr>
                    <tr>
                        <td width="30px"><img src="../framework/material-design-icons-apm/action/ic_today_black_24dp.png"></td>
                        <td width="305px" valign="middle">
                            <a style="font-family: 'Calibri Light', sans-serif; font-size: 11pt; font-weight: 300; color: #000000;" href="../agenda/index.php">Agenda</a>
                        </td>
                    </tr>
                    <tr>
                        <td height="5px" colspan="2"></td> <!-- separador -->
                    </tr>
                    <tr>
                        <td width="30px"><img src="../framework/material-design-icons-apm/navigation/ic_arrow_forward_black_24dp.png"></td>
                        <td width="305px" valign="middle">
                            <a style="font-family: 'Calibri Light', sans-serif; font-size: 11pt; font-weight: 300; color: #000000;" href="../siguientes_acciones/index.php">Siguientes Acciones</a>
                        </td>
                    </tr>
                    <tr>
                        <td height="5px" colspan="2"></td> <!-- separador -->
                    </tr>
                    <tr>
                        <td width="30px"><img src="../framework/material-design-icons-apm/action/ic_history_black_24dp.png"></td>
                        <td width="305px" valign="middle">
                            <a style="font-family: 'Calibri Light', sans-serif; font-size: 11pt; font-weight: 300; color: #000000;" href="../a_la_espera/index.php">A la espera</a>
                        </td>
                    </tr>
                    <tr>
                        <td height="5px" colspan="2"></td> <!-- separador -->
                    </tr>
                    <tr>
                        <td height="1px" colspan="2" bgcolor="#aaaaaa"></td> <!-- linea divisoria -->
                    </tr>
                    <tr>
                        <td height="5px" colspan="2"></td> <!-- separador -->
                    </tr>
                    <tr>
                        <td width="30px"><img src="../framework/material-design-icons-apm/action/ic_help_black_24dp.png"></td>
                        <td width="305px" valign="middle">
                            <a style="font-family: 'Calibri Light', sans-serif; font-size: 11pt; font-weight: 300; color: #000000;" href="../algun_dia_tal_vez/index.php">Algún día / Tal vez</a>
                        </td>
                    </tr>
                    <tr>
                        <td height="5px" colspan="2"></td> <!-- separador -->
                    </tr>
                    <tr>
                        <td width="30px"><img src="../framework/material-design-icons-apm/content/ic_archive_black_24dp.png"></td>
                        <td width="305px" valign="middle">
                            <a style="font-family: 'Calibri Light', sans-serif; font-size: 11pt; font-weight: 300; color: #000000;" href="../material_de_referencia/index.php">Material de Referencia</a>
                        </td>
                    </tr>
                    <tr>
                        <td height="5px" colspan="2"></td> <!-- separador -->
                    </tr>
                    <tr>
                        <td width="30px"><img src="../framework/material-design-icons-apm/file/ic_folder_open_black_24dp.png"></td>
                        <td width="305px" valign="middle">
                            <a style="font-family: 'Calibri Light', sans-serif; font-size: 11pt; font-weight: 300; color: #000000;" href="../archivo_de_seguimiento/index.php">Archivo de Seguimiento</a>
                        </td>
                    </tr>
                    <tr>
                        <td height="5px" colspan="2"></td> <!-- separador -->
                    </tr>
                    <tr>
                        <td height="1px" colspan="2" bgcolor="#aaaaaa"></td> <!-- linea divisoria -->
                    </tr>
                    <tr>
                        <td height="5px" colspan="2"></td> <!-- separador -->
                    </tr>
                    <tr>
                        <td width="30px"><img src="../framework/material-design-icons-apm/action/ic_delete_black_24dp.png"></td>
                        <td width="305px" valign="middle">
                            <a style="font-family: 'Calibri Light', sans-serif; font-size: 11pt; font-weight: 300; color: #000000;" href="../papelera/index.php">Papelera</a>
                        </td>
                    </tr>
                    <tr>
                        <td height="5px" colspan="2"></td> <!-- separador -->
                    </tr>
                    <tr>
                        <td width="30px"><img src="../framework/material-design-icons-apm/action/ic_done_black_24dp.png"></td>
                        <td width="305px" valign="middle">
                            <a style="font-family: 'Calibri Light', sans-serif; font-size: 11pt; font-weight: 300; color: #000000;" href="../hecho/index.php">Hecho</a>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">&nbsp;</td> <!-- último registro para gestionar la tabla correctamente. -->
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

        <!-- tamaño 925 px -->
        <div id="apm-ds-content-b">
            <td width="925px" valign="top">
                <table>
                    <tr>
                        <td colspan="4"   height="40px">
                                <img src="../framework/material-design-icons-apm/content/ic_inbox_black_48dp.png">
                                <label style="font-family: 'Calibri Light', sans-serif; font-size: 16pt; font-weight: 700; color: #000000;">Bandeja de entrada</label>
                        </td>
                    </tr>
                    <tr>
                        <td width="200px" height="40px"> </td>
                        <td width="275px" height="40px"> </td>
                        <td width="25px"  height="40px"> </td>
                        <td width="450px" height="40px"> </td>
                    </tr>
                    <tr>
                        <td width="200px" height="40px"> </td>
                        <td width="275px" height="40px"> </td>
                        <td width="25px"  height="40px"> </td>
                        <td width="450px" height="40px"> </td>
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

<table>
    <tr>
        <!-- tamaño 350 px -->
        <div id="apm-ds-footer-a">
            <td width="350px" bgcolor="#aaaaaa"></td>
        </div>

        <!-- tamaño 25 px -->
        <div id="apm-ds-footer-separador">
            <td width="25px" bgcolor="#aaaaaa" align="center"></td>
        </div>

        <!-- tamaño 925 px -->
        <div id="apm-ds-footer-b">
            <td width="925px" bgcolor="#aaaaaa" align="right">
                <img src="../framework/material-design-icons-apm/action/ic_copyright_black_18dp.png">
                <a style="font-family: 'Calibri Light', sans-serif; font-size: 10pt; font-weight: 300; color: #000000;" href="www.google.es"> 2016 by carballo-team. All rights reserved.</a>
            </td>
        </div>

        <!-- tamaño 25 px -->
        <div id="apm-ds-footer-separador">
            <td width="25px" bgcolor="#aaaaaa" align="center"></td>
        </div>

        <!-- tamaño 425 px -->
        <div id="apm-ds-footer-c">
            <td width="425px" bgcolor="#aaaaaa"></td>
        </div>

    </tr>
</table>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../framework/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
</body>
</html>


