<?php
$pageTitle = 'Google Meet Lineup';
require __DIR__ . '/../includes/header.php';
?>

<article class="wrap detail">
  <div class="detail-back">
    <a href="../projects.php">← All projects</a>
  </div>

  <header class="detail-top">
    <div class="detail-heading-copy">
      <span class="eyebrow">02 / EVENT SYSTEM</span>

      <h1>
        Google Meet<br />
        <span>Lineup.</span>
      </h1>
    </div>

    <p>
      A live interview coordination system designed for CodeCrux, connecting
      participant queues, interview sessions and Google Meet rooms into a
      smoother recruitment workflow.
    </p>
  </header>

  <div class="detail-meta" aria-label="Project details">
    <span>
      <small>ROLE</small>
      System · Development
    </span>

    <span>
      <small>FOCUS</small>
      Interview flow · Queue management
    </span>

    <span>
      <small>STACK</small>
      Next.js · Firebase · Google Meet
    </span>
  </div>

  <figure
  class="detail-hero card-dark visual-meet"
  aria-label="Abstract interview queue and Google Meet session illustration"
>
  <div class="meet-flow">
    <div class="meet-queue">
      <small>WAITING QUEUE</small>

      <span class="queue-person active">
        <b>01</b>
        READY
      </span>

      <span class="queue-person">
        <b>02</b>
        WAITING
      </span>

      <span class="queue-person">
        <b>03</b>
        WAITING
      </span>
    </div>

    <div class="meet-arrow">→</div>

    <div class="meet-room">
      <small>INTERVIEW SESSION</small>

      <div class="meet-room-mark">
        <span>MEET</span>
        <i></i>
      </div>

      <strong>ACTIVE</strong>
    </div>
  </div>

  <figcaption>
    JOIN THE QUEUE. ENTER THE ROOM.
  </figcaption>
</figure>

  <section class="detail-story" aria-labelledby="project-story">
    <div class="detail-story-label">
      <span class="eyebrow">THE PROJECT</span>

      <h2>
        From queue<br />
        to <span>conversation.</span>
      </h2>
    </div>

    <div class="detail-story-copy">
      <p class="detail-lead">
        Running multiple interviews at once can quickly become difficult to
        coordinate. The system provides a structured waiting queue and session
        flow so participants can move from registration to their assigned
        Google Meet interview without manual coordination.
      </p>

      <div class="detail-points">
        <section>
          <span>01</span>

          <div>
            <h3>Manage the queue</h3>

            <p>
              Participants join a session-specific waiting queue and receive
              their position while organizers control the interview flow.
            </p>
          </div>
        </section>

        <section>
          <span>02</span>

          <div>
            <h3>Coordinate sessions</h3>

            <p>
              Organizers can create interview sessions and manage the flow of
              participants through the active recruitment process.
            </p>
          </div>
        </section>

        <section>
          <span>03</span>

          <div>
            <h3>Connect the room</h3>

            <p>
              Once called, participants can move directly from the queue into
              the appropriate Google Meet interview session.
            </p>
          </div>
        </section>
      </div>

      <div class="detail-tech">
        <span class="eyebrow">TECHNOLOGIES</span>

        <div>
          <span>Next.js</span>
          <span>Firebase</span>
          <span>Google Meet</span>
        </div>
      </div>
    </div>
  </section>

  <nav class="detail-project-nav" aria-label="Project navigation">
    <a href="timetable-optimizer.php">
      <small>PREVIOUS PROJECT</small>
      <strong>Timetable Optimizer ←</strong>
    </a>

    <a class="detail-all-projects" href="../projects.php">
      All projects ↗
    </a>

    <a href="student-portfolio.php">
      <small>NEXT PROJECT</small>
      <strong>Cloud Portfolio →</strong>
    </a>
  </nav>
</article>

<?php require __DIR__ . '/../includes/footer.php'; ?>