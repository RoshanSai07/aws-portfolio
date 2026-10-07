<?php

require __DIR__ . '/config/dynamo.php';

$pageTitle = 'Stack';

$items = dynamoRows();

require __DIR__ . '/includes/header.php';
?>


<section class="wrap page-intro">

    <div>

        <span class="eyebrow">
            04 / STACK
        </span>

        <h1>
            What I<br>
            <em>work with.</em>
        </h1>

    </div>

    <p>
        A snapshot of the technologies, languages and tools
        I use to build and experiment.
    </p>

</section>


<section class="wrap skill-grid">

    <?php if (!$items): ?>

        <div class="empty-state">
            <span class="eyebrow">No stack data</span>
            <p>Skill data could not be loaded from DynamoDB.</p>
        </div>

    <?php else: ?>

        <?php foreach ($items as $index => $item): ?>

            <article class="skill-card">

                <div class="skill-card-top">
                    <span class="skill-index">
                        <?= str_pad($index + 1, 2, '0', STR_PAD_LEFT) ?>
                    </span>

                    <span class="skill-count">
                        <?= count($item['items'] ?? []) ?> tools
                    </span>
                </div>

                <h3>
                    <?= htmlspecialchars(
                        $item['category'] ?? 'Other'
                    ) ?>
                </h3>

                <div class="skill-tags">

                    <?php foreach ($item['items'] ?? [] as $skill): ?>

                        <span class="skill-tag">
                            <?= htmlspecialchars($skill) ?>
                        </span>

                    <?php endforeach; ?>

                </div>

            </article>

        <?php endforeach; ?>

    <?php endif; ?>

</section>


<?php require __DIR__ . '/includes/footer.php'; ?>