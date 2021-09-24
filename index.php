<?php
	include('musica.php');
	$sql='SELECT * FROM album ORDER BY year ASC';
	$result=mysqli_query($conn,$sql) or die("error");
	$conn->close();
?>


<html>
	<title>
		HIM
	</title>
	
	<style>
	body {
			background-image: url(https://images4.alphacoders.com/162/162206.jpg);
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
	}
		
	table { 
			width:80%;background-color: #aa83b1;
	}
	
	h1 {
			font-size: 60px;line-height: 1;display: initial;
	}
	
	table tr th {
			font-size:150%;
	} 
	
	table tr td {
			width:33%;
	}
	
	.text-blue{
			color:blue;
	}
	
	</style>
	
	<body>
		<table align="center" border="10">
			<th colspan="3">
				<h1>Música HIM</h1>
			</th>
			<tr>
				<th>Nombre LP</th>
				<th>Single</th>
				<th>Año</th>
			</tr>
				
			<?php while($row=mysqli_fetch_assoc($result)): ?>
				<tr class="text-blue">
					<td align="center"><?= $row['name'] ?></td>
					<td align="center"><?php echo $row['single'] ?></td>
					<td align="center"><?php echo $row['year'] ?></td>
				</tr>
			<?php endwhile; ?>	
		</table>
	</body>
</html>