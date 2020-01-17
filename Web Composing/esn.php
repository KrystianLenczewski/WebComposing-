<!DOCTYPE html>
<html lang="en">
<head>

	
	<meta charset="utf-8">
	<title>Erasmus in Covilha</title>
	<meta name="description" content="Page about spending eramus in Covilha">
	<meta name="keywords" content="Erasmus, Covilha, Portugal, students">
	<meta name="author" content="Krystian Lenczewski Tomasz Zawistowski">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1">
	<link rel="shortcut icon"type="image/png"href="img/icon.png">
	<link rel="stylesheet" href="style.css">
	
</head>

<body>

	<header>
	
		<h1 class="logo"><img src="img/pad.png" style="float: center; margin-right:10px;"/>Erasmus in Covilha</h1>
		
		</header>
	
			
		<nav id="topnav">
		
			<ul class="menu">
				<li><a href="index.html">Main page</a></li>
				<li><a href="whyCovilha.php">Why Covilha?</a></li>
				<li><a href="#">University</a>
				<ul>
						<li><a href="healthscience.html">Faculty of health sciences</a></li>
						<li><a href="arts.html">Faculty of arts and letters</a></li>
						<li><a href="social.html">Faculty of human sciences</a></li>
						<li><a href="facultyofengineering.html">Faculty of engineering </a></li>
					</ul>
				</li>
				<li><a href="interesting_place.html">Interesting place </a></li>
				<li><a href="#">ESN </a>
				<ul>
						<li><a href="esn.php">What is ESN?</a></li>
						<li><a href="esnCovilha.html">ESN Covilha</a></li>
					</ul>
				
				
				</li>
			</ul>
			
		</nav>
	
	
	
	<div class="container">
	
		<div class="west">
		
			<main>
			
				<article>
				
					<header>
					
						<h1>ESN / Aims / Principles Who are we for?</h1>
			
					</header>
					<p>Erasmus Student Network (ESN) is one of the biggest interdisciplinary student associations in Europe, founded in 1989 for supporting and developing student exchange. We are present in over 500 Higher Education Institutions from all over the world. The network is constantly developing and expanding. ESN is working in Higher Education (HE): offering services to 150.000 students, mainly on a volunteer basis, with an average annual growth rate of 12,3% since 1990.</p>
					
				
					<img class="responsive" src="img/esn.jpg" alt="city">
					
					<p>ESN is operating on three levels: local, national and international.
                    ESN works for the creation of a more mobile and flexible education environment by supporting and developing the student exchange on different levels, and providing an intercultural experience also to those students who cannot access a period abroad ("internationalisation at home").</p>
					<p>A school-factory was built by Fernando de Meneses, 2nd Count of Ericeira, in 1681. On November 1, 1755, Covilhã was shaken by the forces of the 1755 Lisbon earthquake that destroyed part of Covilhã's castle walls and its large towers. A Royal Textile Factory, was established in the city by the Marquis of Pombal in 1763, and Covilhã was granted city status on 20 October 1870 by king Luís I of Portugal. Along the two streams that cross the city there are still remains of the old textile factories, which bear witness to the unquestionable importance of this industry for Covilhã's economy, once known as the "Portuguese Manchester".</p>
					
					<iframe class="responsive" width="750" height="315" src="https://www.youtube.com/embed/WHJ742GAUZI" frameborder="0" ></iframe>
					<p>In synthesis, ESN: works in the interest of international students works to improve the social and practical integration of international students represents the needs and rights of international students on the local, national, and international level provides relevant information about mobility programmes motivates students to study abroad works with the reintegration of homecoming students contributes to the improvement and accessibility of student mobility cares about its members values volunteering and active citizenship</p>
					<p>Homecoming students The students who are returning from an exchange are being supported in the reintegration process in their home countries by keeping contact with an international environment. Many local sections are set up by former exchange students, often because they have had good experiences from their exchange period or because they felt a lack of help during their exchange. They also understand better the issues and challenges in a foreign environment. Exchange students However, the main focus of ESN is placed on current exchange students, who often face problems (and feel abandoned) in their new environments. Therefore, ESN offers help in the academic, social and practical integration process. This is mainly done through activities in the local sections, which include cultural and social events such as trips to various places within the country, film nights, language projects, international food festivals and last, but not least, parties. In addition to that, many sections have introduced mentor systems, which help the international students mainly in academic and practical integration. ESN also provides relevant information and encourages the future exchange students to gain the international experience and gain relevant insight into different cultures.</p>
					
				
				</article>
				
			
			
			</main>
		
		</div>
	
		<div class="east">
		
			<aside>
			
				<nav>
				
<?php
	$file = fopen("table.txt", "r") or die("Unable to open file!");

	echo "<table>";
	echo "<h5>Statistic</h5>";
	while(!feof($file)) {
  
	echo "<tr><td width='600' bgcolor='#213A3F' border='1'cellpadding='10px'>";
	echo fgets($file) . "<br>";
	echo "</td></tr>";
	}
	echo "</table>";
	fclose($file);
?>
	</nav>
				
				
			
			</aside>
		
		</div>
		
		<div style="clear:both;"></div>
		
	</div>
	
	<footer>
	
		
		
		<div class="footeresn">
			Tomasz Zawistowki Krystian Lenczewski | Erasmus 2019 
		</div>
	
	</footer>
	<script>
	window.onscroll = function() {sticky_menu()};

	var topnavbar = document.getElementById("topnav");
	var sticky = topnavbar.offsetTop;

	function sticky_menu() {
	if (window.pageYOffset >= sticky) {
    topnavbar.classList.add("sticky")
	} else {
    topnavbar.classList.remove("sticky");
	}
	}

	</script>
</body>
</html>