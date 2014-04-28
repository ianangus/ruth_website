<!DOCTYPE html>
<html>
<?php include ("../includes/fonts.php");?>
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
#header-container-small {
background-image: url(/images/graphs/<?php echo $headerBG ;?>); /* HEADER IMAGE */
	background-repeat:repeat-x;	
	background-attachment:fixed;
	background-position: 0px -100px; /* SLIDE UNDERLYING IMAGE UP OR DOWN */
}
-->
</style>

</head>


<body>
<div id="header-container-small"></div>
<?php include("../includes/topmenu.php"); ?>
<div id="page-container">
<p class = "RA_medium_name" align="center">Ruth Angus</p>

<div id="blog-block">

<h1>.Astronomy</h1>
<p>It's a conference for astronomers and hackers and is a place where
things <i>happen</i>. I went along to .Astronomy (dotAstronomy) this year, excited,
but also a little nervous about my ability to contribute: my coding
skills are limited to Python, and I am about as web savvy as
<a href="http://www.thewisesthuman.com">this guy</a>. In spite of
these trepidations, I had the best conference experience <i>ever</i>.</p>

<p>The first day consisted of a few talks, including Stuart Lynn on the
Zooniverse, 'astroblogging' by Elizabeth Newton, and David Hogg on
Astrometry.net <a href="http://www.youtube.com/results?search_query=dotastro5&oq=dotast&gs_l=youtube.1.0.35i39j0l2j0i10l7.605.1664.0.3135.8.7.1.0.0.0.163.792.3j4.7.0...0.0...1ac.1.11.youtube.zEOGn7L3K5w" target="blank">(videos online)</a>,
followed by unconference sessions. For these sessions participants
propose
a topic on which to run a short discussion/demonstration/brainstorm,
or whatever,
and others vote for the sessions they would like to attend and then
do so. Unconference topics ranged from `How to speak up for diversity
without becoming "that person"', to open journals and outreach feedback metrics.</p>
<p> But .Astronomy was, for me anyway, <i>all</i> about day 2: the
hack day.
It begins with a sequence of two minute pitches: anyone with an idea
for a hack stands up and sells it (although hack pitchers are not
obliged themselves to work on their own hack).
Many hacks were pitched, many of which were taken up,
many of which left abandoned and many of which evolved and merged into new hacks. 
</p>

<p> I decided to start working with a team on interactive plotting -
a project named 'd3po': brilliant. The idea was
to take some data (here supplied by Elizabeth Newton), which had been
awkwardly plotted (sorry, Ellie) with different panels, different
colours,
different contour lines, etc, and create a beautiful and versatile interactive plotting environment.  </p>

<p> Although this was the project I had intended to work on, I ended
 up getting
distracted by another hack. Niall Deacon had pitched earlier
 requiring
somebody with drawing skills to create a video for his song about
 naming exoplanets: `Don't call me Colin'. I volunteered for the task
 and we spent most of the rest of the afternoon devising
the cartoon animations. Once devised and storyboarded we began
 filming. I don't
think Niall will mind my saying that neither of us really had a clue
 about how to film the video - we made a <i>lot</i> of mistakes along
 the way that cost us many extra sheets of paper out
of an alarmingly dwindling pad (actually three sheets were used per
 take, owing to the over-zealousness of the Sharpie). After a few hours
 of filming, a few glasses of wine and a few slices of
pizza, we wrapped and Niall went off to post-produce. (Which he did in
 <i>super</i>-
fast time btw... editing genius?). 
 </p>

<p> Meanwhile, another hack was being hacked upon simultaneously by
 some of
the zooniverse folk: sexy serenghetti. It has a face-mash type premise
(face-mash - the Zuckerberg proto-facebook), i.e. you are presented
 with two photographs of safari animals, from the Zooniverse project:
 <a href="http://www.snapshotserengeti.org" target="blank">Snapshot Serenghetti</a>, and have to decide which
you like better. This is relevant... I'll come back to it later.</p>

<p> Whilst 'Don't call me Colin' was being rapido-edited by Deacon,
I contributed to yet another hack... Earlier in the day we heard from
Stuart Lynn about the Zooniverse. He described something called a
confusion matrix with a brilliant analogy about Hipsters: `Hipster
or Bro'<sup>1</sup>, where a citizen scientist is shown an image of either a
hipster
or a bro and is asked to decide which it is. The idea is that you can use
your knowledge of whether the image really does contain a hipster or a
bro to assess the classification skills of the citizen. This powerful
analogy stole the imaginations of all attendees of the most hipster
conference in astronomy.</p>
<p>THE OBVIOUS CONSEQUENCE: <a href="http://hipseter-mash.herokuapp.com" target="blank">HIPSTER MASH</a>.</p>
<p>To create a sexy serenghetti, face mash, Hipster or Bro hybrid, photos
of conference attendees were taken (many wearing suspiciously similar
glasses and one -Rob Simpson- suspiciously wearing no glasses) and
uploaded to Hipster Mash to be ranked in order of Hipsterness by those
same attendees. The results of Hipster Mash are still eagerly
awaited...<sup>2</sup>
I'm pretty sure that some dollar is at stake on the tight-trousered, artisanal-coffee-drinking NYC crew. </p>

<p> As the late-night-hackers got more bleary and beery-eyed,
hacks came together and conference members drifted home. 
 <p/>

<p> The morning of day 3: hack presentations. If the hack day
itself is the number one reason to attend .Astronomy, the hack
day presentations are the second - and if you haven't yet found
the videos online, you should <i>definitely</i> <a href="http://www.youtube.com/results?search_query=dotastro5&oq=dotast&gs_l=youtube.1.0.35i39j0l2j0i10l7.605.1664.0.3135.8.7.1.0.0.0.163.792.3j4.7.0...0.0...1ac.1.11.youtube.zEOGn7L3K5w" target="blank">check these out</a>.
Highlights include <a href="http://d3po.org">d3po</a>, sexy
serenghetti, <a href="http://astro4astro.org">astro4astro</a>, <a href="https://twitter.com/Zoonibot" target="blank">the zoonibot</a>
and more. Dan Foreman-Mackey's hack was highly accoladed (and not
just because he nearly broke NASA ADS) - he created a <a
href="http://bbq.dfm.io/~dfm/dotastro/ target="blank"">sick map</a> of the
career trajectories of each participant of the conference. 'Don't
call me Colin' went down a storm: <a
href="http://weareallinthegutter.wordpress.com/2013/09/18/dont-call-me-colin/ target="blank"">check the video</a>. Also, Stuart Lynn
used a Kinect to demonstrate Doppler shift which worked seriously
well and featured heavily in post-conference dinner antics.  </p>

<p> A few more talks, one with an unexpected cameo from the
zoonibot, and a few more unconference sessions before Tony Hey's
inspirational keynote later that day. BTW, he went to Southampton
University too... just sayin'.  </p>

<p> After the keynote we headed back to the hotel for the conference
 dinner, speeches, more videos and <i>of course</i>
the fantastic sensitivity of Lynn's kinect was
used to demonstrate Hogg's disturbing popping and locking skills. </p>

<p> Unfortunately, all good things come to and end and after
a few dark and stormys in a (continually?) Halloween-themed pub after dinner, end it did. 
 </p>

<p> I had <i>such</i> a fantastic time at this conference -
I will definitely apply again next year and would encourage
others to do so. DO IT; you won't be disappointed, even if you don't
think of yourself as a coder.</p> 
 
<p>NOTE:- you <i>will</i> have to get a higher ranking than Simpson on Hipster Mash to be considered.</p> 

<div class="separator"></div>

<p><sup>1</sup> Hipsters are intrinsically difficult to define, which
is the whole reason for inventing a Hipster or Bro classification
scheme. If you want a hipster's
definition of a hipster, look it up in the <a
href="http://www.urbandictionary.com/define.php?term=hipster" target="blank">urban
dictionary</a>. Bro's are a little easier to pin down - UD definition <a
href="http://www.urbandictionary.com/define.php?term=bro" target="blank">here</a>.</p>
<p><sup>2</sup> Will post back here if and when results come out. </p> 

</p>
</div>
</div>

<?php include ("../includes/botmenu.php");?>

</body>
</html>
