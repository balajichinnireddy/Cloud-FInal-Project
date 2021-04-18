<html>
<head>
    <title>
		Change Management
	</title>
    <style>
    .credentials
          {
          padding: 12px;
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
               width: 5%;
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
                th,td {
  width: 150px;
  padding: 5px;
}
        
        
    </style>
</head>
<body>

        <form action="Chg_process.php" style="font-size:14px;color:white" method="post">
          <div class="credentials">
          <h2>--------------------------------------------------Change Management--------------------------------------------</h2>
          <table style="font-size:14px;color:white" style='width:50%'>
          <tr>
          <td> <label ><b>Requested By : </b></label>&emsp;&emsp;&emsp;<input type="text"  name="rb" id="rb" required >
          </td><td></td><td></td><td></td>
          <td> <label ><b>Type : </b></label>&emsp;&emsp;<select name="type" id="type" required >
  <option value="Normal">Normal</option>
  <option value="Emergency">Emergency</option>
  
</select>
          </tr>

          <tr>
          <td> <label ><b>Category : </b></label>&emsp;&emsp;&emsp;<input type="text"  name="cat" id="cat" required ></td>

          <td></td><td></td><td></td>
          <td> <label ><b>State : </b></label>&emsp;&emsp;<select name="state" id="state" required>
  <option value="Draft">Draft</option>
  <option value="Submit">Submit</option>
  <option value="Pendiing Approval">Pending Approval</option>
  <option value="Approved">Approved</option>

  
</select>
          </tr>

          <tr>
          <td> <label ><b>Configuration Item : </b></label>&emsp;&emsp;&emsp;<input type="text"  name="ci" id="ci"  required></td>
          <td></td><td></td><td></td>
          <td> <label ><b>Assigned Group : </b></label>&emsp;&emsp;&emsp;<input type="text"  name="ag" id="ag" required></td>

          </tr>

          <tr>
          <td> <label ><b>Priority : </b></label>&emsp;&emsp;<select name="pri" id="pri">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
</select>
<td></td><td></td><td></td>
          <td> <label ><b>Assigned To : </b></label>&emsp;&emsp;&emsp;<input type="text"  name="at" id="at" required ></td>
          </tr>
<br>
          <tr>
          <td> <label ><b>Risk : </b></label>&emsp;&emsp;<select name="ri" id="ri">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="None">None</option>
</select>
<td></td><td></td><td></td>
          <td> <label ><b>Start Date : </b></label>&emsp;&emsp;&emsp;<input type="date"  name="st" id="st"  required ></td>
          </tr>

          <tr>
          <td> <label ><b>Impact : </b></label>&emsp;&emsp;&nbsp<select name="impact" id="impact">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
</select>
<td></td><td></td><td></td>
          <td> <label ><b>End Date : </b></label>&emsp;&emsp;&emsp;<input type="date"  name="ed" id="ed" required ></td>
          </tr>

         </table>
         <table style="font-size:14px;color:white" style='width:50%'>
         <tr>
            <td width="120"> <label ><b>Short Description  : </b></label>&emsp;&emsp;<textarea id="sd" name="sd" rows="4" cols="100" required></textarea></td> 
         </tr>

         <tr>
            <td width="120"> <label ><b>Description  : </b></label>&emsp;&emsp;<textarea id="d" name="d" rows="4" cols="100"></textarea></td> 
         </tr>

         <tr>
            <td width="120"> <label ><b>Additional Notes  : </b></label>&emsp;&emsp;<textarea id="n" name="n" placeholder = "Change Plan/ Backout Plan/ Pre & Post Implementation Plans" rows="4" cols="200"></textarea></td> 
         </tr>
         </table>
         </div>
         <button type="submit">Next</button>  
        </form>
</body>
</html>





