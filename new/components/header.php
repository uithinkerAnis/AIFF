<!DOCTYPE html>
<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="shell-type" content="web_standard" />
    <title>AIFF – Ajanta–Ellora International Film Festival</title>

    <!-- Google Fonts (unchanged) -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,600&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;600;700&amp;family=Hind:wght@400;500;600&amp;display=swap"
        rel="stylesheet">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- GSAP 3 & Lenis Smooth Scroll -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lenis@1.1.18/dist/lenis.min.js"></script>
    <link rel="stylesheet" href="styles.css">

</head>

<body class="bg-background text-on-surface antialiased">

    <!-- PRELOADER OVERLAY -->
    <div class="hero-preloader" id="preloader">
        <div class="text-center px-4">
            <div class="font-label-sm text-outline mb-3" style="letter-spacing: 0.3em;">AJANTA–ELLORA INTERNATIONAL FILM
                FESTIVAL</div>
            <div class="preloader-counter" id="preloader-num">00</div>
            <div class="preloader-line" id="preloader-bar"></div>
        </div>
    </div>

    <!-- CUSTOM MOUSE FOLLOWER -->
    <div id="custom-cursor">
        <div class="cursor-dot" id="cursor-dot"></div>
        <div class="cursor-ring" id="cursor-ring">
            <span class="cursor-label" id="cursor-label">EXPLORE</span>
        </div>
    </div>

    <!-- HEADER -->
    <header class="fixed-top header-blur" style="height: 6rem; z-index: 1050; transition: all 0.3s ease;">
        <div class="container-xxl h-100 d-flex align-items-center justify-content-between px-4 px-lg-5">
            <div class="d-flex align-items-center gap-3 flex-shrink-0">
                <img alt="AIFF Festival Monogram Emblem" style="height: 5.5rem; width: auto; transition: all 0.3s ease;"
                    src="im/logo.png" />
                <!-- <div class="d-flex flex-column">
          <span class="font-headline font-headline-sm text-on-surface lh-1">AIFF</span>
          <span class="font-label-sm text-primary lh-1 mt-1">Ajanta–Ellora</span>
        </div> -->
            </div>

            <nav class="d-none d-xl-flex align-items-center gap-4">
                <a class="nav-link-custom active text-primary fw-semibold" href="#">Home</a>

                <!-- ABOUT DROPDOWN -->
                <div class="nav-item-dropdown">
                    <a class="nav-link-custom d-flex align-items-center gap-1 text-decoration-none" href="#about">
                        <span>About</span>
                        <span class="material-symbols-outlined dropdown-arrow" style="font-size: 16px;">expand_more</span>
                    </a>
                    <div class="nav-dropdown-menu">
                        <a class="dropdown-item-custom" href="#about-aiff">
                            <span class="dropdown-item-icon"><span class="material-symbols-outlined">
                                    arrow_forward
                                </span></span>
                            <div>
                                <span class="dropdown-item-title">About AIFF</span>
                                <span class="dropdown-item-sub">Festival history &amp; vision</span>
                            </div>
                        </a>
                        <a class="dropdown-item-custom" href="#about-committee">
                            <span class="dropdown-item-icon"><span class="material-symbols-outlined">
                                    arrow_forward
                                </span></span>
                            <div>
                                <span class="dropdown-item-title">About Committee</span>
                                <span class="dropdown-item-sub">Board &amp; organizing team</span>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- 12th DROPDOWN -->
                <div class="nav-item-dropdown">
                    <a class="nav-link-custom d-flex align-items-center gap-1 text-decoration-none" href="#about">
                        <span>12th AIFF</span>
                        <span class="material-symbols-outlined dropdown-arrow" style="font-size: 16px;">expand_more</span>
                    </a>
                    <div class="nav-dropdown-menu">
                        <a class="dropdown-item-custom" href="#about-aiff">
                            <span class="dropdown-item-icon"><span class="material-symbols-outlined">
                                    arrow_forward
                                </span></span>
                            <div>
                                <span class="dropdown-item-title">12th AIFF</span>
                                <span class="dropdown-item-sub">Festival history &amp; vision</span>
                            </div>
                        </a>
                        <a class="dropdown-item-custom" href="#about-committee">
                            <span class="dropdown-item-icon"><span class="material-symbols-outlined">
                                    arrow_forward
                                </span></span>
                            <div>
                                <span class="dropdown-item-title">About Committee</span>
                                <span class="dropdown-item-sub">Board &amp; organizing team</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="nav-item-dropdown">
                    <a class="nav-link-custom d-flex align-items-center gap-1 text-decoration-none" href="#about">
                        <span>Archive</span>
                        <span class="material-symbols-outlined dropdown-arrow" style="font-size: 16px;">expand_more</span>
                    </a>
                    <div class="nav-dropdown-menu">
                        <a class="dropdown-item-custom" href="#about-aiff">
                            <span class="dropdown-item-icon"><span class="material-symbols-outlined">
                                    arrow_forward
                                </span></span>
                            <div>
                                <span class="dropdown-item-title">11th AIFF</span>
                                <span class="dropdown-item-sub">Festival history &amp; vision</span>
                            </div>
                        </a>
                        <a class="dropdown-item-custom" href="#about-committee">
                            <span class="dropdown-item-icon"><span class="material-symbols-outlined">
                                    arrow_forward
                                </span></span>
                            <div>
                                <span class="dropdown-item-title">10th AIFF</span>
                                <span class="dropdown-item-sub">Festival history &amp; vision</span>
                            </div>
                        </a>
                    </div>
                </div>
                <a class="nav-link-custom text-decoration-none" href="#">Media</a>
                <a class="nav-link-custom text-decoration-none" href="#">Contact</a>
            </nav>

            <div class="d-flex align-items-center gap-3 flex-shrink-0">
                <a class="btn btn-register px-4 py-2" href="#">Register →</a>
                <!-- <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center"
          style="width: 2rem; height: 2rem;">
          <span class="material-symbols-outlined text-on-primary" style="font-size: 18px;">person</span>
        </div> -->
            </div>
        </div>
    </header>