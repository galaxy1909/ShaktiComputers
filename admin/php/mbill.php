<?php include 'header.php' ; ?>
<link href="../css/viewphp.css" rel="stylesheet" />
<center>
<div class="wrapper">
<?php
			echo "<table><thead><td>Option</td><td>Bill Id</td><td>TechnicianId</td><td>Customer ID</td><td>Amount</td><td>Date</td></thead>";
			$con=mysqli_connect(@"localhost","root","","shakticomputer");
			$sql="Select * from bill;";
			$result=mysqli_query($con,$sql);
			while($line=mysqli_fetch_array($result))
			{  	echo "<tr>";
                echo "<td>";
				$id=$line['BillId'];
                echo"<a href=\"ebill.php?eid=$id\"><i class=\"fa fa-edit\"></i></a>&nbsp;&nbsp;&nbsp;";
                echo"<a href=\"dbill.php?did=$id\"><i class=\"fa fa-trash\"></i></a>";
				echo "</td>";
				echo "<td>";
				echo $line['BillId'];
				echo "</td>";
				echo "<td>";
				echo $line['TechnicianId'];
				echo "</td>";
				echo "<td>";
				echo $line['CustomerId'];
				echo "</td>";
				echo "<td>";
				echo $line['Amount'];
				echo "</td>";
				echo "<td>";
				echo $line['Date'];
				echo "</td>";
				echo "</tr>";
			}          
				echo "</table>";
				echo"<br><br>";		
		?>
 <?php include 'footer.php'; ?>
</div>
        </center>



