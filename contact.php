<?php 
$page_title = "Contact Us";
$meta_desc = "Get in touch with Chedo Tech Programming Institute in Pune. Call +91-98765-43210 or send an online inquiry for course admissions.";
include 'includes/header.php'; 
$settings = get_settings();
$courses = get_courses(50);
$msg = $_GET['msg'] ?? '';
?>
<main class="container" style="padding:4rem 0;">

  <div class="section-title" style="text-align:left; max-width:800px; margin-bottom:3rem;">
    <span class="sub">Get in Touch</span>
    <h1>Contact Chedo Tech Institute</h1>
    <p>Have questions regarding course content, batch availability, or fees? Reach out to us directly or visit our offline learning center.</p>
  </div>

  <div style="display:grid; grid-template-columns:1fr 1.2fr; gap:3.5rem; align-items:start;">

    <!-- Left Column: Contact Details Cards -->
    <div>
      
      <div class="project-card" style="margin-bottom:1.5rem; border-left:4px solid var(--brand);">
        <h3 style="font-size:1.2rem; color:var(--primary); margin-bottom:0.5rem;">📞 Phone & Direct Inquiry</h3>
        <p style="font-size:1.05rem; font-weight:600; color:var(--brand); margin-bottom:0.25rem;">
          <?php echo esc($settings['phone'] ?? '+91-98765-43210'); ?>
        </p>
        <p style="font-size:0.88rem; color:var(--text-muted);">Available Monday to Saturday (9:00 AM - 7:00 PM)</p>
      </div>

      <div class="project-card" style="margin-bottom:1.5rem; border-left:4px solid #25d366;">
        <h3 style="font-size:1.2rem; color:var(--primary); margin-bottom:0.5rem;">💬 WhatsApp Guidance</h3>
        <p style="font-size:0.92rem; color:var(--text-muted); margin-bottom:0.75rem;">Chat instantly with our academic counselors for syllabus & fee queries.</p>
        <a href="https://wa.me/919876543210" target="_blank" class="btn btn-whatsapp" style="padding:0.5rem 1rem; font-size:0.88rem;">Start WhatsApp Chat</a>
      </div>

      <div class="project-card" style="margin-bottom:1.5rem; border-left:4px solid var(--cyan);">
        <h3 style="font-size:1.2rem; color:var(--primary); margin-bottom:0.5rem;">📍 Institute Address</h3>
        <p style="font-size:0.95rem; color:var(--text-main); font-weight:500; margin-bottom:0.25rem;">
          <?php echo esc($settings['address'] ?? 'Pune, Maharashtra, India'); ?>
        </p>
        <p style="font-size:0.88rem; color:var(--text-muted);">Opening Hours: <?php echo esc($settings['opening_hours'] ?? 'Mon - Sat: 9:00 AM - 7:00 PM'); ?></p>
      </div>

      <div class="project-card" style="border-left:4px solid var(--amber);">
        <h3 style="font-size:1.2rem; color:var(--primary); margin-bottom:0.5rem;">✉️ Email Support</h3>
        <p style="font-size:0.95rem; color:var(--text-main); font-weight:500;">
          <?php echo esc($settings['email'] ?? 'hello@chedo.tech'); ?>
        </p>
      </div>

    </div>

    <!-- Right Column: Online Inquiry Form -->
    <div style="background:#fff; border:1px solid var(--border); border-radius:var(--radius-xl); padding:2.5rem; box-shadow:var(--shadow-md);">
      <h2 style="font-size:1.75rem; color:var(--primary); margin-bottom:0.5rem;">Send Us an Inquiry</h2>
      <p style="color:var(--text-muted); font-size:0.92rem; margin-bottom:1.75rem;">Fill in your details below and our team will get back to you with complete batch details.</p>

      <?php if($msg === 'success'): ?>
        <div style="background:var(--emerald-light); border:1px solid var(--emerald); color:var(--emerald); padding:0.85rem 1rem; border-radius:var(--radius-sm); font-size:0.9rem; margin-bottom:1.5rem; font-weight:600;">
          ✓ Thank you! Your inquiry has been submitted successfully. We will contact you shortly.
        </div>
      <?php endif; ?>

      <form method="post" action="/enquire-submit.php">
        <input type="hidden" name="source_page" value="Contact Page">

        <div class="form-group">
          <label>Your Full Name *</label>
          <input type="text" name="name" class="form-control" placeholder="e.g. Amit Kumar" required>
        </div>

        <div class="form-group" style="display:grid; grid-template-columns:1fr 1fr; gap:1rem;">
          <div>
            <label>Phone Number *</label>
            <input type="tel" name="phone" class="form-control" placeholder="+91 9876543210" required>
          </div>
          <div>
            <label>Email Address</label>
            <input type="email" name="email" class="form-control" placeholder="amit@gmail.com">
          </div>
        </div>

        <div class="form-group">
          <label>Select Course of Interest</label>
          <select name="course_id" class="form-control">
            <option value="">-- Choose Course (Optional) --</option>
            <?php foreach($courses as $c): ?>
              <option value="<?php echo intval($c['id']); ?>"><?php echo esc($c['title']); ?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="form-group">
          <label>Message / Batch Timing Preference</label>
          <textarea name="message" class="form-control" placeholder="Tell us if you prefer Morning, Afternoon or Evening batch..."></textarea>
        </div>

        <button type="submit" class="btn btn-primary" style="width:100%; padding:0.9rem;">Submit Inquiry ➔</button>
      </form>
    </div>

  </div>

</main>
<?php include 'includes/footer.php'; ?>
