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
    <title>Recopilar</title>

    <!-- Bootstrap -->
    <link href="../framework/bootstrap-3.3.6-dist/css/bootstrap.css" rel="stylesheet">
    <link href="../framework/css/custom_styles.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:700italic,700,600italic,600,400italic,400,300italic,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>

</head>
<body> <!-- style="background-color:#e6e6e6" -->

<table id="apm-ds-header">
    <tr>
        <!-- apm-ds-header-a | logo -->
        <td width="350px" height="40px" bgcolor="#eaeaea" align="center"> <!-- bgcolor="#aaaaaa" -->
            <label class="col-sm-12 control-label" for="sm" style="font-family: 'Calibri Light', sans-serif; font-size: 18pt; font-weight: 700;">agile-pm</label>
        </td>

        <!-- apm-ds-header-separador -->
        <td width="25px" height="40px" bgcolor="#eaeaea" align="center"></td>

        <!-- apm-ds-header-b | menú principal de la website -->
        <td width="925px" height="40px" bgcolor="#eaeaea" align="left"> <!-- bgcolor="#aaaaaa" -->
            <table width="100%">
                <tr bgcolor="">
                    <td width="80px" height="40px" align="center" onMouseover="this.bgColor='#d3d3d3'" onMouseout="this.bgColor='#eaeaea'">
                        <img src="../framework/material-design-icons-apm/action/ic_list_black_24dp.png">&nbsp;<a class="with_href" style="font-family: 'Calibri Light', sans-serif; font-size: 12pt; font-weight: 300; color: #000000;" href="../bandeja_de_entrada/index.php">Listas</a>
                    </td>
                    <td width="100px" height="40px" align="center" onMouseover="this.bgColor='#c2c2c2'" onMouseout="this.bgColor='#d3d3d3'" bgcolor="#d3d3d3">
                        <img src="../framework/material-design-icons-apm/editor/ic_border_color_black_24dp.png">&nbsp;<a class="with_href" style="font-family: 'Calibri Light', sans-serif; font-size: 12pt; font-weight: 300; color: #000000;" href="../recopilar/index.php">Recopilar</a>
                    </td>
                    <td width="100px" height="40px" align="center" onMouseover="this.bgColor='#d3d3d3'" onMouseout="this.bgColor='#eaeaea'">
                        <img src="../framework/material-design-icons-apm/action/ic_settings_black_24dp.png">&nbsp;<a class="with_href" style="font-family: 'Calibri Light', sans-serif; font-size: 12pt; font-weight: 300; color: #000000;" href="../error/en_construccion.php">Procesar</a>
                    </td>
                    <td width="80px" height="40px" align="center" onMouseover="this.bgColor='#d3d3d3'" onMouseout="this.bgColor='#eaeaea'">
                        <img src="../framework/material-design-icons-apm/action/ic_assignment_black_24dp.png">&nbsp;<a class="with_href" style="font-family: 'Calibri Light', sans-serif; font-size: 12pt; font-weight: 300; color: #000000;" href="www.google.es">Revisar</a>
                    </td>
                    <td width="100px" height="40px" align="center" onMouseover="this.bgColor='#d3d3d3'" onMouseout="this.bgColor='#eaeaea'">
                        <img src="../framework/material-design-icons-apm/action/ic_work_black_24dp.png">&nbsp;<a class="with_href" style="font-family: 'Calibri Light', sans-serif; font-size: 12pt; font-weight: 300; color: #000000;" href="www.google.es">Proyectos</a>
                    </td>
                    <td width="110px" height="40px" align="center" onMouseover="this.bgColor='#d3d3d3'" onMouseout="this.bgColor='#eaeaea'">
                        <img src="../framework/material-design-icons-apm/action/ic_visibility_black_24dp.png">&nbsp;<a class="with_href" style="font-family: 'Calibri Light', sans-serif; font-size: 12pt; font-weight: 300; color: #000000;" href="www.google.es">Perspectiva</a>
                    </td>
                    <td width="100px" height="40px" align="center" onMouseover="this.bgColor='#d3d3d3'" onMouseout="this.bgColor='#eaeaea'">
                        <img src="../framework/material-design-icons-apm/action/ic_assessment_black_24dp.png">&nbsp;<a class="with_href" style="font-family: 'Calibri Light', sans-serif; font-size: 12pt; font-weight: 300; color: #000000;" href="www.google.es">Informes</a>
                    </td>
                    <td height="40px"></td>
                </tr>
            </table>
        </td>

        <!-- apm-ds-header-separador -->
        <td width="25px" height="40px" bgcolor="#eaeaea" align="center"></td>

        <!-- apm-ds-header-c -->
        <td width="425px" height="40px" bgcolor="#eaeaea"> <!-- bgcolor="#aaaaaa" -->
            <img src="../framework/material-design-icons-apm/social/ic_notifications_none_black_24dp.png">&nbsp;<a class="without_href" style="font-family: 'Calibri Light', sans-serif; font-size: 12pt; font-weight: 300; color: #000000;" href="www.google.es"></a>
            <img src="../framework/material-design-icons-apm/action/ic_perm_identity_black_36dp.png">&nbsp;<a class="without_href" style="font-family: 'Calibri Light', sans-serif; font-size: 12pt; font-weight: 300; color: #000000;" href="www.google.es">Login</a>
        </td>

    </tr>
</table>

<table>
    <tr>

        <!-- apm-ds-content-separador -->
        <td width="15px"></td>

        <!-- ***************************************************************************************************************************************************************** -->
        <!-- apm-ds-content-a -->
        <!-- ***************************************************************************************************************************************************************** -->
        <td width="335px" valign="top">

            <table border="0">
                <tr>
                    <td colspan="3">&nbsp;</td> <!-- separador -->
                </tr>

                <tr onMouseover="this.bgColor='#eaeaea'" onMouseout="this.bgColor='#ffffff'">
                    <td width="30px">
                        <img src="../framework/material-design-icons-apm/content/ic_inbox_black_24dp.png">
                    </td>
                    <td width="305px" valign="middle">
                        <a class="with_href" style="font-family: 'Calibri Light', sans-serif; font-size: 12pt; font-weight: 300; color: #000000;" href="../bandeja_de_entrada/index.php">Bandeja de entrada</a>
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

                <tr onMouseover="this.bgColor='#eaeaea'" onMouseout="this.bgColor='#ffffff'">
                    <td width="30px">
                        <img src="../framework/material-design-icons-apm/action/ic_today_black_24dp.png">
                    </td>
                    <td width="305px" valign="middle">
                        <a class="with_href" style="font-family: 'Calibri Light', sans-serif; font-size: 11pt; font-weight: 300; color: #000000;" href="../agenda/index.php">Agenda</a>
                    </td>
                </tr>

                <tr>
                    <td height="5px" colspan="2"></td> <!-- separador -->
                </tr>

                <tr onMouseover="this.bgColor='#eaeaea'" onMouseout="this.bgColor='#ffffff'">
                    <td width="30px">
                        <img src="../framework/material-design-icons-apm/navigation/ic_arrow_forward_black_24dp.png">
                    </td>
                    <td width="305px" valign="middle">
                        <a class="with_href" style="font-family: 'Calibri Light', sans-serif; font-size: 11pt; font-weight: 300; color: #000000;" href="../siguientes_acciones/index.php">Siguientes Acciones</a>
                    </td>
                </tr>

                <tr>
                    <td height="5px" colspan="2"></td> <!-- separador -->
                </tr>

                <tr onMouseover="this.bgColor='#eaeaea'" onMouseout="this.bgColor='#ffffff'">
                    <td width="30px">
                        <img src="../framework/material-design-icons-apm/action/ic_history_black_24dp.png">
                    </td>
                    <td width="305px" valign="middle">
                        <a class="with_href" style="font-family: 'Calibri Light', sans-serif; font-size: 11pt; font-weight: 300; color: #000000;" href="../a_la_espera/index.php">A la espera</a>
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

                <tr onMouseover="this.bgColor='#eaeaea'" onMouseout="this.bgColor='#ffffff'">
                    <td width="30px">
                        <img src="../framework/material-design-icons-apm/action/ic_help_black_24dp.png">
                    </td>
                    <td width="305px" valign="middle">
                        <a class="with_href" style="font-family: 'Calibri Light', sans-serif; font-size: 11pt; font-weight: 300; color: #000000;" href="../algun_dia_tal_vez/index.php">Algún día / Tal vez</a>
                    </td>
                </tr>

                <tr>
                    <td height="5px" colspan="2"></td> <!-- separador -->
                </tr>

                <tr onMouseover="this.bgColor='#eaeaea'" onMouseout="this.bgColor='#ffffff'">
                    <td width="30px">
                        <img src="../framework/material-design-icons-apm/content/ic_archive_black_24dp.png">
                    </td>
                    <td width="305px" valign="middle">
                        <a class="with_href" style="font-family: 'Calibri Light', sans-serif; font-size: 11pt; font-weight: 300; color: #000000;" href="../material_de_referencia/index.php">Material de Referencia</a>
                    </td>
                </tr>

                <tr>
                    <td height="5px" colspan="2"></td> <!-- separador -->
                </tr>

                <tr onMouseover="this.bgColor='#eaeaea'" onMouseout="this.bgColor='#ffffff'">
                    <td width="30px">
                        <img src="../framework/material-design-icons-apm/file/ic_folder_open_black_24dp.png">
                    </td>
                    <td width="305px" valign="middle">
                        <a class="with_href" style="font-family: 'Calibri Light', sans-serif; font-size: 11pt; font-weight: 300; color: #000000;" href="../archivo_de_seguimiento/index.php">Archivo de Seguimiento</a>
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

                <tr onMouseover="this.bgColor='#eaeaea'" onMouseout="this.bgColor='#ffffff'">
                    <td width="30px">
                        <img src="../framework/material-design-icons-apm/action/ic_delete_black_24dp.png">
                    </td>
                    <td width="305px" valign="middle">
                        <a class="with_href" style="font-family: 'Calibri Light', sans-serif; font-size: 11pt; font-weight: 300; color: #000000;" href="../papelera/index.php">Papelera</a>
                    </td>
                </tr>

                <tr>
                    <td height="5px" colspan="2"></td> <!-- separador -->
                </tr>

                <tr onMouseover="this.bgColor='#eaeaea'" onMouseout="this.bgColor='#ffffff'">
                    <td width="30px">
                        <img src="../framework/material-design-icons-apm/action/ic_done_black_24dp.png">
                    </td>
                    <td width="305px" valign="middle">
                        <a class="with_href" style="font-family: 'Calibri Light', sans-serif; font-size: 11pt; font-weight: 300; color: #000000;" href="../hecho/index.php">Hecho</a>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">&nbsp;</td> <!-- último registro para gestionar la tabla correctamente. -->
                </tr>

            </table>

        </td>

        <!-- apm-ds-content-separador -->
        <td width="12px" valign="top"></td>
        <td width="1px" valign="top" bgcolor="#aaaaaa"></td>
        <td width="12px" valign="top"></td>

        <!-- ***************************************************************************************************************************************************************** -->
        <!-- apm-ds-content-b -->
        <!-- ***************************************************************************************************************************************************************** -->
        <td width="925px" valign="top">
            <table>
                <tr>
                    <td colspan="4"   height="20px"></td>
                </tr>
                <tr>
                    <td colspan="4"   height="40px">
                        <img src="../framework/material-design-icons-apm/editor/ic_border_color_black_36dp.png">
                        <label style="font-family: 'Calibri Light', sans-serif; font-size: 16pt; font-weight: 700; color: #000000;">Recopilar</label>
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

        <!-- apm-ds-content-separador -->
        <td width="12px" valign="top"></td>
        <td width="1px" valign="top" bgcolor="#aaaaaa"></td>
        <td width="12px" valign="top"></td>

        <!-- ***************************************************************************************************************************************************************** -->
        <!-- apm-ds-content-c -->
        <!-- ***************************************************************************************************************************************************************** -->
        <td width="425px" valign="top">
            <table>
                <tr>
                    <td colspan="4" height="40px"></td>
                </tr>
            </table>
        </td>

    </tr>

</table>

<table>

    <tr>
        <!-- apm-ds-footer-separador -->
        <td colspan="5" height="1px" bgcolor="#aaaaaa"></td>
    </tr>

    <tr>
        <!-- apm-ds-footer-separador -->
        <td colspan="5" height="10px"></td>
    </tr>

    <tr>

        <!-- ***************************************************************************************************************************************************************** -->
        <!-- apm-ds-footer-a -->
        <!-- ***************************************************************************************************************************************************************** -->
        <td width="350px"></td>

        <!-- apm-ds-footer-separador -->
        <td width="25px"></td>

        <!-- ***************************************************************************************************************************************************************** -->
        <!-- apm-ds-footer-b -->
        <!-- ***************************************************************************************************************************************************************** -->
        <td width="925px" align="right">
            <img src="../framework/material-design-icons-apm/action/ic_copyright_black_18dp.png">
            <a class="without_href" style="font-family: 'Calibri Light', sans-serif; font-size: 10pt; font-weight: 300; color: #000000;" href="none"> 2016 by carballo-team. All rights reserved.</a>
        </td>

        <!-- apm-ds-footer-separador -->
        <td width="25px"></td>

        <!-- ***************************************************************************************************************************************************************** -->
        <!-- apm-ds-footer-c -->
        <!-- ***************************************************************************************************************************************************************** -->
        <td width="425px"></td>

    </tr>

</table>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../framework/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>

</body>

</html>



