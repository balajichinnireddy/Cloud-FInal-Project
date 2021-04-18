<!DOCTYPE html>
<html>
    <head>
        <title>
            Sign Up
        </title>
          <style>
          form {
          text-align: center;
          }
         

          .credentials
          {
          padding: 12px;
          color:white;
          }

        input[type=text], input[type=password] 
        {
            width: 30%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
          }

          button,a
           {
                background-color: #4CAF50 ;
                color: white;
               padding: 14px 20px;
                margin: 8px 0;
               border: none;
               cursor: pointer;
               width: 15%;
              }
              body{
                background-image:url('Background_Image.jpg');
		background-repeat: repeat;
		}


        </style>
        <script>
        function validateForm() {
            var x = document.getElementById("pwd");
            var y = document.getElementById("rpwd");
            if (x.value != y.value)
            {
                window.alert("Passwords Do not Match");
            }

        }
        </script>
    </head>

    <body>
    <br>
    <br>
    <br>
    <br>
        <form action="signup_process.php" onsubmit=" validateForm()" method="post">
        <div class="credentials">
            <h1>Sign Up</h1>

            <label><b>First Name : </b></label> 
            <input style="width: 15%;"  type="text" placeholder="First Name" name="fname"  id="fname" required> 


            <label><b>Last Name : </b></label> 
            <input style="width: 15%;" type="text" placeholder="Last Name" name="lname"  id="lname" required>

            <br> 

            <label><b>Mobile : </b></label> <br>
            <input  style="width: 20%;" type="text" placeholder="+1 9876543210" name="mobile"  id="mobile" required>

            <br>   

            <label><b>Email : </b></label> <br>
            <input  style="width: 20%;" type="text" placeholder="Enter Email" name="email"  id="email" required>

            <br>
            <label ><b>Password : </b></label> <br>
            <input style="width: 20%;" type="password" placeholder="Enter Password" name="pwd" id="pwd" required>
            <br>
            <label ><b>Retype Password : </b></label> <br>
             <input  style="width: 20%;" type="password" placeholder="Retype Password" name="rpwd" id="rpwd" required>
             <br> <br>
             <button type="submit">Sign Up</button>
             <br><br>
             <button style="background-color:red" type="button" value="Cancel" ><a style="background-color:red" href="Login.php">Cancel </a></button>
        </form>
    </body>
</html>
