<?php

require_once '../core/config.php';

require_once '../core/db_connect.php';

 ?>
<div class="container">
	<table border="1">
		<tr>
			<th>#</th>
			<th>Naam</th>
		</tr>

		<?php

		require_once '../core/db_connect.php';

		$sql = "SELECT * FROM `student`";
		$result = mysqli_query($dbc, $sql);

		while ($row = mysqli_fetch_array($result)) {

		 ?>

		<tr>
			<td><?php echo $row["student_id"]; ?></td>
			<td><?php echo $row["student_name"]; ?></td>
		</tr>

	<?php } ?>

	</table>
</div>
