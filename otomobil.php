<?php

include('baglan.php');
?>


<html>
<head>
    
<meta charset="utf-8">
<title>Otomobil</title>
<link rel="stylesheet" type="text/css" href="stilim.css">
</head>

<body>
	<a href="otomobil.php"><button name="button" id="otomobil" value="" class="bar">Otomobil</button></a>';
       <a href="suv.php"><button name="button" id="suv" value=""class="bar">SUV</button></a>';
       <a href="motosiklet.php"><button name="button" id="suv" value=""class="bar">Motosiklet</button></a>';
	
	<table>
	<tr style="font-size: 35px;
	font-weight: bold;">	
			<?php
				$sqll = "SELECT * FROM menu";
$result = mysqli_query($conn, $sqll);



// Sorgu sonucunda dönen verileri yazdır
while($row = mysqli_fetch_assoc($result)) {
    
    echo "<th>" . $row["marka"] . "</th>";
    echo "<th>" . $row["model"] . "</th>";
    echo "<th>" . $row["renk"] . "</th>";
    echo "<th>" . $row["km"] . "</th>";
    
    echo "<th>" . $row["resim"] . "</th>";
    echo "<th>" . $row["fiyat"] . "</th>";
}
		
		
		?>
		</tr>
		<?php

            $sql = "SELECT * FROM otomobil";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                          
                            <td>" . $row["marka"]. "</td>
                            <td>" . $row["model"]. "</td>
                            <td>" . $row["renk"]. "</td>
                            <td>" . $row["km"]. "</td>          
                                    
                            <td><img src='" . $row["resim"] . "'></td>
							<td>" . $row["fiyat"]. "</td>  
                        </tr>";
                }
            } else {
                echo "Veri Bulunamadı";
            }
        
            ?>
		
		<a href="index.php"><button href="index.php" class="admin" >Çıkış Yap</button></a>
		
	</table>
	
</body>
</html>



