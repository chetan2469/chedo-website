<?php 
$page_title = "Programming Courses in Pune";
$meta_desc = "Explore Chedo Tech's offline programming courses in Pune — C, C++, Java, Python, DSA, MERN, Java Full Stack, Mobile App Development, Data Science, UI/UX and Kids Programming.";
include 'includes/header.php'; 
$all_courses = get_courses(50);
$categories = get_categories();
$active_cat = $_GET['cat'] ?? 'all';
?>
<main id="main">

<section class="relative overflow-hidden border-b border-slate-100 bg-slate-50/50 py-12 lg:py-16">
  <div class="bg-grid bg-grid-fade absolute inset-0" aria-hidden="true"></div>
  <div class="relative mx-auto max-w-7xl px-5 sm:px-8">
    <nav aria-label="Breadcrumb" class="mb-4">
      <ol class="flex items-center gap-2 text-sm text-slate-500">
        <li><a class="transition-colors hover:text-blue-700" href="/">Home</a></li>
        <li class="text-slate-300">/</li>
        <li class="text-slate-700 font-medium">Courses</li>
      </ol>
    </nav>
    <div class="max-w-3xl">
      <p class="eyebrow">// COURSE CATALOG</p>
      <h1 class="mt-2 text-[clamp(2.2rem,5vw,3.5rem)] font-extrabold leading-[1.1] tracking-tight text-slate-900">Courses Built Around<br><span class="bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">Real Practice.</span></h1>
      <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg">
        Start your programming career with zero knowledge of coding. Every course here takes you from fundamentals to building real projects — taught offline in Pune.
      </p>
    </div>

    <!-- Category Filter Chips -->
    <div class="mt-8 flex flex-wrap gap-2">
      <a href="/courses.php" class="chip <?php echo ($active_cat === 'all') ? '!bg-blue-600 !text-white !border-blue-600' : ''; ?>">All Programs</a>
      <?php foreach($categories as $cat): ?>
        <a href="/courses.php?cat=<?php echo esc($cat['slug']); ?>" class="chip <?php echo ($active_cat === $cat['slug']) ? '!bg-blue-600 !text-white !border-blue-600' : ''; ?>">
          <?php echo esc($cat['name']); ?>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Course Directory Grid -->
<section class="py-14 bg-white">
  <div class="mx-auto max-w-7xl px-5 sm:px-8">
    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
      <?php foreach($all_courses as $c): 
        $duration = get_course_duration($c['slug']);
        $is_match = ($active_cat === 'all' || $active_cat === $c['category_slug']);
        if (!$is_match) continue;
      ?>
        <article class="card card-hover flex flex-col p-6">
          <div class="flex items-center justify-between gap-2 mb-4">
            <span class="chip-tint">⚡ <?php echo esc($c['level']); ?></span>
            <span class="chip"><?php echo esc($c['category_name'] ?? 'Programming'); ?></span>
          </div>

          <h3 class="text-xl font-bold tracking-tight text-slate-900 mb-2">
            <a href="/course.php?slug=<?php echo esc($c['slug']); ?>" class="hover:text-blue-600 transition-colors"><?php echo esc($c['title']); ?></a>
          </h3>

          <p class="text-sm leading-relaxed text-slate-600 flex-1 mb-6"><?php echo esc($c['short_description']); ?></p>

          <div class="border-t border-slate-100 pt-4 flex items-center justify-between text-xs font-medium text-slate-500">
            <span>⏱️ <?php echo esc($duration); ?></span>
            <a href="/course.php?slug=<?php echo esc($c['slug']); ?>" class="arrow-link">Explore Course <span class="arrow">➔</span></a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

</main>
<?php include 'includes/footer.php'; ?>
