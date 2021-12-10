<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
<!-- fetching information put in registeration form and displaying -->
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
            </tr>
            <tr>
              <td class="p-0 text-center">
                <div class="custom-checkbox custom-control">
                  <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-6">
                  <label for="checkbox-6" class="custom-control-label">&nbsp;</label>
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
            </tr>
            <tr>
              <td class="p-0 text-center">
                <div class="custom-checkbox custom-control">
                  <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-6">
                  <label for="checkbox-6" class="custom-control-label">&nbsp;</label>
                </div>
              </td>
              <td>Fishing Industry</td>
              <td>300</td>
              
              </td>
              <td>2021-03-17</td>
              <td>
                <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>
                <a class="btn btn-danger btn-action" data-toggle="tooltip" title="" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')" data-original-title="Delete"><i class="fas fa-trash"></i></a>
              </td>
              
            </tr>
          </tbody></table>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
    //Deleting from database
    if(isset ($_POST["Delete"])){
    $getIdQuery="SELECT Lab_id FROM  practical_lab_table WHERE Search_term LIKE '%$searchInput1%' ";
    $result = $connect->query($getIdQuery);
    while ($record=$result->fetch_assoc()){
        $id = $record["Lab_id"] ;
    }

    $deleteQuery="DELETE FROM practical_lab_table WHERE  Lab_id = '$id' ";

    if($connect->query($deleteQuery)===TRUE){
        echo "Deleted successfully";
        //
    }else{
        echo "Error: ". $connect->error;
    }

    }
 ?>
</html>