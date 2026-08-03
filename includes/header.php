<?php
$page_title = $page_title ?? "Chedo Tech | Programming Institute in Pune";
$page_description = $page_description ?? "Chedo Tech is a programming institute & app development center in Pune offering offline, practical programming education since 2015 — C, Python, Java, Full Stack, Data Science, Mobile, UI/UX and Kids Programming.";
$page_canonical = $page_canonical ?? "https://chedo.in/";
$page_type = $page_type ?? "website";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo htmlspecialchars($page_title); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
  <link rel="canonical" href="<?php echo htmlspecialchars($page_canonical); ?>">
  <link rel="icon" type="image/png" href="assets/logo.png">
  <link rel="apple-touch-icon" href="assets/logo.png">
  <script>
    // Dark mode removed as per request
  </script>
  <meta property="og:type" content="<?php echo htmlspecialchars($page_type); ?>">
  <meta property="og:site_name" content="Chedo Tech">
  <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta property="og:url" content="<?php echo htmlspecialchars($page_canonical); ?>">
  <meta property="og:image" content="https://chedo.in/assets/images/og-image.png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta name="twitter:image" content="https://chedo.in/assets/images/og-image.png">
  <link rel="preload" href="assets/fonts/inter-latin.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="assets/css/main.css">
  <script defer src="assets/js/config.js"></script>
  <script defer src="assets/js/main.js"></script>
  <script type="application/ld+json">{"@context": "https://schema.org", "@type": "EducationalOrganization", "name": "Chedo Tech", "alternateName": "Chedo Tech — Programming Institute & App Development", "url": "https://chedo.in/", "logo": "https://chedo.in/assets/logo.png", "description": "Programming Institute & App Development in Pune — offline, practical programming education since 2015, from basics to full stack and real projects.", "foundingDate": "2015", "address": {"@type": "PostalAddress", "addressLocality": "Pune", "addressCountry": "IN"}}</script><script type="application/ld+json">{"@context": "https://schema.org", "@type": "WebSite", "name": "Chedo Tech", "url": "https://chedo.in/"}</script><script type="application/ld+json">{"@context": "https://schema.org", "@type": "ItemList", "name": "Chedo Tech Courses", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "C Programming", "url": "https://chedo.in/courses/c-programming.html"}, {"@type": "ListItem", "position": 2, "name": "C++ Programming", "url": "https://chedo.in/courses/cpp-programming.html"}, {"@type": "ListItem", "position": 3, "name": "Java Programming", "url": "https://chedo.in/courses/java-programming.html"}, {"@type": "ListItem", "position": 4, "name": "Python Programming", "url": "https://chedo.in/courses/python-programming.html"}, {"@type": "ListItem", "position": 5, "name": "Data Structures & Algorithms", "url": "https://chedo.in/courses/data-structures-algorithms.html"}, {"@type": "ListItem", "position": 6, "name": "MERN Full Stack Development", "url": "https://chedo.in/courses/mern-full-stack.html"}, {"@type": "ListItem", "position": 7, "name": "Java Full Stack Development", "url": "https://chedo.in/courses/java-full-stack.html"}, {"@type": "ListItem", "position": 8, "name": "Mobile App Development (Flutter)", "url": "https://chedo.in/courses/mobile-app-development.html"}, {"@type": "ListItem", "position": 9, "name": "Data Science Foundation", "url": "https://chedo.in/courses/data-science-foundation.html"}, {"@type": "ListItem", "position": 10, "name": "Data Science", "url": "https://chedo.in/courses/data-science.html"}, {"@type": "ListItem", "position": 11, "name": "UI/UX Design", "url": "https://chedo.in/courses/ui-ux-design.html"}, {"@type": "ListItem", "position": 12, "name": "Kids Programming", "url": "https://chedo.in/courses/kids-programming.html"}]}</script></head>

<a class="skip-link" href="#main">Skip to main content</a>
<header class="site-header" id="site-header">
  <div class="mx-auto flex h-16 max-w-7xl items-center justify-between gap-4 px-5 sm:px-8">
    <a href="index.php" class="flex shrink-0 items-center gap-2.5" aria-label="Chedo Tech — Home">
      <img src="assets/logo.png" alt="Chedo Tech Logo" width="38" height="38" class="h-9 w-9 object-contain">
      <span class="text-lg font-extrabold tracking-tight text-slate-900 dark:text-white">Chedo<span class="text-blue-600">Tech</span></span>
    </a>

    <nav class="hidden items-center gap-0.5 lg:flex ml-auto" aria-label="Main navigation">
      <a class="nav-link active" href="index.php">Home</a>
      <div class="dropdown relative" id="courses-drop">
        <button id="courses-drop-btn" class="nav-link flex items-center gap-1" aria-haspopup="true" aria-expanded="false">
          Courses
          <svg class="h-4 w-4 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
        </button>
        <div class="dropdown-panel" role="menu" aria-label="Courses">
          <div class="grid grid-cols-2 gap-x-4 gap-y-3"><div><p class="drop-head">Programming</p><div class="grid gap-0.5"><a class="dropdown-link" href="courses/c-programming.php"><span class="drop-icon"><!-- @license lucide-static v1.28.0 - ISC -->
<svg aria-hidden="true" focusable="false"
  class="h-[18px] w-[18px]"
  xmlns="http://www.w3.org/2000/svg"
  width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <path d="M8 3H7a2 2 0 0 0-2 2v5a2 2 0 0 1-2 2 2 2 0 0 1 2 2v5c0 1.1.9 2 2 2h1" />
  <path d="M16 21h1a2 2 0 0 0 2-2v-5c0-1.1.9-2 2-2a2 2 0 0 1-2-2V5a2 2 0 0 0-2-2h-1" />
</svg>
</span><span class="text-sm font-medium text-slate-700">C Programming</span></a><a class="dropdown-link" href="courses/cpp-programming.php"><span class="drop-icon"><!-- @license lucide-static v1.28.0 - ISC -->
<svg aria-hidden="true" focusable="false"
  class="h-[18px] w-[18px]"
  xmlns="http://www.w3.org/2000/svg"
  width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <path d="m18 16 4-4-4-4" />
  <path d="m6 8-4 4 4 4" />
  <path d="m14.5 4-5 16" />
</svg>
</span><span class="text-sm font-medium text-slate-700">C++ Programming</span></a><a class="dropdown-link" href="courses/java-programming.php"><span class="drop-icon"><!-- @license lucide-static v1.28.0 - ISC -->
<svg aria-hidden="true" focusable="false"
  class="h-[18px] w-[18px]"
  xmlns="http://www.w3.org/2000/svg"
  width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <path d="M10 2v2" />
  <path d="M14 2v2" />
  <path d="M16 8a1 1 0 0 1 1 1v8a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4V9a1 1 0 0 1 1-1h14a4 4 0 1 1 0 8h-1" />
  <path d="M6 2v2" />
</svg>
</span><span class="text-sm font-medium text-slate-700">Java Programming</span></a><a class="dropdown-link" href="courses/python-programming.php"><span class="drop-icon"><!-- @license lucide-static v1.28.0 - ISC -->
<svg aria-hidden="true" focusable="false"
  class="h-[18px] w-[18px]"
  xmlns="http://www.w3.org/2000/svg"
  width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z" />
  <path d="M14 2v5a1 1 0 0 0 1 1h5" />
  <path d="M10 12.5 8 15l2 2.5" />
  <path d="m14 12.5 2 2.5-2 2.5" />
</svg>
</span><span class="text-sm font-medium text-slate-700">Python Programming</span></a><a class="dropdown-link" href="courses/data-structures-algorithms.php"><span class="drop-icon"><!-- @license lucide-static v1.28.0 - ISC -->
<svg aria-hidden="true" focusable="false"
  class="h-[18px] w-[18px]"
  xmlns="http://www.w3.org/2000/svg"
  width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <rect x="16" y="16" width="6" height="6" rx="1" />
  <rect x="2" y="16" width="6" height="6" rx="1" />
  <rect x="9" y="2" width="6" height="6" rx="1" />
  <path d="M5 16v-3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3" />
  <path d="M12 12V8" />
</svg>
</span><span class="text-sm font-medium text-slate-700">Data Structures & Algorithms</span></a></div></div><div><p class="drop-head">Development</p><div class="grid gap-0.5"><a class="dropdown-link" href="courses/mern-full-stack.php"><span class="drop-icon"><!-- @license lucide-static v1.28.0 - ISC -->
<svg aria-hidden="true" focusable="false"
  class="h-[18px] w-[18px]"
  xmlns="http://www.w3.org/2000/svg"
  width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="12" cy="12" r="10" />
  <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20" />
  <path d="M2 12h20" />
</svg>
</span><span class="text-sm font-medium text-slate-700">MERN Full Stack</span></a><a class="dropdown-link" href="courses/java-full-stack.php"><span class="drop-icon"><!-- @license lucide-static v1.28.0 - ISC -->
<svg aria-hidden="true" focusable="false"
  class="h-[18px] w-[18px]"
  xmlns="http://www.w3.org/2000/svg"
  width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <rect width="20" height="8" x="2" y="2" rx="2" ry="2" />
  <rect width="20" height="8" x="2" y="14" rx="2" ry="2" />
  <line x1="6" x2="6.01" y1="6" y2="6" />
  <line x1="6" x2="6.01" y1="18" y2="18" />
</svg>
</span><span class="text-sm font-medium text-slate-700">Java Full Stack</span></a><a class="dropdown-link" href="courses/mobile-app-development.php"><span class="drop-icon"><!-- @license lucide-static v1.28.0 - ISC -->
<svg aria-hidden="true" focusable="false"
  class="h-[18px] w-[18px]"
  xmlns="http://www.w3.org/2000/svg"
  width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <rect width="14" height="20" x="5" y="2" rx="2" ry="2" />
  <path d="M12 18h.01" />
</svg>
</span><span class="text-sm font-medium text-slate-700">Mobile App Development</span></a></div></div><div><p class="drop-head">Data & Design</p><div class="grid gap-0.5"><a class="dropdown-link" href="courses/data-science-foundation.php"><span class="drop-icon"><!-- @license lucide-static v1.28.0 - ISC -->
<svg aria-hidden="true" focusable="false"
  class="h-[18px] w-[18px]"
  xmlns="http://www.w3.org/2000/svg"
  width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <path d="M12 3v18" />
  <rect width="18" height="18" x="3" y="3" rx="2" />
  <path d="M3 9h18" />
  <path d="M3 15h18" />
</svg>
</span><span class="text-sm font-medium text-slate-700">Data Science Foundation</span></a><a class="dropdown-link" href="courses/data-science.php"><span class="drop-icon"><!-- @license lucide-static v1.28.0 - ISC -->
<svg aria-hidden="true" focusable="false"
  class="h-[18px] w-[18px]"
  xmlns="http://www.w3.org/2000/svg"
  width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <path d="M14 2v6a2 2 0 0 0 .245.96l5.51 10.08A2 2 0 0 1 18 22H6a2 2 0 0 1-1.755-2.96l5.51-10.08A2 2 0 0 0 10 8V2" />
  <path d="M6.453 15h11.094" />
  <path d="M8.5 2h7" />
</svg>
</span><span class="text-sm font-medium text-slate-700">Data Science</span></a><a class="dropdown-link" href="courses/ui-ux-design.php"><span class="drop-icon"><!-- @license lucide-static v1.28.0 - ISC -->
<svg aria-hidden="true" focusable="false"
  class="h-[18px] w-[18px]"
  xmlns="http://www.w3.org/2000/svg"
  width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <path d="M12 22a1 1 0 0 1 0-20 10 9 0 0 1 10 9 5 5 0 0 1-5 5h-2.25a1.75 1.75 0 0 0-1.4 2.8l.3.4a1.75 1.75 0 0 1-1.4 2.8z" />
  <circle cx="13.5" cy="6.5" r=".5" fill="currentColor" />
  <circle cx="17.5" cy="10.5" r=".5" fill="currentColor" />
  <circle cx="6.5" cy="12.5" r=".5" fill="currentColor" />
  <circle cx="8.5" cy="7.5" r=".5" fill="currentColor" />
</svg>
</span><span class="text-sm font-medium text-slate-700">UI/UX Design</span></a></div></div><div><p class="drop-head">Kids</p><div class="grid gap-0.5"><a class="dropdown-link" href="courses/kids-programming.php"><span class="drop-icon"><!-- @license lucide-static v1.28.0 - ISC -->
<svg aria-hidden="true" focusable="false"
  class="h-[18px] w-[18px]"
  xmlns="http://www.w3.org/2000/svg"
  width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <line x1="6" x2="10" y1="11" y2="11" />
  <line x1="8" x2="8" y1="9" y2="13" />
  <line x1="15" x2="15.01" y1="12" y2="12" />
  <line x1="18" x2="18.01" y1="10" y2="10" />
  <path d="M17.32 5H6.68a4 4 0 0 0-3.978 3.59c-.006.052-.01.101-.017.152C2.604 9.416 2 14.456 2 16a3 3 0 0 0 3 3c1 0 1.5-.5 2-1l1.414-1.414A2 2 0 0 1 9.828 16h4.344a2 2 0 0 1 1.414.586L17 18c.5.5 1 1 2 1a3 3 0 0 0 3-3c0-1.545-.604-6.584-.685-7.258-.007-.05-.011-.1-.017-.151A4 4 0 0 0 17.32 5z" />
</svg>
</span><span class="text-sm font-medium text-slate-700">Kids Programming</span></a></div></div></div>
          <a class="mt-3 flex items-center justify-between rounded-xl bg-slate-50 px-4 py-3 text-sm font-semibold text-blue-700 transition-colors hover:bg-blue-50" href="courses.php">
            View all courses
            <!-- @license lucide-static v1.28.0 - ISC -->
<svg aria-hidden="true" focusable="false"
  class="h-4 w-4"
  xmlns="http://www.w3.org/2000/svg"
  width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <path d="M5 12h14" />
  <path d="m12 5 7 7-7 7" />
</svg>

          </a>
        </div>
      </div>
      <a class="nav-link" href="about.php">About</a>
      <a class="nav-link" href="contact.php">Contact</a>
      <a class="btn-primary ml-3 !px-5 !py-2.5 !min-h-0" href="contact.php">Enquire Now</a>
    </nav>

    <div class="flex items-center gap-2">

      <button id="menu-btn" class="flex h-11 w-11 items-center justify-center rounded-xl border border-slate-200 bg-white text-slate-700 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200 lg:hidden" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-menu">
      <!-- @license lucide-static v1.28.0 - ISC -->
<svg aria-hidden="true" focusable="false"
  class="h-5 w-5"
  xmlns="http://www.w3.org/2000/svg"
  width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <path d="M4 5h16" />
  <path d="M4 12h16" />
  <path d="M4 19h16" />
</svg>

    </button>
  </div>

  <div id="mobile-menu" class="mobile-panel lg:hidden">
    <nav aria-label="Mobile navigation" class="px-5 py-4">
      <a class="mob-link" href="index.php">Home</a>
      <button id="mob-courses-btn" class="mob-link justify-between" aria-expanded="false" aria-controls="mob-courses-list">
        Courses
        <!-- @license lucide-static v1.28.0 - ISC -->
<svg aria-hidden="true" focusable="false"
  class="h-4 w-4 text-slate-400"
  xmlns="http://www.w3.org/2000/svg"
  width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <path d="m6 9 6 6 6-6" />
</svg>

      </button>
      <div id="mob-courses-list" class="hidden border-l-2 border-slate-100 pb-2 pl-3">
        <p class="drop-head">Programming</p><a class="mob-sub-link" href="courses/c-programming.php">C Programming</a><a class="mob-sub-link" href="courses/cpp-programming.php">C++ Programming</a><a class="mob-sub-link" href="courses/java-programming.php">Java Programming</a><a class="mob-sub-link" href="courses/python-programming.php">Python Programming</a><a class="mob-sub-link" href="courses/data-structures-algorithms.php">Data Structures & Algorithms</a><p class="drop-head">Development</p><a class="mob-sub-link" href="courses/mern-full-stack.php">MERN Full Stack</a><a class="mob-sub-link" href="courses/java-full-stack.php">Java Full Stack</a><a class="mob-sub-link" href="courses/mobile-app-development.php">Mobile App Development</a><p class="drop-head">Data & Design</p><a class="mob-sub-link" href="courses/data-science-foundation.php">Data Science Foundation</a><a class="mob-sub-link" href="courses/data-science.php">Data Science</a><a class="mob-sub-link" href="courses/ui-ux-design.php">UI/UX Design</a><p class="drop-head">Kids</p><a class="mob-sub-link" href="courses/kids-programming.php">Kids Programming</a>
      </div>
      <a class="mob-link" href="about.php">About</a>
      <a class="mob-link" href="contact.php">Contact</a>
      <a class="btn-primary mt-3 w-full" href="contact.php">Enquire Now</a>
    </nav>
  </div>
</header>
