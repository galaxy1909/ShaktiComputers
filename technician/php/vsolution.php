<?php include 'header.php' ; ?>
<link href="../css/viewphp.css" rel="stylesheet" />
<center>
<div class="wrapper">
<?php
            include('dbconnection.php');
            $id=$_SESSION['tech'];
			echo "<table><thead><td>Solution ID</td><td>Technician Name</td><td>Problem Description</td><td>Solution</td></thead>";
			$sql="Select * from recordedsoloution";
            $con=mysqli_connect(@"localhost","root","","shakticomputer");
			$result=mysqli_query($con,$sql);
			while($line=mysqli_fetch_array($result))
			{  	
                $tid=$line['TechnicianId'];
                $s1="Select * from technician where TechnicianId='$tid';";
                $r1=mysqli_query($con,$s1);
                $l1=mysqli_fetch_array($r1);
                $pid=$line['ProblemId'];
                $s2="Select * from problem where ProblemId='$pid';";
                $r2=mysqli_query($con,$s2);
                $l2=mysqli_fetch_array($r2);
                echo "<tr>";
                echo "<td>";
                echo $line['SolutionId'];
                echo "</td>";
				echo "<td>";
				echo $l1['FirstName'];
				echo "</td>";
				echo "<td>";
				echo $l2['ProblemDesc'];
				echo "</td>";
                echo "<td>";
				echo $line['ProblemSol'];
				echo "</td>";
				echo "</tr>";
			}          
				echo "</table>";
				echo"<br><br>";		
		?>
         </center>
 <?php include 'footer.php'; ?>       



