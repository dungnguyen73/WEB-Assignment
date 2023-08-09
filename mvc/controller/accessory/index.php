
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
        if(isset($_POST['add_accessory'])){
            $name = $_POST['product_name'];
            $price = $_POST['product_price'];
            $image_path = $_POST["image_path"];
            $note = $_POST['product_note'];
            $subcategory = $_POST['product_subcategory'];
            $tbl = 'accessory';
            $result_temp = $db->InsertData($tbl, $name, $image_path, $note, $subcategory, $price);
            if($result_temp){
                // echo ("ADD SUCCESS!");
                $success[] = "add_success";
            }
            
        }
        require_once('view/accessory/addaccessory.php');
        break;
    }
    case 'edit':{
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $tbl = 'accessory';
            $dataId= $db->getDataAt($tbl, $id);
            // echo ("dfsgh");
            if(isset($_POST['accessoryupdateinfor'])){
                //get updated information from view
                $name = $_POST['product_name'];
                $price = $_POST['product_price'];
                $image_path = $_POST["image_path"];
                $note = $_POST['product_note'];
                $subcategory = $_POST['product_subcategory'];

                //pass these information to model
                if($db->updateData($tbl,$id, $name, $image_path, $note, $subcategory, $price)){
                    header('location: index.php?controller=accessory&action=list'); //
                    // echo "success update";
                }
            }
        }
        require_once('view/accessory/edit_accessory.php');
        break;
    }
    case 'delete':{
        if(isset($_GET['id'])){
            $id=$_GET['id'];
            $tbl ='accessory';
            if ($db->Delete($id,$tbl)) {
                header('location: index.php?controller=accessory&action=list');
            }
        }
        else{
            header('location: index.php?controller=accessory&action=list');
        }
        require_once('view/accessory/deleteaccessory.php');
        break;
    }
    case 'list':{
        $tbl = 'accessory';
        // $db->getData($tbl);
        $data = $db->getAll($tbl);
        require_once('view/accessory/listaccessory.php');
        break;
    }
    case 'search':{
        if(isset($_GET['search_query'])){
            $searchQuery =$_GET['search_query'];
            $tbl='accessory';
            $search_result = $db->SearchData($tbl, $searchQuery);
            
        }
        require_once('view/accessory/searchitems.php');
        break;
    }
    case 'public_search':{
        if(isset($_GET['search_query'])){
            $searchQuery =$_GET['search_query'];
            $tbl='accessory';
            $search_result = $db->SearchData($tbl, $searchQuery);
            
        }
        require_once('view/accessory/searchitems_public.php');
        break;
    }
    default:{
        $tbl = 'accessory';
        $data = $db->getAll($tbl);
        require_once('view/accessory/listaccessory.php');
        break;
    }
}

?>