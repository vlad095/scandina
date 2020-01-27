<!DOCTYPE html>
<html lang="nb">
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
        <link rel="icon" type="image/png" href="images/brand/favicon.png">
        
        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/cb7428d12a.js"></script>
        
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Blinker&display=swap" rel="stylesheet">
    </head>
    
    <body data-spy="scroll" data-target="#navbar">
        <!-- HEADER -->
        <header class="page-header">
            <!-- Topbar -->
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
            <!-- End Topbar -->
            
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg" id="navbar"> 
                <div class="container-fluid">

                    <!-- Logo -->
                    <a class="navbar-brand" href="index_no.php">
                        <img class="logo" src="images/brand/logo.png" alt="logo" />
                    </a>

                    <!-- Navbar menu dropdown button -->
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" 
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar top-bar"></span>
                        <span class="icon-bar middle-bar"></span>
                        <span class="icon-bar bottom-bar"></span>				
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto w-100 justify-content-end">
                            <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show">
                                <a class="nav-link" href="#home">Hjem</a>
                            </li>

                            <!-- Navbar menu dropdown item -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" 
                                role="button" data-toggle="dropdown" aria-haspopup="true" 
                                aria-expanded="false">
                                    Tjenester
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" 
                                    aria-labelledby="navbarDropdown1">
                                    <a class="dropdown-item" href="employers_no.html">Arbeidsgivere</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="candidates_no.php">Kandidater</a>
                                </div>
                            </li>

                            <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show">
                                <a class="nav-link" href="#about">Om oss</a>
                            </li>

                            <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show">
                                <a class="nav-link" href="#contact">Kontakt</a>
                            </li>

                            <!-- Navbar menu dropdown item -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" 
                                role="button" data-toggle="dropdown" aria-haspopup="true" 
                                aria-expanded="false">
                                    <i class="fas fa-globe"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" id="lang-menu" aria-labelledby="navbarDropdown2">
                                    <a class="dropdown-item" href="index.php">
                                        <img src="images/lang/icon_en.png" alt="english" />English
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="index_sr.php">
                                        <img src="images/lang/icon_sr.png" alt="srpski" />Srpski
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
        </header>
        <!-- END HEADER -->
        
        <!-- LANDING PAGE -->
        <div class="landing-page" id="home">
            <div class="landing-page-content">
                <h1>Scandina</h1>
                <h3>Kvalitet er vår høyeste prioritet</h3>

                <!-- Landing page button -->
                <div class="wrapper-btn" id="wrapper-btn-landing-page">
                    <a class="btn btn-primary" role="button" href="#about">Finn ut mer</a>  
                </div>
            </div>
        </div>

        <!-- Landing page scroll-down arrow -->
        <div class="go-down-arrow">
            <a href="#section1">
                <img src="images/others/icon_scroll_down.png" alt="scroll-down" />
            </a>
        </div>
        <!-- END LANDING PAGE -->
        
        <!-- MAIN -->
        <!-- Section 1 -->
        <div class="section" id="section1">
            <div class="container" id="container-section1">
                <h2>Bli med på det vinnende laget</h2>
                <span class="underline"></span>
                <p class="second-title"> 
                    Scandina er et konsulentselskap som skaper profesjonelle forhold mellom
                    dedikerte arbeidere og pålitelige arbeidsgivere i hele Norden. Vår 
                    visjon er å bli et av de ledende rekrutteringsbyråene i Europa.
                </p>
                
                <!-- Info-box -->
                <div class="wrapper wrapper-infobox">
                    <div class="infobox infobox-section1" id="infobox-section1-left">
                        <img src="images/infobox_left.jpg" alt="section1_image_left" />
                        <h4>Søker du jobb?</h4>
                        <!-- Info-box btn -->
                        <div class="wrapper-btn" id="section1-btn-1">
                            <a class="btn btn-outline-primary" role="button" href="candidates_no.php">
                                Kandidater
                            </a>       
                        </div>
                    </div>
        
                    <div class="infobox infobox-section1" id="infobox-section1-right">
                        <img src="images/infobox_right.jpg" alt="section1_image_right" />
                        <h4>Behov for ansatte?</h4>
                        <!-- Info-box btn -->
                        <div class="wrapper-btn" id="section1-btn-2">
                            <a class="btn btn-outline-primary" role="button" href="employers_no.html">
                                Arbeidsgivere
                            </a>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
        <!-- End Section 1 -->
    
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
                        <p>Fornøyde klienter</p>
                    </div>
                
                    <div class="counter" id="counter-center">
                        <i class="fab fa-facebook"></i>
                        <div class="counter-value">
                            <span class="counter-value-number" data-count="2018">0</span>
                        </div>
                        <p>Facebook følgere</p>
                    </div>
                
                    <div class="counter" id="counter-right">
                        <i class="fas fa-thumbs-up"></i>
                        <div class="counter-value">
                            <span class="counter-value-number" data-count="1951">0</span>
                        </div>
                        <p>Facebook likerklikk</p>
                    </div>
                </div> 
            </div>
        </div>
        <!-- End Section 2 -->
        
        <!-- Section 3 -->
        <div class="section" id="about">
            <div class="container" id="container-section3">
                <h2>Om oss</h2>
                <span class="underline"></span>
                
                <div class="wrapper wrapper-content-section3">
                    <!-- YouTube video -->
                    <div class="wrapper-video">
                        <iframe title="Presentation Video" allowfullscreen
                            src="https://www.youtube.com/embed/BODmo5_Jl80">
                        </iframe>
                    </div>
                    
                    <h4>Historie</h4>
                    <p> 
                        Vår historie begynner i 2016 da Vuk Simić og Nikola Milosavljević, 
                        som begge har en omfattende nasjonal og internasjonal erfaring innen 
                        gjestfrihet, kommer på ideen å åpne et konsulentselskap som skaper 
                        profesjonelle forhold mellom dedikerte arbeidere og pålitelige 
                        arbeidsgivere i Norden. Etter 3 år med ideutvikling og godt kjennskap 
                        til nordiske kulturer, etablerer vi selskapet i 2019 med 
                        hovedkontor i Beograd, Serbia. 
                    </p>
                    
                    <h4>Vårt arbeid</h4>
                    <p> 
                        Det som gjør Scandina forskjellig fra andre er at vi behandler hver 
                        klient med høy kvalitet og maksimal sikkerhet. Vi har nødvendig erfaring 
                        og kunnskapsevne til å gi våre kunder service på høyeste nivå. Scandina 
                        bryr seg like godt om våre klienter som vi har partnerskap med, samtidig 
                        som vi tar godt vare på alle kandidater som søker jobb via oss.
                    </p>
                    
                    <h4>Scandina i fremtiden</h4>
                    <p> 
                        Vår visjon er å bli det ledende konsulentselskapet for gjestfrihet i Europa. 
                        Scandina vil alltid imøtekomme behovene til alle våre klienter ved å tilby 
                        service av høy kvalitet og en sikker virksomhet. Vi ønsker å tilføre klientene 
                        våre verdi gjennom tjenester, partnerskap og kunnskap som vi besitter.  
                    </p>
                </div>
            </div>
        </div>
        <!-- End Section 3 -->
        
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
                <h2>Kontakt oss</h2>
                <span class="underline"></span>
                <p class="second-title"> 
                    Bruk kontaktskjemaet under for å komme i kontakt med oss, så svarer vi 
                    deg så snart som mulig 
                </p>
                
                <div class="row" id="myForm">
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
                        <form action="<?= $_SERVER['PHP_SELF'] . '#infobox-section5-3'; ?>" method="post" 
                            name="contactForm" id="contact-form" onsubmit="return validate_all_no()">
                            
                            <?php include('php/contact_no.php') ?>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-title contact-form-title">
                                        <label for="form-name">Fornavn</label>
                                        <input type="text" name="name" class="form-control" id="form-name"
                                            placeholder="Skriv ditt fornavn" onchange="validate_name_no()">
                                        <div class="error-message" id="error-contact-name-no"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-title contact-form-title">
                                        <label for="form-surname">Etternavn</label>
                                        <input type="text" name="surname" class="form-control" id="form-surname"
                                            placeholder="Skriv ditt etternavn" onchange="validate_surname_no()" > 
                                        <div class="error-message" id="error-contact-surname-no"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-title contact-form-title">
                                        <label for="form-email">E-post</label>
                                        <input type="text" name="email" class="form-control" id="form-email"
                                            placeholder="Skriv din e-post adresse" onchange="validate_email_no()">
                                        <div class="error-message" id="error-contact-email-no"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-title contact-form-title">
                                        <label for="form-subject">Hva gjelder din henvendelse?</label>
                                        <input type="text" name="subject" class="form-control" id="form-subject"
                                            onchange="validate_subject()_no">
                                        <div class="error-message" id="error-contact-subject-no"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group contact-form-group">
                                        <label for="form-message">Melding</label>
                                        <textarea  onchange="validate_message_no()" placeholder="Skriv din melding her..." 
                                            name="message" rows="6" class="form-control" id="form-message"></textarea>
                                        <div class="error-message" id="error-contact-message-no"></div>
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
        <!-- End Section 5 -->
        <!-- END MAIN -->
        
        <!-- FOOTER -->
        <footer class="page-footer">
            <div class="container" id="container-footer">
                <div class="footer-top">
                    <!-- Footer navigation -->
                    <div class="footer-top-nav">
                        <h5>Navigasjonsmeny</h5>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#home">Hjem</a></li>
                            <li class="list-inline-item"><a href="#about">Om oss</a></li>
                            <li class="list-inline-item">
                                <a href="employers_no.html">
                                    Arbeidsgivere
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="candidates_no.php">
                                    Kandidater
                                </a>
                            </li>
                            <li class="list-inline-item"><a href="#contact">Kontakt</a></li>
                        </ul>
                    </div>
                
                    <!-- Footer social -->
                    <div class="footer-top-social">
                        <h5>Følg oss</h5>
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
                <span class="footer-spearation-line"></span>
                
                <div class="footer-lower">
                    <!-- Footer-lower desktop version -->
                    <div class="footer-lower-desktop">
                        <p>Copyright © 2020 Scandina | Alle rettigheter er forbeholdt</p>
                    </div>
                    
                    <!-- Footer-lower mobile version -->
                    <div class="footer-lower-mobile">
                        <p>Copyright © 2020 Scandina</p>
                        <p>Alle rettigheter er forbeholdt</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END FOOTER -->
        
        <!-- COOKIE BANNER -->
        <div class="cookie-banner">
            <div class="container" id="container-cookie-banner">
                <h5>Vi verdsetter ditt personvern</h5>
                <p>
                    Scandina er forpliktet til å ta godt vare på ditt personvern. Derfor bruker vi 
                    ikke cookies for å samle inn personlig informasjon om deg. Den eneste måten 
                    Scandina samler inn dataene dine på er når du oppgir dem direkte via våre 
                    webskjemaer. Informasjonen du oppgir lagres i databasen og deles kun med våre 
                    partnere i konsultasjonsprosessen. Scandina bruker ikke webanalytiske tjenester 
                    som lagrer cookies på enheten din. Unntaket er YouTube som lagrer informasjonen 
                    om sine besøkende når en video spilles.
                </p> 
            
                <div class="cookie-banner-btn">
                    <a class="btn-basic cookie-banner-close" role="button" href="javascript:void(0);">
                        Jeg forstår
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
        <script src="scripts/form_validation_contact.js"></script>
    </body>
</html>