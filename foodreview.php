<?php
require 'functions.php';

session_start();

/*
 * Just for testing: set the id of the logged-in admin. It should be set in the admin login page.
 * @todo Remove the line.
 */
$_SESSION['adminId'] = 173;

// If no admin id is set, redirect to the admin login page.
if (!isset($_SESSION['adminId']) || empty($_SESSION['adminId'])) {
    redirect('login.php');
}

// Operations performed upon form submission.
if (isset($_POST['submit'])) {
    $clientId = $_POST['submit'];

    // Set the client id, in order to be used in the client's profile overview page.
    $_SESSION['clientId'] = $clientId;

    // Redirect to the client's profile overview page.
    redirect('../client/profile_overview.php');
}

require '../includes/connection.php';

$sql = 'SELECT 
            id,
            CONCAT(lastName, ", ", firstName) AS name,
            email 
        FROM Client 
        ORDER BY lastName ASC';

$result = $connection->query($sql);
$clients = $result->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
        <meta charset="UTF-8" />
        <!-- The above 3 meta tags must come first in the head -->

        <title>Demo - Clients list</title>

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet" />

        <script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>


	<body>

















                <div class="col-md-9">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">My Content Details</h2>
                        <a href="welcome.php?page=blogpost" class="btn btn-success pull-right">Add Blog Post</a>
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM content";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0)
						{
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>Title</th>";
                                        echo "<th>Categor</th>";
                                        echo "<th>SubCat</th>";
                                        echo "<th>Message</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result))
								{
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['title'] . "</td>";
                                        echo "<td>" . $row['category'] . "</td>";
                                        echo "<td>" . $row['subcat'] . "</td>";
                                        echo "<td>" . $row['message'] . "</td>";
										echo"
										 <td>
                                          
                                            <button type="submit" id="viewProfileButton" name="submit" value="<?php echo $id; ?>" class="btn btn-default btn-sm btn-view-profile">
                                                <i class="fa fa-user" aria-hidden="true"></i> View profile
                                            </button>
                                        </td>";
										
                                        echo "<td>";
                                            echo "<a href='read.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                            echo "<a href='update.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='delete.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
				
				
				
	</body>
</html>
      
