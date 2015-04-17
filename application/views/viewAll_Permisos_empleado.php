<?php include_once('./../controllers/Permisos_empleadoController.php') ?>
      <!html>
        <head>
          <title> Ver los permisos_empleados</title>
          <style type="text/css">
            body{
              font-family: sans-serif, Helvetica, Arial;
              margin: 0;
              padding: 0;
            }
            .title_container{
              width: 100%;
              height: 100px;
              background-color: #AA3F39;
            }
            .title_container h1{
              font-size: 40px;
              color: #FFFFFF;
              padding: 25px 0px 0px 50px;
            }
            .body_container{

            }
          </style>
        </head>
        <body>
        <div id="title_container" class="title_container">
          <h1>Permisos_empleados</h1>
        </div><div id="body_container" class="body_container">
          <table>
          <tr>
          <th>id_per</th>
          <th>id_emp</th>
          </tr>
        <?php 
            $controller = new Permisos_empleadoController();
            $selectAll = $controller->viewall();
            print_r($selectAll);
            
            $rows = array();

            if(mysqli_num_rows($selectAll))
            {
              while($select_row = mysqli_fetch_assoc($selectAll)){
                $rows [] = $select_row;
                echo "<tr>";

                foreach ($rows as $value) {
                  echo "<td>". $value ."</td>";
                }
                echo "</tr>";
              }
            }
          ?>
        </table>
            </div>
          </body>
        </html>