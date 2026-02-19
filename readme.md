
# Starter Kit Vue (Laravel + Inertia)

An opinionated starter kit for building Laravel + Vue apps with a strong focus on quality, typing, and consistency.

## Requirements

- PHP `8.5+`
- Node.js `20.19+` or `22.12+` (required by Vite 7)
- Bun `1.3+`
- Composer
- SQLite (or another database configured in `.env`)

## Create Project

```bash
composer create-project simaocurado/starter-kit-vue --prefer-dist my-app
cd my-app
composer setup
```

`composer setup` runs:
- PHP dependency installation
- `.env` creation/configuration
- automatic `APP_URL` setup to `http://<project-name>.test`
- `php artisan key:generate`
- migrations
- `bun install`
- `bun run build`

## Development

### With Herd (recommended on macOS)

With Herd, the HTTP server already exists (`*.test`). You only need to run the frontend:

```bash
bun run dev
```

Open the app at `http://<project-name>.test`.

Optional (if you use queues):

```bash
php artisan queue:listen --tries=1
```

### Without Herd

Run:

```bash
composer dev
```

This starts Laravel server, queue worker, logs, and Vite together.

## Strictness

This starter applies strict defaults:

- TypeScript with `"strict": true` in `tsconfig.json`
- PHPStan level `7` + `bleedingEdge` in `phpstan.neon`
- Pest type coverage minimum of `90%` (`composer test:type-coverage`)
- Pest test coverage requirement of `90%` in `composer test:unit`
- Pint + Rector for formatting and automated refactors
- Oxlint + Prettier for frontend quality checks

## Scripts

- `composer setup`
- `composer dev`
- `composer lint`
- `composer test`
- `composer test:type-coverage`
- `composer test:unit`
- `composer test:types`
- `composer test:lint`
- `composer update:requirements`

## Notes

- If `bun run build` fails with a Vite/`crypto.hash` error, upgrade Node to `20.19+` or `22.12+`.
- `APP_URL` is automatically set to `http://<project-name>.test` during setup. Adjust it manually only if you use a different local domain.
