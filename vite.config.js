import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'
import tailwindcss from '@tailwindcss/vite'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/header.js',
                'resources/js/home.js',
                'resources/js/preguntas-frecuentes.js',
                'resources/js/terminos-condiciones.js',
                'resources/js/politicas-devolucion.js',
                'resources/js/proyectos/form.js',
                'resources/js/libro-reclamaciones.js',
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
})
