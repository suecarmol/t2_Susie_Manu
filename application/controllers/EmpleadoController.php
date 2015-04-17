<?php
      include_once('../../config/DBAdmin_2.php');

        class EmpleadoController {
            function viewall() {
              $sql_tables = "SELECT * FROM empleado";
              $db = new DBAdmin_2();
              return $db->executeQuery($sql_tables);
            }
            
        function insert() {
        $sql = "INSERT INTO empleado";
      $sql .= "( id_emp ";
              $sql .= ", nombre_emp";
            $sql .= ", apellidoP_emp";
            $sql .= ", apellidoM_emp";
            $sql .= ", rfc_emp";
            $sql .= ", nss_emp";
            $sql .= ", sueldo_emp";
            $sql .= ", id_pue)";
            $var_0= $_POST['id_emp'];
            $sql .= " VALUES( '$var_0'";
              $var_1= $_POST['nombre_emp'];
             $sql .= ", '$var_1'";
            $var_2= $_POST['apellidoP_emp'];
             $sql .= ", '$var_2'";
            $var_3= $_POST['apellidoM_emp'];
             $sql .= ", '$var_3'";
            $var_4= $_POST['rfc_emp'];
             $sql .= ", '$var_4'";
            $var_5= $_POST['nss_emp'];
             $sql .= ", '$var_5'";
            $var_6= $_POST['sueldo_emp'];
             $sql .= ", '$var_6'";
            $var_7= $_POST['id_pue'];
            $sql .= ", '$var_7')";
            
              $db = new DBAdmin_2();
              return $db->executeQuery($sql);

        }
      }
      ?>