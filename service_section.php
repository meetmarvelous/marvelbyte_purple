  <!-- ================================================
  service section
  ================================================== -->

  <?php

   $scollect = mysqli_query($con, "SELECT * FROM service");
   $service = mysqli_fetch_array($scollect);

   ?>
  <section class="service_section layout_padding">
     <div class="container">
         <div class="col-md-12">
            <div class="heading_contain">
               <h2>What we do </h2>
            </div>
         </div>

        <div class="service_container owl-carousel owl-theme">
            <?php
            $x = 1;
            $scollect = mysqli_query($con, "SELECT * FROM service");
            while ($service = mysqli_fetch_array($scollect)) {
            ?>

            <div class="box">
              <div class="img-box">
                 <img src="<?php echo "./assets/images/" . $service['icon'] ?>" alt="">
              </div>
              <div class="detail-box">
                 <h4>
                  <?php echo $service['name'] ?>
                 </h4>
                 <p>
                  <?php echo $service['content'] ?>
                 </p>
              </div>
           </div>
           
  
            <?php
            $x++;
            }
            ?>
        </div>
        <div class="btn-box">
           <a href="">
              Read More
           </a>
        </div>
     </div>
  </section>
  <br>

  <!-- ================================================
  end service section
  ================================================== -->