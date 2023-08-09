<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Quản lý sản phẩm</title>
</head>
<body>
   
<div class="container mt-5">
        <h2>Category Selection</h2>
        
        <div class="btn-group" role="group" aria-label="Category Selection">
            <a href="?controller=shoes" class="btn btn-primary">Shoes</a>
            <a href="?controller=clothing" class="btn btn-primary">Clothing</a>
            <a href="?controller=accessory" class="btn btn-primary">Accessory</a>
        </div>
    </div>
    
    <?php
    include "model/db_config.php";
    $db= new Database;
    $db->connect();



    if(isset($_GET['controller'])){
        $controller=$_GET["controller"];

    }
    else{
        $controller = '';
    }

    switch($controller){
        case 'shoes':{
            require_once('controller/shoes/index.php');
            break;
        }
        case 'clothing':{
            require_once('controller/clothing/index.php');
            break;
        }
        case 'accessory':{
            require_once('controller/accessory/index.php');
            break;
        }
        
    }
    ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>

