<?php include 'header.php' ; ?>
<link href="../css/viewphp.css" rel="stylesheet" />
<center>
<div class="wrapper">
<?php
			echo "<table><thead><td>Option</td><td>TechnicianID</td><td>First Name</td><td>Last Name</td><td>Username</td><td>Email</td><td>Phone Number</td><td>Photo</td><td>Profession</td><td>Salary</td><td>Rating</td></thead>";
			$sql="Select * from technician";
			$con=mysqli_connect(@"localhost","root","","shakticomputer");
			$result=mysqli_query($con,$sql);
			while($line=mysqli_fetch_array($result))
			{  	echo "<tr>";
                echo "<td>";
				$id=$line['TechnicianId'];
                echo"<a href=\"etechnician.php?eid=$id\"><i class=\"fa fa-edit\"></i></a>&nbsp;&nbsp;&nbsp;";
                echo"  <a href=\"dtechnician.php?did=$id\"><i class=\"fa fa-trash\"></i></a>";
				echo "</td>";
				echo "<td>";
				echo $line['TechnicianId'];
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
				echo $line['Phone'];
				echo "</td>";
				echo "<td>";
				$photo=$line['Photo'];
			    $name=strtolower($photo);
			    echo "<img hieght=\"50px\" style=\"border-radius: 50%; border:2px solid red;\"  width=\"50px\" src=\"$name\"/>";
				echo "</td>";
				echo "<td>";
				echo $line['Profession'];
				echo "</td>";
				echo "<td>";
				echo $line['Salary'];
				echo "</td>";
				echo "<td>";
				echo $line['Rating'];
				echo "</td>";
				echo "</tr>";
			}          
				echo "</table>";
				echo"<br><br>";		
		?>
		<br><br><br><br><br><br>
 <?php include 'footer.php'; ?>
</div>
        </center>



