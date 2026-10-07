<?php
$projects = [
    ['name' => 'Servereum', 'url' => 'https://servereum.tech', 'description' => 'Technology and infrastructure projects built with a focus on practical digital services.'],
    ['name' => 'Byabsayee', 'url' => 'https://byabsayee.com', 'description' => 'Business-focused digital tools and services.'],
    ['name' => 'Kafeel', 'url' => 'https://kafeel.site', 'description' => 'A digital platform and independent project under the Rayaz umbrella.'],
    ['name' => 'Assignment Cover Generator', 'url' => 'https://assignmentcovergenerator.rayaz.org', 'description' => 'A simple tool for creating assignment cover pages quickly.'],
    ['name' => 'CobbleWood', 'url' => 'https://cobblewood.net', 'description' => 'An independent creative and digital project.'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Rayaz is the parent organization behind a collection of technology, business, and digital projects.">
    <meta name="theme-color" content="#07070a">
    <title>Rayaz — Digital projects and services</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<header class="site-header">
    <div class="container nav">
        <a class="brand" href="/" aria-label="Rayaz home"><span class="brand-mark">R</span>Rayaz</a>
        <nav class="nav-links" aria-label="Primary navigation">
            <a href="#projects">Projects</a>
            <a href="/privacy-policy.php">Privacy</a>
            <a href="/terms-of-service.php">Terms</a>
        </nav>
    </div>
</header>

<main>
    <section class="hero">
        <div class="container">
            <span class="eyebrow">Independent digital organization</span>
            <h1>Building useful things for the digital world.</h1>
            <p>Rayaz is the parent organization behind a growing collection of technology, business, and creative projects.</p>
            <div class="actions">
                <a class="button primary" href="#projects">Explore projects</a>
                <a class="button secondary" href="mailto:mail@rayaz.org">Contact Rayaz</a>
            </div>
        </div>
    </section>

    <section class="section" id="projects">
        <div class="container">
            <div class="section-heading">
                <h2>Projects &amp; ventures</h2>
                <p>A selection of projects operated or developed under Rayaz.</p>
            </div>
            <div class="grid">
                <?php foreach ($projects as $project): ?>
                    <a class="card card-link" href="<?= htmlspecialchars($project['url'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer">
                        <h3><?= htmlspecialchars($project['name'], ENT_QUOTES, 'UTF-8') ?></h3>
                        <p><?= htmlspecialchars($project['description'], ENT_QUOTES, 'UTF-8') ?></p>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<footer class="site-footer">
    <div class="container footer-inner">
        <div>© <?= date('Y') ?> Rayaz. All rights reserved. · Bangladesh</div>
        <div class="footer-links">
            <a href="mailto:mail@rayaz.org">mail@rayaz.org</a>
            <a href="/privacy-policy.php">Privacy Policy</a>
            <a href="/terms-of-service.php">Terms of Service</a>
        </div>
    </div>
</footer>
</body>
</html>
