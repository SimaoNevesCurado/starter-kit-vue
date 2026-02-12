# Simao Curado Laravel Starter Kit (Inertia + Vue)

[![CI](https://github.com/simaonevescurado/starter-kit-vue/actions/workflows/tests.yml/badge.svg)](https://github.com/simaonevescurado/starter-kit-vue/actions/workflows/tests.yml)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/simaocurado/starter-kit-vue.svg)](https://packagist.org/packages/simaocurado/starter-kit-vue)
[![Total Downloads](https://img.shields.io/packagist/dt/simaocurado/starter-kit-vue.svg)](https://packagist.org/packages/simaocurado/starter-kit-vue)
[![License](https://img.shields.io/packagist/l/simaocurado/starter-kit-vue.svg)](https://packagist.org/packages/simaocurado/starter-kit-vue)

An opinionated Laravel 12 starter kit for developers who want strict, consistent, and production-focused defaults out of the box.

This project is based on Laravel + Inertia + Vue and adds a quality-first workflow with static analysis, automated refactoring, formatting, and strong testing requirements.

## Why This Starter Kit

- Actions-oriented structure for application logic
- Consistent CRUD-oriented organization across backend and frontend
- Strong typing and static analysis by default
- Strict quality gates with Rector, Pint, ESLint, and TypeScript checks
- Fail-fast mindset through tests, type checks, and linting
- Better Laravel defaults via `nunomaduro/essentials`
- AI-ready project setup with Boost and agent guidelines

## Tech Stack

- PHP 8.4+
- Laravel 12
- Inertia.js v2 + Vue 3 + TypeScript
- Pest (unit, feature, and browser testing)
- PHPStan (level 8)
- Rector
- Laravel Pint
- ESLint + Prettier
- Laravel Boost MCP
- NunoMaduro Essentials

## Getting Started

Requirements:

- PHP 8.4+
- Node.js 22+
- Composer
- A database supported by Laravel
- A PHP coverage driver (e.g. Xdebug) if you run the full coverage suite

Create a new project with Composer:

```bash
composer create-project simaocurado/starter-kit-vue --prefer-dist my-app
```

## Initial Setup

```bash
cd my-app
composer setup
composer dev
```

## Optional Browser Testing Setup

```bash
npm install playwright
npx playwright install
```

## Quality and Testing

This starter kit is configured with strict defaults:

- `composer lint` runs Rector, Pint, and frontend linting
- `composer test:type-coverage` enforces 100% type coverage
- `composer test:unit` enforces 100% test coverage
- `composer test:types` runs PHPStan + frontend type checks
- `composer test` runs the full suite

## Available Commands

Development:

- `composer dev`
- `composer setup`

Code quality:

- `composer lint`
- `composer test:lint`

Testing:

- `composer test:type-coverage`
- `composer test:unit`
- `composer test:types`
- `composer test`

Maintenance:

- `composer update:requirements`

## AI Agent Support

This starter kit supports multiple AI environments without forcing local installation:

- Codex guidelines: `AGENTS.md`
- Claude guidelines: `CLAUDE.md`
- Project MCP server config: `.mcp.json`
- Boost target environments: `boost.json`

## License

MIT
# starter-kit-vue
# starter-kit-vue
