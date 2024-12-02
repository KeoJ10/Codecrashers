<html>
	<head>
		<link rel="stylesheet" href="css/stylesheet.css">
	</head>
	<body>
		<h1>Hoogste kerktorens in Nederland</h1>
		<form method="post">
			<select name="sorting" id="sorting">
				<option value="hoogte">hoogte</option>
				<option value="naam">naam</option>
				<option value="plaats">plaats</option>
				<option value="voltooid">voltooid</option>
			</select>
			<input type="checkbox" id="checkbox" name="checkbox" value="checkbox">
			<label for="checkbox"> volg orde omdraaien? </label>
			<input type="submit" value="sorteren" name="submit" id="submit">
		</form>
	</body>
</html>

<?php
	$hoogste_kerktorens = [
		['naam' => 'Domtoren', 'plaats' => 'Utrecht', 'hoogte' => 112.32, 'voltooid' => 1382],
		['naam' => 'Grote Kerk', 'plaats' => 'Breda', 'hoogte' => 97.3, 'voltooid' => 1547],
		['naam' => 'Martinitoren', 'plaats' => 'Groningen', 'hoogte' => 96.8, 'voltooid' => 1548],
		['naam' => 'Nieuwe Kerk', 'plaats' => 'Delft', 'hoogte' => 108.75, 'voltooid' => 1496],
		['naam' => 'Onze Lieve Vrouwetoren', 'plaats' => 'Amersfoort', 'hoogte' => 98.33, 'voltooid' => 1470],
		['naam' => 'Sint-Vituskerk', 'plaats' => 'Hilversum', 'hoogte' => 98.3, 'voltooid' => 1892]
	];

	usort($hoogste_kerktorens, function($a, $b) {
		return $b['hoogte'] <=> $a['hoogte'];
	});

	if (isset($_POST['sorting'])) {
		usort($hoogste_kerktorens, function($a, $b) {
			return $a[$_POST['sorting']] <=> $b[$_POST['sorting']];
		});
	}

	if (isset($_POST['checkbox'])) {
		usort($hoogste_kerktorens, function($a, $b) {
			return $b[$_POST['sorting']] <=> $a[$_POST['sorting']];
		});
	}


	
	function maketTable(array $tableArray): string{
		$outPut =  '<div class="table"><table>
		<th>Naam</th>
		<th>Plaats</th>
		<th>Hoogte</th>
		<th>Voltooid</th>
		</tr>
		';
			foreach($tableArray as $towers){
				$outPut .= '<tr><td>' . $towers['naam'] . '</td><td>'. $towers['plaats'] .'</td><td>'. $towers['hoogte'] .'</td><td>'. $towers['voltooid'] . '</td></tr>';
			}
			$outPut .= '</table></div>';
			
			return $outPut;
		}
		
	echo maketTable($hoogste_kerktorens);

	

?>

