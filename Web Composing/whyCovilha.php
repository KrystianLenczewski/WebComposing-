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
					
						<h1>Why Covilha? Why you should choose Universidade da Beira Interior?</h1>
			
					</header>
					<h2>Location</h2>
					<p>Located in the city of Covilhã, UBI is right in the centre of the triangle Lisbon-Oporto-Madrid. The city is in a mountainous region of extraordinary beauty and historical wealth. Situated on the southern slopes of Serra da Estrela, the highest mountain of mainland Portugal, the only place in the country with a ski resort, Covilhã has in its steep streets a distinctive feature. The staircases linking the various levels of the city are now accompanied by a modern system of lifts and funiculars of free use. Known as the "Portuguese Manchester", the city, where several companies, museums and schools are currently installed, has a vast and rich industrial heritage. The university itself has restored several of these buildings.</p>
				
					<iframe class="responsive" width="750" height="500" src="https://maps.google.com/maps?q=Covilha&t=&z=13&ie=UTF8&iwloc=&output=embed" ></iframe>
					
					<h2>Education and Research</h2>
				<p>UBI has infrastructure to support the teaching and research in all scientific areas of its formative offer. Classrooms, laboratories and libraries are equipped with the latest technologies providing students with adequate conditions for personal and scientific development.</p>
					<iframe class="responsive" width="750" height="315" src="https://www.youtube.com/embed/jD9qTQwtZs8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				
				<h2>Cost of living and safety</h2>
				<p>Because Covilhã is a city located in the inner part of the country, the cost of living is significantly lower than that of the great cities of the coast, which is reflected in the prices of food and housing, for example.

				Security is another of the factors that distinguish the city: Covilhã is a small/medium-sized city that lives around the University, creating an atmosphere of closeness very safe and cosy.</p>
				<p>The region has several public hospitals, such as the Cova da Beira Hospital Center, located next to the Faculty of Health Sciences. Covilhã has private Clinics too. The UBI offers its students free medical and nursing services. The students from European Union will need the European Health Card or health insurance. If you are not a student from EU you will need a Health Insurance.</p>
				
				
				<h2>Sports and Culture</h2>
				<p>This region has an assorted cultural offer, from built heritage to activities in the fields of music, theatre and other forms of art. UBI has a university theatre group (TeatrUBI), a chorus and six university tunas (Já B'UBI & Tokuskopus, Moçoilas, Desertuna, EncantaTuna, C'a Tuna aos Saltos, Tuna Mus) When it comes to sport, there is the possibility for students to practice several modalities in the sports clubs of the region. At UBI there are also pavilions and other enclosures for sports practice. Already considered the institution that provides the best quality of life to study and to investigate, the University of Beira Interior is assumed as a university in permanent updating and growth, whose main goals are to generate knowledge and to contribute to the economic, social and cultural development of the country.</p>
				
				</article>
				
			
			</main>
		
		</div>
	
		
		
		<div style="clear:both;"></div>
		
	</div>
	
	<h2>Comment section</h2>
	<hr>
	<div class="comments">
<?php
 
 if($_POST){
 

  $Name = $_POST['name'];
  $Comment = $_POST['comment'];


  $old = fopen("commentssection.txt", "r+t");
  $old_comments = fread($old, 1024);

  $write = fopen("commentssection.txt", "w+");
  $string = " <b>".$Name."</b><br>".$Comment."<br>\n".$old_comments;
  fwrite($write, $string);
  fclose($write);
  fclose($old);
 
}
 
 $read = fopen("commentssection.txt", "r+t");
 echo "<margin='10px'> <font color=white size='3pt'> ".fread($read, 1024);
 fclose($read);

?>
</div>
<hr>
	<footer>

	<form action="" method="POST">

   <p style="text-align:center;margin:5px;"> Name: 
    <input type="text" name="name" class="Input" style="width: 225px" required>
   <p>
   <br><br>
  <p style="text-align:center; margin:5px;"> Comment:
    <textarea rows="5"cols="30"name="comment" class="Input" style="width: 300px" required></textarea>
   <p>
   <br><br>
   <input type="submit" name="Submit" value="Submit Comment" class="Submit">

  </form>
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

