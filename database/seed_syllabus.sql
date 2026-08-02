-- Clear existing syllabus data before seeding fresh structured data
TRUNCATE TABLE course_topics;
DELETE FROM course_modules;
ALTER TABLE course_modules AUTO_INCREMENT = 1;
ALTER TABLE course_topics AUTO_INCREMENT = 1;
TRUNCATE TABLE course_projects;

-- 1. C Programming (course_id = 1)
INSERT INTO course_modules (course_id, title, description, sort_order) VALUES
(1, 'Module 1: Programming Basics & Logic Building', 'Introduction to computers, compilers, flowcharts, variables, and data types.', 1),
(1, 'Module 2: Control Flow & Decision Making', 'Conditional statements (if-else, switch) and looping constructs (for, while, do-while).', 2),
(1, 'Module 3: Functions, Scope & Recursion', 'Modular programming, function definitions, parameter passing, and recursive problem solving.', 3),
(1, 'Module 4: Arrays, Strings & Memory Layout', '1D and 2D arrays, character arrays, string handling functions, and memory layout.', 4),
(1, 'Module 5: Pointers & Dynamic Memory Management', 'Pointer arithmetic, call by value vs reference, malloc, calloc, realloc, and free.', 5),
(1, 'Module 6: Structures, Unions & File Handling', 'User-defined data types, file I/O operations (fopen, fread, fwrite, fclose), and macros.', 6);

INSERT INTO course_topics (module_id, title, sort_order) VALUES
-- C Mod 1
(1, 'Computer Architecture & Compiler Workflow (GCC)', 1),
(1, 'Variables, Constants, Data Types & Keywords', 2),
(1, 'Input/Output Operations with printf & scanf', 3),
(1, 'Operators: Arithmetic, Relational, Logical, Bitwise', 4),
-- C Mod 2
(2, 'If, Else-If Ladder & Switch Case Mechanics', 1),
(2, 'While, Do-While & For Loops', 2),
(2, 'Nested Loops & Pattern Printing Challenges', 3),
(2, 'Break, Continue & Sentinel Values', 4),
-- C Mod 3
(3, 'Function Declaration, Definition & Prototyping', 1),
(3, 'Local vs Global Scope & Storage Classes (auto, static, extern)', 2),
(3, 'Recursion Mechanics & Stack Frame Analysis', 3),
-- C Mod 4
(4, '1D Arrays & Memory Contiguity', 1),
(4, '2D Matrix Operations & Searching Algorithms', 2),
(4, 'String Manipulation without string.h', 3),
(4, 'Standard String Library Functions (strcpy, strcmp, strcat)', 4),
-- C Mod 5
(5, 'Pointer Fundamentals & Addressing Operator (&, *)', 1),
(5, 'Pointer Arithmetic & Array-Pointer Relationship', 2),
(5, 'Dynamic Memory Allocation (malloc, calloc, realloc, free)', 3),
(5, 'Dangling Pointers & Memory Leaks Prevention', 4),
-- C Mod 6
(6, 'Structures, Nested Structures & Typedef', 1),
(6, 'Unions vs Structures & Bit Fields', 2),
(6, 'File I/O Operations: Text & Binary File Processing', 3),
(6, 'Command Line Arguments & Preprocessor Directives', 4);

INSERT INTO course_projects (course_id, title, description, sort_order) VALUES
(1, 'Student Management System (Console)', 'A CLI-based system to store, search, update, and delete student records with binary file persistence.', 1),
(1, 'Bank Account Console Utility', 'Simulates deposit, withdrawal, interest calculation, and transaction history using structures and file handling.', 2);


-- 2. C++ Programming (course_id = 2)
INSERT INTO course_modules (course_id, title, description, sort_order) VALUES
(2, 'Module 1: C++ Foundations & Object-Oriented Principles', 'Transitioning from C to C++, namespaces, classes, objects, and encapsulation.', 1),
(2, 'Module 2: Constructors, Destructors & Operator Overloading', 'Object initialization lifecycle, copy constructors, move semantics, and custom operators.', 2),
(2, 'Module 3: Inheritance, Polymorphism & Virtual Functions', 'Code reuse through single/multiple inheritance, runtime polymorphism, and abstract classes.', 3),
(2, 'Module 4: Templates, Exceptions & Standard Template Library (STL)', 'Generic programming with templates, exception handling, STL vectors, maps, and algorithms.', 4);

INSERT INTO course_topics (module_id, title, sort_order) VALUES
(7, 'Namespaces, I/O Streams (cin/cout), & References', 1),
(7, 'Classes, Objects, Access Specifiers (public/private/protected)', 2),
(7, 'Encapsulation & Inline Functions', 3),
(8, 'Default, Parameterized & Copy Constructors', 1),
(8, 'Destructors & RAII (Resource Acquisition Is Initialization)', 2),
(8, 'Operator Overloading (Unary & Binary Operators)', 3),
(9, 'Single, Multiple, Hierarchical & Hybrid Inheritance', 1),
(9, 'Function Overriding & Virtual Tables (vtable/vptr)', 2),
(9, 'Abstract Classes & Pure Virtual Functions', 3),
(10, 'Function Templates & Class Templates', 1),
(10, 'Try, Catch, Throw Exception Management', 2),
(10, 'STL Containers: Vector, List, Map, Set, Stack, Queue', 3),
(10, 'STL Algorithms: sort, find, binary_search, transform', 4);

INSERT INTO course_projects (course_id, title, description, sort_order) VALUES
(2, 'Inventory Management System', 'Object-oriented inventory tracking system using OOPs, templates, and file persistence.', 1),
(2, 'Contact Directory CLI', 'Fast C++ contact management application using STL containers and custom search filters.', 2);


-- 3. Java Programming (course_id = 3)
INSERT INTO course_modules (course_id, title, description, sort_order) VALUES
(3, 'Module 1: Java Basics & OOP Architecture', 'JVM, JRE, JDK, bytecode execution, classes, objects, and methods.', 1),
(3, 'Module 2: Deep Dive into OOP & Packages', 'Inheritance, interfaces, abstract classes, polymorphism, and package management.', 2),
(3, 'Module 3: Exception Handling, Strings & I/O Streams', 'Checked vs unchecked exceptions, String Immutability, StringBuilder, and File Streams.', 3),
(3, 'Module 4: Java Collections & Multithreading', 'List, Set, Map interfaces, Generics, Thread Lifecycle, and Synchronization.', 4);

INSERT INTO course_topics (module_id, title, sort_order) VALUES
(11, 'Java Architecture: JVM Bytecode & Garbage Collection', 1),
(11, 'Data Types, Arrays, Control Flow & Wrapper Classes', 2),
(11, 'Class Design, Constructors, & Keyword this/static/final', 3),
(12, 'Inheritance (super keyword) & Method Overriding', 1),
(12, 'Interfaces & Default/Static Interface Methods', 2),
(12, 'Abstract Classes vs Interfaces', 3),
(13, 'Try-Catch-Finally, Throw/Throws & Custom Exceptions', 1),
(13, 'String Pool, StringBuffer & StringBuilder Performance', 2),
(13, 'File I/O Streams, Reader/Writer, & Serialization', 3),
(14, 'ArrayList, LinkedList, HashSet, HashMap, ConcurrentHashMap', 1),
(14, 'Comparable & Comparator Interfaces', 2),
(14, 'Multithreading: Thread Class, Runnable, Executors & Locks', 3);

INSERT INTO course_projects (course_id, title, description, sort_order) VALUES
(3, 'Banking Management Application', 'Java application supporting account management, fund transfers, transaction history, and multi-user access.', 1),
(3, 'Library Management System', 'Console application utilizing Collections framework, file serialization, and search mechanics.', 2);


-- 4. Python Programming (course_id = 4)
INSERT INTO course_modules (course_id, title, description, sort_order) VALUES
(4, 'Module 1: Python Fundamentals & Data Structures', 'Syntax, data types, lists, tuples, dictionaries, sets, and control flow.', 1),
(4, 'Module 2: Functional & Modular Programming', 'Custom functions, lambda, map/filter/reduce, modules, and virtual environments.', 2),
(4, 'Module 3: Object-Oriented Python & Exception Handling', 'Classes, dunder methods, inheritance, custom exceptions, and file operations.', 3),
(4, 'Module 4: Advanced Python & Automation', 'Decorators, generators, list comprehensions, regex, and web scraping basics.', 4);

INSERT INTO course_topics (module_id, title, sort_order) VALUES
(15, 'Variables, Dynamic Typing & Type Casting', 1),
(15, 'Lists, Tuples, Dictionaries & Sets Manipulation', 2),
(15, 'Conditionals, Loops & List/Dict Comprehensions', 3),
(16, 'Functions, *args, **kwargs, & Variable Scope', 1),
(16, 'Lambda Functions, Map, Filter & Reduce', 2),
(16, 'Python Modules, Packages & pip Package Manager', 3),
(17, 'Classes, Magic Methods (__init__, __str__, __repr__)', 1),
(17, 'Inheritance, Encapsulation & Polymorphism in Python', 2),
(17, 'File Handling (TXT, CSV, JSON) & Exception Handling', 3),
(18, 'Decorators, Generators & Iterators', 1),
(18, 'Regular Expressions (re module) for Text Processing', 2),
(18, 'Automating Tasks & Scraping Data with BeautifulSoup', 3);

INSERT INTO course_projects (course_id, title, description, sort_order) VALUES
(4, 'Smart Personal Finance Tracker', 'Python app for tracking income, categorizing expenses, parsing CSV logs, and generating financial summaries.', 1),
(4, 'Automated Web Content Scraper', 'Python script extracting live news/weather updates, parsing HTML, and exporting data into structured JSON files.', 2);


-- 5. Data Structures & Algorithms (course_id = 5)
INSERT INTO course_modules (course_id, title, description, sort_order) VALUES
(5, 'Module 1: Complexity Analysis & Linear Data Structures', 'Big-O notation, Arrays, Linked Lists (Singly, Doubly, Circular), Stacks, and Queues.', 1),
(5, 'Module 2: Trees, Heaps & Binary Search Trees (BST)', 'Tree traversals (Inorder, Preorder, Postorder), BST operations, AVL Trees, and Priority Queues.', 2),
(5, 'Module 3: Graph Algorithms & Searching/Sorting', 'BFS, DFS, Dijkstra Algorithm, Kruskal/Prim MST, Bubble, Merge, and Quick Sort.', 3),
(5, 'Module 4: Dynamic Programming & Greedy Algorithms', 'Memoization, Tabulation, Knapsack problem, Fibonacci optimization, and Backtracking.', 4);

INSERT INTO course_topics (module_id, title, sort_order) VALUES
(19, 'Time & Space Complexity (Big-O, Big-Omega, Big-Theta)', 1),
(19, 'Linked Lists: Insertion, Deletion, Reversal, Cycle Detection', 2),
(19, 'Stack Implementation & Expression Evaluation (Infix/Postfix)', 3),
(19, 'Queue, Circular Queue, & Deque Data Structures', 4),
(20, 'Binary Trees & Traversals (DFS & BFS Level Order)', 1),
(20, 'Binary Search Trees (BST) Insertion, Deletion & Search', 2),
(20, 'Min-Heap, Max-Heap & Priority Queue Applications', 3),
(21, 'Graph Representation: Adjacency Matrix vs List', 1),
(21, 'Breadth-First Search (BFS) & Depth-First Search (DFS)', 2),
(21, 'Shortest Path Algorithms: Dijkstra & Bellman-Ford', 3),
(21, 'Sorting Algorithms: MergeSort, QuickSort, HeapSort Analysis', 4),
(22, 'Recursion vs Dynamic Programming (Overlapping Subproblems)', 1),
(22, '0/1 Knapsack & Longest Common Subsequence (LCS)', 2),
(22, 'Backtracking Fundamentals: N-Queens & Sudoku Solver', 3);

INSERT INTO course_projects (course_id, title, description, sort_order) VALUES
(5, 'Shortest Path Map Router', 'Implementation of Dijkstra algorithm for finding optimal routes between cities with visual console graphs.', 1),
(5, 'Custom In-Memory Caching Engine', 'LRU (Least Recently Used) Cache implementation using HashMaps and Doubly Linked Lists.', 2);


-- 6. Data Science (course_id = 6)
INSERT INTO course_modules (course_id, title, description, sort_order) VALUES
(6, 'Module 1: Python for Data Analysis (NumPy & Pandas)', 'Vectorized computing, Series, DataFrames, indexing, cleaning, and aggregation.', 1),
(6, 'Module 2: Data Visualization & Exploratory Data Analysis (EDA)', 'Matplotlib, Seaborn, Plotly, statistical plots, correlation matrices, and distribution analysis.', 2),
(6, 'Module 3: Machine Learning Algorithms & Scikit-Learn', 'Supervised vs Unsupervised Learning, Regression, Classification, Clustering, and Evaluation Metrics.', 3),
(6, 'Module 4: SQL & Database Integration for Analytics', 'Relational database queries, JOINs, group aggregations, window functions, and pandas SQL integration.', 4);

INSERT INTO course_topics (module_id, title, sort_order) VALUES
(23, 'NumPy N-Dimensional Arrays, Slicing & Matrix Operations', 1),
(23, 'Pandas DataFrames, Handling Missing Values & Feature Scaling', 2),
(23, 'Data Cleaning, Merging, GroupBy & Pivot Tables', 3),
(24, 'Matplotlib Line, Bar, Scatter, and Histogram Plotting', 1),
(24, 'Seaborn Heatmaps, Boxplots, Pairplots & Violin Plots', 2),
(24, 'Exploratory Data Analysis (EDA) Workflow on Real Datasets', 3),
(25, 'Linear & Logistic Regression Models', 1),
(25, 'Decision Trees, Random Forests & Support Vector Machines (SVM)', 2),
(25, 'K-Means Clustering & Principal Component Analysis (PCA)', 3),
(25, 'Model Evaluation: Accuracy, Precision, Recall, F1-Score & ROC Curve', 4),
(26, 'SQL Queries, Joins, Aggregations & Subqueries for Analysts', 1),
(26, 'Connecting Python to MySQL/PostgreSQL via SQLAlchemy', 2);

INSERT INTO course_projects (course_id, title, description, sort_order) VALUES
(6, 'Customer Churn Prediction Engine', 'End-to-end Machine Learning project predicting customer attrition using Pandas, Scikit-Learn, and Seaborn.', 1),
(6, 'Sales & Revenue Analytics Dashboard', 'Exploratory Data Analysis project examining e-commerce sales metrics with interactive visualizations.', 2);


-- 7. Data Science Foundation (course_id = 7)
INSERT INTO course_modules (course_id, title, description, sort_order) VALUES
(7, 'Module 1: Programming & Logic Building', 'Computer literacy, Python basics, variables, loops, and condition handling.', 1),
(7, 'Module 2: Introduction to Data & Descriptive Statistics', 'Understanding tabular data, mean, median, mode, variance, and standard deviation.', 2),
(7, 'Module 3: Data Handling with Pandas & Visualization', 'Reading Excel/CSV files, cleaning data, and creating charts.', 3),
(7, 'Module 4: AI & Machine Learning Awareness', 'Introduction to AI tools, ChatGPT prompt engineering for analysts, and mini capstone.', 4);

INSERT INTO course_topics (module_id, title, sort_order) VALUES
(27, 'Python Variables, Input/Output, & Control Structures', 1),
(27, 'Lists & Dictionaries for Beginners', 2),
(28, 'Data Collection, Excel vs CSV formats, & Data Types', 1),
(28, 'Descriptive Statistics: Central Tendency & Dispersion', 2),
(29, 'Pandas Basics: Loading Data & Filtering Rows', 1),
(29, 'Creating Bar Charts, Line Graphs & Pie Charts', 2),
(30, 'Overview of Artificial Intelligence & Machine Learning', 1),
(30, 'Using AI Assistance for Data Cleaning & Report Generation', 2);

INSERT INTO course_projects (course_id, title, description, sort_order) VALUES
(7, 'Student Performance Analysis Report', 'Beginner data project analyzing student marks, computing statistics, and generating summary plots.', 1);


-- 8. MERN Full Stack (course_id = 8)
INSERT INTO course_modules (course_id, title, description, sort_order) VALUES
(8, 'Module 1: Modern Frontend (HTML5, CSS3, ES6+ JS)', 'Semantic HTML, Flexbox/Grid, Responsive Design, Promises, Async/Await, and DOM manipulation.', 1),
(8, 'Module 2: React.js User Interface Development', 'JSX, Components, Props, State, React Hooks (useState, useEffect, useContext), Router, and Redux/Zustand.', 2),
(8, 'Module 3: Node.js & Express.js Backend Architecture', 'RESTful API Design, Middleware, JWT Authentication, File Uploads, and Error Handling.', 3),
(8, 'Module 4: MongoDB & Full Stack Deployment', 'NoSQL Schema Design, Mongoose ODM, Aggregation Pipeline, and Deployment to Cloud Vercel/Render.', 4);

INSERT INTO course_topics (module_id, title, sort_order) VALUES
(31, 'HTML5 Semantic Markup & Modern CSS Grid/Flexbox Layouts', 1),
(31, 'JavaScript ES6+: Destructuring, Arrow Functions, Modules, Promises, Async/Await', 2),
(31, 'DOM Manipulation, Event Handling & Fetch API', 3),
(32, 'React Components, JSX & Virtual DOM', 1),
(32, 'State Management with useState & Side Effects with useEffect', 2),
(32, 'React Router 6 for Single Page Application Navigation', 3),
(32, 'Global State Management (Context API & Redux Toolkit)', 4),
(33, 'Node.js Event Loop, Core Modules & npm Ecosystem', 1),
(33, 'Express Server Setup, Routing & Custom Middleware', 2),
(33, 'User Authentication with JWT (JSON Web Tokens) & bcrypt Password Hashing', 3),
(34, 'MongoDB Document Model, Collections & Indexing', 1),
(34, 'Mongoose Schema Validation & Population References', 2),
(34, 'Connecting React Frontend to Node Backend REST API', 3),
(34, 'Full Stack Application Deployment & CI/CD Pipelines', 4);

INSERT INTO course_projects (course_id, title, description, sort_order) VALUES
(8, 'E-Commerce Storefront Platform', 'Full Stack MERN application with product catalog, cart management, user authentication, and admin panel.', 1),
(8, 'Collaborative Task Management Board', 'Kanban-style project manager with real-time updates, drag-and-drop tasks, and role-based permissions.', 2);


-- 9. Java Full Stack (course_id = 9)
INSERT INTO course_modules (course_id, title, description, sort_order) VALUES
(9, 'Module 1: Core & Advanced Java Foundations', 'OOPs principles, Collections framework, Exception handling, Streams, and Lambda expressions.', 1),
(9, 'Module 2: Web Layer with Servlets, JSP & Spring Boot', 'HTTP protocol, Spring Core, Dependency Injection, Spring Boot REST APIs, and Annotations.', 2),
(9, 'Module 3: Persistence Layer with Hibernate & Spring Data JPA', 'ORM concepts, Entity mapping, JPQL Queries, Repositories, Transactions, and MySQL integration.', 3),
(9, 'Module 4: Frontend Integration & Spring Security', 'HTML/CSS/JS/React integration, Spring Security JWT authentication, CORS, and deployment.', 4);

INSERT INTO course_topics (module_id, title, sort_order) VALUES
(35, 'Core Java OOPs Refresher & Collection Deep Dive', 1),
(35, 'Java 8+ Features: Streams API, Functional Interfaces & Optional', 2),
(36, 'Spring Boot Fundamentals, Auto-Configuration & Starters', 1),
(36, 'Building RESTful Web Services with @RestController & DTOs', 2),
(36, 'Spring Boot Exception Handling (@ControllerAdvice)', 3),
(37, 'Hibernate ORM Framework & Entity Relationships (@OneToMany, @ManyToMany)', 1),
(37, 'Spring Data JPA Repositories & Custom Query Methods', 2),
(37, 'Database Migration with Flyway/Liquibase', 3),
(38, 'Spring Security Configuration, UserDetailsService & JWT Tokens', 1),
(38, 'Connecting React UI to Spring Boot REST Endpoints', 2),
(38, 'Testing with JUnit 5, Mockito & Application Deployment', 3);

INSERT INTO course_projects (course_id, title, description, sort_order) VALUES
(9, 'Corporate Employee Directory & Payroll System', 'Enterprise Java Spring Boot REST app with Spring Data JPA backend and React frontend.', 1),
(9, 'Online Examination & Quiz Portal', 'Secure portal for student tests with automatic scoring, timed quizzes, and PDF report generation.', 2);


-- 10. Mobile App Development (course_id = 10)
INSERT INTO course_modules (course_id, title, description, sort_order) VALUES
(10, 'Module 1: Dart Programming & Flutter Framework', 'Dart syntax, OOPs in Dart, Flutter Engine, Stateless vs Stateful Widgets.', 1),
(10, 'Module 2: UI Design, Layouts & State Management', 'Material Design components, Responsive layouts, Provider / BLoC state management.', 2),
(10, 'Module 3: REST API Integration & Local Storage', 'HTTP requests, JSON parsing, SQLite database, Hive key-value storage.', 3),
(10, 'Module 4: Firebase Integration & App Publishing', 'Firebase Auth, Firestore real-time database, Push Notifications, Play Store / App Store release.', 4);

INSERT INTO course_topics (module_id, title, sort_order) VALUES
(39, 'Dart Foundations: Variables, Null Safety, Functions & Classes', 1),
(39, 'Flutter Architecture, Widget Tree & Hot Reload Mechanics', 2),
(40, 'Stateless vs Stateful Widgets & Lifecycle Hooks', 1),
(40, 'Building Complex UIs: ListView, GridView, Stack, Animations', 2),
(40, 'State Management Architecture: Provider & BLoC Pattern', 3),
(41, 'Consuming REST APIs in Flutter using http & dio packages', 1),
(41, 'Local Storage: Shared Preferences, Hive & SQLite Integration', 2),
(42, 'Firebase Authentication (Email/Password, Google Sign-In)', 1),
(42, 'Cloud Firestore Database Read/Write & Storage', 2),
(42, 'Preparing Android APK/AAB Bundle & Publishing Guidelines', 3);

INSERT INTO course_projects (course_id, title, description, sort_order) VALUES
(10, 'Food Delivery & Ordering Mobile App', 'Flutter application featuring food menu browsing, cart checkout, Google Maps integration, and order status.', 1),
(10, 'Live Weather & Forecast Mobile App', 'Mobile app consuming live OpenWeather REST API with location detection and dynamic animated themes.', 2);


-- 11. UI/UX Design (course_id = 11)
INSERT INTO course_modules (course_id, title, description, sort_order) VALUES
(11, 'Module 1: User Experience Fundamentals & Design Thinking', 'User research, personas, user journeys, wireframing, and information architecture.', 1),
(11, 'Module 2: Master Figma & UI Visual Design', 'Figma tools, auto-layout, components, variants, design systems, and typography.', 2),
(11, 'Module 3: Interactive Prototyping & Micro-animations', 'Clickable prototypes, smart animate, micro-interactions, transition effects, and usability testing.', 3),
(11, 'Module 4: Portfolio Development & Developer Handoff', 'Design handoff for engineers, specs, exporting assets, and building a Behance/Dribbble portfolio.', 4);

INSERT INTO course_topics (module_id, title, sort_order) VALUES
(43, 'UX Research Methods, User Personas & Empathy Mapping', 1),
(43, 'Information Architecture, User Flows & Wireframing (Paper & Digital)', 2),
(44, 'Figma Fundamentals: Canvas, Frames, Vector Tools, & Auto-Layout 5.0', 1),
(44, 'Design Tokens: Color Palettes, Typography Grids & Spatial Rules', 2),
(44, 'Creating Reusable Design Components & Variant Libraries', 3),
(45, 'Interactive High-Fidelity Prototyping in Figma', 1),
(45, 'Smart Animate Transitions & Micro-Interactions', 2),
(45, 'Usability Testing & Design Iteration', 3),
(46, 'Design Handoff: Assets Export, CSS Tokens & Dev Specifications', 1),
(46, 'Building Case Studies for Web & Mobile Portfolio', 2);

INSERT INTO course_projects (course_id, title, description, sort_order) VALUES
(11, 'Neobank Mobile Banking App Redesign', 'Complete Figma UI/UX project including wireframes, design system, high-fidelity mockups, and interactive prototype.', 1),
(11, 'SaaS Analytics Dashboard UI Design System', 'Responsive web application dashboard design with dark/light themes, data visualizations, and component library.', 2);


-- 12. Kids Programming (course_id = 12)
INSERT INTO course_modules (course_id, title, description, sort_order) VALUES
(12, 'Module 1: Computer Basics & Logic with Scratch', 'Visual block programming, sprites, motion, sounds, and interactive stories.', 1),
(12, 'Module 2: Game Creation & Problem Solving', 'Making arcade games in Scratch (Maze runner, Ping Pong, Space Invaders).', 2),
(12, 'Module 3: Introduction to Python for Young Coders', 'Transitioning from blocks to text coding, Turtle graphics, shapes, and fun calculations.', 3),
(12, 'Module 4: Creative Web & AI Awareness', 'Basic HTML/CSS web page design, AI tools exploration, and final project demonstration.', 4);

INSERT INTO course_topics (module_id, title, sort_order) VALUES
(47, 'Understanding Computers, Hardware, Software & Algorithm Logic', 1),
(47, 'Scratch Interface, Sprites, Costumes, Sounds & Motion Blocks', 2),
(48, 'Conditionals, Loops & Variables in Scratch', 1),
(48, 'Building Interactive Arcade Games with Score Tracking', 2),
(49, 'Python Turtle Graphics: Drawing Shapes, Patterns & Colors', 1),
(49, 'Python Variables, Input/Output, & Fun Quiz Games', 2),
(50, 'Building My First Web Page with HTML & Colorful CSS', 1),
(50, 'Exploring AI Tools, Creative Robots & Final Showcase', 2);

INSERT INTO course_projects (course_id, title, description, sort_order) VALUES
(12, 'Interactive Scratch Arcade Game', 'Custom game designed by student featuring player controls, obstacles, scoring, and level transitions.', 1),
(12, 'My Personal Digital Portfolio Web Page', 'Fun HTML/CSS web page showcasing student coding achievements, hobbies, and Scratch games.', 2);
