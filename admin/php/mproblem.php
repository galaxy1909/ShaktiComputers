<?php include 'header.php' ; ?>
<link href="../css/viewphp.css" rel="stylesheet" />
<center>
<div class="wrapper">
<?php
			echo "<table><thead><td>Option</td><td>Problem Id</td><td>Problem Desc</td><td>Customer ID</td><td>Technician ID</td><td>Status</td></thead>";
			$con=mysqli_connect(@"localhost","root","","shakticomputer");
			$sql="Select * from problem;";
			$result=mysqli_query($con,$sql);
			while($line=mysqli_fetch_array($result))
			{  	echo "<tr>";
                echo "<td>";
				$id=$line['ProblemId'];
                echo"<a href=\"eproblem.php?eid=$id\"><i class=\"fa fa-edit\"></i></a>&nbsp;&nbsp;&nbsp;";
                echo"<a href=\"dproblem.php?did=$id\"><i class=\"fa fa-trash\"></i></a>";
				echo "</td>";
				echo "<td>";
				echo $line['ProblemId'];
				echo "</td>";
				echo "<td>";
				echo $line['ProblemDesc'];
				echo "</td>";
				echo "<td>";
				echo $line['CustomerId'];
				echo "</td>";
				echo "<td>";
				echo $line['TechnicianId'];
				echo "</td>";
				echo "<td>";
				echo $line['Status'];
				echo "</td>";
				echo "</tr>";
			}          
				echo "</table>";
				echo"<br><br>";		
		?>
 <?php include 'footer.php'; ?>
</div>
        </center>



