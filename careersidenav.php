<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>FoodOwnReview</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
<div class="container">
  <div class="row">
		<div class="col-md-3" >
		
				<h5>Categories</h5>
				<div class="sidenav">

					<div class="list-group">
			
					   
						<a href="index.php?page=foodreview" class="list-group-item list-group-item-action">BCS</a>
						<a href="moviereviewSide.php?page=drink" class="list-group-item list-group-item-action">BANK</a>
						<a href="moviereviewSide.php?page=foodreview" class="list-group-item list-group-item-action">GOVT.</a>
						<a href="moviereviewSide.php?page=sweet"  class="list-group-item list-group-item-action">IT & SOFTWARE</a>
						<a href="#" class="list-group-item list-group-item-action">NON GOVT.</a>
						<a href="moviereviewSide.php?page=foodreview" class="list-group-item list-group-item-action">TEACHER</a>
						<a href="moviereviewSide.php?page=sweet"  class="list-group-item list-group-item-action">NON CADER</a>
						<a href="#" class="list-group-item list-group-item-action">NON GOVT.</a>
						<a href="#" class="list-group-item list-group-item-action">Others</a>
			  


				
			  
					</div>
				</div>
			
		</div>
		
		<div class="col-md-9">
		
					<?php 
						@$page=  $_GET['page'];
					  if($page!="")
					  {
						if($page=="sweet")
						{
							include('sweet.php');
						
						}
						elseif($page=="drink")
						{
							include('drink.php');
						}
						
						elseif($page=="foodreview")
						{
							include('foodreview.php');
						}
												
						elseif($page=="foodreview")
						{
							include('drinkreview.php');
						}
						
					  }
					  
					 
						
					?>
		
		
		</div>
		
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>