<html>
<head>
	<title>
		Change creation
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
$rb =$_POST['rb'];
$type =$_POST['type'];
$cat =$_POST['cat'];
$state =$_POST['state'];
$ci =$_POST['ci'];
$ag =$_POST['ag'];
$pri =$_POST['pri'];
$at =$_POST['at'];
$ri =$_POST['ri'];
$st =$_POST['st'];
$impact =$_POST['impact'];
$ed =$_POST['ed'];
$sd =$_POST['sd'];
$d =$_POST['d'];
$n =$_POST['n'];
$ctask=$_POST['nofctasks'];



/*
echo $rb ;echo "<br>";
echo $type;echo "<br>";
echo $cat;echo "<br>";
echo $state;echo "<br>";
echo $ci;echo "<br>";
echo $ag;echo "<br>";
echo $pri;echo "<br>";
echo $at;echo "<br>";
echo $ri;echo "<br>";
echo $st;echo "<br>";
echo $impact;echo "<br>";
echo $ed;echo "<br>";
echo $sd;echo "<br>";
echo $d;echo "<br>";
echo $n;echo "<br>";
*/

$con = mysqli_connect("db-cloud-final-project.cagqmw1lxter.us-east-1.rds.amazonaws.com", "admin","Winter2021", "ITSM",3306);

$sql = "INSERT INTO `change` (`ID`, `RequestedBy`, `Category`, `ConfigurationItem`, `Priority`, `Risk`, `Impact`, `Type`, `State`, `AssignedGroup`, `AssignedTo`, `StartDate`, `EndDate`, `SD`, `D`, `N`) 
VALUES (NULL, '$rb', '$cat', '$ci', '$pri', '$ri', '$impact', '$type', '$state', '$ag', '$at', '$st', '$ed', '$sd', '$d', '$n')";
$query = mysqli_query($con,$sql);

if($query)
    {
        $sql="select * from `change` order by ID desc limit 1 ";
        $query=mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($query); 

        echo "<br>";
    echo "<br>";
   echo " <div class='credentials'>";
     echo "<h1 style='color:white;'>Change Creation successfull and has been assigned with an id  :";echo $row['ID'];echo "</h1>";
   echo " </div>";
   $id= $row['ID'];
        if($ctask == 1)
        {
            $x=$_POST['A1'];
            $y=$_POST['A2'];
            $z=$_POST['A3'];

            $sql= "INSERT INTO `ctask` (`Name`, `Assigned_Group`, `Assigned_To`, `ID`) VALUES ('$x', '$y', '$z', '$id')";
            $query=mysqli_query($con,$sql);
            if($query)
            {
                echo " <div class='credentials'>";
                echo "<h1 style='color:white;'>Change Tasks Created :: ONE";echo "</h1>";
                echo " </div>";
            }
	        
        }




        else if ($ctask == 2)
        {
            $x=$_POST['B1'];
            $y=$_POST['B2'];
            $z=$_POST['B3'];

            $sql= "INSERT INTO `ctask` (`Name`, `Assigned_Group`, `Assigned_To`, `ID`) VALUES ('$x', '$y', '$z', '$id')";
            $query1=mysqli_query($con,$sql);

            $x=$_POST['B4'];
            $y=$_POST['B5'];
            $z=$_POST['B6'];

            $sql= "INSERT INTO `ctask` (`Name`, `Assigned_Group`, `Assigned_To`, `ID`) VALUES ('$x', '$y', '$z', '$id')";
            $query2=mysqli_query($con,$sql);
            if($query1 && $query2)
            {
                echo " <div class='credentials'>";
                echo "<h1 style='color:white;'>Change Tasks Created :: TWO";echo "</h1>";
                echo " </div>";  
            }

        }

        else if ($ctask == 3)
        {
            $x=$_POST['C1'];
            $y=$_POST['C2'];
            $z=$_POST['C3'];

            $sql= "INSERT INTO `ctask` (`Name`, `Assigned_Group`, `Assigned_To`, `ID`) VALUES ('$x', '$y', '$z', '$id')";
            $query1=mysqli_query($con,$sql);

            $x=$_POST['C4'];
            $y=$_POST['C5'];
            $z=$_POST['C6'];

            $sql= "INSERT INTO `ctask` (`Name`, `Assigned_Group`, `Assigned_To`, `ID`) VALUES ('$x', '$y', '$z', '$id')";
            $query2=mysqli_query($con,$sql);

            $x=$_POST['C7'];
            $y=$_POST['C8'];
            $z=$_POST['C9'];

            $sql= "INSERT INTO `ctask` (`Name`, `Assigned_Group`, `Assigned_To`, `ID`) VALUES ('$x', '$y', '$z', '$id')";
            $query3=mysqli_query($con,$sql);

            if($query1 && $query2 && $query3)
            {
                echo " <div class='credentials'>";
                echo "<h1 style='color:white;'>Change Tasks Created :: THREE";echo "</h1>";
                echo " </div>";  
            }

        }

        else if ($ctask == 4)
        {
            $x=$_POST['D1'];
            $y=$_POST['D2'];
            $z=$_POST['D3'];

            $sql= "INSERT INTO `ctask` (`Name`, `Assigned_Group`, `Assigned_To`, `ID`) VALUES ('$x', '$y', '$z', '$id')";
            $query1=mysqli_query($con,$sql);

            $x=$_POST['D4'];
            $y=$_POST['D5'];
            $z=$_POST['D6'];

            $sql= "INSERT INTO `ctask` (`Name`, `Assigned_Group`, `Assigned_To`, `ID`) VALUES ('$x', '$y', '$z', '$id')";
            $query2=mysqli_query($con,$sql);

            $x=$_POST['D7'];
            $y=$_POST['D8'];
            $z=$_POST['D9'];

            $sql= "INSERT INTO `ctask` (`Name`, `Assigned_Group`, `Assigned_To`, `ID`) VALUES ('$x', '$y', '$z', '$id')";
            $query3=mysqli_query($con,$sql);

            $x=$_POST['D10'];
            $y=$_POST['D11'];
            $z=$_POST['D12'];

            
            $sql= "INSERT INTO `ctask` (`Name`, `Assigned_Group`, `Assigned_To`, `ID`) VALUES ('$x', '$y', '$z', '$id')";
            $query4=mysqli_query($con,$sql);
            if($query1 && $query2 && $query3 && $query4 )
            {
                echo " <div class='credentials'>";
                echo "<h1 style='color:white;'>Change Tasks Created :: FOUR";echo "</h1>";
                echo " </div>";  
            }

        }
        else if ($ctask == 0)
        {
            echo " <div class='credentials'>";
            echo "<h1 style='color:white;'>Change Tasks created :: ZERO";echo "</h1>";
            echo " </div>";

        }
        else
        {
            echo " <div class='credentials'>";
            echo "<h1 style='color:white;'>Change Tasks creation failed";echo "</h1>";
            echo " </div>"; 

        }
        echo " <div class='credentials'>";
        
        echo ' <a style="background-color:#993366" href="Chg.php"><button style="background-color:#993366" type="button">Create New Change</button> </a><br>';
        echo ' <a style="background-color:#993366" href="Track_Chg.php"><button style="background-color:#993366" type="button">Track Changes</button> </a><br>';
        echo " </div>";

    }

mysqli_close($con);
?>
</html>