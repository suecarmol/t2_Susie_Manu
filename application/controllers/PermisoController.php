<?php
      include_once('../../config/DBAdmin_2.php');

        class PermisoController {
            function viewall() {
              $sql_tables = "SELECT * FROM permiso";
              $db = new DBAdmin_2();
              return $db->executeQuery($sql_tables);
            }
            
        function insert() {
        $sql = "INSERT INTO permiso";
      $sql .= "( id_per ";
              $sql .= ", nombre_per)";
            $var_0= $_POST['id_per'];
            $sql .= " VALUES( '$var_0'";
              $var_1= $_POST['nombre_per'];
            $sql .= ", '$var_1')";
            
              $db = new DBAdmin_2();
              return $db->executeQuery($sql);

        }
      }
      ?>