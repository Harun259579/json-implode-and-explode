<?php
$filename="data.json";

$data = file_get_contents($filename);

$user = json_decode($data); //json data dcript php bujar jonno



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		show json data Employeee Information
	</title>
</head>
<body>
	<table border="1" style="border-collapse: collapse;">
		<caption>Employess Information</caption>
		<tr>
			<th>Name</th>
			<th>Occuption</th>
			<th>City</th>
		</tr>
		<?php
		foreach($user as $user)
		{

		?>
		<tr>
			<td> <?= $user->name ?> </td> <!-- //inline php -->
			<td> <?= $user->Occupation ?> </td>
			<td> <?= $user->City ?> </td>
		</tr>
		<?php
		
	      }

		?>
	</table>

</body>
</html>