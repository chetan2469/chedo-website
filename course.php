<?php 
$slug = $_GET['slug'] ?? '';
require_once 'includes/functions.php';
$course = get_course_by_slug($slug);

if (!$course) {
    header("HTTP/1.0 404 Not Found");
    $page_title = "Course Not Found";
    include 'includes/header.php';
    echo '<main class="container" style="padding:6rem 0; text-align:center;">
            <h1>Course Not Found</h1>
            <p style="color:var(--text-muted); margin:1rem 0 2rem;">The course you are looking for does not exist or has been updated.</p>
            <a href="/courses.php" class="btn btn-primary">Browse All Courses</a>
          </main>';
    include 'includes/footer.php';
    exit;
}

$page_title = $course['title'];
$meta_desc = $course['short_description'];
include 'includes/header.php';

$modules = get_modules($course['id']);
$projects = get_projects($course['id']);
$badgeClass = get_level_badge_class($course['level']);
$duration = get_course_duration($course['slug']);
$msg = $_GET['msg'] ?? '';
?>

<main class="container">

  <!-- Course Hero Section -->
  <section class="course-hero">
    <div style="padding: 0 2.5rem;">
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a> / <a href="/courses.php">Courses</a> / <span><?php echo esc($course['title']); ?></span>
      </nav>

      <div class="course-hero-grid">
        <div class="course-hero-content">
          <div style="display:flex; gap:0.6rem; align-items:center; margin-bottom:1rem;">
            <span class="badge <?php echo $badgeClass; ?>"><?php echo esc($course['level']); ?></span>
            <span class="badge badge-category" style="background:rgba(255,255,255,0.15); color:#fff;"><?php echo esc($course['category_name'] ?? 'Programming Track'); ?></span>
          </div>

          <h1><?php echo esc($course['title']); ?></h1>
          <p class="subtitle"><?php echo esc($course['short_description']); ?></p>

          <div class="course-spec-pills">
            <div class="spec-pill">⏱️ <strong>Duration:</strong> <?php echo esc($duration); ?></div>
            <div class="spec-pill">📍 <strong>Mode:</strong> Offline Classroom</div>
            <div class="spec-pill">🚀 <strong>Projects:</strong> <?php echo count($projects); ?> Real-World Projects</div>
            <div class="spec-pill">🎓 <strong>Certification:</strong> Course Completion Certificate</div>
          </div>

          <div style="display:flex; gap:1rem; flex-wrap:wrap; margin-top:1rem;">
            <a href="#enquireForm" class="btn btn-primary" style="background:#fff; color:var(--primary);">Enroll / Request Batch Timing</a>
            <a href="https://wa.me/919876543210?text=Hi%20Chedo%20Tech,%20I%20am%20interested%20in%20<?php echo urlencode($course['title']); ?>" target="_blank" class="btn btn-whatsapp">💬 WhatsApp Inquiry</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Detailed Content Grid (Main 1fr | Sidebar 340px) -->
  <div style="display:grid; grid-template-columns:1fr 340px; gap:3rem; align-items:start; margin-bottom:4rem;">

    <!-- Left Main Column -->
    <div>
      
      <!-- Course Detailed Overview -->
      <section style="background:#fff; border:1px solid var(--border); border-radius:var(--radius-lg); padding:2rem; margin-bottom:2.5rem; box-shadow:var(--shadow-sm);">
        <h2 style="font-size:1.75rem; color:var(--primary); margin-bottom:1rem;">Course Overview</h2>
        <p style="color:var(--text-muted); font-size:1.05rem; line-height:1.7; margin-bottom:1.5rem;">
          <?php echo nl2br(esc($course['full_description'] ?: $course['short_description'])); ?>
        </p>

        <h3 style="font-size:1.25rem; color:var(--primary); margin:1.5rem 0 1rem;">Why Learn This Course At Chedo Tech?</h3>
        <div class="grid-3" style="grid-template-columns:repeat(auto-fit, minmax(200px, 1fr)); gap:1rem;">
          <div style="background:var(--bg-main); padding:1rem; border-radius:var(--radius-md); border:1px solid var(--border);">
            <div style="font-size:1.2rem; margin-bottom:0.25rem;">✍️</div>
            <strong style="font-size:0.9rem;">Whiteboard Explanation</strong>
            <p style="font-size:0.8rem; color:var(--text-muted); margin-top:0.2rem;">Clear logic building on board before writing code.</p>
          </div>
          <div style="background:var(--bg-main); padding:1rem; border-radius:var(--radius-md); border:1px solid var(--border);">
            <div style="font-size:1.2rem; margin-bottom:0.25rem;">💻</div>
            <strong style="font-size:0.9rem;">100% Live Coding</strong>
            <p style="font-size:0.8rem; color:var(--text-muted); margin-top:0.2rem;">Hands-on practice on lab systems with immediate mentor help.</p>
          </div>
          <div style="background:var(--bg-main); padding:1rem; border-radius:var(--radius-md); border:1px solid var(--border);">
            <div style="font-size:1.2rem; margin-bottom:0.25rem;">📘</div>
            <strong style="font-size:0.9rem;">Printed Notes & Sheets</strong>
            <p style="font-size:0.8rem; color:var(--text-muted); margin-top:0.2rem;">Structured curriculum sheets and programming assignments.</p>
          </div>
        </div>
      </section>

      <!-- Complete Interactive Curriculum Accordion -->
      <section style="margin-bottom:2.5rem;">
        <div style="display:flex; justify-content:space-between; align-items:flex-end; margin-bottom:1rem;">
          <div>
            <span class="sub" style="font-size:0.8rem; text-transform:uppercase; font-weight:700; color:var(--brand);">Detailed Syllabus</span>
            <h2 style="font-size:1.75rem; color:var(--primary);">Curriculum Modules & Topics</h2>
          </div>
          <span style="font-size:0.9rem; color:var(--text-muted);"><?php echo count($modules); ?> Structured Modules</span>
        </div>

        <?php if($modules): ?>
          <div class="accordion">
            <?php foreach($modules as $index => $m): 
              $topics = get_topics($m['id']);
            ?>
              <div class="accordion-item <?php echo $index===0 ? 'active' : ''; ?>">
                <div class="accordion-header">
                  <h3>
                    <span class="module-badge">Module <?php echo ($index+1); ?></span>
                    <?php echo esc($m['title']); ?>
                  </h3>
                  <div class="accordion-icon">▾</div>
                </div>

                <div class="accordion-content">
                  <div class="topic-list">
                    <?php if(!empty($m['description'])): ?>
                      <p style="font-size:0.9rem; color:var(--text-muted); margin-bottom:1rem; font-style:italic;">
                        <?php echo esc($m['description']); ?>
                      </p>
                    <?php endif; ?>

                    <?php if($topics): ?>
                      <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(260px, 1fr)); gap:0.5rem;">
                        <?php foreach($topics as $t): ?>
                          <div class="topic-item">
                            <span class="topic-icon">✓</span>
                            <span><?php echo esc($t['title']); ?></span>
                          </div>
                        <?php endforeach; ?>
                      </div>
                    <?php else: ?>
                      <p style="font-size:0.85rem; color:var(--text-muted);">Detailed topics will be covered in class.</p>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        <?php else: ?>
          <div class="project-card">
            <p style="color:var(--text-muted);">Syllabus details available upon visiting center.</p>
          </div>
        <?php endif; ?>
      </section>

      <!-- Hands-on Projects Section -->
      <?php if($projects): ?>
        <section style="margin-bottom:2.5rem;">
          <div style="margin-bottom:1rem;">
            <span class="sub" style="font-size:0.8rem; text-transform:uppercase; font-weight:700; color:var(--emerald);">Practical Experience</span>
            <h2 style="font-size:1.75rem; color:var(--primary);">Real-World Portfolio Projects</h2>
          </div>

          <div class="grid-3" style="grid-template-columns:1fr;">
            <?php foreach($projects as $pIdx => $p): ?>
              <div class="project-card" style="border-left:4px solid var(--brand); display:flex; gap:1.25rem; align-items:flex-start;">
                <div style="background:var(--brand-light); color:var(--brand); font-weight:800; border-radius:var(--radius-md); padding:0.6rem 1rem; font-size:1.1rem; flex-shrink:0;">
                  #<?php echo ($pIdx+1); ?>
                </div>
                <div>
                  <h4 style="font-size:1.2rem; color:var(--primary); margin-bottom:0.4rem;"><?php echo esc($p['title']); ?></h4>
                  <p style="color:var(--text-muted); font-size:0.95rem; line-height:1.6;"><?php echo esc($p['description']); ?></p>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </section>
      <?php endif; ?>

      <!-- Course FAQs -->
      <section>
        <h2 style="font-size:1.75rem; color:var(--primary); margin-bottom:1rem;">Frequently Asked Questions</h2>
        <div class="accordion">
          <div class="accordion-item">
            <div class="accordion-header">
              <h3><span>❓</span> What are the batch timings for <?php echo esc($course['title']); ?>?</h3>
              <div class="accordion-icon">▾</div>
            </div>
            <div class="accordion-content">
              <div class="topic-list">
                We have flexible morning, afternoon, and evening batches (Mon-Fri & Weekend options available). Please send an inquiry to get the latest available batch timings.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <div class="accordion-header">
              <h3><span>❓</span> Will I get a certificate after completing the course?</h3>
              <div class="accordion-icon">▾</div>
            </div>
            <div class="accordion-content">
              <div class="topic-list">
                Yes! Every student receives an official Chedo Tech Course Completion Certificate after successfully completing the modules, assignments, and mini-projects.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <div class="accordion-header">
              <h3><span>❓</span> Are there any prerequisites for this course?</h3>
              <div class="accordion-icon">▾</div>
            </div>
            <div class="accordion-content">
              <div class="topic-list">
                For beginner tracks (C, Python, Java, Data Science Foundation), basic computer operation skills are sufficient. We teach all programming concepts from scratch.
              </div>
            </div>
          </div>
        </div>
      </section>

    </div>

    <!-- Right Sidebar Column (Sticky Enrollment Card) -->
    <div id="enquireForm">
      <div class="course-sidebar-card">
        <div class="sidebar-card-header">
          <h3>Enquire For Next Batch</h3>
          <p>Get batch timing details, fee structure & syllabus PDF.</p>
        </div>

        <?php if($msg === 'success'): ?>
          <div style="background:var(--emerald-light); border:1px solid var(--emerald); color:var(--emerald); padding:0.75rem; border-radius:var(--radius-sm); font-size:0.85rem; margin-bottom:1rem; font-weight:600;">
            ✓ Thank you! Your enquiry has been received. Our counselor will contact you shortly.
          </div>
        <?php endif; ?>

        <form method="post" action="/enquire-submit.php">
          <input type="hidden" name="course_id" value="<?php echo intval($course['id']); ?>">
          <input type="hidden" name="source_page" value="Course: <?php echo esc($course['title']); ?>">

          <div class="form-group">
            <label>Full Name *</label>
            <input type="text" name="name" class="form-control" placeholder="e.g. Rahul Sharma" required>
          </div>

          <div class="form-group">
            <label>Phone Number *</label>
            <input type="tel" name="phone" class="form-control" placeholder="e.g. +91 9876543210" required>
          </div>

          <div class="form-group">
            <label>Email Address</label>
            <input type="email" name="email" class="form-control" placeholder="e.g. rahul@gmail.com">
          </div>

          <div class="form-group">
            <label>Preferred Time / Message</label>
            <textarea name="message" class="form-control" placeholder="Mention morning or evening batch preference..."></textarea>
          </div>

          <button type="submit" class="btn btn-primary" style="width:100%; padding:0.85rem;">Send Inquiry ➔</button>
        </form>

        <div style="margin-top:1.5rem; padding-top:1rem; border-top:1px solid var(--border); text-align:center;">
          <p style="font-size:0.85rem; color:var(--text-muted); margin-bottom:0.75rem;">Or connect directly on WhatsApp:</p>
          <a href="https://wa.me/919876543210?text=Hi%20Chedo%20Tech,%20I%20want%20information%20for%20<?php echo urlencode($course['title']); ?>" target="_blank" class="btn btn-whatsapp" style="width:100%;">💬 Chat on WhatsApp</a>
        </div>
      </div>
    </div>

  </div>

</main>

<?php include 'includes/footer.php'; ?>
