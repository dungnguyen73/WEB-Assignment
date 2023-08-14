<?php
include 'nav.php';
include '../mvc/model/db_config.php';

if (isset($_GET['search_term'])) {
    // User has submitted a search
    $searchTerm = $_GET['search_term'];
    
    // Perform your search logic here using the $searchTerm
    // For example, query your database for matching products and display results
    
    $db = new Database();
    $db->connect();
    $search_result = $db->searchAcrossAllTables($searchTerm);
    $totalProduct = 0;
    
    if (!empty($search_result)) {
        foreach ($search_result as $tablename => $results) {
            $totalProduct += count($results);
            // ... your existing code to display search results ...
        }
?>
<div class="container-fluid my-2">
    <div class="title my-4">
        Search result for <br>
            <h4><?php echo $searchTerm . " (" . $totalProduct . ")"; ?></h4>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-12">
        </div>
        <div class="col-lg-9 px-0">
            <div class="row">
        <?php
        foreach ($search_result as $tablename => $results) {
            foreach ($results as $value) {
                ?>
                <div class="col-12 col-sm-6 col-lg-4 px-1">
                    <div class="card border-0">
                        <img src="<?php echo $value['image_path']; ?>" alt="" loading="lazy">
                        <div class="card-body mx-0 my-2 py-0">
                            <p class="card-text note my-0"><?php echo $value['product_note']; ?></p>
                            <a href="#" class="text-dark no-underline">
                                <h5 class="card-title product-name"><?php echo $value['product_name']; ?></h5>
                            </a>
                            <p class="card-text text-secondary clothing-type"><?php echo $value['product_subcategory']; ?></p>
                            <p class="card-text price mt-2"><?php echo $value['product_price'] . " USD"; ?></p>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
            </div>
        </div>
    </div>
</div>
<?php
    } else {
        echo "Cannot find suitable products";
    }
} else {
    // No search term submitted
    echo "No search term submitted.";
}

include 'footer.php';
?>


