<!DOCTYPE html>
<html lang="en">
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
   

        .navbar-brand img{
            width: 58.85px;
            height: 20.54px;
            margin-left: 4rem;
            
        }
        .navbar-brand img:hover{
            opacity: 0.5;
        }

        .navbar-brand{
            padding: 0 0 0 0;
        }

        #collapsebtn .options{
            margin-bottom: 10px;
            margin-top: 10px;
            
        }
        .nav-link{
            color: black;
            margin: 0 0.7rem 0 0.7rem;
        }
        .nav-link:hover{
            color: black;
            font-weight: 700;
        }



        .options i{
            margin-left: 5px;
            
        }
        /* #options i:hover{
            cursor: pointer;
            background-color: #b2b2b2;
        } */
        .options i:hover{
            cursor: pointer;
            /* background-color: #b2b2b2; */
            font-size: 25px;
        }

        


        footer{
            background-color: black;
        }
        footer ul{
            text-align: left;
        }
        footer h5{
            text-align: left;
            font-weight:700;
        }
        #first-col{
            /* text-align: left; */
            font-weight: 700;
        }
        #first-col a{
            text-decoration: none;
        }
        #first-col li{
            margin-bottom: 10px;
        }

        .infor a {
            font-size: 0.8rem;
            color:rgb(175, 186, 186);
            text-decoration: none;
        }
        .infor a:hover {
            color: white;
            text-decoration: none;
        }



        .main section{
            margin: 3rem 0 3rem 0;
        }
        #attraction-img{
            width: 100%;
        }
        .main{
            padding: 0 52.8px 0 52.8px;
        }
        /* 768px and down */
        @media  screen and (max-width: 790px ) {  
            .main{
            padding: 0 24px 0 24px;
            }
        }
        .justdoit{
            margin: 2rem 0 3rem 0;
            font-size: 72px;
            line-height: 60px;
            font-weight: 900;
        }
        @media only screen and (max-width: 960px){
            .justdoit{
            margin: 1rem 0 3rem 0;
            font-size: 48px;
            line-height: 40px;
            
            }
        }
        .section-header > span{
            font-size: 25px;
        }
        /* pink section */

            /* small screens */
        @media (max-width: 767px) { 
            .carousel-inner .carousel-item > div {
                display: none;
            }
            .carousel-inner .carousel-item > div:first-child {
                display: block;
            }
        }

        .carousel-inner .carousel-item.active,
        .carousel-inner .carousel-item-next,
        .carousel-inner .carousel-item-prev {
            display: flex;
        }

            /* medium and up screens */
        @media (min-width: 768px) {
            
            .carousel-inner .carousel-item-end.active,
            .carousel-inner .carousel-item-next {
            transform: translateX(25%);
            }
            
            .carousel-inner .carousel-item-start.active, 
            .carousel-inner .carousel-item-prev {
            transform: translateX(-25%);
            }

            

            
        }

        .carousel-inner .carousel-item-end,
        .carousel-inner .carousel-item-start { 
        transform: translateX(0);
        }
        #pinksection{
        margin-bottom: 4rem;
        }
        #pinksection .container-fluid {
            padding: 0 0 0 0;
        }
        .card{
        border: none;
        }
        .product-infor .card-img-bottom{
        display: flex;
        justify-content: space-between;
        margin-top: 0.7rem;
        
        }
        #pinksection .product-name{
        font-size:16px!important ;
        text-align: left;
        }
        #pinksection .product-price{
        font-size:14px ;
        }
        #pinksection i{
        color:rgb(14, 14, 14);
        }
        .btn-gr{
            display: flex;
            justify-content: space-evenly;
        }
        /* pink section */
        /* justin section */
        #justin-section{
        margin-bottom: 3rem;
        }
       
        .figurecap{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align:center;
        }

        @media only screen and (max-width: 960px){
        .figurecap{
            /* justify-content: flex-start; */
            align-items: flex-start;
            text-align: left;
            /* font-size: smaller; */
        }
        }

        /* the latest section */
        #latest-section .card-img-overlay{
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        }
        #latest-section .card-text{
        line-height: 1.2;
        }

        
    </style>
</head>
<!-- navigator bar section -->

<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container-fluid">
        <a href="http://localhost:3000/Assignment/Homepage/public/main.php" class="navbar-brand"><img src="http://localhost:3000/Assignment/Homepage/assets/Logo_NIKE.svg.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsebtn" aria-controls="collapsebtn" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="collapsebtn"> <!-- Removed unnecessary classes -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="http://localhost:3000/Assignment/Homepage/public/shoes.php" class="nav-link">Shoes</a>
                </li>
                <li class="nav-item">
                    <a href="http://localhost:3000/Assignment/Homepage/public/clothing.php" class="nav-link">Clothing</a>
                </li>
                <li class="nav-item">
                    <a href="http://localhost:3000/Assignment/Homepage/public/accessory.php" class="nav-link">Accessories</a>
                </li>
            </ul>
            <div class="d-md-none options"> <!-- Corrected class name -->
                <i class="fa-sharp fa-regular fa-heart fa-lg" title="Favorites"></i>
                <i class="fa-sharp fa-solid fa-bag-shopping fa-lg" title= "Bag items"></i>
                <i class="fa-sharp fa-regular fa-user fa-lg" title = "User"></i>
            </div>
        </div>

        <div class="d-none d-md-block" id="searchbar">
            <form class="form-inline" action="http://localhost:3000/Assignment/Homepage/public/searchresult.php">
                <input class="form-control mr-md-2" type="search" placeholder="Search" aria-label="Search" name='search_term'>
            </form>
        </div>

        <div class="d-none d-md-block options">
                <i class="fa-sharp fa-regular fa-heart fa-lg" title="Favorites"></i>
                <i class="fa-sharp fa-solid fa-bag-shopping fa-lg" title= "Bag items"></i>
                <i class="fa-sharp fa-regular fa-user fa-lg" title = "User"></i>
        </div>
    </div>
</nav>
  

    