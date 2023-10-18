import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/css/app.css',
                'resources/assets/css/socialv006a.css',
                'resources/assets/css/customizer.css',
                'resources/assets/js/app.js',
                'resources/assetsadmin/css/material-dashboard.css',
                'resources/assetsadmin/js/material-dashboard.js'
            ],
            refresh: [
                ...refreshPaths,
                'app/Http/Livewire/**',
            ],
        }),
    ],
});
