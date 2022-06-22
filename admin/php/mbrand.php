<?php include 'header.php' ; ?>
<link href="../css/viewphp.css" rel="stylesheet" />
<center>
<div class="wrapper">
<?php
			echo "<table><thead><td>Option</td><td>Brand ID</td><td>Brand Name</td><td>Brand logo</td><td>DoJ</td></thead>";
			$sql="Select * from brand";
            include('dbconnection.php');
			$result=mysqli_query($con,$sql);
			while($line=mysqli_fetch_array($result))
			{  	echo "<tr>";
                echo "<td>";
				$id=$line['BrandId'];
                echo"<a href=\"ebrand.php?eid=$id\"><i class=\"fa fa-edit\"></i></a>&nbsp;&nbsp;&nbsp;";
                echo"  <a href=\"dbrand.php?did=$id\"><i class=\"fa fa-trash\"></i></a>";
				echo "</td>";
				echo "<td>";
				echo $line['BrandId'];
				echo "</td>";
				echo "<td>";
				echo $line['BrandName'];
				echo "</td>";
				echo "<td>";
				$photo=$line['BrandLogo'];
			    $name=strtolower($photo);
			    echo "<img hieght=\"50px\" style=\"border-radius: 50%; border:2px solid red;\"  width=\"50px\" src=\"$name\"/>";
				echo "</td>";
				echo "<td>";
				echo $line['DOJ'];
				echo "</td>";
				echo "</tr>";
			}          
				echo "</table>";
				echo"<br><br>";		
		?>
 <?php include 'footer.php'; ?>
</div>
        </center>



