<?php include 'header.php' ; ?>
<link href="../css/viewphp.css" rel="stylesheet" />
<center>
<div class="wrapper">
<?php
            include('dbconnection.php');
            $id=$_SESSION['tech'];
			echo "<table><thead><td>Complaint ID</td><td>Customer ID</td><td>Complaint Description</td></thead>";
			$sql="Select * from complaint;";
            $con=mysqli_connect(@"localhost","root","","shakticomputer");
			$result=mysqli_query($con,$sql);
			while($line=mysqli_fetch_array($result))
			{  	echo "<tr>";
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
         </center>
 <?php include 'footer.php'; ?>       



