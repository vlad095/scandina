<!DOCTYPE html>
<html lang="nb">
    <head>
        <title>Scandina | Kandidater</title>
        
        <!-- Meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- IE8 and IE9 compatible -->
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
                                <a class="nav-link" href="index_no.php">Hjem</a>
                            </li>

                            <!-- Navbar menu dropdown item -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown1" 
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
                                <a class="nav-link" href="index_no.php#about">Om oss</a>
                            </li>

                            <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show">
                                <a class="nav-link" href="index_no.php#contact">Kontakt</a>
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
        
        <!-- CANDIDATES -->
        <!-- Section 1 -->
        <div class="section" id="section1-candidates">
            <div class="container" id="container-section1-candidates">
                <h2>Tjenester</h2>
                <span class="underline"></span>
                <p class="second-title">
                    Under finner du alle tjenester og fordeler vi tilbyr deg som vår kandidat 
                </p>
            
                <!-- Info-box -->
                <div class="wrapper wrapper-infobox">
                    <div class="infobox infobox-candidates" id="infobox-candidates-1">
                        <img src="images/others/services-can-database.png" alt="Box 1" />
                        <p>
                            Scandia tilbyr gratis CV-registrering for sine kandidater. Dette sikrer 
                            at profilen din blir stadig vurdert for relevante jobbtilbud. 
                        </p>
                    </div>
                    <div class="infobox infobox-candidates" id="infobox-candidates-2">
                        <img src="images/others/services-can-approved.png" alt="Box 2" />
                        <p>
                            Hvis profilen din samsvarer med en av stillingsbeskrivelsene, vil vi 
                            kontakte deg straks for et intervju og forklare prosedyren videre.
                        </p>
                    </div> 
                    <div class="infobox infobox-candidates" id="infobox-candidates-3">
                        <img src="images/others/services-can-job.png" alt="Box 3" />
                        <p>
                            Vi tilbyr både fast ansettelse og sessongarbeid (6 måneder) til våre 
                            kandidater. Tilbudene kan variere avhengig av våre partnernes behov.
                        </p>
                    </div> 
                    <div class="infobox infobox-candidates" id="infobox-candidates-4">
                        <img src="images/others/services-can-progress.png" alt="Box 4" />
                        <p>
                            Scandina tilbyr karriereveiledning og profesjonell rådgivning for 
                            klientene sine. Du kan kontakte oss når som helst for mer informasjon.
                        </p>
                    </div> 
                    <div class="infobox infobox-candidates" id="infobox-candidates-5">
                        <img src="images/others/services-can-care.png" alt="Box 5" />
                        <p>
                            Vi gir deg all nødvendig informasjon under ditt opphold i Skandinavia,
                            slik at du kan føle deg trygg og komfortabel under oppholdet.
                        </p>
                    </div>
                    <div class="infobox infobox-candidates" id="infobox-candidates-6">
                        <img src="images/others/services-can-learning.png" alt="Box 6" />
                        <p>
                            Scandina kan anbefale skoler og onlinekurs for skandinaviske språk, 
                            og på denne måten hjelpe deg å lære språket så raskt som mulig.
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
                        <h4>Registrer din CV</h4>
                        <p>
                            Bruk skjemaet under for å laste opp din CV.
                            De aksepterte filformatene er PDF og DOC/DOCX. 
                        </p>
                        
                        <form action="<?= $_SERVER['PHP_SELF'] . '#section2-candidates'; ?>" method="post" 
                            name="uploadForm" id="upload-form" enctype="multipart/form-data" onsubmit="return validate_all_no()">
                            
                            <?php include('php/upload_no.php') ?>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-title upload-form-title">
                                        <label for="form-name">Fornavn</label>
                                        <input type="text" name="name" class="form-control" id="form-name"
                                            placeholder="Skriv ditt fornavn" onchange="validate_name_no()">
                                        <div class="error-message" id="error-upload-name-no"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-title upload-form-title">
                                        <label for="form-surname">Etternavn</label>
                                        <input type="text" name="surname" class="form-control" id="form-surname"
                                            placeholder="Skriv ditt etternavn" onchange="validate_surname_no()"> 
                                        <div class="error-message" id="error-upload-surname-no"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-title upload-form-title">
                                        <label for="form-email">E-post</label>
                                        <input type="email" name="email" class="form-control" id="form-email"
                                            placeholder="Skriv din e-post adresse" onchange="validate_email_no()">
                                        <div class="error-message" id="error-upload-email-no"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-title upload-form-title">
                                        <label for="form-tlf">Telefonnummer</label>
                                        <input type="text" name="tlf" class="form-control" id="form-tlf"
                                            placeholder="Skriv ditt tlf. nummer" onchange="validate_tlf_no()">
                                        <div class="error-message" id="error-upload-tlf-no"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-title upload-form-title">
                                        <label for="form-file-upload"><i class="fas fa-cloud-upload-alt">
                                            </i> Velg fil du ønsker å laste opp
                                        </label>
                                        <input type="file" name="uploaded_file" class="form-control" 
                                            id="form-file-upload" onchange="validate_file_upload_no()">
                                        <div class="error-message" id="error-upload-file-no"></div>
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
                        <a class="btn btn-info" role="button" href="index_no.php">Hjemmeside</a> 
                    </div>
                    <div class="redirection-btn" id="redirection-btn-right">
                        <a class="btn btn-info" role="button" href="index_no.php#contact">Kontakt oss</a> 
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
                        <h5>Navigasjonsmeny</h5>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="index_no.php">Hjem</a></li>
                            <li class="list-inline-item"><a href="index_no.php#about">Om oss</a></li>
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
                            <li class="list-inline-item"><a href="index_no.php#contact">Kontakt</a></li>
                        </ul>
                    </div>
                
                    <!-- Footer social -->
                    <div class="footer-top-social">
                        <h5>Følg oss</h5>
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
        
        <!-- Bootstrap script files (jQuery, Popper JS and Bootstrap JS) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
        <!-- Linked script files -->
        <script src="scripts/nav_scroll.js"></script>
        <script src="scripts/cookie_notice.js"></script>
        <script src="scripts/form_validation_upload.js"></script>
    </body>
</html>

