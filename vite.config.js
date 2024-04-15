import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/estilos.css',
                'resources/js/app.js',
                'resources/css/login.css',
                'resources/js/autocompleteUsers.js',
                'resources/js/home.js',
            ],
            refresh: true,
        }),
    ],
    
    build: {
        outDir: 'public/build',
        manifest: 'manifest.json', 
        minify: false,
    },
});
