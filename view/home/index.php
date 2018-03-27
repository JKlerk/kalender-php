<div class="container">
	<table border="1">
		<tr>
			<th>#</th>
			<th>Naam</th>
			<th>Dag</th>
			<th>Maand</th>
			<th>Jaar</th>
			<th></th>
		</tr>
			<?php 
				foreach ($birthdays as $birthday) {
					echo "<tr>";
					echo "<td>" . $birthday['id'] . "</td>";
					echo "<td><a href='edit/". $birthday['id'] ."'>" . $birthday['person'] . "</a></td>";
					echo "<td>" . $birthday['day'] . "</td>";
					echo "<td>" . $birthday['month'] . "</td>";
					echo "<td>" . $birthday['year'] . "</td>";
					echo "<td><a class='remove' href='delete/". $birthday['id'] ."'>X</a></td>";
					echo "</tr>";
				}
			?>
			</tr>
	</table>

</div>

<style>
	.remove {
		color: red;
		font-weight: bold;
	}
</style>
