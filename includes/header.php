<?php
/** @var array{title:string,description:string,path:string} $page */
$fullTitle = $page['path'] === '/' ? $page['title'] : $page['title'] . ' — ' . SITE_NAME;
$canonical = SITE_URL . ($page['path'] === '/' ? '/' : $page['path']);
$nav = [
    '/#projects'      => 'Projects',
    '/privacy-policy' => 'Privacy',
    '/terms-of-service' => 'Terms',
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e($fullTitle) ?></title>
    <meta name="description" content="<?= e($page['description']) ?>">
    <meta name="theme-color" content="#07070a">
    <meta name="color-scheme" content="dark">
    <link rel="canonical" href="<?= e($canonical) ?>">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?= e(SITE_NAME) ?>">
    <meta property="og:title" content="<?= e($fullTitle) ?>">
    <meta property="og:description" content="<?= e($page['description']) ?>">
    <meta property="og:url" content="<?= e($canonical) ?>">
    <meta name="twitter:card" content="summary">
    <link rel="stylesheet" href="<?= e(asset('css/style.css')) ?>">
<?php if (!empty($page['head'])) { echo $page['head']; } ?>
</head>
<body>
<a class="skip-link" href="#main">Skip to content</a>
<header class="site-header">
    <div class="container nav">
        <a class="brand" href="/" aria-label="<?= e(SITE_NAME) ?> home"><span class="brand-mark">R</span><?= e(SITE_NAME) ?></a>
        <nav class="nav-links" aria-label="Primary navigation">
<?php foreach ($nav as $href => $label): ?>
            <a href="<?= e($href) ?>"<?= $href === $page['path'] ? ' aria-current="page"' : '' ?>><?= e($label) ?></a>
<?php endforeach; ?>
        </nav>
    </div>
</header>
