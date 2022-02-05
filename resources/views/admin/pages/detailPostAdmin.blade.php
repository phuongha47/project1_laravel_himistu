<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="style.css">
<title>Title</title>
</head>
<body>
<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="..." class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h3 class="card-title">{{ $image_post->title }}</h3>
        <p class="card-text">{{ $image_post->body }}</p>
        <p class="card-text"><small class="text-muted">{{ $image_post->created_at }}</small></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>