<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Nike. Just Do It</title>
    <style>
      body{
        font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
      }
      .no-underline {
            text-decoration: none !important;
        }
        .note{
            color: #9E3500;
        }
        .card{
            border: none;
        }
        .price{
            font-size: 14px;
        }
    </style>
</head>

<body>
<?php include 'nav.php' ?>
<!--  -->
<?php include "../mvc/model/db_config.php"; 
    $db= new Database;
    
    if(!$db->connect()){
        echo "Can not connect to database!";
    }
    else{
        // echo "successfully connect!";
    }
    $tbl = 'accessory';
    $data = $db->getAll($tbl);
    // set-up for pagination
    $productsPerPage = 9; // Số sản phẩm trên mỗi trang
    $totalProduct = $db->num_rows(); // Tổng số sản phẩm
    $totalPages = ceil($totalProduct / $productsPerPage); // Tổng số trang

    
    $currentPage = isset($_GET['page']) ? intval($_GET['page']) : 1;
    if ($currentPage < 1) {
        $currentPage = 1;
    } elseif ($currentPage > $totalPages) {
        $currentPage = $totalPages;
    }

    $startIndex = ($currentPage - 1) * $productsPerPage;
    $endIndex = min($startIndex + $productsPerPage, $totalProduct);
?>


<div class="container-fluid">
    <div class="title my-4">
        <h4>Accessory <?php 
        $totalProduct = $db->num_rows();
        echo " (".$totalProduct .")";
        ?></h4> 
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-12" id="category">
            <div class="d-flex flex-lg-column">
                <a href="../mvc/index_public.php?controller=accessory&action=public_search&search_query=bag" class = "text-dark no-underline mr-3 mb-lg-3">Bags</a>
                <a href="../mvc/index_public.php?controller=accessory&action=public_search&search_query=ball" class = "text-dark no-underline mr-3 mb-lg-3">Balls</a>
                <a href="../mvc/index_public.php?controller=accessory&action=public_search&search_query=hat" class = "text-dark no-underline mr-3 mb-lg-3">Hat</a>
                <a href="../mvc/index_public.php?controller=accessory&action=public_search&search_query=sunglasses" class = "text-dark no-underline mr-3 mb-lg-3">Sunglasses</a>
                
            </div>
            <hr class ="d-lg-none">
        </div>
        <div class="col-lg-9 px-0" id="accessory-galery">
            <div class="container-fluid px-0 mx-0" id="product-container">

                <div class="row">
                    <!-- card product -->
                    
                    <?php  
                    foreach($data as $value){
                        ?>
                    <!-- card product  -->
                    <div class="col-6 col-lg-4 px-1"> <!-- show 2 product on 1 line for any screens, but 3 for large screen  -->
                        <div class="card border-0">
                            <img src="<?php echo $value['image_path'];?>" alt="" loading="lazy" >
                            <div class="card-body mx-0 my-2 py-0">
                                <p class="card-text note my-0"><?php echo $value['product_note']; ?></p>
                                <a href="#" class = "text-dark no-underline"><h5 class="card-title product-name product-name"><?php echo $value['product_name']; ?></h5></a>
                                <p class="card-text text-secondary accessory-type"><?php echo $value['product_subcategory']; ?></p>
                                <p class="card-text price mt-2"><?php echo $value['product_price']." USD"; ?></p>
                            </div>
                        </div>  
                    </div>
                    <!-- card product -->
                    <?php
                    }
                    ?>


                </div>
                
            </div>
        </div>
    </div>

    <!-- Component phân trang -->
    <div class="pagination justify-content-end mt-4 mx-4">
        <nav aria-label="Page navigation">
            <ul class="pagination">
                <?php
                for ($page = 1; $page <= $totalPages; $page++) {
                    $isActive = $page === $currentPage ? 'active' : '';
                    echo '<li class="page-item ' . $isActive . '"><a class="page-link" href="?page=' . $page . '">' . $page . '</a></li>';
                }
                ?>
            </ul>
        </nav>
    </div>
</div>

<!--  -->
<?php include 'footer.php' ?>
</body>
</html>
