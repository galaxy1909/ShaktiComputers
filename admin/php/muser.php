<?php include 'header.php' ; ?>
<link href="../css/viewphp.css" rel="stylesheet" />
<center>
<div class="wrapper">
<?php
			
			echo "<table><thead><td>Option</td><td>Customer ID</td><td>First Name</td><td>Last Name</td><td>Address</td><td>Pincode</td><td>Email</td><td>Birth Date</td><td>Phone</td><td>Photo</td></thead>";
			$sql="Select * from customer";
			$con=mysqli_connect(@"localhost","root","","shakticomputer");
			$result=mysqli_query($con,$sql);
            
			while($line=mysqli_fetch_array($result))
			{  	echo "<tr>";
                echo "<td>";
				$id=$line['CustomerId'];
                echo"<a href=\"euser.php?eid=$id\"><i class=\"fa fa-edit\"></i></a>&nbsp;&nbsp;&nbsp;";
                echo"  <a href=\"duser.php?did=$id\"><i class=\"fa fa-trash\"></i></a>";
				echo "</td>";
				echo "<td>";
				echo $line['CustomerId'];
				echo "</td>";
				echo "<td>";
				echo $line['FirstName'];
				echo "</td>";
				echo "<td>";
				echo $line['LastName'];
				echo "</td>";
				echo "<td>";
				echo $line['Address'];
				echo "</td>";
				echo "<td>";
				echo $line['Pincode'];
				echo "</td>";
				echo "<td>";
				echo $line['Email'];
				echo "</td>";
				echo "<td>";
				echo $line['Birthdate'];
				echo "</td>";
				echo "<td>";
				echo $line['Phone'];
				echo "</td>";
				echo "<td>";
				$photo=$line['Photo'];
			    $name=strtolower($photo);
			    echo "<img hieght=\"50px\"  width=\"50px\" src=\"$name\"/>";
		    	echo "</td>";
				echo "</tr>";
			}          
				echo "</table>";
				echo"<br><br>";		
		?>
 <?php include 'footer.php'; ?>
</div>
        </center>



