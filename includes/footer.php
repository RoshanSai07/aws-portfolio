</main>
<?php if ($pageTitle === 'Home'): ?>
<footer class="footer footer-home wrap">
    <div class="footer-brand"><span class="brand-dot"></span>Roshan Kandregula</div>
    <div class="footer-right">
        <a href="https://github.com/RoshanSai07">GitHub ↗</a>
        <a href="https://www.linkedin.com/in/roshan-kandregula">LinkedIn ↗</a>
        <a href="#home">Back to top ↑</a>
        <small>© <?= APP_YEAR ?> Roshan Kandregula</small>
    </div>
</footer>
<?php else: ?>
<footer class="footer wrap">
    <div><span class="eyebrow">END OF PAGE</span><h2>Make something<br><em>worth opening.</em></h2></div>
    <div class="footer-right">
        <a href="mailto:roshankandregula07@gmail.com">roshankandregula07@gmail.com ↗</a>
        <a href="https://github.com/RoshanSai07" >GitHub ↗</a>
        <a href="https://www.linkedin.com/in/roshan-kandregula" >LinkedIn ↗</a>
        <small>© <?= APP_YEAR ?> Roshan Kandregula</small>
    </div>
</footer>
<?php endif; ?>
<script src="<?= $basePath ?>assets/js/app.js"></script>
</body>
</html>
