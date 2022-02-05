<div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 single-content">
            
            <p class="mb-5">
              <img src="images/big_img_1.jpg" alt="Image" class="img-fluid">
            </p>  
            <h1 class="mb-4">
              {{ $image_post->title }}
            </h1>
            <img src="{{ $image_post->link }}" alt="">
            <div class="post-meta d-flex mb-5">
              <div class="bio-pic mr-3">
                <img src="images/person_1.jpg" alt="Image" class="img-fluidid">
              </div>
              
            </div>

            <p>{{ \Illuminate\Support\Str::limit($image_post->body, 250, $end='...') }}</p>

        