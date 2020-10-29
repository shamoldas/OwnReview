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
			
					   
						<a href="bookreviewSide.php?page=mystery" class="list-group-item list-group-item-action">Mystery</a>
						<a href="bookreviewSide.php?page=novel" class="list-group-item list-group-item-action">Novel</a>
						<a href="bookreviewSide.php?page=poem" class="list-group-item list-group-item-action">Poem</a>
						<a href="bookreviewSide.php?page=shortstory"  class="list-group-item list-group-item-action">ShortStory</a>
						<a href="bookreviewSide.php?page=literature" class="list-group-item list-group-item-action">Literature</a>
						<a href="bookreviewSide.php?page=bookothers" class="list-group-item list-group-item-action">Others</a>
			  


				
			  
					</div>
				</div>
			
		</div>
		
		<div class="col-md-9">
		
					<?php 
						@$page=  $_GET['page'];
					  if($page!="")
					  {
						if($page=="mystery")
						{
							include('mystery.php');
						
						}
						elseif($page=="novel")
						{
							include('novel.php');
						}
						
						elseif($page=="poem")
						{
							include('poem.php');
						}
												
						elseif($page=="shortstory")
						{
							include('shortstory.php');
						}
						elseif($page=="literature")
						{
							include('literature.php');
						}
						elseif($page=="bookothers")
						{
							include('bookothers.php');
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