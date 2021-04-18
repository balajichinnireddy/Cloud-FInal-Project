<!DOCTYPE html>
<html>
    <head>
        <title>
            Login
        </title>
          <style>
          form {
          text-align: center;
          }
         .img 
          {
          text-align: center;
          margin: 8px 0 8px 0;
          }

          .credentials
          {
          padding: 12px;
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

          button
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

a:link {
              color: red;
                }
a:visited {
  color: green;
}

a:hover {
  opacity: 0.5;
}

a:active {
  color: yellow;
}

        </style>
    </head>

    <body>
    <br>
    <br>
    <br>
    <br>
        <form action="Login_process.php" method="post">
          <div class="img">
            <img style="width:30%;height:30%;border-radius: 10%;"  src="Login_Image.png" alt="Could Not Load Image">
          </div>
          <br>
          <br>
          <div class="credentials">
             <label style="color:white;"><b>Email : </b></label>
             <input type="text" placeholder="Enter Email" name="uname" id="uname" required>

            <br>
            <br>

             <label style="color:white;"><b>Password : </b></label>
             <input type="password" placeholder="Enter Password" name="pwd"  id="pwd" required>
             <br>
             <br>
             <button type="submit">Login</button>
             <br>
             <br>
             <a href="SignUp.php">Sign Up</a><br>
            </div>
        </form>
    </body>
</html>
