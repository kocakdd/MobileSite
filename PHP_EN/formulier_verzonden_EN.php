<?php session_start();?>
<!DOCTYPE html>
<html lang="EN">

<head>	
	<title> Hypotheekvitaal - Hypotheek </title>	
	<META	NAME="author"	CONTENT="NAPIERALA Lisa">	
	<META	NAME="description"	CONTENT="Hypotheek">	
	<META	NAME="geography"	CONTENT="Rotterdam,	South-Holland,	Nertheland">	
	<META	NAME="keywords"	CONTENT="Rotterdam, Hypotheek">	
	<META	NAME="subject"	CONTENT="Hypotheek">	

  <!-- CSS link -->
	<link rel="stylesheet" href="../css/hypotheek_verzonden.css">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	
</head>	

<body>

    <!-- Header -->
  <?php require('header_EN.php'); ?>

  <!-- PHP - Link with the DataBase-->
  <?php require('../Action/db_contact.php'); ?>


  <!-- Body -->
  <!-- htmlspecialchars allow to have the character < and no execution of html code -->
  <div class ="block_text">
  <p class="title1"> <?= htmlspecialchars($_POST['fname']) ?> Your form has been send</p>
  <p class="title2"> We will contact you as soon as possible </p>
  <!-- Button -->
  <a href="Home+Login_EN.php"><button class="button"  role="button" >Return to Home</button></a>
  
  </div>

  <div id="container">
   <div id="main"></div>

   <!--Footer-->
  <?php include('footer_EN.php'); ?>
</div>
</body>
</html>
