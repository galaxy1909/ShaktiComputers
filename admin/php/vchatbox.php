<?php include 'header.php' ; ?>
<link href="../css/viewphp.css" rel="stylesheet" />
<div class="view-body">
	<center >
	<br><br>
	<?php
 			echo "<table><thead><td>Message ID</td><td>CustomerId</td><td>Technician ID</td><td>Customer Message</td><td>Reply of Technician</td><td>Date</td></thead>";
			$sql="Select * from message";
			$con=mysqli_connect(@"localhost","root","","shakticomputer");
			$result=mysqli_query($con,$sql);
			while($line=mysqli_fetch_array($result))
			{   $cid=$line['CustomerId'];
				$s1="select * from customer where CustomerId='$cid'";
				$r1=mysqli_query($con,$s1);
				$l1=mysqli_fetch_array($r1);
				$tid=$line['TechnicianId'];
				$s2="select * from technician where TechnicianId='$tid'";
				$r2=mysqli_query($con,$s2);
				$l2=mysqli_fetch_array($r2);
				echo "<tr>";
				echo "<td>";
				echo $line['MessageId'];
				echo "</td>";
				echo "<td>";
				echo $l1['FirstName'];
				echo "</td>";
				echo "<td>";
				if($line['TechnicianId'] != NULL){
				echo $l2['FirstName'];
				}
				else{
					echo "<p style=\"color:red;\">Not Replied</p>";
				}
				echo "</td>";
				echo "<td>";
				echo $line['CMessage'];
				echo "</td>";
				echo"<td>";
				if($line['TMessage'] != NULL){
				echo $line['TMessage'];
				}
				else{
					echo "<p style=\"color:red;\">Not Replied</p>";
				}
				echo "</td>";
				echo "<td>"; 
				echo $line['Date'];
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



