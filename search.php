<?php
session_start();
require 'config.php';
if(isset($_SESSION['sentence'])){
  $id = $_SESSION['id'];
  $sentence = $_SESSION['sentence'];
  $python = "PATH HERE";
  $pyscript = "nltk_sample.py";
  $sentence = $_SESSION['sentence'];
  $cmd = "$python $pyscript $sentence";
  exec("$cmd", $output);
  $op = (float)$output[0];
  $query = "INSERT INTO `record`(`user`, `text`, `result`) VALUES ($id,'$sentence',$op)";
  mysqli_query($con,$query);
}
else{
  header('Location: Frontend.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Depression Detection</title>
    <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="effectsfile.css">

</head>
<body>
	<header>
		<?php
		include 'headertop.html';
		?>
    </header>
    <nav>
    	<?php
         include 'NavigationPanel.php';
    	?>
    	<ul class="nav nav-tabs">
    		<li class="active"><a href="homepage.php">Home</a></li>
    		<span><ul class="nav navbar-nav navbar-right">
           <li><a href="Registerpage.php"><span><img src="sign-in.png" id="login"></span>Login</a></li>
          </ul></span>

    </nav>
<section>
    <div class="media">
  <div class="media-left">
    <img src="happy.png" style="height: 400px; width: 400px; margin-top:20px; margin-left:10px; margin-bottom:20px;">
  </div>

  <div class="media-body" style="background-color:oldlace;margin-left:20px; padding-left: 50px;">
  <div class="media-heading" style="font-size: 20px;
  error_reporting(0);font-family:sans-serif;"><h3><u>Result</u></h3>
  <?php
  if((float)$output[0] >= 0.5){
    echo '
    <p>Hey Friend! <br> Your sentiment analysis of social media posts suggests that you are happy and out of the danger of being in depression.<br>Thank you for taking this test.</p>
    ';
  }
  else{
    echo '
      Negative Result
    ';
  }
  ?>
  </div>
</div>
  <section class="bg-primary text-white mb-0" id="about">
    <div class="container2">
      <h2 class="text-center text-uppercase text-black">About</h2>
          <p class="lead">When you’re going through a tough time it’s normal to feel down for a while, emotions like sadness and grief help make us human. But if you’re feeling sad or miserable most of the time over a long period of time, you might have depression.<br>We provide this platform to help figure out whether you’re showing any of the warning signs of depression. This won’t give you a diagnosis but it will surely help you decide the next step.
          </p>
        </div>
    </div>
  </section>
  <section id="previous-data">
<table border=1>
<tr><td>Sentence</td><td>Result</td></tr>
<?php
$query = "SELECT * FROM record WHERE user=$id";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result)){
  echo'
    <tr><td>
    '.$row['text'].'
    </td><td>
    '.$row['result'].'
    </td>
    </tr>
  ';
}
?>
  <tr><td></td></tr>
</table>
</section>

    </section>
   <footer>
    	<div class="row">
        <div class="col-lg-4" style="background-color:midnightblue; padding-left:40px; color: white;"><h4>Hello User!
        </h4></div>
        <div class="col-lg-4" style="background-color:lightgreen; padding-left:40px; color: black;"><h4>Stay Happy</h4></div>
        <div class="col-lg-4" style="background-color:midnightblue; padding-left:40px; color: white;"><h4>Stay Healthy</h4></div>
       </div>
      </p>
    </footer>
    </body>
</html>