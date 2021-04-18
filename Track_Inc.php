<html>
<head>
    <title>
		Track & Update Incidents
	</title>
    <style>
    .credentials
          {
          padding: 12px;
          color:white;
          }
          button
           {
            background-color: #ff6600 ;
            color: white;
            padding: 10px 20px;
            margin: 70px 650px;
            border: none;
            cursor: pointer;
            width: 20%;
            }
            a
           {
            color: white;
            padding: 15px 80px;
            margin: 70px 650px;
            border: none;
            cursor: pointer;
            
            }

            input[type=text]
        {
            width: 10%;
            padding: 5px 10px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
          }
            th,td {
                width: 150px;
                padding: 5px;
            }
        
        body{
            background-image:url('Background_Image.jpg');
		background-repeat: repeat;
		}
    </style>
</head>
<body>

        <form action="Track_Inc_process_1.php" style="font-size:14px;color:white" method="post">
         <button type="submit"><h3>To view all the Incidents click Here</h3></button>  
         
        </form>

        <form action="Track_Inc_output.php" style="font-size:14px;color:white" method="post">
        <label><b>Search Incident by Id : </b></label>
             <input type="text" placeholder="Incident #" name="id" id="id" required>
         <input type="submit" value ="Search"></button>  
         </form>
         <br><br>

         <form action="Track_Inc_output5.php" style="font-size:14px;color:white" method="post">
        <label><b>Search Incidents assigned to a person : </b></label>
             <input type="text" placeholder="person name" name="id" id="id" required>
         <input type="submit" value ="Search"></button>  
         </form>
         <br><br>

         <form action="Track_Inc_output4.php" style="font-size:14px;color:white" method="post">
        <label><b>Search Incidents by Date Range </b></label><br><br>
        <label><b>Start Date :</b></label>
             <input type="date" placeholder="Start Date" name="d1" id="d1" required>
             <label><b>End Date :</b></label>
             <input type="date" placeholder="End Date" name="d2" id="d2" required>
         <input type="submit" value ="Search"></button>  
         </form>

         <br><br>

         <form action="Track_Inc_output1.php" style="font-size:14px;color:white" method="post">
         <label><b>Search Incident by State : </b></label>
         <select name="state" id="state">
            <option value="Open">Open</option>
            <option value="Active">Active</option>
            <option value="Waiting additional info">Waiting additional info</option>
            <option value="Resolved">Resolved</option>
            <option value="voided">voided</option>
        </select>
         <input type="submit" value ="Search"></button>   
         </form>
         <br><br>
         <form action="Track_Inc_output2.php" style="font-size:14px;color:white" method="post">
         <label><b>Update Incident State by Id </b></label><br>
         <label><b>State :</b></label>
         <select name="state" id="state">
            <option value="Open">Open</option>
            <option value="Active">Active</option>
            <option value="Waiting additional info">Waiting additional info</option>
            <option value="Resolved">Resolved</option>
            <option value="voided">voided</option>
        </select>
        <label><b>Incident Id : </b></label>
             <input type="text" placeholder="Incident #" name="id" id="id" required>
         <input type="submit" value ="Update"></button>   
         </form>
         <br><br>
         <form action="Track_Inc_output3.php" style="font-size:14px;color:white" method="post"><br>
        
         <label><b>Update Incident Description </b></label><br>
         <label><b> Notes: </b></label>
         <input type="text" placeholder="notes" name="notes" id="notes" required>
         
        <label><b>Incident Id : </b></label>
             <input type="text" placeholder="Incident #" name="id" id="id" required>
         <input type="submit" value ="Update"></button>   
         </form>
         <br>
         
        <a href='Inc.php'><input type="button" value="Incident" ></a> <br><br><br>
        <a  href='Login.php'><input type="button" value="Logout" ></a>
         
         
</body>

</html>





