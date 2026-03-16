<?php

declare(strict_types=1);

it('targets the inertia v3 beta packages for new installs', function (): void {
    $composer = json_decode(file_get_contents(base_path('composer.json')), true, flags: JSON_THROW_ON_ERROR);
    $package = json_decode(file_get_contents(base_path('package.json')), true, flags: JSON_THROW_ON_ERROR);

    expect($composer['require']['inertiajs/inertia-laravel'])->toBe('^3.0.0-beta')
        ->and($composer['require-dev']['laravel/boost'])->toBe('^2.2.0')
        ->and($package['dependencies']['@inertiajs/vue3'])->toBe('^3.0.0-beta');
});

it('uses the inertia v3 config structure', function (): void {
    $config = require base_path('config/inertia.php');

    expect($config)->toHaveKey('pages')
        ->and($config['pages'])->toMatchArray([
            'ensure_pages_exist' => false,
            'paths' => [resource_path('js/pages')],
            'extensions' => ['js', 'jsx', 'svelte', 'ts', 'tsx', 'vue'],
        ])
        ->and($config)->toHaveKey('testing')
        ->and($config['testing'])->toMatchArray([
            'ensure_pages_exist' => true,
        ]);
});
