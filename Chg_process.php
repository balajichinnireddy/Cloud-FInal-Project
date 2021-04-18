<html>
<head>
    <title>
		Change Task
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

        <form action="Chg_process1.php" style="font-size:14px;color:white" method="post">
        <label>Change Tasks : </label><input type="number" min="0" max="4" name="nofctasks" id="nofctasks" value="0">
        <input type="button" onclick="myFunction()" value="Go" Name="Go"><br>
        <fieldset>
		<legend>Change Tasks::</legend>
        <div style="display:none" id="first">
			<lable><b>Task 1 Details:</b></label><br>
			<label>Change Task Name</label><input type="text" name="A1"><br><br>
			<label>Assigned Group </label><input type="text" name="A2"><br><br>
			<label> Assigned To </label><input type="text" name="A3"><br><br>
		</div>

        <div style="display:none" id="second">
        <lable><b>Task 1 Details:</b></label><br>
			<label>Change Task Name</label><input type="text" name="B1"><br><br>
			<label>Assigned Group </label><input type="text" name="B2"><br><br>
			<label> Assigned To </label><input type="text" name="B3"><br><br>
         <lable><b>Task 2 Details:</b></label><br>
			<label>Change Task Name</label><input type="text" name="B4"><br><br>
			<label>Assigned Group </label><input type="text" name="B5"><br><br>
			<label> Assigned To </label><input type="text" name="B6"><br><br>
			
		</div>

        <div style="display:none" id="third">
        <lable><b>Task 1 Details:</b></label><br>
			<label>Change Task Name</label><input type="text" name="C1"><br><br>
			<label>Assigned Group </label><input type="text" name="C2"><br><br>
			<label> Assigned To </label><input type="text" name="C3"><br><br>
         <lable><b>Task 2 Details:</b></label><br>
			<label>Change Task Name</label><input type="text" name="C4"><br><br>
			<label>Assigned Group </label><input type="text" name="C5"><br><br>
			<label> Assigned To </label><input type="text" name="C6"><br><br>
         <lable><b>Task 3 Details:</b></label><br>
			<label>Change Task Name</label><input type="text" name="C7"><br><br>
			<label>Assigned Group </label><input type="text" name="C8"><br><br>
			<label> Assigned To </label><input type="text" name="C9"><br><br>
			
		</div>

        <div style="display:none" id="fourth">
        <lable><b>Task 1 Details:</b></label><br>
			<label>Change Task Name</label><input type="text" name="D1"><br><br>
			<label>Assigned Group </label><input type="text" name="D2"><br><br>
			<label> Assigned To </label><input type="text" name="D3"><br><br>
         <lable><b>Task 2 Details:</b></label><br>
			<label>Change Task Name</label><input type="text" name="D4"><br><br>
			<label>Assigned Group </label><input type="text" name="D5"><br><br>
			<label> Assigned To </label><input type="text" name="D6"><br><br>
         <lable><b>Task 3 Details:</b></label><br>
			<label>Change Task Name</label><input type="text" name="D7"><br><br>
			<label>Assigned Group </label><input type="text" name="D8"><br><br>
			<label> Assigned To </label><input type="text" name="D9"><br><br>
        <lable><b>Task 4 Details:</b></label><br>
			<label>Change Task Name</label><input type="text" name="D10"><br><br>
			<label>Assigned Group </label><input type="text" name="D11"><br><br>
			<label> Assigned To </label><input type="text" name="D12"><br><br>
			
		</div>

        <input type='hidden' name='rb' value="<?php echo $_POST['rb']?>"/>
        <input type='hidden' name='type' value="<?php echo $_POST['type']?>"/>
        <input type='hidden' name='cat' value="<?php echo $_POST['cat']?>"/>
        <input type='hidden' name='state' value="<?php echo $_POST['state']?>"/>
        <input type='hidden' name='ci' value="<?php echo $_POST['ci']?>"/>
        <input type='hidden' name='ag' value="<?php echo $_POST['ag']?>"/>
        <input type='hidden' name='pri' value="<?php echo $_POST['pri']?>"/>
        <input type='hidden' name='at' value="<?php echo $_POST['at']?>"/>
        <input type='hidden' name='ri' value="<?php echo $_POST['ri']?>"/>
        <input type='hidden' name='st' value="<?php echo $_POST['st']?>"/>
        <input type='hidden' name='impact' value="<?php echo $_POST['impact']?>"/>
        <input type='hidden' name='ed' value="<?php echo $_POST['ed']?>"/>
        <input type='hidden' name='sd' value="<?php echo $_POST['sd']?>"/>
        <input type='hidden' name='d' value="<?php echo $_POST['d']?>"/>
        <input type='hidden' name='n' value="<?php echo $_POST['n']?>"/>
        
        <script>
		function myFunction()
			{
		var num=document.getElementById("nofctasks");
		var first=document.getElementById("first");
		var second=document.getElementById("second");
		var third=document.getElementById("third");
		var fourth=document.getElementById("fourth");
		if(num.value==1){
		 first.style.display="block";
		 second.style.display="none";
		 third.style.display="none";
		 fourth.style.display="none";
		}
		if(num.value==2){
		 first.style.display="none";
		 second.style.display="block";
		 third.style.display="none";
		 fourth.style.display="none";
		}
		if(num.value==3){
		 first.style.display="none";
		 second.style.display="none";
		 third.style.display="block";
		 fourth.style.display="none";
		}
		if(num.value==4){
		 first.style.display="none";
		 second.style.display="none";
		 third.style.display="none";
		 fourth.style.display="block";
		}

		if(num.value==0){
		 first.style.display="none";
		 second.style.display="none";
		 third.style.display="none";
		 fourth.style.display="none";
		}
			}
	</script>
	</fieldset>

    
        


    <button type="submit">submit</button> 
        </form>
</body>
</html>





