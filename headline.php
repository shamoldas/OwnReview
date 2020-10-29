



                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">My Content Details</h2>
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
                            
						
                                while($row = mysqli_fetch_array($result))
								{
									echo"<h4>Title:".$row['title']."</h4>";
									echo"Category:".$row['category']."<br>";
									
								
                                }
                                echo "</tbody>";                            
                            echo "</table>";
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
      
