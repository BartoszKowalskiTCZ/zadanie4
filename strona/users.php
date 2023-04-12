<html lang="pl">
<head>
	<meta charset="UTF-8">
	<title>Panel administratora</title>
	<link href="styl4.css" rel="stylesheet">
</head>
<body>
	<?php
 $con = new mysqli("localhost", "root", "", "dane4");
	?>
	<div class="baner">
		<h4>portal spolecznosciowy - Panel administratora</h4>
	</div>
	<main>
		<div class="lewy">
			<h4>Użytkownicy</h4>
			<?php
			$sql = "SELECT `id`, `imie`, `nazwisko`, `rok_urodzenia`, `zdjecie` FROM `osoby` AS `o` WHERE 1 LIMIT 30;";
			$res = mysqli_query($con, $sql);
			if (mysqli_num_rows($res) > 0) {
				while($r = mysqli_fetch_assoc($res)){
					$lat = date("Y") - $r["rok_urodzenia"];
					echo "<p>" . $r["id"] . ". " . $r["imie"] . " " . $r["nazwisko"] . ", " . $lat . " lat</p>";
				}
			?>
			<a href="settings.php">Inne ustawienia</a>
			<?php mysqli_free_result($res); ?>
		</div>
		<div class="prawy">
			<h4>Podaj id użytkownika</h4>
			<form method="POST" action="./users.php">
				<input type="number" name="id" required>
				<button type="submit">ZOBACZ</button>
			</form>
			
			<?php
			if(isset($_POST["id"]) && !empty($_POST["id"])){
				$sql = "SELECT o.imie, o.nazwisko, o.rok_urodzenia, o.opis, o.zdjecie, h.nazwa FROM osoby as o JOIN hobby as h ON h.id = o.Hobby_id WHERE o.id =" . $_POST["id"] . ";";
				$res = mysqli_query($con, $sql);
				if (mysqli_num_rows($res) > 0) {
					while($r = mysqli_fetch_assoc($res)){
						echo "<h4>" . $_POST["id"] . ". " . $r["imie"] . " " . $r["nazwisko"] . "</h4>";
						echo "<img src='" . $r["zdjecie"] . "' alt='" . $_POST["id"] . "'>";
						echo "<p>Rok urodzenia: " . $r["rok_urodzenia"] . "</p>";
						echo "<p>Opis: " . $r["opis"] . "</p>";
						echo "<p>Hobby: " . $r["nazwa"] . "</p>";
					}
				} 
            }
            }
            
			?>
        </div>
        <div class="stopka">
             Strone wykonal: Bartosz kowalski
             </div>
        <?php
                $con->close();
                ?>
    </main>
    </body>
</html>
