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
$sql = "select * from `change` where AssignedTo='$x'";
$result=mysqli_query($con,$sql);

echo "<table style='color:white;font-size:18px' border=1 style='border-collapse: collapse;'>";
echo
"<tr>
<th>Id</th>
<th>Requested By</th>
<th>Category</th>
<th>Configuration Item</th>
<th>Priority</th>
<th>Risk</th>
<th>Impact</th>
<th>Type</th>
<th>State</th>
<th>Assigned Group</th>
<th>Assigned To</th>
<th>Start Date</th>
<th>End Date</th>
<th>Short DescriptionD</th>
<th>Description</th>
<th>Notes</th>
</tr>";




while($row = mysqli_fetch_assoc($result))
{
    echo " <tr>";
    echo " <td>".$row['ID']."</td>";
    echo " <td>".$row['RequestedBy']."</td>";
    echo " <td>".$row['Category']."</td>";
    echo " <td>".$row['ConfigurationItem']."</td>";
    echo " <td>".$row['Priority']."</td>";
    echo " <td>".$row['Risk']."</td>";
    echo " <td>".$row['Impact']."</td>";
    echo " <td>".$row['Type']."</td>";
    echo " <td>".$row['State']."</td>";
    echo " <td>".$row['AssignedGroup']."</td>";
    echo " <td>".$row['AssignedTo']."</td>";
    echo " <td>".$row['StartDate']."</td>";
    echo " <td>".$row['EndDate']."</td>";
    echo " <td>".$row['SD']."</td>";
    echo " <td>".$row['D']."</td>";
    echo " <td>".$row['N']."</td>";    
    echo "</tr>";
}
echo "</table>";


echo "<br><br><a href='Track_Chg.php'><input type='button' value='Back' ></a>";

mysqli_close($con);
?>
</html>