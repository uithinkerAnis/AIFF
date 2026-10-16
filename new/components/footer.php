<!-- POSTER FOOTER BANNER STRIP -->
<div class="w-100 py-3 text-center font-label-sm shadow-sm"
  style="background-color: var(--primary); color: #ffffff; letter-spacing: 0.2em;">
  <div class="container-xxl px-4 d-flex flex-wrap align-items-center justify-content-between gap-2">
    <span class="fw-bold">MARATHWADA SHORT-FILM COMPETITION · CALL FOR ENTRIES</span>
    <span class="d-none d-md-inline font-monospace">WWW.AIFILMFEST.IN</span>
    <span class="bg-white text-primary px-3 py-1 fw-bold rounded-1"
      style="font-size: 0.7rem; color: var(--primary) !important;">OFFICIAL SELECTION 2026-2027</span>
  </div>
</div>

<!-- FOOTER -->
<footer class="w-100 bg-surface-dark text-on-surface-variant mt-auto"
  style="background-color: #13192B !important; color: #94A3B8 !important;">
  <div class="container-xxl px-4 px-lg-5 pt-5 pb-4">
    <div class="row g-5 pb-5">
      <div class="col-md-4">
        <div class="d-flex align-items-center gap-2 mb-3">
          <img alt="AIFF Festival Monogram Emblem" style="height: 3rem;" src="im/logo-white.png" />
          <!-- <span class="font-headline-sm text-white">AIFF</span> -->
        </div>
        <p class="font-body-sm text-outline mb-3" style="max-width: 20rem; color: #94A3B8 !important;">12th
          Ajanta–Ellora
          International Film Festival. Celebrating global cinematic heritage amidst the monolithic stone legacy of
          Maharashtra.</p>
        <div>
          <span class="font-label-sm text-primary d-block">Edition XII Dates</span>
          <span class="font-headline-sm text-white d-block mt-1">28 Jan — 01 Feb 2027</span>
          <span class="font-body-sm text-outline d-block mt-1" style="color: #94A3B8 !important;">Chhatrapati
            Sambhajinagar, Maharashtra,
            India</span>
        </div>
      </div>
      <div class="col-md-4">
        <span class="font-label-sm text-primary d-block mb-3">Institutional Endorsements</span>
        <ul class="list-unstyled font-body-sm text-outline mb-0" style="color: #CBD5E1 !important;">
          <li class="mb-2">Ministry of Information &amp; Broadcasting, GoI</li>
          <li class="mb-2">Directorate of Cultural Affairs, Government of Maharashtra</li>
          <li class="mb-2">FIPRESCI — International Federation of Film Critics</li>
          <li class="mb-2">National Film Development Corporation (NFDC)</li>
          <li>Marathwada Art &amp; Culture Foundation</li>
        </ul>
      </div>
      <div class="col-md-4">
        <span class="font-label-sm text-primary d-block mb-3">Cinematic Dispatch</span>
        <p class="font-body-sm text-outline mb-3" style="color: #94A3B8 !important;">Receive the official festival
          catalogue, jury slates, and
          screening accreditations.</p>
        <div class="position-relative mb-3">
          <input class="form-control border-0 text-white py-3" style="background-color: #1C233D;" type="email"
            placeholder="Enter your correspondence email" />
          <button
            class="btn btn-sm bg-primary text-white position-absolute end-0 top-50 translate-middle-y me-2 font-label-sm"
            type="button">Join</button>
        </div>
        <div class="d-flex gap-4">
          <a class="font-label-sm text-outline text-decoration-none" style="color: #CBD5E1 !important;"
            href="#">Instagram</a>
          <a class="font-label-sm text-outline text-decoration-none" style="color: #CBD5E1 !important;"
            href="#">Vimeo</a>
          <a class="font-label-sm text-outline text-decoration-none" style="color: #CBD5E1 !important;"
            href="#">Letterboxd</a>
          <a class="font-label-sm text-outline text-decoration-none" style="color: #CBD5E1 !important;"
            href="#">YouTube</a>
        </div>
      </div>
    </div>
    <div
      class="pt-4 d-flex flex-column flex-sm-row align-items-center justify-content-between gap-3 font-body-sm text-outline border-top border-secondary-subtle"
      style="border-color: rgba(255,255,255,0.1) !important;">
      <p class="mb-0" style="color: #64748B;">© 2026 Ajanta–Ellora International Film Festival. All rights reserved. |
        Design by <a href="https://andwecode.in/" target="_blank" style="color:gray">& we code</a>
      </p>
      <div class="d-flex gap-4">
        <a class="font-label-sm text-outline text-decoration-none" style="color: #64748B !important;" href="#">Press
          Accreditation</a>
        <a class="font-label-sm text-outline text-decoration-none" style="color: #64748B !important;"
          href="#">Regulations</a>
        <a class="font-label-sm text-outline text-decoration-none" style="color: #64748B !important;"
          href="#">Privacy</a>
      </div>
    </div>
  </div>
</footer>

<!-- ==========================================================================
       YOUTUBE CINEMATIC TRAILER MODAL
       ========================================================================== -->
<div class="modal fade trailer-modal" id="trailerModal" tabindex="-1" aria-labelledby="trailerModalTitle"
  aria-hidden="true" data-bs-backdrop="true" data-bs-keyboard="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content trailer-modal-content">
      <!-- Modal Header -->
      <div class="modal-header trailer-modal-header border-0">
        <div class="d-flex flex-column">
          <div class="d-flex align-items-center gap-2 mb-1">
            <span class="trailer-badge" id="trailerModalBadge">OFFICIAL TRAILER</span>
            <span class="trailer-submeta" id="trailerModalMeta">AIFF 2026 OFFICIAL SELECTION</span>
          </div>
          <h4 class="modal-title font-headline text-white mb-0" id="trailerModalTitle">Film Trailer</h4>
        </div>
        <button type="button" class="btn-trailer-close" id="trailerModalCloseBtn" data-bs-dismiss="modal"
          aria-label="Close modal" data-cursor="CLOSE">
          <span class="material-symbols-outlined" style="font-size: 20px;">close</span>
        </button>
      </div>

      <!-- Modal Body (16:9 Video Player) -->
      <div class="modal-body p-0 position-relative">
        <div class="trailer-video-wrapper">
          <!-- Loading Stream Indicator -->
          <div class="trailer-loading-placeholder" id="trailerLoadingPlaceholder">
            <div class="spinner-border text-danger" role="status" style="width: 2.75rem; height: 2.75rem;">
              <span class="visually-hidden">Loading trailer...</span>
            </div>
            <span class="mt-3 font-label-sm text-outline" style="letter-spacing: 0.18em;">PREPARING TRAILER
              STREAM...</span>
          </div>
          <!-- YouTube Embed Player with Autoplay -->
          <iframe id="trailerIframe" src="" title="YouTube Trailer Player"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
          </iframe>
        </div>
      </div>

      <!-- Modal Footer -->
      <div class="modal-footer trailer-modal-footer border-0 d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center gap-2">
          <span class="font-label-sm poster-teal-text fw-bold">🪷 AJANTA–ELLORA INTERNATIONAL FILM FESTIVAL</span>
        </div>
        <div class="d-flex gap-2">
          <button type="button" class="btn btn-outline-light btn-sm font-label-sm px-3 py-2" data-bs-dismiss="modal">
            CLOSE
          </button>
          <a href="#schedule" class="btn btn-primary btn-sm font-label-sm px-3 py-2 text-white" data-bs-dismiss="modal">
            BOOK TICKET
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- GSAP & Lenis Homepage Animation Engine -->
<script>
  document.addEventListener("DOMContentLoaded", () => {
    // 1. REGISTER GSAP PLUGINS
    gsap.registerPlugin(ScrollTrigger);

    // 2. INITIALIZE LENIS SMOOTH SCROLL
    const lenis = new Lenis({
      duration: 1.2,
      easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
      smoothWheel: true,
      touchMultiplier: 1.5,
    });

    lenis.on("scroll", ScrollTrigger.update);
    gsap.ticker.add((time) => {
      lenis.raf(time * 1000);
    });
    gsap.ticker.lagSmoothing(0);

    // 3. PRELOADER & HERO OPENING TIMELINE
    const preloader = document.getElementById("preloader");
    const preloaderNum = document.getElementById("preloader-num");
    const preloaderBar = document.getElementById("preloader-bar");

    let counter = { val: 0 };
    const heroTL = gsap.timeline({
      onComplete: () => {
        document.body.classList.add("has-custom-cursor");
      }
    });

    heroTL
      .to(counter, {
        val: 100,
        duration: 1.2,
        ease: "power2.inOut",
        onUpdate: () => {
          if (preloaderNum) preloaderNum.textContent = Math.floor(counter.val).toString().padStart(2, "0");
          if (preloaderBar) preloaderBar.style.width = counter.val + "%";
        }
      })
      .to(preloader, {
        opacity: 0,
        duration: 0.8,
        ease: "power3.inOut",
        onComplete: () => {
          if (preloader) preloader.style.display = "none";
        }
      })
      .from(".hero-img", {
        scale: 1,
        filter: "blur(12px) opacity(0.2)",
        duration: 1.8,
        ease: "power3.out"
      }, "-=0.4")
      .from(".selection-badge", {
        y: -25,
        opacity: 0,
        duration: 0.8,
        ease: "back.out(1.7)"
      }, "-=1.2")
      .to(".hero-title .reveal-text-child", {
        y: "0%",
        rotate: 0,
        duration: 1.2,
        stagger: 0.15,
        ease: "power4.out"
      }, "-=1.0")
      .from(".hero-section p.font-label-md", {
        y: 20,
        opacity: 0,
        duration: 0.8,
        ease: "power3.out"
      }, "-=0.9")
      .from(".hero-section .d-flex.flex-wrap.align-items-center.gap-3.gap-md-4", {
        y: 20,
        opacity: 0,
        duration: 0.8,
        ease: "power3.out"
      }, "-=0.7")
      .fromTo(".hero-section .btn",
        { y: 30, opacity: 0 },
        { y: 0, opacity: 1, stagger: 0.15, duration: 0.8, ease: "back.out(1.5)", clearProps: "opacity,transform" },
        "-=0.6"
      )
      .from(".hero-section .pb-4", {
        y: 20,
        opacity: 0,
        duration: 0.8,
        ease: "power3.out"
      }, "-=0.4");

    // 4. HERO PARALLAX SCROLL EFFECT
    gsap.to(".hero-img", {
      yPercent: 30,
      ease: "none",
      scrollTrigger: {
        trigger: ".hero-section",
        start: "top top",
        end: "bottom top",
        scrub: true
      }
    });

    gsap.to(".hero-title", {
      yPercent: -20,
      opacity: 0.3,
      ease: "none",
      scrollTrigger: {
        trigger: ".hero-section",
        start: "center center",
        end: "bottom top",
        scrub: true
      }
    });

    // 5. CUSTOM MOUSE FOLLOWER & MAGNETIC BUTTONS
    const cursorDot = document.getElementById("cursor-dot");
    const cursorRing = document.getElementById("cursor-ring");
    const cursorLabel = document.getElementById("cursor-label");

    let mouseX = window.innerWidth / 2;
    let mouseY = window.innerHeight / 2;
    let ringX = mouseX;
    let ringY = mouseY;
    let dotX = mouseX;
    let dotY = mouseY;

    window.addEventListener("mousemove", (e) => {
      mouseX = e.clientX;
      mouseY = e.clientY;
    });

    gsap.ticker.add(() => {
      dotX += (mouseX - dotX) * 0.4;
      dotY += (mouseY - dotY) * 0.4;
      ringX += (mouseX - ringX) * 0.15;
      ringY += (mouseY - ringY) * 0.15;

      if (cursorDot) gsap.set(cursorDot, { x: dotX, y: dotY });
      if (cursorRing) gsap.set(cursorRing, { x: ringX, y: ringY });
    });

    const interactables = document.querySelectorAll("button, .btn, a, .programme-item, .gala-card, .jury-card, .module-card, .atmosphere-img");
    interactables.forEach((el) => {
      el.addEventListener("mouseenter", () => {
        let label = el.getAttribute("data-cursor");
        if (!label) {
          const txt = el.textContent.trim().toUpperCase();
          if (txt.includes("BOOK TICKET")) label = "BOOK TICKET";
          else if (txt.includes("VIEW TRAILER")) label = "VIEW TRAILER";
          else if (el.classList.contains("btn-register")) label = "JOIN AIFF";
          else if (el.classList.contains("gala-card")) label = "RESERVE";
          else if (el.classList.contains("jury-card")) label = "PROFILE";
          else if (txt.includes("DOWNLOAD")) label = "DOWNLOAD";
          else if (el.tagName === "BUTTON" || el.classList.contains("btn")) label = "ACTION";
          else label = "EXPLORE";
        }

        if (cursorLabel) cursorLabel.textContent = label;
        document.body.classList.add("cursor-hover-active");
        if (el.classList.contains("gala-card") || el.classList.contains("atmosphere-img")) {
          document.body.classList.add("cursor-hover-media");
        }
      });

      el.addEventListener("mouseleave", () => {
        document.body.classList.remove("cursor-hover-active", "cursor-hover-media");
      });
    });

    // Magnetic Buttons Physics
    const magneticEls = document.querySelectorAll(".btn-primary-custom, .btn-secondary-custom, .btn-register");
    magneticEls.forEach((btn) => {
      btn.addEventListener("mousemove", (e) => {
        const rect = btn.getBoundingClientRect();
        const relX = e.clientX - (rect.left + rect.width / 2);
        const relY = e.clientY - (rect.top + rect.height / 2);
        gsap.to(btn, {
          x: relX * 0.35,
          y: relY * 0.35,
          duration: 0.3,
          ease: "power2.out"
        });
      });

      btn.addEventListener("mouseleave", () => {
        gsap.to(btn, {
          x: 0,
          y: 0,
          duration: 0.5,
          ease: "elastic.out(1, 0.4)"
        });
      });
    });

    // 6. SCROLLTRIGGER REVEAL ANIMATIONS FOR ALL SECTIONS
    const sectionHeadings = document.querySelectorAll("h2.font-headline-lg, .font-headline-md");
    sectionHeadings.forEach((title) => {
      gsap.from(title, {
        y: 40,
        opacity: 0,
        duration: 1,
        ease: "power3.out",
        scrollTrigger: {
          trigger: title,
          start: "top 85%",
          toggleActions: "play none none reverse"
        }
      });
    });

    // Film Cards Stagger
    gsap.from("#films .film-card", {
      y: 60,
      opacity: 0,
      stagger: 0.12,
      duration: 0.9,
      ease: "power3.out",
      scrollTrigger: {
        trigger: "#films .row",
        start: "top 80%"
      }
    });

    // 3D Tilt on Film, Gala, Award & Team Cards
    const tiltCards = document.querySelectorAll(".film-card, .gala-card, .award-hero-card, .award-mini-card, .team-card, .team-cta-card");
    tiltCards.forEach((card) => {
      card.addEventListener("mousemove", (e) => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left - rect.width / 2;
        const y = e.clientY - rect.top - rect.height / 2;
        gsap.to(card, {
          rotateY: x * 0.04,
          rotateX: -y * 0.04,
          transformPerspective: 1000,
          ease: "power1.out",
          duration: 0.4
        });
      });

      card.addEventListener("mouseleave", () => {
        gsap.to(card, {
          rotateY: 0,
          rotateX: 0,
          ease: "power2.out",
          duration: 0.6
        });
      });
    });

    // Awards Section GSAP Stagger Entrance
    gsap.from(".award-hero-card", {
      x: -40,
      opacity: 0,
      duration: 1,
      ease: "power3.out",
      clearProps: "all",
      scrollTrigger: {
        trigger: "#awards",
        start: "top 80%"
      }
    });

    gsap.from(".award-mini-card", {
      y: 40,
      opacity: 0,
      stagger: 0.08,
      duration: 0.8,
      ease: "power3.out",
      clearProps: "all",
      scrollTrigger: {
        trigger: "#awards",
        start: "top 80%"
      }
    });

    // Animated Stat Counters
    const countElements = document.querySelectorAll(".font-headline-lg");
    countElements.forEach((cnt) => {
      const text = cnt.innerText.trim();
      const match = text.match(/(\d+)/);
      if (match && !cnt.dataset.animated) {
        const targetNum = parseInt(match[1]);
        const suffix = text.replace(match[1], "");

        ScrollTrigger.create({
          trigger: cnt,
          start: "top 85%",
          onEnter: () => {
            let countObj = { val: 0 };
            gsap.to(countObj, {
              val: targetNum,
              duration: 2,
              ease: "power2.out",
              onUpdate: () => {
                cnt.innerHTML = Math.floor(countObj.val) + suffix;
              }
            });
            cnt.dataset.animated = "true";
          }
        });
      }
    });

    // Padmapani Slider Entrance Animation
    gsap.from(".padmapani-marquee-container", {
      y: 40,
      opacity: 0,
      duration: 1,
      ease: "power3.out",
      scrollTrigger: {
        trigger: "#padmapani-award",
        start: "top 85%"
      }
    });

    // Programme Item Stagger
    gsap.from(".programme-item", {
      x: -40,
      opacity: 0,
      stagger: 0.08,
      duration: 0.8,
      ease: "power3.out",
      scrollTrigger: {
        trigger: "#programme",
        start: "top 75%"
      }
    });

    // Gala Cards Stagger
    gsap.from(".gala-card", {
      y: 50,
      opacity: 0,
      stagger: 0.15,
      duration: 1,
      ease: "power3.out",
      scrollTrigger: {
        trigger: ".gala-card",
        start: "top 80%"
      }
    });

    // Team Cards Stagger Animation
    gsap.from(".team-card, .team-cta-card", {
      y: 40,
      opacity: 0,
      stagger: 0.12,
      duration: 0.8,
      ease: "power3.out",
      clearProps: "all",
      scrollTrigger: {
        trigger: "#about-committee",
        start: "top 75%"
      }
    });

    // Atmosphere Images Stagger
    gsap.from(".atmosphere-img", {
      scale: 1.2,
      opacity: 0,
      stagger: 0.1,
      duration: 1,
      ease: "power2.out",
      scrollTrigger: {
        trigger: ".atmosphere-img",
        start: "top 85%"
      }
    });

    // Header Scroll Effect
    const header = document.querySelector("header");
    if (header) {
      ScrollTrigger.create({
        start: "top -50",
        onUpdate: (self) => {
          if (self.direction === 1) {
            header.classList.add("header-scrolled");
          } else if (self.scroll() < 50) {
            header.classList.remove("header-scrolled");
          }
        }
      });
    }

    // ==========================================================================
    // 8. FILM TRAILER MODAL WITH YOUTUBE AUTOPLAY & DYNAMIC CARD URLS
    // ==========================================================================
    const trailerModalEl = document.getElementById("trailerModal");
    const trailerIframe = document.getElementById("trailerIframe");
    const trailerModalTitle = document.getElementById("trailerModalTitle");
    const trailerModalMeta = document.getElementById("trailerModalMeta");
    const trailerModalBadge = document.getElementById("trailerModalBadge");
    const trailerLoadingPlaceholder = document.getElementById("trailerLoadingPlaceholder");

    let trailerModalInstance = null;
    if (trailerModalEl && typeof bootstrap !== "undefined") {
      trailerModalInstance = new bootstrap.Modal(trailerModalEl, {
        keyboard: true,
        backdrop: true
      });
    }

    // Helper function to extract 11-char YouTube ID from any format or URL
    function extractYouTubeVideoId(input) {
      if (!input) return "Way9Dexny3w";
      const trimmed = input.trim();
      if (/^[a-zA-Z0-9_-]{11}$/.test(trimmed)) {
        return trimmed;
      }
      const match = trimmed.match(/(?:youtu\.be\/|youtube\.com\/(?:embed\/|v\/|watch\?v=|watch\?.+&v=))([\w-]{11})/);
      return match && match[1] ? match[1] : "Way9Dexny3w";
    }

    // Function to open modal and start autoplaying video
    function openTrailer(triggerEl) {
      const card = triggerEl.closest(".film-card");
      const trailerSrc = triggerEl.getAttribute("data-trailer-src") ||
        (card ? card.getAttribute("data-trailer-src") : null) ||
        "https://www.youtube.com/watch?v=Way9Dexny3w";

      const title = triggerEl.getAttribute("data-trailer-title") ||
        (card ? card.querySelector("h3")?.textContent.trim() : null) ||
        "Official Trailer";

      const meta = triggerEl.getAttribute("data-trailer-meta") ||
        (card ? card.querySelector(".pt-3 span.fst-italic")?.textContent.trim() : null) ||
        "AIFF 2026 Official Selection";

      const badge = triggerEl.getAttribute("data-trailer-badge") ||
        (card ? card.querySelector(".position-absolute.top-0")?.textContent.trim() : null) ||
        "OFFICIAL TRAILER";

      const videoId = extractYouTubeVideoId(trailerSrc);
      // Autoplay enabled with sound & inline streaming
      const embedUrl = `https://www.youtube-nocookie.com/embed/${videoId}?autoplay=1&mute=0&rel=0&playsinline=1&enablejsapi=1`;

      if (trailerModalTitle) trailerModalTitle.textContent = title;
      if (trailerModalMeta) trailerModalMeta.textContent = meta;
      if (trailerModalBadge) trailerModalBadge.textContent = badge;

      if (trailerLoadingPlaceholder) {
        trailerLoadingPlaceholder.classList.remove("loaded");
      }

      if (trailerIframe) {
        trailerIframe.onload = () => {
          if (trailerLoadingPlaceholder) {
            trailerLoadingPlaceholder.classList.add("loaded");
          }
        };
        trailerIframe.src = embedUrl;
      }

      // Temporarily pause Lenis scroll while viewing trailer
      if (typeof lenis !== "undefined" && lenis) {
        lenis.stop();
      }

      if (trailerModalInstance) {
        trailerModalInstance.show();
      }
    }

    // Function to immediately stop video & audio when modal closes
    function stopTrailer() {
      if (trailerIframe) {
        trailerIframe.src = "";
      }
      if (trailerLoadingPlaceholder) {
        trailerLoadingPlaceholder.classList.remove("loaded");
      }
      // Resume Lenis smooth scroll
      if (typeof lenis !== "undefined" && lenis) {
        lenis.start();
      }
    }

    if (trailerModalEl) {
      trailerModalEl.addEventListener("hidden.bs.modal", stopTrailer);
    }

    // Event delegation for all VIEW TRAILER buttons & poster play triggers
    document.addEventListener("click", (e) => {
      const trailerBtn = e.target.closest(".view-trailer-btn");
      if (trailerBtn) {
        e.preventDefault();
        openTrailer(trailerBtn);
      }
    });
  });
</script>
</body>

</html>