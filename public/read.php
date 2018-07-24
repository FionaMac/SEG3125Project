<?php

/**
 * Function to query foods based on
 * the name.
 *
 */

if (isset($_POST['submit'])) {
	try {
		require "../config.php";
		require "../common.php";

		$connection = new PDO($dsn, $username, $password, $options);

		$sql = "SELECT *
						FROM foods
						WHERE name = :name";

		$name = $_POST['name'];

		$statement = $connection->prepare($sql);
		$statement->bindParam(':name', $name, PDO::PARAM_STR);
		$statement->execute();

		$result = $statement->fetchAll();
	} catch(PDOException $error) {
		echo $sql . "<br>" . $error->getMessage();
	}
}
?>

<?php
if (isset($_POST['submit'])) {
	if ($result && $statement->rowCount() > 0) { ?>
		<h2>Results</h2>

		<table>
			<thead>
				<tr>
					<th></th>
					<th>Calories</th>
					<th>Carbs</th>
					<th>Fat</th>
					<th>Protein</th>
					<th>Sodium</th>
					<th>Sugar</th>
				</tr>
			</thead>
			<tbody>
	<?php foreach ($result as $row) { ?>
			<tr>
				<td><?php echo escape($row["name"]); ?></td>
				<td><?php echo escape($row["calories"]); ?></td>
				<td><?php echo escape($row["carbs"]); ?></td>
				<td><?php echo escape($row["fat"]); ?></td>
				<td><?php echo escape($row["protein"]); ?></td>
				<td><?php echo escape($row["sodium"]); ?> </td>
        <td><?php echo escape($row["sugar"]); ?> </td>
			</tr>
		<?php } ?>
			</tbody>
	</table>
	<?php } else { ?>
		<blockquote>No results found for <?php echo escape($_POST['name']); ?>.</blockquote>
	<?php }
} ?>

<h2>Search for a food</h2>

<form method="post">
	<label for="name">Name</label>
	<input type="text" id="name" name="name">
	<input type="submit" name="submit" value="View Results">
</form>

<a href="/index.html">Back to home</a>
