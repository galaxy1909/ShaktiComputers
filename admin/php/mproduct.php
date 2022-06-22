<?php include 'header.php' ; ?>
<link href="../css/viewphp.css" rel="stylesheet" />
<center>
<div class="wrapper">
<?php
			echo "<table><thead><td>Option</td><td>Product ID</td><td>Product Name</td><td>Cateogory ID</td><td>Brand ID</td><td>Brand Name</td><td>Photo</td><td>Price</td></thead>";
			$sql="Select * from product";
			$con=mysqli_connect(@"localhost","root","","shakticomputer");
			$result=mysqli_query($con,$sql);
			while($line=mysqli_fetch_array($result))
			{  	echo "<tr>";
                echo "<td>";
				$id=$line['ProductId'];
                echo"<a href=\"eproduct.php?eid=$id\"><i class=\"fa fa-edit\"></i></a>&nbsp;&nbsp;&nbsp;";
                echo"  <a href=\"dproduct.php?did=$id\"><i class=\"fa fa-trash\"></i></a>";
				echo "</td>";
				echo "<td>";
				echo $line['ProductId'];
				echo "</td>";
				echo "<td>";
				echo $line['ProductName'];
				echo "</td>";
				echo "<td>";
				echo $line['CategoryId'];
				echo "</td>";
				echo "<td>";
				echo $line['BrandId'];
				echo "</td>";
				echo "<td>";
				echo $line['BrandName'];
				echo "</td>";
				echo "<td>";
				$photo=$line['Photo'];
			    $name=strtolower($photo);
			    echo "<img hieght=\"50px\" style=\"border-radius: 50%; border:2px solid red;\"  width=\"50px\" src=\"$name\"/>";
				echo "</td>";
				echo "<td>";
				echo $line['Price'];
				echo "</td>";
				echo "</tr>";
			}          
				echo "</table>";
				echo"<br><br>";		
		?>
 <?php include 'footer.php'; ?>
</div>
        </center>



