<?php
			$server = 'localhost';
			$user = 'root';
			$pass = '';
			$db = 'introductie';
			
			$dbh = new mysqli($server, $user, $pass, $db);

			$result = $dbh->query("SELECT * FROM users WHERE active = 1 ORDER BY name");

			$users = [];

			while ($row = $result->fetch_assoc()){
				$users[] = $row;
			}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>php table</title>
		<style>
			body {
	font-family: Calibri, sans-serif;
}
table, td {
	border: 1px solid black;
	border-collapse: collapse;
}
td {
	padding: 5px 10px;
}
tr:nth-child(odd) > td {
	background-color: rgb(205, 226, 161);
}
tr:nth-child(even) > td {
	background-color: rgb(183, 201, 215);
}
		</style>
	</head>
	<body>
		<table>
			<thead>
				<tr>
				<th>Naam</th>
				<th>Email</th>
			</tr>
			</thead>
			<tbody>
			<?php
				
			foreach($users as $gebruikers){
			echo'<tr class="item_row">'.
				'<td>' . $gebruikers['name'] . '</td>'.
				'<td>' . $gebruikers['email'].'</td>'
			.'</tr>';
			}
			?>
			</tbody>
		</table>
	</body>
</html>