<?php
  include "header.php"
?>

<body class="sub_page">

  <?php
    include "nav/nav_about.php"
  ?>

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
              <?php echo $site['about_content'];?>
            </p>
            <!-- <div class="btn-box">
              <a href="">
                Read More
              </a>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================================================
  end about section
  ================================================== -->


<?php
  include "footer.php";
?>