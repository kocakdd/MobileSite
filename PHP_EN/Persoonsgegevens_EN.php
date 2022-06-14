

<head>	

  <!-- CSS link -->
	<link rel="stylesheet" href="../css/persoongegevens.css">
</head>

  <!-- PHP - Link with the DataBase-->
<?php include_once('../Action/db_client.php'); ?>


  <!-- Body  -->
<div class="body">
  <!-- htmlspecialchars allow to have the character < and no execution of html code -->
  <div class ="block">
    
    <p class="label1"> Personnal Informations </p>
    
    <p class="label2"> Name </p>
    <p class="content"><?= htmlspecialchars($_SESSION['voornaam'])." ".htmlspecialchars($_SESSION['achternaam']) ?></p>

    <p class="label2"> Address </p>
    <p class="content"><?= htmlspecialchars($_SESSION['adres'])."  ".htmlspecialchars($_SESSION['woonplaats'])."  ".htmlspecialchars($_SESSION['postcode']) ?></p>

    <p class="label2"> E-mail </p>
    <p class="content"><?= htmlspecialchars($_SESSION['email'])?></p>

    <p class="label2"> Wachtwoord </p>
    <a href="wachtwoord_wijzig_EN.php"><p class="link"> Wijzig uw wachtwoord </p></a>

    <p class="label2"> Leeftijd </p>
    <p class="content"><?= htmlspecialchars($_SESSION['leeftijd']) ?></p>

    <p class="label2"> Loon </p>
    <p class="content"><?= htmlspecialchars($_SESSION['loon']) ?></p>

    <p class="label2"> Phone number </p>
    <p class="content"><?= htmlspecialchars($_SESSION['telefonnummer']) ?></p>

    <p class="label2"> Naam Partner </p>
    <p class="content"><?=htmlspecialchars( $_SESSION['pvoornaam'])."  ".htmlspecialchars($_SESSION['pachternaam']) ?></p>

    <p class="label2"> Status Partner </p>
    <p class="content"><?= htmlspecialchars($_SESSION['status']) ?></p>

    <p class="label2"> Hypotheek </p>
    <p class="content"><?= htmlspecialchars($_SESSION['hypotheek']) ?></p>


  </div>

  <?php include('footer_EN.php'); ?>

</div>