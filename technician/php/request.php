<?php include 'header.php' ; ?>
<link href="../css/viewphp.css" rel="stylesheet" />
<center>
<div class="wrapper">
<?php
            include('dbconnection.php');
            $id=$_SESSION['tech'];
			echo "<table><thead><td>Progress</td><td>Completed</td><td>Reject</td><td>Problem ID</td><td>Problem Description</td><td>Customer ID</td></thead>";
			$sql="Select * from Problem where `TechnicianId`='$id'";
            $con=mysqli_connect(@"localhost","root","","shakticomputer");
			$result=mysqli_query($con,$sql);
			while($line=mysqli_fetch_array($result))
			{  	echo "<tr>";
                echo "<td>";
                $id=$line['ProblemId'];
                if($line['Status'] !=3){
                if($line['Status'] == 2){
                echo"<a href=\"wip.php?wid=$id\"style=\"background-color:green;  color: white; width:150px;  padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;\">Wok in Progress</a>"; 
                }
                else{
                    echo"<a href=\"wip.php?wid=$id\"style=\"background-color:red;  color: white; width:150px;  padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;\">Wok in Progress</a>"; 
                }
            }
                echo "</td>";
                echo "<td>";
                if($line['Status'] == 3){
    				echo"<a href=\"completed.php?cid=$id\" style=\"background-color:green;  color: white; width:150px;  padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;\">Completed</a>";
                }
                else{
                    echo"<a href=\"completed.php?cid=$id\" style=\"background-color:red;  color: white; width:150px;  padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;\">Completed</a>";
                }
                echo "</td>";
                echo "<td>";
                if($line['Status'] !=3){
                echo"<a href=\"reject.php?rid=$id\" style=\"background-color:red;  color: white; width:150px;  padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;\">Reject</a>";
                }
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
				echo "</tr>";
			}          
				echo "</table>";
				echo"<br><br>";		
		?>
         </center>
 <?php include 'footer.php'; ?>       



