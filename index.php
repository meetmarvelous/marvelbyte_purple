<?php
  include "header.php"
?>
<body>
  <?php
    include "nav/nav_home.php"
  ?>
  <!-- ================================================
  Slider Section
  ================================================== -->
    <section class="slider_section ">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <?php
          $slid= mysqli_query($dbcon, "SELECT * FROM slider");
          $rowcount = mysqli_num_rows($slid);
          for($i=1; $i<=$rowcount; $i++)
          {
          $slider = mysqli_fetch_array($slid);
      
         if($i==1){
           ?>
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="detail_box">
                    <h1>
                      <?php echo $slider['title'];?> <!-- <span>SOFTWARE</span> -->
                    </h1>
                    <p>
                      <?php echo $slider['content'];?>
                    </p>
                    <a href="" class="">
                      Read More
                    </a>
                  </div>
                </div>
                <div class="col-md-5 offset-md-1">
                  <div class="img-box">
                    <img src="<?php echo './assets/images/'.$slider['picture'];?>" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php }else{?>
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="detail_box">
                    <h1>
                       <?php echo $slider['title'];?>
                    </h1>
                    <p>
                      <?php echo $slider['content'];?>
                    </p>
                    <a href="" class="">
                      Read More
                    </a>
                  </div>
                </div>
                <div class="col-md-5 offset-md-1">
                  <div class="img-box">
                    <img src="<?php echo './assets/images/'.$slider['picture'];?>" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
       <?php } ?>
        </div>
        <div class="carousel_btn-container">
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
  <!-- ================================================
  end slider section
  ================================================== -->
  </div>



  <!-- ================================================
  about section
  ================================================== -->

  <section class="about_section dim layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src= <?php echo "./assets/images/".$site['about_image']?> alt="" />
          </div>
        </div>
        <div class="col-md-5">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Us
              </h2>
            </div>
            <p>
              <?php echo $site['about_heading'];?>
            </p>
            <div class="btn-box">
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================================================
  end about section
  ================================================== -->



  <!-- ================================================
  service section
  ================================================== -->

  <?php
    include "service_section.php";
  ?>

  <!-- ================================================
  end service section
  ================================================== -->



  <!-- ================================================
  portfolio section
  ================================================== -->

  <!-- <section class="portfolio_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Portfolio
        </h2>
        <p>
          There are many variations of passages of Lorem Ipsum available, but the majority
        </p>
      </div>

      <div class="layout_padding2-top">
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="img-box">
              <img src="./assets/images/p-1.jpg" alt="">
              <a href="">
                <img src="./assets/images/link.png" alt="">
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="img-box">
              <img src="./assets/images/p-2.jpg" alt="">
              <a href="">
                <img src="./assets/images/link.png" alt="">
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="img-box">
              <img src="./assets/images/p-3.jpg" alt="">
              <a href="">
                <img src="./assets/images/link.png" alt="">
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="img-box">
              <img src="./assets/images/p-4.jpg" alt="">
              <a href="">
                <img src="./assets/images/link.png" alt="">
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="img-box">
              <img src="./assets/images/p-5.jpg" alt="">
              <a href="">
                <img src="./assets/images/link.png" alt="">
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="img-box">
              <img src="./assets/images/p-6.jpg" alt="">
              <a href="">
                <img src="./assets/images/link.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          View More
        </a>
      </div>
    </div>
  </section> -->

  <!-- ================================================
  end portfolio section
  ================================================== -->



  <!-- ================================================
  news section
  ================================================== -->

  <section class="news_section dim layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Blog
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="./assets/images/crypto.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                HOW TO PROTECT AND SECURE YOUR CRYPTOCURRENCY
              </h5>
              <p>
                Securing your cryptocurrency assets is very necessary because it's an online asset, unlike the fiat that the banks hold and secure ...
              </p>
              <a href="blog_one.php">
                <span>
                  Read More
                </span>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="./assets/images/view.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                HOW TO VIEW THE SOURCE CODE OF A WEBPAGE IN GOOGLE CHROME MOBILE VERSION
              </h5>
              <p>
                To view the source of a webpage, Add “view-source:” before the URL of the webpage ...
              </p>
              <a href="blog_two.php">
                <span>
                  Read More
                </span>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="./assets/images/bit.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                HOW TO PROTECT AND SECURE YOUR CRYPTOCURRENCY
              </h5>
              <p>
                Securing your cryptocurrency assets is very necessary because it's an online asset, unlike the fiat that the banks hold and secure ...
              </p>
              <a href="blog_one.php">
                <span>
                  Read More
                </span>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================================================
  end news section
  ================================================== -->



  <!-- ================================================
  contact section
  ================================================== -->

  <?php
    include "contact_section.php";
  ?>

  <!-- ================================================
  end contact section
  ================================================== -->




  <!-- ================================================
  footer section
  ================================================== -->

  <?php
    include "footer.php";
  ?>