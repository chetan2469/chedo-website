/* ============================================================
   Chedo Tech — main.js
   Lightweight interactions only. No frameworks, no dependencies.
   ============================================================ */
(function () {
  "use strict";

  /* Signal that JS is available (enables scroll-reveal styles) */
  document.documentElement.classList.add("js");

  var prefersReducedMotion =
    window.matchMedia &&
    window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  /* ----------------------------------------------------------
     1. Sticky header state
     ---------------------------------------------------------- */
  var header = document.querySelector(".site-header");
  var onScroll = function () {
    if (!header) return;
    if (window.scrollY > 8) header.classList.add("is-scrolled");
    else header.classList.remove("is-scrolled");
  };
  window.addEventListener("scroll", onScroll, { passive: true });
  onScroll();

  /* ----------------------------------------------------------
     2. Mobile navigation
     ---------------------------------------------------------- */
  var menuBtn = document.getElementById("menu-btn");
  var menuPanel = document.getElementById("mobile-menu");
  var menuClose = document.getElementById("menu-close");

  function setMenu(open) {
    if (!menuPanel || !menuBtn) return;
    menuPanel.classList.toggle("open", open);
    menuBtn.setAttribute("aria-expanded", open ? "true" : "false");
    menuBtn.setAttribute("aria-label", open ? "Close menu" : "Open menu");
    if (open && menuClose) menuClose.focus();
  }
  if (menuBtn) {
    menuBtn.addEventListener("click", function () {
      setMenu(!menuPanel.classList.contains("open"));
    });
  }
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") {
      setMenu(false);
      closeCourseDrop();
    }
  });

  /* Mobile "Courses" sub-menu */
  var mobCoursesBtn = document.getElementById("mob-courses-btn");
  var mobCoursesList = document.getElementById("mob-courses-list");
  if (mobCoursesBtn) {
    mobCoursesBtn.addEventListener("click", function () {
      var open = mobCoursesList.classList.toggle("hidden");
      mobCoursesBtn.setAttribute(
        "aria-expanded",
        mobCoursesList.classList.contains("hidden") ? "false" : "true"
      );
    });
  }

  /* ----------------------------------------------------------
     3. Desktop Courses dropdown (click toggle for touch screens)
     ---------------------------------------------------------- */
  var dropBtn = document.getElementById("courses-drop-btn");
  var drop = document.getElementById("courses-drop");
  function closeCourseDrop() {
    if (drop) drop.classList.remove("drop-open");
    if (dropBtn) dropBtn.setAttribute("aria-expanded", "false");
  }
  if (dropBtn && drop) {
    dropBtn.addEventListener("click", function (e) {
      e.stopPropagation();
      var isOpen = drop.classList.toggle("drop-open");
      dropBtn.setAttribute("aria-expanded", isOpen ? "true" : "false");
    });
    document.addEventListener("click", function (e) {
      if (!drop.contains(e.target)) closeCourseDrop();
    });
    drop.addEventListener("keydown", function (e) {
      if (e.key === "Escape") {
        closeCourseDrop();
        dropBtn.focus();
      }
    });
  }

  /* ----------------------------------------------------------
     4. Course explorer filters
     ---------------------------------------------------------- */
  var filterBar = document.getElementById("course-filters");
  if (filterBar) {
    var cards = Array.prototype.slice.call(
      document.querySelectorAll("[data-category]")
    );
    filterBar.addEventListener("click", function (e) {
      var btn = e.target.closest("[data-filter]");
      if (!btn) return;
      var f = btn.getAttribute("data-filter");
      filterBar
        .querySelectorAll("[data-filter]")
        .forEach(function (b) {
          b.setAttribute("aria-pressed", b === btn ? "true" : "false");
        });
      cards.forEach(function (card) {
        var cats = (card.getAttribute("data-category") || "").split(" ");
        var show = f === "all" || cats.indexOf(f) !== -1;
        card.classList.toggle("course-card-hidden", !show);
      });
    });
  }

  /* ----------------------------------------------------------
     5. WhatsApp buttons (course-specific messages)
     ---------------------------------------------------------- */
  var CFG = window.SITE_CONFIG || {};
  var waNum = CFG.whatsapp || "";
  var waLinks = document.querySelectorAll("[data-wa]");
  function waHref(text) {
    return (
      "https://wa.me/" +
      waNum +
      "?text=" +
      encodeURIComponent(text || "Hello Chedo Tech, I would like to know more about your courses.")
    );
  }
  waLinks.forEach(function (el) {
    var msg = el.getAttribute("data-wa-text") || "";
    if (waNum) {
      el.setAttribute("href", waHref(msg));
      el.setAttribute("target", "_blank");
      el.setAttribute("rel", "noopener");
    }
    /* number not configured yet — the pre-generated href already
       points to the contact page with the correct relative path */
  });

  /* Floating WhatsApp button — only show when a number is configured */
  var fab = document.getElementById("wa-fab");
  if (fab && waNum) {
    fab.setAttribute("href", waHref());
    fab.setAttribute("target", "_blank");
    fab.setAttribute("rel", "noopener");
    fab.classList.remove("hidden");
    fab.classList.add("flex");
  } else if (fab) {
    fab.remove();
  }

  /* ----------------------------------------------------------
     6. Contact page enquiry form → WhatsApp
     (Static site: the form opens WhatsApp with the message.
      Nothing is stored or sent to a server.)
     ---------------------------------------------------------- */
  var contactForm = document.getElementById("enquiry-form");
  if (contactForm) {
    contactForm.addEventListener("submit", function (e) {
      e.preventDefault();
      var fd = new FormData(contactForm);
      var name = (fd.get("name") || "").trim();
      var course = (fd.get("course") || "").trim();
      var message = (fd.get("message") || "").trim();
      if (waNum) {
        var text =
          "Hello Chedo Tech, I am " +
          (name || "a prospective student") +
          "." +
          (course ? "\nI am interested in: " + course + "." : "") +
          (message ? "\n" + message : "") +
          "\nPlease share more information.";
        window.open(waHref(text), "_blank", "noopener");
      } else {
        /* WhatsApp number not configured yet — show an honest notice */
        var note = document.getElementById("form-note");
        if (note) {
          note.textContent =
            "WhatsApp is not configured yet. Please use the phone or visit options on this page — or add your WhatsApp number in assets/js/config.js.";
          note.classList.remove("hidden");
        }
      }
    });
  }

  /* ----------------------------------------------------------
     7. Contact details from config
     ---------------------------------------------------------- */
  function setText(sel, val) {
    var el = document.querySelector(sel);
    if (el) el.textContent = val;
  }
  if (CFG) {
    if (CFG.phoneDisplay) {
      setText("[data-phone]", CFG.phoneDisplay);
      var telLinks = document.querySelectorAll("[data-phone-link]");
      telLinks.forEach(function (a) {
        a.setAttribute("href", "tel:" + CFG.phoneTel);
      });
    }
    if (CFG.email) {
      setText("[data-email]", CFG.email);
      document.querySelectorAll("[data-email-link]").forEach(function (a) {
        a.setAttribute("href", "mailto:" + CFG.email);
      });
    }
    if (CFG.address) {
      setText("[data-address]", CFG.address);
    }
    if (CFG.mapsUrl) {
      document.querySelectorAll("[data-maps-link]").forEach(function (a) {
        a.setAttribute("href", CFG.mapsUrl);
        a.setAttribute("target", "_blank");
        a.setAttribute("rel", "noopener");
      });
    }
    if (CFG.mapsEmbed) {
      var mapFrame = document.getElementById("map-frame");
      if (mapFrame) mapFrame.src = CFG.mapsEmbed;
    }
    /* current year in footer */
    var yearEl = document.getElementById("year");
    if (yearEl) yearEl.textContent = new Date().getFullYear();
  }

  /* ----------------------------------------------------------
     8. Reveal on scroll (disabled for reduced motion)
     ---------------------------------------------------------- */
  var revealEls = document.querySelectorAll(".reveal");
  if (revealEls.length && "IntersectionObserver" in window && !prefersReducedMotion) {
    var io = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (en) {
          if (en.isIntersecting) {
            en.target.classList.add("in");
            io.unobserve(en.target);
          }
        });
      },
      { threshold: 0.12, rootMargin: "0px 0px -40px 0px" }
    );
    revealEls.forEach(function (el) {
      io.observe(el);
    });
  } else {
    revealEls.forEach(function (el) {
      el.classList.add("in");
    });
  }
})();

