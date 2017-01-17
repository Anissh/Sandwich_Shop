<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script>
$(".cta").mouseenter(function(){
  $(this).addClass("active").delay(300).queue(function(next){
    $(this).removeClass("active");
    next();
  });
});
</script>
<style type="text/css">
body {
  margin: 0 auto;
  text-align: center;
    background-color: #E02A91;

}



h1 {
  margin-top: 200px;
  font: 700 220px Helvetica;
  color: white;
  letter-spacing: -20px;
  text-shadow: 3px 3px black, 6px 6px white, 9px 9px black, 12px 12px white, 15px 15px black, 18px 18px white, 21px 21px black, 24px 24px white, 27px 27px black, 30px 30px white, 33px 33px black, 36px 36px white, 39px 39px black, 42px 42px white, 45px 45px black, 48px 48px white, 51px 51px black, 54px 54px white, 57px 57px black, 60px 60px white, 63px 63px black, 66px 66px white, 69px 69px black, 72px 72px white, 75px 75px black;
  -webkit-animation: sandwich 2s infinite;
}

@-webkit-keyframes sandwich {
  0% { color: white; }
  25% { color: white; text-shadow: 3px -3px black, 6px -6px white, 9px -9px black, 12px -12px white, 15px -15px black, 18px -18px white, 21px -21px black, 24px -24px white, 27px -27px black, 30px -30px white, 33px -33px black, 36px -36px white, 39px -39px black, 42px -42px white, 45px -45px black, 48px -48px white, 51px -51px black, 54px -54px white, 57px -57px black, 60px -60px white, 63px -63px black, 66px -66px white, 69px -69px black, 72px -72px white, 75px -75px black}
  50% { color: white; text-shadow: -3px -3px black, -6px -6px white, -9px -9px black, -12px -12px white, -15px -15px black, -18px -18px white, -21px -21px black, -24px -24px white, -27px -27px black, -30px -30px white, -33px -33px black, -36px -36px white, -39px -39px black, -42px -42px white, -45px -45px black, -48px -48px white, -51px -51px black, -54px -54px white, -57px -57px black, -60px -60px white, -63px -63px black, -66px -66px white, -69px -69px black, -72px -72px white, -75px -75px black}
  75% { color: white; text-shadow: -3px 3px black, -6px 6px white, -9px 9px black, -12px 12px white, -15px 15px black, -18px 18px white, -21px 21px black, -24px 24px white, -27px 27px black, -30px 30px white, -33px 33px black, -36px 36px white, -39px 39px black, -42px 42px white, -45px 45px black, -48px 48px white, -51px 51px black, -54px 54px white, -57px 57px black, -60px 60px white, -63px 63px black, -66px 66px white, -69px 69px black, -72px 72px white, -75px 75px black}
  100% { color: white; }
}

h1:nth-child(1){
  position: absolute;
  top: -100px;
  left: 100px;
  
}

h1:nth-child(2) {
  position: absolute;
  top: 140px;
  left: 330px;
  letter-spacing: 10px;
}
.cost {
	color: #FFF;
}

* {
  margin:0;
  padding:0;
  outline:none;
  list-style:none;
  text-decoration:none;
  box-sizing:border-box;
  color:#000;
  background: transparent;
  border:none;
}

html, body {
  height: 100%;
  width: 100%;  
}

body {
  background: #202020;
  font-family: 'Roboto', sans-serif;
}

.wrap {
  height: 60px;
  position: relative;
  top:50%;
  transform: translateY(-50%);
}

.box {
  padding: 1em;
  height: 60px;
  text-align: center;
}

button {
  width: 160px;
  height: 60px;
  background: #E6203B;
  cursor:pointer;
  position: relative;
  border-radius:6px;
}

button a {
  color: #fff;
  text-transform:uppercase;
  letter-spacing:1px;
}

/* let's shape */

button span.shape {
  height: 60px;
  width: 160px;
  position: absolute;
  top: 0;
  left: 0;
}

button span span {
  content:"";
  position: absolute;
  margin: auto;
  height: 8px;
  width: 2px;
  background: #E6203B;
  opacity: 0;
}

button span span:nth-of-type(1) {
  top: -20px;
  left: 0;
  right: 0;
}

button span span:nth-of-type(2) {
  bottom: -20px;
  left: 0;
  right: 0;
}

button span span:nth-of-type(3) {
  top:0;
  bottom: 0;
  left: -10px;
}

button span span:nth-of-type(4) {
  top:0;
  bottom: 0;
  right: -10px;
}

button span span:nth-of-type(5) {
  top: -20px;
  left: -70%;
  right: 0;
  transform:rotate(-30deg);
}

button span span:nth-of-type(6) {
  top: -20px;
  left: 0;
  right: -70%;
  transform:rotate(30deg);
}
button span span:nth-of-type(7) {
  bottom: -20px;
  right: 0;
  left: -70%;
  transform:rotate(30deg);
}
button span span:nth-of-type(8) {
  bottom: -20px;
  left: 0;
  right: -70%;
  transform:rotate(-30deg);
}



/* let's animate this */

@keyframes bounce {
  0%{transform: scale(1);}
  50%{transform: scale(1.1);}
  100%{transform: scale(1);}
}

button.active {
  animation: bounce 0.3s ease-out 1;
}

button.active span span:nth-of-type(1) {
  animation: anim1 0.4s ease-out 1;
}
button.active span span:nth-of-type(2) {
  animation: anim2 0.4s ease-out 1;
}
button.active span span:nth-of-type(3) {
  animation: anim3 0.4s ease-out 1;
}
button.active span span:nth-of-type(4) {
  animation: anim4 0.4s ease-out 1;
}
button.active span span:nth-of-type(5) {
  animation: anim5 0.4s ease-out 1;
}
button.active span span:nth-of-type(6) {
  animation: anim6 0.4s ease-out 1;
}
button.active span span:nth-of-type(7) {
  animation: anim7 0.4s ease-out 1;
}
button.active span span:nth-of-type(8) {
  animation: anim8 0.4s ease-out 1;
}


@keyframes anim1 {
  0%{transform: scaleY(0.5);opacity: 0;}
  50%{transform: translateY(-10px) scaleY(1.4); opacity: 1;}
  100%{transform: translateY(-20px) scaleY(0.5);opacity: 0;}
}
@keyframes anim2 {
  0%{transform: scaleY(1);opacity: 0;}
  50%{transform: translateY(10px) scaleY(1.4); opacity: 1;}
  100%{transform: translateY(20px) scaleY(0.5);opacity: 0;}
}
@keyframes anim3 {
  0%{transform: rotate(90deg) scaleX(0.5);opacity: 0;}
  50%{transform: rotate(90deg) translateY(10px) scaleX(1.4); opacity: 1;}
  100%{transform: rotate(90deg) translateY(20px) scaleX(0.5);opacity: 0;}
}
@keyframes anim4 {
  0%{transform: rotate(90deg) scaleX(0.5);opacity: 0;}
  50%{transform: rotate(90deg) translateY(-10px) scaleX(1.4); opacity: 1;}
  100%{transform: rotate(90deg) translateY(-20px) scaleX(0.5);opacity: 0;}
}
@keyframes anim5 {
  0%{transform: rotate(-30deg) scaleY(0.5);opacity: 0;}
  50%{transform: rotate(-30deg) translateY(-8px) scaleY(1.4); opacity: 1;}
  100%{transform: rotate(-30deg) translateY(-16px) scaleY(0.5);opacity: 0;}
}
@keyframes anim6 {
  0%{transform: rotate(30deg) scaleY(0.5);opacity: 0;}
  50%{transform: rotate(30deg) translateY(-8px) scaleY(1.4); opacity: 1;}
  100%{transform: rotate(30deg) translateY(-16px) scaleY(0.5);opacity: 0;}
}
@keyframes anim7 {
  0%{transform: rotate(30deg) scaleY(0.5);opacity: 0;}
  50%{transform: rotate(30deg) translateY(8px) scaleY(1.4); opacity: 1;}
  100%{transform: rotate(30deg) translateY(16px) scaleY(0.5);opacity: 0;}
}
@keyframes anim8 {
  0%{transform: rotate(-30deg) scaleY(0.5);opacity: 0;}
  50%{transform: rotate(-30deg) translateY(8px) scaleY(1.4); opacity: 1;}
  100%{transform: rotate(-30deg) translateY(16px) scaleY(0.5);opacity: 0;}
}
</style>
<body>

 
<span class="cost">
<?php
// variables must have a dollar sign as the first character
$price = 0;

// repeat for each of your items .....
$white="";
if (isset($_GET['chkwhite'])==1){
	$white = $_GET["chkwhite"];
	}
	
	$ww="";
if (isset($_GET['chkww'])==1){
	$ww = $_GET["chkww"];
	}
	
	$cheesebun="";
if (isset($_GET['chkcheesebun'])==1){
	$cheesebun = $_GET["chkcheesebun"];
	}
	
	$greek="";
if (isset($_GET['chkgreek'])==1){
	$greek = $_GET["chkgreek"];
	}
	
	
	$multigrain="";
if (isset($_GET['chkmultigrain'])==1){
	$multigrain = $_GET["chkmultigrain"];
	}
	
	$cheese="";
if (isset($_GET['chkcheese'])==1){
	$cheese = $_GET["chkcheese"];
	}
	
	$lettuce="";
if (isset($_GET['chklettuce'])==1){
	$lettuce = $_GET["chklettuce"];
	}
	
	$tomatoes="";
if (isset($_GET['chktomatoes'])==1){
	$tomatoes = $_GET["chktomatoes"];
	}
	
	$cucumber="";
if (isset($_GET['chkcucumber'])==1){
	$cucumber = $_GET["chkcucumber"];
	}
	
	$pickles="";
if (isset($_GET['chkpickles'])==1){
	$pickles = $_GET["chkpickles"];
	}
	
	$jalapeno="";
if (isset($_GET['chkjalapeno'])==1){
	$jalapeno = $_GET["chkjalapeno"];
	}
	
	$mayo="";
if (isset($_GET['chkmayo'])==1){
	$mayo = $_GET["chkmayo"];
	}
	
	$ranch="";
if (isset($_GET['chkranch'])==1){
	$ranch = $_GET["chkranch"];
	}
	
	$subsauce="";
if (isset($_GET['chksubsauce'])==1){
	$subsauce = $_GET["chksubsauce"];
	}
	
	$mustard="";
if (isset($_GET['chkmustard'])==1){
	$mustard = $_GET["chkmustard"];
	}
	
	$assorted="";
if (isset($_GET['chkassorted'])==1){
	$assorted = $_GET["chkassorted"];
	}
	
$turkey="";
if (isset($_GET['chkturkey'])==1){
	$turkey = $_GET["chkturkey"];
	}

$roastbeef="";
if (isset($_GET['chkroastbeef'])==1){
	$roastbeef = $_GET["chkroastbeef"];
	}
	
	$spicychicken="";
if (isset($_GET['chkspicychicken'])==1){
	$spicychicken = $_GET["chkspicychicken"];
	}



// after each of your items has been checked ... output

if ($white =="on"){
	echo "You ordered a White Bun <br>";
	
}

if ($ww =="on"){
	echo "You ordered a Whole Wheat Bun <br>";
}

if ($cheesebun =="on"){
	echo "You ordered a Cheese Bun <br>";
	
}

if ($multigrain =="on"){
	echo "You ordered a Multigrain Bun <br>";
	
}

if ($greek =="on"){
	echo "You ordered a Greek Bun <br>";
	
}

if ($cheese =="on"){
	echo "You ordered cheese <br>";
	
}

if ($lettuce =="on"){
	echo "You ordered lettuce <br>";
	
} 

if ($tomatoes =="on"){
	echo "You ordered tomatoes <br>";
	
}

if ($cucumber =="on"){
	echo "You ordered cucumber <br>";
	
}

if ($pickles =="on"){
	echo "You ordered pickles <br>";
	
}

if ($jalapeno == "on"){
	echo "You ordered jalapenos <br>";
	
}

if ($mayo == "on"){
	echo "You ordered mayo <br>";
	
}

if ($subsauce =="on"){
	echo "You ordered subsauce <br>";
	
}

if ($mustard =="on"){
	echo "You ordered mustard <br>";
	
}

if ($assorted =="on"){
	echo "You chose a Assorted Sub <br>";
	$price=$price+7.49;
}

if ($turkey =="on"){
	echo "You chose a Turkey Sub <br>";
	$price=$price+7.69;
}

if ($roastbeef =="on"){
	echo "You chose a Roast Beef Sub <br>";
	$price=$price+8.29;
}

if ($spicychicken =="on"){
	echo "You chose a Spicy Chicken Sub <br>";
	$price=$price+8.49;
}
?>
​
<style type="text/css">
@font-face {
	font-family: Museo;
	src: url("http://s.cdpn.io/26175/Museo300-Regular.otf") format("opentype");
}


.neon {
  text-align: center;
  margin: 200px auto;
  font-family: "Museo";
  font-size: 200px;
  text-transform: uppercase;
  color: #fff;
  -webkit-animation:pulse 1.5s ease-in-out infinite alternate;
  -webkit-backface-visibility: hidden;
}

@-webkit-keyframes pulse {
  from {
    text-shadow: 0 0 10px #fff,
               0 0 20px #fff,
               0 0 30px #fff,
               0 0 40px #ff00de,
               0 0 70px #ff00de,
               0 0 80px #ff00de,
               0 0 100px #ff00de,
               0 0 150px #ff00de;
  }
  to {
    text-shadow: 0 0 5px #fff,
               0 0 10px #fff,
               0 0 15px #fff,
               0 0 20px #ff00de,
               0 0 35px #ff00de,
               0 0 40px #ff00de,
               0 0 50px #ff00de,
               0 0 75px #ff00de;
  }
}
</style>
</span>
<p class = "neon" ><?php echo "Your cost is $".$price ?> </div>
<h1>Sandwich </h1>
<h1> Time  </h1>
<br>
<br>
<br>
<br>

<form>
<div class="wrap">
  <div class="box">
  <button class="cta">
    <a href="#">Confirm order</a>
    <span class="shape">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </span>
  </button>
  </div>
</div>
</form>
</body>​
</html>​