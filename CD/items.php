
<!DOCTYPE html>
<html>
<head>
	
	<title>CLR Parser</title>

	

	<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link href="css/style3.css" rel="stylesheet" type="text/css" media="all" />
	  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 <link rel="css/bootstrap.min.css">
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

	<link rel="stylesheet" type="text/css" href="css/animate.css"/>



<script src="js/jquery.min.js"></script>

<script type="text/javascript" src="js/move-top.js">
		</script>
	

	  <script src="js/bootstrap.min.js"></script>


	<script type="text/javascript" src="js/wow.js"></script>
	<script src="js/wow.min.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
		</script>

	<script>
 new WOW().init();
</script>


<script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});

$(document).ready(function(){
    $("#flip2").click(function(){
        $("#panel2").slideToggle("slow");
    });
});
</script>




  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
	
}


#panel, #flip ,#panel2,#flip2{
    padding: 30px;
    text-align:center; 
        background-color:#484848;  font-style:bold;
        font-size: 14pt; letter-spacing: 6px;
  color: Coral;
   
    border: solid 4px NavajoWhite;
}

#panel, #panel2{
    padding: 60px;
    display: none;
}



  </style>

</head>
<body>


	<!--  Header Section  -->
	<header>
		<div class="container">
			<div class="logo pull-left animated wow fadeInLeft">
				<img src="images/logo.jpg" height="80px"  width="65px" alt="" title="" >CLR PARSER				 
			</div>

		
			<nav class="pull-right">
				<ul class="list-unstyled">	
					<li class="animated wow fadeInLeft" data-wow-delay=".1s"><a href="about.html">About</a></li>	
					<li class="animated wow fadeInLeft" data-wow-delay=".1s"><a href="algo.html">Algorithm</a></li>				
					<li class="animated wow fadeInLeft" data-wow-delay=".1s"><a href="http://github.com/deepakjayaprakash/Emulator-for-CLR-Parser">GitHub</a></li>
					<li class="animated wow fadeInLeft" data-wow-delay=".1s"><a href="start.html">Start</a></li>
				</ul>
			</nav>

			<span class="burger_icon">menu</span>
		</div>
	</header>
	<!--  End Header Section  -->

<div class="banner2">
 <div class="container">

 <div id="flip">LR(1) item sets generated</div>
<div id="panel">

<?php

/* 1-states
2- terminals
3- parsing table
4-non terminals
5- input parsing
7- grammar
*/
$choice=$_REQUEST['items'];

if($choice==1)
 $res=shell_exec("C:/xampp/htdocs/CodeProject.Syntax.LALR/CD_grammar1/bin/Debug/CD_grammar1.exe 1 acede$");
else if($choice==3)
	$res=shell_exec("C:/xampp/htdocs/CodeProject.Syntax.LALR2/CD_grammar1/bin/Debug/CD_grammar1.exe 1 abc$");
else if($choice==2)
	$res=shell_exec("C:/xampp/htdocs/CodeProject.Syntax.LALR3/CD_grammar1/bin/Debug/CD_grammar1.exe 1 101$");



$split = array();
$state = array();
$temp = array();
 $split=explode("States", $res);
 //print_r( $split);

 $temp=explode("InputParsing", $split[1]);
 //print_r( $temp);

 $state=explode("State", $temp[0]);
 // print_r( $state);

echo '
<div class="container">
  <h2>Items</h2>
  <table class="table table-hover">
   
    <tbody>';

    




  foreach ($state as $key) {
  	print("<tr><td>".$key."</tr></td>");
  
   } 


   echo ('</tbody>
  </table>
</div>');



 	?>	
</div>
</div>
 </div>
 </div>

</body>


</html>
