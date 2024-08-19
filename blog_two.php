<?php
  include "header.php"
?>

<body class="sub_page">

  <?php
    include "nav/nav_blog.php"
  ?>

  </div>
  <div class="viewbg">
    <div class="container">
      <div class="">
        <p>.</p>
        <p class="navletter margint"><b>HOW TO VIEW THE SOURCE CODE OF A WEBPAGE IN GOOGLE CHROME MOBILE VERSION</b></p>
        <p class="navletter1">
          <a href="index.php"><span class="fa fa-home"></span>Home</a>  |  
          <a href="blog.php"></span>Blog</a>  |
        </p>
      </div>
    </div>
  </div>
    <!-- service section -->
    <section class=" bnews layout_padding">
         <div class="container">
            <p>Add <b>“view-source:”</b> before the URL of the webpage and you should be able to see the code in Chrome. Sometimes, it is hard to put the cursor before http:// or https:// and type “view-source:“. You can put the cursor after http:// or https://, delete them and then type view-source:</p>

            <div class="row">
              <div class="col-md-6">
                <img src="./assets/images/re.jpg" alt="sample" style="height: 400px">
              </div>
              <div class="col-md-6">
                <img src="./assets/images/code.jpg" alt="sample" style="height: 400px">
              </div>
            </div>

            <p>e.g change <i>“https://example.com”</i> to <i><b>“view-source:</b>https://example.com”</i> or <i><b>“view-source:</b>example.com”</i> to view it’s source code.</p>

         </div>
      </section>
    <br>
  <!-- end service section -->

<?php
  include "footer.php";
?>