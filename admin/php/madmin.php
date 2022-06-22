<?php include 'header.php' ; ?>
<link href="../css/viewphp.css" rel="stylesheet" />
<center>
<div class="wrapper">
<?php
			echo "<table><thead><td>Edit/Delete</td><td>AdminID</td><td>First Name</td><td>Last Name</td><td>Username</td><td>Email</td><td>Phone Number</td></thead>";
			$sql="Select * from admin";
			$con=mysqli_connect(@"localhost","root","","shakticomputer");
			$result=mysqli_query($con,$sql);
			while($line=mysqli_fetch_array($result))
			{  	echo "<tr>";
                echo "<td>";
				$id=$line['Adminid'];
                echo"<a href=\"eadmin.php?eid=$id\"><i class=\"fa fa-edit\"></i></a>&nbsp;&nbsp;&nbsp;";
                echo"  <a href=\"dadmin.php?did=$id\"><i class=\"fa fa-trash\"></i></a>";
				echo "</td>";
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
				echo "</tr>";
			}          
				echo "</table>";
				echo"<br><br>";		
		?>
		<br><br><br><br><br><br><br><br>
 <?php include 'footer.php'; ?>
</div>
        </center>



