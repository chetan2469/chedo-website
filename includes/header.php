<?php require_once __DIR__ . '/functions.php'; 
$settings = get_settings();
$categories_nav = get_categories();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo isset($page_title) ? esc($page_title) . ' | ' : ''; ?>Chedo Tech Programming Institute</title>
<meta name="description" content="<?php echo esc($meta_desc ?? 'Chedo Tech Programming Institute & Development Center. Practical offline programming training, full-stack, data science, and mobile app development.'); ?>">
<link rel="icon" type="image/png" href="/assets/ico.png">
<link rel="stylesheet" href="/assets/css/variables.css">
<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

<!-- Top Announcement Bar -->
<div class="top-bar">
  <div class="container top-bar-inner">
    <div class="top-bar-info">
      <span><span class="top-bar-badge">Admissions Open</span> Next Offline Batches Starting This Week!</span>
      <span class="top-hide-mobile">📍 Pune, Maharashtra</span>
    </div>
    <div class="top-bar-info">
      <span>📞 <?php echo esc($settings['phone'] ?? '+91-98765-43210'); ?></span>
      <span>💬 WhatsApp: <?php echo esc($settings['whatsapp'] ?? '+91-98765-43210'); ?></span>
    </div>
  </div>
</div>

<!-- Header Navbar -->
<header class="site-header" id="header">
  <div class="container header-inner">
    <a href="/" class="logo">
      <img src="/assets/ico.png" alt="Chedo Tech Logo" class="logo-img">
      <span class="logo-text">Chedo<span class="tag">Tech</span></span>
    </a>
    
    <nav aria-label="Primary Navigation">
      <ul class="nav-menu" id="navMenu">
        <li><a href="/">Home</a></li>
        <li class="has-dropdown">
          <a href="/courses.php">Courses ▾</a>
          <ul class="dropdown">
            <?php foreach($categories_nav as $cat): ?>
              <li><a href="/courses.php?cat=<?php echo esc($cat['slug']); ?>">⚡ <?php echo esc($cat['name']); ?></a></li>
            <?php endforeach; ?>
          </ul>
        </li>
        <li><a href="/about.php">About Us</a></li>
        <li><a href="/services.php">Services</a></li>
        <li><a href="/contact.php">Contact</a></li>
      </ul>
    </nav>

    <div class="header-actions">
      <button class="mobile-toggle" onclick="document.getElementById('navMenu').classList.toggle('open')" aria-label="Toggle Navigation Menu">☰</button>
    </div>
  </div>
</header>
