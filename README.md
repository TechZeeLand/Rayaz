# Rayaz

Self-contained PHP website with Nginx and PHP-FPM, designed for deployment through Portainer from a Git repository.

## Portainer deployment

1. Push this repository to Git.
2. In Portainer, create/update a Stack using the Git repository.
3. Set the environment variables from `.env.example`.
4. Use `HTTP_PORT=1030` if you want the site at `http://SERVER-IP:1030`.
5. Enable **Re-pull image and redeploy** / rebuild when deploying changes so the custom Nginx image is rebuilt.

Nginx is intentionally built from `Dockerfile.nginx`; the site and Nginx configuration are baked into the image rather than depending on host bind mounts.

## Important

When using Portainer's Git deployment, make sure the stack is configured to rebuild the image after repository changes. If an old container remains, redeploy/recreate the stack.

## Local deployment

```bash
cp .env.example .env
docker compose up -d --build
```

Then visit:

`http://localhost:${HTTP_PORT}`
