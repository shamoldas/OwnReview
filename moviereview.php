
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


                <div class="col-md-12">
                   
                    <?php
					
					
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM content where category='career' ";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0)
						{
                            
						
                                while($row = mysqli_fetch_array($result))
								{
									echo"<h4>Title:".$row['title']."</h4>";
									echo"<h4>Content No:".$row['id']."</h4>";
									echo"Category:".$row['category']."<br>";
									echo"<b>Review:</b>".$row['message']."<br>";
								

									$link_address = 'show.php';
									echo "<a id='view_profile_btn' href='".$link_address."'>Link</a>";
									
									
									echo "<a href='moviereview.php?page=".$row['id']."'>" . $row['message'] . "</a>Shamol ";
									echo "<a href='moviereview.php?page=".$row['id']."'>Shamol</a>";
									
									
									echo"<a id='view_profile_btn' >View</a>";
									
									if (isset($_POST['view_profile_btn']))
									  {
										  echo"ShamolDas";
										  $_SESSION['id'] = $row['id'];
										  $_SESSION['title'] = $row['title'];

										  redirect_user('show.php');
										  
									  }

									  

									


											
								
								}      
                          
                            // Free result set
                            mysqli_free_result($result);
                        } 
						else
						{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
						
                    }
					else
					{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
				
				
					<?php 
					
						@$page=  $_GET['page'];
					  if($page!="")
					  {
						if($page=="show")
						{
							include('show.php');
						
						}
						elseif($page=="show")
						{
							include('show.php');
						}
					  }
					  
					 
						
					?>
				
				

