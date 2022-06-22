<?php include 'header.php' ; ?>
<link href="../css/viewphp.css" rel="stylesheet" />
<div class="view-body">
	<center>
	<form  method="POST" action="" name="formsearch">
	<table>
	<thead>
	<td>Enter Category Name</td>
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
			echo "<table><thead><td>Category ID</td><td>Category Name</td></thead>";
            include('dbconnection.php');
			$sql="Select * from category";
			$result=mysqli_query($con,$sql);
			while($line=mysqli_fetch_array($result))
			{  if($line['CategoryName']==$nm){
				echo "<tr>";
				echo "<td>";
				echo $line['CategoryId'];
				echo "</td>";
				echo "<td>";
				echo $line['CategoryName'];
				echo "</td>";
				echo "</tr>";
				$flag = 1;
			}
			else if($nm == ""){
				echo "<tr>";
				echo "<td>";
				echo $line['CategoryId'];
				echo "</td>";
				echo "<td>";
				echo $line['CategoryName'];
				echo "</td>";
				echo "</tr>";
				$flag=2;
			}
			
			}
          
				echo "</table>";
				echo"<br><br>";
				if($flag == 0){
					echo"<tr>";
					echo"<td>No Category Is here</td></tr>";
					echo"</tdt>";
					echo"</tr>";
				}
				
		}
		?>
	   </center>
       </div>
	   <?php include 'footer.php'; ?>
       </div>
