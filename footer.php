<!-- footer section -->

  <div class="footer_bg">
    <!-- info section -->
    <section class="info_section ">
      <div class="container">
        <div class="row">
          <div class="col-md-3 mb-4 mb-md-0 d-flex d-md-block flex-column align-items-center text-center text-md-left ">
            <div class="info_info">
              <h5>
                <b><p style="text-transform: uppercase;"><?php echo $site['webname']; ?></p></b>
              </h5>
              <p style="text-align: justify;">
              <?php echo $site['webname']; ?> helps professionals build better businesses. 
              </p>
            </div>
          </div>
          <div class="col-md-3 mb-4 mb-md-0 d-flex d-md-block flex-column align-items-center text-center text-md-left ">
            <div class="info_contact">
              <h5>
                Company
              </h5>
              <div>
                <div class="img-box">
                  <img src="./assets/images/location-white.png" width="18px" alt="location">
                </div>
                <p>
                <?php echo $site['address']?>
                </p>
              </div>
              <div>
                <div class="img-box">
                  <img src="./assets/images/whatsapp.png" width="18px" alt="whatsapp">
                </div>
                <p>
                <a href=<?php echo $site['whatsapp_link']?>>
                  <?php echo $site['phone']?>
                </a>
                </p>
              </div>
              <div>
                <div class="img-box">
                  <img src="./assets/images/telephone-white.png" width="12px" alt="telephone">
                </div>
                <p>
                <a href= <?php echo "tel:".$site['phone_no']?> ><?php echo $site['phone']?></a>
                </p>
              </div>
              <div>
                <div class="img-box">
                  <img src="./assets/images/envelope-white.png" width="18px" alt="send mail">
                </div>
                <p>
                  <a href= <?php echo "mailto:".$site['email']?> ><?php echo $site['email']?></a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-4 mb-md-0 d-flex d-md-block flex-column align-items-center text-center text-md-left ">
            <div class="info_links">
                <h3>NAVIGATION</h3>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="service.php">Service</a></li>
                    <!-- <li><a href="portfolio.php">Portfolio</a></li> -->
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
          </div>
          <div class="col-md-3 d-flex d-md-block flex-column align-items-center text-center text-md-left ">
            <div class="info_form ">
              <h5>
                Newsletter
              </h5>

              <?php
                if(isset($_POST['submit2'])) {
                  $email2 =$_POST['email2'];

                $submit2 = mysqli_query($con, "INSERT INTO newsletter (email) VALUES('$email2') ");

                if($submit2) {
                  echo "<script>window.alert('subscribed successfully'); window.location= 'index.php'</script>";
                }else{
                  echo "<script>window.alert('something went wrong'); window.location= 'index.php'</script>";
                }
              }
              ?>
              <form method="POST">
                <input name="email2" type="email" placeholder="Enter your email" required>
                <button type="submit" name="submit2">
                  Subscribe
                </button>
              </form>
              <div class="social_box">
                <a href="<?php echo $site['facebook_link'];?>" target="_blank">
                  <img src="./assets/images/fb.png" alt="facebook link">
                </a>
                <a href="<?php echo $site['twitter_link'];?>" target="_blank">
                  <img src="./assets/images/twitter.png" alt="twitter link">
                </a>
                <a href="<?php echo $site['linkedin_link'];?>" target="_blank">
                  <img src="./assets/images/linkedin.png" alt="linkedin link">
                </a>
                <a href="<?php echo $site['youtube_link'];?>" target="_blank">
                  <img src="./assets/images/youtube.png" alt="youtube link">
                </a>
                <a href="<?php echo $site['github_link'];?>" target="_blank">
                  <img src="./assets/images/github.png" width="24px" alt="github link" style="-webkit-filter: invert(1); filter: invert(1);">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end info_section -->


    <!-- foot section -->
    <section class="container-fluid footer_section">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-9 mx-auto">
            <p>
              Copyright &copy; 2022 | All Rights Reserved |
              <a href="#"><?php echo $site['webname']; ?></a>
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- foot section -->
  </div>
<!-- end footer section -->

<!-- jQuery Local library -->
<script type="text/javascript" src="./assets/js/jquery-3.4.1.min.js"></script>

<!-- Bootstrap Local JS  -->
<script type="text/javascript" src="./assets/js/bootstrap.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script>
    $(function () {

      $('.owl-carousel').owlCarousel({
        autoplay: true,
        loop: true,
        margin: 10,
        nav: false,
        // autoplayTimeout: 2500,
        // navText: ['Previous', 'Next'],
        dots: true,
        responsive:{
        // Extra small devices (phones, 600px and down)
        0:{
            items:1
        },
        // Small devices (portrait tablets and large phones, 600px and up)
        600:{
            items:2
        },
        // Medium devices (landscape tablets, 768px and up)
        768:{
            items:2
        },
        // Large devices (laptops/desktops, 992px and up)
        992:{
            items:3
        },
        // Extra large devices (large laptops and desktops, 1200px and up)
        1200:{
            items:3
        }}

      });

    });


  </script>

<!-- jQuery  library -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<!-- Popper JS -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script> -->
<!-- Latest compiled Bootstrap JavaScript -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script> -->
</body>

</html>