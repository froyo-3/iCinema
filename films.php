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

    <title>iCinema | Films</title>
</head>

<body>

    <?php
    include "components/navbar.php";
    ?>
    <?php
    include "components/mobile-quickbar.php";
    ?>


    <section class="container px-4 px-md-3 pt-3">
        <div class="row cta cta-flipped align-items-center">

            <!-- Movie poster -->
            <div class="col-12 col-md-4 p-3">
                <a href="#"><img src="https://placehold.co/600x400" alt="Movie poster"
                        class="img-fluid movie-poster"></a>
            </div>

            <!-- Movie information -->
            <div class="col-12 col-md-8">
                <div class="row align-items-center g-2 g-md-5">
                    <div class="col-auto">
                        <h3>Title</h3>
                    </div>
                    <div class="col-auto">
                        <p class="mb-0">Runtime: 120 mins</p>
                    </div>

                    <div class="col-auto">
                        <img src="images/age-rating.png" alt="Age rating: 12A">
                    </div>
                </div>

                <p>
                    Desc Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Iusto, autem enim modi, rem
                    est nostrum voluptatibus at atque debitis tempora
                    obcaecati praesentium cumque laudantium unde suscipit
                    neque? Incidunt, distinctio placeat?
                </p>

                <h4> Showing Today: </h4>

                <!-- Showtime buttons -->
                <div class="row row-cols-2 row-cols-md-3 g-3">
                    <div class="col">
                        <a href="#" class="button d-block text-center">10:00</a>
                    </div>
                    <div class="col">
                        <a href="#" class="button d-block text-center">10:00</a>
                    </div>
                    <div class="col">
                        <a href="#" class="button d-block text-center">10:00</a>
                    </div>

                </div>
                <div class="d-flex justify-content-end mt-4">
                    <a href="#" class="small-button end">
                        More Times &amp; Details
                    </a>
                </div>
            </div>

        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
</body>

</html>