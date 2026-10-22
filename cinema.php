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
                <h2>About <br> iCinema</h2>
            </div>

            <div class="col-12 col-lg-8">
                <p>

                <h3>Our Story</h3>
                <p>
                    iCinema was created with one simple idea in mind: to bring people
                    together through the magic of film. Founded by a small group of
                    passionate film lovers, our cinema was designed to provide a
                    welcoming space where friends, families and movie enthusiasts
                    could share unforgettable experiences.
                </p>

                <p>
                    Our founders wanted to create more than just a place to watch films.
                    They envisioned a community-focused cinema where everyone could
                    discover something new, enjoy their favourite stories on the big
                    screen and make lasting memories.
                </p>

                <h3>Our Mission</h3>
                <p>
                    At iCinema, we believe that films are for everyone. Our mission
                    is to make cinema accessible, enjoyable and affordable while
                    celebrating the diversity of stories told through film.
                </p>

                <p>
                    We aim to offer a varied programme of films, from major Hollywood
                    releases to independent productions and international cinema,
                    giving every visitor the opportunity to find something they love.
                </p>

                <h3>Our Community</h3>
                <p>
                    Being part of the Sighthill area means being part of a diverse
                    and vibrant community. We want iCinema to be a place where local
                    residents, students and visitors can come together, discover new
                    films and enjoy shared experiences.
                </p>

                <p>
                    Through our welcoming atmosphere, accessible facilities and
                    commitment to great entertainment, we hope to make iCinema a
                    valued part of Edinburgh's local community.
                </p>

                <p><strong>iCinema — Every story deserves the big screen.</strong></p>
                </p>

                <div class="d-flex justify-content-end">
                    <a href="films.php" class="button">Find a Film</a>
                </div>
            </div>

        </div>
    </section>

    <section class="container">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Where to find us?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="col-12 p-3">
                            <h2>Find Our Cinema</h2>

                            <p><strong>Location and Address</strong></p>
                            <p>
                                iCinema is located near Edinburgh College's Sighthill Campus
                                in the west of Edinburgh, close to the City Bypass. The area
                                is accessible from Edinburgh city centre and surrounding areas.
                            </p>

                            <p><strong>Address:</strong> Bankhead Avenue, Edinburgh, EH11 4DE</p>

                            <p><strong>Public Transport</strong></p>
                            <p>
                                The cinema is accessible by local bus services, with connections
                                to Edinburgh city centre and nearby areas. Bankhead tram stop is
                                also nearby, providing convenient connections across the city.
                                Edinburgh Park railway station offers another option for visitors
                                travelling by train.
                            </p>
                            <p>
                                We recommend checking local bus, tram and train timetables
                                before travelling.
                            </p>

                            <p><strong>Parking</strong></p>
                            <p>
                                Visitors travelling by car should plan their journey in advance.
                                Parking options are available around the Sighthill area, although
                                spaces, charges and restrictions vary by location. Please check
                                parking conditions before your visit, as Edinburgh College's
                                own car parks may have permit requirements.
                            </p>

                            <p><strong>Contact Us</strong></p>
                            <p>
                                If you need directions or have any questions before visiting
                                iCinema, please get in touch with our team.
                            </p>

                            <ul>
                                <li><strong>Telephone:</strong> +44 123456789</li>
                                <li><strong>Email:</strong> admin@iCinema.com </li>
                            </ul>

                            <p>
                                For further assistance, please contact us.
                            </p>

                            <div class="d-flex justify-content-end gap-3">
                                <a href="https://maps.app.goo.gl/e7CYyvMdHMQhcAbH9" class="button">Map</a>
                                <a href="contact.php" class="button">Contact Us</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Accessibility
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body ">
                        <div class="col-12 p-3">
                            <p>
                            <h2>Accessibility</h2>

                            <p><strong>Wheelchair Access</strong></p>
                            <p>Our cinemas aim to provide step-free access to entrances and accessible routes to key
                                facilities. Wheelchair spaces and companion seating may be available in selected
                                screens. Contact your chosen cinema before visiting to confirm available facilities.</p>

                            <p><strong>Accessible Screenings</strong></p>
                            <p>We aim to help customers enjoy films in ways that suit their needs. Depending on the
                                cinema and film, accessible screenings may include:</p>
                            <ul>
                                <li><strong>Subtitled screenings:</strong> On-screen dialogue and relevant sounds are
                                    displayed as text.</li>
                                <li><strong>Audio-described screenings:</strong> Spoken descriptions explain important
                                    visual details for customers who are blind or partially sighted.</li>
                                <li><strong>Relaxed screenings:</strong> Adjusted lighting and sound, with a more
                                    flexible environment for customers who may benefit from a relaxed atmosphere.</li>
                            </ul>

                            <p><strong>Hearing Assistance</strong></p>
                            <p>Some locations may offer hearing assistance systems to help customers with hearing loss
                                follow dialogue more clearly. Contact your local cinema to check which systems are
                                available.</p>

                            <p><strong>Accessible Facilities</strong></p>
                            <p>Where available, accessible toilets, lift access and designated seating can help visitors
                                move around the cinema more comfortably. Assistance from cinema staff may also be
                                available upon request.</p>

                            <p><strong>Assistance Dogs</strong></p>
                            <p>Assistance dogs may be permitted in accordance with the cinema's policy and applicable
                                accessibility requirements. Contact your chosen location before your visit to confirm
                                arrangements.</p>

                            <p><strong>Need More Information?</strong></p>
                            <p>If you have specific accessibility requirements or would like to ask about facilities
                                before booking, please contact us using the button below. Our aim is to help you plan
                                your visit and enjoy your film with confidence.</p>

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
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Age Rating Policy
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="p-3">
                        <h2>Age Ratings</h2>
                        <ul>
                            <li>
                                <div>
                                    <h3>U – Universal</h3>
                                    <p>Suitable for all ages. Generally suitable for children aged 4 and over.</p>
                                    <p><strong>Potential reasons for this rating:</strong></p>
                                    <ul>
                                        <li>Very mild bad language.</li>
                                        <li>Brief, mild scenes of threat or danger.</li>
                                        <li>Very mild violence, such as cartoon slapstick.</li>
                                        <li>Occasional mild rude humour.</li>
                                    </ul>
                                </div>
                            </li>
                            <br>
                            <li>
                                <div>
                                    <h3>PG – Parental Guidance</h3>
                                    <p>Suitable for general viewing, but some scenes may be unsuitable for young
                                        children. Parents should consider whether the content is appropriate for their
                                        child.</p>
                                    <p><strong>Potential reasons for this rating:</strong></p>
                                    <ul>
                                        <li>Mild bad language.</li>
                                        <li>Moderate threat or scary scenes that may upset younger children.</li>
                                        <li>Mild violence, without excessive detail.</li>
                                        <li>References to topics such as bullying or discrimination.</li>
                                    </ul>
                                </div>
                            </li>
                            <br>
                            <li>
                                <div>
                                    <h3>12A – Cinema</h3>
                                    <p>Films classified 12A are suitable for children aged 12 and over. Children younger
                                        than 12 may watch only when accompanied by an adult aged 18 or over.</p>
                                    <p><strong>Potential reasons for this rating:</strong></p>
                                    <ul>
                                        <li>Moderate violence, including some detail.</li>
                                        <li>Strong language used infrequently.</li>
                                        <li>Moderate threat, horror or disturbing scenes.</li>
                                        <li>Brief sexual references or moderate references to drugs.</li>
                                    </ul>
                                </div>
                            </li>
                            <br>
                            <li>
                                <div>
                                    <h3>15 – Suitable for 15 and over</h3>
                                    <p>No one under 15 may watch a 15-rated film in the cinema, even when accompanied by
                                        an adult.</p>
                                    <p><strong>Potential reasons for this rating:</strong></p>
                                    <ul>
                                        <li>Frequent strong language.</li>
                                        <li>Strong violence, including bloody or realistic scenes.</li>
                                        <li>Strong threat, horror or disturbing content.</li>
                                        <li>Sexual content or references to sexual violence.</li>
                                        <li>Drug use or references to misuse of substances.</li>
                                    </ul>
                                </div>
                            </li>
                            <br>
                            <li>
                                <div>
                                    <h3>18 – Adults only</h3>
                                    <p>No one under 18 may watch an 18-rated film in the cinema.</p>
                                    <p><strong>Potential reasons for this rating:</strong></p>
                                    <ul>
                                        <li>Very strong violence or graphic injury detail.</li>
                                        <li>Strong sexual content or explicit sexual references.</li>
                                        <li>Very strong language.</li>
                                        <li>Detailed scenes of horror or sustained disturbing content.</li>
                                        <li>Drug misuse or other adult themes handled in detail.</li>
                                    </ul>
                                </div>
                            </li>

                        </ul>

                        <p><em>Age ratings are determined by the British Board of Film Classification (BBFC). These
                                examples are general guidance only; a film's rating depends on its overall content and
                                context, and not every film with these elements will receive the same
                                classification.</em></p>
</div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
</body>

</html>