<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- CODE SOURCES
Author: w3schools
Web address : https://www.w3schools.com/howto/howto_css_register_form.asp -->
<style>
  body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: black;
  }
  
  * {
    box-sizing: border-box;
  }
  
  /* Padding the containers */
  .container {
    padding: 16px;
    background-color: white;
  }
  
  /* Full-width input fields */
  input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 20px 0;
    display: inline-block;
    border: none;
    background: lightsteelblue;
  }
  
  input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
  }
  
  /* Overwrite default styles of hr */
  hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
  }
  
  /* Styling for submit button */
  .registerbtn {
    background-color: #04AA6D;
    color: black;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
   
  }
  
  .registerbtn:hover {
    opacity: 1;
  }
  
  /*Making links blue */
  a {
    color: dodgerblue;
  }
  
  .signin {
    background-color: #f1f1f1;
    text-align: center;
  }
  </style>
<body>
    <header>
        <form action="login_page.php">
            <div class="container">
              <h1>Register</h1>
              <p>Please fill in this form to create an account.</p>
              <hr>
          
              <label for="fname"><b>FirstName</b></label>
              <input type="text" placeholder="Enter Name" name="fname" id="fname" required>
              <label for="lname"><b>LastName</b></label>
              <input type="text" placeholder="Enter Name" name="lname" id="lname" required><br><br>

              <label for="age"><b>Age</b></label>
              <input type="number" placeholder="Enter Age" name="age" id="age" required><br><br>
              <!-- Should only accept numbers as input -->

              <label for="gender"><b>Gender</b></label>
              <input type="Checkbox" Name="Gender" Value ="M">Male
              <input type="Checkbox" Name= "Gender" Value ="F">Female <br><br>
             
              <label for="occupation"><b>Occupation</b></label>
              <input type="text" placeholder="Enter Occupation" name="occupation" id="occupation" required><br><br>

              <label for="school Name"><b>School Name</b></label>
              <input type="text" placeholder="Enter School Name" name="school Name" id="school Name" required><br><br>
          
              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" id="psw" minlength="8" required><br><br>
              <!-- <label for="confirm_password"><b>Password Confirmation</b></label>
              <input type="password" name="Confirm Password" id="confirm_password"minlength="8" required><br><br>
            

              var check = function() {
                if (document.getElementById('password').value ==
                  document.getElementById('confirm_password').value) {
                  document.getElementById('message').style.color = 'green';
                  document.getElementById('message').innerHTML = 'matching';
                } else {
                  document.getElementById('message').style.color = 'red';
                  document.getElementById('message').innerHTML = 'not matching';
                }
              } -->
              <!-- <label>password :
                <input name="password" id="password" type="password" onkeyup='check();' />
              </label>
              <br>
              <label>confirm password:
                <input type="password" name="confirm_password" id="confirm_password"  onkeyup='check();' /> 
                <span id='message'></span>
              </label> -->
          
                <!-- Link to terms of privacy document -->
              <p>By creating an account you agree to our <a href="file:///C:/Users/loisj/OneDrive/PrivacyPolicyCasperpro.pdf">Terms & Privacy</a>.</p>
              <form action="login_page.php" method="POST" id="form"></form>
                <button type="submit" class="registerbtn">Register</button>
            </div>
          
            <div class="container signin">
                <!-- Connect Sign in to login_page -->
              <p>Already have an account? <a href="login_page.php">Sign in</a>.</p>
            </div>
          </form>

    <!-- Submitting all the information when the button is clicked -->
    <?php
    //Start the session
    session_start();
    //Printing out input on the SAME page
    //Only do this when form is submitted(button is clicked)
    if(isset ($_POST["submit"])){
        //variable $formInput1 to store data that was typed in search box
        $formInput1=$_POST["fname"];
        $formInput2=$_POST["lname"];
        $formInput3=$_POST["age"];
        $formInput4=$_POST["Gender"];
        $formInput5=$_POST["occupation"];
        $formInput6=$_POST["school Name"];
        $formInput7=$_POST["psw"];
        echo $formInput1;
        echo $formInput2;
        echo $formInput3;
        echo $formInput4;
        echo $formInput5;
        echo $formInput6;
        echo $formInput7;
        }
        if (empty($_POST)){
            return false;

    }


    //Inserting values into the database

    require("ghostwriter_database_credentials.php");

    $AddBoxM = $_POST["fname"];
    $AddBoxN = $_POST["lname"];
    $AddBoxO = $_POST["age"];
    $AddBoxP = $_POST["Gender"];
    $AddBoxQ = $_POST["occupation"];
    $AddBoxR = $_POST["school Name"];
    $AddBoxS = $_POST["psw"];
    echo $AddBoxM;
    echo $AddBoxN;
    echo $AddBoxO;
    echo $AddBoxP;
    echo $AddBoxQ;
    echo $AddBoxR;
    echo $AddBoxS;

    $connect = new mysqli(SERVER,USERNAME,PASSWORD,DATABASE);
    //Inserting the value that was put in the search box into the table
    $addQuery="INSERT INTO Customer(`Fname`,`Lname`,`Age`,`Gender`,`Occupation`,`School_name`,`pass_word`) VALUES('$AddBoxM','$AddBoxN','$AddBoxO','$AddBoxP','$AddBoxQ','$AddBoxR','$AddBoxS')";

    if($connect->query($addQuery)===TRUE){
        echo "New record inserted successfully";
        echo $AddBox;
    }else{
        echo "Error: ". $connect->error;
    } 
    ?>


    </header>
    
</body>
</html>