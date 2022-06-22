<?php include 'header.php' ; ?>
<link href="../css/viewphp.css" rel="stylesheet" />
<div class="view-body">
	<center>
	<form  method="POST" action="" name="formsearch">
	<table>
	<thead>
	<td>Enter Complaint Id</td>
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
			echo "<table><thead><td>ComplaintId</td><td>CustomerID</td><td>Complaint Description</td></thead>";
			$sql="Select * from complaint";
			$con=mysqli_connect(@"localhost","root","","shakticomputer");
			$result=mysqli_query($con,$sql);
			while($line=mysqli_fetch_array($result))
			{  
				echo "<tr>";
				echo "<td>";
				echo $line['Complaintid'];
				echo "</td>";
				echo "<td>";
				echo $line['Customerid'];
				echo "</td>";
				echo "<td>";
				echo $line['Complaintdesc'];
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
