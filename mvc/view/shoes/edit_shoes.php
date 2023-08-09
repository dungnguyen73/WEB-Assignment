
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" class="">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Edit shoes information</title>
</head>
<body>
    <!-- <?php echo "<pre>"; print_r($dataId) ?> -->
    <div class="container-fluid" id="edit-shoes-container">
        <h3>Edit Shoes</h3>
        <a href="index.php?controller=shoes&action=list" class="d-flex justify-content-end my-4" >Back to shoes list </a>

        <form action="" method="POST" class="form">
            <div class="form-group">
                <label for="product_id"  title="Required">Product ID<span class="text-warning">* </span>:</label>
                <input type="text" class="form-control" id="product_id" name="product_id" value="<?php echo $dataId['id'] ?>" readonly>
            </div>

            <div class="form-group">
                <label for="product_name">Product Name:</label>
                <input type="text" class="form-control" id="product_name" name="product_name" value="<?php echo $dataId['product_name'] ?>" placeholder="Change name into..." >
            </div>

            <div class="form-group">
                <label for="image_path">Image Path:</label>
                <input type="text" class="form-control" id="image_path" name="image_path" value="<?php echo $dataId['image_path'] ?>" placeholder="Change image..."  >
            </div>

            <div class="form-group">
                <label for="product_note">Product Note:</label>
                <input type="text" class="form-control" id="product_note" name="product_note" rows="4" value="<?php echo $dataId['product_note'] ?>" placeholder="Change note..." >
            </div>

            <div class="form-group">
                <label for="product_subcategory">Product Subcategory:</label>
                <input type="text" class="form-control" id="product_subcategory" name="product_subcategory" value="<?php echo $dataId['product_subcategory'] ?>" placeholder="Change subcategory into..." >
            </div>

            <div class="form-group">
                <label for="product_price">Product Price:</label>
                <input type="number" step="0.01" class="form-control" id="product_price" name="product_price" value="<?php echo $dataId['product_price'] ?>" placeholder="Change price..." >
            </div>

            <button type="submit" class="btn btn-primary" name='shoesupdateinfor'>Finish editing</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>
