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

    <title>iCinema | Cinema </title>
</head>

<body>

    <?php
    include "components/navbar.php";
    ?>
    <?php
    include "components/mobile-quickbar.php";
    ?>

    <section class="container">
        <div class="row cta align-items-center">

            <div class="col-12 col-lg-4 p-3">
                <h2>Who <br> Are <br> We </h2>
            </div>

            <div class="col-12 col-lg-8">
                <p>
                    Desc Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Iusto, autem enim modi, rem
                    est nostrum voluptatibus at atque debitis tempora
                    obcaecati praesentium cumque laudantium unde suscipit
                    neque? Incidunt, distinctio placeat?
                </p>

                <div class="d-flex justify-content-end">
                    <a href="#" class="button">Find a Film</a>
                </div>
            </div>

        </div>
    </section>

    <section class="container">
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Accessibility
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="col-12 col-lg-8">
                <p>
                    
<p><strong>Wheelchair Access</strong></p>
<p>Our cinemas aim to provide step-free access to entrances and accessible routes to key facilities. Wheelchair spaces and companion seating may be available in selected screens. Contact your chosen cinema before visiting to confirm available facilities.</p>

<p><strong>Accessible Screenings</strong></p>
<p>We aim to help customers enjoy films in ways that suit their needs. Depending on the cinema and film, accessible screenings may include:</p>
<ul>
    <li><strong>Subtitled screenings:</strong> On-screen dialogue and relevant sounds are displayed as text.</li>
    <li><strong>Audio-described screenings:</strong> Spoken descriptions explain important visual details for customers who are blind or partially sighted.</li>
    <li><strong>Relaxed screenings:</strong> Adjusted lighting and sound, with a more flexible environment for customers who may benefit from a relaxed atmosphere.</li>
</ul>

<p><strong>Hearing Assistance</strong></p>
<p>Some locations may offer hearing assistance systems to help customers with hearing loss follow dialogue more clearly. Contact your local cinema to check which systems are available.</p>

<p><strong>Accessible Facilities</strong></p>
<p>Where available, accessible toilets, lift access and designated seating can help visitors move around the cinema more comfortably. Assistance from cinema staff may also be available upon request.</p>

<p><strong>Assistance Dogs</strong></p>
<p>Assistance dogs may be permitted in accordance with the cinema's policy and applicable accessibility requirements. Contact your chosen location before your visit to confirm arrangements.</p>

<p><strong>Need More Information?</strong></p>
<p>If you have specific accessibility requirements or would like to ask about facilities before booking, please contact Us using the button below. Our aim is to help you plan your visit and enjoy your film with confidence.</p>

                </p>

                <div class="d-flex justify-content-end">
                    <a href="contact.php" class="button">Contact Us</a>
                </div>
            </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Age Rating
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">

                    <div class="accordion-body">
                        <ul class="rating-list">

                            <li class="rating-item">
                                <div>
                                    <h3>U – Universal</h3>
                                    <p>Suitable for all ages. Generally suitable for children aged 4 and over.</p>
                                </div>
                            </li>

                            <li class="rating-item">
                                <div>
                                    <h3>PG – Parental Guidance</h3>
                                    <p>Suitable for general viewing, but some scenes may be unsuitable for young
                                        children.</p>
                                </div>
                            </li>

                            <li class="rating-item">
                                <div>
                                    <h3>12A – Cinema</h3>
                                    <p>Under-12s must be accompanied by an adult.</p>
                                </div>
                            </li>

                            <li class="rating-item">
                                <div>
                                    <h3>15 – Suitable for 15 and over</h3>
                                    <p>No one under 15 may watch a 15-rated film in the cinema.</p>
                                </div>
                            </li>

                            <li class="rating-item">
                                <div>
                                    <h3>18 – Adults only</h3>
                                    <p>No one under 18 may watch an 18-rated film in the cinema.</p>
                                </div>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Accordion Item #3
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate
                        the <code>.accordion-flush</code> class. This is the third item’s accordion body. Nothing more
                        exciting happening here in terms of content, but just filling up the space to make it look, at
                        least at first glance, a bit more representative of how this would look in a real-world
                        application.</div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
</body>

</html>