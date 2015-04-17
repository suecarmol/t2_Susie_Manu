<?php
		include_once('./ppp/config/Config.php'); //comment this line after running the scripts
		//include_once('../config/Config.php'); //uncomment this line after running the scripts

		class DBAdmin
		{

		  public function executeQuery($sql)
		  {
		   $conexion = mysqli_connect(Config::getDBServer(), Config::getUserName(), Config::getPassword(), Config::getDBName());
		   if(!$conexion)
		   {
		     die('Error en la conexion: ' . mysqli_connect_error($conexion));
		   }

		  $result = mysqli_query($conexion,$sql);

		  mysqli_close($conexion);

		   return $result;

		  }

		}

		?>