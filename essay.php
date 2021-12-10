<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
    <style>
        body{
            background-color: violet;
            margin-top:20px;
        }
    </style>
</head>
<!-- CODE SOURCES
Author: bootdey.com
Web address : https://www.bootdey.com/snippets/view/Task-Details#html -->
<body>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />


<div class="container">
<div class="col-md-12 col-12 col-sm-12">
    <div class="card">
      <div class="card-header">
        <h4>Essay Details</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped">
            <tbody><tr>
              <th class="text-center">
                <div class="custom-checkbox custom-checkbox-table custom-control">
                  <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                  <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                </div>
              </th>
              <th>Essay Name</th>
              <th>Word Count</th>
              <th>Date Completed</th>
              <th>Edit&Delete</th>
              <th>Customer Name</th>
              
            </tr>
            <tr>
              <td class="p-0 text-center">
                <div class="custom-checkbox custom-control">
                  <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                  <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                </div>
              </td>
              <td>Corruption and Politics</td>
              <td>425</td>
              
              </td>
              <td>2021-03-21</td>
              <td>
                <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>
                <a class="btn btn-danger btn-action" data-toggle="tooltip" title="" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')" data-original-title="Delete"><i class="fas fa-trash"></i></a>
              </td>
              <td>Matthew</td>
            </tr>
            <tr>
              <td class="p-0 text-center">
                <div class="custom-checkbox custom-control">
                  <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-4">
                  <label for="checkbox-4" class="custom-control-label">&nbsp;</label>
                </div>
              </td>
              <td>Computer Electronics</td>
              <td>560</td>
              
              </td>
              <td>2021-03-02</td>
              <td>
              <td>Ama</td>
                <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>
                <a class="btn btn-danger btn-action" data-toggle="tooltip" title="" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')" data-original-title="Delete"><i class="fas fa-trash"></i></a>
              </td>
            </tr>
            <tr>
              <td class="p-0 text-center">
                <div class="custom-checkbox custom-control">
                  <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-5">
                  <label for="checkbox-5" class="custom-control-label">&nbsp;</label>
                </div>
              </td>
              <td>Forest fires</td>
              <td>450</td>
              
              </td>
              <td>2021-02-28</td>
              <td>
                <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>
                <a class="btn btn-danger btn-action" data-toggle="tooltip" title="" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')" data-original-title="Delete"><i class="fas fa-trash"></i></a>
              </td>
              <td>Kwame</td>
            </tr>
            <tr>
              <td class="p-0 text-center">
                <div class="custom-checkbox custom-control">
                  <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-6">
                  <label for="checkbox-6" class="custom-control-label">&nbsp;</label>
                </div>
              </td>
              <td>Fishing Industry</td>
              <td>450</td>
          
              </td>
              <td>2021-02-28</td>
              <td>
                <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>
                <a class="btn btn-danger btn-action" data-toggle="tooltip" title="" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')" data-original-title="Delete"><i class="fas fa-trash"></i></a>
              </td>
              <td>Kwame</td>
            </tr>
            <tr>
              <td class="p-0 text-center">
                <div class="custom-checkbox custom-control">
                  <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-6">
                  <label for="checkbox-6" class="custom-control-label">&nbsp;</label>
                </div>
              </td>
              <td>AI Machine</td>
              <td>300</td>
              
              </td>
              <td>2021-03-17</td>
              <td>
                <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>
                <a class="btn btn-danger btn-action" data-toggle="tooltip" title="" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')" data-original-title="Delete"><i class="fas fa-trash"></i></a>
              </td>
              <td>Maddie</td>
              
            </tr>
          </tbody></table>
        </div>
      </div>
    </div>
  </div>
</div>
<h2>SearchBox1</h2>
    <!-- 1st search box -->
    <form  method="post" id="form">
        <input type="text" name="Box1" value=""><br><br>
        <input type="submit" name="Search" value="Search">
         <!-- delete button -->
         <input type="submit" name="Delete" value="Delete">
    </form>

    

            <img src="https://sites.reading.ac.uk/wp-content/uploads/sites/34/2020/04/Turnitin-Logo.png" alt="Turnitin-Logo" width="20%" height="20%" ></img>
            <a href="https://www.turnitin.com/">TURNITIN </a>
            <img src="https://www.duplichecker.com/blog/wp-content/uploads/2019/01/fb-profile-logo.png" alt="Duplicheck-Logo" width="13%" height="25%" ></img>
            <a href="https://www.duplichecker.com/">DUPLICHECK</a>
            <img src="https://i1.wp.com/www.samosho.com/wp-content/uploads/2017/10/Grammarly-logo.png?ssl=1" alt="Grammmarly-Logo" width="10%" height="25%" ></img>
            <a href="https://www.grammarly.com/plagiarism-checker?q=plagiarism&utm_source=google&utm_medium=cpc&utm_campaign=search-ad-ext&utm_content=486649398671&utm_term=grammarly&matchtype=e&placement=&network=g&gclid=CjwKCAiA78aNBhAlEiwA7B76p8hn2YxWjLB06mgZSZ0UfRTPU7iFF8vDDaHPvZCTBm08TYY6-ea52RoC56IQAvD_BwE&gclsrc=aw.ds">GRAMMARLY</a><br><br>

           <div>
            <button type="button"><b><i><a href="ghost_writer.php">Check out a few of our Writers!</a></i></b></button><br><br>
           </div>

</body>
<?php
    //Start the session
    // session_start();
    // require("ghostwriter_database_credentials.php");
    
    // $connect = new mysqli(SERVER,USERNAME,PASSWORD,DATABASE);

    

    // //variable $formInput1 to store data that was typed in search box
    // $searchInput1=$_POST["Search"];
    
    // //Only do this when form is submitted(button is clicked)
    // if(isset ($_POST["Search"])){
    //     $searchQuery="SELECT * FROM  Essay WHERE Search_term LIKE '%$searchInput1%' ";
    //     $result = $connect->query($searchQuery);
    //     while ($record=$result->fetch_assoc()){
    //         echo $record["Search_term"] ."<br>";
    //     }

    // }
        
        

    //Deleting from database
    // if(isset ($_POST["Delete"])){
    // $getIdQuery="SELECT Essay_title FROM  Essay WHERE Search_term LIKE '%$searchInput1%' ";
    // $result = $connect->query($getIdQuery);
    // while ($record=$result->fetch_assoc()){
    //     $id = $record["Essay_title"] ;
    // }

    // $deleteQuery="DELETE FROM Essay WHERE  Essay_title = '$id' ";

    // if($connect->query($deleteQuery)===TRUE){
    //     echo "Deleted successfully";
    //     //
    // }else{
    //     echo "Error: ". $connect->error;
    // }

    // }
 ?>
</html>