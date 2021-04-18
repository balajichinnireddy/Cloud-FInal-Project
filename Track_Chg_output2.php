<html>
<head>

	<title>
	Changes
	</title>
    <style>
    .credentials
          {
          padding: 12px;
          text-align: center;
          color:white;
          }
          button
           {
                background-color: #4CAF50 ;
                color: white;
               padding: 14px 20px;
                margin: 8px 0;
               border: none;
               cursor: pointer;
               width: 30%;
               
              }
        
              a
           {
            color: white;
            padding: 15px 80px;
            margin: 70px 650px;
            border: none;
            cursor: pointer;
            
            }
		body{
		background-image:url('Background_Image.jpg');
		background-repeat: repeat;
		}
			

td {
  width: 5em;
  height: 5em;
  text-align: center;
  vertical-align: middle;
}
              
    </style>
</head>
<?php

$x=$_POST['state'];
$y=$_POST['id'];

$con = mysqli_connect("db-cloud-final-project.cagqmw1lxter.us-east-1.rds.amazonaws.com", "admin","Winter2021", "ITSM",3306);
$sql = "Update `change` set State='$x' where ID='$y'";
$result=mysqli_query($con,$sql);

if ($result)
{
    echo "<h1 class='credentials'>Change state Updated<h1>";
    
}

else
{
    echo "<h1 class='credentials'>Change state failed to update<h1>";
}


echo "<br><br><a href='Track_Chg.php'><input type='button' value='Back' ></a>";

mysqli_close($con);
?>
</html>