<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>PIZZERIA SELENITA</title>

</head>

<body>

	<h1>Pizzes</h1>
	<h3>Selecciona una pizza per veure els seus ingredients</h3>
	<!-- <form action="http://eimtdbd.uoc.edu/~gmasaguec/pra/veureIngredients.php" method="POST"> -->
		<table>
			<tr>
				<th scope="col">Selecionar</th>
				<th scope="col">Nom</th>
				<th scope="col">Preu</th>
			</tr>

			<?php
				//paràmetres de connexió
				$servidor = "localhost";
				$usuari = "myceterra";
				$pass = "cTt20IUD";
				$bd = "myceterra";
				//realització de la connexió
				$con = mysqli_connect ($servidor, $usuari, $pass, $bd);
				mysqli_set_charset($con,"utf8");
				if (!$con) {
					die("No s'ha connectat. ERROR:" . mysqli_connect_error() . "<br>");
				}
				//realitzar la consulta
				$query = "SELECT dataInici,title FROM cet_activitats;";
				$res = mysqli_query($con, $query);
				if (!$res){	//si hi ha error
					die("No s'ha pogut realitzar la consulta");
				} else {
					$fila = mysqli_fetch_assoc($res);
					while ($fila!=NULL){

						echo (
							"<tr>
								<td>" . $fila['dataInici'] . "</td>
								<td>"  . $fila['title'] . "</td> 
							</tr>");
						$fila = mysqli_fetch_assoc($res);
					}
				}
				
				mysqli_free_result ($res);
				mysqli_close ($con);
			?>

		</table>

		<!-- <input type="submit" value="Veure Ingredients"/> -->

<!-- 	</form> -->

<!-- 	<button><a href=index.html>Enrera</a></button> -->


</body>

</html>