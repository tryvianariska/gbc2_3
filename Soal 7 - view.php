<?php
	require('conn.php');
 
	$result = $mysqli->query("select person_id, p.name as name, GROUP_CONCAT(h.name ORDER BY h.name ASC SEPARATOR ', ') as hobbies
from persons p
inner join hobbies h on p.id = h.person_id
group by p.id, p.name");
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap V3 template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>View Table</h1>
	<table class="table table-striped table-bordered table-hover">
		<thead>
		  <tr class="active">
			<th>person_id</th>
			<th>name</th>
			<th>person_hobbies</th>
		  </tr>
		</thead>
		<tbody>
			<?php
				 while ($mem = mysqli_fetch_assoc($result)):
					echo '<tr>';
					   echo '<td>'.$mem['person_id'].'</td>';
					   echo '<td>'.$mem['name'].'</td>';
					   echo '<td>'.$mem['hobbies'].'</td>';
					echo '</tr>';
				 endwhile;
				 /* free result set */
				 $result->close();
			?>
		</tbody>
	</table>
  </body>
</html>