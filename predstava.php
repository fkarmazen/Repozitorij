<!DOCTYPE html>
<html>
<head>
	<title>Predstave</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="stil.css">
	<link rel="stylesheet" href="css/grid.css" />
	<link rel="stylesheet" href="css/normalize.css" />

	<script>
				function toggleButton(){
					var nav = document.getElementById("nav");
					nav.style.height = window.innerHeight - 60 + "px";
					if(nav.style.right == "0px"){
						nav.style.right = "-460px";
					} else {
						nav.style.right = "0px";
					}
				}
	</script>

</head>
<body>
	<div class="row">
		<header>

			<div class="button" onclick="toggleButton()">
				<div></div>
				<div></div>
				<div></div>
			</div>

			<nav id="nav">
				<ul>
					<li><a href="kazaliste.html">Home</a></li>
					<li><a href="onama.html">O nama</a></li>
					<li><a href="#">Kupovina - USKORO</a></li>
				</ul>
					
			</nav>
			
			<div class="logo">
				<a href="kazaliste.html" ><img src="predstave/logo.png" alt="skazaliste logo"></img></a>
			</div>
		</header>

		<div class="main ">
			<?php
						$predstave = $conn->query('SELECT * FROM predstave');
						foreach ($predstave as $row) {
					        echo '<a href="predstava.php?id=' . $row["naziv_predstave"] .'</br></br>Opis predstave: </br>' . $row["opis_predstave"] . '</br></br>Glumci su: </br>'.$row["glumci"].'</a>';
					    }
					?>
		</div>

		<footer>
			<p>Copyright Filip Karmazen d.o.o.</p>
		</footer>
	</div>
</body>
</html>
