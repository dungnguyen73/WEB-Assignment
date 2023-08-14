 <!-- footer section -->
    <!-- Footer -->
 
    <footer class="bg text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-facebook-f"></i
        ></a>
  
        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-twitter"></i
        ></a>
  
        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-google"></i
        ></a>
  
        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-instagram"></i
        ></a>
  
        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-linkedin-in"></i
        ></a>
  
        <!-- Github -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-github"></i
        ></a>
      </section>
      <!-- Section: Social media -->
  
      <!-- Section: Form -->
      <section class="">
        <form action="#">
          <!--Grid row-->
          <div class="row d-flex justify-content-center">
            <!--Grid column-->
            <div class="col-auto">
              <p class="pt-2">
                <strong>Sign up for our newsletter</strong>
              </p>
            </div>
            <!--Grid column-->
  
            <!--Grid column-->
            <div class="col-md-5 col-12">
              <!-- Email input -->
              <div class="form-outline form-white mb-4">
                <input type="email" id="form5Example21" class="form-control" placeholder="Email" />
                <!-- <label class="form-label" for="form5Example21">Email address</label> -->
              </div>
            </div>
            <!--Grid column-->
  
            <!--Grid column-->
            <div class="col-auto">
              <!-- Submit button -->
              <button type="submit" class="btn btn-outline-light mb-4">
                Subscribe
              </button>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </form>
      </section>
      <!-- Section: Form -->
  
      <!-- Section: Text -->
      <section class="mb-4">
        <p>
          
        </p>
      </section>
      <!-- Section: Text -->
  
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-lg-7 col-md-5 mb-4 mb-md-0" id="first-col">
            <!-- <h5 class="text-uppercase">Links</h5> -->
  
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white text-uppercase">Find a store</a>
              </li>
              <li>
                <a href="#!" class="text-white text-uppercase">Become a member</a>
              </li>
              <li>
                <a href="#!" class="text-white">Send Us Feedback</a>
              </li>
              
            </ul>
          </div>
          <!--Grid column-->
        
          <!--Grid column-->
          <div class="col-6 col-md-2 mb-3 infor">
            <h5 class="text-uppercase">Get help</h5>
  
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" >Order Status</a>
              </li>
              <li>
                <a href="#!" >Delivery</a>
              </li>
              <li>
                <a href="#!" >Returns</a>
              </li>
              <li>
                <a href="#!" >Contact Us</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-6 col-md-2 mb-3 infor">
            <h5 class="text-uppercase">About Nike</h5>
  
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" >News</a>
              </li>
              <li>
                <a href="#!" >Careers</a>
              </li>
              <li>
                <a href="#!" >Investors</a>
              </li>
              <li>
                <a href="#!" >Sustainability</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
  
          
  
          
          
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Copyright: Developed by TDung
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->



    <!-- end footer section -->

    <!-- scripts -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
    <script src="https://kit.fontawesome.com/a1037a3a28.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@react-spring/parallax@9.7.3/dist/cjs/index.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script>
      let items = document.querySelectorAll('.carousel .carousel-item')

      items.forEach((el) => {
          const minPerSlide = 4
          let next = el.nextElementSibling
          for (var i=1; i<minPerSlide; i++) {
              if (!next) {
                  // wrap carousel by using first child
                next = items[0]
              }
              let cloneChild = next.cloneNode(true)
              el.appendChild(cloneChild.children[0])
              next = next.nextElementSibling
          }
      })

    </script>
    <script src="script.js"></script>
