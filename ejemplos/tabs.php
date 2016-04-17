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
    <link href="../custom_styles.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:700italic,700,600italic,600,400italic,400,300italic,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>

</head>
<body> <!-- style="background-color:#e6e6e6" -->




<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3>Tabs</h3>
            <!-- tabs -->
            <div class="tabbable">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#one" data-toggle="tab">One</a></li>
                    <li><a href="#two" data-toggle="tab">Two</a></li>
                    <li><a href="#twee" data-toggle="tab">Twee</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="one">Lorem ipsum dolor sit amet, charetra varius quam sit amet vulputate.
                        Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero.</div>
                    <div class="tab-pane" id="two">Secondo sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
                        Aliquam in felis sit amet augue.</div>
                    <div class="tab-pane" id="twee">Thirdamuno, ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                        Quisque mauris augue, molestie tincidunt condimentum vitae.</div>
                </div>
            </div>
            <!-- /tabs -->

        </div>
        <div class="col-md-6"><h3>Tabs -below</h3>


            <!-- tabs bottom -->
            <div class="tabbable tabs-below">
                <div class="tab-content">
                    <div class="tab-pane active" id="one_">Lorem ipsum dolor sit amet, charetra varius quam sit amet vulputate.
                        Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero.</div>
                    <div class="tab-pane" id="two_">Secondo sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
                        Aliquam in felis sit amet augue.</div>
                    <div class="tab-pane" id="twee_">Thirdamuno, ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                        Quisque mauris augue, molestie tincidunt condimentum vitae. </div>
                </div>
                <ul class="nav nav-tabs">
                    <li><a href="#one_" data-toggle="tab">One</a></li>
                    <li><a href="#two_" data-toggle="tab">Two</a></li>
                    <li><a href="#twee_" data-toggle="tab">Twee</a></li>
                </ul>
            </div>
            <!-- /tabs -->


        </div>
    </div><!-- /row -->
    <div class="row">

        <div class="col-md-6"><h3>Tabs -left</h3>

            <!-- tabs left -->
            <div class="tabbable tabs-left">
                <ul class="nav nav-tabs">
                    <li><a href="#a" data-toggle="tab">One</a></li>
                    <li class="active"><a href="#b" data-toggle="tab">Two</a></li>
                    <li><a href="#c" data-toggle="tab">Twee</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="a">Lorem ipsum dolor sit amet, charetra varius quam sit amet vulputate.
                        Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero.</div>
                    <div class="tab-pane" id="b">Secondo sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
                        Aliquam in felis sit amet augue.</div>
                    <div class="tab-pane" id="c">Thirdamuno, ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                        Quisque mauris augue, molestie tincidunt condimentum vitae. </div>
                </div>
            </div>
            <!-- /tabs -->

        </div>

        <div class="col-md-6"><h3>Tabs -right</h3>

            <!-- tabs right -->
            <div class="tabbable tabs-right">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#1" data-toggle="tab">One</a></li>
                    <li><a href="#2" data-toggle="tab">Two</a></li>
                    <li><a href="#3" data-toggle="tab">Twee</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="1">Lorem ipsum dolor sit amet, charetra varius quam sit amet vulputate.
                        Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero.</div>
                    <div class="tab-pane" id="2">Secondo sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
                        Aliquam in felis sit amet augue.</div>
                    <div class="tab-pane" id="3">Thirdamuno, ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                        Quisque mauris augue, molestie tincidunt condimentum vitae. </div>
                </div>
            </div>
            <!-- /tabs -->

        </div>

    </div><!-- /row -->
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../framework/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
</body>
</html>


