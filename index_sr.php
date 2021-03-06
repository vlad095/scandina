<!DOCTYPE html>
<html lang="sr">
    <head>
        <title>Scandina</title>
        
        <!-- Meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- IE8 and IE9 compatible -->
        <!-- Removes the blue styling from phone numbers for Safari Browser -->
        <meta name="format-detection" content="telephone=no"> 
        <meta name="author" content="Vladimir Maric">
        
        <!-- Bootstrap CSS files -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        
        <!-- Linked CSS files -->
        <link rel="stylesheet" type="text/css" href="styles/main.css">
        <link rel="stylesheet" type="text/css" href="styles/mobile_devices.css">
        
        <!-- Favicon -->
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
                    <a class="navbar-brand" href="index_sr.php">
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
                                <a class="nav-link" href="#home">Naslovna</a>
                            </li>

                            <!-- Navbar menu dropdown item -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" 
                                role="button" data-toggle="dropdown" aria-haspopup="true" 
                                aria-expanded="false">
                                    Usluge
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" 
                                    aria-labelledby="navbarDropdown1">
                                    <a class="dropdown-item" href="employers_sr.html">Poslodavci</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="candidates_sr.php">Kandidati</a>
                                </div>
                            </li>

                            <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show">
                                <a class="nav-link" href="#about">O nama</a>
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
                                    <a class="dropdown-item" href="index_no.php">
                                        <img src="images/lang/icon_no.png" alt="norsk" />Norsk
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
                <h3>Kvalitet je naš glavni prioritet</h3>

                <!-- Landing page button -->
                <div class="wrapper-btn" id="wrapper-btn-landing-page">
                    <a class="btn btn-primary" role="button" href="#about">Saznaj više</a>
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
                <h2>Budite deo pobedničkog tima</h2>
                <span class="underline"></span>
                <p class="second-title"> 
                    Scandina je konsultantska agencija koja stvara profesionalne odnose između 
                    predanih radnika i pouzdanih poslodavaca u nordijskim zemljama. Naša vizija je 
                    da postanemo vodeća kadrovska agencija u Evropi.
                </p>
                
                <!-- Info-box -->
                <div class="wrapper wrapper-infobox">
                    <div class="infobox infobox-section1" id="infobox-section1-left">
                        <img src="images/infobox_left.jpg" alt="section1_image_left" />
                        <h4>Tražite posao?</h4>
                        <!-- Info-box btn -->
                        <div class="wrapper-btn" id="section1-btn-1">
                            <a class="btn btn-outline-primary" role="button" href="candidates_sr.php">
                                Kandidati
                            </a> 
                        </div>
                    </div>
        
                    <div class="infobox infobox-section1" id="infobox-section1-right">
                        <img src="images/infobox_right.jpg" alt="section1_image_right" />
                        <h4>Potrebni su vam radnici?</h4>
                        <!-- Info-box btn -->
                        <div class="wrapper-btn" id="section1-btn-2">
                            <a class="btn btn-outline-primary" role="button" href="employers_sr.html">
                                Poslodavci
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
                            <span class="counter-value-number" data-count="49">0</span> 
                            <span>+</span>
                        </div>
                        <p>Zadovoljnih klijenata</p>
                    </div>
                
                    <div class="counter" id="counter-center">
                        <i class="fab fa-facebook"></i>
                        <div class="counter-value">
                            <span class="counter-value-number" data-count="2378">0</span>
                        </div>
                        <p>Facebook pratilaca</p>
                    </div>
                
                    <div class="counter" id="counter-right">
                        <i class="fas fa-thumbs-up"></i>
                        <div class="counter-value">
                            <span class="counter-value-number" data-count="2296">0</span>
                        </div>
                        <p>Facebook lajkova</p>
                    </div>
                </div> 
            </div>
        </div>
        <!-- End section 2 -->
        
        <!-- Section 3 -->
        <div class="section" id="about">
            <div class="container" id="container-section3">
                <h2>O nama</h2>
                <span class="underline"></span>
                
                <div class="wrapper wrapper-content-section3">
                    <!-- YouTube video -->
                    <div class="wrapper-video">
                        <iframe title="Presentation Video" allowfullscreen
                            src="https://www.youtube.com/embed/BODmo5_Jl80">
                        </iframe>
                    </div>
                    
                    <h4>Istorija</h4>
                    <p> 
                        Naša priča počinje 2016 godine kada Vuk Simić i Nikola Milosavljević, 
                        sa svojim nacionalnim i međunarodnim iskustvom u ugostiteljstvu i 
                        hotelijerstvu, zajedno dolaze na ideju da otvore konsultantsku kompaniju 
                        koja nudi pomoć ugostiteljima i hotelijerima oko zapošljavanja u skandinavskim 
                        zemljama. Nakon 3 godine razvijanja naše ideje i upoznavanja radnog  tržišta, 
                        kao i skandinavskih kultura, 2019 godine otvaramo kompaniju za konsultacije 
                        sa sedištem u Beogradu.
                    </p>
                    
                    <h4>Naš rad</h4>
                    <p> 
                        Ono što nas čini drugačijim od drugih jeste to što svakom klijentu 
                        pružamo maksimalan kvalitet i sigurnost. Mi posedujemo potrebno iskustvo 
                        i sposobnost kako bi našim klijentima pružili usluge najvišeg nivoa. 
                        Scandina se podjednako brine o svojim saradnicima koji nude posao, kao 
                        i o svim kandidatima koji su u potrazi za istim.
                    </p>
                    
                    <h4>Scandina u budućnosti</h4>
                    <p> 
                        Naša vizija je da postanemo vodeća konsultantska kompanija za ugostiteljstvo 
                        i hotelijerstvo u Evropi. Mi u Scandini želimo da kvalitetnim radom i sigurnim 
                        poslovanjem zadovoljimo potrebe naših klijenata. Takođe, cilj nam je da stvorimo 
                        vrednost za naše klijente kroz usluge, partnerstva i znanje koje posedujemo.    
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
                <h2>Kontaktirajte nas</h2>
                <span class="underline"></span>
                <p class="second-title"> 
                    Kontaktirajte nas putem naše digitalne forme ispod, a mi ćemo vam
                    odgovoriti u najbržem mogućem roku
                </p>
                
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 py-5" id="contactForm">
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
                            name="contactForm" id="contact-form" onsubmit="return validate_all_sr()">
                            
                            <?php include('php/contact_sr.php') ?>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-title contact-form-title">
                                        <label for="form-name">Ime</label>
                                        <input type="text" name="name" class="form-control" id="form-name"
                                            placeholder="Unesite vaše ime" onchange="validate_name_sr()">
                                        <div class="error-message" id="error-contact-name-sr"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-title contact-form-title">
                                        <label for="form-surname">Prezime</label>
                                        <input type="text" name="surname" class="form-control" id="form-surname"
                                            placeholder="Unesite vaše prezime" onchange="validate_surname_sr()" > 
                                        <div class="error-message" id="error-contact-surname-sr"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-title contact-form-title">
                                        <label for="form-email">E-mail</label>
                                        <input type="text" name="email" class="form-control" id="form-email"
                                            placeholder="Unesite vašu e-mail adresu" onchange="validate_email_sr()">
                                        <div class="error-message" id="error-contact-email-sr"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-title contact-form-title">
                                        <label for="form-subject">Povod vašeg upita?</label>
                                        <input type="text" name="subject" class="form-control" id="form-subject"
                                            onchange="validate_subject_sr()">
                                        <div class="error-message" id="error-contact-subject-sr"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group contact-form-group">
                                        <label for="form-message">Poruka</label>
                                        <textarea  onchange="validate_message_sr()" placeholder="Unesite vašu poruku ovde..." 
                                            name="message" rows="6" class="form-control" id="form-message"></textarea>
                                        <div class="error-message" id="error-contact-message-sr"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" name="send" value="Pošalji" class="btn btn-success">
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
                        <h5>Navigacioni meni</h5>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#home">Naslovna</a></li>
                            <li class="list-inline-item"><a href="#about">O nama</a></li>
                            <li class="list-inline-item">
                                <a href="employers_sr.html">
                                    Poslodavci
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="candidates_sr.php">
                                    Kandidati
                                </a>
                            </li>
                            <li class="list-inline-item"><a href="#contact">Kontakt</a></li>
                        </ul>
                    </div>
                
                    <!-- Footer social -->
                    <div class="footer-top-social">
                        <h5>Zapratite nas</h5>
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/Scandina.Consulting.Agency/">
                                    <img class="zoom-social" src="images/social/icon_face.png" alt="Facebook" />
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/scandina__/?hl=en">
                                    <img class="zoom-social" src="images/social/icon_insta.png" alt="Instagram" />
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/scandina-consulting-agency">
                                    <img class="zoom-social" src="images/social/icon_linked.png" alt="LinkedIn" />
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
                        <p>Copyright © 2020 Scandina. Sva prava su zadržana.</p>
                    </div>
                    
                    <!-- Footer-lower mobile version -->
                    <div class="footer-lower-mobile">
                        <p>Copyright © 2020 Scandina</p>
                        <p>Sva prava su zadržana</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END FOOTER -->
        
        <!-- COOKIE BANNER -->
        <div class="cookie-banner">
            <div class="container" id="container-cookie-banner">
                <h5>Cenimo vašu privatnost</h5>
                <p>
                    Scandina je posvećena zaštiti i poštovanju vaše privatnosti. Stoga naša web 
                    stranica ne koristi kolačiće za prikupljanje ličnih podataka. Jedini način na koji 
                    prikupljamo vaše podatke je kada nam ih direktno dostavite koristeći naše web 
                    obrasce. Informacije koje nam dajete se čuvaju u našoj bazi podataka i dele se 
                    isključivo sa našim partnerima u procesu konsultovanja. Scandina ne koristi 
                    nijednu analitičku uslugu koja čuva kolačiće na vašem uređaju. Jedini izuzetak 
                    je YouTube koji čuva podatke o svojim posetiocima kada se pusti video.   
                </p> 
            
                <div class="cookie-banner-btn">
                    <a class="btn-basic cookie-banner-close" role="button" href="javascript:void(0);">
                        Razumem
                    </a>
                </div>
            </div>
        </div>
        <!-- END COOKIE BANNER -->
        
        <!-- Bootstrap script files (jQuery, Popper JS and Bootstrap JS) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        
        <!-- Linked script files -->
        <script src="scripts/counter.js"></script>
        <script src="scripts/nav_scroll.js"></script>
        <script src="scripts/cookie_notice.js"></script>
        <script src="scripts/form_validation_contact.js"></script>
    </body>
</html>

