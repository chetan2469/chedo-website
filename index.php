<?php 
$page_title = "Programming Institute in Pune";
$meta_desc = "Chedo Tech is a programming institute & app development center in Pune offering offline, practical programming education since 2015.";
include 'includes/header.php'; 
$courses = get_courses(50);
$categories = get_categories();
$testimonials = get_testimonials(6);
$faqs = get_faqs();
?>

<main id="main">

<!-- Hero Section -->
<section class="relative overflow-hidden bg-slate-50/50 py-12 lg:py-16">
  <div class="bg-grid bg-grid-fade absolute inset-0" aria-hidden="true"></div>
  <div class="absolute -top-32 right-[-10%] h-[480px] w-[480px] rounded-full bg-blue-100/40 blur-3xl" aria-hidden="true"></div>
  <div class="absolute bottom-[-20%] left-[-8%] h-[420px] w-[420px] rounded-full bg-cyan-100/40 blur-3xl" aria-hidden="true"></div>

  <div class="relative mx-auto grid max-w-7xl items-center gap-10 px-5 sm:px-8 lg:grid-cols-12">
    <div class="lg:col-span-6">
      <p class="inline-flex items-center gap-2 rounded-full border border-blue-100 bg-blue-50/70 px-4 py-1.5 text-[13px] font-semibold text-blue-700">
        <span class="pulse-dot rounded-full bg-red-500"></span>
        Practical Programming Education Since 2015
      </p>
      <h1 class="mt-4 text-[clamp(2.5rem,5vw,4.2rem)] font-extrabold leading-[1.1] tracking-tight text-slate-900">
        Learn Programming.<br>
        <span class="bg-gradient-to-r from-blue-600 via-blue-600 to-cyan-500 bg-clip-text text-transparent">Build Real Projects.</span><br>
        Grow With Confidence.
      </h1>
      <p class="mt-4 max-w-xl text-base leading-relaxed text-slate-600 sm:text-lg">
        Chedo Tech is a programming institute &amp; app development center in Pune providing
        <strong class="font-semibold text-slate-800">offline, practical programming education</strong> —
        taking you from fundamentals to building real projects.
      </p>
      
      <!-- Hero Action Buttons (Explore Courses, Student Login, Enquire, Talk with Mentor) -->
      <div class="mt-6 flex flex-wrap gap-3">
        <a class="btn-primary btn-lg" href="/courses.php">Explore Courses ➔</a>
        <a class="btn-secondary btn-lg" href="https://chedo.web.app" target="_blank" title="Go to Student Dashboard">🔐 Student Login</a>
        <a class="btn-secondary btn-lg" href="/contact.php">📩 Enquire Now</a>
        <a class="btn-wa btn-lg" href="https://wa.me/919876543210" target="_blank">💬 Talk With Us</a>
      </div>

      <ul class="mt-8 flex flex-wrap gap-x-6 gap-y-2">
        <li class="flex items-center gap-2 text-sm font-medium text-slate-600">✓ Offline Training</li>
        <li class="flex items-center gap-2 text-sm font-medium text-slate-600">✓ Practical Learning</li>
        <li class="flex items-center gap-2 text-sm font-medium text-slate-600">✓ Personal Guidance</li>
        <li class="flex items-center gap-2 text-sm font-medium text-slate-600">✓ Real Projects</li>
      </ul>
    </div>

    <!-- Interactive Code Window & Terminal Visual -->
    <div class="lg:col-span-6">
      <div class="relative mx-auto max-w-[560px]">
        <div class="absolute -inset-6 rounded-[2rem] bg-gradient-to-br from-blue-50 to-cyan-50 opacity-70" aria-hidden="true"></div>
        
        <div class="code-window relative z-10">
          <div class="window-bar">
            <span class="win-dot bg-red-400"></span>
            <span class="win-dot bg-amber-400"></span>
            <span class="win-dot bg-emerald-400"></span>
            <span class="ml-2 font-mono text-xs text-slate-500">learning.js — chedo tech</span>
          </div>
          <div class="code-body">
<pre><span class="ln">1</span><span class="tk-cmt">// learn by building</span>
<span class="ln">2</span><span class="tk-kw">function</span> <span class="tk-fn">learn</span><span class="tk-p">()</span> <span class="tk-p">{</span>
<span class="ln">3</span>  <span class="tk-fn">understand</span><span class="tk-p">();</span> <span class="tk-cmt">// concept</span>
<span class="ln">4</span>  <span class="tk-fn">practice</span><span class="tk-p">();</span>   <span class="tk-cmt">// hands-on</span>
<span class="ln">5</span>  <span class="tk-fn">build</span><span class="tk-p">();</span>      <span class="tk-cmt">// projects</span>
<span class="ln">6</span>  <span class="tk-fn">improve</span><span class="tk-p">();</span>    <span class="tk-cmt">// debug</span>
<span class="ln">7</span><span class="tk-p">}</span>
<span class="ln">8</span><span class="tk-fn">learn</span><span class="tk-p">();</span> <span class="tk-cmt">// since 2015</span></pre>
          </div>
        </div>

        <!-- Terminal Output -->
        <div class="terminal mt-4 relative z-10">
          <div class="terminal-bar">
            <span class="win-dot bg-red-400"></span>
            <span class="win-dot bg-amber-400"></span>
            <span class="win-dot bg-emerald-400"></span>
            <span class="ml-2 font-mono text-[11px] text-slate-400">terminal — build session</span>
          </div>
          <div class="terminal-body">
<pre><span class="term-prompt">$</span> <span class="text-slate-200">npm run learn</span>
<span class="term-ok">✓</span> <span class="term-dim">logic</span>
<span class="term-ok">✓</span> <span class="term-dim">APIs</span>
<span class="term-ok">✓</span> <span class="term-dim">projects</span>
<span class="term-prompt">$</span> <span class="term-cursor"></span></pre>
          </div>
        </div>

        <div class="float-card -top-5 -right-3 sm:-right-6">
          <div class="flex items-center gap-2">
            <span class="pulse-dot rounded-full bg-red-500"></span>
            <span class="font-mono text-[10px] font-bold tracking-widest text-slate-500">LIVE CODING</span>
          </div>
          <p class="mt-1 text-xs font-medium text-slate-600">Code written live,<br>explained on the board</p>
        </div>

        <div class="float-card -bottom-6 -right-3 hidden max-w-[220px] sm:block">
          <p class="font-mono text-[10px] font-bold tracking-widest text-slate-500">PROJECT BASED</p>
          <p class="mt-0.5 text-[13px] font-semibold text-slate-800">📂 Student Record System &amp; Full Stack Apps</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- What You Can Learn Here Bar -->
<section class="border-y border-slate-200 bg-white py-6">
  <div class="mx-auto flex max-w-7xl flex-col items-center gap-4 px-5 sm:px-8 lg:flex-row lg:justify-between">
    <p class="flex items-center gap-3 font-mono text-xs font-semibold uppercase tracking-widest text-slate-500">
      <span class="h-px w-8 bg-slate-300"></span>What you can learn here
    </p>
    <div class="flex flex-wrap justify-center gap-2">
      <span class="chip">C / C++</span>
      <span class="chip">Java &amp; Python</span>
      <span class="chip">DSA</span>
      <span class="chip">MERN Full Stack</span>
      <span class="chip">Java Full Stack</span>
      <span class="chip">Flutter Mobile Apps</span>
      <span class="chip">Data Science</span>
      <span class="chip">UI/UX</span>
      <span class="chip">Kids Programming</span>
    </div>
  </div>
</section>

<!-- Stats Counter Bar -->
<section class="py-12 bg-slate-50/70 border-b border-slate-200">
  <div class="mx-auto max-w-7xl px-5 sm:px-8">
    <div class="grid grid-cols-2 gap-6 md:grid-cols-4">
      <div class="text-center">
        <p class="text-3xl font-extrabold text-slate-900 sm:text-4xl">1,000<span class="text-blue-600">+</span></p>
        <p class="mt-1 text-xs font-medium text-slate-500 sm:text-sm">Students Mentored</p>
      </div>
      <div class="text-center">
        <p class="text-3xl font-extrabold text-slate-900 sm:text-4xl">12<span class="text-blue-600">+</span></p>
        <p class="mt-1 text-xs font-medium text-slate-500 sm:text-sm">Industry Courses</p>
      </div>
      <div class="text-center">
        <p class="text-3xl font-extrabold text-slate-900 sm:text-4xl">100<span class="text-blue-600">%</span></p>
        <p class="mt-1 text-xs font-medium text-slate-500 sm:text-sm">Practical &amp; Hands-on</p>
      </div>
      <div class="text-center">
        <p class="text-3xl font-extrabold text-slate-900 sm:text-4xl">1-on-1</p>
        <p class="mt-1 text-xs font-medium text-slate-500 sm:text-sm">Doubt Solving</p>
      </div>
    </div>
  </div>
</section>

<!-- Structured Categories Bento Grid -->
<section class="py-16 bg-white">
  <div class="mx-auto max-w-7xl px-5 sm:px-8">
    <div class="text-center max-w-2xl mx-auto mb-12">
      <p class="eyebrow">Structured Pathways</p>
      <h2 class="mt-2 text-3xl font-extrabold text-slate-900 sm:text-4xl">Choose What You Want to Build Next</h2>
      <p class="mt-3 text-slate-600">From core programming logic to full stack development and data science.</p>
    </div>

    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
      <?php foreach($categories as $cat): ?>
        <a href="/courses.php?cat=<?php echo esc($cat['slug']); ?>" class="bento-cell card-hover">
          <div class="bento-icon mb-4">⚡</div>
          <h3 class="text-lg font-bold text-slate-900"><?php echo esc($cat['name']); ?></h3>
          <p class="mt-2 text-sm text-slate-600 line-clamp-2"><?php echo esc($cat['description']); ?></p>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Featured Courses Grid -->
<section class="py-16 bg-slate-50/60 border-t border-slate-200">
  <div class="mx-auto max-w-7xl px-5 sm:px-8">
    <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4">
      <div>
        <p class="eyebrow">Featured Programs</p>
        <h2 class="mt-2 text-3xl font-extrabold text-slate-900 sm:text-4xl">Popular Practical Courses</h2>
      </div>
      <a href="/courses.php" class="arrow-link">Explore All 12 Courses <span class="arrow">➔</span></a>
    </div>

    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
      <?php foreach(array_slice($courses, 0, 6) as $c): 
        $duration = get_course_duration($c['slug']);
      ?>
        <div class="card card-hover p-6 flex flex-col justify-between">
          <div>
            <div class="flex items-center justify-between gap-2 mb-3">
              <span class="chip-tint"><?php echo esc($c['level']); ?></span>
              <span class="chip"><?php echo esc($c['category_name'] ?? 'Track'); ?></span>
            </div>
            <h3 class="text-xl font-bold text-slate-900 mb-2"><?php echo esc($c['title']); ?></h3>
            <p class="text-sm text-slate-600 line-clamp-3 mb-6"><?php echo esc($c['short_description']); ?></p>
          </div>

          <div>
            <div class="flex items-center justify-between border-t border-slate-100 pt-4 text-xs font-medium text-slate-500 mb-4">
              <span>⏱️ <?php echo esc($duration); ?></span>
              <span>📍 Offline Classroom</span>
            </div>
            <a href="/course.php?slug=<?php echo esc($c['slug']); ?>" class="btn-primary w-full text-center">View Full Syllabus ➔</a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Why Practical Learning Matters / Bento Grid -->
<section class="py-16 bg-white border-t border-slate-200">
  <div class="mx-auto max-w-7xl px-5 sm:px-8">
    <div class="max-w-3xl mb-12">
      <p class="eyebrow">// WHY CHEDO TECH</p>
      <h2 class="mt-2 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">Built Around How Students Actually Learn.</h2>
      <p class="mt-3 text-lg text-slate-600">Six things that make a Chedo Tech classroom different from the usual coaching class.</p>
    </div>

    <div class="grid gap-6 md:grid-cols-3">
      <div class="bento-cell md:col-span-2">
        <div class="bento-icon mb-4">📖</div>
        <h3 class="text-xl font-bold text-slate-900">Organized Curriculum</h3>
        <p class="mt-2 text-sm text-slate-600 leading-relaxed">Well-structured syllabus designed for absolute clarity — from basics to advanced topics — with printed notes and live code sessions.</p>
        <div class="mt-4 flex flex-wrap gap-2">
          <span class="chip">Printed notes</span>
          <span class="chip">Live code sessions</span>
          <span class="chip">Basics → advanced</span>
        </div>
      </div>

      <div class="bento-cell">
        <div class="bento-icon mb-4">⚡</div>
        <h3 class="text-xl font-bold text-slate-900">Practical Performance</h3>
        <p class="mt-2 text-sm text-slate-600 leading-relaxed">Focus on project-based, hands-on learning with real applications, not just theory.</p>
      </div>

      <div class="bento-cell">
        <div class="bento-icon mb-4">📲</div>
        <h3 class="text-xl font-bold text-slate-900">Mobile App Access</h3>
        <p class="mt-2 text-sm text-slate-600 leading-relaxed">Students get access to our portal and mobile notes for downloading up-to-date resources and schedules.</p>
      </div>

      <div class="bento-cell">
        <div class="bento-icon mb-4">🤖</div>
        <h3 class="text-xl font-bold text-slate-900">AI-Powered Learning</h3>
        <p class="mt-2 text-sm text-slate-600 leading-relaxed">We enhance offline teaching with AI visualizations, diagrams, and smart boards for a deeper understanding.</p>
      </div>

      <div class="bento-cell">
        <div class="bento-icon mb-4">🎯</div>
        <h3 class="text-xl font-bold text-slate-900">Milestone Progress</h3>
        <p class="mt-2 text-sm text-slate-600 leading-relaxed">Track your growth with regular assignments, structured practice sets, coding tests, and project checkpoints.</p>
      </div>
    </div>
  </div>
</section>

<!-- Methodology Journey -->
<section class="py-16 bg-slate-50/60 border-t border-slate-200">
  <div class="mx-auto max-w-7xl px-5 sm:px-8">
    <div class="text-center max-w-2xl mx-auto mb-14">
      <p class="eyebrow">Classroom Workflow</p>
      <h2 class="mt-2 text-3xl font-extrabold text-slate-900 sm:text-4xl">Less Watching. More Coding.</h2>
      <p class="mt-3 text-slate-600">Our structured 5-step approach ensures deep practical understanding.</p>
    </div>

    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
      <div class="card p-6 border-l-4 border-l-blue-600">
        <span class="font-mono text-xl font-bold text-blue-600">01</span>
        <h4 class="mt-2 text-lg font-bold text-slate-900">Live Whiteboard &amp; Code</h4>
        <p class="mt-2 text-sm text-slate-600">Every topic is explained logically on the whiteboard before live coding on lab workstations.</p>
      </div>

      <div class="card p-6 border-l-4 border-l-cyan-500">
        <span class="font-mono text-xl font-bold text-cyan-500">02</span>
        <h4 class="mt-2 text-lg font-bold text-slate-900">Hands-on Exercises</h4>
        <p class="mt-2 text-sm text-slate-600">Solve daily problem sets and coding exercises during every classroom session.</p>
      </div>

      <div class="card p-6 border-l-4 border-l-emerald-500">
        <span class="font-mono text-xl font-bold text-emerald-500">03</span>
        <h4 class="mt-2 text-lg font-bold text-slate-900">Personal Mentorship</h4>
        <p class="mt-2 text-sm text-slate-600">Small batch sizes allow trainers to review your code line-by-line and resolve doubts instantly.</p>
      </div>

      <div class="card p-6 border-l-4 border-l-amber-500">
        <span class="font-mono text-xl font-bold text-amber-500">04</span>
        <h4 class="mt-2 text-lg font-bold text-slate-900">Printed Notes &amp; Sheets</h4>
        <p class="mt-2 text-sm text-slate-600">Receive comprehensive printed study guides and syntax reference workbooks.</p>
      </div>

      <div class="card p-6 border-l-4 border-l-blue-600">
        <span class="font-mono text-xl font-bold text-blue-600">05</span>
        <h4 class="mt-2 text-lg font-bold text-slate-900">Portfolio Projects</h4>
        <p class="mt-2 text-sm text-slate-600">Build real-world capstone applications to showcase on GitHub and resume.</p>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action Banner -->
<section class="py-16 bg-white border-t border-slate-200">
  <div class="mx-auto max-w-7xl px-5 sm:px-8">
    <div class="rounded-3xl bg-slate-900 px-8 py-12 text-center text-white shadow-xl sm:px-12">
      <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">Ready to Start Your Coding Journey?</h2>
      <p class="mx-auto mt-4 max-w-xl text-slate-300">Join Chedo Tech for practical offline classroom training. Morning &amp; evening batches available.</p>
      <div class="mt-8 flex flex-wrap justify-center gap-4">
        <a class="btn-primary btn-lg !bg-white !text-slate-900 hover:!bg-slate-100" href="/contact.php">Visit Institute / Enquire Now</a>
        <a class="btn-wa btn-lg" href="https://wa.me/919876543210" target="_blank">💬 Instant WhatsApp Inquiry</a>
      </div>
    </div>
  </div>
</section>

</main>

<?php include 'includes/footer.php'; ?>
