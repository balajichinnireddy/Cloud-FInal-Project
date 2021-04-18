<html>
<head>
    <title>
		Track & Update Changes
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
		body{
		background-image:url('Background_Image.jpg');
		background-repeat: repeat;
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
        
    </style>
</head>
<body>

        <form action="Track_Chg_process_1.php" style="font-size:14px;color:white" method="post">
         <button type="submit"><h3>To view all the Changes click Here</h3></button>  
         
        </form>

        <form action="Track_Chg_output.php" style="font-size:14px;color:white" method="post">
        <label><b>Search Changes by change Id : </b></label>
             <input type="text" placeholder="Change #" name="id" id="id" required>
         <input type="submit" value ="Search"></button>  
         </form>
         <br><br>

         <form action="Track_Chg_output5.php" style="font-size:14px;color:white" method="post">
        <label><b>Search Changes assigned to a person : </b></label>
             <input type="text" placeholder="person name" name="id" id="id" required>
         <input type="submit" value ="Search"></button>  
         </form>
         <br><br>

         <form action="Track_Chg_output4.php" style="font-size:14px;color:white" method="post">
        <label><b>Search Changes by Start and End Date </b></label><br><br>
        <label><b>Start Date :</b></label>
             <input type="date" placeholder="Start Date" name="d1" id="d1" required>
             <label><b>End Date :</b></label>
             <input type="date" placeholder="End Date" name="d2" id="d2" required>
         <input type="submit" value ="Search"></button>  
         </form>

         <br><br>

         <form action="Track_Chg_output1.php" style="font-size:14px;color:white" method="post">
         <label><b>Search Changes by State : </b></label>
         <select name="state" id="state">
             <option value="Draft">Draft</option>
  <option value="Submit">Submit</option>
  <option value="Pendiing Approval">Pending Approval</option>
  <option value="Approved">Approved</option>

        </select>
         <input type="submit" value ="Search"></button>   
         </form>
         <br><br>
         <form action="Track_Chg_output2.php" style="font-size:14px;color:white" method="post">
         <label><b>Update Change State by Id </b></label><br>
         <label><b>State :</b></label>
         <select name="state" id="state">
         <option value="Draft">Draft</option>
  <option value="Submit">Submit</option>
  <option value="Pendiing Approval">Pending Approval</option>
  <option value="Approved">Approved</option>
        </select>
        <label><b>Change Id : </b></label>
             <input type="text" placeholder="Change #" name="id" id="id" required>
         <input type="submit" value ="Update"></button>   
         </form>
         <br><br>
         <form action="Track_Chg_output3.php" style="font-size:14px;color:white" method="post"><br>
        
         <label><b>Update Change Notes </b></label><br>
         <label><b> Notes: </b></label>
         <input type="text" placeholder="notes" name="notes" id="notes" required>
         
        <label><b>Change Id : </b></label>
             <input type="text" placeholder="Change #" name="id" id="id" required>
         <input type="submit" value ="Update"></button>   
         </form>
         <br>
         

        <br><br><a href='Chg.php'><input type='button' value='Changes' ></a>
        <br><br><a href='Login.php'><input type='button' value='Logout' ></a>
         
         
</body>

</html>





