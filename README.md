# Rayaz

Parent-organization website for Rayaz. PHP 8.3 (PHP-FPM) behind Nginx, built as two small images with the code baked in, so it deploys from Git with no host bind mounts.

## Deploy with Portainer (Git)

1. Push this repository to GitHub.
2. In Portainer: **Stacks → Add stack → Repository**, point it at the repo, branch `main`, compose path `docker-compose.yml`.
3. Add the environment variables from `.env.example` (all have defaults, so none are required).
4. Deploy. To update: `git push`, then **Pull and redeploy** the stack (enable *Re-pull image* if offered).

The site is then available on `http://SERVER-IP:1030`. Point your Cloudflare tunnel / reverse proxy at that port.

| Variable | Default | Purpose |
| --- | --- | --- |
| `HTTP_PORT` | `1030` | Host port mapped to Nginx |
| `SITE_URL` | `https://rayaz.org` | Canonical links and Open Graph tags |
| `CONTAINER_NAME` / `PHP_CONTAINER_NAME` | `rayaz-web` / `rayaz-php` | Container names |
| `IMAGE_TAG` | `latest` | Image tag |

## Local

```bash
cp .env.example .env
docker compose up -d --build
```

Open `http://localhost:1030`.

## Layout

```
public/      web root (index.php, legal pages, 404.html, assets, robots/sitemap/ads.txt)
includes/    shared PHP (bootstrap, header, footer), outside the web root
docker/      Dockerfiles, nginx.conf, php.ini
```

- Clean URLs: `/privacy-policy`, `/terms-of-service` (the `.php` versions redirect).
- `/healthz` is used by the container healthchecks (nginx → PHP-FPM).
- Edit the project list at the top of `public/index.php`.
- If you change the domain, also update `public/robots.txt` and `public/sitemap.xml`.
