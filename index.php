<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Quiz</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">

<style>
	

.footer
{
    background-color: #953b1d;
    text-align: center;
    color: white;
    padding: 10px 20px;
    height: 250px;
}

.header
{
	background-color: black;
	text-align: center;
	color: white;
	height: 100px;
}


.footer a
{
    color: white;
    padding: 0px 20px;
}


.footer a li
{
    float: right;
    margin-right: 10px;
    text-align: center;
    display: block;
    padding: 5px;
}


</style>












</head>
<body style="background-color: #EBCAB7">



<div class="header">

	<br>

<h3>
	<a href="index.php" style="color: white;">
	Online Quiz System
</a>
</h3>	

</div>












<section>
	


<br><br><br>





	<div class="container">
		<div class="row">
			     <div class="col-sm-6">
					  <div class="panel panel-info">
                      <div class="panel-heading">Sign in Form</div>
						<div class="panel-body">
						<?php
						if(isset($_GET['run'])  && $_GET['run']=="failed")
						{
							echo "Your email or password is not correct";
						}
						
						
						?>
							  <form role="form" action="signin_sub.php" method="post">
								<div class="form-group">
								  <label for="email">Email:</label>
								  <input type="email" class="form-control" name="e" id="email" placeholder="Enter email"required/>
								</div>
								<div class="form-group">
								  <label for="pwd">Password:</label>
								  <input type="password" class="form-control" name="p" id="pwd" placeholder="Enter password" required/>
								</div>
								<button type="submit" class="btn btn-default">Submit</button>
							  </form>
						  </div>
						  </div>
					  </div>
				 
				   <div class="col-sm-6">
							<div class="panel panel-info">
								
								<div class="panel-heading">Sign up Form</div>
							<div class="panel-body">
							<?php 
							if(isset($_GET['run'])&& $_GET['run']=="success")
							{
								echo "<mark>Your registration successfully done</mark>";
							} 
							?>
							  <form role="form" method="post" action="signup_sub.php" enctype="multipart/form-data"  >
							  	<div class="form-group">
								  <label for="name">Name:</label>
								  <input type="text" class="form-control" name="n" id="name" placeholder="Enter name" required/>
								</div>
								<div class="form-group">
								  <label for="email">Email:</label>;
								  <input type="email" class="form-control" name="e" id="email" placeholder="Enter email"required/>
								</div>
								<div class="form-group">
								  <label for="pwd">Password:</label>
								  <input type="password" class="form-control" name="p" id="pwd" placeholder="Enter password" required>
								</div>
								<div class="form-group">
								  <label for="pwd">Upload your iamge</label>
								  <input type="file" class="form-control" name="img" required>
								</div>
								<button type="submit" class="btn btn-default">Submit</button>
							  </form>
						  </div>
						  </div>
			      </div>
	   </div>
   </div>
   


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


<br>
<br>

</section>


<div class="footer">
<br><br>

          
                             
                             Poddar College Technology Management, <br>
                             Near SP Office
                             Krishna Nagar <br>
                             Bharatpur

<br><br>
           yashsharm884@gmail.com




<br><br><br>

Created by Yash Sharma Industries




</div>
</div>


</body>
</html>
