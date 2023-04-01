
<?php include 'includes/connection.php';?>
<?php include 'includes/adminheader.php';?>

<?php 
if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {

//header("location: index.php");
}
?>



       <?php include 'includes/adminnav.php';?>
        <div id="page-wrapper" style="background-color: #333;">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header" style="color:#fff;">
                            ADD CATEGORY
                        </h1>

<?php
if (isset($_POST['upload'])) {
require "../gump.class.php";
$gump = new GUMP();
$_POST = $gump->sanitize($_POST); 

$gump->validation_rules(array(
    'title'    => 'required|max_len,60|min_len,3',
    'description'   => 'required|min_len,3',
));
$gump->filter_rules(array(
    'title' => 'trim|sanitize_string',
    'description' => 'trim|sanitize_string',
    ));
$validated_data = $gump->run($_POST);

if($validated_data === false) {
    ?>
    <center><font color="red" > <?php echo $gump->get_readable_errors(true); ?> </font></center>
    <?php 
    $file_title = $_POST['title'];
      $file_description = $_POST['description'];
}
else {
    $file_title = $validated_data['title'];
      $file_description = $validated_data['description'];

       $query = "INSERT INTO q_category(q_category_name,q_category_des) VALUES ('$file_title' , '$file_description')";

       $query2 = "INSERT INTO category(cat_name) VALUES ('$file_title')";
        $result = mysqli_query($conn , $query2) or die(mysqli_error($conn));
            $result = mysqli_query($conn , $query) or die(mysqli_error($conn));
            if (mysqli_affected_rows($conn) > 0) {


       echo "<script> alert('Category added successfully');
                            </script>";
    
}
}
}
?>






     <form role="form" action="" method="POST" enctype="multipart/form-data">


	<div class="form-group">
		<label for="post_title" style="color:#fff;">Category Name</label>
		<input type="text" name="title" class="form-control" placeholder="Eg: Php Tutorial File"  value = "<?php if(isset($_POST['upload'])) {
            echo $file_title; } ?>" required="">
	</div>

	<div class="form-group">
		<label for="post_tags" style="color:#fff;">Category Description</label>
		<textarea rows="5" name="description" class="form-control" placeholder="Eg: Php Tutorial File includes basic php programming ...."  required="" ">
      <?php if(isset($_POST['upload'])) {
            echo $file_description;  } ?>      
        </textarea>
	</div>


<button type="submit" name="upload" class="btn btn-primary" value="Upload Note">Add Category </button>
<br>
<br>
</form>
</div>
</div>
</div>
</div>
</div>


<script src="js/jquery.js"></script>

    
<script src="js/bootstrap.min.js"></script>

</body>

</html>



