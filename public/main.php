<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Nike. Just Do It</title>
    <style>
      body{
        font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
      }
      
    </style>
</head>
<body>
    <!-- header section -->
  
    <?php require 'nav.php';
    error_reporting(E_ALL & ~E_WARNING);
    ?>
    <!-- header section -->
    
    <!-- main section -->
    <section class = "main">

      <div class="container-fluid" id="attraction-div">
          <div class="row row-cols-1 d-flex align-items-center justify-content-center" >
            <div class="" id="attraction-div">
              <img src="assets/homepage/pic3.jpg" alt="" id="attraction-img" class="">
            </div>
            <figcaption class="justdoit">
              <!-- <h2> <strong>Nike</strong></h2> -->
              <p>JUST DO IT</p>
            </figcaption>
            
          </div>
      </div>

      <div class="container-fluid" id="product-container">

      <section id="pinksection">
          <div class="carousel-header">
            <span style='font-size: 25px;'>Pretty in Pink 🎀</span>
          </div>

          <div class="container-fluid text-center my-3"> 
   
            <div class="row justify-content-center">
                <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="col-md-3">
                                <div class="card border-0">
                                    <div class="card-img-top product-infor">
                                      <a href="#">
                                        <img src="assets/pinksection/pic1.png" class="img-fluid">
                                      </a>
                                    </div>
                                    <div class="product-infor">
                                      <div class="card-img-bottom" >
                                        <span class = "product-name">Jordan <br> <p style="opacity: 0.6;">Women's Button-Down Shirt</p></span>
                                        <span class="product-price">1,789,000VND</span>
                                      </div>
                                      <div class="btn-gr">
                                        <a href="#">
                                          <i class="fa-sharp fa-regular fa-heart fa-lg" title ="Favorite"></i>
  
                                        </a>
                                        <a href="#">
                                          <i class="fa-sharp fa-solid fa-cart-shopping fa-lg" title="Add to cart"></i>
  
                                        </a>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <div class="card border-0">
                                    <div class="card-img-bottom product-infor">
                                        <img src="assets/pinksection/pic2.png" class="img-fluid">
                                    </div>
                                    
                                    <div class="product-infor">
                                      <div class="card-img-bottom" >
                                        <span class = "product-name">Nike Tech Hera <br> <p style="opacity: 0.6;">Sneaker</p></span>
                                        <span class="product-price">3,239,000VND</span>
                                      </div>
                                      <div class="btn-gr">
                                        <a href="#">
                                          <i class="fa-sharp fa-regular fa-heart fa-lg" title ="Favorite"></i>
  
                                        </a>
                                        <a href="#">
                                          <i class="fa-sharp fa-solid fa-cart-shopping fa-lg" title="Add to cart"></i>
  
                                        </a>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <div class="card border-0">
                                    <div class="card-img-bottom product-infor">
                                      <a href="#">
                                        <img src="assets/pinksection/pic3.png" class="img-fluid">

                                      </a>
                                    </div>
                                    <div class="product-infor">
                                      <div class="card-img-bottom" >
                                        <span class = "product-name">Nike Sportswear <br> <p style="opacity: 0.6;">Men's T-Shirt</p></span>
                                        <span class="product-price">819,000VND</span>
                                      </div>
                                      <div class="btn-gr">
                                        <a href="#">
                                          <i class="fa-sharp fa-regular fa-heart fa-lg" title ="Favorite"></i>
  
                                        </a>
                                        <a href="#">
                                          <i class="fa-sharp fa-solid fa-cart-shopping fa-lg" title="Add to cart"></i>
  
                                        </a>
                                      </div>
                                    </div>                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <div class="card border-0">
                                    <div class="card-img-bottom product-infor">
                                      <a href="#">

                                        <img src="assets/pinksection/pic4.png" class="img-fluid">
                                      </a>
                                    </div>
                                    <div class="product-infor">
                                      <div class="card-img-bottom" >
                                        <span class = "product-name">Nike Zoom Bella 6 <br> <p style="opacity: 0.6;">Women's Workout Shoes</p></span>
                                        <span class="product-price">2,499,000VND</span>
                                      </div>
                                      <div class="btn-gr">
                                        <a href="#">
                                          <i class="fa-sharp fa-regular fa-heart fa-lg" title ="Favorite"></i>
  
                                        </a>
                                        <a href="#">
                                          <i class="fa-sharp fa-solid fa-cart-shopping fa-lg" title="Add to cart"></i>
  
                                        </a>
                                      </div>
                                    </div>                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <div class="card border-0">
                                    <div class="card-img-bottom product-infor">
                                      <a href="#">

                                        <img src="assets/pinksection/pic5.png"class="img-fluid">
                                      </a>
                                    </div>
                                    <div class="product-infor">
                                      <div class="card-img-bottom" >
                                        <span class = "product-name">Jordan Sophia <br> <p style="opacity: 0.6;">Women's Slides</p></span>
                                        <span class="product-price">2,499,000VND</span>
                                      </div>
                                      <div class="btn-gr">
                                        <a href="#">
                                          <i class="fa-sharp fa-regular fa-heart fa-lg" title ="Favorite"></i>
  
                                        </a>
                                        <a href="#">
                                          <i class="fa-sharp fa-solid fa-cart-shopping fa-lg" title="Add to cart"></i>
  
                                        </a>
                                      </div>
                                    </div>                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <div class="card border-0">
                                    <div class="card-img-bottom product-infor">
                                      <a href="#">

                                        <img src="assets/pinksection/pic6.png" class="img-fluid">
                                      </a>
                                    </div>
                                    <div class="product-infor">
                                      <div class="card-img-bottom" >
                                        <span class = "product-name">Nike Sportswear Essentials <br> <p style="opacity: 0.6;">Logo T-Shirt</p></span>
                                        <span class="product-price">709,000VND</span>
                                      </div>
                                      <div class="btn-gr">
                                        <a href="#">
                                          <i class="fa-sharp fa-regular fa-heart fa-lg" title ="Favorite"></i>
  
                                        </a>
                                        <a href="#">
                                          <i class="fa-sharp fa-solid fa-cart-shopping fa-lg" title="Add to cart"></i>
  
                                        </a>
                                      </div>
                                    </div>                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
            <!-- <h5 class="mt-2 fw-light">advances one slide at a time</h5> -->
        </div>
        </section>

        <section id="justin-section">
          <div class="section-header">
            <span>Just In</span>
          </div>
          <div class="container-fluid">
            <div class="row d-flex justify-content-lg-center justify-content-md-start" >

              <a href="#">
                <img src="assets/justin_section/basketballshoes.png" alt="a shoes" style="width: 100%;" loading="lazy">
              </a>
              <div class="figurecap">
                <figcaption >
                  <!-- <h2> <strong>Nike</strong></h2> -->
                  <p class="justdoit" style="text-transform: uppercase; margin-bottom: 8px;">Check the <br>
                  footwork in
                  <br> 
                  the zoom freak 5
                  <br>
                  'made in sepolia'
                  </p>
                  <p style="margin-top: 24px;">Lively street art and global football roots inspire Giannis’ latest colourway.</p>
                  
                </figcaption>
                <div class="btn-container">
                  <button type="button" class="btn btn-dark" >
                    <a class = "" style="text-decoration: none; color: white;" href="https://www.nike.com/vn/w/basketball-shoes-3glsmzy7ok" target="_self" data-analytics-action-id="ecad992d-753d-48f3-bf05-690dd1a3ac65" data-analytics-allow="false" data-qa="cta-button" data-qa-card-id="19602eea-803e-4210-9e86-8b7790385199" tabindex="0" data-actiontext="Shop" data-button-type="button" aria-label="Shop">Shop</a>
                  </button>
                </div>
              </div>
              
            </div>
          </div>
          
        </section>

        <section id="latest-section">
          <div class="section-header">
            <span>The Latest</span>
          </div>
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 col-sm-12 px-1">
                <div class="card">
                  <div class="card-img-top product-infor">
                    <a href="#">
                      <img src="assets/latest_section/airdrop.png" loading="lazy" href="#" style = "width: 100%;" class="img-fluid">
                    </a>
                  </div>
                  
                  <div class="card-img-overlay">
                    <p class="card-text">Now Available on the Nike App</p>
                    <h5 class="card-title">Lebron NXXT Gen 'Metabron'</h5>
                    <a href="https://www.nike.com/sg/nike-app?cp=072423_XA_EN_Nike.com_HP%20P4_Nike%20App_LeBron%20NXXT%20Gen_App%20Drop&referrer=singular_click_id%3D8c8d0723-0ddc-453e-b254-083b88cf5336&sl_id=k4hwd">
                      <button type="button" class="btn btn-dark btn-rounded">Get It First</button>
                    </a>
                  </div>
                    
                  
                </div>

              </div>
              <div class="col-md-6 col-sm-12 px-1">
                <div class="card">
                  <div class="card-img-top product-infor">
                    <a href="#">
                      <img src="assets/latest_section/runningshoes.png" loading="lazy" style = "width: 100%;" class="img-fluid">
                    </a>
                  </div>
                  
                  <div class="card-img-overlay">
                    <!-- <p class="card-text">Now Available on the Nike App</p> -->
                    <h5 class="card-title text-white">Road Running Shoes</h5>
                    <a href="https://www.nike.com/vn/w/road-running-shoes-37v7jz8kwewzy7ok">
                      <button type="button" class="btn btn-light btn-rounded">Shop</button>
                    </a>
                  </div>
                    
                  
                </div>

              </div>
              
            </div>
          </div>
        </section>


        <section id="dontmiss-section">
          <div class="section-header">
            <span>Don't Miss</span>
          </div>
          <div class="container-fluid">
            <div class="row d-flex justify-content-lg-center justify-content-md-start">

              <a href="#">
                <img src="assets/dontmiss_section/pic2.png" alt="a shoes" style="width: 100%;" loading="lazy">
              </a>
              <div class="figurecap">
                <figcaption >
                  <!-- <h2> <strong>Nike</strong></h2> -->
                  <p class="justdoit" style="text-transform: uppercase; margin-bottom: 8px;">
                    THE WORLD RUNS IN PEGASUS
                  </p>
                  <p style="margin-top: 24px;">For any run, for everyone. Nike Pegasus 40.</p>
                  
                </figcaption>
                <div class="btn-container">
                  <button type="button" class="btn btn-dark" >
                    <a class = "" style="text-decoration: none; color: white;" href="#"  data-button-type="button" aria-label="Shop">Shop</a>
                  </button>
                </div>
              </div>
              
            </div>
          </div>
        </section>
      </div>


    </section>

    <!-- main section -->

 <!-- footer section -->
    <!-- Footer -->
 <?php require  'footer.php' ?>
    
 </body>
</html>