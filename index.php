<?php 
$page_title = "Learn Practical Programming";
$meta_desc = "Chedo Tech Programming Institute & Development Center. Practical offline classroom programming training in Pune.";
include 'includes/header.php'; 
$courses = get_courses(6);
$categories = get_categories();
$testimonials = get_testimonials(3);
?>
<main>

<!-- Hero Section -->
<section class="home-hero">
  <div class="container hero-grid">
    <div class="hero-content">
      <div class="hero-tag">⚡ Offline Programming Institute & Dev Center</div>
      <h1>Master Programming.<br><span class="highlight">Build Real Projects.</span><br>Launch Your Career.</h1>
      <p class="lead">Practical classroom training built for students and beginners — master C, C++, Java, Python, Full Stack MERN, Data Science & AI through live hands-on coding.</p>
      <div class="hero-actions">
        <a href="/courses.php" class="btn btn-primary">Browse All Courses ➔</a>
        <a href="https://chedo.web.app" target="_blank" class="btn btn-login-hero" title="Go to Student Dashboard">🔐 Student Login</a>
        <a href="/contact.php" class="btn btn-outline">📩 Enquire Now</a>
        <a href="https://wa.me/919876543210" target="_blank" class="btn btn-whatsapp">💬 Talk with Mentor</a>
      </div>
    </div>

    <!-- Code Mockup Visual -->
    <div class="hero-visual">
      <div class="hero-card-stack">
        <div class="code-header">
          <div class="code-dot dot-red"></div>
          <div class="code-dot dot-yellow"></div>
          <div class="code-dot dot-green"></div>
        </div>
        <div class="code-block">
          <span class="code-keyword">class</span> <span style="color:#e06c75;">Developer</span> {<br>
          &nbsp;&nbsp;<span class="code-keyword">public static void</span> <span style="color:#61afef;">main</span>(String[] args) {<br>
          &nbsp;&nbsp;&nbsp;&nbsp;System.out.println(<span class="code-string">"Welcome to Chedo Tech!"</span>);<br>
          &nbsp;&nbsp;&nbsp;&nbsp;Developer dev = <span class="code-keyword">new</span> Developer();<br>
          &nbsp;&nbsp;&nbsp;&nbsp;dev.buildRealProjects();<br>
          &nbsp;&nbsp;&nbsp;&nbsp;dev.masterFundamentals();<br>
          &nbsp;&nbsp;}<br>
          }
        </div>
      </div>
      
      <div class="floating-badge badge-1">
        <div style="font-size:1.5rem;">🚀</div>
        <div>
          <div style="font-weight:700; font-size:0.9rem; color:var(--primary);">100% Practical</div>
          <div style="font-size:0.75rem; color:var(--text-muted);">Whiteboard & Live Code</div>
        </div>
      </div>

      <div class="floating-badge badge-2">
        <div style="font-size:1.5rem;">👨‍💻</div>
        <div>
          <div style="font-weight:700; font-size:0.9rem; color:var(--primary);">Offline Mentoring</div>
          <div style="font-size:0.75rem; color:var(--text-muted);">Personal Doubt Solving</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stats Bar -->
<div class="container">
  <div class="stats-bar">
    <div class="stats-grid">
      <div class="stat-item">
        <h3>1,000<span>+</span></h3>
        <p>Students Mentored</p>
      </div>
      <div class="stat-item">
        <h3>12<span>+</span></h3>
        <p>Industry Curriculum Programs</p>
      </div>
      <div class="stat-item">
        <h3>100<span>%</span></h3>
        <p>Hands-on Project Based</p>
      </div>
      <div class="stat-item">
        <h3>1-on-1</h3>
        <p>Doubt Solving Sessions</p>
      </div>
    </div>
  </div>
</div>

<!-- Categories Grid -->
<section style="padding:4rem 0;">
  <div class="container">
    <div class="section-title">
      <span class="sub">Structured Learning Paths</span>
      <h2>Choose What You Want to Learn</h2>
      <p>Whether you are starting from zero or upgrading your technical stack, we have designed beginner to advanced tracks for you.</p>
    </div>

    <div class="grid-4">
      <?php foreach($categories as $cat): ?>
        <a href="/courses.php?cat=<?php echo esc($cat['slug']); ?>" class="category-card">
          <div class="category-icon">&lt;/&gt;</div>
          <div class="category-info">
            <h3><?php echo esc($cat['name']); ?></h3>
            <p><?php echo esc($cat['description']); ?></p>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Featured Courses Grid -->
<section style="padding:4rem 0; background:var(--bg-card); border-top:1px solid var(--border); border-bottom:1px solid var(--border);">
  <div class="container">
    <div class="section-title">
      <span class="sub">Popular Programs</span>
      <h2>Featured Training Courses</h2>
      <p>Explore our most enrolled practical classroom courses with detailed modules, assignments, and real-world projects.</p>
    </div>

    <div class="grid-3">
      <?php foreach($courses as $c): 
        $badgeClass = get_level_badge_class($c['level']);
        $duration = get_course_duration($c['slug']);
      ?>
        <div class="course-card course-card-item" data-category="<?php echo esc($c['category_slug']); ?>">
          <div>
            <div class="card-header">
              <span class="badge <?php echo $badgeClass; ?>"><?php echo esc($c['level']); ?></span>
              <span class="badge badge-category"><?php echo esc($c['category_name'] ?? 'Programming'); ?></span>
            </div>
            <h3><?php echo esc($c['title']); ?></h3>
            <p class="desc"><?php echo esc($c['short_description']); ?></p>
          </div>

          <div>
            <div class="card-meta">
              <span>⏱️ <?php echo esc($duration); ?></span>
              <span>🛠️ Project Based</span>
            </div>
            <a href="/course.php?slug=<?php echo esc($c['slug']); ?>" class="btn btn-outline" style="width:100%; margin-top:1.25rem;">View Full Syllabus ➔</a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div style="text-align:center; margin-top:3rem;">
      <a href="/courses.php" class="btn btn-primary" style="padding:0.9rem 2rem;">Explore All 12 Courses ➔</a>
    </div>
  </div>
</section>

<!-- How Learning Works -->
<section style="padding:5rem 0;">
  <div class="container">
    <div class="section-title">
      <span class="sub">Our Methodology</span>
      <h2>Less Watching. More Coding.</h2>
      <p>Our classroom workflow is optimized to build clear logic and problem-solving confidence.</p>
    </div>

    <div class="grid-3">
      <div class="project-card" style="border-top:4px solid var(--brand);">
        <div style="font-size:2rem; font-weight:800; color:var(--brand); margin-bottom:0.5rem;">01</div>
        <h4>Choose Your Course & Visit</h4>
        <p>Meet our mentors at the institute, discuss your goal, inspect course modules, and enroll in your preferred batch.</p>
      </div>

      <div class="project-card" style="border-top:4px solid var(--cyan);">
        <div style="font-size:2rem; font-weight:800; color:var(--cyan); margin-bottom:0.5rem;">02</div>
        <h4>Live Whiteboard & Hands-on</h4>
        <p>Every concept is explained on the whiteboard first and immediately implemented live on laptops with trainer assistance.</p>
      </div>

      <div class="project-card" style="border-top:4px solid var(--emerald);">
        <div style="font-size:2rem; font-weight:800; color:var(--emerald); margin-bottom:0.5rem;">03</div>
        <h4>Structured Assignments</h4>
        <p>Solve daily problem sets, syntax challenges, and logical questions designed to reinforce classroom topics.</p>
      </div>

      <div class="project-card" style="border-top:4px solid var(--amber);">
        <div style="font-size:2rem; font-weight:800; color:var(--amber); margin-bottom:0.5rem;">04</div>
        <h4>Build Portfolio Projects</h4>
        <p>Apply your skills by building 2+ complete real-world projects under step-by-step mentor guidance.</p>
      </div>

      <div class="project-card" style="border-top:4px solid var(--brand);">
        <div style="font-size:2rem; font-weight:800; color:var(--brand); margin-bottom:0.5rem;">05</div>
        <h4>Instant Doubt Solving</h4>
        <p>No waiting for forum answers — get direct face-to-face doubt clearance during and after every session.</p>
      </div>

      <div class="project-card" style="border-top:4px solid var(--cyan);">
        <div style="font-size:2rem; font-weight:800; color:var(--cyan); margin-bottom:0.5rem;">06</div>
        <h4>Milestone Certification</h4>
        <p>Earn an institute certification upon completing your course modules, assignments, and capstone project.</p>
      </div>
    </div>
  </div>
</section>

<!-- Call To Action Section -->
<section style="padding:4rem 0;">
  <div class="container">
    <div style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%); color:#fff; padding:3.5rem 3rem; border-radius:var(--radius-xl); box-shadow:var(--shadow-lg); text-align:center;">
      <h2 style="color:#fff; font-size:2.4rem; margin-bottom:1rem;">Ready to Build Strong Coding Logic?</h2>
      <p style="color:#cbd5e1; max-width:640px; margin:0 auto 2rem; font-size:1.1rem;">Join Chedo Tech today for offline, practical programming training. Flexible morning & evening batches available.</p>
      <div style="display:flex; justify-content:center; gap:1rem; flex-wrap:wrap;">
        <a href="/contact.php" class="btn btn-primary" style="background:#fff; color:var(--primary);">Visit Institute / Enquire Now</a>
        <a href="https://wa.me/919876543210" target="_blank" class="btn btn-whatsapp">💬 Instant WhatsApp Inquiry</a>
      </div>
    </div>
  </div>
</section>

</main>
<?php include 'includes/footer.php'; ?>
