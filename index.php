<?php
if(isset($_GET['controller'])&&isset($_GET['action']))
{	$controller = $_GET['controller'];
	$action = $_GET['action'];
}else
{	$controller = 'pages';
	$action = 'home';
}
?>
<!doctype html>
<html><head><meta http-equiv="Content-Language" content="th"> 
<meta http-equiv="content-Type" content="text/html; charset=window-874"> 
<meta http-equiv="content-Type" content="text/html; charset=tis-620"> </head>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
</style>
   
   
</head>
<body>
<?php  echo"<br>"; ?>
<?php  echo"<br>"; ?>
<?php  echo "controller = ".$controller." ,action = ".$action."<br>";
?>
<body background="london.jpg">
		<div class="w3-top">
  <div class="w3-row w3-medium w3-black">
    <div class="w3-col s1">
      <a href="?controller = pages&action=home"& class="w3-button w3-block">HOME</a>
    </div>

    <div class="w3-col s1">
       <a href="?controller=report&action=addNumber "& class="w3-button w3-block">REGISTER</a>
    </div>
    <div class="w3-col s1">
       <a href="?controller=report&action=bill_search "& class="w3-button w3-block">BILL </a>
    </div>
    <div class="w3-col s1">
      <a href="?controller=report&action=current "& class="w3-button w3-block">CURRENT </a>
    </div>
    <div class="w3-col s1">
       <a href="?controller=report&action=history "& class="w3-button w3-block">HISTORY</a>
    </div>
    
     <div class="w3-col s1">
       <a href="?controller=staff&action=index "& class="w3-button w3-block">STAFF</a>
    </div>
  </div>
</div>
	</header>
	<?php require("routes.php");?>
</body>
<html>
