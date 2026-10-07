<?php

require __DIR__ . '/config/database.php';

/* ─────────────────────────────────────────────────────────
   Helpers
   ───────────────────────────────────────────────────────── */

function gradeClass(?string $grade): string
{
    if (!$grade) {
        return 'status';
    }

    return match (strtoupper($grade[0])) {
        'A'      => 'status status-a',
        'B'      => 'status status-b',
        'C'      => 'status status-c',
        'D', 'F' => 'status status-warn',
        default  => 'status',
    };
}

function sumColumn(array $rows, string $key): float
{
    $total = 0.0;

    foreach ($rows as $row) {
        if (isset($row[$key]) && is_numeric($row[$key])) {
            $total += (float) $row[$key];
        }
    }

    return $total;
}

function groupBySemester(array $rows): array
{
    $grouped = [];

    foreach ($rows as $row) {
        $semester = (int) ($row['semester'] ?? 0);

        if ($semester) {
            $grouped[$semester][] = $row;
        }
    }

    ksort($grouped);

    return $grouped;
}


/* ─────────────────────────────────────────────────────────
   Data
   ───────────────────────────────────────────────────────── */

$pageTitle = 'Academic';

$rows      = academicRows();
$semesters = academicSemesters();
$summary   = academicSummary();

$coursesBySemester = groupBySemester($rows);

$totalCourses = count($rows);

$totalCredits = sumColumn($rows, 'credits');

$cgpa = isset($summary['cgpa']) && is_numeric($summary['cgpa'])
    ? (float) $summary['cgpa']
    : null;


/* ─────────────────────────────────────────────────────────
   Page
   ───────────────────────────────────────────────────────── */

require __DIR__ . '/includes/header.php';
?>


<!-- ══════════ INTRO ══════════ -->

<section class="wrap page-intro">

    <div>

        <span class="eyebrow">
            03 / Academic
        </span>

        <h1>
            Academic<br>
            <em>record.</em>
        </h1>

    </div>

    <p>
        A semester-wise overview of coursework, grades and credits.
        Structured academic data is served through Amazon RDS for MySQL.
    </p>

</section>


<!-- ══════════ SUMMARY ══════════ -->

<section class="wrap academic-summary">

    <div class="summary-card">

        <span class="eyebrow">
            CGPA
        </span>

        <b>
            <?= $cgpa !== null
                ? number_format($cgpa, 2)
                : '—'
            ?>
        </b>

    </div>


    <div class="summary-card">

        <span class="eyebrow">
            Courses
        </span>

        <b>
            <?= $totalCourses ?>
        </b>

    </div>


    <div class="summary-card">

        <span class="eyebrow">
            Credits
        </span>

        <b>
            <?= $totalCredits ?: '—' ?>
        </b>

    </div>


    <div class="summary-card">

        <span class="eyebrow">
            Semesters
        </span>

        <b>
            <?= count($semesters) ?>
        </b>

    </div>

</section>


<!-- ══════════ SEMESTERS ══════════ -->

<section class="wrap academic-table-wrap">

    <?php if (!$semesters): ?>

        <div class="empty-state">

            <span class="eyebrow">
                No records
            </span>

            <p>
                Nothing to show yet — the academic table is empty.
            </p>

        </div>

    <?php else: ?>

        <?php foreach ($semesters as $semester): ?>

            <?php
            $number = (int) $semester['semester'];

            $semesterRows =
                $coursesBySemester[$number] ?? [];

            /*
             * Calculate credits directly from the course records.
             * This avoids storing duplicate credit totals in the
             * semester table.
             */
            $semesterCredits =
                sumColumn($semesterRows, 'credits');

            $sgpa =
                isset($semester['sgpa']) &&
                is_numeric($semester['sgpa'])
                    ? number_format(
                        (float) $semester['sgpa'],
                        2
                    )
                    : '—';

            $resultPeriod =
                $semester['result_period'] ?? '—';
            ?>


            <div class="semester-section">

                <!-- Semester heading -->

                <div class="semester-heading">

                    <div>

                        <span class="eyebrow">
                            Semester <?= $number ?>
                        </span>

                        <h2>
                            Semester <?= $number ?>
                        </h2>

                        <small>
                            <?= htmlspecialchars($resultPeriod) ?>
                        </small>

                    </div>


                    <div class="semester-meta">

                        <span>
                            <?= count($semesterRows) ?>
                            courses
                        </span>

                        <span>
                            <?= $semesterCredits ?>
                            credits
                        </span>

                        <strong>
                            SGPA <?= $sgpa ?>
                        </strong>

                    </div>

                </div>


                <!-- Course table -->

                <?php if ($semesterRows): ?>

                    <div
                        class="data-table"
                        role="table"
                        aria-label="Semester <?= $number ?> academic records"
                    >

                        <div class="data-row head" role="row">

                            <span role="columnheader">
                                Code
                            </span>

                            <span role="columnheader">
                                Course
                            </span>

                            <span role="columnheader">
                                Grade
                            </span>

                            <span role="columnheader">
                                Credits
                            </span>

                        </div>


                        <?php foreach ($semesterRows as $row): ?>

                            <div
                                class="data-row"
                                role="row"
                            >

                                <span class="cell-code">
                                    <?= htmlspecialchars(
                                        $row['code'] ?? '—'
                                    ) ?>
                                </span>


                                <span class="cell-course">
                                    <?= htmlspecialchars(
                                        $row['course'] ?? '—'
                                    ) ?>
                                </span>


                                <span>

                                    <b
                                        class="<?= htmlspecialchars(
                                            gradeClass(
                                                $row['grade'] ?? null
                                            )
                                        ) ?>"
                                    >
                                        <?= htmlspecialchars(
                                            $row['grade'] ?? '—'
                                        ) ?>
                                    </b>

                                </span>


                                <span class="cell-credits">
                                    <?= htmlspecialchars(
                                        (string) (
                                            $row['credits'] ?? '—'
                                        )
                                    ) ?>
                                </span>

                            </div>

                        <?php endforeach; ?>

                    </div>

                <?php else: ?>

                    <div class="empty-state semester-empty">

                        <span class="eyebrow">
                            No courses
                        </span>

                        <p>
                            Course records for this semester
                            have not been added yet.
                        </p>

                    </div>

                <?php endif; ?>

            </div>

        <?php endforeach; ?>

    <?php endif; ?>


    <p class="eyebrow data-source-note">
        <?= DEMO_MODE
            ? 'Demo data · set DEMO_MODE=false on EC2 to read live rows'
            : 'Live Amazon RDS · MySQL'
        ?>
    </p>

</section>


<?php require __DIR__ . '/includes/footer.php'; ?>