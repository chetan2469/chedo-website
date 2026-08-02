<?php 
$page_title = "About Us";
$meta_desc = "Chedo Tech is a Pune-based programming institute teaching offline, practical, project-based programming since 2015.";
include 'includes/header.php'; 
?>

<main id="main">

<!-- Banner -->
<section class="relative overflow-hidden border-b border-slate-100 bg-slate-50/50 py-12 lg:py-16">
  <div class="bg-grid bg-grid-fade absolute inset-0" aria-hidden="true"></div>
  <div class="relative mx-auto max-w-7xl px-5 sm:px-8">
    <nav aria-label="Breadcrumb" class="mb-4">
      <ol class="flex items-center gap-2 text-sm text-slate-500">
        <li><a class="transition-colors hover:text-blue-700" href="/">Home</a></li>
        <li class="text-slate-300">/</li>
        <li class="text-slate-700 font-medium">About</li>
      </ol>
    </nav>
    <div class="max-w-3xl">
      <p class="eyebrow">// ABOUT CHEDO TECH</p>
      <h1 class="mt-2 text-[clamp(2.2rem,5vw,3.75rem)] font-extrabold leading-[1.1] tracking-tight text-slate-900">
        Practical Programming Education<br>
        <span class="bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">Since 2015.</span>
      </h1>
      <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg">
        Chedo Tech is a programming institute &amp; app development center in Pune that teaches programming the way it is actually learned — offline, hands-on, and project-based.
      </p>
    </div>
  </div>
</section>

<!-- Content Section -->
<section class="py-16 bg-white">
  <div class="mx-auto grid max-w-7xl gap-12 px-5 sm:px-8 lg:grid-cols-2">
    <div>
      <p class="eyebrow">// WHO WE ARE</p>
      <h2 class="mt-2 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">A Place Where Programming Is Taught Seriously.</h2>
      <div class="mt-6 space-y-4 text-base leading-relaxed text-slate-600">
        <p>Since 2015, Chedo Tech has been helping students go from zero knowledge of coding to building real projects. Our classrooms are offline — whiteboard teaching, live coding, and hands-on practice with the instructor beside you.</p>
        <p>We believe a well-organized curriculum and personal guidance matter as much as the topics themselves. Every course follows a structured path from basics to advanced topics, with printed notes, assignments, coding tests and project checkpoints.</p>
        <p>Our programs span programming languages, full stack development, data science, mobile app development, UI/UX design and kids programming — so there is a clear next step no matter where you start.</p>
      </div>
    </div>

    <!-- Highlights Card -->
    <div class="space-y-4">
      <div class="card p-6 shadow-sm">
        <p class="font-mono text-[11px] font-bold tracking-widest text-slate-500">// OUR APPROACH</p>
        <ul class="mt-4 space-y-3">
          <li class="flex items-center gap-3 text-slate-800 font-medium">✓ Offline classroom training at the center</li>
          <li class="flex items-center gap-3 text-slate-800 font-medium">✓ Live whiteboard &amp; interactive coding</li>
          <li class="flex items-center gap-3 text-slate-800 font-medium">✓ Real portfolio projects</li>
          <li class="flex items-center gap-3 text-slate-800 font-medium">✓ 1-on-1 personal guidance and doubt clearance</li>
          <li class="flex items-center gap-3 text-slate-800 font-medium">✓ Printed notes and syntax workbooks</li>
        </ul>
      </div>

      <div class="card p-6 bg-slate-900 text-white shadow-lg">
        <h3 class="text-xl font-bold mb-2">Visit Our Center in Pune</h3>
        <p class="text-sm text-slate-300 mb-4">Meet our academic mentors, inspect course modules, and plan your learning batch in person.</p>
        <a href="/contact.php" class="btn-primary w-full text-center !bg-white !text-slate-900 hover:!bg-slate-100">Contact &amp; Location Details ➔</a>
      </div>
    </div>
  </div>
</section>

</main>
<?php include 'includes/footer.php'; ?>
