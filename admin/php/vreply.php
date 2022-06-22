<?php include 'header.php' ; ?>
<link href="../css/viewphp.css" rel="stylesheet" />
<div class="view-body">
	<center>
	 <?php
			echo "<table><thead><td>Reply Id</td><td>Technician ID</td><td>Query</td><td>Reply</td></thead>";
			$sql="Select * from reply";
			$con=mysqli_connect(@"localhost","root","","shakticomputer");
			$result=mysqli_query($con,$sql);
			while($line=mysqli_fetch_array($result))
			{   
                $cid=$line['ContactId'];
                $s="Select * from t_contact where ContactId='$cid'";
			    $r=mysqli_query($con,$s);
                $l=mysqli_fetch_array($r);
				echo "<tr>";
                echo "<td>";
                echo $line['ReplyId'];
                echo "</td>";
				echo "<td>";
				echo $l['TechnicianId'];
				echo "</td>";
				echo "<td>";
				echo $l['Query'];
				echo "</td>";
                echo "<td>";
				echo $line['Reply'];
				echo "</td>";
				echo "</tr>";
			}
          
				echo "</table>";
				echo"<br><br>";		
		
		?>
	   </center>
       </div>
       <br><br><br><br><br><br><br><br>
	   <?php include 'footer.php'; ?>
       </div>
