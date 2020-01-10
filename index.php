<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Scandina</title>
        
        <!-- Meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- IE8 and IE9 compatible -->
        <!-- Removes the blue styling from phone numbers for Safari Browser -->
        <meta name="format-detection" content="telephone=no"> 
        <meta name="author" content="Vladimir Maric">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        
        <!-- My linked CSS files -->
        <link rel="stylesheet" type="text/css" href="styles/main.css">
        <link rel="stylesheet" type="text/css" href="styles/mobile_devices.css">
        
        <!-- Add favicon -->
        <link rel="icon" type="image/png" href="images/favicon.png">
        
        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/cb7428d12a.js"></script>
        
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Blinker&display=swap" rel="stylesheet">
    </head>
    
    <body data-spy="scroll" data-target="#navbar">
        <!-- TOP BAR -->
        <div class="navbar" id="top-bar">
            <div class="container-fluid">
                <ul class="navbar-nav mr-auto" id="top-bar-left">
                    <li class="nav-item"><i class="far fa-envelope"></i></li>
                    <li class="nav-item">info@scandina.rs</li>
                </ul>
                <ul class="navbar-nav ml-auto" id="top-bar-right">
                    <li class="nav-item">
                        <a href="https://www.facebook.com/Scandina.Consulting.Agency/">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.instagram.com/scandina__/?hl=en">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.linkedin.com/company/scandina-consulting-agency">
                            <i class="fab fa-linkedin"></i>   
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END TOP BAR -->
            
        <!-- HEADER -->
        <nav class="navbar navbar-expand-lg" id="navbar"> 
            <div class="container-fluid">
                
                <!-- Logo -->
                <a class="navbar-brand" href="index.php">
                    <img class="logo" src="images/logo.png" alt="logo" />
                </a>
                
                <!-- Navbar menu dropdown button -->
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" 
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar top-bar"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>				
                </button>
                
                <!-- Navbar menu -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto w-100 justify-content-end">
                        <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show">
                            <a class="nav-link" href="#home">Home</a>
                        </li>
                        
                        <!-- Navbar menu dropdown item -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" 
                            role="button" data-toggle="dropdown" aria-haspopup="true" 
                            aria-expanded="false">
                                Services
                            </a>
                            
                            <div class="dropdown-menu dropdown-menu-right" 
                                aria-labelledby="navbarDropdown1">
                                <a class="dropdown-item" href="employers.html">Employers</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="candidates.php">Candidates</a>
                            </div>
                        </li>
                        
                        <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        
                        <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                        
                        <!-- Navbar menu dropdown item -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" 
                            role="button" data-toggle="dropdown" aria-haspopup="true" 
                            aria-expanded="false">
                                <i class="fas fa-globe"></i>
                            </a>
                            
                            <div class="dropdown-menu dropdown-menu-right" id="lang-menu" aria-labelledby="navbarDropdown2">
                                <a class="dropdown-item" href="index_no.php">
                                    <img src="images/lang/icon_no.png" alt="norsk" />Norsk
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index_sr.php">
                                    <img src="images/lang/icon_sr.png" alt="srpski" />Srpski
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- End navbar menu -->
            </div>
        </nav>
        <!-- END HEADER -->
        
        
        <!-- LANDING PAGE -->
        <div class="landing-page" id="home">
            <div class="landing-page-content">
                <h1>Scandina</h1>
                <h3>Quality is our priority</h3>

                <!-- Landing page button -->
                <div class="wrapper-btn" id="wrapper-btn-landing-page">
                    <a class="btn btn-primary" role="button" href="#about">Find out more</a>    
                </div>
            </div>
        </div>

        <!-- Landing page scroll-down arrow -->
        <div class="go-down-arrow">
            <a href="#section1">
                <img src="images/icon_scroll_down.png" alt="scroll-down" />
            </a>
        </div>
        <!-- END LANDING PAGE -->
        
        <!-- MAIN -->
        <!-- Section 1 -->
        <div class="section" id="section1">
            <div class="container" id="container-section1">
                <h2>Be a part of a winning team</h2>
                <hr class="underline">
                <p class="second-title"> 
                    Scandina is a consulting agency that creates professional relationships 
                    between dedicated workers and trusted employers in the Nordic countries. 
                    Our vision is to become one of the leading recruiting agencies in Europe.
                </p>
                
                <!-- Info-box -->
                <div class="wrapper wrapper-infobox">
                    <div class="infobox infobox-section1" id="infobox-section1-left">
                        <img src="images/infobox_left.jpg" alt="section1_image_left" />
                        <h4>Looking for a job?</h4>
                        <!-- Info-box btn -->
                        <div class="wrapper-btn" id="section1-btn-1">
                            <a class="btn btn-outline-primary" role="button" href="candidates.php">
                                Candidates
                            </a>
                        </div>
                    </div>
        
                    <div class="infobox infobox-section1" id="infobox-section1-right">
                        <img src="images/infobox_right.jpg" alt="section1_image_right" />
                        <h4>Need for employees?</h4>
                        <!-- Info-box btn -->
                        <div class="wrapper-btn" id="section1-btn-2">
                            <a class="btn btn-outline-primary" role="button" href="employers.html">
                                Employers
                            </a>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
        <!-- End section 1 -->
    
        <!-- Section 2 -->
        <div class="section" id="section2">
            <div class="container" id="container-section2">
                <!-- Animated social counter -->
                <div class="wrapper" id="wrapper-counter">
                    <div class="counter" id="counter-left">
                        <i class="fas fa-handshake"></i>
                        <div class="counter-value">
                            <span class="counter-value-number" data-count="100">0</span> 
                            <span>+</span>
                        </div>
                        <p>Satisfied clients</p>
                    </div>
                
                    <div class="counter" id="counter-center">
                        <i class="fab fa-facebook"></i>
                        <div class="counter-value">
                            <span class="counter-value-number" data-count="1963">0</span>
                        </div>
                        <p>Facebook followers</p>
                    </div>
                
                    <div class="counter" id="counter-right">
                        <i class="fas fa-thumbs-up"></i>
                        <div class="counter-value">
                            <span class="counter-value-number" data-count="1899">0</span>
                        </div>
                        <p>Facebook page likes</p>
                    </div>
                </div> 
            </div>
        </div>
        <!-- End section 2 -->
        
        <!-- Section 3 -->
        <div class="section" id="about">
            <div class="container" id="container-section3">
                <h2>About Us</h2>
                <hr class="underline">
                
                <div class="wrapper wrapper-content-section3">
                    <!-- YouTube video -->
                    <div class="wrapper-video">
                        <iframe title="Presentation Video" allowfullscreen
                            src="https://www.youtube.com/embed/BODmo5_Jl80">
                        </iframe>
                    </div>
                    
                    <h4>History</h4>
                    <p> 
                        Our story begins in 2016 when Vuk Simić and Nikola Milosavljević, who 
                        both have an extensive national and international experience within
                        hospitality, came up with an idea of opening a consulting agency that 
                        creates professional relationships between dedicated workers and trusted 
                        employers in the Nordic countries. After 3 years of developing our idea 
                        and getting well known with the Nordic cultures, we have established the 
                        agency in 2019, based in Belgrade, Serbia. 
                    </p>
                    
                    <h4>Our Work</h4>
                    <p> 
                        What makes us different from others is that we provide each client with 
                        maximum quality and security. We have the necessary experience and ability 
                        to provide our clients with the highest level of service. Scandina equally 
                        cares about our clients that we have a partnership with, as well as for all 
                        candidates who are looking for a job. 
                    </p>
                    
                    <h4>Scandina in Future</h4>
                    <p> 
                        Our vision is to become the leading consulting agency for hospitality in 
                        Europe. Scandina will always meet the needs of all our clients by 
                        providing high quality service and safe business. We want to create value 
                        for our clients through services, partnerships and knowledge that we possess.
                    </p>
                </div>
            </div>
        </div>
        <!-- End section 3 -->
        
        <!-- Section 4 -->
        <div class="section" id="section4">
            <!-- Embedded google map -->
            <div class="wrapper-map">
                <iframe id="canvas-map" title="Scandina Location"
                    src="https://maps.google.com/maps?q=mosorska%2013%20beograd&t=&z=13&ie=UTF8&iwloc=&output=embed">   
                </iframe>
            </div>  
        </div>
        <!-- End section 4 -->
        
        <!-- Section 5 -->
        <div class="section" id="contact">
            <div class="container" id="container-section5">
                <h2>Contact Us</h2>
                <hr class="underline">
                <p class="second-title"> 
                    Use the contact form below to get in touch with us and we will get back 
                    to you as soon as possible 
                </p>
                
                <div class="row" id="contactForm">
                    <div class="col-xl-8 offset-xl-2 py-5">
                        <!-- Contact info -->
                        <div class="row" id="contact-info">
                            <div class="col-md-4 infobox-section5" id="infobox-section5-1">
                                <i class="far fa-envelope"></i>
                                <p>info@scandina.rs</p>
                            </div>
                            <div class="col-md-4 infobox-section5" id="infobox-section5-2">
                                <i class="fas fa-phone"></i>
                                <p>+381 11 2476 581</p>
                                <p>+381 65 6355 875</p>
                                <p>+47 459 10 991</p>
                            </div>
                            <div class="col-md-4 infobox-section5" id="infobox-section5-3">
                                <i class="fas fa-map-marker-alt"></i>
                                <p>Mosorska 13</p>
                                <p>11000 Belgrade</p>
                            </div>
                        </div>
                        
                        <!-- Contact form -->
                        <form action="<?= $_SERVER['PHP_SELF'] . '?#infobox-section5-3'; ?>" method="post" name="contactForm" 
                            id="contact-form" onsubmit="return validate_all_en()">
                            
                            <?php include('php/contact.php') ?>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-title contact-form-title">
                                        <label for="form-name">First name</label>
                                        <input type="text" name="name" class="form-control" id="form-name"
                                            placeholder="Enter your first name" onchange="validate_name_en()">
                                        <div class="error error-name" id="error-name-en"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-title contact-form-title">
                                        <label for="form-surname">Last name</label>
                                        <input type="text" name="surname" class="form-control" id="form-surname"
                                            placeholder="Enter your last name" onchange="validate_surname_en()" > 
                                        <div class="error error-surname" id="error-surname-en"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-title contact-form-title">
                                        <label for="form-email">E-mail</label>
                                        <input type="text" name="email" class="form-control" id="form-email"
                                            placeholder="Enter your e-mail address" onchange="validate_email_en()">
                                        <div class="error error-email" id="error-email-en"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-title contact-form-title">
                                        <label for="form-subject">What concerns your inquiry?</label>
                                        <input type="text" name="subject" class="form-control" id="form-subject"
                                            onchange="validate_subject_en()">
                                        <div class="error error-subject" id="error-subject-en"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group contact-form-group">
                                        <label for="form-message">Message</label>
                                        <textarea  onchange="validate_message_en()" placeholder="Write your message here..." 
                                            name="message" rows="6" class="form-control" id="form-message"></textarea>   
                                        <div class="error error-message" id="error-message-en"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" name="send" value="Send" class="btn btn-success">
                                </div>
                            </div>
                        </form>
                    </div>    
                </div>
            </div>
        </div>
        <!-- End section 5 -->
        <!-- END MAIN -->
        
        <!-- FOOTER -->
        <footer class="page-footer">
            <div class="container" id="container-footer">
                <div class="footer-top">
                    <!-- Footer navigation -->
                    <div class="footer-top-nav">
                        <h5>Navigation meny</h5>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#home">Home</a></li>
                            <li class="list-inline-item"><a href="#about">About</a></li>
                            <li class="list-inline-item">
                                <a href="employers.html">
                                    Employers
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="candidates.php">
                                    Candidates
                                </a>
                            </li>
                            <li class="list-inline-item"><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                
                    <!-- Footer social -->
                    <div class="footer-top-social">
                        <h5>Follow us</h5>
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/Scandina.Consulting.Agency/">
                                    <img class="zoom" src="images/social/icon_face.png" alt="Facebook" />
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/scandina__/?hl=en">
                                    <img class="zoom" src="images/social/icon_insta.png" alt="Instagram" />
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/scandina-consulting-agency">
                                    <img class="zoom" src="images/social/icon_linked.png" alt="LinkedIn" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Horizontal separation line -->
                <hr class="footer-spearation-line">
                
                <div class="footer-lower">
                    <!-- Footer-lower desktop version -->
                    <div class="footer-lower-desktop">
                        <p>Copyright © 2020 Scandina | All rights reserved</p>
                    </div>
                    
                    <!-- Footer-lower mobile version -->
                    <div class="footer-lower-mobile">
                        <p>Copyright © 2020 Scandina</p>
                        <p>All rights reserved</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END FOOTER -->
        
        <!-- COOKIE BANNER -->
        <div class="cookie-banner">
            <div class="container" id="container-cookie-banner">
                <h5>We value your privacy</h5>
                <p>
                    Scandina is committed to protecting and respecting your privacy. Therefore, our 
                    website does not use cookies to collect your personal data. The only way we collect 
                    your data is when you provide it directly using our website forms. The information 
                    you provide is stored in our database and is only shared with our partners in the 
                    consulting process. Scandina is not using any web analytic services that stores 
                    cookies on your device. The only exception is YouTube which stores the information 
                    about its visitors when a video is played.   
                </p> 
            
                <div class="cookie-banner-btn">
                    <a class="btn-basic cookie-banner-close" role="button" href="javascript:void(0);"
                       id="cookie-accept">
                        Understood
                    </a>
                </div>
            </div>
        </div>
        <!-- END COOKIE BANNER -->
        
        <!-- Bootstrap script files - jQuery, Popper JS and Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        
        <!-- My linked script files -->
        <script src="scripts/counter.js"></script>
        <script src="scripts/nav_scroll.js"></script>
        <script src="scripts/cookie_notice.js"></script>
        <script src="scripts/contact_form_validation.js"></script>
    </body>
</html>