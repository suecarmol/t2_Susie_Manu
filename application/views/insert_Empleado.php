<!html>
        <head>
          <title> Insertar en empleado</title>
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
          <h1> Insertar en la tabla Empleado</h1>
        </div><div id="body_container" class="body_container">
          <form action="../controllers/EmpleadoController.php" method="post">
          Id_emp: <input type="text" name= "id_emp"> <br>
          Nombre_emp: <input type="text" name= "nombre_emp"> <br>
          ApellidoP_emp: <input type="text" name= "apellidoP_emp"> <br>
          ApellidoM_emp: <input type="text" name= "apellidoM_emp"> <br>
          Rfc_emp: <input type="text" name= "rfc_emp"> <br>
          Nss_emp: <input type="text" name= "nss_emp"> <br>
          Sueldo_emp: <input type="text" name= "sueldo_emp"> <br>
          Id_pue: <input type="text" name= "id_pue"> <br>
          <input name="add" type="submit" id="add" value="Agregar Empleado">
              </form>
            </div>
          </body>
        </html>