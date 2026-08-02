<?php
require_once __DIR__ . '/includes/db.php';
require_once __DIR__ . '/includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $course_id = !empty($_POST['course_id']) ? intval($_POST['course_id']) : null;
    $message = trim($_POST['message'] ?? '');
    $source = trim($_POST['source_page'] ?? 'Course Page');

    if (!empty($name) && (!empty($phone) || !empty($email))) {
        try {
            $stmt = $pdo->prepare("INSERT INTO enquiries (name, phone, email, course_id, message, source_page) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->execute([$name, $phone, $email, $course_id, $message, $source]);
            header("Location: " . ($_SERVER['HTTP_REFERER'] ?? '/') . "?msg=success#enquireForm");
            exit;
        } catch (Exception $e) {
            header("Location: " . ($_SERVER['HTTP_REFERER'] ?? '/') . "?msg=error#enquireForm");
            exit;
        }
    }
}
header("Location: /");
exit;
