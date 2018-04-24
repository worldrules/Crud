<?php
/**
 * Created by PhpStorm.
 * User: dev05
 * Date: 24/04/2018
 * Time: 11:16
 */

include "db.php";

 $results = mysqli_query($db, "SELECT * FROM banco"); ?>

<link rel="stylesheet" type="text/css" href="css/style.css">
<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Address</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>

	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['nome']; ?></td>
			<td><?php echo $row['estado']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['valor']; ?></td>

			<td>
				<a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="db.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php }







	?>
</table>

<form>