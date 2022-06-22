<?php include 'header.php' ; ?>
<link href="../css/viewphp.css" rel="stylesheet" />
<div class="view-body">
	<center >
	<form  method="POST" action="" name="formsearch">
	<table>
	<thead>
	<td>Enter Problem Name</td>
	<td> : </td>
	<td><input type="text" name="txtnm" id="txtnm" value="" /></td>
	</thead>
	<tr>
	<td></td>
	<td></td>
	<td>
	<input type="submit" value="Search" name="btnsubmit"/>
	</td>
	</tr>
	</table>
	</form>
	<br><br>
	<?php
	  if(isset($_POST['btnsubmit']))
	  {     $flag=0;
			$nm=$_POST['txtnm'];
			echo "<table><thead><td>Problem ID</td><td>Problem Desc</td><td>Technician ID</td><td>Customer ID</td><td>Audio</td><td>Status</td></thead>";
			$sql="Select * from problem";
			$con=mysqli_connect(@"localhost","root","","shakticomputer");
			$result=mysqli_query($con,$sql);
			while($line=mysqli_fetch_array($result))
			{ 
				echo "<tr>";
				echo "<td>";
				echo $line['ProblemId'];
				echo "</td>";
				echo "<td>";
				if($line['ProblemDesc']  == NULL){
					echo "---------";
				}
				else{
				echo $line['ProblemDesc'];
				}
				echo "</td>";
				echo "<td>";
				echo $line['TechnicianId'];
				echo "</td>";
				echo "<td>";
				echo $line['CustomerId'];
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
				echo "<td>";
				if($line['Status'] == NULL){ 
				echo "Not Accepted";
				}
				else if($line['Status'] == 1){ 
					echo "Accepted";
					}
			    else if($line['Status'] == 2){ 
					echo "Work In Progress";
					}
				else if($line['Status'] == 3){ 
					echo "Completed";
					}
				echo "</td>";
				echo "</tr>";
				}          
				echo "</table>";
				echo"<br><br>";
								
		}
		?>
   </center>
       </div>
	   <?php include 'footer.php'; ?>
       </div>



