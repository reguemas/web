<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>PIZZERIA SELENITA</title>


</head>

<body>
	<?php if (isset($_POST['seleccio'])): ?>

		<?php 
			//Rebo les dades del formulari de veurePizzes
			$nom_pizza='';
			$nom_pizza=htmlspecialchars($_POST['seleccio']);
		?>

		<h3>Ingredients de la pizza <?php echo ($nom_pizza); ?></h3>
				
		<table>
			<tr>
				<th scope="col">Ingredient</th>
				<th scope="col">Quantitat</th>
			</tr>
			<?php
				//header("Content-Type: text/html;charset=utf-8");
	
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
				$query = "SELECT c.nom_ingredient,c.quantitat,i.unitat_mesura FROM conte c join ingredient i on c.nom_ingredient=i.nom_ingredient WHERE nom_pizza='" . $nom_pizza . "';";
				$res = mysqli_query($con, $query);
				if (!$res){	//si hi ha error
					die("No s'ha pogut realitzar la consulta");
				} else {
					$fila = mysqli_fetch_assoc($res);
					while ($fila!=NULL){
						echo (
							"<tr>
								<td>" . $fila['nom_ingredient'] . "</td>
								<td>"  . $fila['quantitat'] . " gr</td> 
							</tr>");
						$fila = mysqli_fetch_assoc($res);
					}
				}
				mysqli_free_result ($res);
			?>
		</table>

	<?php else: ?>
	
		<h3>Cal seleccionar una pizza per veure els seus ingredients</h3>

	<?php endif ?>

		<button><a href=veurePizzes.php>Enrera</a></button>

</body>

</html>