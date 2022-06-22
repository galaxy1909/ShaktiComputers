<?php include 'header.php' ; ?>
<link href="../css/viewphp.css" rel="stylesheet" />
<center>
<div class="wrapper">
<?php
            include('dbconnection.php');
            $id=$_SESSION['tech'];
			echo "<table><thead><td>Contact ID</td><td>Query</td><td>Reply</td></thead>";
			$sql="Select * from t_contact where TechnicianId='$id';";
            $con=mysqli_connect(@"localhost","root","","shakticomputer");
			$result=mysqli_query($con,$sql);
			while($line=mysqli_fetch_array($result))
			{  	
                $cid=$line['ContactId'];
                $s="select * from reply where ContactId='$cid'";
                $r=mysqli_query($con,$s);
                $l=mysqli_fetch_array($r);
                echo "<tr>";
                echo "<td>";
                echo $line['ContactId'];
                echo "</td>";
				echo "<td>";
				echo $line['Query'];
				echo "</td>";
				echo "<td>";
				echo $l['Reply'];
				echo "</td>";
				echo "</tr>";
			}          
				echo "</table>";
				echo"<br><br>";		
		?>
         </center>
 <?php include 'footer.php'; ?>  