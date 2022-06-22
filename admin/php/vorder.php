<?php include 'header.php' ; ?>
<link href="../css/viewphp.css" rel="stylesheet" />
<div class="view-body">
	<center>
	<form  method="POST" action="" name="formsearch">
	<table>
	<thead>
	<td>Enter order Date</td>
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
			echo "<table><thead><td>Order ID</td><td>Customer ID</td><td>Product ID</td><td>Product Name</td><td>Quantity</td><td>Delivery Address </td><td>Pincode</td><td>Total Amount</td><td>Status</td></thead>";
			$sql="Select * from tblorder";
			$con=mysqli_connect(@"localhost","root","","shakticomputer");
			$result=mysqli_query($con,$sql);
			while($line=mysqli_fetch_array($result))
			{  if($line['Orderid']==$nm){
				echo "<tr>";
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
				echo "<td>";
				echo $line['status'];
				echo "</td>";
				echo "</tr>";
				$flag = 1;
			}
			else if($nm == ""){
				echo "<tr>";
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
				echo $line['Quantity'];
				echo "</td>";
				echo "<td>";
				echo $line['Productname'];
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
				echo "<td>";
				if($line['status']==0){
					echo "<p style=\"color:red; font-weight: bold;\">Not Accepted</p>";
				}
				else if($line['status']==1){
					echo "<p style=\"color:black; font-weight: bold;\">Accepted</p>";
				}
				else if($line['status']==2){
					echo "<p style=\"color:blue; font-weight: bold;\">Dispatched</p>";
				}
				else if($line['status']==3){
					echo "<p style=\"color:green; font-weight: bold;\">Delivered</p>";
				}
				echo "</td>";
				echo "</tr>";
				$flag=2;
			}
			
			}
          
				echo "</table>";
				echo"<br><br>";
				if($flag == 0){
					echo"<tr>";
					echo"<td>Nothing Like This is here</td></tr>";
					echo"</tdt>";
					echo"</tr>";
				}
				
		}
		?>
	   </center>
       </div>
	   <?php include 'footer.php'; ?>
       </div>
