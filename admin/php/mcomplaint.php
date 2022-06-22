<?php include 'header.php' ; ?>
<link href="../css/viewphp.css" rel="stylesheet" />
<center>
<div class="wrapper">
<?php
			echo "<table><thead><td>Option</td><td>Complaint ID</td><td>Customer ID</td><td>Complaint Description</td></thead>";
			$sql="Select * from complaint";
			$con=mysqli_connect(@"localhost","root","","shakticomputer");
			$result=mysqli_query($con,$sql);
			while($line=mysqli_fetch_array($result))
			{  	echo "<tr>";
                echo "<td>";
				$id=$line['Complaintid'];
                echo"<a href=\"ecomplaint.php?eid=$id\"><i class=\"fa fa-edit\"></i></a>&nbsp;&nbsp;&nbsp;";
                echo"<a href=\"dcomplaint.php?did=$id\"><i class=\"fa fa-trash\"></i></a>";
				echo "</td>";
				echo "<td>";
				echo $line['Complaintid'];
				echo "</td>";
				echo "<td>";
				echo $line['Customerid'];
				echo "</td>";
				echo "<td>";
				echo $line['Complaintdesc'];
				echo "</td>";
				echo "</tr>";
			}          
				echo "</table>";
				echo"<br><br>";		
		?>
 <?php include 'footer.php'; ?>
</div>
        </center>



