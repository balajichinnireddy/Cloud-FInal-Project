<html>
<head>

	<title>
	Incidents
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
               width: 50%;
               
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

$x=$_POST['id'];


$con = mysqli_connect("db-cloud-final-project.cagqmw1lxter.us-east-1.rds.amazonaws.com", "admin","Winter2021", "ITSM",3306);
$sql = "select * from incident where AssignedTo='$x'";
$result=mysqli_query($con,$sql);

echo "<table style='color:white;font-size:18px' border=1 style='border-collapse: collapse;'>";
echo
"<tr>
<th>Id</th>
<th>Caller</th>
<th>Location</th>
<th>Category</th>
<th>Sub Category</th>
<th>Configuration Item</th>
<th>Impact</th>
<th>Urgency</th>
<th>Priority</th>
<th>Opened</th>
<th>Opened By</th>
<th>Contact Type</th>
<th>State</th>
<th>Assigned Group</th>
<th>Assigned To</th>
<th>Short DescriptionD</th>
<th>Description</th>
</tr>";


while($row = mysqli_fetch_assoc($result))
{
    echo " <tr>";
    echo " <td>".$row['Id']."</td>";
    echo " <td>".$row['Caller']."</td>";
    echo " <td>".$row['Location']."</td>";
    echo " <td>".$row['Category']."</td>";
    echo " <td>".$row['SubCategory']."</td>";
    echo " <td>".$row['ConfigurationItem']."</td>";
    echo " <td>".$row['Impact']."</td>";
    echo " <td>".$row['Urgency']."</td>";
    echo " <td>".$row['Priority']."</td>";
    echo " <td>".$row['Opened']."</td>";
    echo " <td>".$row['OpenedBy']."</td>";
    echo " <td>".$row['ContactType']."</td>";
    echo " <td>".$row['State']."</td>";
    echo " <td>".$row['AssignedGroup']."</td>";
    echo " <td>".$row['AssignedTo']."</td>";
    echo " <td>".$row['SD']."</td>";
    echo " <td>".$row['D']."</td>";
    echo "</tr>";
}
echo "</table>";


echo "<br><br><a href='Track_Inc.php'><input type='button' value='Back' ></a>";

mysqli_close($con);
?>
</html>