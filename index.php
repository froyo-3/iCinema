<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Hello, world!</title>
</head>

<body>
    <?php 
     include "components/navbar.php"; 
     ?>
    <?php 
     include "components/mobile-quickbar.php"; 
     ?>

    <section class="movies-section">
        <h2>Now Showing</h2>
        <div class="movie-grid">
            <div class="movie-card"> <img src="assets/movie/spirited-away.jpg" alt="Movie 1 poster">
            </div>
            <div class="movie-card"> <img src="images/movie2.jpg" alt="Movie 2 poster">
            </div>
            <div class="movie-card"> <img src="images/movie3.jpg" alt="Movie 3 poster">
            </div>
            <div class="movie-card"> <img src="images/movie4.jpg" alt="Movie 4 poster">
            </div>
            <div class="movie-card"> <img src="images/movie5.jpg" alt="Movie 5 poster">
            </div>
            <div class="movie-card"> <img src="assets/movie/spirited-away.jpg" alt="Movie 1 poster">
            </div>
            <div class="movie-card"> <img src="images/movie2.jpg" alt="Movie 2 poster">
            </div>
            <div class="movie-card"> <img src="images/movie3.jpg" alt="Movie 3 poster">
            </div>
            <div class="movie-card"> <img src="images/movie4.jpg" alt="Movie 4 poster">
            </div>
            <div class="movie-card"> <img src="images/movie5.jpg" alt="Movie 5 poster">
            </div>
        </div>
    </section>
    <section class="container ">
      <div class="row cta">
      <div class="col">
        <h2> Looking <br> For <br> More? </h2>
      </div>
      <div class="col text-end">
        <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores alias cumque sed, corrupti voluptate nobis iure, expedita nihil, facere voluptatem placeat rerum. Temporibus, vel! Quae corrupti ad temporibus molestias iste?</p>
        <a href="#" class="button"> More Films </a>
      </div>
    </div>
    </section>

    <section class="container">
      <div class="row cta">
      <div class="col">
        <h2> Join <br> The <br> iCinema <br> Family </h2>
      </div>
      <div class="col text-end">
        <p> Mebership good Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores alias cumque sed, corrupti voluptate nobis iure, expedita nihil, facere voluptatem placeat rerum. Temporibus, vel! Quae corrupti ad temporibus molestias iste?</p>
        <a href="#" class="button"> Join Us </a>
      </div>
    </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>