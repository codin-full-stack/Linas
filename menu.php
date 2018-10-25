<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

.topnav {
	display: flex;
	flex-grow: 1;
  overflow: hidden;
  background-color: #FFC300;
}

.topnav a {
  display: block;
  color: #6c007d;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 12px;
  font-family: monospace;
}

.topnav a:hover {
	background-color: #6c007d;
	color: #FFC300;
}

.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}
@media only screen and (max-width: 1024px) {
  
  .topnav {
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    background-color: #F8F8F8;
    min-width: 200px;
  }
  .topnav a {
    border: 2px solid #6c007d;
    border-radius: 10px;
    border-bottom: none;
  }
  .topnav a:first-child {
    border-radius: 10px;
  }
  .topnav a:last-child {
    border-radius: 10px;
    border-bottom: 2px solid  #6c007d;
  }
}
@media screen and (max-width: 767px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
  .topnav.responsive {
  	position: relative;}

  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="html/calculator.html">Skaičiuotuvas</a>
  <a href="html/table.html">Lentelė</a>
  <a href="html/login.html">Loginas</a>
  <a href="html/registration.html">Registracija</a>
  <a href="html/portfolio">Portfolio</a>
  <a href="allusers.php">Visi užsiregistravę vartotojai</a>

  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

</body>
</html>