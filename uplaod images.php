<?php
$hostname = 'localhost';
$dbuser = 'sqluser';
$dbpassword = 'password';
$dbname = 'masaartstudio';
$con = mysqli_connect("localhost","sqluser","password","masaartstudio");
if(isset($_POST['upload']))
{

    $file = $_FILES['image']['name'];
    $query = "INSERT INTO blog(article_ID, Title,publishdate, pic) VALUES ('2','Painting using oil colors','2022-10-12','$file')";
    $res = mysqli_query($con, $query);
    if($res)
    {
        move_uploaded_file($_FILES['image']['tmp_name'], "$file");
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>
<div class="container">
     <div class="col-md-12">
         <div class="row">
              <div class="col-md-6">
                  <h3 class="text-center" >UPLOAD IMAGE</h3>
                  <form class= "my-5" method= "post" enctype="multipart/form-data">
                      <input type= "file" name="image" class="form-control">
                      <input type= "submit" name= "upload" value= "UPLOAD" class="btn
                      btn-success my-3">
                  </form>
             </div>
</body>
</html>