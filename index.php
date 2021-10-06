 <?php 
    require_once "inc/functions.php";
 
    $task = $_GET['task'] ?? "report";
    $info = '';
    if('seed' == $task){
        seed(DB_NAME);
        $info ="Seeding Is Complete";
    }
 
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

<style>
body{
    margin-top:30px;
}
</style>
</head>
<body>
    <div class="container">
    <div class="row">
    <div class="column column-60 column-offset-20">
        <h2>Project-2 CRUD</h2>
        <p>A Sample project to perform crud operations using plain files and PHP</p>
        
        <?php include_once "INC/TEMPLATE/nav.php"; ?>

        <?php
        if($info != ''){
            echo "<p>{$info}</p>";
        }

        ?>
    
    </div>
    </div>
    
    
    
    </div>



</body>
</html>