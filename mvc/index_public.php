
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

