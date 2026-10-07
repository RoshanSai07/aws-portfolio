<?php $pageTitle='Dynamic Cloud Portfolio'; require __DIR__.'/../includes/header.php'; ?>
<article class="wrap detail">
  <div class="detail-back"><a href="../projects.php">← All projects</a></div>
  <header class="detail-top">
    <div class="detail-heading-copy">
      <span class="eyebrow">03 / CLOUD APPLICATION</span>
      <h1>Dynamic Cloud<br><span>Portfolio.</span></h1>
    </div>
    <p>A PHP portfolio hosted on AWS, with academic records and profile information served from two different managed data services.</p>
  </header>
  <div class="detail-meta" aria-label="Project details">
    <span><small>ROLE</small>Cloud · Development</span>
    <span><small>FOCUS</small>Data · AWS</span>
    <span><small>STACK</small>PHP · RDS · DynamoDB · EC2</span>
  </div>
  <figure class="detail-hero card-blue visual-cloud" aria-label="Abstract AWS application architecture illustration">
    <div class="cloud-flow">
      <div class="cloud-node cloud-app"><small>COMPUTE</small><strong>EC2</strong><span>PHP app</span></div>
      <div class="cloud-connectors"><i></i><i></i></div>
      <div class="cloud-data-nodes"><div class="cloud-node"><small>RELATIONAL</small><strong>RDS</strong><span>Academic</span></div><div class="cloud-node"><small>NOSQL</small><strong>DDB</strong><span>Profile</span></div></div>
    </div>
    <figcaption>ONE APPLICATION. TWO DATA SHAPES.</figcaption>
  </figure>
  <section class="detail-story" aria-labelledby="project-story">
    <div class="detail-story-label"><span class="eyebrow">THE PROJECT</span><h2>Portfolio, meet<br><span>the cloud.</span></h2></div>
    <div class="detail-story-copy">
      <p class="detail-lead">This assignment turns a personal portfolio into a working cloud application and demonstrates how different kinds of information can be served from the right kind of storage.</p>
      <div class="detail-points">
        <section><span>01</span><div><h3>Run the application</h3><p>Amazon EC2 hosts the PHP portfolio and its application logic.</p></div></section>
        <section><span>02</span><div><h3>Store structured records</h3><p>Amazon RDS for MySQL provides the academic data used by the portfolio.</p></div></section>
        <section><span>03</span><div><h3>Retrieve flexible profile data</h3><p>Skills and profile information are retrieved from DynamoDB through the AWS SDK for PHP.</p></div></section>
      </div>
      <div class="detail-tech"><span class="eyebrow">TECHNOLOGIES</span><div><span>PHP</span><span>Amazon EC2</span><span>Amazon RDS</span><span>DynamoDB</span><span>AWS SDK</span></div></div>
    </div>
  </section>
  <nav class="detail-project-nav" aria-label="Project navigation">
    <a href="google-meet-lineup.php"><small>PREVIOUS PROJECT</small><strong>Google Meet Lineup ←</strong></a>
    <a class="detail-all-projects" href="../projects.php">All projects ↗</a>
    <a href="fitness-tracker.php"><small>NEXT PROJECT</small><strong>Food Lens →</strong></a>
  </nav>
</article>
<?php require __DIR__.'/../includes/footer.php'; ?>
