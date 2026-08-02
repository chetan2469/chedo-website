<?php 
require_once __DIR__ . '/functions.php'; 
$settings = get_settings();
$categories_nav = get_categories();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo isset($page_title) ? esc($page_title) . ' | ' : ''; ?>Chedo Tech | Programming Institute in Pune</title>
  <meta name="description" content="<?php echo esc($meta_desc ?? 'Chedo Tech is a programming institute & app development center in Pune offering offline, practical programming education since 2015.'); ?>">
  <link rel="icon" type="image/png" href="/assets/ico.png">
  <link rel="stylesheet" href="/assets/css/main.css">
  <script>
    // Default: Always Light Mode unless user explicitly toggled Dark Mode
    if (localStorage.getItem('theme') === 'dark') {
      document.documentElement.classList.add('dark');
    }
  </script>
  <script defer src="/assets/js/config.js"></script>
  <script defer src="/assets/js/main.js"></script>
</head>
<body class="bg-white font-sans text-slate-900 antialiased">

<a class="skip-link" href="#main">Skip to main content</a>

<!-- Site Header -->
<header class="site-header" id="site-header">
  <div class="mx-auto flex h-16 max-w-7xl items-center justify-between gap-4 px-5 sm:px-8">
    <a href="/" class="flex shrink-0 items-center gap-2.5" aria-label="Chedo Tech — Home">
      <img src="/assets/logo.png" alt="Chedo Tech Logo" width="36" height="36" class="h-9 w-9 object-contain">
      <span class="text-lg font-extrabold tracking-tight text-slate-900">Chedo<span class="text-blue-600">Tech</span></span>
    </a>

    <nav class="hidden items-center gap-1 lg:flex" aria-label="Main navigation">
      <a class="nav-link" href="/">Home</a>
      
      <!-- Courses Dropdown -->
      <div class="dropdown relative" id="courses-drop">
        <button id="courses-drop-btn" class="nav-link flex items-center gap-1" aria-haspopup="true" aria-expanded="false">
          Courses
          <svg class="h-4 w-4 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
        </button>
        <div class="dropdown-panel" role="menu" aria-label="Courses">
          <div class="grid grid-cols-2 gap-x-4 gap-y-3">
            <div>
              <p class="drop-head">Programming</p>
              <div class="grid gap-0.5">
                <a class="dropdown-link" href="/courses/c-programming.php">
                  <span class="drop-icon">⚡</span>
                  <span class="text-sm font-medium text-slate-700">C Programming</span>
                </a>
                <a class="dropdown-link" href="/courses/cpp-programming.php">
                  <span class="drop-icon">⚡</span>
                  <span class="text-sm font-medium text-slate-700">C++ Programming</span>
                </a>
                <a class="dropdown-link" href="/courses/java-programming.php">
                  <span class="drop-icon">⚡</span>
                  <span class="text-sm font-medium text-slate-700">Java Programming</span>
                </a>
                <a class="dropdown-link" href="/courses/python-programming.php">
                  <span class="drop-icon">⚡</span>
                  <span class="text-sm font-medium text-slate-700">Python Programming</span>
                </a>
                <a class="dropdown-link" href="/courses/data-structures-algorithms.php">
                  <span class="drop-icon">⚡</span>
                  <span class="text-sm font-medium text-slate-700">Data Structures &amp; Algorithms</span>
                </a>
              </div>
            </div>
            <div>
              <p class="drop-head">Full Stack &amp; Apps</p>
              <div class="grid gap-0.5">
                <a class="dropdown-link" href="/courses/mern-full-stack.php">
                  <span class="drop-icon">🌐</span>
                  <span class="text-sm font-medium text-slate-700">MERN Full Stack</span>
                </a>
                <a class="dropdown-link" href="/courses/java-full-stack.php">
                  <span class="drop-icon">🌐</span>
                  <span class="text-sm font-medium text-slate-700">Java Full Stack</span>
                </a>
                <a class="dropdown-link" href="/courses/mobile-app-development.php">
                  <span class="drop-icon">📱</span>
                  <span class="text-sm font-medium text-slate-700">Mobile App Development</span>
                </a>
                <a class="dropdown-link" href="/courses/data-science.php">
                  <span class="drop-icon">📊</span>
                  <span class="text-sm font-medium text-slate-700">Data Science &amp; AI</span>
                </a>
                <a class="dropdown-link" href="/courses/ui-ux-design.php">
                  <span class="drop-icon">🎨</span>
                  <span class="text-sm font-medium text-slate-700">UI/UX Design</span>
                </a>
              </div>
            </div>
          </div>
          <a class="mt-3 flex items-center justify-between rounded-xl bg-slate-50 px-4 py-3 text-sm font-semibold text-blue-700 transition-colors hover:bg-blue-50" href="/courses.php">
            View all courses ➔
          </a>
        </div>
      </div>

      <a class="nav-link" href="/about.php">About</a>
      <a class="nav-link" href="/services.php">Services</a>
      <a class="nav-link" href="/contact.php">Contact</a>
    </nav>

    <div class="flex items-center gap-2.5">
      <!-- Dark Theme Toggle Button -->
      <button id="theme-toggle" onclick="toggleTheme()" class="flex h-9 w-9 items-center justify-center rounded-xl border border-slate-200 bg-white text-slate-700 hover:bg-slate-50 transition-colors" title="Toggle Dark/Light Mode" aria-label="Toggle Dark/Light Theme">
        <span id="theme-icon">🌙</span>
      </button>

      <button id="menu-btn" class="flex h-11 w-11 items-center justify-center rounded-xl border border-slate-200 bg-white text-slate-700 lg:hidden" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-menu">
        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 5h16"/><path d="M4 12h16"/><path d="M4 19h16"/></svg>
      </button>
    </div>
  </div>

  <!-- Mobile Drawer Menu -->
  <div id="mobile-menu" class="mobile-panel px-5 py-4 sm:px-8">
    <div class="space-y-1">
      <a class="mob-link" href="/">Home</a>
      <a class="mob-link" href="/courses.php">All Courses</a>
      <div class="pl-4 space-y-1 border-l-2 border-slate-200 my-2">
        <a class="mob-sub-link" href="/courses/c-programming.php">C Programming</a>
        <a class="mob-sub-link" href="/courses/python-programming.php">Python Programming</a>
        <a class="mob-sub-link" href="/courses/java-programming.php">Java Programming</a>
        <a class="mob-sub-link" href="/courses/mern-full-stack.php">MERN Full Stack</a>
        <a class="mob-sub-link" href="/courses/data-science.php">Data Science &amp; AI</a>
      </div>
      <a class="mob-link" href="/about.php">About Us</a>
      <a class="mob-link" href="/services.php">Services</a>
      <a class="mob-link" href="/contact.php">Contact</a>
    </div>
  </div>
</header>

<script>
  function toggleTheme() {
    const isDark = document.documentElement.classList.toggle('dark');
    localStorage.setItem('theme', isDark ? 'dark' : 'light');
    document.getElementById('theme-icon').textContent = isDark ? '☀️' : '🌙';
  }
  // Set initial toggle icon state
  if (document.documentElement.classList.contains('dark')) {
    document.getElementById('theme-icon').textContent = '☀️';
  }
</script>
