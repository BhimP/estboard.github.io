<?php 
 $host ="localhost";
 $user ="root";
 $password ="";
 //$estimation = "estimation";
 $db ="user1";
 session_start();
 error_reporting(0);
 $data=mysqli_connect($host,$user,$password, $db);
 if($data==false){
    die("Connection error!");
 }
 if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST["username"];
    $password=$_POST["password"];
    //$estimation =$_POST["estimation"];
   
    $sql="SELECT * FROM login WHERE username='".$username."' AND password='".$password."'";
    $result=mysqli_query($data,$sql);
    $row= mysqli_fetch_array($result);
    if($row["usertype"]=="user"){

       $_SESSION['username_ss']=$username;
       header("location:userhome.php");
    }
    elseif($row["usertype"]=="admin"){

        $_SESSION['username_ad']=$username;
        header("location:adminhome.php");
     }
    else {
           echo "Username OR Passworde Incorrect!";
    }

 }

?>

