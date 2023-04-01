
<?php include('includes/adminheader.php');  ?>
<?php include 'includes/adminnav.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="simulation.css" />
</head>

<body>
	<br />
	<p class="header">Binary Search</p>

	<h1 flex: 0 0 120px;> Binary Search is a searching algorithm for finding an element's position in a sorted array.

		In this approach, the element is always searched in the middle of a portion of an array.</h1>

	<div id="array"></div>
	<br /><br />

	<div style="text-align: center">
		<label for="fname">
			Number to be Searched:
		</label>
		<input type="text" id="fname" name="fname" />
		<br /><br />
		<button id="btn" onclick="BinarySearch()">Search</button>
		<br />
		<br />
		<div id="text"></div>
	</div>

	<script src="../js/simscript.js"></script>
</body>

</html>