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
          if($line['st'] == 1){
            echo"<a href=\"blockuser.php?bid=$id\"style=\"background-color:green;  color: white; width:110px;  padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;\">Block</a>";
          }
          else{
            echo"<a href=\"unblockuser.php?ubid=$id\"style=\"background-color:red;  color: white; width:110px;  padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;\">Unblock</a>";
            }
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










