<?php 
$page_title = "Contact & Inquiry";
$meta_desc = "Contact Chedo Tech programming institute in Pune for course details, batch schedules, fees, and enrollment.";
include 'includes/header.php'; 
$msg = $_GET['msg'] ?? '';
?>

<main id="main">

<section class="relative overflow-hidden border-b border-slate-100 bg-slate-50/50 py-12 lg:py-16">
  <div class="bg-grid bg-grid-fade absolute inset-0" aria-hidden="true"></div>
  <div class="relative mx-auto max-w-7xl px-5 sm:px-8">
    <nav aria-label="Breadcrumb" class="mb-4">
      <ol class="flex items-center gap-2 text-sm text-slate-500">
        <li><a class="transition-colors hover:text-blue-700" href="/">Home</a></li>
        <li class="text-slate-300">/</li>
        <li class="text-slate-700 font-medium">Contact</li>
      </ol>
    </nav>
    <div class="max-w-3xl">
      <p class="eyebrow">// CONTACT &amp; ENQUIRY</p>
      <h1 class="mt-2 text-[clamp(2.2rem,5vw,3.75rem)] font-extrabold leading-[1.1] tracking-tight text-slate-900">Talk With Us.</h1>
      <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg">
        Planning to start programming? Want batch details? Have a question about a course?
        Message us on WhatsApp, call the center, or visit us in person — we are happy to help.
      </p>
    </div>
  </div>
</section>

<section class="py-16 bg-white">
  <div class="mx-auto grid max-w-7xl gap-10 px-5 sm:px-8 lg:grid-cols-12">
    
    <!-- Contact Info Cards -->
    <div class="space-y-6 lg:col-span-5">
      <div class="grid gap-4 sm:grid-cols-2">
        <div class="card p-6">
          <div class="flex items-center gap-3 mb-3">
            <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600 text-lg">💬</span>
            <h3 class="text-base font-bold text-slate-900">WhatsApp</h3>
          </div>
          <p class="text-xs text-slate-500 mb-4">Fastest response for course inquiries and batch schedules.</p>
          <a href="https://wa.me/919876543210" target="_blank" class="btn-wa w-full text-center">Chat on WhatsApp</a>
        </div>

        <div class="card p-6">
          <div class="flex items-center gap-3 mb-3">
            <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-50 text-blue-600 text-lg">📞</span>
            <h3 class="text-base font-bold text-slate-900">Phone</h3>
          </div>
          <p class="text-xs text-slate-500 mb-4">Call our counselor during classroom hours (9 AM - 8 PM).</p>
          <a href="tel:+919876543210" class="btn-secondary w-full text-center">Call +91-98765-43210</a>
        </div>

        <div class="card p-6 sm:col-span-2">
          <div class="flex items-center gap-3 mb-3">
            <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-indigo-50 text-indigo-600 text-lg">📍</span>
            <h3 class="text-base font-bold text-slate-900">Visit Center (Pune)</h3>
          </div>
          <p class="text-xs text-slate-500 mb-4">Chedo Tech Programming Center, Main Road, Pune, Maharashtra 411001.</p>
          <a href="https://maps.google.com" target="_blank" class="btn-secondary w-full text-center">Open in Google Maps ➔</a>
        </div>
      </div>
    </div>

    <!-- Inquiry Form -->
    <div class="lg:col-span-7">
      <div class="card p-8 shadow-sm">
        <h2 class="text-2xl font-bold text-slate-900 mb-2">Send an Inquiry</h2>
        <p class="text-sm text-slate-500 mb-6">Fill out your details below and our team will get back to you with syllabus details &amp; schedule.</p>

        <?php if($msg === 'success'): ?>
          <div class="mb-6 rounded-xl bg-emerald-50 p-4 text-sm font-semibold text-emerald-700 border border-emerald-200">
            ✓ Your inquiry has been submitted successfully! We will get in touch with you shortly.
          </div>
        <?php endif; ?>

        <form method="post" action="/enquire-submit.php" class="space-y-5">
          <input type="hidden" name="source_page" value="Contact Page">

          <div class="grid gap-4 sm:grid-cols-2">
            <div>
              <label class="field-label">Your Name *</label>
              <input type="text" name="name" class="field-input" placeholder="e.g. Chetan Sharma" required>
            </div>
            <div>
              <label class="field-label">Mobile Number *</label>
              <input type="tel" name="phone" class="field-input" placeholder="e.g. +91 9876543210" required>
            </div>
          </div>

          <div class="grid gap-4 sm:grid-cols-2">
            <div>
              <label class="field-label">Email Address</label>
              <input type="email" name="email" class="field-input" placeholder="chetan@example.com">
            </div>
            <div>
              <label class="field-label">Course of Interest</label>
              <input type="text" name="course_interest" class="field-input" placeholder="e.g. MERN Full Stack / C++">
            </div>
          </div>

          <div>
            <label class="field-label">Message / Questions</label>
            <textarea name="message" class="field-input min-h-[120px]" placeholder="Tell us about your background and what you hope to achieve..."></textarea>
          </div>

          <button type="submit" class="btn-primary w-full text-center">Submit Inquiry ➔</button>
        </form>
      </div>
    </div>

  </div>
</section>

</main>
<?php include 'includes/footer.php'; ?>
