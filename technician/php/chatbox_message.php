<?php include 'header.php' ; ?>
<link href="../css/viewphp.css" rel="stylesheet" />
<center>
<div class="wrapper">
<?php
			echo "<table><thead><td style=\"padding-left:60px\">Reply</td><td>MessageId</td><td>CustomerId</td><td>Customer Name</td><td>Message</td><td>Reply</td></thead>";
			$sql="Select * from message";
			$con=mysqli_connect(@"localhost","root","","shakticomputer");
			$result=mysqli_query($con,$sql);
			while($line=mysqli_fetch_array($result))
			{  	echo "<tr>";                
                $cid=$line['CustomerId'];
                $sql="select * from customer where CustomerId='$cid'";
                $r=mysqli_query($con,$sql);
                $l=mysqli_fetch_array($r);
                echo "<td>";
                $mid=$line['MessageId'];
                echo"<a href=\"chatreply.php?rid=$mid\" style=\"background: linear-gradient(45deg,#e66465, #9198e5); color: black; width:150px;  padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;\">Reply</a>";
                ?>
  
<?php 
                echo "</td>";
                echo "<td>";
				echo $line['MessageId'];
				echo "</td>";
                echo "<td>";
				echo $line['CustomerId'];
				echo "</td>";                
                echo "<td>";
				echo $l['FirstName']." ".$l['LastName'];
				echo "</td>";
				echo "<td>";
				echo $line['CMessage'];
				echo "</td>";
				echo "<td>";
				echo $line['TMessage'];
				echo "</td>";
            }   
				echo "</table>";
				echo"<br><br>";		
		?>
         </center>
 <?php include 'footer.php'; ?>       

 


