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


    <div id="carouselExampleCaptions" class="carousel slide mt-3">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://placehold.co/600x400" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                    <h5>Title</h5>
                    <p>Description of the movie that is in the carosel currently</p>
                    <a href="#" class="button"> Book Now! </a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://placehold.co/600x400" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                    <h5>Title</h5>
                    <p>Description of the movie that is in the carosel currently</p>
                    <a href="#" class="button"> Book Now! </a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://placehold.co/600x400" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                    <h5>Title</h5>
                    <p>Description of the movie that is in the carosel currently</p>
                    <a href="#" class="button"> Book Now! </a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon carousel-control" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon carousel-control" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section class="movies-section">
        <h2>Now Showing</h2>
        <div class="movie-grid">
            <a class="movie-card"> <img src="assets/movie/spirited-away.jpg" alt="Movie 1 poster">
            </a>
            <a class="movie-card"> <img src="images/movie2.jpg" alt="Movie 2 poster">
            </a>
            <a class="movie-card"> <img src="images/movie3.jpg" alt="Movie 3 poster">
            </a>
            <a class="movie-card"> <img src="images/movie4.jpg" alt="Movie 4 poster">
            </a>
            <a class="movie-card"> <img src="images/movie5.jpg" alt="Movie 5 poster">
            </a>
            <a class="movie-card"> <img src="assets/movie/spirited-away.jpg" alt="Movie 1 poster">
            </a>
            <a class="movie-card"> <img src="images/movie2.jpg" alt="Movie 2 poster">
            </a>
            <a class="movie-card"> <img src="images/movie3.jpg" alt="Movie 3 poster">
            </a>
            <a class="movie-card"> <img src="images/movie4.jpg" alt="Movie 4 poster">
            </a>
            <a class="movie-card"> <img src="images/movie5.jpg" alt="Movie 5 poster">
            </a>
        </div>
    </section>
    <section class="container ">
        <div class="row cta">
            <div class="col">
                <h2> Looking <br> For <br> More? </h2>
            </div>
            <div class="col text-end">
                <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores alias cumque sed, corrupti
                    voluptate nobis iure, expedita nihil, facere voluptatem placeat rerum. Temporibus, vel! Quae
                    corrupti ad temporibus molestias iste?</p>
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
                <p> Mebership good Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores alias cumque
                    sed, corrupti voluptate nobis iure, expedita nihil, facere voluptatem placeat rerum. Temporibus,
                    vel! Quae corrupti ad temporibus molestias iste?</p>
                <a href="#" class="button"> Join Us </a>
            </div>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>