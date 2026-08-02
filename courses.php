<?php 
$page_title = "Browse Courses & Programs";
$meta_desc = "Explore all practical offline training courses at Chedo Tech: C, C++, Java, Python, DSA, MERN Full Stack, Data Science, Flutter, and UI/UX.";
include 'includes/header.php'; 
$all_courses = get_courses(50);
$categories = get_categories();
$active_cat = $_GET['cat'] ?? 'all';
?>
<main class="container" style="padding:3.5rem 0;">

  <div class="section-title" style="text-align:left; max-width:800px; margin-bottom:2rem;">
    <span class="sub">Comprehensive Training Programs</span>
    <h1>Explore All Courses</h1>
    <p>Hands-on classroom training with live coding sessions, printed study material, daily assignments, and real-world project development.</p>
  </div>

  <!-- Interactive Filter & Search Bar -->
  <div class="filter-bar">
    <div class="search-input-wrap">
      <span class="search-icon">🔍</span>
      <input type="text" id="courseSearchInput" class="form-control" placeholder="Search course by name, language or key topics (e.g. Python, React)...">
    </div>

    <div class="category-pills">
      <div class="filter-pill <?php echo ($active_cat === 'all') ? 'active' : ''; ?>" data-cat="all">All Courses</div>
      <?php foreach($categories as $cat): ?>
        <div class="filter-pill <?php echo ($active_cat === $cat['slug']) ? 'active' : ''; ?>" data-cat="<?php echo esc($cat['slug']); ?>">
          <?php echo esc($cat['name']); ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- Course Grid -->
  <div class="grid-3" id="coursesContainer">
    <?php foreach($all_courses as $c): 
      $badgeClass = get_level_badge_class($c['level']);
      $duration = get_course_duration($c['slug']);
      $is_cat_match = ($active_cat === 'all' || $active_cat === $c['category_slug']);
    ?>
      <div class="course-card course-card-item" data-category="<?php echo esc($c['category_slug']); ?>" style="<?php echo $is_cat_match ? '' : 'display:none;'; ?>">
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
            <span>📍 Offline Classroom</span>
          </div>
          <a href="/course.php?slug=<?php echo esc($c['slug']); ?>" class="btn btn-primary" style="width:100%; margin-top:1.25rem;">View Full Syllabus ➔</a>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

</main>
<?php include 'includes/footer.php'; ?>
