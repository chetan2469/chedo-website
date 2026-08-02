<?php session_start(); if(!isset($_SESSION['admin'])){ header('Location: index.php'); exit; } include '../includes/db.php'; $courses=$pdo->query("SELECT * FROM courses ORDER BY created_at DESC LIMIT 5")->fetchAll(); $enquiries=$pdo->query("SELECT * FROM enquiries ORDER BY created_at DESC LIMIT 5")->fetchAll(); ?>
<!DOCTYPE html><html><head><title>Admin Dashboard</title><link rel="stylesheet" href="/assets/css/style.css"></head><body>
<div class="container" style="padding:3rem 0;">
<h1>Admin Dashboard</h1>
<p>Courses: <?php echo $pdo->query("SELECT COUNT(*) FROM courses")->fetchColumn(); ?></p>
<p>Enquiries: <?php echo $pdo->query("SELECT COUNT(*) FROM enquiries")->fetchColumn(); ?></p>
<h2>Recent Enquiries</h2>
<table border="1" cellpadding="6"><tr><th>Name</th><th>Phone</th><th>Course</th><th>Status</th></tr>
<?php foreach($enquiries as $e): ?><tr><td><?php echo htmlspecialchars($e['name']); ?></td><td><?php echo htmlspecialchars($e['phone']); ?></td><td><?php echo htmlspecialchars($e['course_id']); ?></td><td><?php echo htmlspecialchars($e['status']); ?></td></tr><?php endforeach; ?></table>
</div>
</body></html>
