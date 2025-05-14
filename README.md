# Nome do Projeto Air

This project is a Laravel application containerized with Docker, ready for deployment with Apache, HTTPS via Let's Encrypt, and reverse proxy support for a blog at `/blog`.

Este projeto é uma aplicação Laravel containerizada com Docker, pronta para implantação com Apache, HTTPS via Let's Encrypt e suporte a proxy reverso para um blog em `/blog`.

---

## 📦 Requirements / Requisitos

- Docker
- Docker Compose
- A domain (e.g., `air.com.vc`) pointing to the server's IP
- Certbot access to port 80 for SSL generation

---

## 🚀 Setup Instructions (EN)

1. **Clone the repository:**

   ```bash
   git clone https://github.com/huras/nome-do-projeto-air.git
   cd nome-do-projeto-air
   ```

2. **Build and start the containers (initial):**

   ```bash
   docker-compose up -d --build
   ```

3. **Generate SSL certificate with Certbot:**

   ```bash
   docker run --rm \
     -v "$(pwd)/certbot/conf:/etc/letsencrypt" \
     -v "$(pwd)/certbot/www:/var/www/certbot" \
     certbot/certbot certonly --webroot \
     --webroot-path=/var/www/certbot \
     -d air.com.vc -d www.air.com.vc \
     --email you@example.com --agree-tos --no-eff-email
   ```

4. **Restart the containers:**

   ```bash
   docker-compose down
   docker-compose up -d
   ```

5. **Make sure permissions are correct:**

   ```bash
   chmod -R 775 storage bootstrap/cache
   ```

---

## 🚀 Instruções de Uso (PT-BR)

1. **Clone o repositório:**

   ```bash
   git clone https://github.com/huras/nome-do-projeto-air.git
   cd nome-do-projeto-air
   ```

2. **Construa e suba os containers (inicial):**

   ```bash
   docker-compose up -d --build
   ```

3. **Gere o certificado SSL com Certbot:**

   ```bash
   docker run --rm \
     -v "$(pwd)/certbot/conf:/etc/letsencrypt" \
     -v "$(pwd)/certbot/www:/var/www/certbot" \
     certbot/certbot certonly --webroot \
     --webroot-path=/var/www/certbot \
     -d air.com.vc -d www.air.com.vc \
     --email you@example.com --agree-tos --no-eff-email
   ```

4. **Reinicie os containers:**

   ```bash
   docker-compose down
   docker-compose up -d
   ```

5. **Garanta que as permissões estão corretas:**

   ```bash
   chmod -R 775 storage bootstrap/cache
   ```

---

## 🔁 Renew SSL (optional / opcional)

To renew SSL periodically:

Para renovar o SSL periodicamente:

```bash
docker run --rm \
  -v "$(pwd)/certbot/conf:/etc/letsencrypt" \
  -v "$(pwd)/certbot/www:/var/www/certbot" \
  certbot/certbot renew --webroot \
  --webroot-path=/var/www/certbot
```

Can be set in a cron job. Pode ser agendado em um cron job.

---

## 🧩 Notes / Notas

- Reverse proxy to `/blog` is configured in Apache.
- Laravel is served via Apache with SSL termination.
- Reverse proxy para `/blog` já está configurado no Apache.
- Laravel é servido via Apache com SSL ativo.

---

## 📂 Directory Structure / Estrutura de Pastas

```
nome-do-projeto-air/
├── docker/
│   ├── apache/         # Apache config
│   └── php/            # PHP Dockerfile
├── certbot/            # SSL certs
├── .env                # Laravel environment config
├── docker-compose.yml  # Main Docker Compose file
└── (Laravel app files)
```

---

## ✉️ Contact

For questions, open an issue.

Para dúvidas, abra uma issue.
