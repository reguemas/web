<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>PIZZERIA SELENITA</title>

</head>

<body>

	<?php 
		//Rebo les dades del formulari de veurePizzaDemanada i les monto per a fer l'insert

		$nomPizza = '';
		if (isset($_POST['nomPizza'])) $nomPizza = htmlspecialchars($_POST['nomPizza']);

		$dniUser = '';
		if (isset($_POST['dniClient'])) $dniUser = htmlspecialchars($_POST['dniClient']);
		
		$ingredientExtra = '';
		if (isset($_POST['ingredientExtra'])) $ingredientExtra = htmlspecialchars($_POST['ingredientExtra']);
		
		if ($ingredientExtra=="Selecciona si vols, un ingredient addicional gratuït per a la teva pizza"){

			$ingredientExtra = 'NULL';
		
		} else {
			
			$ingredientExtra =   "\"" . $ingredientExtra . "\"";
		}
				
		date_default_timezone_set("Europe/Madrid");
		$dataHoraComanda = date('Y\-m\-t H\:i\:s');

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
		
		//realitzar la consulta de l'usuari
		$query = "INSERT INTO comanda (`dataHora`, `dni_client` , `nom_ingredient`, `nom_pizza`) VALUES ('" . $dataHoraComanda . "','" . $dniUser . "', " . $ingredientExtra . ",'" . $nomPizza . "');";
		$res = mysqli_query($con, $query);
		if (!$res){	//si hi ha error
			
			die("No s'ha pogut realitzar la insercio de dades");

		} else {
			
			echo("<h1>REGISTRE DE COMANDA</h1>");

			//realitzar la consulta

			$queryNumComanda = "SELECT num_comanda FROM comanda WHERE dataHora = '" . $dataHoraComanda . "' AND dni_client = '" . $dniUser ."';";
			$resComanda = mysqli_query($con, $queryNumComanda);
			if (!$resComanda){	//si hi ha error
				die("No s'ha pogut realitzar la consulta");
			} else {
				
				$numComanda = mysqli_fetch_assoc($resComanda);
				echo ("<h3>S'ha registrat la comanda amb el número ". $numComanda['num_comanda'] ."</h3>");

			}

			mysqli_free_result ($resComanda);

		}

	?>
	<button><a href=index.html>Enrera</a></button>

</body>

</html>