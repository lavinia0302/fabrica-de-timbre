<?php

$status = $_GET['status'] ?? '';
?>
<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="utf-8">
    <title>Fabrica de Timbre — Timbre personalizate pentru branduri</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Tipărim timbre personalizate cu finisaje premium: folio, embosare, holograme. Producție rapidă, calitate garantată. Cere ofertă acum!">
    <meta name="keywords"
        content="timbre personalizate, tipografie timbre, folio, embosare, holograme, fabrica de timbre">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="img/Untitled image(56).png">
    <link rel="shortcut icon" type="image/png" href="img/Untitled image(56).png">
    <link rel="apple-touch-icon" href="img/Untitled image(56).png">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        .hero-title {
            font-family: 'Playfair Display', serif !important;
            font-weight: 800;
            line-height: 1.1;
            letter-spacing: .5px;
        }
    </style>
</head>

<body>
    <!-- Spinner -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>

    <!-- Topbar -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height:45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Strada Fabrica de Chibrituri
                        28, București 050183</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>021 335 5350</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>ft@posta-romana.ro</small>
                </div>
            </div>

            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height:45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="https://www.facebook.com/fabricadetimbre.ro/?locale=ro_RO" target="_blank" rel="noopener"
                        aria-label="Facebook">
                        <i class="fab fa-facebook-f fw-normal"></i>
                    </a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="https://www.instagram.com/fabrica_de_timbre/" target="_blank" rel="noopener"
                        aria-label="Instagram">
                        <i class="fab fa-instagram fw-normal"></i>
                    </a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle"
                        href="mailto:ft@posta-romana.ro" aria-label="Trimite email">
                        <i class="fa fa-envelope-open fw-normal"></i>
                    </a>
                </div>

            </div>

        </div>
    </div>

    <!-- Navbar -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="index.html" class="navbar-brand p-0">
                <img src="img/header-site-Posta-Tipografie.png" alt="Fabrica de Timbre" class="brand-logo" />
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item"><a class="nav-link" href="index.html">Acasă</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.html">Despre noi</a></li>
                    <li class="nav-item"><a class="nav-link" href="service.html">Servicii</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog.html">Noutăți</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>

                    <li class="nav-item ms-lg-3">
                        <div class="lang-switch d-flex gap-2 py-2 py-lg-0">
                            <a class="btn btn-sm btn-light text-dark px-2" href="#" onclick="setLang('ro'); return false;" aria-label="Română">RO</a>
<a class="btn btn-sm btn-dark text-white px-2" href="#" onclick="setLang('en'); return false;" aria-label="English">EN</a>

                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Header vizual -->
        <div class="container-fluid hero-std" style="background:
           linear-gradient(rgba(17,24,39,.72), rgba(17,24,39,.72)),
           url('img/304951228_504632761666926_2201528388348371468_n (1).jpg') center/cover no-repeat;">

            <div class="row py-4">
                <div class="col-12 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Contact</h1>
                    <a href="index.html" class="h5 text-white">Acasă</a>
                    <span class="text-white px-2" aria-hidden="true">&#92;</span>
                    <a href="#" class="h5 text-white">Contact</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Căutare full-screen -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Închide"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3"
                            placeholder="Caută..." />
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact: carduri + hartă + formular (VARIANTA PHP: POST -> send_contact.php) -->
    <section class="container-fluid pt-3 pb-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container pt-3 pb-4">

            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 640px;">
                <h5 class="fw-bold text-primary text-uppercase">Hai să vorbim</h5>
                <h1 class="mb-0">Contactează-ne pentru detalii.</h1>
            </div>

            <!-- Mesaje status (opțional) -->
            <?php if ($status === 'ok'): ?>
                <div class="alert alert-success" role="alert">
                    Cererea a fost trimisă. Îți mulțumim!
                </div>
            <?php elseif ($status === 'err'): ?>
                <div class="alert alert-danger" role="alert">
                    Cererea nu a putut fi trimisă momentan. Te rugăm să încerci din nou.
                </div>
            <?php elseif ($status === 'missing'): ?>
                <div class="alert alert-warning" role="alert">
                    Te rugăm să completezi câmpurile obligatorii.
                </div>
            <?php endif; ?>

            <div class="row g-5 align-items-stretch">
                <!-- Stânga: 3 carduri info -->
                <div class="col-lg-5">
                    <div class="mb-4 d-flex align-items-center">
                        <div class="bg-primary text-white d-inline-flex align-items-center justify-content-center rounded me-3"
                            style="width:60px;height:60px;">
                            <i class="fa fa-phone-alt"></i>
                        </div>
                        <div>
                            <div class="text-muted small text-uppercase fw-bold">Telefon</div>
                            <div class="h4 mb-0">021 335 5350</div>
                        </div>
                    </div>

                    <div class="mb-4 d-flex align-items-center">
                        <div class="bg-primary text-white d-inline-flex align-items-center justify-content-center rounded me-3"
                            style="width:60px;height:60px;">
                            <i class="fa fa-envelope-open"></i>
                        </div>
                        <div>
                            <div class="text-muted small text-uppercase fw-bold">E-mail</div>
                            <div class="h4 mb-0">ft@posta-romana.ro</div>
                        </div>
                    </div>

                    <div class="mb-4 d-flex align-items-center">
                        <div class="bg-primary text-white d-inline-flex align-items-center justify-content-center rounded me-3"
                            style="width:60px;height:60px;">
                            <i class="fa fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <div class="text-muted small text-uppercase fw-bold">Adresă</div>
                            <div class="h5 mb-0">Str. Fabrica de Chibrituri 28,<br />București</div>
                        </div>
                    </div>

                    <!-- mic hint de contact -->
                    <div class="bg-light rounded p-4">
                        <h5 class="mb-2">Cereri comerciale</h5>
                        <p class="mb-0 text-muted">
                            Pentru cereri de ofertă / comenzi:
                            <strong>comenzionline.ft@posta-romana.ro</strong>
                        </p>
                    </div>
                </div>

                <!-- Dreapta: hartă -->
                <div class="col-lg-7">
                    <div class="position-relative rounded w-100 h-100 shadow-sm overflow-hidden"
                        style="min-height:420px;">
                        <iframe class="position-absolute top-0 start-0 w-100 h-100" loading="lazy"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2849.518230988353!2d26.088642076575757!3d44.41661260347651!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1fe9fef5b0a25%3A0x8b9c9b7b7a6d57d!2sStrada%20Fabrica%20de%20Chibrituri%2028%2C%20Bucure%C8%99ti%20050183!5e0!3m2!1sro!2sro!4v1700000000000"
                            frameborder="0" style="border:0;" allowfullscreen aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>

            <!-- Formular cerere ofertă (PHP) -->
            <div class="row g-4 mt-4 align-items-stretch">
                <div class="col-lg-5">
                    <div class="bg-light rounded p-4 h-100">
                        <h4 class="mb-2">Trimite o cerere de ofertă</h4>
                        <p class="mb-0 text-muted">
                            Completează formularul și cererea va fi trimisă către
                            <strong>comenzionline.ft@posta-romana.ro</strong>.
                            Include detalii precum tipul produsului, cantitatea, formatul și termenul dorit.
                        </p>
                        <hr>
                        <p class="mb-2"><strong>Email:</strong> comenzionline.ft@posta-romana.ro</p>
                        <p class="mb-0"><strong>Telefon:</strong> 021 335 5350</p>
                    </div>
                </div>
                <?php if (isset($_GET["success"])): ?>
    <div class="alert alert-success">
        Cererea ta a fost trimisă cu succes. Te vom contacta în cel mai scurt timp.
    </div>
<?php endif; ?>


                <div class="col-lg-7">
                    <div class="bg-white rounded shadow-sm p-4 h-100">
                        <!-- IMPORTANT: action -> send_contact.php, method POST -->
                        <form action="send_contact.php" method="POST" novalidate>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label small text-muted">Nume și prenume *</label>
                                    <input class="form-control" name="nume" placeholder="Ex: Andrei Popescu" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small text-muted">Companie (opțional)</label>
                                    <input class="form-control" name="companie" placeholder="Ex: SC Exemplu SRL">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small text-muted">Telefon *</label>
                                    <input class="form-control" name="telefon" placeholder="Ex: 07xx xxx xxx" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small text-muted">Email *</label>
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Ex: nume@email.com" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label small text-muted">Mesaj *</label>
                                    <textarea class="form-control" name="mesaj" rows="5"
                                        placeholder="Descrie cererea: tip produs, cantitate, format, finisaje, termen etc."
                                        required></textarea>
                                </div>

                                <div class="col-12 d-flex gap-2 flex-wrap">
                                    <button type="submit" class="btn btn-primary px-4">
                                        Trimite cererea
                                    </button>

                                  
                                </div>

                         
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Footer Start -->
    <footer class="site-footer container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 ps-0">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 p-4">
                        <a href="index.html" class="navbar-brand p-0">
                            <img src="img/Logo-POSTA-Tipografie.png" alt="Poșta Tipografie"
                                style="max-height:96px;height:auto;filter:brightness(0) invert(1);" />
                        </a>
                        <p class="mt-3 mb-0">Fabrica de Timbre — tipar premium din 1872.</p>
                    </div>
                </div>

                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Date de contact</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">Strada Fabrica de Chibrituri 28, București 050183</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">ft@posta-romana.ro</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">021 335 5350</p>
                            </div>
                            <div class="d-inline-flex align-items-center" style="height:45px;">
                                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                                    href="https://www.facebook.com/fabricadetimbre.ro/?locale=ro_RO" target="_blank"
                                    rel="noopener" aria-label="Facebook">
                                    <i class="fab fa-facebook-f fw-normal"></i>
                                </a>
                                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                                    href="https://www.instagram.com/fabrica_de_timbre/" target="_blank" rel="noopener"
                                    aria-label="Instagram">
                                    <i class="fab fa-instagram fw-normal"></i>
                                </a>
                                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle"
                                    href="mailto:ft@posta-romana.ro" aria-label="Trimite email">
                                    <i class="fa fa-envelope-open fw-normal"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Navigație</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="index.html"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Acasă</a>
                                <a class="text-light mb-2" href="about.html"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Despre noi</a>
                                <a class="text-light mb-2" href="service.html"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Servicii</a>
                                <a class="text-light mb-2" href="blog.html"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Noutăți</a>
                                <a class="text-light" href="contact.php"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Contactează-ne</a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Cele mai căutate</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="index.html"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Acasă</a>
                                <a class="text-light mb-2" href="about.html"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Despre noi</a>
                                <a class="text-light mb-2" href="service.html"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Servicii</a>
                                <a class="text-light mb-2" href="blog.html"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Noutăți</a>
                                <a class="text-light" href="contact.php"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Contactează-ne</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row footer-brands-row pt-2 mt-2 border-top border-white-10">
                <div class="col-12">
                    <div class="footer-brands">
                        <a href="https://imobiliare.posta-romana.ro/" target="_blank" rel="noopener">
                            <img class="footer-brand" src="img/Untitled image(55).png" alt="Poșta Imobiliare">
                        </a>
                        <img class="footer-brand" src="img/Untitled image(56).png" alt="Poșta Tipografie">
                        <img class="footer-brand" src="img/Untitled image(56)(57).png" alt="Oficiul Poștal Universal">
                        <img class="footer-brand" src="img/Untitled image(56)(58).png" alt="Poșta Finance">
                        <img class="footer-brand" src="img/Untitled image(56)(59).png" alt="Poșta Logistics">
                        <img class="footer-brand footer-brand--zor" src="img/Untitled image(51).png"
                            alt="ZOR — Poșta Română">
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="container-fluid text-white" style="background:#061429;">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="d-flex align-items-center justify-content-center" style="height:75px;">
                        <p class="mb-0">
                            &copy; <span id="year"></span> Sucursala Fabrica de Timbre — Compania Națională Poșta Română
                            S.A. Toate drepturile rezervate.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // setează automat anul curent
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>

    <!-- Back to top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <div id="google_translate_element" style="display:none;"></div>
<script>
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({
      pageLanguage: 'ro',
      includedLanguages: 'ro,en',
      autoDisplay: false
    }, 'google_translate_element');
  }

  function setLang(lang) {
    localStorage.setItem('site_lang', lang);

    // cookie folosit de Google Translate
    document.cookie = "googtrans=/ro/" + lang + ";path=/";
    document.cookie = "googtrans=/ro/" + lang + ";path=/;domain=" + location.hostname;

    location.reload();
  }

  // Aplică limba salvată automat la încărcarea paginii
  (function () {
    const lang = localStorage.getItem('site_lang');
    if (lang && lang !== 'ro') {
      document.cookie = "googtrans=/ro/" + lang + ";path=/";
      document.cookie = "googtrans=/ro/" + lang + ";path=/;domain=" + location.hostname;
    }
  })();
</script>

<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>

</html>
