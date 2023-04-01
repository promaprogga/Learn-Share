<?php include 'includes/connection.php'; ?>
<?php include('includes/adminheader.php');  ?>
<?php include 'includes/adminnav.php'; ?>
<?php
include "class/users.php";
$cat=new users;
$category=$cat->cat_shows();
//print_r($category);
?>



<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<br>

<div class="container">
	<br>
	<br>
	<br>
  <h2 style="color:#fff; text-align:center">Add Quiz Question</h2>
  <form method="post" action="add_quiz.php" >
					<div class="form-group">
					  <label for="text" style="color:#fff;">Question</label>
					  <input type="text" class="form-control" name="qus"  placeholder="Enter question">
					</div>

					<div class="form-group">
					  <label for="text"style="color:#fff;">Option 1 will be</label>
					  <input type="text" class="form-control"  name="op1"  placeholder="Enter option-1">
					</div>
					<div class="form-group">
					  <label for="text"style="color:#fff;">Option 2 will be</label>
					  <input type="text" class="form-control" name="op2"  placeholder="Enter option-2">
					</div>
					
					<div class="form-group">
					  <label for="text"style="color:#fff;">Option 3 will be</label>
					  <input type="text" class="form-control"  name="op3"  placeholder="Enter option-3">
					</div>
					
					<div class="form-group">
					  <label for="text"style="color:#fff;">Option 4 will be</label>
					  <input type="text" class="form-control"  name="op4" id="email" placeholder="Enter option-4">
					</div>
					<div class="form-group">
					  <label for="text"style="color:#fff;">Answer of the Question</label>
					  <input type="text" class="form-control" name="ans" id="email" placeholder="Enter answer">
					</div>
						<div class="form-group">
                        <label for="text"style="color:#fff;">Choose Category</label>
						   <select class="form-control" id="sel1" name="cat">
						   
								
								<?php
								foreach($category as $c)
								{
									echo "<option value=".$c['id'].">".$c['cat_name']."</option>";
								}
								
								?>								
						  </select>
						</div>
					<button type="submit" class="btn btn-default">Submit</button><br>
				  </form>
				  <br>
				  <br>
				  
</div>

</body> 
</html>



