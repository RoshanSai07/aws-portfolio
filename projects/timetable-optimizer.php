<?php $pageTitle='Timetable Optimizer'; require __DIR__.'/../includes/header.php'; ?>
<article class="wrap detail">
  <div class="detail-back"><a href="../projects.php">← All projects</a></div>
 <header class="detail-top">
  <div class="detail-heading-copy">

    <span class="eyebrow">01 / WEB PRODUCT</span>

    <h1>
      Timetable<br>
      <span>Optimizer.</span>
    </h1>

    <div class="detail-actions">
      <a
        href="https://github.com/RoshanSai07/timetable-optimizer"
        target="_blank"
        rel="noopener noreferrer"
      >
        GitHub <span>↗</span>
      </a>

      <a
        href="https://timetable-optimizer-react.vercel.app/"
        target="_blank"
        rel="noopener noreferrer"
        class="detail-action-primary"
      >
        Live Demo <span>↗</span>
      </a>
    </div>
  </div>
  <p>
    A product for the part of university life that should be simple but
    rarely is: turning course registration data into a clear,
    clash-free schedule.
  </p>
</header>
  <div class="detail-meta" aria-label="Project details">
    <span><small>ROLE</small>Product · Development</span>
    <span><small>FOCUS</small>Scheduling · UX</span>
    <span><small>STACK</small>React · Next.js · Firestore</span>
  </div>
  <figure class="detail-hero card-orange visual-timetable" aria-label="Abstract timetable interface illustration">
    <div class="visual-window">
      <div class="visual-window-bar"><span></span><span></span><span></span><b>WEEK VIEW</b></div>
      <div class="visual-schedule">
        <div class="visual-hours"><span>09:00</span><span>11:00</span><span>13:00</span><span>15:00</span></div>
        <div class="visual-day"><i></i><i></i><i></i></div>
        <div class="visual-day"><i></i><i></i></div>
        <div class="visual-day"><i></i><i></i><i></i></div>
        <div class="visual-day"><i></i><i></i></div>
      </div>
    </div>
    <figcaption>FROM REGISTRATION DATA TO A SCHEDULE THAT WORKS</figcaption>
  </figure>
  <section class="detail-story" aria-labelledby="project-story">
    <div class="detail-story-label"><span class="eyebrow">THE PROJECT</span><h2 id="project-story">Less juggling.<br><span>More clarity.</span></h2></div>
    <div class="detail-story-copy">
      <p class="detail-lead">Finding a schedule without overlapping classes can become a tedious manual task. This project explores a faster path from registration information to a timetable students can actually use.</p>
      <div class="detail-points">
        <section><span>01</span><div><h3>Start with the data</h3><p>Parse course registration information into a consistent format for schedule planning.</p></div></section>
        <section><span>02</span><div><h3>Find a workable plan</h3><p>Generate clash-free timetable options instead of asking students to compare every combination by hand.</p></div></section>
        <section><span>03</span><div><h3>Make it easy to scan</h3><p>Present the result through a clean interface that keeps the schedule readable and useful.</p></div></section>
      </div>
      <div class="detail-tech"><span class="eyebrow">TECHNOLOGIES</span><div><span>React</span><span>Next.js</span><span>Firestore</span></div></div>
    </div>
  </section>
  <nav class="detail-project-nav" aria-label="Project navigation">
    <a href="fitness-tracker.php"><small>PREVIOUS PROJECT</small><strong>Food Lens ←</strong></a>
    <a class="detail-all-projects" href="../projects.php">All projects ↗</a>
<a href="google-meet-lineup.php">
    <small>NEXT PROJECT</small>
    <strong>Google Meet Lineup →</strong>
</a>  </nav>
</article>
<?php require __DIR__.'/../includes/footer.php'; ?>
