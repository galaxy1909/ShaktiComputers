<?php include 'header.php' ; ?>
<link href="../css/viewphp.css" rel="stylesheet" />
<center>
<div class="wrapper">
<?php
			echo "<table><thead><td>Option</td><td>Work Report ID</td><td>TechnicianID</td><td>Work Hours</td><td>Date</td><td>Problem Id</td><td>Problem Solution</td></thead>";
			$sql="Select * from workreport";
			$con=mysqli_connect(@"localhost","root","","shakticomputer");
			$result=mysqli_query($con,$sql);
			while($line=mysqli_fetch_array($result))
			{  	echo "<tr>";
                echo "<td>";
				$id=$line['Workreportid'];
                echo"<a href=\"ew.php?eid=$id\"><i class=\"fa fa-edit\"></i></a>&nbsp;&nbsp;&nbsp;";
                echo"  <a href=\"dw.php?did=$id\"><i class=\"fa fa-trash\"></i></a>";
				echo "</td>";
				echo "<td>";
				echo $line['Workreportid'];
				echo "</td>";
				echo "<td>";
				echo $line['TechnicianId'];
				echo "</td>";
				echo "<td>";
				echo $line['Workhours'];
				echo "</td>";
				echo "<td>";
				echo $line['Date'];
				echo "</td>";
				echo "<td>";
				echo $line['ProblemId'];
				echo "</td>";
				echo "<td>";
				echo $line['Problemsol'];
				echo "</td>";
				echo "</tr>";
			}          
				echo "</table>";
				echo"<br><br>";		
		?>
 <?php include 'footer.php'; ?>
</div>
        </center>



