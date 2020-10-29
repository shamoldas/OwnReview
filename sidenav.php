<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>OwnReview</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
<div class="container">
  <div class="row">
		<div class="col-md-3" >
		
				<h5>Categories</h5>
				<div class="sidenav">

					<div class="list-group">
			
			
						
						 <div class="dropdown">
						  <a class="list-group-item list-group-item-action"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							BookReview
						  </a>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							
							<a class="dropdown-item" href="index.php?page=literature">Literature</a>
							<a class="dropdown-item" href="index.php?page=poem">Poem</a>
							<a class="dropdown-item" href="index.php?page=shortstory">ShortStory</a>
							<a class="dropdown-item" href="index.php?page=novel">Novel</a>
							<a class="dropdown-item" href="index.php?page=bookothers">Others</a>
						  </div>
					   </div>
					   
						<div class="dropdown">
						  <a class="list-group-item list-group-item-action"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							MovieReview
						  </a>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							
							<a class="dropdown-item" href="index.php?page=bangla">Bangla</a>
							<a class="dropdown-item" href="index.php?page=indian">Indian</a>
							<a class="dropdown-item" href="index.php?page=american">American</a>
							<a class="dropdown-item" href="index.php?page=english">English</a>
							<a class="dropdown-item" href="index.php?page=corian">Corian</a>
							<a class="dropdown-item" href="index.php?page=jananess">Japanees</a>
							<a class="dropdown-item" href="index.php?page=movieothers">Others</a>
						  </div>
					   </div>
			   

					  <div class="dropdown">
						  <a class="list-group-item list-group-item-action"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Career
						  </a>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							
							<a class="dropdown-item" href="#">BCS</a>
							<a class="dropdown-item" href="#">BANK</a>
							<a class="dropdown-item" href="#">GOV.</a>
							<a class="dropdown-item" href="#">IT & SOFTWARE</a>
							<a class="dropdown-item" href="#">NOT GOV.</a>
							<a class="dropdown-item" href="#">TEACHER</a>
							<a class="dropdown-item" href="#">OTHERS</a>
						  </div>
					   </div>
					   
						
			   
						<div class="dropdown">
						  <a class="list-group-item list-group-item-action"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							FoodReview
						  </a>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							
							<a class="dropdown-item" href="index.php?page=foodreview">Hard</a>
							<a class="dropdown-item" href="index.php?page=drink">Drinks</a>
							<a class="dropdown-item" href="#">Coffee & Tea</a>
							<a class="dropdown-item" href="index.php?page=sweet">Sweet</a>
							<a class="dropdown-item" href="#">FastFood</a>
							<a class="dropdown-item" href="#">Others</a>
						  </div>
					   </div>
			  
					</div>
				</div>
			
		</div>
		
		<div class="col-md-9">
		
					<?php 
						@$page=  $_GET['page'];
					  if($page!="")
					  {
						if($page=="literature")
						{
							include('literature.php');
						
						}
						elseif($page=="poem")
						{
							include('poem.php');
						}
						
						elseif($page=="shortstory")
						{
							include('shortstory.php');
						}
												
						elseif($page=="novel")
						{
							include('novel.php');
						}

						elseif($page=="bookothers")
						{
							include('bookothers.php');
						
						}
						elseif($page=="bangla")
						{
							include('bangla.php');
						}
						
						elseif($page=="indian")
						{
							include('indian.php');
						}
												
						elseif($page=="american")
						{
							include('american.php');
						}


						elseif($page=="english")
						{
							include('english.php');
						}
						
						elseif($page=="corian")
						{
							include('corian.php');
						}
												
						elseif($page=="japaness")
						{
							include('japaness.php');
						}

						elseif($page=="movieothers")
						{
							include('movieothers.php');
						
						}
						elseif($page=="bangla")
						{
							include('bangla.php');
						}
						
						elseif($page=="drink")
						{
							include('drink.php');
						}
												
						elseif($page=="sweet")
						{
							include('sweet.php');
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