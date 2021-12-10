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
        <form action="...">
            <div class="container">
              <h1>Register</h1>
              <p>Please fill in this form to create an account.</p>
              <hr>
          
              <label for="title"><b>Title</b></label>
              <input type="text" placeholder="Enter Title" name="title" id="title" required>
              
              <label for="wordcount"><b>Wordcount</b></label>
              <input type="text" placeholder="Enter Wordcount" name="wordcount" id="wordcount" required><br><br>
             
              <label for="date"><b>Date Due</b></label>
              <input type="number" placeholder="Enter Date" name="date" id="date" required><br><br>

        
          
            <div class="container signin">
                <!-- Connect to essay.php page -->
              <p><a href="essay.php">Submit Info</a>.</p>
            </div>
          </form>

    <!-- Submitting all the information when the button is clicked -->
    <?php
    //Start the session
    session_start();
    //Printing out input on the SAME page
    //Only do this when form is submitted(button is clicked)
    if(isset ($_POST["Register"])){
        //variable $essayInput1 to store data that was typed in search box
        $essayInput1=$_POST["title"];
        $essayInput2=$_POST["wordcount"];
        $essayInput3=$_POST["date"];
        echo $essayInput1;
        echo $essayInput2;
        echo $essayInput3;
        }
        if (empty($_POST)){
            return false;

    }


    //Inserting values into the database 

    require("ghostwriter_database_credentials.php");

    $AddBoxC = $_POST["title"];
    $AddBoxD = $_POST["wordcount"];
    $AddBoxE = $_POST["date"];
    echo $AddBoxC;

    $connect = new mysqli(SERVER,USERNAME,PASSWORD,DATABASE);
    //Inserting the value that was put in the search box into the table/\
    $addQuery="INSERT INTO Essay(`Essay_title`,`Word_count`,`Date_completed`) VALUES('$AddBoxC','$AddBoxD','$AddBoxE')";

    if($connect->query($addQuery)===TRUE){
        echo "New record inserted successfully";
        echo $AddBoxC;
        //
    }else{
        echo "Error: ". $connect->error;
    }
    ?>


    </header>
    
</body>
</html>