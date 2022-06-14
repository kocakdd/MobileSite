<?php session_start();?>
<!-- Header.php -->

  <!-- CSS link -->

  
  <link rel="stylesheet" href="css/header.css">

  <!-- Font links -->
  <link rel="stylesheet" href="https://use.typekit.net/hmw2slg.css">
  <link rel="stylesheet" href="https://fontsgeek.com/yu-gothic-font">

  <!-- Loader -->

  <div id="loader" class="loader"></div>
  <script>
  document.onreadystatechange = function() 
  {
    if (document.readyState != "complete") 
    {
      document.querySelector("body").style.visibility = "hidden";
      document.querySelector("#loader").style.visibility = "visible";
    } 
    else 
    {
      document.querySelector("#loader").style.display = "none";
      document.querySelector("body").style.visibility = "visible";
    }
  };
  </script>

<nav id="navbar">
      <!-- Create three divs to represent the three-line dropdown menu bar -->
      <input type="checkbox" id="active">
      <label for="active" class="menu-btn"><span></span></label>
      <label for="active" class="close"></label>
  
      <!-- Add your navigations here -->
      <div class="wrapper">
        <ul>
          <li><a href="Home+Login.php">Home</a></li>
          <li><a href="Hypotheekadvies.php">Hypotheekadvies</a></li>
          <li><a href="Hypotheekadvies.php">2nd Opinion</a></li>
          <li><a href="Hypotheekadvies.php">Hypotheekready</a></li>
          <li><a href="Team.php">Team</a></li>
          <li><a href="Contact.php">Contact</a></li>
      
          <?php if(isset($_SESSION['auth'])):?>
            <li><a href="Logout.php"> Logout</a></li>
          <?php else:?>
            <li><a href="Login_Menu.php"> Login</a></li>
          <?php endif ?>

          <!-- Check if this still work when it will be online -->
          <li> <a href="<?php echo "PHP_EN/".rtrim( basename($_SERVER['PHP_SELF']), ".php")."_EN.php" ; ?>" class="english" > EN </a> <a href=""> NL |</a></li>
              
              
        </ul>
      </div>
  
      <!-- Logos for the navigation bar *-->
      <div class ="greenLine"></div>
      <div class= "userLogo">
        <a href="Login_Menu.php"> <img src="images/LoginLogo.svg" alt="User Logo" style="width:250%;height:250%"></a>
      </div>
      <div class="compagnyLogo">
        <a href="Home+Login.php"><img src="images/LogoHyp.svg" alt="Logo Compagny" style="width:280%;height:280%;"> </a>
      </div>

      <!-- When the Client is connected -->

      <?php if(isset($_SESSION['auth'])):?>

      <div class="switch">
        <button id="switch-left" class="switch-left" onClick="change_l(),toggle_text_l()">
          <img id ="left" src="images/login_left.png"  alt="Logo Left" style="width:20%;">
        </button>
        <button id="switch-right" class="switch-right" onClick="change_r(), toggle_text_r()">
          <img id="right" src="images/login_right_g.png" alt="Logo Right" style="width:20%;" >
        </button>
      </div>

      
        <div class="span-left"  id="span-left" style="left:-100%;">
          <?php include("mijn_hypotheek.php"); ?>
        </div>
      
        <div class="span-right" id="span-right" style="left:100%;" >
          <?php include("Persoonsgegevens.php"); ?>
        </div>
      
      <script type="text/javascript">
      
      var windowHeight = document.documentElement.scrollHeight;
      document.getElementById("span-right").style.height = windowHeight-250+ "px";
      document.getElementById("span-left").style.height = windowHeight-250+ "px";
r=true;
l=true;


function change_r(){
  if(r){
    document.getElementById("right").src = "images/login_right.png";
    document.getElementById("switch-right").style.backgroundColor = '#009353';
    r=false;
  }
  else{
    document.getElementById("right").src = "images/login_right_g.png"; 
    document.getElementById("switch-right").style.backgroundColor = '#FFF';
    r=true;
  }
  if(document.getElementById("switch-left").style.backgroundColor === document.getElementById("switch-right").style.backgroundColor){
      document.getElementById("switch-left").style.backgroundColor = '#FFF';
      document.getElementById("left").src = "images/login_left.png"; 
      l = true;
      toggle_text_l();
  }
}


function change_l(){
  if(l){
    document.getElementById("switch-left").style.backgroundColor = '#009353';
    document.getElementById("left").src = "images/login_left_w.png";
    l=false;
  }
  else{
    document.getElementById("switch-left").style.backgroundColor = '#FFF';
    document.getElementById("left").src = "images/login_left.png";
    l=true;
  }
  if(document.getElementById("switch-left").style.backgroundColor === document.getElementById("switch-right").style.backgroundColor){
      document.getElementById("switch-right").style.backgroundColor = '#FFF';
      document.getElementById("right").src = "images/login_right_g.png"; 
      r=true;
      toggle_text_r();

  }
}

function toggle_text_l() {
  var id = null;
  var span = document.getElementById("span-left");
  if(l==false) {
    
    var pos = parseInt(span.style.left);
    clearInterval(id);
    id = setInterval(frame, 10);
    
    function frame() {
      if (pos == 0) {
        clearInterval(id);
      } else {
        pos++; 
        span.style.left = pos + '%'; 
      }
    }
  
  } else {
    clearInterval(id);
    var pos = parseInt(span.style.left);
    id = setInterval(frame, 10);
    function frame() {
      if (pos == (-100)) {
        clearInterval(id);
      } else {
        pos--; 
        span.style.left = pos + '%'; 
      }

    }
    
  }
}

function toggle_text_r() {
  var id = null;
  var span = document.getElementById("span-right");
  if(r==false) {
    clearInterval(id);
    var pos = parseInt(span.style.left);
    id = setInterval(frame, 10);
    
    function frame() {
      if (pos == 0) {
        clearInterval(id);
      } else {
        pos--; 
        span.style.left = pos + '%'; 
      }
    }
  
  } else {
    clearInterval(id);
    var pos = parseInt(span.style.left);
    id = setInterval(frame, 10);
    function frame() {
      if (pos == (100)) {
        clearInterval(id);
      } else {
        pos++; 
        span.style.left = pos + '%'; 
      }

    }
    
  }
}


      </script>
      
      <?php endif ?>

</nav>