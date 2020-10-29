<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap 4 Navbar with Logo Image</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/indexsidebar.css">
</head>
<body>
<div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a href="#" class="navbar-brand">
            <img src="images/logo.svg" height="28" alt="CoolBrand">
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="#\index.php" class="nav-item nav-link active">Home</a>
                <a href="#" class="nav-item nav-link">Profile</a>
                <a href="#" class="nav-item nav-link">Messages</a>
				 <a href="bookreview.php" class="nav-item nav-link">BookReview</a>
                <a href="#" class="nav-item nav-link disabled" tabindex="-1">Reports</a>
            </div>
			
			<div class="dropdown"> 
			
			<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="#">Some action</a></li>
              <li><a href="#">Some other action</a></li>
              <li class="divider"></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Hover me for more options</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="#">Second level</a></li>
                  <li class="dropdown-submenu">
                    <a href="#">Even More..</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">3rd level</a></li>
                    	<li><a href="#">3rd level</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Second level</a></li>
                  <li><a href="#">Second level</a></li>
                </ul>
              </li>
            </ul>
			
			</div>
			
		<div class="dropdown"> 
          
            <button type="button" class="btn btn-success dropdown-toggle" 
                        data-toggle="dropdown"> 
                Select Subjects 
            </button> 
              
            <div class="dropdown-menu"> 
                <strong class="dropdown-header">CS Subjects</strong> 
                <a class="dropdown-item" href="#">Data Structure</a> 
                <a class="dropdown-item" href="#">Algorithm</a> 
                <a class="dropdown-item" href="#">Operating System</a> 
                <a class="dropdown-item" href="#">Computer Networks</a> 
                  
				  
				<a  class="dropdown-header"><strong>Science Subjects</strong>          
              <div class="dropdown-menu"> 
                
                <a class="dropdown-item" href="#">Physics</a> 
                <a class="dropdown-item" href="#">Mathematics</a> 
                <a class="dropdown-item" href="#">Chemistry</a> 
              </div>
			  </a>
			
                <div class="dropdown-divider"></div> 
                <strong class="dropdown-header">Other Subjects</strong> 
                <a class="dropdown-item" href="#">Physics</a> 
                <a class="dropdown-item" href="#">Mathematics</a> 
                <a class="dropdown-item" href="#">Chemistry</a> 
            </div> 
        </div>
		
            <div class="navbar-nav ml-auto">
                <a href="login/login.php" class="nav-item nav-link">Login</a>
            </div>
        </div>
    </nav>
</div>

	
	
	      <nav id="sidebar">
				<div class="p-4 pt-5">
					<h5>Categories</h5>
	        <ul class="list-unstyled components mb-5">
	          <li>
	            <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">MovieReview</a>
	            <ul class="collapse list-unstyled" id="pageSubmenu1">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Bangla</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Indien</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> English</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Corian</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Rasian</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Other</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Dubbed</a></li>
	            </ul>
	          </li>
	          <li>
	            <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">BookReview</a>
	            <ul class="collapse list-unstyled" id="pageSubmenu2">
                <li><a href="career.php?page=literatire"><span class=""></span> Literature</a></li>
                <li><a href="literature.php"><span class="fa fa-chevron-right mr-2"></span> Poem</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> ShortStory</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Religion</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Others</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Soccer</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Sports</a></li>
	            </ul>
	          </li>
	          <li>
	            <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Career</a>
	            <ul class="collapse list-unstyled" id="pageSubmenu3">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> BCS</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> BANK</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> IT& SOFTWARE</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> TEACHER</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> OTHERS</a></li>
	            </ul>
	          </li>
	          <li>
	            <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Clothes</a>
	            <ul class="collapse list-unstyled" id="pageSubmenu4">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Jeans</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> T-shirt</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Jacket</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Shoes</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Sweater</a></li>
	            </ul>
	          </li>
	        </ul>
					<div class="mb-5">
						<h5>Tag Cloud</h5>
            <div class="tagcloud">
              <a href="#" class="tag-cloud-link">Literature</a>
              <a href="#" class="tag-cloud-link">MovieReview</a>
              <a href="#" class="tag-cloud-link">Career</a>
              <a href="#" class="tag-cloud-link">sweet</a>
              <a href="#" class="tag-cloud-link">tasty</a>
              <a href="#" class="tag-cloud-link">delicious</a>
              <a href="#" class="tag-cloud-link">desserts</a>
              <a href="#" class="tag-cloud-link">drinks</a>
            </div>
					</div>
					<div class="mb-5">
	        	<h5>Newsletter</h5>
						<form action="#" class="subscribe-form">
	            <div class="form-group d-flex">
	            	<div class="icon"><span class="icon-paper-plane"></span></div>
	              <input type="text" class="form-control" placeholder="Enter Email Address">
	            </div>
	          </form>
					</div>
	      </div>
		  
		  

		  
		  
		  
		  
		  
		  
    	</nav>
		
		
		
		
<div class="container">
  <div class="row">
		<div class="col-m-4" id="sticky-sidebar">
		
			<h5>Categories</h5>
	        <ul class="list-unstyled components mb-5">
	          <li>
	            <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">MovieReview</a>
	            <ul class="collapse list-unstyled" id="pageSubmenu1">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Bangla</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Indien</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> English</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Corian</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Rasian</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Other</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Dubbed</a></li>
	            </ul>
	          </li>
	          <li>
	            <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">BookReview</a>
	            <ul class="collapse list-unstyled" id="pageSubmenu2">
                <li><a href="career.php?page=literatire"><span class=""></span> Literature</a></li>
                <li><a href="literature.php"><span class="fa fa-chevron-right mr-2"></span> Poem</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> ShortStory</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Religion</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Others</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Soccer</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Sports</a></li>
	            </ul>
	          </li>
	          <li>
	            <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Career</a>
	            <ul class="collapse list-unstyled" id="pageSubmenu3">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> BCS</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> BANK</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> IT& SOFTWARE</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> TEACHER</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> OTHERS</a></li>
	            </ul>
	          </li>
	          <li>
	            <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Clothes</a>
	            <ul class="collapse list-unstyled" id="pageSubmenu4">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Jeans</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> T-shirt</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Jacket</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Shoes</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Sweater</a></li>
	            </ul>
	          </li>
	        </ul>
		  
		</div>
		
		<div class="col-m-8" id="main">
		
			  <!-- container-->
					  <?php 
						@$page=  $_GET['page'];
					  if($page!="")
					  {
						if($page=="literature")
						{
							include('literature.php');
						
						}
						elseif($page=="moviereview")
						{
							include('moviereview.php');
						}
					  }
					  
					 
						
					?>
		  
		</div>
  </div>
</div>
		
		
			<div class="col-md-8">>
					  <!-- container-->
					  <?php 
						@$page=  $_GET['page'];
					  if($page!="")
					  {
						if($page=="literature")
						{
							include('literature.php');
						
						}
						elseif($page=="moviereview")
						{
							include('moviereview.php');
						}
					  }
					  
					 
						
					?>
						
				</div>



        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Employees Details</h2>
                        <a href="welcome.php?page=blogpost" class="btn btn-success pull-right">Add Blog Post</a>
                    </div>
					
					      <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM content where category='career' ";
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
            </div>        
        </div>



	






</body>
</html>