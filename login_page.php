<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- 
CODE SOURCES
Author: w3schools
Web address : https://www.w3schools.com/howto/howto_css_login_form.asp -->

<style>
  body {font-family: Arial, Helvetica, sans-serif;}
  form {border: 3px solid #f1f1f1;}
  
  input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }
  
  button {
    background-color: #04AA6D;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
  }
  
  button:hover {
    opacity: 0.8;
  }
  
  .cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
  }
  
  .imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
  }
  
  img.avatar {
    width: 40%;
    border-radius: 50%;
  }
  
  .container {
    padding: 16px;
  }
  
  span.psw {
    float: right;
    padding-top: 16px;
  }
  
  /* Change styles for span and cancel button on extra small screens */
  @media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
  }
  </style>
<body>
    <header>

        <form action="ghost_writer" method="post">
          <div class="imgcontainer">
            <img src="https://cdn2.vectorstock.com/i/1000x1000/34/96/flat-business-man-user-profile-avatar-in-suit-vector-4333496.jpg" alt="Avatar" width="5%" height="5%" class="avatar" >
        </div>
          
            <div class="container">
              <label for="fname"><b>FirstName</b></label>
              <input type="text" placeholder="Enter Name" name="fname" id="fname" required>

              <label for="lname"><b>LastName</b></label>
              <input type="text" placeholder="Enter Name" name="lname" id="lname" required><br><br>
          
              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required><br><br>
          
              <!-- When button is clicked move to essay_details page -->
              <div class="container signin">
                  <!-- Connect to essay details page -->
                  <p><a href="essay_details.php">Login</a>.</p>
            </div>
        
              <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
              </label><br><br>
            </div>
          
            <div class="container" style="background-color:#f1f1f1">

              <form action="sign_up.php" method="POST" id="form"></form>
                <button type="button" class="cancelbtn">Cancel</button>
              <!-- Leads to link that allows you to input email? -->
              <span class="psw">Forgot <a href=" ">password?</a></span>
            </div>
          </form>

   <!-- Submitting all the information when the button is clicked -->
    <?php
    //Start the session
    session_start();
    //Printing out input on the SAME page
    //Only do this when form is submitted(button is clicked)
    if(isset ($_POST["Login"])){
        //variable $loginInput1 to store data that was typed in search box
        $loginInput1=$_POST["fname"];
        $loginInput2=$_POST["lname"];
        $loginInput3=$_POST["psw"];
        echo $loginInput1;
        echo $loginInput2;
        echo $loginInput3;
        }
        if (empty($_POST)){
            return false;

    }


    //Check if user has signed up before allowing login
    $query = "SELECT * FROM Customer WHERE Fname='$fname' AND Lname='$lname'AND pass_word='$psw' LIMIT 1";
		$results = mysqli_query($db, $query);


 ?> 

    </header>
</body>
</html>