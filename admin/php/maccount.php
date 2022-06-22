<?php include 'header.php' ; ?>
<link href="../css/viewphp.css" rel="stylesheet" />
<?php
  include('dbconnection.php');
  session_start();
  $id=$_SESSION['admin'];
  $sql="select * from admin where Adminid='$id' ;";
  $result=mysqli_query($con,$sql);
  $line=mysqli_fetch_array($result);
?>
<center>
<div class="wrapper">
		<br>
		<style>table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
<table style ="font-size:22px; width:600px;">
  <tr>
    <th>Admin ID</th>
    <td><?php  echo $line['Adminid'];?></td>
  </tr>
  <tr>
    <th>First Name</th>
    <td><?php  echo $line['FirstName'];?></td>
  </tr>
  <tr>
    <th>Last Name</th>
    <td><?php  echo $line['LastName'];?></td>
  </tr>
  <tr>
    <th>Email</th>
    <td><?php  echo $line['Email'];?></td>
  </tr>
  <tr>
    <th>Phone</th>
    <td><?php  echo $line['PhoneNo'];?></td>
  </tr>
  <tr>
    <th>Photo</th>
    <td><?php
         $photo=$line['Photo'];
          $name=strtolower($photo);
          echo "<img hieght=\"20px\"  style=\"border-radius: 70%; border:2px solid red;\"   width=\"50px\" src=\"$name\" ;" ?></td>
  
  </tr>
  <tr>
    <th>User Name</th>
    <td><?php echo $line['Username']; ?></td>
  </tr>
</table>
<br><br><br><br><br>
 <?php include 'footer.php'; ?>
</div>
        </center>



