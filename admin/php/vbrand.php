<?php include 'header.php' ; ?>
<link href="../css/viewphp.css" rel="stylesheet" />
<div class="view-body">
	<center>
	<form  method="POST" action="" name="formsearch">
	<table>
	<thead>
	<td>Enter Admin Name</td>
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
			echo "<table><thead><td>Brand Id</td><td>Brand Name</td><td>DOJ</td><td>Photo</td></thead>";
			$sql="Select * from brand";
			$con=mysqli_connect(@"localhost","root","","shakticomputer");
			$result=mysqli_query($con,$sql);
			while($line=mysqli_fetch_array($result))
			{  if($line['BrandId']==$nm){
				echo "<tr>";
				echo "<td>";
				echo $line['BrandId'];
				echo "</td>";
				echo "<td>";
				echo $line['BrandName'];
				echo "</td>";
				echo "<td>";
				echo $line['DOJ'];
				echo "</td>";
				echo "<td>";
				$photo=$line['BrandLogo'];
			    $name=strtolower($photo);
			    echo "<img hieght=\"30px\" style=\"border-radius: 50%; border:2px solid red;\"  width=\"30px\" src=\"$name\"/>";
				echo "</td>";
				echo "</tr>";
				$flag = 1;
			}
			else if($nm == ""){
				echo "<tr>";
				echo "<td>";
				echo $line['BrandId'];
				echo "</td>";
				echo "<td>";
				echo $line['BrandName'];
				echo "</td>";
				echo "<td>";
				echo $line['DOJ'];
				echo "</td>";
				echo "<td>";
				$photo=$line['BrandLogo'];
			    $name=strtolower($photo);
			    echo "<img hieght=\"30px\" style=\"border-radius: 50%; border:2px solid red;\"  width=\"30px\" src=\"$name\"/>";
				echo "</td>";
				echo "</tr>";
				$flag=2;
			}
			
			}
          
				echo "</table>";
				echo"<br><br>";
				if($flag == 0){
					echo"<tr>";
					echo"<td>No one Is here</td></tr>";
					echo"</tdt>";
					echo"</tr>";
				}
				
		}
		?>
	   </center>
       </div>
	   <?php include 'footer.php'; ?>
       </div>


