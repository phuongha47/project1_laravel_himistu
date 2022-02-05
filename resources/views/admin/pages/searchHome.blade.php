<!DOCTYPE html>
<html lang="en">

<head>
  <title>Meranda &mdash; Website Template by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=B612+Mono|Cabin:400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="resouce/meranda-master/fonts/icomoon/style.css">

  <link rel="stylesheet" href="resouce/meranda-master/css/bootstrap.min.css">
  <link rel="stylesheet" href="resouce/meranda-master/css/jquery-ui.css">
  <link rel="stylesheet" href="resouce/meranda-master/css/owl.carousel.min.css">
  <link rel="stylesheet" href="resouce/meranda-master/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="resouce/meranda-master/css/owl.theme.default.min.css">

  <link rel="stylesheet" href="resouce/meranda-master/css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="resouce/meranda-master/css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="resouce/meranda-master/fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="resouce/meranda-master/css/aos.css">
  <link href="resouce/meranda-master/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="resouce/meranda-master/css/style.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    
    <div class="header-top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-lg-6 d-flex">
            <a href="index.html" class="site-logo">
              Meranda
            </a>

            <a href="#" class="ml-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>

          </div>
          <div class="col-12 col-lg-6 ml-auto d-flex">
            
            <form action="{{ route('home.search') }}" method="GET"  class="search-form d-inline-block">
                <div class="input-group">  
                    <div class="d-flex">
                        <input type="text" name="search" class="form-control" placeholder="Search..." value="{{ $searchKeyWord }}">
                        <div class="">
                            <button type="submit" class="btn btn-secondary mt-2" ><span class="icon-search"></span></button>
                        </div>
                    </div>
              </div>
            </form>
            
          </div>
          <div class="col-6 d-block d-lg-none text-right">
            
          </div>
        </div>
      </div>
      

    <div class="py-0">
      <div class="container">
      <span class="caption">Results</span>
      @foreach ($posts as $post)
        <div class="half-post-entry d-block d-lg-flex bg-light">
          <div class="img-bg" style="background-image: url('images/big_img_1.jpg')"></div>
            <div class="contents">
                <h2><a href="blog-single.html">{{ $post->title }}</a></h2>
                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate vero obcaecati natus adipisci necessitatibus eius, enim vel sit ad reiciendis. Enim praesentium magni delectus cum, tempore deserunt aliquid quaerat culpa nemo veritatis, iste adipisci excepturi consectetur doloribus aliquam accusantium beatae?</p>
                
                <div class="post-meta">
                <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">Food</a></span>
                <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                </div>
            </div>
        </div>
        @endforeach
      </div>
    </div>


    <div class="footer">
      <div class="container">
        

        <div class="row">
          <div class="col-12">
            <div class="copyright">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    

  </div>
  <!-- .site-wrap -->


  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15"/></svg></div>

  <script src="resouce/meranda-master/js/jquery-3.3.1.min.js"></script>
  <script src="resouce/meranda-master/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="resouce/meranda-master/js/jquery-ui.js"></script>
  <script src="resouce/meranda-master/js/popper.min.js"></script>
  <script src="resouce/meranda-master/js/bootstrap.min.js"></script>
  <script src="resouce/meranda-master/js/owl.carousel.min.js"></script>
  <script src="resouce/meranda-master/js/jquery.stellar.min.js"></script>
  <script src="resouce/meranda-master/js/jquery.countdown.min.js"></script>
  <script src="resouce/meranda-master/js/bootstrap-datepicker.min.js"></script>
  <script src="resouce/meranda-master/js/jquery.easing.1.3.js"></script>
  <script src="resouce/meranda-master/js/aos.js"></script>
  <script src="resouce/meranda-master/js/jquery.fancybox.min.js"></script>
  <script src="resouce/meranda-master/js/jquery.sticky.js"></script>
  <script src="resouce/meranda-master/js/jquery.mb.YTPlayer.min.js"></script>




  <script src="resouce/meranda-master/js/main.js"></script>

</body>

</html>
