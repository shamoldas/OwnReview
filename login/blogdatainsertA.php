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
$topic= mysqli_real_escape_string($link, $_REQUEST['topic']);
$message = mysqli_real_escape_string($link, $_REQUEST['message']);
#$file_name = mysqli_real_escape_string($link, $_SESSION['username']);
//$username = $_SESSION["username"];

/*
$target_dir = "uploads/";
$file_name = $target_dir . basename($_FILES["file_name"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$check = getimagesize($_FILES["file_name"]["tmp_name"]);
  if($check !== false) 
  {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } 
  else 
  {
    echo "File is not an image.";
    $uploadOk = 0;
  }
  
  if ($_FILES["file_name"]["size"] > 500000) 
  {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
  }
  
  // Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["file_name"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["file_name"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
*/
$sql = "INSERT INTO content (title,category,subcat,topic, message) VALUES ('$title','$category','$subcat','$topic', '$message')";
#$sql = "INSERT INTO content (title,category,subcat,topic, message,file_name) VALUES ('$title','$category','$subcat','$topic', '$message',$file_name')";
#$sql = "INSERT INTO content (title,category,subcat, message,file_name) VALUES ('$title', '$author','$category','$subcat', '$message',$file_name)";
if(mysqli_query($link, $sql)){
						#echo "Records added successfully.";
						include('welcome.php');
					} 
	else
		{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}
 
// Close connection
mysqli_close($link);
?>


<link rel="stylesheet" href="alert.css">
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