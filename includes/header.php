<?php
require_once __DIR__ . '/../config/config.php';
$pageTitle = $pageTitle ?? APP_NAME;
$current = basename($_SERVER['PHP_SELF']);
$basePath = strpos($_SERVER['PHP_SELF'], '/projects/') !== false ? '../' : '';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?= htmlspecialchars($pageTitle) ?> - Roshan Kandregula</title>
    <meta name="description" content="Roshan Kandregula - computer science student building useful products and experiments.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Manrope:wght@400;500;600;700;800&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= $basePath ?>assets/css/style.css">
</head>
<body>
<div class="noise"></div>
<header class="site-nav wrap">
    <a class="brand" href="<?= $basePath ?>index.php"><span class="brand-dot"></span>RK / 26</a>
    <button class="menu-toggle" type="button" aria-label="Open navigation menu" aria-controls="site-menu" aria-expanded="false">
        <span></span><span></span><span></span>
    </button>
    <nav id="site-menu">
        <a class="<?= $current === 'index.php' ? 'active' : '' ?>" href="<?= $basePath ?>index.php">Home</a>
        <a class="<?= $current === 'projects.php' || $basePath !== '' ? 'active' : '' ?>" href="<?= $basePath ?>projects.php">Projects</a>
        <a class="<?= $current === 'academic.php' ? 'active' : '' ?>" href="<?= $basePath ?>academic.php">Academic</a>
        <a class="<?= $current === 'skills.php' ? 'active' : '' ?>" href="<?= $basePath ?>skills.php">Stack</a>
    </nav>
    <a class="nav-mail" href="<?= $basePath ?>index.php#contact">Let's talk ↗</a>
</header>
<main>
