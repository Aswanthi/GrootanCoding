<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body>
<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $user=$_POST['user'];
    $first=$_POST['first'];
    $last=$_POST['last'];
    $age=$_POST['age'];
    $dob=$_POST['dob'];
    $password=$_POST['password'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $sql="insert into users(user,first,last,age,dob,password,address,phone) values('{$user}','{$first}','{$last}','{$age}','{$dob}','{$password}','{$address}','{$phone}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Hurray! Successfully Registered!!!');
                               window.location='student.php';
                     </script>";               
    }
  }
?>

<?php
  include 'navbar.php';
?>

        <h2 class="text-center pt-4">STUDENT REGISTRATION</h2>
        <br>

  <div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <img class="img-fluid" src="img/pic.png" style="border: none; border-radius: 50%;">
        </div>
        <div class="screen-body-item">
          <form class="app-form" method="post">
            <div class="app-form-group">
              <input class="app-form-control" placeholder="User Name" type="text" name="user" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="First Name" type="text" name="first" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="Last Name" type="text" name="last" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="Age" type="number" name="age" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="Date of Birth" type="text" name="dob" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="Password" type="password" name="password" required>
            </div>
	    <div class="app-form-group">
              <input class="app-form-control" placeholder="Address" type="text" name="address" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="Phone" type="number" name="phone" required>
            </div>
            <br>
            <div class="app-form-group button">
              <input class="app-form-button" type="submit" value="CREATE" name="submit"></input>
              <input class="app-form-button" type="reset" value="RESET" name="reset"></input>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>