<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<<<<<<< HEAD
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous">
    </script> <!--jquery component-->

=======
>>>>>>> c17ef9eb5b30b0136bb9e2b11214130403fc29c1
    <link rel="icon" type="image/png" href="images/spotlightLogo.png">
    <title>Spotlight</title>

</head>
<body class="bg-dark">
<!--<h1 class = "retroShadow">SPOTLIGHT</h1>-->
<nav class="navbar navbar-dark bg-dark navbar-expand-lg fixed-top position-sticky"><!-- overall navbar-->
    <div class="container">

        <button class="navbar-toggler" type="button"
                data-toggle="collapse" data-target="#myTogglerNav"
                aria-controls="myTogglerNav"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a href="#about" class="navbar-brand">SPOTLIGHT</a><!-- navbar heading-->

        <a href="#testimonial"><button class="nav-item nav-link btn btn-warning"
                                       data-target="#contactHere"
                                       id="contactUs" >  Check-in</button></a>

        <div class="collapse navbar-collapse" id="myTogglerNav"><!-- navbar collapsing menu-->
            <div class="navbar-nav">
                <a class="nav-item nav-link active"
                   href="#about"
                   data-toggle="collapse"
                   aria-expanded="true"
                   aria-controls="about">ABOUT</a><!-- navlink about-->

                <div class="nav-item nav-link">
                    <a  href="#dayServices"
                        data-target="#"
                        class="collapsed"
                        data-toggle="collapse"
                        aria-expanded="false"
                        aria-controls="dayServices">SEE WHO'S AT THE GYM!</a> <!-- navlink services-->
                </div>

                <div class="nav-item nav-link">
                    <a  href="#testimonial"
                        data-target=""
                        class="collapsed"
                        data-toggle="collapse"
                        aria-expanded="false">CHECK-IN</a> <!--navlink testimonials-->
                </div>

            </div> <!-- navbar nav-->
        </div> <!-- collapse-->
        <h4>It's time to be someone at the gym!</h4>
    </div> <!--nav container -->
</nav> <!-- overall nav -->

<div class="container-sm ">

    <div class="card hidden-md-down text-center rounded-0 bg-warning d-none d-md-block">

        <div class="row"><!--starting row-->
            <div class="col-md-6 ">
                <div class="card-body">
                    <div class="card-title display-2 img-fluid">
                        <img src="images/spotlightLogo.png" alt="logo"><!--image by carousel-->
                    </div>
                </div>
            </div>

            <div id="carouselExampleIndicators" class="carousel slide col-md-6 p-5" data-ride="carousel"><!-- start of carousel-->
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner"> <!-- carousel content-->
                    <div class="carousel-item active">
                        <p><strong>SPOTLIGHT provides you the ability to know
                                who is at the gym giving you the information you need to go to the
                                right gym for your particular workout which best suits your needs for that moment.</strong>
                        </p>

                    </div>

                    <div class="carousel-item">
                        <p><strong>The days of showing up to the gym only to find it way too
                                busy or just full of the wrong crowd are in the past!</strong>
                        </p>

                    </div>

                    <div class="carousel-item">
                        <p><strong> Spotlight was created out of the need and opportunity to create
                                relationships with people who you do have more in common with than you think.
                            </strong>
                        </p>

                    </div>

                    <div class="carousel-item">
                        <p><strong>With the Spotlight app you can know who is at the gym which provides you the
                                ability to select the right gym for you based on your current needs and
                                network at the gym like never before.</strong>
                        </p>


                    </div>

                </div><!-- carousel content end-->
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div><!-- end of carousel-->
        </div><!-- closing row-->
    </div>

    <section class="accordion border-0" id="accordion"> <!-- overall accordion -->

        <div class="card border-bottom"><!-- 1st card begins-->
            <div class="card-header" id="aboutHeading"><!-- card header begins --> <!-- default aria-expanded="true" -->
                <h5 class="mb-0">
                    <a href="#about"
                       data-toggle="collapse"
                       aria-expanded="false"
                       aria-controls="about">WHY CHOOSE SPOTLIGHT?</a>
                </h5>
            </div><!-- card header ends -->

            <!-- default class="collapse show"-->
            <div id="about"
                 class="collapse show"
                 data-parent="#accordion"
                 aria-labelledby="aboutHeading">
                <a id="aboutMe"></a>
                <div class="card-body text-wrap bg-dark border-0"><!-- card body content begins-->

                    <figure class="figure float-right bg-dark"><!--figure starts-->
                        <img class="figure-img img-fluid rounded-circle" src="images/gym.jpg" alt="sample2">

                    </figure><!--figure ends-->
                    <br>
                    <ul>
                        <li><strong>Customize your gym experience.</strong></li>
                        <li><strong>See who's there before you go.</strong></li>
                        <li><strong>No more long wait times for equipment.</strong></li>
                        <li><strong>Sync schedules with friends.</strong></li>
                        <li><strong>Avoid large crowds.</strong></li>
                        <li><strong>Try out new gyms.</strong></li>
                        <li><strong>Meet different people with similar interests.</strong></li>

                    </ul>

                </div><!-- card body content ends -->
            </div><!-- card collapse -->
        </div><!-- 1st card ends-->

        <!-- services -->
        <div class="card border-bottom"><!-- 2nd card begins -->
            <div class="card-header position-sticky" id="servicesHeading"><!-- card header begins -->
                <h5 class="mb-0">
                    <a href="#dayServices"
                       class="collapsed"
                       data-toggle="collapse"
                       aria-expanded="false"
                       aria-controls="dayServices">SEE WHO'S AT THE GYM</a>
                </h5>
            </div><!-- card header ends -->

            <div id="dayServices"
                 class="collapse show"
                 data-parent="#accordion"
                 aria-labelledby="servicesHeading">
                <div class="card-body"><!-- card body content begins-->
                    <h5>Gym Attendance</h5>

                    <p>The following tables show the people who are checked in
                        to gyms in the Auburn area.
                    </p>

                    <div class="card-deck"><!-- double cards starts here -->
                        <div class="card"><!-- card one -->
                            <img class="card-img-top" src="images/gym2.jpg" alt="sample4">
                            <div class="card-body">
                                <h5 class="card-title">Roxy's Fitness for All - 31446 52nd Ave S</h5>
                                <div class="card-text">

                                </div>
                                <p class="card-text"><small class="text-muted">Last updated 10/19/2020</small></p>
                            </div>
                        </div><!-- card one ends here -->

                        <div class="card"><!-- card two starts here -->
                            <img class="card-img-top" src="images/gym3.jpg" alt="sample3">
                            <div class="card-body">
                                <h5 class="card-title">LA Fitness - 1347 Auburn Way N · Auburn North</h5>
                                <br>

                                <p class="card-text"><small class="text-muted">Last updated 10/19/2020</small></p>
                            </div>

                            <img class="card-img-top" src="images/gym4.jpg" alt="sample3">
                            <div class="card-body">
                                <h5 class="card-title">Peak MMA & Fitness LLC - 328 37th St NW suite A</h5>
                                <br>

                                <p class="card-text"><small class="text-muted">Last updated 10/19/2020</small></p>
                            </div>
                        </div>
                    </div><!-- cards ends here -->

                </div><!-- card body content ends-->
            </div><!-- card collapse -->
        </div><!-- 2nd card ends -->

        <!-- check in-->
        <div class="card border-bottom"><!-- 3rd card begins-->
            <div class="card-header" id="testimonialHeading"><!-- card header begins-->
                <h5 class="mb-0">
                    <a href="#testimonial"
                       class="collapsed"
                       data-toggle="collapse"
                       aria-expanded="false">CHECK INTO YOUR GYM</a> <!-- carousel idea-->
                </h5>
            </div><!-- card header ends -->

            <div id="testimonial"
                 class="collapse show"
                 data-parent="#accordion"
                 aria-labelledby="testimonialHeading">
                <div class="card-body" id="secT"><!-- card body content begins-->
                    <div class="container">

                        <!-- Grid row-->
                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-md-12 py-5">
                                <div class="mb-5 flex-center">
                                    <br>

                                    <form id="main2" action="confirmForm.php" method="post">
                                        <a id="contactHere"></a>
                                        <div class="row mt-5">
                                            <div class="col-md-6">
<<<<<<< HEAD
                                                <h3>Check-IN Now!</h3>
                                                <fieldset class="form-group">
=======
                                                <h5>Let us know which gym you are attending.</h5>
                                                <fieldset class="form-group">
                                                    <legend>Check-in</legend>
>>>>>>> c17ef9eb5b30b0136bb9e2b11214130403fc29c1
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control w-50 mx-auto"
                                                               placeholder="First Name"
                                                               id="ffname"
                                                               name="ffname">
                                                        <span class="hidden" id="errffname">&#9888; Please enter your first name.</span>
                                                    </div>

                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control w-50 mx-auto"
                                                               placeholder="Last Name"
                                                               id="flname"
                                                               name="flname">
                                                        <span class="hidden" id="errflname">&#9888; Please enter your last name.</span>
                                                    </div>

                                                    <div class="form-group">
                                                        <input type="number"
                                                               class="form-control w-50 mx-auto"
                                                               placeholder="Age"
                                                               id="age"
                                                               name="age">
<<<<<<< HEAD
                                                        <span class="hidden" id="errAge">&#9888; Please enter age *Must be 13 or older*.</span>
=======
                                                        <span class="hidden" id="errAge">&#9888; Please enter your age.</span>
>>>>>>> c17ef9eb5b30b0136bb9e2b11214130403fc29c1
                                                    </div>

                                                    <!--gender-->
                                                    <div class="form-group">
<<<<<<< HEAD
                                                        <legend>Gender</legend>
                                                        <select class="form-control w-50 mx-auto" id="gender" name="gender">
                                                            <option value="0">-Please select-</option>
                                                            <option value="M">Male</option>
                                                            <option value="F">Female</option>
                                                        </select>
                                                        <span class="hidden" id="errGender">&#9888; Please choose a gender.</span>
                                                    </div>

                                                    <!-- gym selection-->
                                                    <div class="form-group">
                                                        <legend>Select A Gym</legend>
                                                        <select class="form-control w-50 mx-auto" id="gym" name="gym">
                                                            <option value="0">-Please select-</option>
                                                            <option value="gym1">Roxy's Fitness for All</option>
                                                            <option value="gym2">LA Fitness - 1347 Auburn Way N · Auburn North</option>
                                                            <option value="gym3">Peak MMA & Fitness LLC</option>
                                                        </select>
                                                        <span class="hidden" id="errGym">&#9888; Please choose an option.</span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="note">Workout plan today? (optional)</label>
                                                        <textarea class="form-control w-50 mx-auto" id="note" name="note" rows="3"></textarea>
                                                    </div>
=======
                                                        <input type="text"
                                                               class="form-control w-50 mx-auto"
                                                               placeholder="Gender (Male/Female)"
                                                               id="gender"
                                                               name="gender">
                                                        <span class="hidden" id="errGender">&#9888; Please enter your gender.</span>
                                                    </div>

                                                    <!--<div class="form-group">
                                                        <input type="tel"
                                                               class="form-control w-50 mx-auto"
                                                               placeholder="Phone Number"
                                                               id="fphone"
                                                               name="fphone">
                                                        <span class="hidden" id="errfPhone">&#9888; Please Enter a phone number.  Eg: 123-456-7890</span>
                                                    </div>-->

                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control w-50 mx-auto"
                                                               placeholder="EMAIL"
                                                               id="femail"
                                                               name="femail">
                                                        <span class="hidden" id="errfEmail">&#9888; Please Enter a Valid Email.  Eg: you@example.com</span>
                                                    </div>

                                                    <fieldset class="form-group">
                                                        <legend>Select A Gym</legend>
                                                        <select class="form-control w-50 mx-auto" id="gym" name="gym">
                                                            <option value="none">-Please select-</option>
                                                            <option value="gym1">Roxy's Fitness for All</option>
                                                            <option value="gym2">LA Fitness - 1347 Auburn Way N · Auburn North</option>
                                                            <option value="gym3">Peak MMA & Fitness LLC</option>

                                                        </select>
                                                        <span class="hidden" id="errIndustry">&#9888; Please choose an option.</span>
                                                    </fieldset>
                                                    <div class="form-group">
                                                        <label for="note">Please enter you planned workout for today.</label>
                                                        <textarea class="form-control w-50 mx-auto" id="note" name="note" rows="3"></textarea>
                                                    </div>
                                                    <div class="form-group form-check">
                                                        <input type="checkbox" class="form-check-input" id="mailing-list-short" name="mailing-list-short" value="yes" checked>
                                                        <label class="form-check-label" for="mailing-list">Please add me to your mailing list.</label><br>
                                                    </div>
>>>>>>> c17ef9eb5b30b0136bb9e2b11214130403fc29c1

                                                    <button id="btn-subscribe" type="submit" class="btn btn-warning">Check-in</button>
                                                </fieldset>
                                            </div>

                                            <div class="col-md-6">
                                                <br>
                                                <img class="card-img-top" src="images/gym4.jpg" alt="sample4">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <hr>
</div><!-- content container -->

<!-- Footer -->
<footer class="page-footer font-small cyan darken-3">


    <div class="col-md-6 pr-5">
        <!--Linkedin -->
        <a class="li-ic" href="https://www.linkedin.com/">
            <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
        </a>

        <!--Instagram-->
        <a class="ins-ic" href="https://www.instagram.com/">
            <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
        </a>

        <!--email-->
        <a class="ins-ic" href="#">
            <i class="fas fa-envelope-square fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
        </a><br>
    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="#">SPOTLIGHT - It's time to be someone at the gym!</a>
    </div>
    <!-- Copyright -->
    <!--footer template from MDBootstrap.com -->

</footer>
<!-- Footer -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<<<<<<< HEAD
<!--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>-->
=======
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
>>>>>>> c17ef9eb5b30b0136bb9e2b11214130403fc29c1
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/adf6e350ab.js" crossorigin="anonymous"></script>

<<<<<<< HEAD
<script src="script/validation.js"></script>
=======
<script src="scripts/validation.js"></script>
<script src="scripts/shortValidation.js"></script>
>>>>>>> c17ef9eb5b30b0136bb9e2b11214130403fc29c1
</body>
</html>
