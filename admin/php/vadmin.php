<?php include 'header.php' ; ?>
<link href="../css/viewphp.css" rel="stylesheet" />
<div class="view-body">
	<center>
	<form  method="POST" action="" name="formsearch">
	<table>
	<thead>
	<td>Enter Admin Name</td>
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
			echo "<table><thead><td>AdminID</td><td>First Name</td><td>Last Name</td><td>Username</td><td>Email</td><td>Phone Number</td><td>Status</td></thead>";
			$sql="Select * from admin";
			$con=mysqli_connect(@"localhost","root","","shakticomputer");
			$result=mysqli_query($con,$sql);
			while($line=mysqli_fetch_array($result))
			{  if($line['Username']==$nm){
				echo "<tr>";
				echo "<td>";
				echo $line['Adminid'];
				echo "</td>";
				echo "<td>";
				echo $line['FirstName'];
				echo "</td>";
				echo "<td>";
				echo $line['LastName'];
				echo "</td>";
				echo "<td>";
				echo $line['Username'];
				echo "</td>";
				echo "<td>";
				echo $line['Email'];
				echo "</td>";
				echo "<td>";
				echo $line['PhoneNo'];
				echo "</td>";
				echo "<td>";
				echo $line['st'];
				echo "</td>";
				echo "</tr>";
				$flag = 1;
			}
			else if($nm == ""){
				echo "<tr>";
				echo "<td>";
				echo $line['Adminid'];
				echo "</td>";
				echo "<td>";
				echo $line['FirstName'];
				echo "</td>";
				echo "<td>";
				echo $line['LastName'];
				echo "</td>";
				echo "<td>";
				echo $line['Username'];
				echo "</td>";
				echo "<td>";
				echo $line['Email'];
				echo "</td>";
				echo "<td>";
				echo $line['PhoneNo'];
				echo "</td>";
				echo "<td>";
				echo $line['st'];
				echo "</td>";
				echo "</tr>";
				$flag=2;
			}
			
			}
          
				echo "</table>";
				echo"<br><br>";
				if($flag == 0){
					echo"<tr>";
					echo"<td>No one Is here</td></tr>";
					echo"</tdt>";
					echo"</tr>";
				}
				
		}
		?>
	   </center>
       </div>
	   <?php include 'footer.php'; ?>
       </div>
