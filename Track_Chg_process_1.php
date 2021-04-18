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
  width: 3.5em;
  height: 3.5em;
  text-align: center;
  vertical-align: middle;
}
              
    </style>
</head>

<?php


$con = mysqli_connect("db-cloud-final-project.cagqmw1lxter.us-east-1.rds.amazonaws.com", "admin","Winter2021", "ITSM",3306);
$sql = "select * from `change`";
$result=mysqli_query($con,$sql);

echo "<table style='color:white;font-size:18px' border=1 style='border-collapse: collapse;'>";
echo
"<tr>
<th>Id</th>
<th>Requested By</th>
<th>Category</th>
<th>Configuration Item</th>
<th>Impact</th>
<th>Priority</th>
<th>Type</th>
<th>State</th>
<th>Assigned Group</th>
<th>Short Description</th>
<th>Start Date</th>
<th>End Date</th>
</tr>";

echo "<form method='POST' action='Track_Chg_output.php'>";
while($row = mysqli_fetch_assoc($result))
{
echo " <tr>";
echo "<td>";   echo "<input type='submit' name='id' value='$row[ID]'>"; echo "</td>";
echo " <td>".$row['RequestedBy']."</td>";
echo " <td>".$row['Category']."</td>";
echo " <td>".$row['ConfigurationItem']."</td>";
echo " <td>".$row['Impact']."</td>";
echo " <td>".$row['Priority']."</td>";
echo " <td>".$row['Type']."</td>";
echo " <td>".$row['State']."</td>";
echo " <td>".$row['AssignedGroup']."</td>";
echo " <td>".$row['SD']."</td>";
echo " <td>".$row['StartDate']."</td>";
echo " <td>".$row['EndDate']."</td>";
echo "</tr>";
}
echo "</form>";
echo "</table>";
echo "<br><br><a href='Track_Chg.php'><input type='button' value='Back' ></a>";
mysqli_close($con);

?>

</html>