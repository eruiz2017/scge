<?php
require_once dirname(dirname(__FILE__)).'/controller/resumenEvaluacionController.php';
require_once dirname(dirname(__FILE__)).'/controller/item_controller.php';
require_once dirname(dirname(__FILE__)).'/controller/ambito_controller.php';
?>
<?php
$sumartoria16= $datos[75]['ponderacion_respuesta']+$datos[76]['ponderacion_respuesta']+
       $datos[77]['ponderacion_respuesta']+$datos[78]['ponderacion_respuesta'];
 ?>
 <?php
 $total16=$sumartoria16/48;
  ?>

  <html>
      <head>
          <title>Informe</title>
          <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  	<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
      </head>

      <?php
          $dataPoints = array(
              array("y" => $datos[75]['ponderacion_respuesta'], "label" => $datos[75]['indicador_decripcion'].' '.$datos[75]['descripcionrespuesta']),
              array("y" => $datos[76]['ponderacion_respuesta'], "label" => $datos[76]['indicador_decripcion'].' '.$datos[76]['descripcionrespuesta']),
              array("y" => $datos[77]['ponderacion_respuesta'], "label" => $datos[77]['indicador_decripcion'].' '.$datos[77]['descripcionrespuesta']),
              array("y" => $datos[78]['ponderacion_respuesta'], "label" => $datos[78]['indicador_decripcion'].' '.$datos[78]['descripcionrespuesta']),
          );
      ?>

      <body>
          <div id="chartContainer" style="height: 100%; width: 100%;"></div>

          <script type="text/javascript">

              $(function () {
                  var chart = new CanvasJS.Chart("chartContainer", {
                      theme: "theme2",
                      animationEnabled: true,
                      title: {
                          text: "<?php echo $datos4[15]['NOMBREITEM'] ?> <?php echo round($total16*100),'%' ?>"
                      },
                      axisY: {
                          title: "Puntos",
                          titleFontColor: "black",
                          labelFontColor: "black",
                          titleFontSize: 20,
                          interval: 2
                      },
                      axisX: {
                          interval: 1,
                          labelFontSize: 15,
                          labelAngle: 0,
                          labelFontColor: "black"
                      },
                      data: [
                      {
                          type: "column",
                          indexLabel: "{y}",
                          indexLabelFontColor: "black",
                          dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                      }
                      ]
                  });
                  chart.render();
              });
          </script>
      </body>
  </html>
