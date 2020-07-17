<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body >
	<?php include"header.html"; //included the html file using include keyword?>
	<form action="site2.php" method="post">
		Enter your Name:<input type="text" name="name"><br><br>
		Enter your Roll:<input type="number" name="roll"><br><br>
		Enter your Date of birth:<input type="date" name="date"><br><br>
		Enter your Mail id:<input type="email" name="mail"><br><br>
		Enter your password:<input type="password" name="password"><br><br>
		Enter your grade:<input type="text" name="grade"><br><br>
		<input type="submit">
		<hr>
	</form>
	<?php  
	$username=$_POST["name"];
	$roll_no=$_POST["roll"];
	$date=$_POST["date"];
	$email=$_POST["mail"];
	include "head.php" //included the php file using the include keyword; 
	?>

	<?php 

		$result=$_POST["grade"];
		if($_POST["password"]=="1234"){
		switch($result){
			case "A":
				echo "You did Amazing!!";
				break;

			case "B":
				echo "You did Good!";
				break;

			case "C":
				echo "You did Satisfactory work!";
				break;


			case "D":
				echo "You did Bad work!";
				break;

			case "F":
				echo "Sorry you have Failed";
				break;

			default:
				echo "Invalid input";
		}
	}
	else{
		echo "Invalid password";
	}
	  ?>
	<?php  include "footer.html"; ?>
</body>
</html>