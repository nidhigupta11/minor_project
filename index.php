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
<body style=" padding-bottom: 29px;">
	<div style="margin-bottom: 85px;">
    	<?php
         include 'NavigationPanel.php';
    	?>
  </div>
    <section class="headtext">
    <div class="container">
      <img class="img-fluid mb-5 d-block mx-auto" src="user.png" alt="" id="img1">
      <h2 id="welcome">Welcome to Sentiment Analysis Portal</h2>

      <h1 class="text-uppercase mb-0" style="text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;">YOUR MENTAL HEALTH MATTERS</h1>
      <hr class="star-light">
      <h3 class="font-weight-light mb-0">Do you feel depressed, anxious, worried all the time, or suicidal? </h3>
      <br><h2 class="font-weight-light mb-0">Take this test to find out!</h2>
      <!-- <p>Enter any text from your social media to analyze the sentiments.<br></p> -->
      <form action="Registerpage.php" method="post">
        <div class="form-group">
          <label for="comment" style="margin: 10px;">Enter any text from your social media to analyze the sentiments:</label>
          <textarea class="form-control" rows="5" id="comment" style="margin: 10px; font-size: 20px;" name="sentence"></textarea>
          <button type="submit" name="submit" class="btn btn-primary btn-lg" style="margin: 10px;">Analyze</button>
        </div>
      </form>
    <!-- <div class="usertext">
      <form action="Registerpage.php" method="post">
       Search: <input type="text" name="sentence">
	   <p><button type="submit" name="submit" class="btn btn-default" style="margin-left: 10px; margin-bottom: 10px; background-color: black; color:white;">Analyze</button></p> */\
	    </form>
    </div> -->
  </div>

    <section class="container2 bg-primary text-white mb-0" style="background-color: #595964;">
      <div id="about">
        <h2 style="text-decoration: underline; font-size: 35px; margin-left: 20%;">ABOUT US</h2>
        <p>When you’re going through a tough time it’s normal to feel down for a while, emotions like sadness and grief help make us human. But if you’re feeling sad or miserable most of the time over a long period of time, you might have depression.</p>
        <p>We provide this platform to help figure out whether you’re showing any of the warning signs of depression. This won’t give you a diagnosis but it will surely help you decide the next step.
        </p>
      </div>
      <div>
        <img src="social SA.jpg" style="width: 400px; height: 250px; margin-left: 50%; margin-top: -25%;">
      </div>

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
