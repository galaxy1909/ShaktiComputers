<?php include 'header.php' ; ?>
<link href="../css/viewphp.css" rel="stylesheet" />
<center>
<div class="wrapper">
<?php
			echo "<table><thead><td>Option</td><td>Order ID</td><td>Customer ID</td><td>Product ID</td><td>Product Name</td><td>Quantity</td><td>Delivery Address</td><td>Pincode</td><td>Price</td></thead>";
			$sql="Select * from tblorder";
			$con=mysqli_connect(@"localhost","root","","shakticomputer");
			$result=mysqli_query($con,$sql);
			while($line=mysqli_fetch_array($result))
			{  	echo "<tr>";
                echo "<td>";
				$id=$line['Orderid'];
                echo"<a href=\"eorder.php?eid=$id\"><i class=\"fa fa-edit\"></i></a>&nbsp;&nbsp;&nbsp;";
                echo"  <a href=\"dorder.php?did=$id\"><i class=\"fa fa-trash\"></i></a>";
				echo "</td>";
				echo "<td>";
				echo $line['Orderid'];
				echo "</td>";
				echo "<td>";
				echo $line['Customerid'];
				echo "</td>";
				echo "<td>";
				echo $line['ProductId'];
				echo "</td>";
				echo "<td>";
				echo $line['Productname'];
				echo "</td>";
				echo "<td>";
				echo $line['Quantity'];
				echo "</td>";
				echo "<td>";
				echo $line['Deliveryadd'];
				echo "</td>";
				echo "<td>";
				echo $line['Pincode'];
				echo "</td>";
				echo "<td>";
				echo $line['Totalamount'];
				echo "</td>";
				echo "</tr>";
			}          
				echo "</table>";
				echo"<br><br>";		
		?>
 <?php include 'footer.php'; ?>
</div>
        </center>



