# Rayaz

Self-contained PHP website with Nginx and PHP-FPM, designed for Portainer Git deployment.

## Portainer

1. Push this repository to Git.
2. Create/update a Portainer Stack from the Git repository.
3. Set the variables from `.env.example`.
4. Use `HTTP_PORT=1030` to expose the website at `http://SERVER-IP:1030`.
5. Redeploy with **Rebuild / Pull and redeploy** enabled after changes.

The Nginx configuration and website are baked into a custom Nginx image. No host `/Sites` bind mount is required.

The host port is controlled by `HTTP_PORT`; Nginx itself always listens on port 80 inside the container.

## Local deployment

```bash
cp .env.example .env
docker compose up -d --build
```

Then visit `http://localhost:1030`.
