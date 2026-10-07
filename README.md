# Rayaz Website

Self-contained Rayaz website deployment using Nginx + PHP-FPM and Docker Compose. It is designed to be deployed directly from a Git repository through Portainer.

## Local deployment

1. Copy `.env.example` to `.env`.
2. Set `HTTP_PORT` and `SERVER_NAME` as needed.
3. In Portainer, create a Stack from this Git repository.
4. Deploy the stack.
5. Open `http://SERVER_IP:HTTP_PORT`.

For example:

```text
http://192.168.1.100:8080
```

## Portainer

Use **Stacks → Add stack → Git repository** and point it at this repository. Portainer will use `docker-compose.yml` and the repository's `.env`/environment settings.

If your Portainer setup does not automatically read the repository `.env`, enter the variables from `.env.example` in the stack's Environment variables section.

## Production HTTPS

This stack intentionally exposes HTTP only. For public production use, put it behind your existing reverse proxy/Cloudflare Tunnel or add TLS termination separately. Do not commit private certificates or secrets to Git.
# Rayaz
# Rayaz
# Rayaz
