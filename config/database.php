<?php

require_once __DIR__ . '/config.php';


/**
 * Create and return the PDO connection.
 */
function db(): PDO
{
    static $pdo = null;

    if ($pdo instanceof PDO) {
        return $pdo;
    }

    $pdo = new PDO(
        'mysql:host=' . RDS_HOST .
        ';dbname=' . RDS_DB .
        ';charset=utf8mb4',
        RDS_USER,
        RDS_PASS,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );

    return $pdo;
}


/**
 * Get semester information.
 */
function academicSemesters(): array
{
    if (DEMO_MODE) {
        return [
            [
                'semester' => 1,
                'sgpa' => 9.02,
                'result_period' => 'Jan-2025'
            ],
            [
                'semester' => 2,
                'sgpa' => 9.50,
                'result_period' => 'May-2025'
            ],
            [
                'semester' => 3,
                'sgpa' => 9.50,
                'result_period' => 'Nov-2025'
            ],
            [
                'semester' => 4,
                'sgpa' => 8.70,
                'result_period' => 'May-2026'
            ],
        ];
    }

    try {
        return db()
            ->query(
                'SELECT semester, sgpa, result_period
                 FROM academic_semesters
                 ORDER BY semester'
            )
            ->fetchAll();

    } catch (Throwable $e) {
        return [];
    }
}


/**
 * Get all academic records.
 */
function academicRows(): array
{
    if (DEMO_MODE) {
        return [
            [
                'semester' => 1,
                'code' => 'CSE1012',
                'course' => 'Problem Solving using Python',
                'course_type' => 'ETL',
                'credits' => 4,
                'grade' => 'S'
            ],
            [
                'semester' => 1,
                'code' => 'ECE1002',
                'course' => 'Fundamentals of Electrical and Electronics Engineering',
                'course_type' => 'ETL',
                'credits' => 4,
                'grade' => 'A'
            ],
            // Demo mode can remain minimal.
        ];
    }

    try {
        return db()
            ->query(
                'SELECT
                    semester,
                    course_code AS code,
                    course_name AS course,
                    course_type,
                    credits,
                    grade,
                    exam_month,
                    result_date
                 FROM academic_records
                 ORDER BY semester, id'
            )
            ->fetchAll();

    } catch (Throwable $e) {
        return [];
    }
}


/**
 * Get overall academic summary.
 */
function academicSummary(): array
{
    if (DEMO_MODE) {
        return [
            'cgpa' => 9.20,
            'credits_registered' => 92,
            'credits_earned' => 92,
        ];
    }

    try {
        $stmt = db()->query(
            'SELECT
                cgpa,
                credits_registered,
                credits_earned
             FROM academic_summary
             WHERE id = 1
             LIMIT 1'
        );

        return $stmt->fetch() ?: [];

    } catch (Throwable $e) {
        return [];
    }
}