<html>
<head>

	<title>
		Account Creation
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
               width: 15%;
              }
              body{
                background-image:url('Background_Image.jpg');
		background-repeat: repeat;
		}
    </style>
</head>

<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$rpwd=$_POST['rpwd'];
$con = mysqli_connect("db-cloud-final-project.cagqmw1lxter.us-east-1.rds.amazonaws.com", "admin","Winter2021", "ITSM",3306);

if ($pwd == $rpwd)
{
    
$sql = "insert into credentials(Fname,Lname,Mobile,Email,Pwd) values ('$fname','$lname','$mobile','$email','$pwd')";
$query = mysqli_query($con,$sql);
if ($query)
    {     
 echo "<br>";
   echo "<br>";
   echo "<br>";
   echo "<br>";
   echo "<br>";
   echo "<br>";
   echo "<br>";
     echo '<div class="credentials">';
    echo '<h1>Account Creation Successfull</h1>';
     echo ' <a style="background-color:green" href="Login.php"><button style="background-color:green" type="button" value="Login Page" >Login Page</button> </a><br>';
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
    echo '<h1>Passwords Do Not Match</h1>';
    echo ' <a style="background-color:green" href="Login.php"><button style="background-color:green" type="button" value="Login Page" >Login Page</button> </a><br>';
     echo ' <a style="background-color:red" href="SignUp.php"><button style="background-color:red" type="button" value="Sign Up" >SignUp</button></a><br>';
    echo '</div>';
}
mysqli_close($con);
?>
</html>