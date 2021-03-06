<?php session_start();?>
<!DOCTYPE html>
<html lang="NL">

<head>	
	<title> Hypotheekvitaal - Watchwoord verzonden </title>	
	<META	NAME="author"	CONTENT="Kocak Derya">	
	<META	NAME="description"	CONTENT="Hypotheek">	
	<META	NAME="geography"	CONTENT="Rotterdam,	South-Holland,	Nertheland">	
	<META	NAME="keywords"	CONTENT="Rotterdam, Hypotheek">	
	<META	NAME="subject"	CONTENT="Watchwoord">	

  <!-- CSS link -->
	<link rel="stylesheet" href="css/hypotheek_verzonden.css">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	
</head>	

<body>

    <!-- Header -->
  <?php require('Action/header.php'); ?>


  <!-- Body -->
  <!-- htmlspecialchars allow to have the character < and no execution of html code -->
  <div class ="block_text">
  <p class="title1"> <br/><br/>Een niuew wachtwoord is verzonden</p>
  <p class="title2"> U ontvangt de nieuwe gegevens in uw Inbox. </p>
  <!-- Button -->
  <a href="Home+Login.php"><button class="button"  role="button" >Terug naar Home</button></a>
  
  </div>

  <div id="container">
   <div id="main"></div>

   <!--Footer-->
  <?php include('Action/footer.php'); ?>
</div>
</body>
</html>
