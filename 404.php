<?php 
header("HTTP/1.0 404 Not Found");
$page_title = "404 - Page Not Found";
include 'includes/header.php'; 
?>

<main id="main">
<section class="py-24 bg-slate-50/50 text-center border-b border-slate-100">
  <div class="mx-auto max-w-xl px-5">
    <p class="font-mono text-6xl font-extrabold text-blue-600">404</p>
    <h1 class="mt-4 text-3xl font-extrabold text-slate-900 sm:text-4xl">Page Not Found</h1>
    <p class="mt-3 text-slate-600">The page you are looking for might have been removed, renamed, or is temporarily unavailable.</p>
    <div class="mt-8 flex justify-center gap-3">
      <a href="/" class="btn-primary btn-lg">Return to Homepage ➔</a>
      <a href="/courses.php" class="btn-secondary btn-lg">Browse Courses</a>
    </div>
  </div>
</section>
</main>

<?php include 'includes/footer.php'; ?>
