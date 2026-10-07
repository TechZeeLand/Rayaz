<?php
declare(strict_types=1);
require __DIR__ . '/../includes/bootstrap.php';

$projects = [
    ['name' => 'Servereum', 'url' => 'https://servereum.tech', 'description' => 'Technology and infrastructure projects built with a focus on practical digital services.'],
    ['name' => 'Byabsayee', 'url' => 'https://byabsayee.com', 'description' => 'Business-focused digital tools and services.'],
    ['name' => 'Kafeel', 'url' => 'https://kafeel.site', 'description' => 'A digital platform and independent project under the Rayaz umbrella.'],
    ['name' => 'Assignment Cover Generator', 'url' => 'https://assignmentcovergenerator.rayaz.org', 'description' => 'A simple tool for creating assignment cover pages quickly.'],
    ['name' => 'CobbleWood', 'url' => 'https://cobblewood.net', 'description' => 'An independent creative and digital project.'],
];

$description = 'Rayaz is the parent organization behind a collection of technology, business, and digital projects.';
$page = [
    'title'       => 'Rayaz — Digital projects and services',
    'description' => $description,
    'path'        => '/',
    'head'        => '    <script type="application/ld+json">' . json_encode([
        '@context' => 'https://schema.org',
        '@type'    => 'Organization',
        'name'     => SITE_NAME,
        'url'      => SITE_URL . '/',
        'email'    => SITE_EMAIL,
        'description' => $description,
    ], JSON_UNESCAPED_SLASHES | JSON_HEX_TAG) . "</script>\n",
];
require __DIR__ . '/../includes/header.php';
?>
<main id="main">
    <section class="hero">
        <div class="container">
            <span class="eyebrow">Independent digital organization</span>
            <h1>Building useful things for the digital world.</h1>
            <p>Rayaz is the parent organization behind a growing collection of technology, business, and creative projects.</p>
            <div class="actions">
                <a class="button primary" href="#projects">Explore projects</a>
                <a class="button secondary" href="mailto:<?= e(SITE_EMAIL) ?>">Contact Rayaz</a>
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
                <a class="card card-link" href="<?= e($project['url']) ?>" target="_blank" rel="noopener noreferrer">
                    <h3><?= e($project['name']) ?></h3>
                    <p><?= e($project['description']) ?></p>
                    <span class="card-host"><?= e((string) parse_url($project['url'], PHP_URL_HOST)) ?> <span aria-hidden="true">↗</span></span>
                </a>
<?php endforeach; ?>
            </div>
        </div>
    </section>
</main>
<?php require __DIR__ . '/../includes/footer.php'; ?>
