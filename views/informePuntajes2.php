<?php
require_once dirname(dirname(__FILE__)).'/controller/resumenEvaluacionController.php';
require_once dirname(dirname(__FILE__)).'/controller/item_controller.php';
require_once dirname(dirname(__FILE__)).'/controller/ambito_controller.php';
?>

  <html>
      <head>
          <title>Informe</title>
          <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  	<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
      </head>

      <?php
          $dataPoints = array(
              array("y" => $datos[6]['ponderacion_respuesta'], "label" => $datos[6]['descripcionrespuesta']),
              array("y" => $datos[7]['ponderacion_respuesta'], "label" => $datos[7]['descripcionrespuesta']),
              array("y" => $datos[8]['ponderacion_respuesta'], "label" => $datos[8]['descripcionrespuesta']),
              array("y" => $datos[9]['ponderacion_respuesta'], "label" => $datos[9]['descripcionrespuesta']),
              array("y" => $datos[10]['ponderacion_respuesta'], "label" => $datos[10]['descripcionrespuesta']),
              array("y" => $datos[11]['ponderacion_respuesta'], "label" => $datos[11]['descripcionrespuesta']),
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
                          text: "<?php echo $datos4[1]['NOMBREITEM'] ?>"
                      },
                      axisY: {
                          title: "Puntos",
                          titleFontColor: "black",
                          labelFontColor: "black",
                          titleFontSize: 20
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
