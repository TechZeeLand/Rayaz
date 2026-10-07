<?php
declare(strict_types=1);

const SITE_NAME = 'Rayaz';
const SITE_EMAIL = 'mail@rayaz.org';

// Public base URL without trailing slash (set SITE_URL in the stack environment).
$siteUrl = rtrim((string) (getenv('SITE_URL') ?: 'https://rayaz.org'), '/');
define('SITE_URL', $siteUrl);

/** Escape a value for HTML output. */
function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/** URL for a file in /assets, versioned by mtime so CSS changes bust the cache. */
function asset(string $path): string
{
    $file = __DIR__ . '/../html/assets/' . ltrim($path, '/');
    $version = is_file($file) ? (string) filemtime($file) : '1';
    return '/assets/' . ltrim($path, '/') . '?v=' . $version;
}
