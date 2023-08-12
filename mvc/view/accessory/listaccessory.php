
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" class="">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Listing accessory</title>
</head>
<body>
    <div class="container d-flex justify-content-end my-4">
        <form action="" method="GET" class="form-inline">
                <div class="input-group">
                    <input type="hidden" name="controller" value="accessory">
                    <input type="text" class="form-control" placeholder="Search" name="search_query">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </div>
                <input type="hidden" name="action" value="search">
        </form>
    </div>
<div class="container d-flex flex-column justify-content-center my-4">
    <a href="index.php?controller=accessory&action=add" class="d-flex justify-content-end my-4" >Adding new accessory</a>
    <table class="table table-hover" style="width: 100%;">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Image Path</th>
                <th>Note</th>
                <th>Subcategory</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            foreach($data as $value){
            ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $value['product_name']; ?></td>
                <td><?php echo $value['image_path']; ?></td>
                <td><?php echo $value['product_note']; ?></td>
                <td><?php echo $value['product_subcategory']; ?></td>
                <td><?php echo $value['product_price']; ?></td>
                <td class = "d-flex">
                    <a type='button' class = 'btn btn-primary mx-2' href="index.php?controller=accessory&action=edit&id=<?php echo $value['id']; ?>">Edit</a>
                    <a type='button'class="btn btn-danger mx-2" onclick="return confirm('Confirm deleting?')" href="index.php?controller=accessory&action=delete&id=<?php echo $value['id']; ?>" title="Delete">Delete</a>
                </td>
            </tr>
            <?php
            }
            ?>
            <tr>

            </tr>
        </tbody>
    </table>
</div>
</body>
