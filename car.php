
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type ="image/png" href="Images for DAW project/_f1deaa04-76e0-4080-b394-ae7456455591-removebg-preview.png">
	<title>Car Description Table</title>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500&display=swap');
		body{
			font-family: "Poppins" , sans-serif;
		}
		table {
			border-collapse: collapse;
			max-width: 500px;
			margin: 0 auto;
			background-color: #fff;
			color: #333;
			display: flex;
			flex-wrap: wrap;
			flex-direction: column;
			table-layout: fixed;
			
		}
		th, td {
			text-align: left;
			padding: 8px;
			
			max-width: 340px;
			flex: 1 0 0;
		}
		th {
			background-color: blue;
			color: white;
			border-radius: 20px;
		}
		img {
			max-width: 100%;
			height: auto;
		}
		.imgs td{
			background-color: blue;		
		}
		.imgs tr{
			border: transparent;
		}
		.imgs{
			position: relative;
			left: 24%;
		}
		.infos{
			position: absolute;
			top: 25%;
			right: 60%;
		}
		.all{
			display: flex;
			
		}

		/* Responsive styles for smaller screens */
		@media (max-width: 1000px) {
			
			.imgs{
				position: absolute;
		    	top: 30%;
			    right: 30%;
			}
			.infos{
				position: absolute;
                right: 26%;
				top :7%;
				width: 100%;
			}
		}
	</style>
</head>
<body>

<?php
include 'db.conn.php';
if (isset($_GET['idv'])){
	$id=$_GET['idv'];
	$query=mysqli_query($conn, "SELECT * from cars where IDV = $id "); 
	$row = mysqli_fetch_assoc($query);
}
?>


	<h2 style="text-align:center; color: blue;"><b>Car Description Table</b></h2>
<div class= "all">
	<table class= "infos">
		<thead>
			<tr>
				<th>Nom et Prenom : </th>
				<td><?=$row['Nom et Prenom']?></td>
			</tr>
			<tr>
				<th>Numero telephone(+213) : </th>
				<td><?=$row['Numero telephone']?></td>
			</tr>
			<tr>
				<th>Marque : </th>
				 <td><?=$row['Marque']?></td>
			</tr>
			<tr>
				<th>Modele : </th>
				<td><?=$row['Nom']?></td>
			</tr>
			<tr>
				<th>Prix : </th>
				<td><?=$row['prix']?> DA</td>
			</tr>
			<tr>
				<th>Moteur : </th>
				<<td><?=$row['Moteur']?></td>
			</tr>
			<tr>
				<th>Carateristique : </th>
				<td><?=$row['Carateristique']?></td>
			</tr>
			<tr>
				<th>Description : </th>
				<td><?=$row['Description']?></td>
			</tr>
		</thead>
		</table>
		<table class="imgs">
			<thead>
			<tr>
				
				<td><img src="uploads/<?=$row['img1']?>" alt="Car Image 1"></td>
			</tr>
			<tr>
				
				<td><img src=uploads/<?=$row['img2']?> alt="Car Image 2"></td>
			</tr>
			<tr>
				
				<td><img src="uploads/<?=$row['img3']?>" alt="Car Image 3"></td>
			</tr>
		</thead>
	</table>
</div>
</body>
</html>
