# Rayaz

Self-contained PHP website with Nginx and PHP-FPM, designed for deployment through Portainer from a Git repository.

## Portainer

1. Push this repository to Git.
2. Create/update a Portainer Stack from the Git repository.
3. Set the variables from `.env.example`.
4. Use `HTTP_PORT=1030` to expose the site on port 1030.
5. Redeploy with image rebuilding enabled after repository changes.

Nginx is built as a custom image. The website and Nginx template are copied into the image, so no host `/Sites` bind mount is required.

The Nginx image uses the official `nginx:alpine` `/etc/nginx/templates` mechanism to substitute `SERVER_NAME` and `CLIENT_MAX_BODY_SIZE` at container startup.

## Local

```bash
cp .env.example .env
docker compose up -d --build
```

Then open `http://localhost:${HTTP_PORT}`.
