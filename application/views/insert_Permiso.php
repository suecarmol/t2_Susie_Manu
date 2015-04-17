<!html>
        <head>
          <title> Insertar en permiso</title>
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
          <h1> Insertar en la tabla Permiso</h1>
        </div><div id="body_container" class="body_container">
          <form action="../controllers/PermisoController.php" method="post">
          Id_per: <input type="text" name= "id_per"> <br>
          Nombre_per: <input type="text" name= "nombre_per"> <br>
          <input name="add" type="submit" id="add" value="Agregar Permiso">
              </form>
            </div>
          </body>
        </html>