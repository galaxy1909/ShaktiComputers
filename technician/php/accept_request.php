<?php include 'header.php' ; ?>
<link href="../css/viewphp.css" rel="stylesheet" />
<center>
<div class="wrapper">
<?php
			echo "<table><thead><td>Option</td><td>Problem ID</td><td>Problem Description</td><td>Customer ID</td></thead>";
			$sql="Select * from Problem";
			$con=mysqli_connect(@"localhost","root","","shakticomputer");
			$result=mysqli_query($con,$sql);
			while($line=mysqli_fetch_array($result))
			{  	echo "<tr>";
                echo "<td>";
                $id=$line['ProblemId'];
				if($line['Status'] == 0){
                echo"<a href=\"accept.php?aid=$id\"style=\"background-color:black;  color: white; width:150px;  padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;\">Accept</a>"; }
				else if($line['Status'] == 2){
					echo"<a href=\"#\" style=\"background-color:Blue;  color: white; width:150px;  padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;\">Work In Progress</a>";
				}
				else if($line['Status'] == 3){
					echo"<a href=\"#\" style=\"background-color:green;  color: white; width:150px;  padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;\">Completed</a>";
				}
				else if($line['Status'] == 1){
					echo"<a href=\"#\" style=\"background-color:green;  color: white; width:150px;  padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;\">Already Accepted</a>";
				}
                echo "</td>";
				echo "<td>";
				echo $line['ProblemId'];
				echo "</td>";
				echo "<td>";
				echo $line['ProblemDesc'];
				echo "</td>";
				echo "<td>";
			if($line['Audio'] == NULL){
				echo "NULL";
			}
			else{
				$audio=$line['Audio'];
				echo "<audio controls>
				<source src=\"$audio\"  ></audio>";
			}
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



