<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "own");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$title = mysqli_real_escape_string($link, $_REQUEST['title']);
#$file_name = $_SESSION["username"];
$category= mysqli_real_escape_string($link, $_REQUEST['category']);
$subcat= mysqli_real_escape_string($link, $_REQUEST['subcat']);
$message = mysqli_real_escape_string($link, $_REQUEST['message']);
#$file_name = mysqli_real_escape_string($link, $_SESSION['username']);
//$username = $_SESSION["username"];
 
// Attempt insert query execution
#$sql = "INSERT INTO content (title,category,subcat, message) VALUES ('$title','$category','$subcat', '$message')";
$sql = "INSERT INTO content (title,category,subcat, message) VALUES ('$title','$category','$subcat', '$message')";
#$sql = "INSERT INTO content (title,category,subcat, message,file_name) VALUES ('$title', '$author','$category','$subcat', '$message',$file_name)";
if(mysqli_query($link, $sql)){
    #echo "Records added successfully.";
	include('welcome.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>



<link rel="stylesheet" href="css/alert.css">
<div class="alert success">
  <span class="closebtn">&times;</span>  
  <strong>Success!</strong> Records added successfully or positive action.
</div>

<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
</script>