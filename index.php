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

<!DOCTYPE html>
<html>
<head>
 <title>Login page </title>
 <style>
   h1{
      background-color: aqua;
      font-family: 'Courier New', Courier, monospace;
      color: black;
      margin-top: 30px;
      margin-left: 100px;
      margin-right: 100px;
      padding: 70px;

   }
   #logbtn{
      background-color: #04AA6D;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 15%;

   }


   </style>

</head>
<body>
   <div style="background-image: url('scrum.jpg');
                 background-repeat: no-repeat;
                 background-attachment: fixed;
                 background-size: auto;
                 padding:8%;">
      <center>  
         <h1>Please login for Voting </h1>
         <div style="background-color:grey ; width: 800px;" >  
        <form action="#" method="POST" >
           <br> <br> 
           <label>Enter your Username:</label><br> 
            <input type="text" name="username" required><br> <br> 
            <label>Enter your Password:</label><br> 
            <input type="password" name="password" required><br> <br> 
           </div ><br> <br> 
              <input type="submit" id="logbtn" value="Login"><br> <br> <br> <br> 
            </div><br> <br>  
          </form> 
          </div>
      </center>
    </div>
</body>



</html>