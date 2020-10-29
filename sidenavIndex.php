
	
		
				<h5>Categories</h5>
				<div class="sidenav">

					<div class="list-group">
			
			
						
						 <div class="dropdown">
						  <a class="list-group-item list-group-item-action"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							BookReview
						  </a>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							
							<a class="dropdown-item" href="index.php?page=literature">Literature</a>
							<a class="dropdown-item" href="#">Poem</a>
							<a class="dropdown-item" href="#">Story</a>
							<a class="dropdown-item" href="#">Novel</a>
							<a class="dropdown-item" href="#">Others</a>
						  </div>
					   </div>
					   
						<div class="dropdown">
						  <a class="list-group-item list-group-item-action"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							MovieReview
						  </a>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							
							<a class="dropdown-item" href="index.php?page=moviereview">Bangla</a>
							<a class="dropdown-item" href="#">Indian</a>
							<a class="dropdown-item" href="#">American</a>
							<a class="dropdown-item" href="#">English</a>
							<a class="dropdown-item" href="#">Corian</a>
							<a class="dropdown-item" href="#">Japanees</a>
							<a class="dropdown-item" href="#">Others</a>
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
					   
						<a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
			  
						  <div class="dropdown">
							  <a class="list-group-item list-group-item-action"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Dropdown button
							  </a>
							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>
							  </div>
						   </div>
			   
						<div class="dropdown">
						  <a class="list-group-item list-group-item-action"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							FoodReview
						  </a>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							
							<a class="dropdown-item" href="#">Hard</a>
							<a class="dropdown-item" href="#">Drinks</a>
							<a class="dropdown-item" href="#">Coffee & Tea</a>
							<a class="dropdown-item" href="#">Sweet</a>
							<a class="dropdown-item" href="#">FastFood</a>
							<a class="dropdown-item" href="#">Others</a>
						  </div>
					   </div>
			  
					</div>
				</div>
			
	

		
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
		
		



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

