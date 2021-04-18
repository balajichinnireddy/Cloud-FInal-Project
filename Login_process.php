<html>
<head>

	<title>
		Credentials Validation
	</title>
    <style>
    .credentials
          {
          padding: 12px;
          text-align: center;
          color:white;
          }
          button,a
           {
                background-color: #4CAF50 ;
                color: white;
               padding: 14px 20px;
                margin: 8px 0;
               border: none;
               cursor: pointer;
               width: 20%;
              }
        
        body{
            background-image:url('Background_Image.jpg');
		background-repeat: repeat;
		}

td {
  width: 10em;
  height: 10em;
  text-align: center;
  vertical-align: middle;
}
              
    </style>
</head>



<?php
$email=$_POST['uname'];
$pwd=$_POST['pwd'];

$con = mysqli_connect("db-cloud-final-project.cagqmw1lxter.us-east-1.rds.amazonaws.com", "admin","Winter2021", "ITSM","3306");
$sql = "select Pwd,Fname from credentials where Email='$email'";
$result=mysqli_query($con,$sql);

if($result)
{
    $row=mysqli_fetch_assoc($result);
    if($row['Pwd']===$pwd)
    {
      
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo '<div class="credentials">';
        echo '<h1 style="color:white;" >Welcome  '.$row['Fname'];
        echo '</h1>';
        echo "<br>";
        echo "<br>";
        echo "<table style='width:100%' cellpadding='15'>";
        echo "<tr>";
        echo '<td> <a style="background-color:#C2202D" href="Inc.php"><button style="background-color:#C2202D" type="button"  >Incident Management</button></a></td>';
        echo '<td> <a style="background-color:#227A7B" href="Chg.php"><button style="background-color:#227A7B" type="button"  >Change Management</button></a></td>';
        echo "</tr>";

        echo "<tr>";
        echo '<td> <a style="background-color:#C2202D" href="Track_Inc.php"><button style="background-color:#C2202D" type="button"  >Track Incidents</button></a></td>';
        echo '<td> <a style="background-color:#227A7B" href="Track_Chg.php"><button style="background-color:#227A7B" type="button"  >Track Changes </button></a></td>';
        echo "</tr>";

        echo "</table>";

         echo '</div>';
    
    }
    else
    {
   echo "<br>";
   echo "<br>";
   echo "<br>";
   echo "<br>";
   echo "<br>";
   echo "<br>";
   echo "<br>";
     echo '<div class="credentials">';
    echo '<h1>Authentication failed</h1>';
    echo ' <a style="background-color:green" href="Login.php"><button style="background-color:green;" type="button" value="Login Page" >Login Page </button></a><br>';
    echo ' <a style="background-color:red" href="SignUp.php"><button style="background-color:red" type="button" value="Sign Up" >Sign Up Page </button></a><br>';
    
    echo '</div>';
    }
}
else
{
    echo "<br>";
   echo "<br>";
   echo "<br>";
   echo "<br>";
   echo "<br>";
   echo "<br>";
   echo "<br>";
     echo '<div class="credentials">';
    echo '<h1>Failed to establish connection to server</h1>';
    echo ' <a style="background-color:green" href="Login.php"><button style="background-color:green;" type="button" value="Login Page" >Login Page </button></a><br>';
    echo ' <a style="background-color:red" href="SignUp.php"><button style="background-color:red" type="button" value="Sign Up" >Sign Up Page </button></a><br>';
    echo '</div>';

}

mysqli_close($con);
?>
</html>