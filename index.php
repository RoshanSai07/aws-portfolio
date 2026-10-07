<?php
$pageTitle = 'Home';
require __DIR__ . '/includes/header.php';
?>

<section class="hero wrap" id="home">
  <div class="hero-shell">
    <div class="hero-number">PORTFOLIO / 2026</div>

    <div class="hero-main">
      <span class="eyebrow hero-eyebrow">
        COMPUTER SCIENCE · VIT-AP
      </span>

      <h1 class="hero-title">
        I build<br />
        <span>things</span><br />
        that move.
      </h1>

      <p class="hero-lead">
        Just a Computer Science student turning rough ideas into clean, useful
        products.
      </p>
    </div>

    <div class="hero-side">
      <div class="floating-chip">
        <span>CURRENTLY</span>
        <b>Building + learning</b>
        <small>web · cloud · ML</small>
      </div>

      <a href="#contact">
        <div class="hero-sticker">
          AVAILABLE<br />
          FOR GOOD<br />
          IDEAS <strong>↗</strong>
        </div>
      </a>
    </div>

    <div class="hero-bottom">
      <strong>Roshan Kandregula</strong>
      <span>WEB · CLOUD · PRODUCT · ML</span>
    </div>

    <div class="hero-orbit orbit-one"></div>
    <div class="hero-orbit orbit-two"></div>
  </div>
</section>

<div class="marquee">
  <div class="marquee-track">
    WEB DEVELOPMENT　·　AWS　·　MACHINE LEARNING　·　PRODUCT BUILDING　·　OPEN SOURCE　·　
    WEB DEVELOPMENT　·　AWS　·　MACHINE LEARNING　·　PRODUCT BUILDING　·　OPEN SOURCE　·　
    WEB DEVELOPMENT　·　AWS　·　MACHINE LEARNING　·　PRODUCT BUILDING　·　OPEN SOURCE　·　
    WEB DEVELOPMENT　·　AWS　·　MACHINE LEARNING　·　PRODUCT BUILDING　·
  </div>
</div>

<section class="wrap section-block" id="work">
  <div class="section-head">
    <div>
      <span class="eyebrow">01 / SELECTED WORK</span>
      <h2>Things I've shipped.</h2>
    </div>

    <p>
      A small selection of products, experiments and systems I've actually
      built.
    </p>
  </div>

  <div class="mosaic">
    <a
      class="project-card feature card-orange"
      href="projects/timetable-optimizer.php"
    >
      <span class="project-index">01 / PRODUCT</span>
      <div class="card-grid"></div>
      <div class="project-info">
        <span>REACT · NEXT.JS · PRODUCT</span>
        <h3>
          Timetable<br />
          Optimizer
        </h3>
        <b>↗</b>
      </div>
    </a>

    <a
      class="project-card small card-dark"
      href="projects/google-meet-lineup.php"
    >
      <span class="project-index">02</span>
      <!-- <div class="card-mark">MEET</div> -->
      <div class="project-info">
        <span>EVENT TECH · FIREBASE</span>
        <h3>Google Meet Lineup</h3>
        <b>↗</b>
      </div>
    </a>

    <a
      class="project-card small card-blue"
      href="projects/student-portfolio.php"
    >
      <span class="project-index">03</span>
      <!-- <div class="cloud-mark">AWS</div> -->
      <div class="project-info">
        <span>PHP · AWS · MYSQL</span>
        <h3>Cloud Portfolio</h3>
        <b>↗</b>
      </div>
    </a>

    <a
      class="project-card small card-cream"
      href="projects/fitness-tracker.php"
    >
      <span class="project-index">04</span>
      <!-- <div class="food-mark">◎</div> -->
      <div class="project-info">
        <span>APP IDEA · AI</span>
        <h3>Food Lens</h3>
        <b>↗</b>
      </div>
    </a>
  </div>
</section>

<section class="wrap split section-block" id="about">
  <div class="note-card">
    <div>
      <span class="eyebrow">02 / ABOUT</span>

      <h2>
        Curious<br />
        by <span>default.</span>
      </h2>
    </div>

    <p>
      I explore broadly, then go deep. Right now that means web engineering,
      cloud infrastructure, DSA and machine learning.
    </p>

    <div class="note-index">ROSHAN / 26</div>
  </div>

  <div class="stack-panel" id="stack">
    <span class="eyebrow">THE TOOLBOX</span>

    <h3>A stack that gets the idea out of my head.</h3>

    <div class="stack-list">
      <div class="stack-pill">
        React / TypeScript
        <small>01</small>
      </div>

      <div class="stack-pill">
        Next.js
        <small>02</small>
      </div>

      <div class="stack-pill">
        Node / Express
        <small>03</small>
      </div>

      <div class="stack-pill">
        PHP / MySQL
        <small>04</small>
      </div>

      <div class="stack-pill">
        AWS
        <small>05</small>
      </div>

      <div class="stack-pill">
        Python / ML
        <small>06</small>
      </div>
    </div>
  </div>
</section>

<section class="wrap db-strip section-block" id="data">
  <a class="db-card" href="academic.php">
    <code>RDS / MYSQL</code>

    <h3>Academic data, structured.</h3>

    <p>
      Course records are served from Amazon RDS MySQL in the deployed
      assignment.
    </p>

    <span class="db-arrow">↗</span>
  </a>

  <a class="db-card" href="skills.php">
    <code>DYNAMODB</code>

    <h3>Skills, unstructured.</h3>

    <p>
      Skills and certifications are retrieved through the AWS SDK for PHP
      from DynamoDB.
    </p>

    <span class="db-arrow">↗</span>
  </a>
</section>

<section class="wrap contact-section section-block" id="contact">
  <div>
    <span class="eyebrow">03 / CONTACT</span>

    <h2>
      Let's build<br />
      <span>something.</span>
    </h2>
  </div>

  <div class="contact-actions">
    <p>
      Have an idea, project, internship opportunity or just want to talk tech?
    </p>

    <a href="mailto:roshankandregula@gmail.com" class="contact-link">
      roshankandregula07@gmail.com ↗
    </a>

    <a href="https://github.com/RoshanSai07" class="contact-link">
      GitHub ↗
    </a>

    <a
      href="https://www.linkedin.com/in/roshan-kandregula"
      class="contact-link"
    >
      LinkedIn ↗
    </a>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>