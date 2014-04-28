<!DOCTYPE html>
<?php include ("includes/fonts.php");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Ruth Angus</title>
<link href="/ra1.css" rel="stylesheet" type="text/css">

<?php 
$numberOfGraphs = 5;
$BGcount = rand ( 1 , $numberOfGraphs);
$headerBG = "graph".$BGcount.".png" ;?>
<style type="text/css">
<!--
#header-container {
background-image: url(images/graphs/<?php echo $headerBG ;?>); /* HEADER IMAGE */
	background-repeat:repeat-x;
}
-->
</style>
</head>


<body>
<div id="header-container"></div>
<?php include("includes/topmenu.php"); ?>
<div id="page-container">
<p class = "RA_big_name" align="center">Ruth Angus</p>


<p class = "homePageStatement" align="center">Ruth is a British PhD student researching exoplanets <br />
  at Oxford University </p>







</div>

</body>
</html>
