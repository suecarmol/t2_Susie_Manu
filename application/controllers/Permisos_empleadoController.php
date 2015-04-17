<?php
      include_once('../../config/DBAdmin_2.php');

        class Permisos_empleadoController {
            function viewall() {
              $sql_tables = "SELECT * FROM permisos_empleado";
              $db = new DBAdmin_2();
              return $db->executeQuery($sql_tables);
            }
            
        function insert() {
        $sql = "INSERT INTO permisos_empleado";
      $sql .= "( id_per ";
              $sql .= ", id_emp)";
            $var_0= $_POST['id_per'];
            $sql .= " VALUES( '$var_0'";
              $var_1= $_POST['id_emp'];
            $sql .= ", '$var_1')";
            
              $db = new DBAdmin_2();
              return $db->executeQuery($sql);

        }
      }
      ?>