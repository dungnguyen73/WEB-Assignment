
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
        if(isset($_POST['add_clothing'])){
            $name = $_POST['product_name'];
            $price = $_POST['product_price'];
            $image_path = $_POST["image_path"];
            $note = $_POST['product_note'];
            $subcategory = $_POST['product_subcategory'];
            $tbl = 'clothing';
            $result_temp = $db->InsertData($tbl, $name, $image_path, $note, $subcategory, $price);
            if($result_temp){
                // echo ("ADD SUCCESS!");
                $success[] = "add_success";
            }
            
        }
        require_once('view/clothing/addclothing.php');
        break;
    }
    case 'edit':{
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $tbl = 'clothing';
            $dataId= $db->getDataAt($tbl, $id);
            // echo ("dfsgh");
            if(isset($_POST['clothingupdateinfor'])){
                //get updated information from view
                $name = $_POST['product_name'];
                $price = $_POST['product_price'];
                $image_path = $_POST["image_path"];
                $note = $_POST['product_note'];
                $subcategory = $_POST['product_subcategory'];

                //pass these information to model
                if($db->updateData($tbl,$id, $name, $image_path, $note, $subcategory, $price)){
                    header('location: index.php?controller=clothing&action=list'); //
                    // echo "success update";
                }
            }
        }
        require_once('view/clothing/edit_clothing.php');
        break;
    }
    case 'delete':{
        if(isset($_GET['id'])){
            $id=$_GET['id'];
            $tbl ='clothing';
            if ($db->Delete($id,$tbl)) {
                header('location: index.php?controller=clothing&action=list');
            }
        }
        else{
            header('location: index.php?controller=clothing&action=list');
        }
        require_once('view/clothing/deleteclothing.php');
        break;
    }
    case 'list':{
        $tbl = 'clothing';
        // $db->getData($tbl);
        $data = $db->getAll($tbl);
        require_once('view/clothing/listclothing.php');
        break;
    }
    case 'search':{
        if(isset($_GET['search_query'])){
            $searchQuery =$_GET['search_query'];
            $tbl='clothing';
            $search_result = $db->SearchData($tbl, $searchQuery);
            
        }
        require_once('view/clothing/searchitems.php');
        break;
    }
    case 'public_search':{
        if(isset($_GET['search_query'])){
            $searchQuery =$_GET['search_query'];
            $tbl='clothing';
            $search_result = $db->SearchData($tbl, $searchQuery);
            
        }
        require_once('view/clothing/searchitems_public.php');
        break;
    }
    default:{
        $tbl = 'clothing';
        $data = $db->getAll($tbl);
        require_once('view/clothing/listclothing.php');
        break;
    }
}

?>