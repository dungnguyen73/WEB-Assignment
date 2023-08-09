
<?php


//  include "model/db_config.php";
if(isset($_GET['action'])){
    $action = $_GET['action'];
}
else{
    $action = '';
}
$success = array();
switch($action){
    case 'add':{
        if(isset($_POST['add_shoes'])){
            $name = $_POST['product_name'];
            $price = $_POST['product_price'];
            $image_path = $_POST["image_path"];
            $note = $_POST['product_note'];
            $subcategory = $_POST['product_subcategory'];
            $tbl = 'shoes';
            $result_temp = $db->InsertData($tbl,$name, $image_path, $note, $subcategory, $price);
            if($result_temp){
                // echo ("ADD SUCCESS!");
                $success[] = "add_success";
            }
            
        }
        require_once('view/shoes/addshoes.php');
        break;
    }
    case 'edit':{
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $tbl = 'shoes';
            $dataId= $db->getDataAt($tbl, $id);
            // echo ("dfsgh");
            if(isset($_POST['shoesupdateinfor'])){
                //get updated information from view
                $name = $_POST['product_name'];
                $price = $_POST['product_price'];
                $image_path = $_POST["image_path"];
                $note = $_POST['product_note'];
                $subcategory = $_POST['product_subcategory'];

                //pass these information to model
                if($db->updateData($tbl,$id, $name, $image_path, $note, $subcategory, $price)){
                    header('location: index.php?controller=shoes&action=list'); //
                    // echo "success update";
                }
            }
        }
        require_once('view/shoes/edit_shoes.php');
        break;
    }
    case 'delete':{
        if(isset($_GET['id'])){
            $id=$_GET['id'];
            $tbl ='shoes';
            if ($db->Delete($id,$tbl)) {
                header('location: index.php?controller=shoes&action=list');
            }
        }
        else{
            header('location: index.php?controller=shoes&action=list');
        }
        require_once('view/shoes/deleteshoes.php');
        break;
    }
    case 'list':{
        $tbl = 'shoes';
        // $db->getData($tbl);
        $data = $db->getAll($tbl);
        require_once('view/shoes/listshoes.php');
        break;
    }
    case 'search':{
        if(isset($_GET['search_query'])){
            $searchQuery =$_GET['search_query'];
            $tbl='shoes';
            $search_result = $db->SearchData($tbl, $searchQuery);
            
        }
        require_once('view/shoes/searchitems.php');
        break;
    }
    case 'public_search':{
        if(isset($_GET['search_query'])){
            $searchQuery =$_GET['search_query'];
            $tbl='shoes';
            $search_result = $db->SearchData($tbl, $searchQuery);
            
        }
        require_once('view/shoes/searchitems_public.php');
        break;
    }
    default:{
        $tbl = 'shoes';
        $data = $db->getAll($tbl);
        require_once('view/shoes/listshoes.php');
        break;
    }
}

?>