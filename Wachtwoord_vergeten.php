<?php session_start();?>
<?php require('Action/pwd.php'); ?>
<!DOCTYPE html>
<html lang="NL">

<head>	
	<title> Hypotheekvitaal - wachtwoord vergeten </title>	
	<META	NAME="author"	CONTENT="Kocak Derya">	
	<META	NAME="description"	CONTENT="Login">	
	<META	NAME="geography"	CONTENT="Rotterdam,	South-Holland,	Nertheland">	
	<META	NAME="keywords"	CONTENT="Rotterdam, Hypotheekready">	
	<META	NAME="subject"	CONTENT="Wachtwoord">	

  <!-- CSS link -->
	<link rel="stylesheet" href="css/Login_Menu.css">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	
</head>	

<body>
  
  <!-- Header -->

  <?php include_once('Action/header.php'); ?>

    <div class="formulier">
    <h2 > Wachtwoord vergeten ?</h2>
    <form class=container method="post">
            <label for="email"><b>E-mailadres</b></label>
            <input type="email" placeholder="E-mail placeholder" name="email" required>
            <button type="submit" name='validate'>Verstuur</button>
            <?php if(isset($error)){echo '<a><p style="color:red;">   '.$error.'</p></a>';}?>
        </form>
</div>

<?php include('Action/footer.php'); ?>
</body>

</html>
