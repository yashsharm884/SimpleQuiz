<?php
include("class/users.php");
$ans=new  users;
$answer=$ans->answer($_POST);
?>









<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>answer</title>
	  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  



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
<body style="background-image: url(img/pink.png);">



<div class="header">

	<br>

<h3>
	<a href="index.php" style="color: white;">
	Online Quiz System
</a>
</h3>	

</div>






	<center>
	<?php
	$total_qus=$answer['right']+$answer['wrong']+$answer['no_answer'];
	$attempt_qus=$answer['right']+$answer['wrong'];
	?>
	<div class="container">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
<br>

  <h2>Your Quiz results</h2>

  <br><br><br><br><br><br><br><br><br><br><br>


  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Total number of Questions</th>
        <th><?php echo $total_qus; ?></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Attempted qusetions</td>
        <td><?php echo $attempt_qus;?></td>
      </tr>
      <tr>
        <td>Right answer </td>
        <td><?php echo $answer['right'];?></td>
      </tr>
      <tr>
        <td>Wrong answer</td>
        <td><?php echo $answer['wrong'];?></td>
      </tr>
	  <tr>
        <td>No answer</td>
        <td><?php echo $answer['no_answer'];?></td>
      </tr>
	  <tr>
        <td>Your result</td>
        <td><?php 
		$per=($answer['right']*100)/($total_qus);
		
		echo $per."%";
		?></td>
      </tr>
    </tbody>
  </table></div>
  <div class="col-sm-2"></div>
</div>
	
	


	      <button onclick="window.location.href = 'index.php';" style="color: blue;">Click Here</button>

		
	</button>
	
	</center>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>



<br>

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