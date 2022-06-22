  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<div class="container">
 
  <!-- The Modal -->
  <div class="modal" id="myModal1">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Recent Problem</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Product Id</th>
                <th>Problem Desc</th>
                <th>Customer Id</th>
                <th>Viewed</th>
              </tr>
            </thead>
            <tbody>
            <?php
        include('dbconnection.php');
        $sql="select * from problem";
        $result=mysqli_query($con,$sql);
        while($line=mysqli_fetch_array($result)){
          $pid=$line['ProblemId'];
          if($line['A_Status']==0){
        ?>
              <tr>
                <td><?php echo $line['ProblemId'];?></td>
                <td><?php echo $line['ProblemDesc'];?></td>
                <td><?php echo $line['CustomerId'];?></td>
                <form method="POST" action="">
                  <?Php 
                  if($_POST['view']){
                    $s="UPDATE `problem` SET `A_Status`=1 where `ProblemId` ='$pid';";
                    if(mysqli_query($con,$s)){
                    }
                  }
                  ?>
                <td><input id="view" name="view" type="submit" value="Viewed"/>
        </form></td>
              </tr>
             <?php }} ?>
            </tbody>
          </table>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>
  <div class="modal" id="myModal2">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Recent Order</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Order Id</th>
                <th>Product Name</th>
                <th>Order Date</th>
                <th>viewed</th>
              </tr>
            </thead>
            <tbody>
            <?php
        $sql2="select * from tblorder";
        $result2=mysqli_query($con,$sql2);
        while($line2=mysqli_fetch_array($result2)){
          $id=$line2['Orderid'];
          if($line2['A_Status']==0){
        ?>
              <tr>
                <td><?php echo $line2['Orderid'];?></td>
                <td><?php echo $line2['Productname'];?></td>
                <td><?php echo $line2['Orderdate'];?></td>
                <form method="POST" action="">
                  <?Php 
                  if($_POST['view']){
                    $s="UPDATE `tblorder` SET `A_Status`=1 where `Orderid` ='$id';";
                    if(mysqli_query($con,$s)){
                    }
                  }
                  ?>
                <td><input id="view" name="view" type="submit" value="Viewed"/>
        </form></td>
              </tr>
             <?php }} ?>
            </tbody>
          </table>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>

  <div class="modal" id="myModal3">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Technician</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Techncian Id</th>
                <th>Technician Name</th>
                <th>Salary</th>
                <th>Change Status</th>
              </tr>
            </thead>
            <tbody>
            <?php
        $sql3="select * from technician ";
        $result3=mysqli_query($con,$sql3);
        while($line3=mysqli_fetch_array($result3)){
          $tid=$line3['TechnicianId'];
          if($line3['A_Status'] == 0){
        ?>
              <tr>
                <td><?php echo $line3['TechnicianId'];?></td>
                <td><?php echo $line3['FirstName'];?></td>
                <td><?php echo $line3['Salary'];?></td>
                <form method="POST" action="">
                  <?Php 
                  if($_POST['view']){
                    $s="UPDATE `technician` SET `A_Status`=1 where `TechnicianId` ='$tid';";
                    if(mysqli_query($con,$s)){
                    }
                  }
                  ?>
                <td><input id="view" name="view" type="submit" value="Viewed"/>
        </form></td>
              </tr>
             <?php }} ?>
            </tbody>
          </table>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>

  <div class="modal" id="myModal4">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Recent Bill</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Bill Id</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Viewed</th>
              </tr>
            </thead>
            <tbody>
            <?php
        $sql2="select * from bill;";
        $result2=mysqli_query($con,$sql2);
        while($line2=mysqli_fetch_array($result2)){
          $bid=$line2['BillId'];
          if($line2['A_Status']==0){
        ?>
              <tr>
                <td><?php echo $line2['BillId'];?></td>
                <td><?php echo $line2['Amount'];?></td>
                <td><?php echo $line2['Date'];?></td>
                <form method="POST" action="">
                  <?Php 
                  if($_POST['view']){
                    $s="UPDATE `bill` SET `A_Status`=1 where `BillId` ='$bid';";
                    if(mysqli_query($con,$s)){
                    }
                  }
                  ?>
                <td><input id="view" name="view" type="submit" value="Viewed"/>
        </form></td>
              </tr>
             <?php }} ?>
            </tbody>
          </table>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>
</div>