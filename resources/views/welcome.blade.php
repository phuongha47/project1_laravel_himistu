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
            <a href="{{ route('home.index') }}" class="site-logo">
              Meranda
            </a>
            <a href="#" class="ml-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>

          </div>
          <div class="col-12 col-lg-3 ml-auto d-flex">
           
            <form action="{{ route('home.search') }}" method="GET"  class="search-form d-inline-block">
                <div class="input-group">  
                    <div class="d-flex">
                        <div class="d-flex">
                          <input type="text" name="search" class="form-control" placeholder="Search..." value="{{ $searchKeyWord }}">
                          <button type="submit" class="btn btn-secondary" ><span class="icon-search"></span></button>
                        </div>
                    </div>
              </div>
            </form>

            
          </div>
          <div class="col-6 d-block d-lg-none text-right">
            
          </div>
        </div>
      </div>
      
    <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                  @foreach ($categories_with_children->slice(0, 9) as $category)
                  <li class="active"> 
                    @if (!$category['children']->isEmpty())   
                      <div class="dropdown ml-5">
                          <a class="nav-link text-left" href="{{ route('userCategory.showCategory', $category->id) }}"  > {{ $category->name }}</a>
                          <div class="dropdown-menu">
                            @foreach ($category->children as $chil)
                              <a class="dropdown-item " href="{{ route('userCategory.show', $chil->id) }}">{{ $chil->name }}<span class="caret"></span></a>
                                      
                            @endforeach
                          </div>
                      </div>
                    @else
                    <div class="ml-5">
                          <a style="color:black", ="nav-link text-left" href="{{ route('userCategory.showCategory', $category->id) }}"  > {{ $category->name }}</a>     
                      </div> 
                      @endif    
     
                  </li>
                  @endforeach
                </ul>                                                                                                                                                                                                                                                                                           
            </nav>
         
        </div>
      </div>

    </div>
    
    </div>
    


    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="row">
              <div class="col-12">
                <div class="section-title">
                <a href="{{ route('userCategory.showCategory', $latest_posts[0]->category['parent_id']) }}" > <h2>Hot news</h2></a>
                </div>
                @foreach ($latest_posts as $post)
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
              @if ($loop->first)
                <div class="post-entry-1">
                  @foreach($img_posts as $img)
                    @if ($img->imageable_id == $post->id)
                      <img style="width:300px" src="{{ $img->link }}" alt="">
                    @endif
                  @endforeach
                  <h2><a href="{{ route('userPost.show', $post->id) }}">{{ $post->title }}</a></h2>
                  <p>{{ \Illuminate\Support\Str::limit($post->body, 200, $end='...') }}</p>
                  @endif
              @endforeach
                </div>
              </div>
              
              <div class="col-md-6">
   
              @foreach($latest_posts->slice(0, 4) as $k => $post)
              @if ($k > 0)
                <div class="post-entry-2 d-flex bg-light">
                  @foreach($img_posts as $img)
                      @if ($img->imageable_id == $post->id)
                        <a href="{{ route('userPost.show', $post->id) }}" class="mt-3 ml-3"><img style="width:150px; height:150px" src="{{ $img->link }}" alt=""></a> 
                      @endif
                  @endforeach
                  <div class="contents">
                    <h2><a href="{{ route('userPost.show', $post->id) }}">{{ $post->title }}</a></h2>
                    <div class="post-meta">
                      <span class="d-block">{{ \Illuminate\Support\Str::limit($post->body, 80, $end='...') }} <a href="#"></a></span>
                    </div>

                  </div>
                </div>
                @endif
                @endforeach
                <a href="{{ route('userCategory.showCategory', $latest_posts[0]->category['parent_id']) }}" class="more">See All <span class="icon-keyboard_arrow_right"></span></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="section-title">
            <a href="{{ route('userCategory.showCategory', $latest_posts[0]->category['parent_id']) }}" > <h2>Trending</h2></a>
            </div>
                @foreach($world_posts->slice(0, 3) as $post)
                <div class="trend-entry d-flex">
                <div class="number align-self-start">{{ $loop->index + 1 }}</div>
                <div class="trend-contents">
                    <h2><a href="{{ route('userPost.show', $post->id) }}">{{ $post->title }}</a></h2>
                    <div class="post-meta">
                    <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span>{{ \Illuminate\Support\Str::limit($post->body, 275, $end='...') }}<span class="icon-star2"></span></span>
                  </div>

                </div>
                </div>
                @endforeach
            <p>
              <a href="{{ route('userCategory.showCategory', $world_posts[0]->category['parent_id']) }}" class="more">See All <span class="icon-keyboard_arrow_right"></span></a>
            </p>

          </div>
        </div>
    
    <!-- END section -->

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="section-title">
            <a href="{{ route('userCategory.showCategory', $latest_posts[0]->category['parent_id']) }}" > <h2>World</h2></a>
                </div>
                @foreach($world_posts->slice(0,2) as $post)
                <div class="post-entry-1 d-flex">
                  @foreach($img_posts as $img)
                      @if ($img->imageable_id == $post->id)
                      <a href="{{ route('userPost.show', $post->id) }}"><div class="thumbnail"><img style="width:150px" src="{{ $img->link }}" alt=""></div></a>
                      @endif
                  @endforeach
                  <div class="ml-3 contents">
                    <h2><a href="{{ route('userPost.show', $post->id) }}">{{ $post->title }}</a></h2>
                    <p class="mb-3">{{ \Illuminate\Support\Str::limit($post->body, 250, $end='...') }}</p>
                  </div>
                </div>
                @endforeach
                  <br>
                  <a href="{{ route('userCategory.showCategory', $world_posts[0]->category['parent_id']) }}" class="more">See All<span class="icon-keyboard_arrow_right"></span></a>
              </div>


              <div class="col-lg-6">
            <div class="section-title">
            <a href="{{ route('userCategory.showCategory', $latest_posts[0]->category['parent_id']) }}" > <h2>Business</h2></a>
                </div>
                @foreach($business_posts->slice(0,2) as $post)
                <div class="post-entry-1 d-flex">
                  @foreach($img_posts as $img)
                      @if ($img->imageable_id == $post->id)
                      <a href="{{ route('userPost.show', $post->id) }}"><div class="thumbnail"><img style="width:150px" src="{{ $img->link }}" alt=""></div></a>
                      @endif
                  @endforeach
                  <div class="ml-3 contents">
                    <h2><a href="{{ route('userPost.show', $post->id) }}">{{ $post->title }}</a></h2>
                    <p class="mb-3">{{ \Illuminate\Support\Str::limit($post->body, 270, $end='...') }}</p>
                  </div>
                </div>
                @endforeach
                  <br>
                  <a href="{{ route('userCategory.showCategory', $world_posts[0]->category['parent_id']) }}" class="more">See All<span class="icon-keyboard_arrow_right"></span></a>
              </div>
        </div>



    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-9">
            <div class="section-title">
            <a href="{{ route('userCategory.showCategory', $latest_posts[0]->category['parent_id']) }}" > <h2>Tech</h2></a>
            </div>
            @foreach($tech_posts->slice(0,4) as $post)
            <div class="post-entry-2 d-flex">
               @foreach($img_posts as $img)
                  @if ($img->imageable_id == $post->id)
                  <a href="{{ route('userPost.show', $post->id) }}"><img style="width:150px" src="{{ $img->link }}" alt=""></a>
                  @endif
                @endforeach
              <div class="ml-3 contents order-md-1 pl-0">
                <h2><a href="{{ route('userPost.show', $post->id) }}">{{ $post->title }}</a></h2>
                <p class="mb-3">{{ \Illuminate\Support\Str::limit($post->body, 250, $end='...') }}</p>
              </div>
            </div>
            @endforeach
            <a href="{{ route('userCategory.showCategory', $tech_posts[0]->category['parent_id']) }}" class="more">See All  <span class="icon-keyboard_arrow_right"></span></a>
          </div>
          
          <div class="col-lg-3">
            <div class="section-title">
              <a href="{{ route('userCategory.showCategory', $latest_posts[0]->category['parent_id']) }}" > <h2>Health </h2></a>
            </div>
            @foreach($health_posts->slice(0,2) as $post)
            <div class="trend-entry d-flex">
              <div class="trend-contents">
                 @foreach($img_posts as $img)
                  @if ($img->imageable_id == $post->id)
                  <a href="{{ route('userPost.show', $post->id) }}"><img style="width:80%" src="{{ $img->link }}" alt=""></a>
                  @endif
                @endforeach
                <h2 class="mt-2"><a href="{{ route('userPost.show', $post->id) }}">{{ $post->title }}</a></h2>
                
              </div>
            </div>
            @endforeach
            
            <p>
              <a href="{{ route('userCategory.showCategory', $health_posts[0]->category['parent_id']) }}" class="more">See All <span class="icon-keyboard_arrow_right"></span></a>
            </p>
          </div>
        </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    <div class="site-section subscribe bg-light">
      <div class="container">
        <form action="#" class="row align-items-center">
          <div class="col-md-5 mr-auto">
            <h2>Newsletter Subcribe</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis aspernatur ut at quae omnis pariatur obcaecati possimus nisi ea iste!</p>
          </div>
          <div class="col-md-6 ml-auto">
            <div class="d-flex">
              <input type="email" class="form-control" placeholder="Enter your email">
              <button type="submit" class="btn btn-secondary" ><span class="icon-paper-plane"></span></button>
            </div>
          </div>
        </form>
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
