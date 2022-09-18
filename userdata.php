<?php 
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST["username"];
    $password=$_POST["password"];
    $estimation =$_POST["estimation"];

    $sql="SELECT * FROM login WHERE username='".$username."' AND password='".$password."'  usertype=user ";
    $result=mysqli_query($data,$sql);
    $row= mysqli_fetch_array($result);
}


?>










<!DOCTYPE html>
<html>
<head>
 <title> </title>

</head>
<body>
    <center> 
        <h1>Enter your Estimated points in Number </h1><br><br> 
    <div style="background-color:grey ; width: 500px;" >  
        <form action="#" method="POST" >
      <div><br> <br> 
           <label>Value in Number </label><br> <br> 
          <input type="number" name="estimation" required>
        </div>
           
           </div><br> <br> 
              <input type="submit" value="send data"><br> <br> <br> <br> 
            </div><br> <br> 
            </form> 
        </div>
    </center>


 </body>



</html>