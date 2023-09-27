import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/assets/css/socialv006a.css',
                'resources/assets/css/customizer.css',
                'resources/assets/js/app.js',
                'resources/assetsadmin/css/material-dashboard.css',
                'resources/assetsadmin/js/material-dashboard.js'
            ],
            refresh: true,
        }),
    ],
});
