<?php 

session_start();
echo    "<h3 > Welcome:- </h3>"   .$_SESSION['username_ss']; 
$host ="localhost";
$user ="root";
$password ="";
$db ="user1";

$estconnect= mysqli_connect($host,$user,$password,$db);
if($estconnect)
{
    if(isset($_POST['submit1']))
    {
        $userest=$_POST['estname'];
        $estvalue =$_POST['estvalue'];
        $sql= "INSERT INTO est (estname,estvalue) 
         values('$userest','$estvalue')";
        $res=mysqli_query($estconnect,$sql);
        
        if($res)
        {
            echo "<br> Successfully data inserted! <br> I will logout you in 3 Sec"; 
            header( 'refresh:4; url=index.html');
            
        }
        else
        {
            echo " <br> Not inserted data"; 
        }
    }
}


?>

<!DOCTYPE html>
<html>
<head>
    <title> User Home page </title>
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
   #subtn{
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
<div style="background-image: url('ScrumP.jpg');
                 background-repeat: no-repeat;
                 background-attachment: fixed;
                 background-size: cover;
                 background-size: auto;
                 ">
    <center> 
  <h1> Welcome to Agile Estimation Board  </h1> 
  
  
  <div style="background-color:grey ; width: 600px; padding:2%"> 
 <form action="#"  method="POST">
         Enter your Details:<br><br>
        <input type="text" id="name" name="estname" placeholder=" Enter your name" required><br><br>
        <input type="number" id="estimate" name="estvalue" placeholder="Enter Estimation 1,2,3,5,8,13,20" required> <br><br>
        <input type="submit"  name="submit1" id="subtn" value="Submit" onclick="countClicks();" ><br><br>
        
    </form>
    <div> 
    <a href="logout.php"> 
    <img border="0" alt="Logout" src="logoutimg.jpg" width="100" height="75"><br> 
    </a>
    </div>
    <center> 
    </div>
    </div>

 
    
</body>





</html>