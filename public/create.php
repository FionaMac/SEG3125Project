<?php

/**
 * Use an HTML form to create a new entry in the
 * foods table.
 *
 */


if (isset($_POST['submit'])) {
	require "../config.php";
	require "../common.php";

	try {
		$connection = new PDO($dsn, $username, $password, $options);

		$new_food = array(
      	"name" => $_POST['name'],
			"calories" => $_POST['calories'],
			"carbs"  => $_POST['carbs'],
			"fat"     => $_POST['fat'],
			"protein" => $_POST['protein'],
			"sodium"  => $_POST['sodium'],
      "sugar"  => $_POST['sugar']
		);

console.log($new_food);

		$sql = sprintf(
				"INSERT INTO %s (%s) values (%s)",
				"foods",
				implode(", ", array_keys($new_food)),
				":" . implode(", :", array_keys($new_food))
		);

		$statement = $connection->prepare($sql);
		$statement->execute($new_food);
	} catch(PDOException $error) {
		echo $sql . "<br>" . $error->getMessage();
	}

}
?>

<?php if (isset($_POST['submit']) && $statement) { ?>
	<blockquote><?php echo $_POST['name']; ?> successfully added.</blockquote>
<?php } ?>

<h2>Add a food</h2>

<form method="post">
	<label for="name">Food:</label>
	<input type="text" name="name" id="name">
	<label for="calories">Calories</label>
	<input type="text" name="calories" id="calories">
  <label for="carbs">Carbs</label>
	<input type="text" name="carbs" id="carbs">
  <label for="fat">Fat</label>
  <input type="text" name="fat" id="fat">
  <label for="protein">Protein</label>
  <input type="text" name="protein" id="protein">
  <label for="sodium">Sodium</label>
  <input type="text" name="sodium" id="sodium">
  <label for="sugar">Sugar</label>
  <input type="text" name="sugar" id="sugar">
	<input type="submit" name="submit" value="Submit">
</form>

<a href="/index.html">Back to home</a>
