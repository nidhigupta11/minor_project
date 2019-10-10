<?php
  session_start();
  if(isset($_POST['submit'])){
    $_SESSION['sentence'] = $_POST['sentence'];
    echo $_SESSION['sentence'];
    if(isset($_SESSION['id'])){
      header('Location: Resultpage.php');
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="effectsfile.css">
</head>
<body>
  <div style="margin-bottom: 70px;">
    <?php
      include 'NavigationPanel.php';
    ?>
  </div>
  <?php
    include('config.php');
   if(isset($_POST['Login']))
     {  
       
      $name=$_POST['fname'];
      
      $password=$_POST['password'];
      
      $sel ="select * from minor where email='$name' and password='$password'";
      $query=mysqli_query($con,$sel);
      if($fetch=mysqli_fetch_assoc($query))
      {
        $name=$fetch['fname'];
        $id=$fetch['id'];
        $_SESSION['login_user']=$name;
        $_SESSION['id']=$id;
        if(isset($_SESSION['sentence'])){
          header('Location: Resultpage.php');
        }
        else{
          header('Location: Frontend.php');
        }
        
      }
      else
      {
         echo "Login failed.";
      }
    }
   ?>
  <div class="row" id="form1">
    <div class="col-lg-6">
      <div class="sigin">
        <form action="" method="post">
    <p><h1>Already a User?</h1></p>
    <p><h2><u>Sign in</u></h2></p>
    <p>Username:<input type="text"  class="form-control" style="width: 200px; margin-left:450px" name="fname" value="" ></p>
    <p>Password:<input type="Password"  class="form-control" style="width: 200px;margin-left:450px" name="password" value=""></p>
    <p><button type="submit" class="btn btn-default" name="Login" value="Login">Login</button></p>
</form>
</div>
</div>
</div>
<?php
error_reporting(0);
include 'config.php';
$fnameERR=$lnameERR=$emailERR=$phnoERR=$websiteERR=$pswdERR="";
$fname=$lname=$email=$phno=$password=$duplicate="";
if (isset($_POST['Register']))
   {  $fname=$_POST['fname'];
      $lname=$_POST['lname'];
      $email=$_POST['email'];
      $phno=$_POST['phno'];
      $password=$_POST['password'];
      $gender=$_POST['gender'];
      $action=$_POST['action'];
      $logintime=$_POST['logintime'];
     
     
     if(empty($_POST['fname']))
     {
      $fnameERR="Name is reqd.";
     }
     else
     {
       $fname= trim($_POST['fname']);
       if(!preg_match("/^[a-zA-Z]*$/",$fname))
        {
          echo $fname;
         $fnameERR="Only letters and whitespaces allowed.";
       }
     }
     if(empty($_POST['lname']))
     {

       $lnameERR="Name is reqd.";
     }
     else
     {
       $lname=trim($_POST['lname']);
       if (!preg_match("/^[a-zA-Z]*$/",$lname))
        {
         $lnameERR="Only letters and whitespaces allowed.";
       }
     }
      if(empty($_POST['email']))
     {
       $emailERR="email is reqd.";
     }
     else
     {
      $email=trim($_POST['email']);
      if (!preg_match("/[a-z A-Z 0-9 !@#$]/",$email))
       {
        $emailERR="Invalid email.";
       }
  
     }
     if(empty($_POST['phno']))
      {
        $phnoERR="Name is reqd.";
      }
      else
      {
        $phno=($_POST['phno']);
        if (!preg_match("/[0-9]/",$phno))
         {
          $phnoERR="Invalid number.";
        }
      }
      if(empty($_POST['password']))
     {
   
       $pswdERR="Password is reqd.";
     }
     else
     {
       $password=($_POST['password']);
       $as = preg_match("/^[a-zA-Z0-9]+[!@#$%^&*()_+-]/",$password);
       if(!$as)
        {
         $pswdERR="Only alphanumeric and special characters are allowed.";
       }
     }
 
 if($fnameERR=="" AND $lnameERR=="" AND $emailERR=="" AND $phnoERR=="" AND $pswdERR=="" )
 {
      $select="select * from userdata where fname='$fname'";
      $duplicate=mysqli_query($con,$select);
      if (mysqli_num_rows($duplicate)>0)
      {
      
      echo "User already exists with same details.";
      exit;
      header("Location:register.php");
      exit;
      }
    $in="INSERT INTO userdata(fname,lname,email,phno,password,gender,action)
     VALUES ('$fname','$lname','$email','$phno','$password','$gender','0')";
     
    $query=mysqli_query($con,$in);

    if($query)
    {
      header('project1.php');
      echo "Successfully registered.";
    }
    else
        echo "Query failed.";
    }
  }
?>
<div class="row" id="form2">
   <div class="col-lg-6">
    <div class="reg">
      <p><h1>New User?</h1></p>
       <p><h2><u>Regiter Now</u></h2></p>
          <form action="" method="post">
            <p>First Name:<input type="text" class="form-control" style="margin-left="450px" width: 200px;" name="fname" value="<?php echo $fname;?>">
            <span class="error"><?php echo $fnameERR; ?></span></p>
             <p>Last Name:<input type="text" class="form-control" style="margin-left="450px" width: 200px;" name="lname" value="<?php echo $lname;?>">
            <span class="error"><?php echo $lnameERR; ?></span></p>
              <p>  E-mail:<input type="text" class="form-control" style="margin-left="450px" width: 200px;" name="email" value="<?php echo $email;?>">
            <span class="error"><?php echo $emailERR; ?></span></p><br>
              <p>Password:<input type="password" class="form-control" style="margin-left="450px" width: 200px;" name="password" value="<?php echo $password;?>">
            <span class="error"><?php echo $pswdERR; ?></span></p><br>
              <p>Phone no.:<input type="text" class="form-control" style="margin-left="450px" width: 200px;" name="phno" value="<?php echo $phno; ?>">
            <span class="error"><?php echo $phnoERR; ?></span></p><br>
              <p>Gender:
            <input type="radio" name="gender" value="M">M
            <input type="radio" name="gender" value="F">F</p><br>
            <button type="submit" class="btn btn-submit" name="Register">Submit</button><br>
          </form>
        </div>
      </div>
    </div>
</body>
</html>
