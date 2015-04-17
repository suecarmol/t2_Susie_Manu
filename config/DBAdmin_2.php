<?php

		include_once('Config.php');

		class DBAdmin_2
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