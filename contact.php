<?php
include "include/Connect.php";
session_start();

if(isset($_POST['Lname'])){
    $LogPass = $_POST['pass'];
    $LogName = $_POST['Lname'];
    $correct = '';
    
    $sql4="SELECT * FROM admin WHERE username='$LogName';";
    $result4=$Connect->query($sql4);
    if($result4->num_rows > 0){
        while($row = mysqli_fetch_assoc($result4)){
            if(!password_verify($LogPass, $row['Password'])){
                $correct = 'The username or password is wrong';
            }
            else{
                $correct = 'done '.$row['Name'];
                $_SESSION["isAdmin"]= true;
                $_SESSION["nameo"]= $row['Name'];
            }
        }
    }
    else{
        $correct = 'The username or password is wrong';
    }
    
    header("Content-Type: text/plain"); 
    echo $correct;
}

if(isset($_POST['Sname'])){
    $SPass = $_POST['Spass'];
    $SName = $_POST['Sname'];
    $SNameU = $_POST['SnameU'];
    $SEmail = $_POST['Semail'];
    $signed = '';
    
    $hashed_password = password_hash($SPass, PASSWORD_DEFAULT);

    $log = $Connect->query("INSERT INTO admin (Name, username, Password, Email) VALUES ('$SNameU', '$SName', '$hashed_password', '$SEmail');");
    if($log){
        $signed = 'Account creayated successfully';
        $_SESSION["isAdmin"]= true;
        $_SESSION["nameo"]= $SNameU;
        //header('Location:Admin.php?n='.$SNameU);
    }
    else{
        $signed = 'Something went wrong';
    }
    
    header("Content-Type: text/plain"); 
    echo $signed;
}
/*
if(isset($_GET['massg'])){
    $msg = $_GET['massg'];
    $ConName = $_GET['ContName'];
    $ConEmail= $_GET['ContEmail'];
    $sub = $_GET['subj'];
    $done = '';

    $sql = "INSERT INTO contact(Name, Email, Subject, Msg) VALUES ('$ConName', '$ConEmail', '$msg', '$sub');";
    if(mysqli_query($Connect, $sql)){
        $done = "Your message have been received";
    }
    else{
       $done = 'Somthing went wrong, please try again'; 
    }

    header("Content-Type: text/plain"); 
    echo $done;
}*/
?>