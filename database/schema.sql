CREATE DATABASE IF NOT EXISTS portfolio;
USE portfolio;

-- ============================================
-- SEMESTER SUMMARY
-- ============================================

CREATE TABLE IF NOT EXISTS academic_semesters (
    id INT AUTO_INCREMENT PRIMARY KEY,
    semester INT NOT NULL UNIQUE,
    sgpa DECIMAL(3,2) NOT NULL,
    result_period VARCHAR(20) NOT NULL
);

INSERT INTO academic_semesters
    (semester, sgpa, result_period)
VALUES
    (1, 9.02, 'Jan-2025'),
    (2, 9.50, 'May-2025'),
    (3, 9.50, 'Nov-2025'),
    (4, 8.70, 'May-2026')
ON DUPLICATE KEY UPDATE
    sgpa = VALUES(sgpa),
    result_period = VALUES(result_period);


-- ============================================
-- ACADEMIC RECORDS
-- ============================================

CREATE TABLE IF NOT EXISTS academic_records (
    id INT AUTO_INCREMENT PRIMARY KEY,
    semester INT NOT NULL,
    course_code VARCHAR(20) NOT NULL,
    course_name VARCHAR(150) NOT NULL,
    course_type VARCHAR(10),
    credits DECIMAL(3,1) NOT NULL,
    grade VARCHAR(5) NOT NULL,
    exam_month VARCHAR(20),
    result_date DATE,

    FOREIGN KEY (semester)
        REFERENCES academic_semesters(semester)
);


-- ============================================
-- SEMESTER 1
-- Jan 2025
-- ============================================

INSERT INTO academic_records
    (semester, course_code, course_name, course_type, credits, grade, exam_month, result_date)
VALUES
    (1, 'CSE1012', 'Problem Solving using Python', 'ETL', 4.0, 'S', 'Jan-2025', '2025-02-17'),
    (1, 'ECE1002', 'Fundamentals of Electrical and Electronics Engineering', 'ETL', 4.0, 'A', 'Jan-2025', '2025-02-17'),
    (1, 'ENG1002', 'English for Effective Communication', 'ETL', 3.0, 'C', 'Jan-2025', '2025-02-17'),
    (1, 'MAT1001', 'Calculus for Engineers', 'ETL', 4.0, 'A', 'Jan-2025', '2025-02-17'),
    (1, 'PHY1008', 'Modern Physics', 'ETL', 4.0, 'A', 'Jan-2025', '2025-02-17'),
    (1, 'STS1004', 'Introduction to Problem Solving', 'TH', 3.0, 'S', 'Jan-2025', '2025-02-17');


-- ============================================
-- SEMESTER 2
-- May 2025
-- ============================================

INSERT INTO academic_records
    (semester, course_code, course_name, course_type, credits, grade, exam_month, result_date)
VALUES
    (2, 'CHY1009', 'Chemistry and Environmental Studies', 'ETL', 4.0, 'A', 'May-2025', '2025-06-21'),
    (2, 'CSE2005', 'Object Oriented Programming using JAVA', 'ETL', 4.0, 'S', 'May-2025', '2025-06-21'),
    (2, 'ECE1003', 'Digital Logic Design', 'ETL', 4.0, 'S', 'May-2025', '2025-06-21'),
    (2, 'ENG2001', 'English for Professional Communication', 'ETL', 3.0, 'A', 'May-2025', '2025-06-21'),
    (2, 'MAT1002', 'Applications of Differential and Difference Equations', 'TH', 4.0, 'A', 'May-2025', '2025-06-21'),
    (2, 'STS1009', 'Introduction to Quantitative, Logical and Verbal Ability', 'TH', 3.0, 'S', 'May-2025', '2025-06-21');


-- ============================================
-- SEMESTER 3
-- Nov 2025
-- ============================================

INSERT INTO academic_records
    (semester, course_code, course_name, course_type, credits, grade, exam_month, result_date)
VALUES
    (3, 'CSE1022', 'Introduction to Programming', 'ETL', 3.0, 'S', 'Nov-2025', '2026-01-05'),
    (3, 'CSE2001', 'Data Structures and Algorithms', 'ETL', 4.0, 'S', 'Nov-2025', '2026-01-05'),
    (3, 'CSE3002', 'Artificial Intelligence', 'TH', 3.0, 'A', 'Nov-2025', '2026-01-05'),
    (3, 'ECS2002', 'Engineering Clinics - System Design', 'PJT', 2.0, 'A', 'Nov-2025', '2026-01-05'),
    (3, 'MAT1003', 'Discrete Mathematical Structures', 'TH', 4.0, 'A', 'Nov-2025', '2026-01-05'),
    (3, 'MGT1001', 'Ethics and Values', 'LO', 2.0, 'P', 'Nov-2025', '2026-01-05'),
    (3, 'STS2008', 'Numerical Ability and Cognitive Intelligence', 'TH', 3.0, 'S', 'Nov-2025', '2026-01-05');


-- ============================================
-- SEMESTER 4
-- May 2026
-- ============================================

INSERT INTO academic_records
    (semester, course_code, course_name, course_type, credits, grade, exam_month, result_date)
VALUES
    (4, 'CSE1005', 'Software Engineering', 'ETL', 4.0, 'A', 'May-2026', '2026-06-15'),
    (4, 'CSE2007', 'Database Management Systems', 'ETL', 4.0, 'A', 'May-2026', '2026-06-15'),
    (4, 'CSE4012', 'UI UX User Experience Design', 'ETL', 4.0, 'A', 'May-2026', '2026-06-15'),
    (4, 'ECE2002', 'Computer Organization and Architecture', 'TH', 4.0, 'A', 'May-2026', '2026-06-15'),
    (4, 'EXC2058', 'Team Next Nexus', 'NCC', 2.0, 'P', 'May-2026', '2026-06-15'),
    (4, 'MAT1011', 'Applied Statistics', 'ETL', 4.0, 'A', 'May-2026', '2026-06-15'),
    (4, 'MGT1040', 'Entrepreneurship', 'TH', 2.0, 'C', 'May-2026', '2026-06-15'),
    (4, 'STS2009', 'Arithmetic Problem Solving Skills', 'TH', 3.0, 'A', 'May-2026', '2026-06-15');


-- ============================================
-- OVERALL ACADEMIC SUMMARY
-- ============================================

CREATE TABLE IF NOT EXISTS academic_summary (
    id INT PRIMARY KEY,
    cgpa DECIMAL(3,2) NOT NULL,
    credits_registered DECIMAL(5,1) NOT NULL,
    credits_earned DECIMAL(5,1) NOT NULL
);

INSERT INTO academic_summary
    (id, cgpa, credits_registered, credits_earned)
VALUES
    (1, 9.20, 92.0, 92.0)
ON DUPLICATE KEY UPDATE
    cgpa = VALUES(cgpa),
    credits_registered = VALUES(credits_registered),
    credits_earned = VALUES(credits_earned);