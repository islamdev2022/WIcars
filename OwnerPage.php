<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type ="image/png" href="Images for DAW project/_f1deaa04-76e0-4080-b394-ae7456455591-removebg-preview.png">
	<title>Car Upload</title>
	<script src="OwnerPage.js" defer></script>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500&display=swap');
		body {
			background-color: #f2f2f2;
			margin: 0px;
			
		}

		form {	
			background-color: #fff;
			border-radius: 10px;
			font-family: "Poppins" , sans-serif;
		}

		table {
			width: 100%;
			border-collapse: collapse;
		}

		td {
			padding: 10px 10px 5px 10px;
			font-size: 16px;
			border-bottom: 2px solid blue;
		}

		tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		tr:nth-child(odd) {
			background-color: #fff;
		}

		label {
			font-weight: bold;
			margin-right: 10px;
		}

		input[type="text"],
		input[type="number"],
		input[type="file"] {
			padding: 5px;
			border-radius: 5px;
			border: 1px solid #ccc;
			font-size: 16px;
			width: 100%;
			box-sizing: border-box;
		}
		input[type="text"]:focus ,input[type="number"]:focus{
			outline: none;
			border: 2px solid blue;
            box-shadow: 0px 0px 5px 0px blue;
		}

		select {
			width: 100%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			font-size: 16px;
			color: #555;
			background-color: #fff;

		}

		button[type="submit"] {
			margin-top: 10px;
			padding: 10px 20px;
			background-color: blue;
			color: #fff;
			font-size: 18px;
			border: none;
			border-radius: 20px;
			cursor: pointer;
			transition: background-color 0.3s;
		}

		button[type="submit"]:hover{
			
			box-shadow: 0 0 10px rgb(66, 66, 243);
		
		}
		#back{
			position: absolute;
			right:10%;
			bottom:13.6%;
			font-size: 20px;

		}
		#delete{
			position: absolute;
			left :9%;
			bottom:13.6%;
		}
		#back:hover,#delete:hover,#deleteAcc:hover{
			box-shadow: 0 0 10px rgb(66, 66, 243);
		}
		#deleteAcc{
			position: absolute;
			left: 91%;
			height: 50px;
			padding: 0;
			
		}
		a{
			border: solid blue;
			width: 100px;
			height: 31.5px;
			text-align: center;
			padding-top:5px ;
			text-decoration: none;
			color: white;
			border-radius: 20px;
			background-color: blue;
		}
		@media (max-width:400px){
			body{
				margin-left: -2px;
                margin-right: -53px;
			}
			#back{
				position: absolute;
				left: 66%;
				bottom:-16%;
				font-size: 15px;
				padding-top: 2%;
				width:20%;
			}
			#delete {
             position: absolute;
             left: 32%;
             bottom:-16%;
			 font-size: 15px;
				width:32%;
			}
		}
	</style>
</head>

<body>
	<form method="post" action="" autocomplete="on" enctype="multipart/form-data" onsubmit="return validateForm()">
		<table>
			<tr>
				<td><label for="nom"><b>Nom et prenom :</b></label></td>
				<td><input type="text" id="name" name="name"></td>
			</tr>
			<tr>
				<td><label for="tel"><b>Numero de telephone (+213):</b></label></td>
				<td><input type="number" id="tel" name="tel"></td>
			</tr>
			<tr>
				<td><label for="marque"><b>Marque :</b></label></td>
				<td><input type="text" id="marque" name="marque"></td>
			</tr>
			<tr>
				<td><label for="nom"><b>Nom :</b></label></td>
				<td><input type="text" id="nom" name="nom"></td>
			</tr>
			<tr>
				<td><label for="prix"><b>Prix (DA) :</b></label></td>
				<td><input type="number" id="prix" name="prix"></td>
			</tr>
			<tr>
				<td><label for="moteur"><b>Moteur :</b></label></td>
				<td>
					<select id="moteur" name="moteur">
						<option value="essence">Essence</option>
						<option value="diesel">Diesel</option>
						<option value="hybrid">Hybrid</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><label for="Carat"><b>Caratéristique :</b></label></td>
				<td><input type="text" id="Carat" name="Carat"></td>
			</tr>
			<tr>
				<td><label for="Description"><b>Description :</b></label></td>
				<td><input type="text" id="Description" name="Description"></td>
			</tr>
			<tr>
				<td><label for="image1"><b>Image 1 :</b></label></td>
				<td><input type="file" id="image1" name="image1" accept=".jpg, .jpeg, .png"></td>
			</tr>
			<tr>
				<td><label for="image2"><b>Image 2 :</b></label></td>
				<td><input type="file" id="image2" name="image2" accept=".jpg, .jpeg, .png"></td>
			</tr>
			<tr>
				<td><label for="image3"><b>Image 3 :</b></label></td>
				<td><input type="file" id="image3" name="image3" accept=".jpg, .jpeg, .png"></td>
			</tr>
		</table>

		<button type="submit" name="add">Add Car</button>
		<a id="back" href="MainPage.php">Back</a>
		<a id ="delete"href="delete.php">Delete Car</a>
		<a id="deleteAcc" href="deleteACC.php">DELETE ACCOUNT</a>
	</form>

</body>

</html>

<?php

# database connection file
include 'db.conn.php';

if (isset($_POST["add"])) {
	$name = $_POST["name"];
	$num = $_POST["tel"];
	$marque = $_POST["marque"];
	$nom = $_POST["nom"];
	$moteur = $_POST["moteur"];
	$carat = $_POST["Carat"];
	$prix = $_POST["prix"];
	$Description = $_POST["Description"];

	//IMAGE 1
	$IMG1 = $_FILES["image1"]["name"];
	$fileSize = $_FILES["image1"]["size"];
	$tmpName1 = $_FILES["image1"]["tmp_name"];
	//IMAGE 2
	$IMG2 = $_FILES["image2"]["name"];
	$fileSize = $_FILES["image2"]["size"];
	$tmpName2 = $_FILES["image2"]["tmp_name"];
	// IMAGE 3
	$IMG3 = $_FILES["image3"]["name"];
	$fileSize = $_FILES["image3"]["size"];
	$tmpName3 = $_FILES["image3"]["tmp_name"];

	move_uploaded_file($tmpName1, 'uploads/' . $IMG1);
	move_uploaded_file($tmpName2, 'uploads/' . $IMG2);
	move_uploaded_file($tmpName3, 'uploads/' . $IMG3);

	$query1 = mysqli_query($conn, "INSERT INTO `all cars` (`Nom et Prenom`,`Numero telephone`,`Marque`, `Nom`, `prix`, `Moteur`, `Carateristique`, `Description`, `img1`, `img2`, `img3`) 
	VALUES ('$name','$num','$marque','$nom','$prix','$moteur','$carat','$Description','$IMG1','$IMG2','$IMG3')");
    echo '<script>alert("YOU HAVE SUCESSFULLY ADDED THE CAR!!") </script>';
}

?>