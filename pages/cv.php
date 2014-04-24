<?php require_once('../Connections/raConn.php'); 
mysql_select_db($database_raConn, $raConn); ?>

<!DOCTYPE html>
<html>
<?php include ("../includes/fonts.php");?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Ruth Angus</title>
<link href="/ra1.css" rel="stylesheet" type="text/css">
</head>


<body>
<div id="header-container-small"></div>
<?php include("../includes/topmenu.php"); ?>
<div id="page-container">
<p class = "RA_medium_name" align="center">Ruth Angus</p>

<div id="cv-block">

<h1>cv</h1>
<!-- NAME AND ADDRESS BLOCK -->

<?php 
$query_cv_mainquery = "SELECT * FROM cv_main;";
$cv_mainquery = mysql_query($query_cv_mainquery, $raConn) or die(mysql_error());

do { 
$name=$row_cv_mainquery['first_name']." ".$row_cv_mainquery['last_name'];
$address=$row_cv_mainquery['address_1']."<br /> ".$row_cv_mainquery['address_2']."<br /> ".$row_cv_mainquery['city']."<br /> ".$row_cv_mainquery['country']."<br /> ".$row_cv_mainquery['postcode'];
$email="Email: ".$row_cv_mainquery['email'];
$web=$row_cv_mainquery['website'];
$website="Website: <a href='http://www.".$web."'>".$web."</a>";
$phone="Phone: ".$row_cv_mainquery['phone'];
$dob=$row_cv_mainquery['dob'];
$statement=$row_cv_mainquery['statement'];
} while ($row_cv_mainquery = mysql_fetch_array($cv_mainquery));
?> 
<div class="addressbox">
<p><?php echo $name; ?></p>
<p><?php echo $address; ?></p>
</div>
<div class="addressbox">
<p><?php echo $email; ?></p>
<p><?php echo $website; ?></p>
<p><?php echo $phone; ?></p>
</div>
<div class="addressbox">
<p><?php echo $statement; ?></p>
</div>

<div class="separator"></div>

<!-- ACADEMIC RECORD BLOCK -->

<h2>Academic Record</h2>

<?php 
$query_ar_query = "SELECT * FROM academic_record_detail INNER JOIN academic_record ON ar_id = ac_rec_id ORDER BY ar_id DESC;";
$ar_query = mysql_query($query_ar_query, $raConn) or die(mysql_error());

while ($row_ar_query = mysql_fetch_array($ar_query)) {

$ar_date=$row_ar_query['ar_date'];
$ar_degree=$row_ar_query['ar_degree'];
$ar_institution=$row_ar_query['ar_institution']; 
$ar_record_line = $ar_date."&comma; ".$ar_degree."&comma; ".$ar_institution;

if ($ar_record_line <> $old_ar_record_line) {
?>

<p class="cvMain"><?php echo $ar_record_line; 
}
?></p>
<div class="cvDetails">
<p><?php echo $row_ar_query['ard_detail']; ?></p>
</div>


<?php 

$old_ar_record_line = $ar_record_line;

} ?>

<div class="separator"></div>

<!-- PRIZES BLOCK -->

<h2>Prizes</h2>

<?php 
$query_prizes_query = "SELECT * FROM prizes ORDER BY prizes_id DESC;";
$prizes_query = mysql_query($query_prizes_query, $raConn) or die(mysql_error());

while ($row_prizes_query = mysql_fetch_array($prizes_query)) { 
echo "<p class='cvMain'>".$row_prizes_query['prizes_year']." &mdash; ".$row_prizes_query['prize']."</p>"; 
} ?>

<div class="separator"></div>

<!-- RESEARCH EXPERIENCE BLOCK	 -->

<h2>Research Experience</h2>

<?php 
$query_research_query = "SELECT * FROM research_detail INNER JOIN research ON res_id = research_id ORDER BY res_id;";
$research_query = mysql_query($query_research_query, $raConn) or die(mysql_error());

while ($row_research_query = mysql_fetch_array($research_query)) {

$research_record_line = $row_research_query['res_date'];
if ($research_record_line <> $old_research_record_line) {
?>

<p class="cvMain"><?php echo $research_record_line; 
}
?></p>
<div class="cvDetails">
<p><?php echo $row_research_query['research_item']; ?></p>
</div>


<?php 

$old_research_record_line = $research_record_line;

} ?>

<div class="separator"></div>

<!-- PUBLICATIONS BLOCK	 -->

<h2>Publications</h2>

<?php 
$query_publications_query = "SELECT * FROM publications ORDER BY pub_id DESC;";
$publications_query = mysql_query($query_publications_query, $raConn) or die(mysql_error());

while ($row_publications_query = mysql_fetch_array($publications_query)) { 
echo "<p class='cvMain'>".$row_publications_query['pub_date']." &mdash; ".$row_publications_query['pub_title']."</p>"; 
echo "<p class='cvDetails'>".$row_publications_query['pub_authors']."</p>";
} ?>

<div class="separator"></div>

<!-- OBSERVING BLOCK	 -->

<h2>Observing experience</h2>

<?php 
$query_observations_query = "SELECT * FROM observing ORDER BY obs_id DESC;";
$observations_query = mysql_query($query_observations_query, $raConn) or die(mysql_error());

while ($row_observations_query = mysql_fetch_array($observations_query)) { 
echo "<p class='cvMain'>".$row_observations_query['obs_date']."</p>"; 
echo "<p class='cvDetails'>".$row_observations_query['obs_detail']."</p>";
} ?>

<div class="separator"></div>

<!-- TEACHING BLOCK	 -->

<h2>Teaching experience</h2>

<?php 
$query_teaching_query = "SELECT * FROM teaching ORDER BY teaching_id DESC;";
$teaching_query = mysql_query($query_teaching_query, $raConn) or die(mysql_error());

while ($row_teaching_query = mysql_fetch_array($teaching_query)) { 
echo "<p class='cvMain'>".$row_teaching_query['teaching_date']."</p>"; 
echo "<p class='cvDetails'>".$row_teaching_query['teaching']."</p>";
} ?>

<div class="separator"></div>

<!-- TALKS BLOCK	 -->

<h2>Talks</h2>

<?php 
$query_talks_query = "SELECT * FROM talks_detail INNER JOIN talks ON talks_id = talks_main_id ORDER BY talks_detail_id DESC;";
$talks_query = mysql_query($query_talks_query, $raConn) or die(mysql_error());

while ($row_talks_query = mysql_fetch_array($talks_query)) {

$talks_record_line = $row_talks_query['talks_subject'];
if ($talks_record_line <> $old_talks_record_line) {
?>

<p class="cvMain"><?php echo $talks_record_line; 
}
?></p>
<div class="cvDetails">
<p><?php echo $row_talks_query['talks_detail_date']." &mdash; ".$row_talks_query['talks_detail_location']; ?></p>
</div>


<?php 

$old_talks_record_line = $talks_record_line;

} ?>

<div class="separator"></div>

<!-- PUBLIC TALKS BLOCK	 -->

<h2>Public talks and performances</h2>

<?php 
$query_public_query = "SELECT * FROM public_talks ORDER BY public_talks_id DESC;";
$public_query = mysql_query($query_public_query, $raConn) or die(mysql_error());

while ($row_public_query = mysql_fetch_array($public_query)) { 
echo "<p class='cvMain'>".$row_public_query['public_talks_date']." &mdash; ".$row_public_query['public_talks_title']."</p>";
} ?>

<!-- BOTTOM OF PAGE	 -->
</div>
</div>
<?php include ("../includes/botmenu.php");?>


</body>
</html>
