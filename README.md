1. Add `api.altruisto.localhost` to `/etc/hosts/`
2. Run `docker-compose up --build`
3. Run migrations `docker-compose exec php bash` and then `bin/console d:m:m`
