<?php
$insert = false;
if(isset($_POST['name'])){
   $server = "localhost";
    $username = "root";
     $password = "";

    
   $con = mysqli_connect($server, $username, $password);

   if(!$con){
       die("connection to this database failed due to" . mysqli_connect_error());
   }
    
   $name = $_POST['name'];
    $dish = $_POST['dish'];
    $quantity = $_POST['quantity'];
    $locality = $_POST['locality'];
    $email = $_POST['email'];
   $phone = $_POST['phone'];
   $sql = "INSERT INTO `home`.`home1` (`name`, `dish`, `quantity`,`locality`, `email`, `phone`,  `dt`) VALUES ('$name', '$dish', '$locality', '$quantity', '$email', '$phone', current_timestamp());";
   


   if($con->query($sql) == true){
    
      $insert = true;
     }
     else{
         echo "ERROR: $sql <br> $con->error";
   }

   $con->close();
 }
      
       if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form!!!♥♥♥.you will find happiness☺☺☺ and food here ☻☻☻</ p>";
    
   }
   ?>
