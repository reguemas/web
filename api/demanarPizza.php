<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>PIZZERIA SELENITA</title>
	
</head>

<body>

	<h1>COMPRA DE PIZZA</h1>
	<form action="http://eimtdbd.uoc.edu/~gmasaguec/pra/veurePizzaDemanada.php" method="POST">

		DNI:<input type="text" name="DNI" size="9" maxlength="9"/>
		
		<?php
			//paràmetres de connexió
			
			$servidor = "localhost";
			$usuari = "gmasaguec";
			$pass = "9yIqO7fj";
			$bd = "gmasaguec";

			//realització de la connexió
			
			$con = mysqli_connect ($servidor, $usuari, $pass, $bd);
			mysqli_set_charset($con,"utf8");
			if (!$con) {
				die("No s'ha connectat. ERROR:" . mysqli_connect_error() . "<br>");
			}
			
			//realitzar la consulta
			
			$query = "SELECT nom_pizza FROM pizza;";
			$res = mysqli_query($con, $query);

			if (!$res){	//si hi ha error
				die("No s'ha pogut realitzar la consulta");
			} else {
				echo ("Selecciona una Pizza:
					<select name='pizzaEncarregada'>
					<option selected='selected'>-Pizzes Disponibles-</option>");
				
				$nomPizza = mysqli_fetch_assoc($res);

				while ($nomPizza!=NULL){
					echo ("<option value='". $nomPizza['nom_pizza'] ."'>" . $nomPizza['nom_pizza'] . "</option>");
					$nomPizza = mysqli_fetch_assoc($res);
				}
				echo("</select>");
			}

			mysqli_free_result ($res);
			mysqli_close ($con);
		?>

		<input type="submit" value="Demanar Pizza"/>

	</form>


	<button><a href=index.html>Enrera</a></button>

</body>

</html>