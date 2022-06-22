<?php include 'header.php' ; ?>
<link href="../css/viewphp.css" rel="stylesheet" />
<center>
<div class="wrapper">
<?php
			echo "<table><thead><td>Option</td><td>Order ID</td><td>Product Name</td><td>Quantity</td><td>Delivery Address</td></thead>";
			$sql="Select * from tblorder";
			$con=mysqli_connect(@"localhost","root","","shakticomputer");
			$result=mysqli_query($con,$sql);
			while($line=mysqli_fetch_array($result))
			{  	
                echo "<tr>";
                echo "<td>";
                $id=$line['Orderid'];
             if($line['status'] == 0){
                    echo"<a href=\"accept_o.php?aid=$id\"style=\"background-color:black;  color: white; width:150px;  padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;\">Accept</a>"; 
                }
			else if($line['status'] == 1){
                echo"<a href=\"dispatch.php?aid=$id\"style=\"background-color:red;  color: white; width:150px;  padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;\">Dispatch</a>"; 
            }
            else if($line['status'] == 2){
                echo"<a href=\"deliver.php?aid=$id\"style=\"background-color:blue;  color: white; width:150px;  padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;\">Deliver</a>"; 
            }
            else if($line['status'] == 3){
                echo"<a href=\"#\"style=\"background-color:green;  color: white; width:150px;  padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;\">Delivered</a>"; 
            }
                echo "</td>";
				echo "<td>";
				echo $line['Orderid'];
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
				echo "</tr>";
                }         
				echo "</table>";
				echo"<br><br>";		
		?>
         </center>
 <?php include 'footer.php'; ?>       



