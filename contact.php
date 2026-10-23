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

    <title>iCinema | Home</title>
</head>

<body>

    <?php
    include "components/navbar.php";
    include "components/mobile-quickbar.php";
    ?>

    <section class="container my-3 px-4 px-lg-0">
        <div class="row cta cta-flipped align-items-center">

            <div class="col-12 col-lg-4 p-3">
                <h2>How <br> Can <br> We <br> Help?</h2>
            </div>

            <div class="col-12 col-lg-8">
                <p>
                    Need help with your next cinema visit? Whether you have questions about bookings, ticket prices,
                    accessibility, or our cinema facilities, we're here to help. Explore our FAQs for quick answers or
                    get in touch with our team for further assistance. We're here to make your iCinema experience as
                    smooth and enjoyable as possible!
                </p>

                <div class="d-flex justify-content-end gap-3">
                    <a href="#contact" class="button">Contact Us</a>
                    <a href="#faqs" class="button">FAQs</a>
                </div>
            </div>

        </div>
    </section>



    <section id="faqs" class="container px-3">
        <div class="accordion" id="accordionExample">

            <!-- 1. Booking Tickets -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">
                        Booking Tickets
                    </button>
                </h2>
                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body p-4">
                        <p><strong>How do I book tickets?</strong></p>
                        <p>Select a film from our Movies page, choose an available screening time, select your seats and
                            complete the checkout process.</p>

                        <p><strong>Can I book tickets in advance?</strong></p>
                        <p>Yes. You can book tickets for any available future screening listed on our website.</p>

                        <p><strong>Do I need to print my tickets?</strong></p>
                        <p>No printing is necessary if your booking confirmation provides an electronic ticket. Bring
                            your confirmation with you so staff can verify your booking.</p>
                    </div>
                </div>
            </div>

            <!-- 2. Payments -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                        Payments
                    </button>
                </h2>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body p-4">
                        <p><strong>What payment methods can I use?</strong></p>
                        <p>Our online checkout displays the payment methods accepted for your booking before you pay.
                        </p>

                        <p><strong>Is my payment information secure?</strong></p>
                        <p>Always enter your payment details through the official iCinema checkout. Our payment process
                            should handle payment information securely.</p>

                        <p><strong>What should I do if my payment is declined?</strong></p>
                        <p>Check your payment details and available funds. Check whether your booking was confirmed
                            before attempting the payment again.</p>
                    </div>
                </div>
            </div>

            <!-- 3. Cancellations and Refunds -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                        Cancellations and Refunds
                    </button>
                </h2>
                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body p-4">
                        <p><strong>Can I cancel my booking?</strong></p>
                        <p>To request a cancellation, contact our team with your booking reference and screening
                            details. Refund eligibility depends on our ticket terms.</p>

                        <p><strong>Can I change my screening time?</strong></p>
                        <p>If you need to change your screening, contact our team before the original showtime. Changes
                            depend on ticket availability and our booking terms.</p>

                        <p><strong>How long do refunds take?</strong></p>
                        <p>Once a refund has been approved and processed, the time it takes to appear in your account
                            depends on your payment provider.</p>
                    </div>
                </div>
            </div>

            <!-- 4. Showtimes and Films -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                        Showtimes and Films
                    </button>
                </h2>
                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body p-4">
                        <p><strong>How do I find film showtimes?</strong></p>
                        <p>Visit our Movies page, select your chosen film and view the available screening times at
                            iCinema.</p>

                        <p><strong>How can I see upcoming releases?</strong></p>
                        <p>Visit our Coming Soon section to explore upcoming films and find out which releases are
                            scheduled to arrive at iCinema.</p>

                        <p><strong>Why can't I find a particular film?</strong></p>
                        <p>Only films currently scheduled for our cinema appear in our listings. Check Coming Soon for
                            announced future releases.</p>
                    </div>
                </div>
            </div>

            <!-- 5. Age Ratings -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                        Age Ratings
                    </button>
                </h2>
                <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body p-4">
                        <ul>
                            <li>
                                <div>
                                    <h3>U – Universal</h3>
                                    <p>Suitable for all ages. Generally suitable for children aged 4 and over.</p>
                                </div>
                            </li>
                            <br>
                            <li>
                                <div>
                                    <h3>PG – Parental Guidance</h3>
                                    <p>Suitable for general viewing, but some scenes may be unsuitable for young
                                        children. Parents should consider whether the content is appropriate for
                                        their
                                        child.</p>
                                </div>
                            </li>
                            <br>
                            <li>
                                <div>
                                    <h3>12A – Cinema</h3>
                                    <p>Films classified 12A are suitable for children aged 12 and over. Children
                                        younger
                                        than 12 may watch only when accompanied by an adult aged 18 or over.</p>
                                </div>
                            </li>
                            <br>
                            <li>
                                <div>
                                    <h3>15 – Suitable for 15 and over</h3>
                                    <p>No one under 15 may watch a 15-rated film in the cinema, even when
                                        accompanied by
                                        an adult.</p>
                                </div>
                            </li>
                            <br>
                            <li>
                                <div>
                                    <h3>18 – Adults only</h3>
                                    <p>No one under 18 may watch an 18-rated film in the cinema.</p>
                                </div>
                            </li>

                        </ul>

                        <p><em>Age ratings are determined by the British Board of Film Classification (BBFC). These
                                examples are general guidance only; a film's rating depends on its overall content
                                and
                                context, and not every film with these elements will receive the same
                                classification.</em></p>
                    </div>

                </div>
            </div>

            <!-- 6. Seating and Screens -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq6" aria-expanded="false" aria-controls="faq6">
                        Seating and Screens
                    </button>
                </h2>
                <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body p-4">
                        <p><strong>Can I choose my seats?</strong></p>
                        <p>Yes. During online booking, select from the available seats displayed for your chosen
                            screening.</p>

                        <p><strong>Can I sit with my friends or family?</strong></p>
                        <p>Yes. Select adjacent available seats when booking. We recommend booking together to
                            improve
                            your chances of sitting next to one another.</p>

                        <p><strong>How do I find my screen?</strong></p>
                        <p>Your ticket or booking confirmation will show the screening details. If you need help
                            finding
                            your screen, ask a member of our cinema team.</p>
                    </div>
                </div>
            </div>

            <!-- 7. Food and Drink -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq7" aria-expanded="false" aria-controls="faq7">
                        Food and Drink
                    </button>
                </h2>
                <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body p-4">
                        <p><strong>Can I buy food and drinks at iCinema?</strong></p>
                        <p>Visit our refreshments counter before your screening to see the food and drinks
                            available.
                        </p>

                        <p><strong>Can I bring my own snacks?</strong></p>
                        <p>Please check our food and drink policy before bringing outside refreshments into the
                            cinema.
                        </p>

                        <p><strong>How can I check allergen information?</strong></p>
                        <p>Ask a member of staff for allergen information before purchasing food or drinks.</p>
                    </div>
                </div>
            </div>

            <!-- 8. Arriving at the Cinema -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq8" aria-expanded="false" aria-controls="faq8">
                        Arriving at the Cinema
                    </button>
                </h2>
                <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body p-4">
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
                        <p><strong>When should I arrive?</strong></p>
                        <p>We recommend arriving 15–20 minutes before your screening to allow time to enter the
                            cinema,
                            purchase refreshments and find your screen.</p>

                        <p><strong>What happens if I arrive late?</strong></p>
                        <p>Arrive as soon as possible and speak to a member of staff. Admission after a film has
                            started
                            may be restricted.</p>
                    </div>
                </div>
            </div>

            <!-- 9. Accessibility -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq9" aria-expanded="false" aria-controls="faq9">
                        Accessibility
                    </button>
                </h2>
                <div id="faq9" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body p-4">
                        <p><strong>Wheelchair Access</strong></p>
                        <p>Our cinema aims to provide step-free access to entrances and accessible routes to key
                            facilities. Wheelchair spaces and companion seating may be available in selected
                            screens. Contact your chosen cinema before visiting to confirm available facilities.</p>


                        <p><strong>Accessible Screenings</strong></p>
                        <p>We aim to help customers enjoy films in ways that suit their needs. Depending on the
                            screening, accessible screenings may include:</p>
                        <ul>
                            <li><strong>Subtitled screenings:</strong> On-screen dialogue and relevant sounds are
                                displayed as text.</li>
                            <li><strong>Audio-described screenings:</strong> Spoken descriptions explain important
                                visual details for customers who are blind or partially sighted.</li>
                            <li><strong>Relaxed screenings:</strong> Adjusted lighting and sound, with a more
                                flexible environment for customers who may benefit from a relaxed atmosphere.</li>
                        </ul>

                        <p><strong>Hearing Assistance</strong></p>
                        <p>Our cinema offers hearing assistance systems to help customers with hearing loss
                            follow dialogue more clearly. Speak to a member of staff to help </p>

                        <p><strong>Accessible Facilities</strong></p>
                        <p>Accessible toilets, lift access and designated seating can help visitors
                            move around the cinema more comfortably. Assistance from cinema staff may also be
                            available upon request.</p>

                        <p><strong>Assistance Dogs</strong></p>
                        <p>Assistance dogs are permitted in accordance with the cinema's policy and applicable
                            accessibility requirements.</p>
                    </div>
                </div>
            </div>

            <!-- 10. Cinema Facilities -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq10" aria-expanded="false" aria-controls="faq10">
                        Cinema Facilities
                    </button>
                </h2>
                <div id="faq10" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body p-4">
                        <p><strong>Where are the toilets?</strong></p>
                        <p>Toilets are available within the cinema. Ask a member of staff if you need directions.
                        </p>

                        <p><strong>Does iCinema have accessible toilets?</strong></p>
                        <p>Contact our team before visiting to confirm the availability and location of accessible
                            toilets.</p>

                        <p><strong>What should I do if I lose an item?</strong></p>
                        <p>Speak to our staff or contact us with a description of the item and the date of your
                            visit so
                            we can help you enquire about lost property.</p>
                    </div>
                </div>
            </div>

            <!-- 11. Accounts and Membership -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq11" aria-expanded="false" aria-controls="faq11">
                        Accounts and Membership
                    </button>
                </h2>
                <div id="faq11" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body p-4">
                        <p><strong>Do I need an account to book tickets?</strong></p>
                        <p>Follow the instructions on our booking page to see whether you need to sign in or create
                            an
                            account to complete your booking.</p>

                        <p><strong>How do I reset my password?</strong></p>
                        <p>Use the password reset option on the login page and follow the instructions sent to your
                            registered email address.</p>

                        <p><strong>How can I find membership offers?</strong></p>
                        <p>Visit our membership page to find information about available benefits, promotions and
                            membership options.</p>
                    </div>
                </div>
            </div>

            <!-- 12. Technical Support -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq12" aria-expanded="false" aria-controls="faq12">
                        Technical Support
                    </button>
                </h2>
                <div id="faq12" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body p-4">
                        <p><strong>The website isn't working. What should I do?</strong></p>
                        <p>Refresh the page and check your internet connection. If the problem continues, contact
                            our
                            team and describe the issue.</p>

                        <p><strong>My booking confirmation hasn't arrived. What should I do?</strong></p>
                        <p>Check your junk or spam folder first. If the confirmation is still missing, contact us
                            with
                            the email address used for your booking and any available booking details.</p>

                        <p><strong>How do I report a problem?</strong></p>
                        <p>Visit our Contact Us page and explain the problem. Include any relevant error messages so
                            our
                            team can investigate.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="contact" class="container my-3 px-4 px-lg-0 ">
        <div class="row cta cta-white align-items-center">

            <div class="col-12 col-lg-4 p-3">
                <h2>Need <br> Further <br> Assistance?</h2>
            </div>

            <div class="col-12 col-lg-8">
                <p>
                <p><strong>Contact Us</strong></p>
                <p>
                    If you have not found your answer in the FAQs, please get in touch with our team before your visit.
                </p>

                <ul>
                    <li><strong>Telephone:</strong> +44 123456789</li>
                    <li><strong>Email:</strong> admin@iCinema.com </li>
                </ul>
                <p></p>
                <p>
                    or use the form below
                </p>
                </p>

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Contact Form
                            </button>
                        </h2>

                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <form action="#" method="post">
                                    <div class="mb-3"> <input type="email" class="form-control"
                                            id="exampleFormControlInput1" name="email" placeholder="name@example.com"
                                            required>
                                    </div>

                                    <div class="mb-3">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="message"
                                            rows="5" placeholder="Enter your message..." required></textarea>
                                    </div>

                                    <input type="submit" value="Submit" class="button">
                                </form>
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