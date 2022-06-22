<?php include 'header.php' ; ?>
<link href="../css/viewphp.css" rel="stylesheet" />
<center>
<div class="wrapper">
<?php
            include('dbconnection.php');
            $id=$_SESSION['tech'];
			echo "<table><thead><td>Work Report ID</td><td>Technician ID</td><td>Work Hours</td><td>Date</td><td>Problem ID</td><td>Problel Solution</td><td>Audio</td></thead>";
			$sql="Select * from workreport where `TechnicianId`='$id';";
            $con=mysqli_connect(@"localhost","root","","shakticomputer");
			$result=mysqli_query($con,$sql);
			while($line=mysqli_fetch_array($result))
			{  	echo "<tr>";
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
				echo"<td>";
				if($line['Audio'] == NULL){
					echo "NULL";
				}
				else{
					$audio=$line['Audio'];
					echo "<audio controls>
					<source src=\"$audio\"  ></audio>";
				}
				echo "</td>";
				echo "</tr>";
			}          
				echo "</table>";
				echo"<br><br>";		
		?>
         </center>
 <?php include 'footer.php'; ?>       



