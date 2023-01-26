<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Greetings!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <?php
    session_start();
    $fname = $_SESSION['namef'];
    $lname = $_SESSION['namel'];
    $email = $_SESSION['mail'];
    $date = $_SESSION['dob']  ;
    $today = date("Y-m-d");
    $diff = date_diff(date_create($date), date_create($today));
    //echo $diff->format('%y');
    ?>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="green.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption min-vh-100 d-flex justify-content-center align-items-center">
        <div>
          <h1 class="display-1">Hello!</h1>
          <p class="h1"><?php echo $fname." ".$lname?></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="green.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption min-vh-100 d-flex justify-content-center align-items-center">
        <div>
          <h1 class="display-1">We Will Contact You Through:</h1>
          <p class="h1"><?php echo $email?></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="green.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption min-vh-100 d-flex justify-content-center align-items-center">
        <div>
          <h1 class="display-2">Date of Birth:</h1>
          <p class="h1"><?php echo $date?></p>
          <h1 class="display-2">Age:</h1>
          <p class="h1"><?php echo $diff->format('%y');?></p>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>