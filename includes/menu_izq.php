
<p id="ruta"></p>
<p id="demo"></p>

<?php
/*  require("../util/Config.php");

	echo ' <ul>
	 <li id="ingreso_proyecto">Ingreso a la plataforma de autoevaluación</li>
		 <li id="ver_proyecto">Ver resumen de autoevaluación</li>
                  <li id="res_final">Informe final</li>

		<a href="'.$path.'/logout.php" ><li id="opcion4">Cerrar</li></a>

	      </ul>';

	*/


require("../util/Config.php");


echo ' <ul>
        <li><a class="active" href="../views/inicio.php">Home</a></li>
        <li id="ver_proyecto"><a href="#">Ver resumen de autoevaluación</a></li>
        <li id="res_final"><a href="#">Informe final</a></li>
        <li id="opcion4" style="float:right;"><a href="'.$path.'/logout.php">Cerrar</a></li>
        <li id="atras" style="float:right;"><a href="../views/principal.php">Atras</a></li>


  </ul>';








?>



<link href="../css2/bootstrap.min.css"  rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/bootstrap.min.js"    ></script>
<script type="text/javascript" src="../js/jquery/jquery-3.1.1.min.js"    ></script>


<script type="text/javascript">

$(function() {

$('#accordion1').on('shown.bs.collapse', function () {
$("#package1 i.indicator").removeClass("glyphicon-chevron-up").addClass("glyphicon-chevron-down");
});


$('#accordion2').on('shown.bs.collapse', function () {
    $("#package2 i.indicator").removeClass("glyphicon-chevron-up").addClass("glyphicon-chevron-down");
});


$('#accordion3').on('shown.bs.collapse', function () {
    $("#package3 i.indicator").removeClass("glyphicon-chevron-up").addClass("glyphicon-chevron-down");
});



$('#accordion4').on('shown.bs.collapse', function () {
    $("#package4 i.indicator").removeClass("glyphicon-chevron-up").addClass("glyphicon-chevron-down");
});



     });



     </script>

<?php

require_once dirname(dirname(__FILE__)).'/controller/ambito_controller.php';

$tabla1 ='';

//print_r($datos1);
foreach ($datos1 as $key => $value) {
 $tabla1 .= "   <tr>

                 <td>".$datos1[$key]['ID_AMBITO']."</td>
                 <td>".$datos1[$key]['NOMBREAMBITO']."</td>
                </td>
            </tr> ";


}


require_once dirname(dirname(__FILE__)).'/controller/item_controller.php';

?>

<div id="OrderPackages">
    <table id="tableSearchResults" class="table table-hover  table-striped table-condensed" >
        <thead>
            <tr>
            </tr>
        </thead>
        <tbody>

             <BR>
            <tr id="package1" class="accordion-toggle" data-toggle="collapse" data-parent="#OrderPackages" data-target=".packageDetails1">

              <th onclick="mostrar_item(1,'<?php echo $datos1[0]['NOMBREAMBITO'];?>')" ><?php echo $datos1[0]['NOMBREAMBITO'];?> </th>
                <th></th>
               <td><i class="indicator glyphicon glyphicon-chevron-up pull-right"></i>

                </td>
            </tr>
            <tr>
                <td colspan="3" class="hiddenRow">
                    <div class="accordion-body collapse packageDetails1" id="accordion1" >
                        <table>
                            <tr>

                            <div id="idAmbito1"> </div>


                            </tr>
                        </table>
                    </div>
                </td>

            </tr>

           <tr id="package2" class="accordion-toggle" data-toggle="collapse" data-parent="#OrderPackages" data-target=".packageDetails2">
                 <th onclick="mostrar_item(2,'<?php echo $datos1[1]['NOMBREAMBITO'];?>')" ><?php echo $datos1[1]['NOMBREAMBITO'];?>  </th>

                <th></th>

               <td><i class="indicator glyphicon glyphicon-chevron-up pull-right"></i>

                </td>
            </tr>
              <tr>
                <td colspan="3" class="hiddenRow">
                    <div class="accordion-body collapse packageDetails2" id="accordion2">
                        <table>
                            <tr>

                            <div id="idAmbito2"> </div>

                            </tr>
                        </table>
                    </div>
                </td>
            </tr>

               <tr id="package3" class="accordion-toggle" data-toggle="collapse" data-parent="#OrderPackages" data-target=".packageDetails3">
                <th  onclick="mostrar_item(3,'<?php echo $datos1[2]['NOMBREAMBITO'];?>')"><?php echo $datos1[2]['NOMBREAMBITO'];?></th>

                <th></th>
                 <td><i class="indicator glyphicon glyphicon-chevron-up pull-right"></i>
                 </td>
            </tr>

              <tr>
                <td colspan="3" class="hiddenRow">
                    <div class="accordion-body collapse packageDetails3" id="accordion3">
                        <table>
                            <tr>

                              <div id="idAmbito3"> </div>


                            </tr>
                        </table>
                    </div>
                </td>
            </tr>

            <tr id="package4" class="accordion-toggle" data-toggle="collapse" data-parent="#OrderPackages" data-target=".packageDetails4">
                <th onclick="mostrar_item(4,'<?php echo $datos1[3]['NOMBREAMBITO'];?>')" ><?php echo $datos1[3]['NOMBREAMBITO'];?></th>

                <th ></th>
                 <td><i class="indicator glyphicon glyphicon-chevron-up pull-right"></i>
                 </td>
            </tr>

              <tr>
                <td colspan="3" class="hiddenRow">
                    <div class="accordion-body collapse packageDetails4" id="accordion4">
                        <table>
                            <tr>
                                <div id="idAmbito4"> </div>


                            </tr>
                        </table>
                    </div>
                </td>
            </tr>






        </tbody>
    </table>
       <div id="idambito"> </div>


     </div>

</div>
