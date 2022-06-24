<?php session_start();?>
<!DOCTYPE html>
<html lang="EN">

<head>	
	<title> Hypotheekvitaal - Contact </title>	
	<META	NAME="author"	CONTENT="NAPIERALA Lisa">	
	<META	NAME="description"	CONTENT="Contact">	
	<META	NAME="geography"	CONTENT="Rotterdam,	South-Holland,	Nertheland">	
	<META	NAME="keywords"	CONTENT="Rotterdam, Contact">	
	<META	NAME="subject"	CONTENT="Contactformulier">	

  <!-- CSS link -->
	<link rel="stylesheet" href="../css/Contact.css">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	
</head>	

<body>
    
  <!-- Header -->

  <?php include_once('header_EN.php'); ?>

  <!-- Content --> 

  <img class="contact-image" src="../images/contact.png" alt="Font Image">
  
  <div class="first-text-block">
    <h1 class="title"> Contact </h1>
    <h2 class="title1"> Contact us</h2>
    <p class="text1"> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum</p>
  </div>

  <!--Contact Formulier -->

  <div class="formulier">
    <h2 > Contact Form </h2>

    <form action="formulier_verzonden_EN.php" method="post">

    <label for="fname"> First & LastName </label>
      <input type="text" name="fname" placeholder="First Name placeholder" pattern="[a-zA-Z- ]{1,60}" autofocus required>

      <label for="email"> E-mail </label>
      <input type="email" name="email" placeholder="E-mail placeholder" pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.[a-zA-Z.]{2,15}" required>

      <label for="tel"> Phone number </label>
      <input type="tel" name="tel" placeholder="Phone number placeholder" pattern="^(?:0|\(?\+31\)?\s?)[1-9](?:[\.\-\s]?\d\d){4}$" required>

      <label for="text"> Reason for  contact </label>
      <textarea rows="3" name="text" placeholder="Textarea placeholder" required></textarea>



      <h2 > Select a day and period of contact</h2>
      <input type="date" id="datefield" name="date"  placeholder="Date" min="<?= date('Y-m-d'); ?>" required>

      <select id="time" name="time" class="time"  required>
        <optgroup class="opt" >
      <option value=""  disabled selected><h1>Select</h1></option>
      <option value="9-12">9:00-12:00</option>
      <option value="12-15">12:00-15:00</option>
      <option value="15-18">15:00-18:00</option>
      <option value="18-20">18:00-20:00</option>
        </optgroup>
    </select>

      <input type="submit" value="Send"> <!-- Lien vers Formulier_verdonzen-->
    </form>
  </div>

  <div class="form-end">
    <img class="form-image" src="../images/group.png" alt="Font Image">
  </div>
  

   <!--Footer-->    
  
  <?php include('footer_EN.php'); ?>

</body>
</html>
