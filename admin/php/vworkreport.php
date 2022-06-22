<?php include 'header.php' ; ?>
<link href="../css/viewphp.css" rel="stylesheet" />
<div class="view-body">
	<center>
	<form  method="POST" action="" name="formsearch">
	<table>
	<thead>
	<td>Enter Work Report Id</td>
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
			echo "<table><thead><td>Work Report ID</td><td>Technician ID</td><td>Work Hours</td><td>Date</td>&nbsp;&nbsp;<td>Problem Id</td><td>Problem Sol</td><td>Solution</td></thead>";
			$sql="Select * from workreport";
			$con=mysqli_connect(@"localhost","root","","shakticomputer");
			$result=mysqli_query($con,$sql);
			while($line=mysqli_fetch_array($result))
			{  
				echo "<tr>";
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
		}
		?>
	   </center>
       </div>
	   <?php include 'footer.php'; ?>
       </div>
