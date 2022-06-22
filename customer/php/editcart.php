<?php
          session_start();
          include('dbconnection.php');
          $id=$_SESSION['user'];
          $prid=$_POST;
          $count=0;
          foreach($prid as $key => $value){
              if($count % 2 == 0){
            echo $key . " : " . $value . "<br>";
            $a=str_replace('quantity','',$key);
            echo $a;
            $sql="UPDATE `cart` SET `Piece` = '$value' WHERE CustomerId='$id' AND ProductId = '$a';"; 
           if( mysqli_query($con,$sql)){
               echo "Successfull";
               header("Location:cart.php");
           }
        }
               $count++;
        }
  ?>