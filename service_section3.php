  <!-- ================================================
  service section
  ================================================== -->

  <?php

   $icd = mysqli_query($dbcon, "SELECT * FROM icon");
   $icon = mysqli_fetch_array($icd);

   ?>
  <section class="service_section layout_padding">
     <div class="container">
         <div class="col-md-12">
            <div class="heading_contain">
               <h2>What we do </h2>
            </div>
         </div>

        <div class="service_container owl-carousel owl-theme">
           <div class="box">
              <div class="img-box">
                 <img src="<?php echo "./assets/images/" . $icon['web_design'] ?>" alt="">
              </div>
              <div class="detail-box">
                 <h4>
                  Website Development
                 </h4>
                 <p>
                  We will deliver oustanding professional websites to allow you promote your business /services online.
                 </p>
              </div>
           </div>
           <div class="box">
              <div class="img-box">
                 <img src="<?php echo "./assets/images/" . $icon['app_dev'] ?>" alt="">
              </div>
              <div class="detail-box">
                 <h4>
                  App Development
                 </h4>
                 <p>
                  Do you need application that works on any device? we've got you covered with our premium app development package.
                 </p>
              </div>
           </div>
           <div class="box">
              <div class="img-box">
                 <img src="<?php echo "./assets/images/" . $icon['dig_mark'] ?>" alt="">
              </div>
              <div class="detail-box">
                 <h4>
                  Digital Marketing
                 </h4>
                 <p>
                  Do you want to scale up your business/services? Need more leads and more customers? We can help with that.
                 </p>
              </div>
           </div>
           <div class="box">
              <div class="img-box">
                 <img src="<?php echo "./assets/images/" . $icon['dig_mark'] ?>" alt="">
              </div>
              <div class="detail-box">
                 <h4>
                  Digital <br>marketing
                 </h4>
                 <p>
                  Do you want to scale up your business/services? Need more leads and more customers? We can help with that.
                 </p>
              </div>
           </div>
           <div class="box">
              <div class="img-box">
                 <img src="<?php echo "./assets/images/" . $icon['dig_mark'] ?>" alt="">
              </div>
              <div class="detail-box">
                 <h4>
                  Digital <br>marketing
                 </h4>
                 <p>
                  Do you want to scale up your business/services? Need more leads and more customers? We can help with that.
                 </p>
              </div>
           </div>
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