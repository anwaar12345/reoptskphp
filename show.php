<?php
include("db.php");
$q = mysqli_query($conn,"select * from tbluser");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>

<div class="span7">   
<div class="widget stacked widget-table action-table">
    				
				<div class="widget-header">
				
					<h3>Registered Users</h3>
				</div> <!-- /widget-header -->
				
				<div class="widget-content">
					
					<table class="table table-striped table-bordered">
						<thead>
                        
							<tr>
								<th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Gender</th>
                                <th>City</th>
                                <th>Country</th>
                                <th style="width:250px;">Actions</th>
								<th class="td-actions"></th>
							</tr>
						</thead>
						<tbody>
                                 
                        <?php
                            while($row=mysqli_fetch_array($q)){
                              
                            
                            ?>  
					<tr> 
                            <td><?php  echo "$row[1]"; ?></td>
                            <td><?php  echo "$row[2]"; ?></td>
                            <td><?php  echo "$row[3]"; ?></td>
                            <td><?php  echo "$row[4]"; ?></td>
                            <td><?php  echo "$row[5]"; ?></td>
                            <td><?php  echo "$row[6]"; ?></td>
                           <td><a href="update.php?id=<?php echo $row[0];?>" class="btn btn-primary">Update</a>&nbsp;<a href="delete.php?id=<?php echo $row[0]; ?>" class="btn btn-danger">Delete</a></td>
                           </tr>
     
                            <?php } ?>
							</tbody>
						</table>
					
                        <a href="signup.html" class="btn btn-info">Back</a>
				</div> <!-- /widget-content -->
			
			</div> <!-- /widget -->
            </div>
</body>
</html>