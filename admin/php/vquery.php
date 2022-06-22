<?php include 'header.php' ; ?>
<link href="../css/viewphp.css" rel="stylesheet" />
<div class="view-body">
	<center>
	 <?php
			echo "<table><thead><td>Reply</td><td>Contact ID</td><td>Technician ID</td><td>Query</td></thead>";
			$sql="Select * from t_contact";
			$con=mysqli_connect(@"localhost","root","","shakticomputer");
			$result=mysqli_query($con,$sql);
			while($line=mysqli_fetch_array($result))
			{  
				echo "<tr>";
                echo "<td>";
                
                echo"<a href=\"reply.php?rid=$id\"style=\"background-color:#cd9575;  color: white; width:150px;  padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;\">Reply<i style=\"margin-left:3px;\"class=\"fa fa-mail-reply\"></i></a>";
                echo "</td>";
				echo "<td>";
				echo $line['ContactId'];
				echo "</td>";
				echo "<td>";
				echo $line['TechnicianId'];
				echo "</td>";
				echo "<td>";
				echo $line['Query'];
				echo "</td>";
				echo "</tr>";
			}
          
				echo "</table>";
				echo"<br><br>";		
		
		?>
	   </center>
       </div>
	   <?php include 'footer.php'; ?>
       </div>
