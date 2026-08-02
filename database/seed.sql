INSERT INTO admins (username, password_hash, email) VALUES ('admin', '$2y$10$eRzYvZ8JQHqBcH1Sj1XgN.OjUqz6qZmQf6VzU1pO5dLw1v4N8i0bm', 'admin@chedo.tech');
-- Default password: admin123 (change immediately)

INSERT INTO site_settings (id, site_name, phone, whatsapp, email, address, opening_hours) VALUES (1, 'Chedo Tech Programming Institute & Development Center', '+91-98765-43210', '+91-98765-43210', 'hello@chedo.tech', 'Pune, Maharashtra, India', 'Mon - Sat: 9:00 AM - 7:00 PM');

INSERT INTO course_categories (name, slug, description, sort_order) VALUES 
('Programming', 'programming', 'Core programming fundamentals', 1),
('Full Stack', 'full-stack', 'End-to-end web development', 2),
('Data & AI', 'data-ai', 'Data Science, AI and Analytics', 3),
('Mobile', 'mobile', 'Mobile application development', 4),
('Design', 'design', 'UI/UX and visual design', 5),
('Computer Science', 'computer-science', 'Algorithms and data structures', 6),
('Kids', 'kids', 'Programming for young learners', 7);
