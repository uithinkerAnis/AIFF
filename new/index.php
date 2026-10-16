<?php include "components/header.php" ?>

<main class="w-100 pt-5 bg-background min-vh-100">
  <div class="d-flex flex-column w-100">

    <!-- SECTION 01: HERO -->
    <section
      class="position-relative hero-section d-flex flex-column justify-content-between overflow-hidden bg-surface-container-lowest">
      <div class="position-absolute top-0 start-0 w-100 h-100" style="z-index: 0;">
        <img class="w-100 h-100 object-fit-cover hero-img"
          data-alt="Dark dramatic interior of ancient Ellora stone temple..." src="im/hero.png" />
        <!-- <div class="position-absolute top-0 start-0 w-100 h-100"
            style="background: linear-gradient(to top, var(--background), rgba(19,19,19,0.6), rgba(19,19,19,0.9));">
          </div>
          <div class="position-absolute top-0 start-0 w-100 h-100"
            style="background: radial-gradient(ellipse at top right, rgba(198,164,106,0.18), transparent 65%);"></div>
          <div class="position-absolute bottom-0 start-0 w-100"
            style="height: 10rem; background: linear-gradient(to top, var(--background), transparent);"></div> -->
      </div>
      <div class="film-border-down"></div>
      <div
        class="position-relative container-xxl px-4 px-lg-5 pt-5 pt-md-5 d-flex flex-wrap align-items-center justify-content-between gap-3"
        style="z-index: 10; padding-top: 4rem !important;">
        <!-- <div class="d-inline-flex align-items-center gap-2 px-3 py-1 selection-badge">
            <span class="rounded-circle bg-primary animate-pulse" style="width: 0.5rem; height: 0.5rem;"></span>
            <span class="font-label-sm text-primary">11TH EDITION · OFFICIAL SELECTION</span>
          </div> -->
      </div>

      <div class="position-relative container-xxl px-4 px-lg-5 py-5" style="z-index: 10;">
        <div style="max-width: 56rem;">
          <p class="font-label-md text-primary mb-3">International Film Festival</p>
          <h1 class="font-display font-display-xl text-on-surface lh-1 mb-4 hero-title">
            <span class="reveal-text-wrap"><span class="reveal-text-child">AJANTA–ELLORA</span></span><br />
            <span class="reveal-text-wrap"><span class="reveal-text-child text-primary fw-normal">CINEMATIC
                MONOLITH</span></span>
          </h1>
          <div class="d-flex flex-wrap align-items-center gap-3 gap-md-4 font-label-md text-on-surface-variant mb-5">
            <div class="d-flex align-items-center gap-2">
              <span class="rounded-circle bg-secondary-container" style="width: 0.5rem; height: 0.5rem;"></span>
              <span class="text-on-surface fw-semibold text-secondary">20 — 24 JANUARY 2027</span>
            </div>
            <span class="text-outline d-none d-sm-inline">•</span>
            <div class="d-flex align-items-center gap-2">
              <span class="material-symbols-outlined text-primary" style="font-size: 18px;">pin_drop</span>
              <span class="text-primary">CHHATRAPATI SAMBHAJINAGAR • MAHARASHTRA, INDIA</span>
            </div>
            <span class="text-outline d-none d-sm-inline">•</span>
            <div class="text-primary-container font-monospace">112 FILMS • 6 THEATRES</div>
          </div>
          <div class="d-flex flex-wrap align-items-center gap-3">
            <a class="btn btn-primary-custom px-4 py-3" href="#programme">EXPLORE FESTIVAL →</a>
            <a class="btn btn-secondary-custom px-4 py-3" href="#delegates">REGISTER DELEGATE</a>
            <!-- <div class="d-none d-lg-flex align-items-center gap-2 ps-4 text-on-surface-variant font-label-sm">
                <span class="material-symbols-outlined text-primary" style="font-size: 20px;">videocam</span>
                <span>Accreditation open for Press &amp; Auteurs</span>
              </div> -->
          </div>
        </div>
      </div>

      <div
        class="position-relative container-xxl px-4 px-lg-5 pb-4 d-flex align-items-center justify-content-between text-outline font-label-sm"
        style="z-index: 10;">
        <div class="d-flex invisible align-items-center gap-3">
          <span>EST. 2014</span>
          <span style="width: 2rem; height: 1px; background: var(--outline-variant);"></span>
          <span class="text-on-surface-variant">UNESCO WORLD HERITAGE REGION</span>
        </div>
        <a class="d-flex align-items-center gap-2 text-outline text-decoration-none hover-primary"
          href="#festival-intro">
          <span style="letter-spacing: 0.2em;">SCROLL TO EXPLORE</span>
          <span class="material-symbols-outlined animate-bounce" style="font-size: 16px;">arrow_downward</span>
        </a>
      </div>
    </section>

    <!-- SECTION 02: CINEMA WITHOUT BORDERS (AURANGABAD HERITAGE EDITION) -->
    <section class="position-relative py-5 section-aurangabad-heritage overflow-hidden" id="festival-intro"
      style="padding-top: 7rem; padding-bottom: 7rem;">

      <!-- VERTICAL LEFT PAITHANI BORDER IMAGE -->
      <div class="paithani-border-left" title="Paithani Border Weave"></div>

      <!-- BACKGROUND ILLUSTRATION ARTWORK LAYER -->
      <div class="aurangabad-bg-art"></div>

      <!-- HOVERING FLOATING HERITAGE CRAFT BADGES -->
      <!-- <div class="heritage-float-badge animate-float-1 d-none d-lg-flex" style="top: 8%; right: 6%;"
          title="Paithani Silk & Peacock Motif">
          <div class="badge-icon-box">🦚</div>
          <div>
            <span class="badge-title">Paithani Silk</span>
            <span class="badge-sub">Zari Peacocks &amp; Lotus Art</span>
          </div>
        </div>

        <div class="heritage-float-badge animate-float-2 d-none d-lg-flex" style="top: 48%; right: 42%;"
          title="Himroo Weave Brocade">
          <div class="badge-icon-box">🧵</div>
          <div>
            <span class="badge-title">Himroo Brocade</span>
            <span class="badge-sub">Royal 14th Cent. Weave</span>
          </div>
        </div>

        <div class="heritage-float-badge animate-float-3 d-none d-xl-flex" style="bottom: 12%; left: 8%;"
          title="Monolithic Kailasa Ellora">
          <div class="badge-icon-box">🏛️</div>
          <div>
            <span class="badge-title">Kailasa Ellora</span>
            <span class="badge-sub">Monolithic Basalt Marvel</span>
          </div>
        </div>

        <div class="heritage-float-badge animate-float-4 d-none d-lg-flex" style="bottom: 15%; right: 8%;"
          title="Ajanta Cave Murals">
          <div class="badge-icon-box">🪷</div>
          <div>
            <span class="badge-title">Ajanta Murals</span>
            <span class="badge-sub">2000-Yr Fresco Lineage</span>
          </div>
        </div> -->

      <div class="container-xxl px-4 px-lg-5 section-aurangabad-container position-relative z-3">
        <div class="row g-5 align-items-center">

          <!-- LEFT COLUMN: HERITAGE & CINEMA CONTENT -->
          <div class="col-lg-7">
            <div class="d-flex align-items-center gap-2 mb-3">
              <span class="font-label-sm poster-teal-text fw-bold">THE FESTIVAL • CHHATRAPATI SAMBHAJI NAGAR
                (AURANGABAD)</span>
              <div style="height: 2px; width: 3.5rem; background: linear-gradient(90deg, #D81B60, #D4AF37);"></div>
            </div>

            <h2 class="font-headline font-headline-lg poster-navy-dark lh-sm mb-3">
              Ajanta Ellora International <br />
              <span class="fst-italic font-display poster-heading-magenta fw-bold">Film Festival</span>
            </h2>

            <div class="paithani-zari-divider mb-4" style="width: 140px;"></div>

            <p class="font-body-lg text-on-surface-variant mb-4"
              style="color: #2D3A50 !important; font-size: 1.15rem; line-height: 1.7;">
              he festival aims to showcase the best of film produced recently and in the past, in India and other
              parts of the world, to the city of Chhatrapati Sambhajinagar and its film buffs. This festival is a
              platform for aspiring filmmakers, technicians, artists and young film enthusiasts to encourage them to
              learn and understand artistic as well as technical aspects of cinema. This festival also aims to be a
              medium to project Chhatrapati Sambhajinagar (Previously known as Aurangabad) and Marathwada
              internationally as the city and region for many opportunities of film production hub, cultural centre in
              state of Maharashtra.
            </p>

            <!-- HERITAGE CRAFT CARDS -->
            <div class="row g-4 pt-2">
              <div class="col-md-6">
                <div class="aurangabad-craft-card p-4 h-100 position-relative overflow-hidden">
                  <div class="d-flex align-items-center gap-2 mb-2">
                    <span class="material-symbols-outlined text-primary"
                      style="color: #D81B60 !important;">auto_awesome</span>
                    <span class="font-label-sm poster-heading-magenta d-block">CINEMA & CULTURAL EXCHANGE</span>
                  </div>
                  <p class="font-body-sm text-on-surface-variant mb-0" style="color: #45536C !important;">
                    AIFF brings acclaimed films from India and around the world to Chhatrapati Sambhajinagar, creating
                    a space where filmmakers, artists, technicians and film lovers come together to share ideas and
                    explore the craft of cinema.
                  </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="aurangabad-craft-card p-4 h-100 position-relative overflow-hidden">
                  <div class="d-flex align-items-center gap-2 mb-2">
                    <span class="material-symbols-outlined text-tertiary"
                      style="color: #00897B !important;">palette</span>
                    <span class="font-label-sm poster-teal-text d-block">MARATHWADA'S GLOBAL STAGE</span>
                  </div>
                  <p class="font-body-sm text-on-surface-variant mb-0" style="color: #45536C !important;">
                    Rooted in the cultural heritage of Marathwada, AIFF aims to establish Chhatrapati Sambhajinagar as
                    a global cultural centre and film production hub while showcasing contemporary Marathi cinema to
                    audiences across the world.
                  </p>
                </div>
              </div>
            </div>

            <!-- KEY STATS SLATE -->
            <div class="d-flex align-items-center gap-4 pt-4 mt-3">
              <div>
                <div class="font-headline font-headline-md poster-navy-dark fw-bold">12th</div>
                <div class="font-label-sm poster-teal-text">EDITION OF AIFF</div>
              </div>
              <div style="width: 2px; height: 2.8rem; background: linear-gradient(180deg, #D81B60, #D4AF37);"></div>
              <div>
                <div class="font-headline font-headline-md poster-navy-dark fw-bold">2014</div>
                <div class="font-label-sm poster-teal-text">FESTIVAL ESTABLISHED</div>
              </div>
              <div style="width: 2px; height: 2.8rem; background: linear-gradient(180deg, #D81B60, #D4AF37);"></div>
              <div>
                <div class="font-headline font-headline-md poster-heading-magenta fw-bold">1000's+</div>
                <div class="font-label-sm poster-heading-magenta">FILM LOVERS ATTEND</div>
              </div>
            </div>
          </div>

          <!-- RIGHT COLUMN: ILLUSTRATION ARTWORK DISPLAY & HOVER FRAME -->
          <div class="col-lg-5 position-relative">
            <div class="art-illustration-frame shadow-lg">
              <div class="position-relative overflow-hidden border-0" style="aspect-ratio: 4/5; border-radius: 14px;">
                <img class="w-100 h-100 object-fit-cover"
                  style="filter: saturate(1.1) brightness(0.98); transition: transform 0.8s ease, filter 0.8s ease;"
                  onmouseover="this.style.transform='scale(1.05)'; this.style.filter='saturate(1.25) brightness(1.02)'"
                  onmouseout="this.style.transform='scale(1)'; this.style.filter='saturate(1.1) brightness(0.98)'"
                  data-alt="Aurangabad Art &amp; Heritage Film Illustration" src="im/about.jpg" />

                <div class="position-absolute bottom-0 start-0 end-0 p-4"
                  style="background: linear-gradient(to top, rgba(14,28,54,0.92) 0%, rgba(14,28,54,0.6) 60%, transparent 100%);">
                  <span class="font-label-sm px-3 py-1 d-inline-block mb-2 text-white shadow-sm"
                    style="background: linear-gradient(90deg, #D81B60, #00897B); border-radius: 20px;">
                    🪷 OFFICIAL HERITAGE SELECTION
                  </span>
                  <!-- <p class="font-headline-sm text-white mb-1">The Basalt Silence (पाषाण शांतता)</p> -->
                  <p class="font-body-sm text-white-50 mb-0 invisible">Dir. Ananya Deshmukh • Venice Horizon Winner
                    2026</p>
                </div>
              </div>
            </div>

            <!-- VENUE BADGE OVERLAY -->
            <div class="position-absolute d-none d-sm-block px-4 py-3 shadow-lg"
              style="bottom: -1.5rem; left: -1.2rem; background: linear-gradient(135deg, #0E1C36 0%, #176B7A 100%); border-radius: 12px; border: 1.5px solid #D4AF37; z-index: 10;">
              <span class="font-label-sm text-warning d-block" style="letter-spacing: 0.15em;">FESTIVAL VENUE</span>
              <span class="font-headline-sm text-white" style="font-size: 1.15rem;"><img
                  src="im/logos/prozon-inox-1.png" alt="" class="img-fluid" style="width: 300px;"></span>
              <span class="font-headline-sm text-white" style="font-size: 1.15rem;"></span>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- SECTION: ORGANIZED BY -->
    <section class="py-5 section-organized-by" id="organizers">
      <div class="container-xxl px-4 px-lg-5 mb-4 text-center">
        <div class="d-inline-flex align-items-center gap-2 mb-2">
          <div style="height: 2px; width: 2.5rem; background: linear-gradient(90deg, #D81B60, #D4AF37);"></div>
          <span class="font-label-sm poster-teal-text fw-bold">ORGANIZERS &amp; PARTNERS</span>
          <div style="height: 2px; width: 2.5rem; background: linear-gradient(90deg, #D4AF37, #00897B);"></div>
        </div>
        <h3 class="font-headline font-headline-sm poster-navy-dark fw-bold mb-0">ORGANIZED BY</h3>
      </div>

      <div class="marquee-container py-3">
        <div class="marquee-track">
          <!-- First Set of Logos -->
          <div class="organizer-logo-card">
            <img src="im/logos/Organized/MGM UNIVERSITY PNG LOGO.png" alt="MGM University" />
          </div>
          <div class="organizer-logo-card">
            <img src="im/logos/Organized/MACFF-1.png" alt="Marathwada Art Culture &amp; Film Foundation" />
          </div>
          <div class="organizer-logo-card">
            <img src="im/logos/Organized/YASHWANTRAO CHAVHAN CENTRE PNG LOGO.png" alt="Yashwantrao Chavan Centre" />
          </div>
          <div class="organizer-logo-card">
            <img src="im/logos/Organized/Nath Group PNG Logo.png" alt="Nath Group" />
          </div>

          <!-- Duplicate Set for Seamless Infinite Scrolling -->
          <div class="organizer-logo-card">
            <img src="im/logos/Organized/MGM UNIVERSITY PNG LOGO.png" alt="MGM University" />
          </div>
          <div class="organizer-logo-card">
            <img src="im/logos/Organized/MACFF-1.png" alt="Marathwada Art Culture &amp; Film Foundation" />
          </div>
          <div class="organizer-logo-card">
            <img src="im/logos/Organized/YASHWANTRAO CHAVHAN CENTRE PNG LOGO.png" alt="Yashwantrao Chavan Centre" />
          </div>
          <div class="organizer-logo-card">
            <img src="im/logos/Organized/Nath Group PNG Logo.png" alt="Nath Group" />
          </div>

          <!-- Triplicate Set for Extra Wide Screens -->
          <div class="organizer-logo-card">
            <img src="im/logos/Organized/MGM UNIVERSITY PNG LOGO.png" alt="MGM University" />
          </div>
          <div class="organizer-logo-card">
            <img src="im/logos/Organized/MACFF-1.png" alt="Marathwada Art Culture &amp; Film Foundation" />
          </div>
          <div class="organizer-logo-card">
            <img src="im/logos/Organized/YASHWANTRAO CHAVHAN CENTRE PNG LOGO.png" alt="Yashwantrao Chavan Centre" />
          </div>
          <div class="organizer-logo-card">
            <img src="im/logos/Organized/Nath Group PNG Logo.png" alt="Nath Group" />
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION: PADMAPANI LIFETIME ACHIEVEMENT AWARD -->
    <section class="py-5 section-padmapani" id="padmapani-award">
      <div class="container-xxl px-4 px-lg-5">

        <!-- SECTION HEADER -->
        <div class="mb-5">
          <div class="d-flex align-items-center gap-2 mb-3">
            <span class="font-label-sm poster-teal-text fw-bold" style="letter-spacing: 0.18em;">HONOURING A
              LIFETIME</span>
            <div style="height: 2px; width: 3.5rem; background: linear-gradient(90deg, #D81B60, #D4AF37);"></div>
          </div>

          <h2 class="font-headline font-headline-lg poster-navy-dark lh-sm mb-3">
            Padmapani Lifetime <br />
            <span class="fst-italic font-display poster-heading-magenta fw-bold">Achievement Award</span>
          </h2>

          <div class="paithani-zari-divider mb-4" style="width: 140px;"></div>
        </div>

        <!-- GRAYSCALE FLOWER BACKGROUNDS FACING EACH OTHER -->
        <img src="im/flower.png" alt="" class="flower-bg-left" />
        <img src="im/flower.png" alt="" class="flower-bg-right" />

        <!-- RECIPIENT CARDS CONTINUOUS SLIDER (PAUSE ON HOVER) -->
        <div class="padmapani-marquee-container py-3">
          <div class="padmapani-marquee-track">

            <!-- SET 1 (CARDS 1 TO 7) -->
            <div class="padmapani-slide-item">
              <div class="padmapani-card" data-color="magenta">
                <div class="padmapani-card-img-wrap">
                  <img src="im/padmapani/1.webp" alt="Ilaiyaraaja" />
                </div>
                <h4 class="padmapani-name">Ilaiyaraaja</h4>
                <span class="padmapani-year">2026</span>
              </div>
            </div>

            <div class="padmapani-slide-item">
              <div class="padmapani-card" data-color="teal">
                <div class="padmapani-card-img-wrap">
                  <img src="im/padmapani/2.jpg" alt="Sai Paranjpye" />
                </div>
                <h4 class="padmapani-name">Sai Paranjpye</h4>
                <span class="padmapani-year">2025</span>
              </div>
            </div>

            <div class="padmapani-slide-item">
              <div class="padmapani-card" data-color="orange">
                <div class="padmapani-card-img-wrap">
                  <img src="im/padmapani/3.jpg" alt="Javed Akhtar" />
                </div>
                <h4 class="padmapani-name">Javed Akhtar</h4>
                <span class="padmapani-year">2024</span>
              </div>
            </div>

            <div class="padmapani-slide-item">
              <div class="padmapani-card" data-color="navy">
                <div class="padmapani-card-img-wrap">
                  <img src="im/padmapani/4.jpg" alt="Arun Khopkar" />
                </div>
                <h4 class="padmapani-name">Arun Khopkar</h4>
                <span class="padmapani-year">2023</span>
              </div>
            </div>

            <div class="padmapani-slide-item">
              <div class="padmapani-card" data-color="purple">
                <div class="padmapani-card-img-wrap">
                  <img src="im/padmapani/5.jpg" alt="Sumitra Bhave" />
                </div>
                <h4 class="padmapani-name">Sumitra Bhave</h4>
                <span class="padmapani-year">2020</span>
              </div>
            </div>

            <div class="padmapani-slide-item">
              <div class="padmapani-card" data-color="green">
                <div class="padmapani-card-img-wrap">
                  <img src="im/padmapani/6.jpg" alt="Girish Kasaravalli" />
                </div>
                <h4 class="padmapani-name">Girish Kasaravalli</h4>
                <span class="padmapani-year">2019</span>
              </div>
            </div>

            <div class="padmapani-slide-item">
              <div class="padmapani-card" data-color="amber">
                <div class="padmapani-card-img-wrap">
                  <img src="im/padmapani/7.jpg" alt="Amol Palekar" />
                </div>
                <h4 class="padmapani-name">Amol Palekar</h4>
                <span class="padmapani-year">2018</span>
              </div>
            </div>

            <!-- SET 2 (DUPLICATE FOR SEAMLESS LOOPING) -->
            <div class="padmapani-slide-item">
              <div class="padmapani-card" data-color="magenta">
                <div class="padmapani-card-img-wrap">
                  <img src="im/padmapani/1.webp" alt="Ilaiyaraaja" />
                </div>
                <h4 class="padmapani-name">Ilaiyaraaja</h4>
                <span class="padmapani-year">2026</span>
              </div>
            </div>

            <div class="padmapani-slide-item">
              <div class="padmapani-card" data-color="teal">
                <div class="padmapani-card-img-wrap">
                  <img src="im/padmapani/2.jpg" alt="Sai Paranjpye" />
                </div>
                <h4 class="padmapani-name">Sai Paranjpye</h4>
                <span class="padmapani-year">2025</span>
              </div>
            </div>

            <div class="padmapani-slide-item">
              <div class="padmapani-card" data-color="orange">
                <div class="padmapani-card-img-wrap">
                  <img src="im/padmapani/3.jpg" alt="Javed Akhtar" />
                </div>
                <h4 class="padmapani-name">Javed Akhtar</h4>
                <span class="padmapani-year">2024</span>
              </div>
            </div>

            <div class="padmapani-slide-item">
              <div class="padmapani-card" data-color="navy">
                <div class="padmapani-card-img-wrap">
                  <img src="im/padmapani/4.jpg" alt="Arun Khopkar" />
                </div>
                <h4 class="padmapani-name">Arun Khopkar</h4>
                <span class="padmapani-year">2023</span>
              </div>
            </div>

            <div class="padmapani-slide-item">
              <div class="padmapani-card" data-color="purple">
                <div class="padmapani-card-img-wrap">
                  <img src="im/padmapani/5.jpg" alt="Sumitra Bhave" />
                </div>
                <h4 class="padmapani-name">Sumitra Bhave</h4>
                <span class="padmapani-year">2020</span>
              </div>
            </div>

            <div class="padmapani-slide-item">
              <div class="padmapani-card" data-color="green">
                <div class="padmapani-card-img-wrap">
                  <img src="im/padmapani/6.jpg" alt="Girish Kasaravalli" />
                </div>
                <h4 class="padmapani-name">Girish Kasaravalli</h4>
                <span class="padmapani-year">2019</span>
              </div>
            </div>

            <div class="padmapani-slide-item">
              <div class="padmapani-card" data-color="amber">
                <div class="padmapani-card-img-wrap">
                  <img src="im/padmapani/7.jpg" alt="Amol Palekar" />
                </div>
                <h4 class="padmapani-name">Amol Palekar</h4>
                <span class="padmapani-year">2018</span>
              </div>
            </div>

            <!-- SET 3 (TRIPLICATE FOR EXTRA WIDE SCREENS) -->
            <div class="padmapani-slide-item">
              <div class="padmapani-card" data-color="magenta">
                <div class="padmapani-card-img-wrap">
                  <img src="im/padmapani/1.webp" alt="Ilaiyaraaja" />
                </div>
                <h4 class="padmapani-name">Ilaiyaraaja</h4>
                <span class="padmapani-year">2026</span>
              </div>
            </div>

            <div class="padmapani-slide-item">
              <div class="padmapani-card" data-color="teal">
                <div class="padmapani-card-img-wrap">
                  <img src="im/padmapani/2.jpg" alt="Sai Paranjpye" />
                </div>
                <h4 class="padmapani-name">Sai Paranjpye</h4>
                <span class="padmapani-year">2025</span>
              </div>
            </div>

            <div class="padmapani-slide-item">
              <div class="padmapani-card" data-color="orange">
                <div class="padmapani-card-img-wrap">
                  <img src="im/padmapani/3.jpg" alt="Javed Akhtar" />
                </div>
                <h4 class="padmapani-name">Javed Akhtar</h4>
                <span class="padmapani-year">2024</span>
              </div>
            </div>

            <div class="padmapani-slide-item">
              <div class="padmapani-card" data-color="navy">
                <div class="padmapani-card-img-wrap">
                  <img src="im/padmapani/4.jpg" alt="Arun Khopkar" />
                </div>
                <h4 class="padmapani-name">Arun Khopkar</h4>
                <span class="padmapani-year">2023</span>
              </div>
            </div>

            <div class="padmapani-slide-item">
              <div class="padmapani-card" data-color="purple">
                <div class="padmapani-card-img-wrap">
                  <img src="im/padmapani/5.jpg" alt="Sumitra Bhave" />
                </div>
                <h4 class="padmapani-name">Sumitra Bhave</h4>
                <span class="padmapani-year">2020</span>
              </div>
            </div>

            <div class="padmapani-slide-item">
              <div class="padmapani-card" data-color="green">
                <div class="padmapani-card-img-wrap">
                  <img src="im/padmapani/6.jpg" alt="Girish Kasaravalli" />
                </div>
                <h4 class="padmapani-name">Girish Kasaravalli</h4>
                <span class="padmapani-year">2019</span>
              </div>
            </div>

            <div class="padmapani-slide-item">
              <div class="padmapani-card" data-color="amber">
                <div class="padmapani-card-img-wrap">
                  <img src="im/padmapani/7.jpg" alt="Amol Palekar" />
                </div>
                <h4 class="padmapani-name">Amol Palekar</h4>
                <span class="padmapani-year">2018</span>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>


    <!-- SECTION 08: LIFETIME ACHIEVEMENT -->
    <section class="py-5 bg-surface-container-lowest" style="padding-top: 7rem; padding-bottom: 7rem;">
      <div class="container-xxl px-4 px-lg-5">
        <div class="d-flex flex-column flex-md-row align-items-md-end justify-content-between mb-4 gap-3">
          <div>
            <span class="font-label-sm text-primary d-block mb-2">06 / RETROSPECTIVE &amp; HONOURS</span>
            <h2 class="font-headline font-headline-lg text-on-surface mb-1">LIFETIME ACHIEVEMENT</h2>
            <p class="font-body-md text-on-surface-variant mb-0">Honouring the visionary voices that irrevocably
              shaped the language of Indian cinema.</p>
          </div>
          <div class="d-flex gap-2 font-monospace font-label-sm">
            <button class="btn btn-sm bg-primary text-on-primary fw-semibold">2026</button>
            <button class="btn btn-sm bg-surface-container text-on-surface">2025</button>
            <button class="btn btn-sm bg-surface-container text-on-surface">2024</button>
            <button class="btn btn-sm bg-surface-container text-on-surface">2023</button>
            <button class="btn btn-sm bg-surface-container text-on-surface">2022</button>
          </div>
        </div>
        <div class="bg-surface-container-low p-4 p-lg-5">
          <div class="row g-5 align-items-center">
            <div class="col-lg-5">
              <div class="position-relative overflow-hidden bg-surface-container-lowest"
                style="aspect-ratio: 3/4;">
                <img class="w-100 h-100 object-fit-cover"
                  src="https://lh3.googleusercontent.com/aida-public/AB6AXuDMWwrqDXGX78R7vF3iFpbbBZGEz9CDzKApWUs4Wu_5RTAggrTgpHZudkW2u9-FTpZYqrr8n1e5DEaEj5hFUBxfdLAz4z_XvsT6nLhksmvP3zmSS8YJC0yNVQ9iQOm1Cmcha0cZwkihZVtH3TUXHzRxZjoiPVPGXGf5Rz87yqUKhnZwZDeKVuiHaKwJb4TOp8ZCFDzScCobFSu48r2MwjStY8IatCzs0ZUQ593yUwl26BYO31Ivf8i2" />
                <div class="position-absolute bottom-0 start-0 end-0 text-center p-3">
                  <span class="font-label-sm text-primary">PADMA BHUSHAN AWARDEE</span>
                </div>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="d-inline-block px-3 py-1 mb-3 bg-surface-container-high">
                <span class="font-label-sm text-primary">2026 FESTIVAL LAUREATE</span>
              </div>
              <h3 class="font-headline font-headline-lg text-on-surface mb-2">K. K. Mahajan Retrospective</h3>
              <p class="font-body-sm text-outline fst-italic mb-3">Master of Chiaroscuro • Four-time National Film
                Award Winner</p>
              <p class="font-body-lg text-on-surface-variant mb-4">"To honor Mahajan is to honor the very light of
                the
                Indian New Wave. His camera did not simply document realism; it sculpted socio-political tension
                into
                high-contrast basalt truth across masterpieces with Mani Kaul, Kumar Shahani, and Mrinal Sen."
              </p>
              <div class="mb-3">
                <div class="font-label-sm text-primary mb-2">OFFICIAL RETROSPECTIVE SCREENINGS</div>
                <div class="row g-2 font-body-sm text-on-surface">
                  <div class="col-sm-6">
                    <div class="bg-surface p-2">• Uski Roti (1969) — 4K Digital Restoration</div>
                  </div>
                  <div class="col-sm-6">
                    <div class="bg-surface p-2">• Maya Darpan (1972) — 35mm Archival Print</div>
                  </div>
                  <div class="col-sm-6">
                    <div class="bg-surface p-2">• Bhuvan Shome (1969) — NFDC Restored</div>
                  </div>
                  <div class="col-sm-6">
                    <div class="bg-surface p-2">• Tarang (1984) — Special 70mm Screen</div>
                  </div>
                </div>
              </div>
              <div class="d-flex flex-wrap gap-3 pt-2">
                <a class="btn bg-primary text-on-primary px-4 py-2 font-label-md" href="#">ATTEND RETROSPECTIVE
                  MASTERCLASS →</a>
                <a class="btn bg-surface-container-high text-on-surface px-4 py-2 font-label-md" href="#">READ
                  COMMEMORATIVE MONOGRAPH</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- SECTION 07: THE AWARDS (REVAMPED PREMIUM EDITION) -->
    <section class="py-5 section-awards position-relative overflow-hidden" id="awards"
      style="padding-top: 6rem; padding-bottom: 6rem;">
      <!-- Ambient Radial Background Glows -->
      <div class="award-bg-glow-1"></div>
      <div class="award-bg-glow-2"></div>
      <img src="im/kailash_stumbh.png" alt="" class="kailash_stumbh-bg-right" />


      <div class="container-xxl px-4 px-lg-5 position-relative z-3">

        <!-- SECTION HEADER -->
        <div class="mb-5">
          <div class="d-flex align-items-center gap-2 mb-3">
            <span class="font-label-sm poster-teal-text fw-bold" style="letter-spacing: 0.18em;">🪷 ACCOLADES &amp;
              LAURELS</span>
            <div style="height: 2px; width: 3.5rem; background: linear-gradient(90deg, #D81B60, #D4AF37);"></div>
          </div>
          <h2 class="font-headline font-headline-lg poster-navy-dark lh-sm mb-3">
            Honouring Cinematic Excellence <br />
            <span class="fst-italic font-display poster-heading-magenta fw-bold">The Festival Awards</span>
          </h2>
          <div class="paithani-zari-divider mb-4" style="width: 140px;"></div>
          <!-- <p class="font-body-md text-on-surface-variant mb-0" style="max-width: 42rem; color: #2D3A50 !important;">
              Recognizing audacious storytelling and artistic mastery with the iconic Golden Kailash, Silver Kailash,
              and official festival laurels.
            </p> -->
        </div>

        <div class="row g-4 align-items-stretch">

          <!-- FEATURED HERO AWARD: BEST FILM (GOLDEN KAILASH) -->
          <div class="col-lg-5">
            <div
              class="award-hero-card h-100 p-4 p-lg-5 position-relative overflow-hidden d-flex flex-column justify-content-between">
              <div class="position-relative z-2">
                <div class="d-inline-flex align-items-center gap-2 px-3 py-1.5 rounded-pill mb-3 award-laurel-badge">
                  <span class="material-symbols-outlined text-warning" style="font-size: 18px;">workspace_premium</span>
                  <span class="font-label-sm fw-bold text-uppercase"
                    style="letter-spacing: 0.12em; color: #D4AF37;">SUPREME FESTIVAL LAUREL</span>
                </div>

                <!-- TROPHY IMAGE WITH HALO & ANIMATION -->
                <div class="text-center my-2 award-trophy-container">
                  <div class="award-trophy-halo"></div>
                  <img src="im/award/1.png" alt="Golden Kailash Award Trophy" class="award-trophy-img img-fluid" />
                </div>

                <h3 class="font-headline font-headline-lg mb-1 text-white fw-bold">BEST FILM</h3>
                <p class="font-label-md fw-semibold mb-3" style="color: #D4AF37; letter-spacing: 0.05em;">GOLDEN
                  KAILASH TROPHY</p>
                <p class="font-body-sm text-light opacity-85 mb-4" style="line-height: 1.6;">
                  Conferred upon the supreme feature film demonstrating transcendent artistic vision, storytelling
                  courage, and profound humanistic insight.
                </p>
              </div>

              <div
                class="award-hero-prize-box position-relative z-2 p-3 p-md-4 rounded-4 d-flex align-items-center justify-content-between">
                <div>
                  <span class="font-label-sm d-block text-uppercase text-light opacity-75"
                    style="letter-spacing: 0.1em;">CASH PRIZE</span>
                  <span class="font-headline-md fw-bold font-monospace text-warning">Rs. 3,00,000/-</span>
                </div>
                <div class="award-trophy-icon-circle">
                  <span class="material-symbols-outlined" style="font-size: 28px; color: #D4AF37;">military_tech</span>
                </div>
              </div>
            </div>
          </div>

          <!-- OTHER 6 LAURELS GRID -->
          <div class="col-lg-7">
            <div class="row g-3">

              <!-- 1. BEST ACTOR -->
              <div class="col-md-6">
                <div class="award-mini-card p-4 h-100 d-flex flex-column justify-content-between">
                  <div>
                    <div class="d-flex align-items-center justify-content-between mb-3">
                      <span class="award-category-pill pill-navy">ACTING LAUREL</span>
                      <span class="material-symbols-outlined award-card-icon">person</span>
                    </div>
                    <h4 class="award-card-title">Best Actor</h4>
                    <p class="award-card-sub">Silver Kailash Trophy</p>
                  </div>
                  <div class="award-card-prize mt-3 pt-3 border-top d-flex justify-content-between align-items-center">
                    <span class="font-label-sm text-muted">CASH PRIZE</span>
                    <span class="font-monospace fw-bold text-primary fs-5">Rs. 25,000/-</span>
                  </div>
                </div>
              </div>

              <!-- 2. BEST ACTRESS -->
              <div class="col-md-6">
                <div class="award-mini-card p-4 h-100 d-flex flex-column justify-content-between">
                  <div>
                    <div class="d-flex align-items-center justify-content-between mb-3">
                      <span class="award-category-pill pill-magenta">ACTING LAUREL</span>
                      <span class="material-symbols-outlined award-card-icon" style="color: #D81B60;">face_3</span>
                    </div>
                    <h4 class="award-card-title">Best Actress</h4>
                    <p class="award-card-sub">Silver Kailash Trophy</p>
                  </div>
                  <div class="award-card-prize mt-3 pt-3 border-top d-flex justify-content-between align-items-center">
                    <span class="font-label-sm text-muted">CASH PRIZE</span>
                    <span class="font-monospace fw-bold text-primary fs-5">Rs. 25,000/-</span>
                  </div>
                </div>
              </div>

              <!-- 3. BEST SCRIPT -->
              <div class="col-md-6">
                <div class="award-mini-card p-4 h-100 d-flex flex-column justify-content-between">
                  <div>
                    <div class="d-flex align-items-center justify-content-between mb-3">
                      <span class="award-category-pill pill-teal">WRITING LAUREL</span>
                      <span class="material-symbols-outlined award-card-icon" style="color: #00897B;">history_edu</span>
                    </div>
                    <h4 class="award-card-title">Best Script</h4>
                    <p class="award-card-sub">Silver Kailash Trophy</p>
                  </div>
                  <div class="award-card-prize mt-3 pt-3 border-top d-flex justify-content-between align-items-center">
                    <span class="font-label-sm text-muted">CASH PRIZE</span>
                    <span class="font-monospace fw-bold text-primary fs-5">Rs. 25,000/-</span>
                  </div>
                </div>
              </div>

              <!-- 4. BEST SHORT-FILM -->
              <div class="col-md-6">
                <div class="award-mini-card p-4 h-100 d-flex flex-column justify-content-between">
                  <div>
                    <div class="d-flex align-items-center justify-content-between mb-3">
                      <span class="award-category-pill pill-amber">REGIONAL LAUREL</span>
                      <span class="material-symbols-outlined award-card-icon" style="color: #D4AF37;">videocam</span>
                    </div>
                    <h4 class="award-card-title">Best Short-film</h4>
                    <p class="award-card-desc">Conferred to the Best Short-film from Marathwada Region selected by the
                      jury panel.</p>
                  </div>
                  <div class="award-card-prize mt-3 pt-3 border-top d-flex justify-content-between align-items-center">
                    <span class="font-label-sm text-muted">CASH PRIZE</span>
                    <span class="font-monospace fw-bold text-primary fs-5">Rs. 25,000/-</span>
                  </div>
                </div>
              </div>

              <!-- 5. FIPRESCI AWARD -->
              <div class="col-md-6">
                <div class="award-mini-card p-4 h-100 d-flex flex-column justify-content-between">
                  <div>
                    <div class="d-flex align-items-center justify-content-between mb-3">
                      <span class="award-category-pill pill-purple">CRITICS LAUREL</span>
                      <span class="material-symbols-outlined award-card-icon" style="color: #7B1FA2;">verified</span>
                    </div>
                    <h4 class="award-card-title">FIPRESCI Award</h4>
                    <p class="award-card-desc">FIPRESCI-India confers the Award to the 1st/2nd film of director of
                      Indian Competition &amp; World Cinema.</p>
                  </div>
                  <div class="award-card-prize mt-3 pt-3 border-top d-flex justify-content-between align-items-center">
                    <span class="font-label-sm text-muted">PRESENTED BY</span>
                    <span class="font-label-sm fw-bold text-dark">FIPRESCI-INDIA</span>
                  </div>
                </div>
              </div>

              <!-- 6. AUDIENCE CHOICE AWARD -->
              <div class="col-md-6">
                <div class="award-mini-card p-4 h-100 d-flex flex-column justify-content-between">
                  <div>
                    <div class="d-flex align-items-center justify-content-between mb-3">
                      <span class="award-category-pill pill-orange">POPULAR LAUREL</span>
                      <span class="material-symbols-outlined award-card-icon" style="color: #EA6C14;">stars</span>
                    </div>
                    <h4 class="award-card-title">Audience Choice Award</h4>
                    <p class="award-card-desc">The Audience Award of AIFF that enjoys reputation world over is
                      conferred on best film chosen by the discerning audience.</p>
                  </div>
                  <div class="award-card-prize mt-3 pt-3 border-top d-flex justify-content-between align-items-center">
                    <span class="font-label-sm text-muted">VOTED BY</span>
                    <span class="font-label-sm fw-bold text-dark">DISCERNING AUDIENCE</span>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </section>


    <!-- SECTION 04: NOW SHOWING -->
    <section class="py-5 bg-surface-container-lowest position-relative overflow-hidden section-films-bg" id="films"
      style="padding-top: 7rem; padding-bottom: 7rem;">
      <!-- GRAYSCALE FLOWER BACKGROUNDS FACING EACH OTHER -->
      <img src="im/flower.png" alt="" class="flower-bg-left" />
      <img src="im/flower.png" alt="" class="flower-bg-right" />

      <div class="container-xxl px-4 px-lg-5 position-relative z-2">
        <div class="d-flex flex-column flex-md-row align-items-md-end justify-content-between mb-5 gap-3">
          <div>
            <div class="d-flex align-items-center gap-2 mb-3">
              <span class="font-label-sm poster-teal-text fw-bold" style="letter-spacing: 0.18em;">OFFICIAL FILM
                SLATE</span>
              <div style="height: 2px; width: 3.5rem; background: linear-gradient(90deg, #D81B60, #D4AF37);"></div>
            </div>

            <h2 class="font-headline font-headline-lg poster-navy-dark lh-sm mb-3">
              Official Selection <br />
              <span class="fst-italic font-display poster-heading-magenta fw-bold">Now Showing</span>
            </h2>

            <div class="paithani-zari-divider mb-4" style="width: 140px;"></div>

            <!-- <p class="font-body-md text-on-surface-variant mb-0" style="max-width: 42rem; color: #2D3A50 !important;">
                Stories of defiance, contemplation, and transcendence from across India and the globe.
              </p> -->
          </div>
          <div class="d-flex align-items-center gap-3">
            <span class="font-monospace font-label-sm text-outline">01 — 06</span>
            <div class="d-flex gap-2">
              <button class="btn bg-surface-container-low text-on-surface border-0" style="width: 3rem; height: 3rem;"
                aria-label="Previous films">
                <span class="material-symbols-outlined" style="font-size: 20px;">arrow_back</span>
              </button>
              <button class="btn bg-surface-container-low text-on-surface border-0" style="width: 3rem; height: 3rem;"
                aria-label="Next films">
                <span class="material-symbols-outlined" style="font-size: 20px;">arrow_forward</span>
              </button>
            </div>
          </div>
        </div>

        <div class="row g-4">
          <!-- Film 1 -->
          <div class="col-md-6 col-lg-4">
            <div class="film-card bg-surface-container p-3 h-100 d-flex flex-column position-relative">
              <div class="position-relative overflow-hidden mb-3 bg-background" style="aspect-ratio: 16/10;">
                <img class="w-100 h-100 object-fit-cover"
                  src="https://lh3.googleusercontent.com/aida-public/AB6AXuC8EXv_yBPeKGghWE6oqEacrlgE5znt0vEJYIlNItL-SK1UCp4IoBq3SoT5H9rE-uR2a0yvRxP4WY3PGNb_06BNOjT69VARw9ICHVRNZFeKWHNICfN4l28auQkp9w2VbHK2fzuFMSaEALtTuFFr0wHJYFymtdYyHTd9vZhbUUY9RBoxiO1qUQmcCYlpN4RMnyr4PpxLaXrIJToWOjGJkxawD8ZcY5b2mcBuQ1MTgEs6GZ5LfKolpsuu" />
                <!-- Quick Play Poster Overlay -->
                <div class="film-poster-overlay view-trailer-btn" role="button"
                  aria-label="Play Trailer for The Basalt Silence"
                  data-trailer-src="https://www.youtube.com/watch?v=Way9Dexny3w" data-trailer-title="The Basalt Silence"
                  data-trailer-meta="Dir. Ananya Deshmukh • India • Marathi (2026)" data-trailer-badge="COMPETITION"
                  data-cursor="PLAY TRAILER">
                  <div class="film-play-badge">
                    <span class="material-symbols-outlined">play_arrow</span>
                  </div>
                </div>
                <div
                  class="position-absolute top-0 start-0 m-2 bg-secondary-container px-2 py-1 text-on-secondary-container font-label-sm"
                  style="z-index: 3;">
                  COMPETITION</div>
                <div
                  class="position-absolute bottom-0 end-0 m-2 bg-surface-container-lowest px-2 py-1 text-on-surface font-monospace font-label-sm"
                  style="z-index: 3;">
                  134 MIN</div>
              </div>
              <div class="flex-grow-1">
                <div class="d-flex justify-content-between text-outline font-label-sm mb-1">
                  <span>INDIA • MARATHI</span><span>2026</span>
                </div>
                <h3 class="font-headline-sm text-on-surface mb-2">The Basalt Silence</h3>
                <p class="font-body-sm text-on-surface-variant line-clamp-2 mb-3">A stone quarry laborer unearths an
                  undocumented Buddhist shrine, triggering an ethical collision between corporate mining and ancestral
                  soil.</p>
              </div>
              <div
                class="pt-3 mt-auto d-flex justify-content-between border-top border-outline-variant align-items-center">
                <span class="font-body-sm text-outline fst-italic">Dir. Ananya Deshmukh</span>
                <!-- VIEW TRAILER BUTTON: Change data-trailer-src to your desired YouTube link or ID anytime -->
                <a class="font-label-sm text-primary text-decoration-none view-trailer-btn" href="javascript:void(0)"
                  role="button" data-trailer-src="https://www.youtube.com/watch?v=Way9Dexny3w"
                  data-trailer-title="The Basalt Silence"
                  data-trailer-meta="Dir. Ananya Deshmukh • India • Marathi (2026)" data-trailer-badge="COMPETITION"
                  data-cursor="VIEW TRAILER">
                  <span class="material-symbols-outlined"
                    style="font-size: 15px; vertical-align: -2px;">play_circle</span>VIEW TRAILER
                </a>
                <a class="font-label-sm text-primary text-decoration-none" href="#">BOOK TICKET</a>
              </div>
            </div>
          </div>
          <!-- Film 2 -->
          <div class="col-md-6 col-lg-4">
            <div class="film-card bg-surface-container p-3 h-100 d-flex flex-column position-relative">
              <div class="position-relative overflow-hidden mb-3 bg-background" style="aspect-ratio: 16/10;">
                <img class="w-100 h-100 object-fit-cover"
                  src="https://lh3.googleusercontent.com/aida-public/AB6AXuDv3LN3--PHmyPDN_bzx6PEyHa950i4iaXmBlj_dWQMmhEL8b2qX97fBSwO3SkBviOaIgeaqWB1cqImC31LQwdtGsoMUcdiwHJbbOCnlzziuBXHTgB3XHyON8ldn0lkQ8ZDD3PShhZnNk8xrkYOZzQL9YtcrkgBPFLHoB1N2wt-SVNPOZu_qSBGk73s5vt9_Zcrq3Eh9fh-veHxRAKE4wzv09UJiCtfw7EI-riqOvkCPNBnkVnQdnNk" />
                <!-- Quick Play Poster Overlay -->
                <div class="film-poster-overlay view-trailer-btn" role="button"
                  aria-label="Play Trailer for Echoes of the Sun Temple"
                  data-trailer-src="https://www.youtube.com/watch?v=Way9Dexny3w"
                  data-trailer-title="Echoes of the Sun Temple"
                  data-trailer-meta="Dir. Koji Shinkai • Japan / India • Multi (2026)"
                  data-trailer-badge="ASIAN PREMIERE" data-cursor="PLAY TRAILER">
                  <div class="film-play-badge">
                    <span class="material-symbols-outlined">play_arrow</span>
                  </div>
                </div>
                <div
                  class="position-absolute top-0 start-0 m-2 bg-primary-container px-2 py-1 text-on-primary-container font-label-sm"
                  style="z-index: 3;">
                  ASIAN PREMIERE</div>
                <div
                  class="position-absolute bottom-0 end-0 m-2 bg-surface-container-lowest px-2 py-1 text-on-surface font-monospace font-label-sm"
                  style="z-index: 3;">
                  118 MIN</div>
              </div>
              <div class="flex-grow-1">
                <div class="d-flex justify-content-between text-outline font-label-sm mb-1">
                  <span>JAPAN / INDIA • MULTI</span><span>2026</span>
                </div>
                <h3 class="font-headline-sm text-on-surface mb-2">Echoes of the Sun Temple</h3>
                <p class="font-body-sm text-on-surface-variant line-clamp-2 mb-3">A Tokyo acoustics engineer
                  reconstructs the lost acoustic harmonics of medieval Indian rock sanctums, rediscovering his
                  estranged mother's compositions.</p>
              </div>
              <div
                class="pt-3 mt-auto d-flex justify-content-between border-top border-outline-variant align-items-center">
                <span class="font-body-sm text-outline fst-italic">Dir. Koji Shinkai</span>
                <!-- VIEW TRAILER BUTTON: Change data-trailer-src to your desired YouTube link or ID anytime -->
                <a class="font-label-sm text-primary text-decoration-none view-trailer-btn" href="javascript:void(0)"
                  role="button" data-trailer-src="https://www.youtube.com/watch?v=Way9Dexny3w"
                  data-trailer-title="Echoes of the Sun Temple"
                  data-trailer-meta="Dir. Koji Shinkai • Japan / India • Multi (2026)"
                  data-trailer-badge="ASIAN PREMIERE" data-cursor="VIEW TRAILER">
                  <span class="material-symbols-outlined"
                    style="font-size: 15px; vertical-align: -2px;">play_circle</span>VIEW TRAILER
                </a>
                <a class="font-label-sm text-primary text-decoration-none" href="#">BOOK TICKET</a>
              </div>
            </div>
          </div>
          <!-- Film 3 -->
          <div class="col-md-6 col-lg-4">
            <div class="film-card bg-surface-container p-3 h-100 d-flex flex-column position-relative">
              <div class="position-relative overflow-hidden mb-3 bg-background" style="aspect-ratio: 16/10;">
                <img class="w-100 h-100 object-fit-cover"
                  src="https://lh3.googleusercontent.com/aida-public/AB6AXuDnI3HYU-PjrgOiV2BF2bSy3l-CSi5HwWML_le8B8Uf4DlrNH1C6iIsZyNjqQ3N3duv1qHM4uMs08Hf3UxF68nj3GJsQ35wgwFnt1rEjFphO_hnIWS3iX_kTCZU2SXIjAC39ujq013Bqbl7rhaz0TECLqHWL9aUhb70-bCO4zH3CoKXt_rZ2SEHsxUwHHfoUxGGMc_86CxLHyY_mhCKU2R2ULcWNYMCYs7BQdbFnMN41pOb4X3kZH7b" />
                <!-- Quick Play Poster Overlay -->
                <div class="film-poster-overlay view-trailer-btn" role="button"
                  aria-label="Play Trailer for Whispers at Dawn"
                  data-trailer-src="https://www.youtube.com/watch?v=Way9Dexny3w" data-trailer-title="Whispers at Dawn"
                  data-trailer-meta="Dir. Céline Moreau • France • French / Eng (2025)"
                  data-trailer-badge="WORLD CINEMA" data-cursor="PLAY TRAILER">
                  <div class="film-play-badge">
                    <span class="material-symbols-outlined">play_arrow</span>
                  </div>
                </div>
                <div
                  class="position-absolute top-0 start-0 m-2 bg-surface-container-highest px-2 py-1 text-on-surface font-label-sm"
                  style="z-index: 3;">
                  WORLD CINEMA</div>
                <div
                  class="position-absolute bottom-0 end-0 m-2 bg-surface-container-lowest px-2 py-1 text-on-surface font-monospace font-label-sm"
                  style="z-index: 3;">
                  102 MIN</div>
              </div>
              <div class="flex-grow-1">
                <div class="d-flex justify-content-between text-outline font-label-sm mb-1">
                  <span>FRANCE • FRENCH / ENG</span><span>2025</span>
                </div>
                <h3 class="font-headline-sm text-on-surface mb-2">Whispers at Dawn</h3>
                <p class="font-body-sm text-on-surface-variant line-clamp-2 mb-3">Two estranged archivists spend five
                  nocturnal shifts cataloging the final nitrate reels of early silent cinema before demolition.</p>
              </div>
              <div
                class="pt-3 mt-auto d-flex justify-content-between border-top border-outline-variant align-items-center">
                <span class="font-body-sm text-outline fst-italic">Dir. Céline Moreau</span>
                <!-- VIEW TRAILER BUTTON: Change data-trailer-src to your desired YouTube link or ID anytime -->
                <a class="font-label-sm text-primary text-decoration-none view-trailer-btn" href="javascript:void(0)"
                  role="button" data-trailer-src="https://www.youtube.com/watch?v=Way9Dexny3w"
                  data-trailer-title="Whispers at Dawn"
                  data-trailer-meta="Dir. Céline Moreau • France • French / Eng (2025)"
                  data-trailer-badge="WORLD CINEMA" data-cursor="VIEW TRAILER">
                  <span class="material-symbols-outlined"
                    style="font-size: 15px; vertical-align: -2px;">play_circle</span>VIEW TRAILER
                </a>
                <a class="font-label-sm text-primary text-decoration-none" href="#">BOOK TICKET</a>
              </div>
            </div>
          </div>
          <!-- Film 4 -->
          <div class="col-md-6 col-lg-4">
            <div class="film-card bg-surface-container p-3 h-100 d-flex flex-column position-relative">
              <div class="position-relative overflow-hidden mb-3 bg-background" style="aspect-ratio: 16/10;">
                <img class="w-100 h-100 object-fit-cover"
                  src="https://lh3.googleusercontent.com/aida-public/AB6AXuDUumb77BnoFXPxt8CNmdp3X04nObV37YgJ66K4QLcIiq6CXDKZ9bX3bejmcnDsXYxmU7FJBxDmfxBUwXprNvoQIbI0DzgM6jgCWqorZlbPBHCI_iqygTweDsCole8y_25FtxW6EgXHXQkDxOqxgp2ATN9ZMaWcIc4S_Jzbg7zHOfriwcaNI2bjO8mIFBz2gUXNrQbK2BnVz9MZtiZKO3L6F7wKnKHHSQ9Nspi-bhb3aJPYj_fgtZ1m" />
                <!-- Quick Play Poster Overlay -->
                <div class="film-poster-overlay view-trailer-btn" role="button"
                  aria-label="Play Trailer for Deccan Chronicles"
                  data-trailer-src="https://www.youtube.com/watch?v=Way9Dexny3w" data-trailer-title="Deccan Chronicles"
                  data-trailer-meta="Dir. Vikramaditya Rao • India • Marathi / Hindi (2026)"
                  data-trailer-badge="MARATHI FOCUS" data-cursor="PLAY TRAILER">
                  <div class="film-play-badge">
                    <span class="material-symbols-outlined">play_arrow</span>
                  </div>
                </div>
                <div
                  class="position-absolute top-0 start-0 m-2 bg-secondary-container px-2 py-1 text-on-secondary-container font-label-sm"
                  style="z-index: 3;">
                  MARATHI FOCUS</div>
                <div
                  class="position-absolute bottom-0 end-0 m-2 bg-surface-container-lowest px-2 py-1 text-on-surface font-monospace font-label-sm"
                  style="z-index: 3;">
                  140 MIN</div>
              </div>
              <div class="flex-grow-1">
                <div class="d-flex justify-content-between text-outline font-label-sm mb-1">
                  <span>INDIA • MARATHI / HINDI</span><span>2026</span>
                </div>
                <h3 class="font-headline-sm text-on-surface mb-2">Deccan Chronicles</h3>
                <p class="font-body-sm text-on-surface-variant line-clamp-2 mb-3">A sprawling multi-generational epic
                  chronicling a family of theater puppeteers transitioning into the explosive dawn of regional Marathi
                  television.</p>
              </div>
              <div
                class="pt-3 mt-auto d-flex justify-content-between border-top border-outline-variant align-items-center">
                <span class="font-body-sm text-outline fst-italic">Dir. Vikramaditya Rao</span>
                <!-- VIEW TRAILER BUTTON: Change data-trailer-src to your desired YouTube link or ID anytime -->
                <a class="font-label-sm text-primary text-decoration-none view-trailer-btn" href="javascript:void(0)"
                  role="button" data-trailer-src="https://www.youtube.com/watch?v=Way9Dexny3w"
                  data-trailer-title="Deccan Chronicles"
                  data-trailer-meta="Dir. Vikramaditya Rao • India • Marathi / Hindi (2026)"
                  data-trailer-badge="MARATHI FOCUS" data-cursor="VIEW TRAILER">
                  <span class="material-symbols-outlined"
                    style="font-size: 15px; vertical-align: -2px;">play_circle</span>VIEW TRAILER
                </a>
                <a class="font-label-sm text-primary text-decoration-none" href="#">BOOK TICKET</a>
              </div>
            </div>
          </div>
          <!-- Film 5 -->
          <div class="col-md-6 col-lg-4">
            <div class="film-card bg-surface-container p-3 h-100 d-flex flex-column position-relative">
              <div class="position-relative overflow-hidden mb-3 bg-background" style="aspect-ratio: 16/10;">
                <img class="w-100 h-100 object-fit-cover"
                  src="https://lh3.googleusercontent.com/aida-public/AB6AXuA-lqzsr1-gM93GjxNdqn-UVZ0ecO5pAxHrUoc2msTqXuHcJV0wcaUuh8Iif9jgFRVAm3RUbsmyzv7JyOHJXrx0im7CT-sgKfIJeRRP7clFjZqxdcvFYuVXbuc0ZAg8iikObvc82VtUlYhyhpbNcLJBAkd8NshsiP3dYOlbbAf89X5CJUwdq3WC-BOpRgdkmoF1LENk143V20cNpClKPq0e_T48BKCTlQjQN6GhRGLN4trc2Xi21-AV" />
                <!-- Quick Play Poster Overlay -->
                <div class="film-poster-overlay view-trailer-btn" role="button"
                  aria-label="Play Trailer for Monolith of Time"
                  data-trailer-src="https://www.youtube.com/watch?v=Way9Dexny3w" data-trailer-title="Monolith of Time"
                  data-trailer-meta="Dir. Matteo Rossi • Italy • Italian (2026)" data-trailer-badge="COMPETITION"
                  data-cursor="PLAY TRAILER">
                  <div class="film-play-badge">
                    <span class="material-symbols-outlined">play_arrow</span>
                  </div>
                </div>
                <div
                  class="position-absolute top-0 start-0 m-2 bg-surface-container-highest px-2 py-1 text-on-surface font-label-sm"
                  style="z-index: 3;">
                  COMPETITION</div>
                <div
                  class="position-absolute bottom-0 end-0 m-2 bg-surface-container-lowest px-2 py-1 text-on-surface font-monospace font-label-sm"
                  style="z-index: 3;">
                  122 MIN</div>
              </div>
              <div class="flex-grow-1">
                <div class="d-flex justify-content-between text-outline font-label-sm mb-1">
                  <span>ITALY • ITALIAN</span><span>2026</span>
                </div>
                <h3 class="font-headline-sm text-on-surface mb-2">Monolith of Time</h3>
                <p class="font-body-sm text-on-surface-variant line-clamp-2 mb-3">A philosophical study on the
                  immortality of monuments and the frailty of human regimes, shot in Carrara and Ellora over five
                  years.</p>
              </div>
              <div
                class="pt-3 mt-auto d-flex justify-content-between border-top border-outline-variant align-items-center">
                <span class="font-body-sm text-outline fst-italic">Dir. Matteo Rossi</span>
                <!-- VIEW TRAILER BUTTON: Change data-trailer-src to your desired YouTube link or ID anytime -->
                <a class="font-label-sm text-primary text-decoration-none view-trailer-btn" href="javascript:void(0)"
                  role="button" data-trailer-src="https://www.youtube.com/watch?v=Way9Dexny3w"
                  data-trailer-title="Monolith of Time" data-trailer-meta="Dir. Matteo Rossi • Italy • Italian (2026)"
                  data-trailer-badge="COMPETITION" data-cursor="VIEW TRAILER">
                  <span class="material-symbols-outlined"
                    style="font-size: 15px; vertical-align: -2px;">play_circle</span>VIEW TRAILER
                </a>
                <a class="font-label-sm text-primary text-decoration-none" href="#">BOOK TICKET</a>
              </div>
            </div>
          </div>
          <!-- Film 6 -->
          <div class="col-md-6 col-lg-4">
            <div class="film-card bg-surface-container p-3 h-100 d-flex flex-column position-relative">
              <div class="position-relative overflow-hidden mb-3 bg-background" style="aspect-ratio: 16/10;">
                <img class="w-100 h-100 object-fit-cover"
                  src="https://lh3.googleusercontent.com/aida-public/AB6AXuBQG4uO2prxBlc1EknHqQw_FWVGAe3Pp6FoR7rkqCgt5is56NtLDJ_U0j6e8SpKsRFvujq9bQcyZpyCHXtanQGhmiuxEAU0uPJi0u26ABc_YV-3m2JR3qSkux1nHAUUuCsIq6_Hb-ET6VOmR_agH2IUcew1QST2rB5nIcuAm4Dt5zN22zHGsxzXpS12Gm1t-N9ljUo-SosLcaiF8ftvQZX9RYy4pnT1SBDApFDrpgv4rKbFDzo33a3A" />
                <!-- Quick Play Poster Overlay -->
                <div class="film-poster-overlay view-trailer-btn" role="button"
                  aria-label="Play Trailer for River of Shadows"
                  data-trailer-src="https://www.youtube.com/watch?v=Way9Dexny3w" data-trailer-title="River of Shadows"
                  data-trailer-meta="Dir. Farah Al-Khatib • Jordan / Germany • Arabic (2026)"
                  data-trailer-badge="CRITICS SLATE" data-cursor="PLAY TRAILER">
                  <div class="film-play-badge">
                    <span class="material-symbols-outlined">play_arrow</span>
                  </div>
                </div>
                <div
                  class="position-absolute top-0 start-0 m-2 bg-primary-container px-2 py-1 text-on-primary-container font-label-sm"
                  style="z-index: 3;">
                  CRITICS SLATE</div>
                <div
                  class="position-absolute bottom-0 end-0 m-2 bg-surface-container-lowest px-2 py-1 text-on-surface font-monospace font-label-sm"
                  style="z-index: 3;">
                  96 MIN</div>
              </div>
              <div class="flex-grow-1">
                <div class="d-flex justify-content-between text-outline font-label-sm mb-1">
                  <span>JORDAN / GERMANY • ARABIC</span><span>2026</span>
                </div>
                <h3 class="font-headline-sm text-on-surface mb-2">River of Shadows</h3>
                <p class="font-body-sm text-on-surface-variant line-clamp-2 mb-3">An evocative meditation on
                  displacement, desert oral histories, and the memories etched into forgotten cliff inscriptions.</p>
              </div>
              <div
                class="pt-3 mt-auto d-flex justify-content-between border-top border-outline-variant align-items-center">
                <span class="font-body-sm text-outline fst-italic">Dir. Farah Al-Khatib</span>
                <!-- VIEW TRAILER BUTTON: Change data-trailer-src to your desired YouTube link or ID anytime -->
                <a class="font-label-sm text-primary text-decoration-none view-trailer-btn" href="javascript:void(0)"
                  role="button" data-trailer-src="https://www.youtube.com/watch?v=Way9Dexny3w"
                  data-trailer-title="River of Shadows"
                  data-trailer-meta="Dir. Farah Al-Khatib • Jordan / Germany • Arabic (2026)"
                  data-trailer-badge="CRITICS SLATE" data-cursor="VIEW TRAILER">
                  <span class="material-symbols-outlined"
                    style="font-size: 15px; vertical-align: -2px;">play_circle</span>VIEW TRAILER
                </a>
                <a class="font-label-sm text-primary text-decoration-none" href="#">BOOK TICKET</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <!-- SECTION 10: FESTIVAL TEAM & ORGANIZING COMMITTEE -->
    <section class="py-5 bg-surface-container-low" id="about-committee"
      style="padding-top: 7rem; padding-bottom: 7rem;">
      <div class="container-xxl px-4 px-lg-5">
        <div class="d-flex flex-column flex-md-row align-items-md-end justify-content-between mb-5 gap-3">
          <div>
            <div class="d-flex align-items-center gap-2 mb-3">
              <span class="font-label-sm poster-teal-text fw-bold" style="letter-spacing: 0.18em;">🪷 FESTIVAL
                LEADERSHIP &amp; TEAM</span>
              <div style="height: 2px; width: 3.5rem; background: linear-gradient(90deg, #D81B60, #D4AF37);"></div>
            </div>

            <h2 class="font-headline font-headline-lg poster-navy-dark lh-sm mb-3">
              Visionaries Behind AIFF <br />
              <span class="fst-italic font-display poster-heading-magenta fw-bold">Organizing Committee</span>
            </h2>

            <div class="paithani-zari-divider mb-4" style="width: 140px;"></div>

            <!-- <p class="font-body-md text-on-surface-variant mb-0" style="max-width: 42rem; color: #2D3A50 !important;">
                Dedicated patrons, cultural curators, and industry stalwarts driving the vision of the 12th
                Ajanta–Ellora International Film Festival.
              </p> -->
          </div>
        </div>
        <div class="row g-4 align-items-stretch">

          <!-- 1. Nandkishor Kagliwal -->
          <div class="col-md-6 col-lg-3">
            <div
              class="team-card h-100 p-3 p-xl-4 rounded-4 d-flex flex-column justify-content-between position-relative overflow-hidden">
              <div class="team-card-img-wrap mb-3 rounded-4 overflow-hidden position-relative"
                style="aspect-ratio: 4/5;">
                <img src="im/team/Chairman-1.jpg" alt="Nandkishor Kagliwal"
                  class="w-100 h-100 object-fit-cover team-img" />
                <div
                  class="team-badge d-none position-absolute top-0 start-0 m-3 px-3 py-1 rounded-pill font-label-sm fw-bold">
                  CHAIRMAN</div>
              </div>
              <div class="team-card-info flex-grow-1 d-flex flex-column justify-content-between">
                <div>
                  <h3 class="font-headline-sm poster-navy-dark fw-bold mb-1">Nandkishor Kagliwal</h3>
                  <p class="font-label-sm poster-teal-text fw-bold mb-2">CHAIRMAN, AIFF</p>
                  <p class="font-body-sm text-on-surface-variant mb-0" style="font-size: 0.85rem; line-height: 1.5;">
                    Visionary industrialist &amp; cultural patron steering AIFF to global cinematic acclaim.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- 2. Ankushrao Kadam -->
          <div class="col-md-6 col-lg-3">
            <div
              class="team-card h-100 p-3 p-xl-4 rounded-4 d-flex flex-column justify-content-between position-relative overflow-hidden">
              <div class="team-card-img-wrap mb-3 rounded-4 overflow-hidden position-relative"
                style="aspect-ratio: 4/5;">
                <img src="im/team/kadam.jpg" alt="Ankushrao Kadam" class="w-100 h-100 object-fit-cover team-img" />
                <div
                  class="team-badge d-none position-absolute top-0 start-0 m-3 px-3 py-1 rounded-pill font-label-sm fw-bold">
                  CHIEF MENTOR</div>
              </div>
              <div class="team-card-info flex-grow-1 d-flex flex-column justify-content-between">
                <div>
                  <h3 class="font-headline-sm poster-navy-dark fw-bold mb-1">Ankushrao Kadam</h3>
                  <p class="font-label-sm poster-teal-text fw-bold mb-2">CHIEF MENTOR, AIFF</p>
                  <p class="font-body-sm text-on-surface-variant mb-0" style="font-size: 0.85rem; line-height: 1.5;">
                    Trustee &amp; educationist championing regional cinema arts and heritage culture.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- 3. Sunil Sukthankar -->
          <div class="col-md-6 col-lg-3">
            <div
              class="team-card h-100 p-3 p-xl-4 rounded-4 d-flex flex-column justify-content-between position-relative overflow-hidden">
              <div class="team-card-img-wrap mb-3 rounded-4 overflow-hidden position-relative"
                style="aspect-ratio: 4/5;">
                <img src="im/team/Sunil-Sukthankar.jpg" alt="Sunil Sukthankar"
                  class="w-100 h-100 object-fit-cover team-img" />
                <div
                  class="team-badge d-none position-absolute top-0 start-0 m-3 px-3 py-1 rounded-pill font-label-sm fw-bold">
                  FESTIVAL DIRECTOR</div>
              </div>
              <div class="team-card-info flex-grow-1 d-flex flex-column justify-content-between">
                <div>
                  <h3 class="font-headline-sm poster-navy-dark fw-bold mb-1">Sunil Sukthankar</h3>
                  <p class="font-label-sm poster-teal-text fw-bold mb-2">FESTIVAL DIRECTOR</p>
                  <p class="font-body-sm text-on-surface-variant mb-0" style="font-size: 0.85rem; line-height: 1.5;">
                    Acclaimed National Award-winning director guiding the festival's curatorial vision.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- 4. MEET ALL TEAM CTA CARD -->
          <div class="col-md-6 col-lg-3">
            <div
              class="team-cta-card h-100 p-4 rounded-4 d-flex flex-column justify-content-between align-items-center text-center position-relative overflow-hidden">
              <div class="team-cta-glow"></div>
              <div class="my-auto position-relative z-2">
                <div class="team-cta-icon-box mb-3 mx-auto text-white"><span class="material-symbols-outlined">
                    groups
                  </span></div>
                <span class="font-label-sm text-warning fw-bold d-block mb-2" style="letter-spacing: 0.15em;">ORGANIZING
                  COMMITTEE</span>
                <h3 class="font-headline-sm text-white fw-bold mb-3">Meet the Entire AIFF Team</h3>
                <p class="font-body-sm text-light opacity-75 mb-4" style="font-size: 0.85rem;">Explore all committee
                  members, advisors, and curators behind the 12th Edition.</p>
                <a class="btn btn-primary-custom px-4 py-2.5 font-label-sm text-uppercase d-inline-flex align-items-center gap-2 shadow-lg"
                  href="#about-committee">
                  <span>MEET ALL TEAM</span>
                  <span class="material-symbols-outlined" style="font-size: 18px;">arrow_forward</span>
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- SECTION: POWERED BY -->
    <section class="py-5 section-powered-by" id="powered-by" style="background-color: #F8F3EC !important;">
      <div class="container-xxl px-4 px-lg-5 mb-4 text-center">
        <div class="d-inline-flex align-items-center gap-2 mb-2">
          <div style="height: 2px; width: 2.5rem; background: linear-gradient(90deg, #D81B60, #D4AF37);"></div>
          <span class="font-label-sm poster-teal-text fw-bold">PRINCIPAL PRESENTING PARTNER</span>
          <div style="height: 2px; width: 2.5rem; background: linear-gradient(90deg, #D4AF37, #00897B);"></div>
        </div>
        <h3 class="font-headline font-headline-sm poster-navy-dark fw-bold mb-0">POWERED BY</h3>
      </div>

      <div class="container-xxl px-4 px-lg-5 text-center py-2">
        <div class="d-inline-block">
          <div class="px-4 px-md-5 py-3" style="height: auto; min-height: 110px;">
            <img src="im/logos/powered/1.png" alt="Powered By Partner" style=" width: auto; height: auto;" />
          </div>
        </div>
      </div>
    </section>



    <!-- SECTION 14: FESTIVAL EXPERIENCE -->

    <!-- SECTION 15: FINAL CTA -->
    <section class="position-relative py-5 bg-surface-container-lowest overflow-hidden" id="delegates"
      style="padding-top: 8rem; padding-bottom: 8rem;">
      <div class="position-absolute top-0 start-0 w-100 h-100"
        style="background: radial-gradient(circle at center, rgba(147,0,26,0.15), transparent 70%); pointer-events: none;">
      </div>
      <div class="container-xxl px-4 px-lg-5 text-center position-relative" style="max-width: 48rem;">
        <div
          class="d-inline-flex align-items-center gap-2 px-3 py-1 mb-4 bg-surface-container-low border border-primary border-opacity-25">
          <span class="font-label-sm text-primary">NOVEMBER 28 Jan — 01 Feb, 2027</span>
        </div>
        <h2 class="font-display font-display-xl text-on-surface lh-1 mb-4">
          SEE YOU AT <br />
          <span class="fst-italic text-primary fw-normal">THE FESTIVAL.</span>
        </h2>
        <p class="font-body-lg text-on-surface-variant mx-auto mb-5" style="max-width: 36rem;">
          Experience extraordinary stories, visionary filmmakers, and ancient heritage at the 12th Ajanta–Ellora
          International Film Festival. Registrations now open for delegates, cinephiles, and cultural scholars
          worldwide.
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3 mb-5">
          <a class="btn bg-primary text-on-primary px-5 py-3 font-label-md" href="#">REGISTER AS DELEGATE →</a>
          <a class="btn bg-surface-container-high text-on-surface px-5 py-3 font-label-md d-flex align-items-center gap-2"
            href="#">
            <span class="material-symbols-outlined" style="font-size: 18px;">download</span>
            <span>FESTIVAL GUIDE (PDF)</span>
          </a>
        </div>
        <div class="d-flex flex-wrap justify-content-center gap-4 text-outline font-label-sm">
          <span>FIPRESCI ACCREDITED</span><span>•</span>
          <span>NFDC PARTNER FESTIVAL</span><span>•</span>
          <span>GOVERNMENT OF MAHARASHTRA</span>
        </div>
      </div>
    </section>

  </div>
</main>
<?php include "components/footer.php" ?>