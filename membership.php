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

    <title>iCinema | Membership</title>
</head>

<body>

    <?php
    include "components/navbar.php";
    include "components/mobile-quickbar.php";
    ?>

    <section class="container my-4 px-4 px-lg-3">
        <div class="row align-items-center g-4">

            <div class="col-12 col-lg-6 text-center text-lg-start order-2 order-lg-1">
                <h2>Join the iCinema Family</h2>
                <p>More films. More rewards. More reasons to visit.</p>
                <a href="#tiers" class="button">
                    Become a Member
                </a>
            </div>

            <div class="col-12 col-lg-6 order-1 order-lg-2">
                <img src="https://placehold.co/600x400" alt="Movie poster" class="img-fluid w-100">
            </div>

        </div>
    </section>

    <section class="container mt-4 px-4 px-lg-0">
        <div class="row g-4">
            <div class="col-6 col-lg-3">
                <div class="cta cta-white">
                    <h3>Benifit</h3>
                    <p>Exclusive benifit</p>
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div class="cta cta-white">
                    <h3>Benifit</h3>
                    <p>Exclusive benifit</p>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="cta cta-white">
                    <h3>Benifit</h3>
                    <p>Exclusive benifit</p>
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div class="cta cta-white">
                    <h3>Benifit</h3>
                    <p>Exclusive benifit</p>
                </div>
            </div>
    </section>

    <section id="tiers" class="container mt-3 px-4 px-lg-10">
        <div class="row g-3">
            <div class="col-12 col-lg-4">
                <div class="cta cta-flipped ">
                    <h3>Tier 1</h3>
                    <ul>
                        <li>Benefit</li>
                        <li>Benefit</li>
                        <li>Benefit</li>
                        <li>Benefit</li>
                    </ul>
                    <p>Price</p>
                    <a class="button" href="#">Join for Free</a>
                </div>
            </div>



            <div class="col-12 col-lg-4">
                <div class="cta ">
                    <h3>Tier 1</h3>
                    <ul>
                        <li>Benefit</li>
                        <li>Benefit</li>
                        <li>Benefit</li>
                        <li>Benefit</li>
                    </ul>
                    <p>Price</p>
                    <a class="button" href="#">Join for Free</a>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="cta cta-flipped ">
                    <h3>Tier 1</h3>
                    <ul>
                        <li>Benefit</li>
                        <li>Benefit</li>
                        <li>Benefit</li>
                        <li>Benefit</li>
                    </ul>
                    <p>Price</p>
                    <a class="button" href="#">Join for Free</a>
                </div>
            </div>

        </div>
    </section>

    <section class="container my-3 px-4 px-lg-0">
        <div class="row cta cta-white align-items-center">

            <div class="col-12 col-lg-4 p-3">
                <h2>Ready <br> For <br> More <br> Adventures?</h2>
            </div>

            <div class="col-12 col-lg-8">
                <p>
                    Join the iCinema family and make your next movie night unforgettable. Create your free account to
                    explore the latest releases, discover upcoming films, and find your next favourite movie. Your next
                    big-screen adventure is just a few clicks away!
                </p>

                <div class="d-flex justify-content-end">
                    <a href="membership.php" class="button">Create your free account</a>
                </div>
            </div>

        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
</body>

</html>