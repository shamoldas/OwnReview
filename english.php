
                <div class="col-md-12">
                   
                    <?php
					
					
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM content where subcat='english' ";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0)
						{
                            
						
                                while($row = mysqli_fetch_array($result))
								{
									echo"<h4>Content No:".$row['id']."</h4>";
									echo"<h4>Title:".$row['title']."</h4>";
									
									echo"Category:".$row['category']."<br>";
									echo"SubCategory:".$row['subcat']."<br>";
									echo"<b>Review:</b>".$row['message']."<br>";

								
									
									echo"<br>";
									  

									


											
								
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