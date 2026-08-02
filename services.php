<?php 
$page_title = "Our Services";
$meta_desc = "Services offered by Chedo Tech: Offline programming training, final year student project guidance, corporate coding workshops, and software development.";
include 'includes/header.php'; 
?>
<main class="container" style="padding:4rem 0;">

  <div class="section-title" style="text-align:left; max-width:800px; margin-bottom:3rem;">
    <span class="sub">Comprehensive Offerings</span>
    <h1>Services & Specialized Mentorship</h1>
    <p>In addition to individual classroom programming training, Chedo Tech provides student project mentorship, corporate training workshops, and custom software development solutions.</p>
  </div>

  <div class="grid-3" style="margin-bottom:4rem;">

    <div class="project-card" style="border-top:4px solid var(--brand); padding:2rem;">
      <div style="font-size:2.5rem; margin-bottom:1rem;">🎓</div>
      <h3 style="font-size:1.35rem; color:var(--primary); margin-bottom:0.75rem;">Classroom Training Programs</h3>
      <p style="color:var(--text-muted); font-size:0.95rem; line-height:1.6; margin-bottom:1.25rem;">
        Practical, offline programming tracks covering C, C++, Java, Python, Data Structures & Algorithms, Full Stack MERN, Data Science & AI.
      </p>
      <a href="/courses.php" class="btn btn-outline">Explore Courses ➔</a>
    </div>

    <div class="project-card" style="border-top:4px solid var(--cyan); padding:2rem;">
      <div style="font-size:2.5rem; margin-bottom:1rem;">🚀</div>
      <h3 style="font-size:1.35rem; color:var(--primary); margin-bottom:0.75rem;">Academic Project Mentorship</h3>
      <p style="color:var(--text-muted); font-size:0.95rem; line-height:1.6; margin-bottom:1.25rem;">
        End-to-end guidance for diploma, BCS, BCA, BE, and MCA students building final-year projects in Java, Python, Web Dev, and Mobile Apps.
      </p>
      <a href="/contact.php" class="btn btn-outline">Enquire for Guidance ➔</a>
    </div>

    <div class="project-card" style="border-top:4px solid var(--emerald); padding:2rem;">
      <div style="font-size:2.5rem; margin-bottom:1rem;">💻</div>
      <h3 style="font-size:1.35rem; color:var(--primary); margin-bottom:0.75rem;">Custom Software Development</h3>
      <p style="color:var(--text-muted); font-size:0.95rem; line-height:1.6; margin-bottom:1.25rem;">
        Full-lifecycle website, web application, and mobile app development for businesses, startups, and educational institutions.
      </p>
      <a href="/contact.php" class="btn btn-outline">Talk to Dev Team ➔</a>
    </div>

  </div>

  <div style="background:linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%); color:#fff; padding:3.5rem 3rem; border-radius:var(--radius-xl); box-shadow:var(--shadow-lg); text-align:center;">
    <h2 style="color:#fff; font-size:2.2rem; margin-bottom:1rem;">Looking for Custom Training or College Workshops?</h2>
    <p style="color:#cbd5e1; max-width:600px; margin:0 auto 2rem; font-size:1.05rem;">We organize coding bootcamp sessions and hands-on workshops for schools and colleges.</p>
    <a href="/contact.php" class="btn btn-primary" style="background:#fff; color:var(--primary);">Contact Us for Details</a>
  </div>

</main>
<?php include 'includes/footer.php'; ?>
