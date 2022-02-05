<?php
$insert = false;
if(isset($_POST['name']))
{
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    //echo "Success connecting to the db";
    $name = $_POST['name'];
    $place = $_POST['place'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $sql = "INSERT INTO `home`.`contact` (`name`, `place`, `email`,`comment`) VALUES ('$name', '$place', '$email', '$comment');";
    //echo $sql;
    if($con->query($sql) == true){
    
        $insert = true;
       }
       else{
           echo "ERROR: $sql <br> $con->error";
     }
  
     $con->close();
   }
        
         if($insert == true){
          echo "<p class='submitMsg'>Thanks for contacting us</ p>";
      
     }
     ?>
  


   




