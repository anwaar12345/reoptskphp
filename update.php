<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="http://use.fontawesome.com/releases/v5.0.8/css/all.css">

</head>
<body>
<?php
include("db.php");
$gid = $_GET['id'];
$q = mysqli_query($conn,"SELECT * FROM `tbluser` where id = '$gid'");
while($row=mysqli_fetch_array($q)){
$id = $row[0];
$fname = $row[1];
$lstn = $row[2];
$email = $row[3];
$gender = $row[4];
$city = $row[5];
$country = $row[6];
$password = $row[7];
?>
    
<div class="container">
    <hr>
    
    <div class="row justify-content-center">
    <div class="col-md-6">
    <div class="card">
    <header class="card-header">
        <a href="signin.php" class="float-right btn btn-outline-primary mt-1">Log in</a>
        <h4 class="card-title mt-2">Update</h4>
    </header>
    <article class="card-body">
    <form method="POST" action="">
        <div class="form-row">
            <div class="col form-group">
                <label>First name </label>   
                  <input type="text" class="form-control" name="fname" value="<?php echo $fname ;?>">
            </div> <!-- form-group end.// -->
            <div class="col form-group">
                <label>Last name</label>
                  <input type="text" class="form-control" name="lstname" value="<?php echo $lstn ;?>">
            </div> <!-- form-group end.// -->
        </div> <!-- form-row end.// -->
        <div class="form-group">
            <label>Email address</label>
            <input type="email" class="form-control" placeholder="" name="email" value="<?php echo $email ;?>">
            <small class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div> <!-- form-group end.// -->
        <div class="form-group">
                <label class="form-check form-check-inline">

              <input class="form-check-input" type="radio" name="gender" value="male" <?php if($gender == "male") echo "checked";?>>
              <span class="form-check-label"> Male </span>
            </label>
            <label class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" value="female" <?php if($gender == "female") echo "checked";?>>
              <span class="form-check-label"> Female</span>
            </label>
        </div> <!-- form-group end.// -->
        <div class="form-row">
            <div class="form-group col-md-6">
              <label>City</label>
              <input type="text" class="form-control" name="city"  value="<?php echo $city; ?>">
            </div> <!-- form-group end.// -->
            <div class="form-group col-md-6">
              <label>Country</label>
              <select id="inputState" class="form-control" name="country">
                  <option value="Pakistan" <?php if($country == "Pakistan") echo "selected";?>>Pakistan</option>
                  <option value="Russia" <?php if($country == "Russia") echo "selected";?>>Russia</option>
                  <option value="USA" <?php if($country == "USA") echo "selected";?> >United States</option>
                  <option value="Uzbekistan" <?php if($country == "Uzbekistan") echo "selected";?>>Uzbekistan</option>
                  <option value="Turkey" <?php if($country == "Turkey") echo "selected";?>>Turkey</option>
              </select>
            </div> <!-- form-group end.// -->
        </div> <!-- form-row.// -->
        <div class="form-group">
            <label>Create password</label>
            <input class="form-control" type="password" name="password" value="<?php echo $password; ?>">
        </div> <!-- form-group end.// -->  
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" name="btnu"> Update  </button>
        </div> <!-- form-group// -->      
        
   
    </form>
    <?php
    }
    if(isset($_POST['btnu'])){
    // echo $fname;
    // echo $gender;
        $u = mysqli_query($conn,"UPDATE `tbluser` SET `first_name`='$_POST[fname]',`last_name`='$_POST[lstname]',`email`='$_POST[email]',`gender`='$_POST[gender]',`city`='$_POST[city]',`country`='$_POST[country]',`password`='$_POST[password]' WHERE id = $gid "); 
        if($u){
            header("location:show.php");
        }else{
            echo "Failed";
        }
        }

    ?>
    </article> <!-- card-body end .// -->

    
</div> <!-- card.// -->
    </div> <!-- col.//-->
    
    </div> <!-- row.//-->
    
    
    </div> 
    <!--container end.//-->
    
    
</body>
</html>






