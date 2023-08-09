
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" class="">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Adding shoes</title>
</head>
<body>
    <div class="container-fluid" id="shoes-container">
        <h3>Add new shoes</h3>
        <a href="index.php?controller=shoes&action=list">List shoes product</a>
        <form action="" method="POST" class="form">
        <div class="form-group">
                <label for="product_name">Product Name:</label>
                <input type="text" class="form-control" id="product_name" name="product_name" required>
            </div>

            <div class="form-group">
                <label for="image_path">Image Path:</label>
                <input type="text" class="form-control" id="image_path" name="image_path" required>
            </div>

            <div class="form-group">
                <label for="product_note">Product Note:</label>
                <input type="text" class="form-control" id="product_note" name="product_note" rows="4">
            </div>

            <div class="form-group">
                <label for="product_subcategory">Product Subcategory:</label>
                <input type="text" class="form-control" id="product_subcategory" name="product_subcategory" required>
            </div>

            <div class="form-group">
                <label for="product_price">Product Price:</label>
                <input type="number" step="0.01" class="form-control" id="product_price" name="product_price" required>
            </div>

            <button type="submit" class="btn btn-primary" name="add_shoes">Adding</button>
        </form>
        <div class="display_result my-3">
            <?php
            if(isset($success) && in_array('add_success', $success)){
                echo '<p style="color:green;">Shoe added successfully!</p>';
                // Clear the 'add_success' status
                unset($success[array_search('add_success', $success)]);
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>
