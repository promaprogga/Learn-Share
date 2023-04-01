 <?php

$user_name = "root";
$password = "";
$server_name = "localhost";
$dbname = "PustokKhana";


$conn = new mysqli($server_name,$user_name,$password,$dbname);

if($conn -> connect_error){
    die("conection faild".$conn-> connect_error);
}
else{
    // echo"connected";
}

?>

 