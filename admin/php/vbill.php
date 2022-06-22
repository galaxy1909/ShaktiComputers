<?php include 'header.php' ; ?>
<link href="../css/viewphp.css" rel="stylesheet" />
<div class="view-body">
	<center>
	 <?php
			echo "<table><thead><td>Bill Id</td><td>Technician ID</td><td>Customer ID</td><td>Query</td><td>Amount</td><td>Date</td></thead>";
			$sql="Select * from bill";
			$con=mysqli_connect(@"localhost","root","","shakticomputer");
			$result=mysqli_query($con,$sql);
			while($line=mysqli_fetch_array($result))
			{   
                $cid=$line['BillId'];
                $s="Select * from problem where ProblemId='$cid'";
			    $r=mysqli_query($con,$s);
                $l=mysqli_fetch_array($r);
				echo "<tr>";
                echo "<td>";
                echo $line['BillId'];
                echo "</td>";
				echo "<td>";
				echo $line['TechnicianId'];
				echo "</td>";
				echo "<td>";
				echo $line['CustomerId'];
				echo "</td>";
                echo "<td>";
				echo $l['ProblemDesc'];
				echo "</td>";
                echo "<td>";
				echo $line['Amount'];
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
       <br><br><br><br><br><br><br><br>
	   <?php include 'footer.php'; ?>
       </div>
