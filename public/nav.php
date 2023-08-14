
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Nike. Just Do It</title>
    <style>
      body{
        font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
      }
      
    </style>
</head>
<!-- navigator bar section -->

<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container-fluid">
        <a href="main.php" class="navbar-brand"><img src="assets/Logo_NIKE.svg.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsebtn" aria-controls="collapsebtn" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="collapsebtn"> <!-- Removed unnecessary classes -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="shoes.php" class="nav-link">Shoes</a>
                </li>
                <li class="nav-item">
                    <a href="clothing.php" class="nav-link">Clothing</a>
                </li>
                <li class="nav-item">
                    <a href="accessory.php" class="nav-link">Accessories</a>
                </li>
            </ul>

            <div class="d-md-none">
                <form class="form-inline mt-3" method="get" action="searchresult.php">
                    <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search" name="search_term">
                    <!-- <button class="btn btn-primary" type="submit">Search</button> -->
                </form>
            </div>
            
            <div class="d-md-none options"> <!-- Corrected class name -->
                <i class="fas fa-heart fa-lg" title="Favorites"></i> <!-- Corrected class name and icon prefix -->
                <i class="fas fa-shopping-bag fa-lg" title="Bag items"></i> <!-- Corrected class name and icon prefix -->
                <i class="fas fa-user fa-lg" title="User"></i> <!-- Corrected class name and icon prefix -->
            </div>
            
            

        </div>

        <div class="d-none d-md-block" id="searchbar">
            <form class="form-inline" method="get" action = "searchresult.php" >
                <input class="form-control mr-md-2" type="search" placeholder="Search" aria-label="Search" name='search_term' >
            </form>
        </div>

        <div class="d-none d-md-block options">
            <i class="far fa-heart fa-lg" title="Favorites"></i> <!-- Corrected class name and icon prefix -->
            <i class="fas fa-shopping-bag fa-lg" title="Bag items"></i>
            <i class="far fa-user fa-lg" title="User"></i>
        </div>
    </div>
</nav>
  
   