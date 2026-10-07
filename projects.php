<?php
$pageTitle = 'Projects';
require __DIR__ . '/includes/header.php';
?>

<section class="wrap page-intro">
  <div>
    <span class="eyebrow">SELECTED WORK / 04 PROJECTS</span>

    <h1>
      Ideas into<br />
      <span>useful things.</span>
    </h1>
  </div>

  <p>
    A selection of products, systems and experiments, each built to solve a
    real problem or explore a practical idea.
  </p>
</section>

<section class="wrap project-list" aria-label="Project archive">
  <a
    class="project-card project-tile card-orange"
    href="projects/timetable-optimizer.php"
  >
    <span class="project-index">01 / WEB PRODUCT</span>

    <div class="project-art">
      <div class="project-art-panel">
        <span></span>
      </div>

      <span class="project-art-mark">01</span>
    </div>

    <div class="project-info">
      <span>REACT · NEXT.JS · FIRESTORE</span>
      <h3>Timetable Optimizer</h3>
      <b aria-hidden="true">↗</b>
    </div>
  </a>

  <a
    class="project-card project-tile card-dark"
    href="projects/google-meet-lineup.php"
  >
    <span class="project-index">02 / EVENT SYSTEM</span>

    <div class="project-art">
      <span class="project-art-mark wordmark">MEET</span>
    </div>

    <div class="project-info">
      <span>NEXT.JS · FIREBASE · GOOGLE MEET</span>
      <h3>Google Meet Lineup</h3>
      <b aria-hidden="true">↗</b>
    </div>
  </a>

  <a
    class="project-card project-tile card-blue"
    href="projects/student-portfolio.php"
  >
    <span class="project-index">03 / CLOUD APPLICATION</span>

    <div class="project-art">
      <span class="project-art-mark wordmark">AWS</span>
    </div>

    <div class="project-info">
      <span>PHP · RDS · DYNAMODB · EC2</span>
      <h3>Dynamic Cloud Portfolio</h3>
      <b aria-hidden="true">↗</b>
    </div>
  </a>

  <a
    class="project-card project-tile card-cream"
    href="projects/fitness-tracker.php"
  >
    <span class="project-index">04 / APP CONCEPT</span>

    <div class="project-art">
      <span class="project-art-mark">◎</span>
    </div>

    <div class="project-info">
      <span>PWA · COMPUTER VISION · AI</span>
      <h3>Food Lens</h3>
      <b aria-hidden="true">↗</b>
    </div>
  </a>
</section>

<div class="wrap archive-note">
  <span>More work in progress</span>
  <span>Curiosity, iteration, and a little bit of shipping.</span>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>