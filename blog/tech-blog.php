<?php
  include "../include/dbcon.php";
  // session_start();

  $collect = mysqli_query($dbcon, "SELECT * FROM site_info where site_id='10' ");
  $site = mysqli_fetch_array($collect);
  
?>

<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Site Metas -->
<title><?php echo $site['webname']." Blog"; ?></title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

<!-- Design fonts -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.css" rel="stylesheet">

<!-- FontAwesome Icons core CSS -->
<link href="css/font-awesome.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="style.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

<!-- Responsive styles for this template -->
<link href="css/responsive.css" rel="stylesheet">

<!-- Colors for this template -->
<link href="css/colors.css" rel="stylesheet">

<!-- Version Tech CSS for this template -->
<link href="css/version/tech.css" rel="stylesheet">

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="sub_page">

  <div id="wrapper">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="#">
            <span>
              <?php echo $site['webname']; ?>
            </span>
          </a>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="s-1"> </span>
            <span class="s-2"> </span>
            <span class="s-3"> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php"> About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.php"> Service </a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="portfolio.php"> Portfolio </a>
                </li> -->
                <li class="nav-item active">
                  <a class="nav-link" href="blog.php">Blog </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    
    <section class="section first-section">
      <div class="container-fluid">
        <div class="masonry-blog clearfix">
          <div class="first-slot">
            <div class="masonry-box post-media">
              <img src="upload/tech_01.jpg" alt="" class="img-fluid">
              <div class="shadoweffect">
                <div class="shadow-desc">
                  <div class="blog-meta">
                    <span class="bg-orange"><a href="tech-category-01.html" title="">Technology</a></span>
                    <h4><a href="tech-single.html" title="">Say hello to real handmade office furniture! Clean &
                        beautiful design</a></h4>
                    <small><a href="tech-single.html" title="">24 July, 2017</a></small>
                    <small><a href="tech-author.html" title="">by Amanda</a></small>
                  </div>
                </div><!-- end shadow-desc -->
              </div><!-- end shadow -->
            </div><!-- end post-media -->
          </div><!-- end first-side -->

          <div class="second-slot">
            <div class="masonry-box post-media">
              <img src="upload/tech_02.jpg" alt="" class="img-fluid">
              <div class="shadoweffect">
                <div class="shadow-desc">
                  <div class="blog-meta">
                    <span class="bg-orange"><a href="tech-category-01.html" title="">Gadgets</a></span>
                    <h4><a href="tech-single.html" title="">Do not make mistakes when choosing web hosting</a></h4>
                    <small><a href="tech-single.html" title="">03 July, 2017</a></small>
                    <small><a href="tech-author.html" title="">by Jessica</a></small>
                  </div>
                </div><!-- end shadow-desc -->
              </div><!-- end shadow -->
            </div><!-- end post-media -->
          </div><!-- end second-side -->

          <div class="last-slot">
            <div class="masonry-box post-media">
              <img src="upload/tech_03.jpg" alt="" class="img-fluid">
              <div class="shadoweffect">
                <div class="shadow-desc">
                  <div class="blog-meta">
                    <span class="bg-orange"><a href="tech-category-01.html" title="">Technology</a></span>
                    <h4><a href="tech-single.html" title="">The most reliable Galaxy Note 8 images leaked</a></h4>
                    <small><a href="tech-single.html" title="">01 July, 2017</a></small>
                    <small><a href="tech-author.html" title="">by Jessica</a></small>
                  </div>
                </div><!-- end shadow-desc -->
              </div><!-- end shadow -->
            </div><!-- end post-media -->
          </div><!-- end second-side -->
        </div><!-- end masonry -->
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
            <div class="page-wrapper">
              <div class="blog-top clearfix">
                <h4 class="pull-left">Recent News <a href="#"><i class="fa fa-rss"></i></a></h4>
              </div><!-- end blog-top -->

              <div class="blog-list clearfix">
                <div class="blog-box row">
                  <div class="col-md-4">
                    <div class="post-media">
                      <a href="tech-single.html" title="">
                        <img src="upload/tech_blog_01.jpg" alt="" class="img-fluid">
                        <div class="hovereffect"></div>
                      </a>
                    </div>
                  </div><!-- end col -->

                  <div class="blog-meta big-meta col-md-8">
                    <h4><a href="tech-single.html" title="">Top 10 phone applications and 2017 mobile design awards</a>
                    </h4>
                    <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor.
                      Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus
                      tempor odio.</p>
                    <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html"
                        title="">Gadgets</a></small>
                    <small><a href="tech-single.html" title="">21 July, 2017</a></small>
                    <small><a href="tech-author.html" title="">by Matilda</a></small>
                    <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i> 1114</a></small>
                  </div>
                </div>

                <hr class="invis">

                <div class="blog-box row">
                  <div class="col-md-4">
                    <div class="post-media">
                      <a href="tech-single.html" title="">
                        <img src="upload/tech_blog_02.jpg" alt="" class="img-fluid">
                        <div class="hovereffect"></div>
                      </a>
                    </div>
                  </div><!-- end col -->

                  <div class="blog-meta big-meta col-md-8">
                    <h4><a href="tech-single.html" title="">A device you can use both headphones and usb</a></h4>
                    <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor.
                      Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus
                      tempor odio.</p>
                    <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html"
                        title="">Technology</a></small>
                    <small><a href="tech-single.html" title="">21 July, 2017</a></small>
                    <small><a href="tech-author.html" title="">by Matilda</a></small>
                    <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i> 4412</a></small>
                  </div>
                </div>

                <hr class="invis">

                <div class="blog-box row">
                  <div class="col-md-4">
                    <div class="post-media">
                      <a href="tech-single.html" title="">
                        <img src="upload/tech_blog_03.jpg" alt="" class="img-fluid">
                        <div class="hovereffect"></div>
                      </a>
                    </div>
                  </div><!-- end col -->

                  <div class="blog-meta big-meta col-md-8">
                    <h4><a href="tech-single.html" title="">Two brand new laptop models from ABC computer</a></h4>
                    <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor.
                      Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus
                      tempor odio.</p>
                    <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html"
                        title="">Development</a></small>
                    <small><a href="tech-single.html" title="">20 July, 2017</a></small>
                    <small><a href="tech-author.html" title="">by Matilda</a></small>
                    <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i> 2313</a></small>
                  </div>
                </div>

                <hr class="invis">

                <div class="row">
                  <div class="col-lg-10 offset-lg-1">
                    <div class="banner-spot clearfix">
                      <div class="banner-img">
                        <img src="upload/banner_02.jpg" alt="" class="img-fluid">
                      </div><!-- end banner-img -->
                    </div><!-- end banner -->
                  </div><!-- end col -->
                </div>

                <hr class="invis">

                <div class="blog-box row">
                  <div class="col-md-4">
                    <div class="post-media">
                      <a href="tech-single.html" title="">
                        <img src="upload/tech_blog_04.jpg" alt="" class="img-fluid">
                        <div class="hovereffect"></div>
                      </a>
                    </div>
                  </div><!-- end col -->

                  <div class="blog-meta big-meta col-md-8">
                    <h4><a href="tech-single.html" title="">Applications for taking photos of nature in your mobile
                        phones</a></h4>
                    <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor.
                      Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus
                      tempor odio.</p>
                    <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html"
                        title="">Design</a></small>
                    <small><a href="tech-single.html" title="">19 July, 2017</a></small>
                    <small><a href="tech-author.html" title="">by Matilda</a></small>
                    <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i> 4441</a></small>
                  </div>
                </div>

                <hr class="invis">

                <div class="blog-box row">
                  <div class="col-md-4">
                    <div class="post-media">
                      <a href="tech-single.html" title="">
                        <img src="upload/tech_blog_05.jpg" alt="" class="img-fluid">
                        <div class="hovereffect"></div>
                      </a>
                    </div>
                  </div><!-- end col -->

                  <div class="blog-meta big-meta col-md-8">
                    <h4><a href="tech-single.html" title="">Say hello to colored strap models in smart hours</a></h4>
                    <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor.
                      Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus
                      tempor odio.</p>
                    <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html"
                        title="">Materials</a></small>
                    <small><a href="tech-single.html" title="">18 July, 2017</a></small>
                    <small><a href="tech-author.html" title="">by Matilda</a></small>
                    <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i> 33312</a></small>
                  </div>
                </div>

                <hr class="invis">

                <div class="blog-box row">
                  <div class="col-md-4">
                    <div class="post-media">
                      <a href="tech-single.html" title="">
                        <img src="upload/tech_blog_06.jpg" alt="" class="img-fluid">
                        <div class="hovereffect"></div>
                      </a>
                    </div>
                  </div><!-- end col -->

                  <div class="blog-meta big-meta col-md-8">
                    <h4><a href="tech-single.html" title="">How about evaluating your old mobile phones in different
                        ways?</a></h4>
                    <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor.
                      Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus
                      tempor odio.</p>
                    <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html"
                        title="">Gadgets</a></small>
                    <small><a href="tech-single.html" title="">17 July, 2017</a></small>
                    <small><a href="tech-author.html" title="">by Matilda</a></small>
                    <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i> 4440</a></small>
                  </div>
                </div>

                <hr class="invis">

                <div class="blog-box row">
                  <div class="col-md-4">
                    <div class="post-media">
                      <a href="tech-single.html" title="">
                        <img src="upload/tech_blog_07.jpg" alt="" class="img-fluid">
                        <div class="hovereffect"></div>
                      </a>
                    </div>
                  </div><!-- end col -->

                  <div class="blog-meta big-meta col-md-8">
                    <h4><a href="tech-single.html" title="">Drinking coffee at the computer rests the spirit</a></h4>
                    <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor.
                      Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus
                      tempor odio.</p>
                    <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html"
                        title="">Technology</a></small>
                    <small><a href="tech-single.html" title="">16 July, 2017</a></small>
                    <small><a href="tech-author.html" title="">by Matilda</a></small>
                    <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i> 4412</a></small>
                  </div>
                </div>

                <hr class="invis">

                <div class="blog-box row">
                  <div class="col-md-4">
                    <div class="post-media">
                      <a href="tech-single.html" title="">
                        <img src="upload/tech_blog_08.jpg" alt="" class="img-fluid">
                        <div class="hovereffect"></div>
                      </a>
                    </div>
                  </div><!-- end col -->

                  <div class="blog-meta big-meta col-md-8">
                    <h4><a href="tech-single.html" title="">If you are considering buying a new safe for your mobile
                        phone, be sure to read this article</a></h4>
                    <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor.
                      Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus
                      tempor odio.</p>
                    <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html"
                        title="">Reviews</a></small>
                    <small><a href="tech-single.html" title="">15 July, 2017</a></small>
                    <small><a href="tech-author.html" title="">by Matilda</a></small>
                    <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i> 44123</a></small>
                  </div>
                </div>

                <hr class="invis">

                <div class="blog-box row">
                  <div class="col-md-4">
                    <div class="post-media">
                      <a href="tech-single.html" title="">
                        <img src="upload/tech_blog_09.jpg" alt="" class="img-fluid">
                        <div class="hovereffect"></div>
                      </a>
                    </div>
                  </div><!-- end col -->

                  <div class="blog-meta big-meta col-md-8">
                    <h4><a href="tech-single.html" title="">Enjoy a summer with a colorful headset</a></h4>
                    <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor.
                      Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus
                      tempor odio.</p>
                    <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html"
                        title="">Technology</a></small>
                    <small><a href="tech-single.html" title="">14 July, 2017</a></small>
                    <small><a href="tech-author.html" title="">by Matilda</a></small>
                    <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i> 2214</a></small>
                  </div>
                </div>

                <hr class="invis">

                <div class="blog-box row">
                  <div class="col-md-4">
                    <div class="post-media">
                      <a href="tech-single.html" title="">
                        <img src="upload/tech_blog_10.jpg" alt="" class="img-fluid">
                        <div class="hovereffect"></div>
                      </a>
                    </div>
                  </div><!-- end col -->

                  <div class="blog-meta big-meta col-md-8">
                    <h4><a href="tech-single.html" title="">Google has developed a brand new algorithm. Forget all your
                        knowledge!</a></h4>
                    <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor.
                      Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus
                      tempor odio.</p>
                    <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html"
                        title="">Gadgets</a></small>
                    <small><a href="tech-single.html" title="">13 July, 2017</a></small>
                    <small><a href="tech-author.html" title="">by Matilda</a></small>
                    <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i> 3331</a></small>
                  </div>
                </div>
              </div><!-- end blog-list -->
            </div><!-- end page-wrapper -->

            <hr class="invis">

            <div class="row">
              <div class="col-md-12">
                <nav aria-label="Page navigation">
                  <ul class="pagination justify-content-start">
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#">Next</a>
                    </li>
                  </ul>
                </nav>
              </div><!-- end col -->
            </div>
          </div><!-- end col -->

          <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <div class="sidebar">
              <div class="widget">
                <div class="banner-spot clearfix">
                  <div class="banner-img">
                    <img src="upload/banner_07.jpg" alt="" class="img-fluid">
                  </div><!-- end banner-img -->
                </div><!-- end banner -->
              </div><!-- end widget -->

              <div class="widget">
                <h2 class="widget-title">Trend Videos</h2>
                <div class="trend-videos">
                  <div class="blog-box">
                    <div class="post-media">
                      <a href="tech-single.html" title="">
                        <img src="upload/tech_video_01.jpg" alt="" class="img-fluid">
                        <div class="hovereffect">
                          <span class="videohover"></span>
                        </div>
                      </a>
                    </div>
                    <div class="blog-meta">
                      <h4><a href="tech-single.html" title="">We prepared the best 10 laptop presentations for you</a>
                      </h4>
                    </div>
                  </div>

                  <hr class="invis">

                  <div class="blog-box">
                    <div class="post-media">
                      <a href="tech-single.html" title="">
                        <img src="upload/tech_video_02.jpg" alt="" class="img-fluid">
                        <div class="hovereffect">
                          <span class="videohover"></span>
                        </div>
                      </a>
                    </div>
                    <div class="blog-meta">
                      <h4><a href="tech-single.html" title="">We are guests of ABC Design Studio - Vlog</a></h4>
                    </div>
                  </div>

                  <hr class="invis">

                  <div class="blog-box">
                    <div class="post-media">
                      <a href="tech-single.html" title="">
                        <img src="upload/tech_video_03.jpg" alt="" class="img-fluid">
                        <div class="hovereffect">
                          <span class="videohover"></span>
                        </div>
                      </a>
                    </div>
                    <div class="blog-meta">
                      <h4><a href="tech-single.html" title="">Both blood pressure monitor and intelligent clock</a></h4>
                    </div>
                  </div>
                </div><!-- end videos -->
              </div><!-- end widget -->

              <div class="widget">
                <h2 class="widget-title">Popular Posts</h2>
                <div class="blog-list-widget">
                  <div class="list-group">
                    <a href="tech-single.html"
                      class="list-group-item list-group-item-action flex-column align-items-start">
                      <div class="w-100 justify-content-between">
                        <img src="upload/tech_blog_08.jpg" alt="" class="img-fluid float-left">
                        <h5 class="mb-1">5 Beautiful buildings you need..</h5>
                        <small>12 Jan, 2016</small>
                      </div>
                    </a>

                    <a href="tech-single.html"
                      class="list-group-item list-group-item-action flex-column align-items-start">
                      <div class="w-100 justify-content-between">
                        <img src="upload/tech_blog_01.jpg" alt="" class="img-fluid float-left">
                        <h5 class="mb-1">Let's make an introduction for..</h5>
                        <small>11 Jan, 2016</small>
                      </div>
                    </a>

                    <a href="tech-single.html"
                      class="list-group-item list-group-item-action flex-column align-items-start">
                      <div class="w-100 last-item justify-content-between">
                        <img src="upload/tech_blog_03.jpg" alt="" class="img-fluid float-left">
                        <h5 class="mb-1">Did you see the most beautiful..</h5>
                        <small>07 Jan, 2016</small>
                      </div>
                    </a>
                  </div>
                </div><!-- end blog-list -->
              </div><!-- end widget -->

              <div class="widget">
                <h2 class="widget-title">Recent Reviews</h2>
                <div class="blog-list-widget">
                  <div class="list-group">
                    <a href="tech-single.html"
                      class="list-group-item list-group-item-action flex-column align-items-start">
                      <div class="w-100 justify-content-between">
                        <img src="upload/tech_blog_02.jpg" alt="" class="img-fluid float-left">
                        <h5 class="mb-1">Banana-chip chocolate cake recipe..</h5>
                        <span class="rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </span>
                      </div>
                    </a>

                    <a href="tech-single.html"
                      class="list-group-item list-group-item-action flex-column align-items-start">
                      <div class="w-100 justify-content-between">
                        <img src="upload/tech_blog_03.jpg" alt="" class="img-fluid float-left">
                        <h5 class="mb-1">10 practical ways to choose organic..</h5>
                        <span class="rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </span>
                      </div>
                    </a>

                    <a href="tech-single.html"
                      class="list-group-item list-group-item-action flex-column align-items-start">
                      <div class="w-100 last-item justify-content-between">
                        <img src="upload/tech_blog_07.jpg" alt="" class="img-fluid float-left">
                        <h5 class="mb-1">We are making homemade ravioli..</h5>
                        <span class="rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </span>
                      </div>
                    </a>
                  </div>
                </div><!-- end blog-list -->
              </div><!-- end widget -->

              <div class="widget">
                <h2 class="widget-title">Follow Us</h2>

                <div class="row text-center">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <a href="#" class="social-button facebook-button">
                      <i class="fa fa-facebook"></i>
                      <p>27k</p>
                    </a>
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <a href="#" class="social-button twitter-button">
                      <i class="fa fa-twitter"></i>
                      <p>98k</p>
                    </a>
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <a href="#" class="social-button google-button">
                      <i class="fa fa-google-plus"></i>
                      <p>17k</p>
                    </a>
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <a href="#" class="social-button youtube-button">
                      <i class="fa fa-youtube"></i>
                      <p>22k</p>
                    </a>
                  </div>
                </div>
              </div><!-- end widget -->

              <div class="widget">
                <div class="banner-spot clearfix">
                  <div class="banner-img">
                    <img src="upload/banner_03.jpg" alt="" class="img-fluid">
                  </div><!-- end banner-img -->
                </div><!-- end banner -->
              </div><!-- end widget -->
            </div><!-- end sidebar -->
          </div><!-- end col -->
        </div>
      </div><!-- end container -->
    </section>

    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="widget">
              <div class="footer-text text-left">
                <a href="index.html"><img src="images/version/tech-footer-logo.png" alt="" class="img-fluid"></a>
                <p>Tech Blog is a technology blog, we sharing marketing, news and gadget articles.</p>
                <div class="social">
                  <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i
                      class="fa fa-facebook"></i></a>
                  <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i
                      class="fa fa-twitter"></i></a>
                  <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i
                      class="fa fa-instagram"></i></a>
                  <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google Plus"><i
                      class="fa fa-google-plus"></i></a>
                  <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i
                      class="fa fa-pinterest"></i></a>
                </div>

                <hr class="invis">

                <div class="newsletter-widget text-left">
                  <form class="form-inline">
                    <input type="text" class="form-control" placeholder="Enter your email address">
                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                  </form>
                </div><!-- end newsletter -->
              </div><!-- end footer-text -->
            </div><!-- end widget -->
          </div><!-- end col -->

          <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <div class="widget">
              <h2 class="widget-title">Popular Categories</h2>
              <div class="link-widget">
                <ul>
                  <li><a href="#">Marketing <span>(21)</span></a></li>
                  <li><a href="#">SEO Service <span>(15)</span></a></li>
                  <li><a href="#">Digital Agency <span>(31)</span></a></li>
                  <li><a href="#">Make Money <span>(22)</span></a></li>
                  <li><a href="#">Blogging <span>(66)</span></a></li>
                </ul>
              </div><!-- end link-widget -->
            </div><!-- end widget -->
          </div><!-- end col -->

          <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
            <div class="widget">
              <h2 class="widget-title">Copyrights</h2>
              <div class="link-widget">
                <ul>
                  <li><a href="#">About us</a></li>
                  <li><a href="#">Advertising</a></li>
                  <li><a href="#">Write for us</a></li>
                  <li><a href="#">Trademark</a></li>
                  <li><a href="#">License & Help</a></li>
                </ul>
              </div><!-- end link-widget -->
            </div><!-- end widget -->
          </div><!-- end col -->
        </div>

        <div class="row">
          <div class="col-md-12 text-center">
            <br>
            <div class="copyright">&copy; Tech Blog. Design: <a href="http://html.design">HTML Design</a>.</div>
          </div>
        </div>
      </div><!-- end container -->
    </footer><!-- end footer -->

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

                $submit2 = mysqli_query($dbcon, "INSERT INTO newsletter (email) VALUES('$email2') ");

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


  </div><!-- end wrapper -->

  <!-- Core JavaScript
    ================================================== -->
  <script src="js/jquery.min.js"></script>
  <script src="js/tether.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>

</body>

</html>