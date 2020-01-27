<!DOCTYPE html>
<html lang="sr">
    <head>
        <title>Scandina | Kandidati</title>
        
        <!-- Meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- IE8 and IE9 compatible -->
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
    
    <body>
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
                                <a class="nav-link" href="index_sr.php">Naslovna</a>
                            </li>

                            <!-- Navbar menu dropdown item -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown1" 
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
                                <a class="nav-link" href="index_sr.php#about">O nama</a>
                            </li>

                            <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show">
                                <a class="nav-link" href="index_sr.php#contact">Kontakt</a>
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
        
        <!-- CANDIDATES -->
        <!-- Section 1 -->
        <div class="section" id="section1-candidates">
            <div class="container" id="container-section1-candidates">
                <h2>Usluge</h2>
                <span class="underline"></span>
                <p class="second-title">
                    Ispod možete pronaći sve usluge i pogodnosti koje vam nudimo kao našem kandidatu 
                </p>
            
                <!-- Info-box -->
                <div class="wrapper wrapper-infobox">
                    <div class="infobox infobox-candidates" id="infobox-candidates-1">
                        <img src="images/others/services-can-database.png" alt="Box 1" />
                        <p>
                            Nudimo besplatnu CV registraciju za svoje kandidate, tako da se 
                            vaš profil može uzeti u razmatranje za odgovarajuće poslovne ponude.
                        </p>
                    </div>
                    <div class="infobox infobox-candidates" id="infobox-candidates-2">
                        <img src="images/others/services-can-approved.png" alt="Box 2" />
                        <p>
                            Ukoliko vaš profil odgovara navedenom opisu radnog mesta, odmah ćemo vas 
                            kontaktirati i ukazaćemo vam na sledeće korake.
                        </p>
                    </div> 
                    <div class="infobox infobox-candidates" id="infobox-candidates-3">
                        <img src="images/others/services-can-job.png" alt="Box 3" />
                        <p>
                            Svojim klijentima nudimo sezonsko (6 meseci) ili stalno zaposlenje. 
                            Ponude mogu varirati u zavisnosti od potreba naših partnera.
                        </p>
                    </div> 
                    <div class="infobox infobox-candidates" id="infobox-candidates-4">
                        <img src="images/others/services-can-progress.png" alt="Box 4" />
                        <p>
                            Nudimo profesionalnu orijentaciju i savetovanje o planiranju vaše 
                            poslovne karijere. Kontaktirajte nas ukoliko želite više informacija. 
                        </p>
                    </div> 
                    <div class="infobox infobox-candidates" id="infobox-candidates-5">
                        <img src="images/others/services-can-care.png" alt="Box 5" />
                        <p>
                            Mi vam pružamo sve potrebne informacije tokom vašeg boravka u Skandinaviji, 
                            kako biste se osećali sigurno i ugodno u inostranstvu.
                        </p>
                    </div>
                    <div class="infobox infobox-candidates" id="infobox-candidates-6">
                        <img src="images/others/services-can-learning.png" alt="Box 6" />
                        <p>
                            Scandina vam može preporučiti kurseve i škole skandinavskog jezika kako 
                            bi vam pomogli da naučite jezik u što kraćem roku.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End section 1 -->
        
        <!-- Section 2 -->
        <div class="section" id="section2-candidates">
            <div class="container" id="container-section2-candidates">
                
                <!-- File upload form -->
                <div class="wrapper wrapper-upload-form">
                    <div class="file-upload-form">
                        <h4>Registrujte vaš CV</h4>
                        <p>
                            Upotrebite formu ispod kako bi ste uploadovali vaš CV. 
                            Prihvacćeni formati fajlova su PDF i DOC/DOCKS.  
                        </p>
                        
                        <form action="<?= $_SERVER['PHP_SELF'] . '#section2-candidates'; ?>" method="post" 
                            name="uploadForm" id="upload-form" enctype="multipart/form-data" onsubmit="return validate_all_sr()">
                            
                            <?php include('php/upload_sr.php') ?>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-title upload-form-title">
                                        <label for="form-name">Ime</label>
                                        <input type="text" name="name" class="form-control" id="form-name"
                                            placeholder="Unesite vaše ime" onchange="validate_name_sr()">
                                        <div class="error-message" id="error-upload-name-sr"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-title upload-form-title">
                                        <label for="form-surname">Prezime</label>
                                        <input type="text" name="surname" class="form-control" id="form-surname"
                                            placeholder="Unesite vaše prezime" onchange="validate_surname_sr()"> 
                                        <div class="error-message" id="error-upload-surname-sr"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-title upload-form-title">
                                        <label for="form-email">E-mail</label>
                                        <input type="email" name="email" class="form-control" id="form-email"
                                            placeholder="Unesite vašu e-mail adresu" onchange="validate_email_sr()">
                                        <div class="error-message" id="error-upload-email-sr"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-title upload-form-title">
                                        <label for="form-tlf">Broj telefona</label>
                                        <input type="text" name="tlf" class="form-control" id="form-tlf"
                                            placeholder="Unesite vaš broj telefona" onchange="validate_tlf_sr()">
                                        <div class="error-message" id="error-upload-tlf-sr"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-title upload-form-title">
                                        <label for="form-file-upload"><i class="fas fa-cloud-upload-alt">
                                            </i> Izaberite fajl za uploadovanje
                                        </label>
                                        <input type="file" name="uploaded_file" class="form-control" 
                                            id="form-file-upload" onchange="validate_file_upload_sr()">
                                        <div class="error-message" id="error-upload-file-sr"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" name="upload" value="Upload" class="btn btn-success">
                                </div>
                            </div>
                        </form>
                    </div>    
                </div>
            </div>
        </div>
        <!-- End Section 2 -->
        <!-- END CANDIDATES -->
        
        <!-- PAGE REDIRECTION -->
        <div class="section" id="page-redirection">
            <div class="container" id="container-page-redirection">
                <div class="wrapper wrapper-redirection">
                    <div class="redirection-btn" id="redirection-btn-left">
                        <a class="btn btn-info" role="button" href="index_sr.php">Naslovna</a> 
                    </div>
                    <div class="redirection-btn" id="redirection-btn-right">
                        <a class="btn btn-info" role="button" href="index_sr.php#contact">Kontakt</a> 
                    </div>
                </div>     
            </div>
        </div>
        <!-- END PAGE REDIRECTION -->
        
        <!-- FOOTER -->
        <footer class="page-footer">
            <div class="container" id="container-footer">
                <div class="footer-top">
                    <!-- Footer navigation -->
                    <div class="footer-top-nav">
                        <h5>Navigacioni meni</h5>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="index_sr.php">Naslovna</a></li>
                            <li class="list-inline-item"><a href="index_sr.php#about">O nama</a></li>
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
                            <li class="list-inline-item"><a href="index_sr.php#contact">Kontakt</a></li>
                        </ul>
                    </div>
                
                    <!-- Footer social -->
                    <div class="footer-top-social">
                        <h5>Zapratite nas</h5>
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
                        <p>Copyright © 2020 Scandina | Sva prava su zadržana</p>
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
        
        <!-- Bootstrap script files - jQuery, Popper JS and Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
        <!-- My linked script files -->
        <script src="scripts/nav_scroll.js"></script>
        <script src="scripts/cookie_notice.js"></script>
        <script src="scripts/form_validation_upload.js"></script>
    </body>
</html>