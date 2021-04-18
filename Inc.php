<html>
<head>
    <title>
		Incident Management
	</title>
    <style>
    .credentials
          {
          padding: 12px;
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
               width: 5%;
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

        <form action="Inc_process.php" style="font-size:14px;color:white" method="post">
          <div class="credentials">
          <h2>--------------------------------------------------Incident Management--------------------------------------------</h2>
          <table style="font-size:14px;color:white" style='width:50%'>
          <tr>
            <td> <label ><b>Caller : </b></label>&emsp;&emsp;&emsp;<input type="text"  name="cal" id="cal" required>
            </td><td></td><td></td><td></td>
            <td> <label ><b>Opened : </b></label>&emsp;&emsp;&emsp;<input type="date"  name="op" id="op" required></td>

         </tr>
         
         <tr>
            <td> <label ><b>Location : </b></label>&emsp;&emsp;<input type="text"  name="loc" id="loc" required ></td>
            </td><td></td><td></td><td></td>
            <td> <label ><b>Opened By: </b></label>&emsp;&emsp;&emsp;<input type="text"  name="opb" id="opb" required></td>
         </tr>
         
         <tr>
            <td> <label ><b>Category : </b></label>&emsp;&emsp;<input type="text"  name="cat" id="cat" required></td>
            </td><td></td><td></td><td></td>
            <td> <label ><b>Contact Type : </b></label>&emsp;&emsp;&emsp;<input type="text"  name="ct" id="ct" required></td>
         </tr>
         <tr>
            <td> <label ><b>Sub Category : </b></label>&emsp;&emsp;<input type="text"  name="sc" id="sc" required></td>
            </td><td></td><td></td><td></td>
            <td> <label ><b>State : </b></label>&emsp;&emsp;&nbsp<select name="state" id="state" required>
            <option value="Open">Open</option>
  <option value="Active">Active</option>
  <option value="Waiting additional info">Waiting additional info</option>
  <option value="Resolved">Resolved</option>
  <option value="voided">voided</option>
</select>
         </tr>
         <tr>
            <td> <label ><b>Configuration Item : </b></label>&emsp;&emsp;<input type="text"  name="ci" id="ci" required></td>
            </td><td></td><td></td><td></td>
            <td> <label ><b>Assigned Group : </b></label>&emsp;&emsp;&emsp;<input type="text"  name="ag" id="ag" required></td>
         </tr>
         <tr>
            <td> <label ><b>Impact : </b></label>&emsp;&emsp;&nbsp<select name="impact" id="impact" required>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>
</td><td></td><td></td><td></td>
            <td> <label ><b>Assigned To : </b></label>&emsp;&emsp;&emsp;<input type="text"  name="at" id="at" required></td>
         </tr>

         <tr>
            <td> <label ><b>Urgency : </b></label>&emsp;&emsp;<select name="urg" id="urg" required>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
</select>
         </tr>

         <tr>
            <td> <label ><b>Priority : </b></label>&emsp;&emsp;<select name="pri" id="pri" required>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
</select>
         </tr>

         </table> 
         
        <table style="font-size:14px;color:white" style='width:50%'>
         <tr>
            <td width="120"> <label ><b>Short Description  : </b></label>&emsp;&emsp;<textarea id="sd" name="sd" rows="4" cols="100" required></textarea></td> 
         </tr>

         <tr>
            <td width="120"> <label ><b>Description  : </b></label>&emsp;&emsp;<textarea id="d" name="d" rows="4" cols="100"></textarea></td> 
         </tr>

         </table></div>
         <button type="submit">submit</button> 
            
        </form>


</body>
</html>





