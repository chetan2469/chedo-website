# Chedo Tech — Static Website

Production-ready, multi-page static website for **Chedo Tech — Programming Institute & App Development** (Pune).

**Offline. Practical. Project-Based. Teaching programming practically since 2015.**

Built with plain **HTML5 + Tailwind CSS (compiled) + vanilla JavaScript**. No frameworks, no backend, no database — deployable to any static host (Apache, Nginx, cPanel, GitHub Pages, Netlify, Cloudflare Pages).

---

## Quick start

```bash
# serve the finished site (no build step required)
cd chedo-tech
python3 -m http.server 8080        # or any static server
```

To regenerate everything from the source content (after editing content or templates):

```bash
npm install                         # tailwindcss only
python3 build/gen.py                # regenerate all HTML, robots.txt, sitemap.xml
npx @tailwindcss/cli -i src/main.css -o assets/css/main.css --minify
```

## Site structure

```
/
├── index.html                      # homepage
├── courses.html                    # course catalog + learning paths
├── about.html
├── contact.html                    # enquiry form → WhatsApp, config-driven details
├── privacy-policy.html
├── 404.html
├── robots.txt
├── sitemap.xml                     # https://chedo.in/ production URLs
├── courses/                        # 12 course pages (each with full curriculum)
│   ├── c-programming.html
│   ├── cpp-programming.html
│   ├── java-programming.html
│   ├── python-programming.html
│   ├── data-structures-algorithms.html
│   ├── mern-full-stack.html
│   ├── java-full-stack.html
│   ├── mobile-app-development.html
│   ├── data-science-foundation.html
│   ├── data-science.html
│   ├── ui-ux-design.html
│   └── kids-programming.html
└── assets/
    ├── css/main.css                # compiled Tailwind + design system
    ├── js/config.js                # ⚙ SITE_CONFIG — edit this
    ├── js/main.js                  # nav, filters, WhatsApp, reveal, form
    ├── fonts/inter-latin.woff2     # self-hosted Inter (variable)
    ├── fonts/inter-latin-ext.woff2
    ├── icons/                      # lucide-style inline SVGs
    └── images/
        ├── logo-mark.svg
        ├── favicon.svg
        ├── apple-touch-icon.png
        └── og-image.png            # 1200×630 social preview
```

Build tooling (not required at runtime):

```
build/
├── data.py      # all site content (curricula, testimonials, features…)
├── gen.py       # static site generator (python3 build/gen.py)
├── make_images.py
└── qa.py        # automated QA: links, overflow, console errors, SEO
src/main.css     # Tailwind CSS v4 source (compiled into assets/css/main.css)
```

## ⚙ Updating contact details

All contact values live in **one file**: `assets/js/config.js`

```js
const SITE_CONFIG = {
  whatsapp: "",        // e.g. "919876543210"  (digits only, with country code)
  phoneDisplay: "",    // e.g. "+91 98765 43210"
  phoneTel: "",        // e.g. "+919876543210"
  email: "",           // e.g. "hello@chedo.in"
  address: "",         // e.g. "2nd Floor, ABC Plaza, Main Road, Pune"
  mapsUrl: "",         // Google Maps link
  mapsEmbed: "",       // Google Maps embed src (shows map on contact page)
};
```

- WhatsApp buttons on every page and the contact-page enquiry form use `whatsapp`.
- Until a number is configured, buttons gracefully fall back to the contact page and the form shows an honest notice (no fake submission, no broken links).
- The floating WhatsApp button appears only when a number is configured.

## Content notes

- All content (courses, curricula, features, testimonials, projects) is taken from the
  recovered Chedo Tech source file. Nothing was invented: **no fake statistics, no fees,
  no placement claims, no extra testimonials, no fake photos**.
- The old placeholder FAQ was removed entirely (no legitimate FAQ content existed).
- Duplicated source sections (repeated course listings, duplicated Data Science program)
  were merged into single authoritative pages.

## SEO / performance

- Unique `<title>` + meta description + canonical (`https://chedo.in/...`) + Open Graph + Twitter cards on every page.
- JSON-LD: `EducationalOrganization` + `WebSite` (home), `Course` + `BreadcrumbList` (course pages), `ItemList`, `CollectionPage`, `ContactPage`.
- Semantic HTML, one H1 per page, breadcrumbs (visible + schema), meaningful internal linking.
- Self-hosted fonts (no external requests), preloaded font, deferred JS, inlined SVG icons,
  minified compiled CSS. Homepage ≈ 52 KB transferred (gzipped), 6 requests, LCP-friendly.
- `robots.txt` + `sitemap.xml` for `https://chedo.in/` — update the domain in `build/data.py` (`DOMAIN`) and regenerate if it changes.

## Testing

```bash
python3 build/qa.py   # loads every page at 7 viewports: console errors, overflow,
                      # broken links, SEO sanity + screenshots into /home/user/qa-shots
```

Current status: 0 console errors, 0 horizontal overflow (320–1440 px), 0 broken links,
0 SEO issues, 0 axe-core accessibility violations across all 18 pages.

---

© Chedo Tech. All rights reserved.
