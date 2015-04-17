<?php
      include_once('../../config/DBAdmin_2.php');

        class PuestoController {
            function viewall() {
              $sql_tables = "SELECT * FROM puesto";
              $db = new DBAdmin_2();
              return $db->executeQuery($sql_tables);
            }
            
        function insert() {
        $sql = "INSERT INTO puesto";
      $sql .= "( id_pue ";
              $sql .= ", nombre_pue)";
            $var_0= $_POST['id_pue'];
            $sql .= " VALUES( '$var_0'";
              $var_1= $_POST['nombre_pue'];
            $sql .= ", '$var_1')";
            
              $db = new DBAdmin_2();
              return $db->executeQuery($sql);

        }
      }
      ?>