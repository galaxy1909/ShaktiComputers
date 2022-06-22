<?php include 'header.php' ; ?>
<link href="../css/viewphp.css" rel="stylesheet" />
<div class="view-body">
	<center>
	<form  method="POST" action="" name="formsearch">
	<table>
	<thead>
	<td>Enter Solution Id</td>
	<td> : </td>
	<td><input type="text" name="txtnm" id="txtnm" value="" /></td>
	</thead>
	<tr>
	<td></td>
	<td></td>
	<td>
	<input type="submit" value="Search" name="btnsubmit" id="btnsubmit"/>
	</td>
	</tr>
	</table>
	</form>
	<br><br>
	  <?php
	  if(isset($_POST['btnsubmit']))
	  {    
			$nm=$_POST['txtnm'];
			include('dbconnection.php');
			echo "<table><thead><td>Solution ID</td><td>Technician ID</td><td>Problem ID</td><td>Solution</td></thead>";
			$sql="Select * from recordedsoloution";
			$result=mysqli_query($con,$sql);
			while($line=mysqli_fetch_array($result))
			{ 	echo "<tr>";
				echo "<td>";
				echo $line['SolutionId'];
				echo "</td>";
				echo "<td>";
				echo $line['TechnicianId'];
				echo "</td>";
				echo "<td>";
				echo $line['ProblemId'];
				echo "</td>";
				echo "<td>";
				echo $line['ProblemSol'];
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
