<?php require('log_EN.php');?>
<!DOCTYPE html>
<html lang="EN">

<head>	
	<title> Hypotheekvitaal - Login </title>	
	<META	NAME="author"	CONTENT="Kocak Derya">	
	<META	NAME="description"	CONTENT="Login">	
	<META	NAME="geography"	CONTENT="Rotterdam,	South-Holland,	Nertheland">	
	<META	NAME="keywords"	CONTENT="Rotterdam, Hypotheekready">	
	<META	NAME="subject"	CONTENT="Login">	

  <!-- CSS link -->
	<link rel="stylesheet" href="../css/Login_Menu.css">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	
</head>	

<body>
  
  <!-- Header -->

  <?php include_once('header_EN.php'); ?>

  
  <!--Login Formulier -->

  <div class="formulier">
    <h2 > Login </h2>
    <form class=container method="post">

      <label for="email"> Email </label>
      <input type="email" name="email" placeholder="Email placeholder" required>

      <label for="password"> Password <img src="../images/eye_hide.png" id="eye" onClick="change()"/></label>
      <input type="password" id="password" name="password" placeholder="Password placeholder"  required>
      

      <button type="submit"  name='validate'>Log in</button>
      <a href='wachtwoord_vergeten_EN.php'> Forgot your password? <br/></a>
      <?php if(isset($error)){echo '<p style="color:red;font-size:200%;"> <br/><br/>'.$error.'</a>';}?>
    </form>
  </div> 
<script>
  e=true;
  function change(){
    if(e){
      document.getElementById("password").setAttribute("type","text");
      document.getElementById("eye").src="../images/eye.png";
      e=false;

    }
    else{
      document.getElementById("password").setAttribute("type","password");
      document.getElementById("eye").src="../images/eye_hide.png";
      e=true;

    }
  }
</script>

  
  <?php include('footer_EN.php'); ?>

</body>
</html>
