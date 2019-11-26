<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>PIZZERIA SELENITA</title>
			
</head>

<body>

	<?php if ($_POST['DNI']=='' || $_POST['DNI']==NULL || !isset($_POST['DNI'])): ?>

		<h3>Cal Introduir el DNI</h3>

	<?php elseif ($_POST['pizzaEncarregada']=='-Pizzes Disponibles-'): ?>

		<h3>Cal Introduir una pizza</h3>

	<?php else: ?>
				
		<?php 

			//Rebo les dades del formulari de veurePizzes
			$nomPizza = '';
			$nomPizza = htmlspecialchars($_POST['pizzaEncarregada']);

			$dniUser = '';
			$dniUser = htmlspecialchars($_POST['DNI']);

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

			$queryUser = "SELECT nom_client,cognoms FROM client WHERE dni='" . $dniUser . "';";
			$resUser = mysqli_query($con, $queryUser);

			if (!$resUser){	//si hi ha error
				
				die("No s'ha pogut realitzar la consulta");

			} else {
				
				$nomUser = mysqli_fetch_assoc($resUser);
				
				if ($nomUser != NULL) {

					echo("<h1>COMANDA DE PIZZA</h1>");
					
					echo ("<h3>Client: " . $nomUser['nom_client'] . " " .$nomUser['cognoms'] . "</h3>  <h3>Pizza: " . $nomPizza . "</h3>");
					
					echo("

					<table>
					<tr>
					<th scope='col'>Ingredient</th>
					<th scope='col'>Quantitat</th>
					</tr>");



					//realitzar la consulta
			
					$queryPizza = "SELECT nom_ingredient,quantitat FROM conte WHERE nom_pizza='" . $nomPizza . "';";
					$resPizza = mysqli_query($con, $queryPizza);
					if (!$resPizza){	//si hi ha error
						die("No s'ha pogut realitzar la consulta");
					} else {
						$pizza = mysqli_fetch_assoc($resPizza);
						while ($pizza!=NULL){
						echo (
							"<tr>
								<td>" . $pizza['nom_ingredient'] . "</td>
								<td>"  . $pizza['quantitat'] . " gr</td> 
							</tr>");
							$pizza = mysqli_fetch_assoc($resPizza);
						}
					}

					echo("</table>");
					
					$queryIngredient = "SELECT nom_ingredient FROM ingredient where nom_ingredient not in (select nom_ingredient from conte where nom_pizza='". $nomPizza ."');";
					$resIngredient = mysqli_query($con, $queryIngredient);
		
					if (!$resIngredient){	//si hi ha error

						die("No s'ha pogut realitzar la consulta");

					} else {

						echo("<form action='http://eimtdbd.uoc.edu/~gmasaguec/pra/novaComanda.php' method='POST'>
							<select name='ingredientExtra' selected ='selected'>
							<option>Selecciona si vols, un ingredient addicional gratuït per a la teva pizza</option>");
					
						$nomIngredient = mysqli_fetch_assoc($resIngredient);

						while ($nomIngredient!=NULL){
							echo ("<option value='" . $nomIngredient['nom_ingredient'] . "'>" . $nomIngredient['nom_ingredient'] . "</option>");
							$nomIngredient = mysqli_fetch_assoc($resIngredient);
						}
						echo("</select><br>");

						echo("<input type='hidden' name='dniClient' value='" . $dniUser . "'/>");

						echo("<input type='hidden' name='nomPizza' value='" . $nomPizza . "'/>");

						echo("<input type='submit' value='Realitzar Comanda'/><br>");

					}

				} else {

					echo ("<h3>Cal introduir el DNI d'un client registrat</h3>");

				}
				
				mysqli_free_result ($resUser);
				mysqli_free_result ($resPizza);
				mysqli_free_result ($resIngredient);
			}	
				
		?>


	
	<?php endif ?>

	<button><a href=index.html>Enrera</a></button>

</body>

</html>