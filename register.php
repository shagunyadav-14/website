<?php

include ("connect.php");

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $number=$_POST['number'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    
    
    $checkEmail="SELECT * From contact where email='$email'";
    $result=$conn->query($checkEmail);
    if($result->num_rows>0){
        echo"email address already exist!";
    }
    else{
        $insertQuery="INSERT INTO contact(name,number,email,message)
                        VALUES ('$name','$number','$email','$message')";
                        
            if($conn->query($insertQuery)==TRUE){
            
            header("location: index.php");
            
            
        }
        else{
            echo"Error:".$conn->error;
        }
    }
}
?>
 
