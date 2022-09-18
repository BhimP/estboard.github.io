
<!DOCTYPE html>
<html>
<head>
    <title> This is Admin Page</title>
    <style>
   h1{
      background-color: aqua;
      font-family: 'Courier New', Courier, monospace;
      color: black;
      margin-top: 0px;
      margin-left: 00px;
      margin-right: 0px;
      padding: 50px;
   }
    #Adbtn{
      background-color: #04AA6D;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 15%;
    }
    #Rdbtn{
      background-color: red;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 15%;
    }
     #lgbtn{
       float: right;
       margin-left: 50px;
     }
    footer{
           margin-top: 200px;
           align-items: center;
	         background-color: yellow;
           opacity: 20%;
    	     bottom: 0;
	         color: #666666;
	         display: flex;
          	font-size: 5em;
          	justify-content: center;
	          position: fixed;
	          text-transform: uppercase;
	          width: 100%;
	          
    }
    </style>
</head>

<body>
  <div style=" background-color: aquamarine;
                background-size: cover;
                 background-size: auto;">

  <h1> Welcome to Administrative Page </h1>  
  <?php
     session_start();
      echo " <b>Welcome:-</b><br> " .$_SESSION['username_ad'];
    ?>
        <div id="lgbtn"> 
        <a href="logout.php"> 
        <img border="0" alt="Logout" src="logoutimg.jpg" width="100" height="75" ><br> 
        </a>
        </div>
    <center> 
         <form action="#" method="POST">
        <input type="submit" id="Adbtn" name="result" value="Show Result">
        <input type="submit" id="Rdbtn" name="delete" value=" Clear the Board" >
       </form>
        
       
  </center>
  </div> 
</body><br>
<footer>
  Thank you!
</footer>
</html> 

<?php 

$host ="localhost";
$user ="root";
$password ="";
$db ="user1";

$estconnect= mysqli_connect($host,$user,$password,$db);
if($estconnect)
{
    if(isset($_POST['result']))
     {
         $q= "SELECT * FROM est ";
         $qs= mysqli_query($estconnect,$q);
         $readline = mysqli_num_rows($qs);

         if($readline!=0)
         {
           echo "<table>";
             while($ret= mysqli_fetch_assoc($qs))
                  {   
                    echo  "<tr><td> <b> Name:</b> " .$ret['estname']." </td><td> <b> Points:</b> ".$ret['estvalue']."  </td></tr>";                           
                  }
                  echo "</table>";
          }
         else
         {
            echo "No record found!";
         }

        if(mysqli_num_rows($qs)>0)
        {
            
            foreach ($qs as $row)
            {
                $z[]= $row['estvalue'];   
                
            }
              
              $c= array_sum($z) / count($z);  
              echo "<h4 style='color:red;'>Average Estimatation is : $c </h4>";   
        } 
     }
}
?>

<?php
$host ="localhost";
$user ="root";
$password ="";
$db ="user1";
$estconnect= mysqli_connect($host,$user,$password,$db);
if($estconnect)
{
    if(isset($_POST['delete']))
    {
        $d=" DELETE FROM est ";
        $qd= mysqli_query($estconnect,$d);
        if($qd)
        {
            echo "succesfully done!";
        }
        else
        {
            echo "issue somwhere!";
        }
    }
}
?>
