<?php session_start();?>
<!DOCTYPE html>
<html lang="EN">

<head>	

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <!-- CSS link -->
	<link rel="stylesheet" href="../css/mijn_hypotheek.css">

</head>	


  <!-- Content --> 
<div class="body">

<div class="graph">
  <h2> My Mortgage </h2>
  <div class="canvas-container" style="position: relative; align-items:center; height:40vh; width:80vw">
  <canvas id="myChart" ></canvas>
  </div>
</div>

<div class="circles">
<div class="block1">
  <h1>Monthly </br>  Payment</h1>
<div class="circle"> $465,40
</div>
</div>

<div class="block2">
  <h1></br>Rente</h1>
<div class="circle"> 3.3%
</div>
</div>

<div class="block3">
  <h1>Total </br> Payment</h1>
<div class="circle"> $4235.20
</div>
</div>
</div>

<div class="Situatie">
  <h2>Situatie Aanpassen</h2>
</div>

<form class=container method="post">
  <select name="situatie" class="situatie"  required>
    <optgroup class="opt" >
      <option value=""  disabled selected><h1> </h1></option>
      <option value=1>Geen aanpassingen</option>
      <option value=2>Verlies inkomen</option>
      <option value=3>Verlies inkomen partner</option>
      <option value=4>Verhoging van inkomen</option>
      <option value=5>Verhoging van inkomen partner</option>
      <option value=6>Extra aflossen</option>
      <option value=7>Verkrijgen uitkering</option>
      <option value=8>Stopgezette uitkering</option>
      <option value=9>Extra maandelijkse kosten</option>
    </optgroup>
  </select>

      <input type="submit" value="Send"> <!-- Lien vers Formulier_verdonzen-->
</form>


   <!--Footer-->   
  <?php include('footer_EN.php'); ?>
</div>

<script>
  const labels = [
    2017,
    2018,
    2019,
    2020,
    2021,
  ];

  const data = {
    labels: labels,
    datasets: [{
      label: 'Mijn Hypotheek',
      backgroundColor: 'rgb(0, 147, 83)',
      borderColor: 'rgb(0, 147, 83)',
      data: [375000,390000,420000,520000,580000],
    }]
  };

  const config = {
    type: 'line',
    data: data,
    options: {
      plugins:{
      legend:{
        display: false,
      }
    }
  },
    scales: {
      y: { // definin min and max so hiding the dataset does not change scale range
        min: 0,
        max: 600000
      },
    }
  };
  
  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>
 
</html>
