<?php 
$page_title = "Our Services";
$meta_desc = "Chedo Tech offers offline programming education, app development services, corporate training, and custom software solutions in Pune.";
include 'includes/header.php'; 
?>

<main id="main">

<section class="relative overflow-hidden border-b border-slate-100 bg-slate-50/50 py-12 lg:py-16">
  <div class="bg-grid bg-grid-fade absolute inset-0" aria-hidden="true"></div>
  <div class="relative mx-auto max-w-7xl px-5 sm:px-8">
    <nav aria-label="Breadcrumb" class="mb-4">
      <ol class="flex items-center gap-2 text-sm text-slate-500">
        <li><a class="transition-colors hover:text-blue-700" href="/">Home</a></li>
        <li class="text-slate-300">/</li>
        <li class="text-slate-700 font-medium">Services</li>
      </ol>
    </nav>
    <div class="max-w-3xl">
      <p class="eyebrow">// SERVICES &amp; SOLUTIONS</p>
      <h1 class="mt-2 text-[clamp(2.2rem,5vw,3.75rem)] font-extrabold leading-[1.1] tracking-tight text-slate-900">Education &amp; App Development.</h1>
      <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg">
        In addition to classroom training, Chedo Tech provides custom software development, mobile app building, and institutional training.
      </p>
    </div>
  </div>
</section>

<section class="py-16 bg-white">
  <div class="mx-auto max-w-7xl px-5 sm:px-8">
    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
      
      <div class="card p-8 card-hover flex flex-col justify-between">
        <div>
          <div class="bento-icon mb-4">🎓</div>
          <h3 class="text-xl font-bold text-slate-900 mb-2">Classroom Training</h3>
          <p class="text-sm text-slate-600 leading-relaxed mb-6">Hands-on, offline programming courses in C, Python, Java, Full Stack, Data Science, and Mobile Apps.</p>
        </div>
        <a href="/courses.php" class="arrow-link">Explore Courses <span class="arrow">➔</span></a>
      </div>

      <div class="card p-8 card-hover flex flex-col justify-between">
        <div>
          <div class="bento-icon mb-4">📱</div>
          <h3 class="text-xl font-bold text-slate-900 mb-2">Mobile &amp; Web Development</h3>
          <p class="text-sm text-slate-600 leading-relaxed mb-6">We build production-ready mobile applications (Flutter/React Native) and modern web platforms for clients.</p>
        </div>
        <a href="/contact.php" class="arrow-link">Discuss Project <span class="arrow">➔</span></a>
      </div>

      <div class="card p-8 card-hover flex flex-col justify-between">
        <div>
          <div class="bento-icon mb-4">🏢</div>
          <h3 class="text-xl font-bold text-slate-900 mb-2">Corporate &amp; College Workshops</h3>
          <p class="text-sm text-slate-600 leading-relaxed mb-6">Customized tech bootcamps, workshops, and skill enhancement sessions for engineering colleges and teams.</p>
        </div>
        <a href="/contact.php" class="arrow-link">Request Workshop <span class="arrow">➔</span></a>
      </div>

    </div>
  </div>
</section>

</main>
<?php include 'includes/footer.php'; ?>
