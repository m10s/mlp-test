import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            'media-library-pro-styles': __dirname + '/vendor/spatie/laravel-medialibrary-pro/resources/js/media-library-pro-styles',
        },
    },
});
