<?php 

include_once('connection.php'); 

function test_input($data) { 
	
	$data = trim($data); 
	$data = stripslashes($data); 
	$data = htmlspecialchars($data); 
	return $data; 
} 

if ($_SERVER["REQUEST_METHOD"]== "POST") { 
	
	$username = test_input($_POST["username"]); 
	$password = test_input($_POST["password"]); 
	$stmt = $conn->prepare("SELECT * FROM admin"); 
	$stmt->execute(); 
	$admins = $stmt->fetchAll(); 
	
	foreach($admins as $admin) { 
		
		if(($admin['username'] == $username) && 
			($admin['password'] == $password)) { 
				header("Location: adminpage.php"); 
		} 
		else { 
			echo "<script language='javascript'>"; 
			echo "alert('WRONG INFORMATION')"; 
			echo "</script>"; 
			die(); 
		} 
	} 
} 

?> 
