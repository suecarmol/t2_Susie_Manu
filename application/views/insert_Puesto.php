<!html>
        <head>
          <title> Insertar en puesto</title>
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
          <h1> Insertar en la tabla Puesto</h1>
        </div><div id="body_container" class="body_container">
          <form action="../controllers/PuestoController.php" method="post">
          Id_pue: <input type="text" name= "id_pue"> <br>
          Nombre_pue: <input type="text" name= "nombre_pue"> <br>
          <input name="add" type="submit" id="add" value="Agregar Puesto">
              </form>
            </div>
          </body>
        </html>