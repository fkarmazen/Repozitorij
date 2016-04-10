<?php 
	//connection to the database
	$dbhandle = mysqli_connect('localhost', 'root', 'root', 'predstaveDB') or die("Unable to connect to MySQL");
	//echo "Connected to MySQL<br>";


	$popis = mysqli_query($dbhandle,"SELECT * FROM predstave");
	$rez = mysqli_fetch_array($popis);	

	

 ?>
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
						$sql = "SELECT id, firstname, lastname FROM MyGuests";
						$result = $conn->query($sql);

						if ($rez->num_rows > 0) {
						    // output data of each row
						    while($row = $rez->fetch_assoc()) {
						        echo "id: " . $row["id"]. " - Naziv predstave: " . $row["naziv_predstave"]. "</br>Opis predstave:  " . $row["opis_predstave"]. "<br> glumci: ". $row["opis_predstave"] . "</br> Slike s predstave:" . $row["slike"];
						    }
						} else {
						    echo "0 results";
					?>
		</div>

		<footer>
			<p>Copyright Filip Karmazen d.o.o.</p>
		</footer>
	</div>
</body>
</html>
