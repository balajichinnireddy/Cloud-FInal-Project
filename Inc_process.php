<html>
<head>
	<title>
		Incident creation
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
               width: 30%;
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
$caller=$_POST['cal'];
$opened=$_POST['op'];
$location=$_POST['loc'];
$openedby=$_POST['opb'];
$category=$_POST['cat'];
$contacttype=$_POST['ct'];
$subcategory=$_POST['sc'];
$state=$_POST['state'];
$ci=$_POST['ci'];
$assignedgrp=$_POST['ag'];
$impact=$_POST['impact'];
$assignedto=$_POST['at'];
$urgency=$_POST['urg'];
$pri=$_POST['pri'];
$sd=$_POST['sd'];
$d=$_POST['d'];

/*
echo $caller;
echo $opened;
echo $location;
echo $openedby;
echo $category;
echo $contacttype;
echo $subcategory;
echo $state;
echo $ci;
echo $assignedgrp;
echo $impact;
echo $assignedto;
echo $urgency;
echo $pri;
echo $sd;
echo $d;
*/

$con = mysqli_connect("db-cloud-final-project.cagqmw1lxter.us-east-1.rds.amazonaws.com", "admin","Winter2021", "ITSM",3306);
$sql = "Insert into incident(Caller,Location,Category,SubCategory,ConfigurationItem,Impact,Urgency,Priority,Opened,OpenedBy,ContactType,State,AssignedGroup,AssignedTo,SD,D) values ('$caller','$location',
'$category','$subcategory','$ci','$impact','$urgency','$pri','$opened','$openedby','$contacttype','$state','$assignedgrp','$assignedto','$sd','$d')";
$query = mysqli_query($con,$sql);
if($query)
{
    $sql="select * from incident order by Id desc limit 1";
    $query=mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($query);
    echo "<br>";
    echo "<br>";
   echo " <div class='credentials'>";
    echo "<h1 style='color:white;'> Incident details has been recorded and assigned with id :";echo $row['Id'];echo "</h1>";
    echo ' <a style="background-color:#993366" href="Inc.php"><button style="background-color:#993366" type="button">Create New Incident</button> </a><br>';
    echo ' <a style="background-color:#993366" href="Track_Inc.php"><button style="background-color:#993366" type="button">Track Incident</button> </a><br>';
   echo " </div>";
}

else
{
    echo " <div class='credentials'>";
    echo "<h1 style='color:white;'>Incident creation failed, please try again</h1>";
    echo ' <a style="background-color:#993366" href="Inc.php"><button style="background-color:#993366" type="button">Create New Incident</button> </a><br>';
    echo ' <a style="background-color:#993366" href="Track_Inc.php"><button style="background-color:#993366" type="button">Track Incident</button> </a><br>';
    echo " </div>";
}

mysqli_close($con);
?>
</html>