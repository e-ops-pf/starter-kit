import { defineConfig } from 'vite'
import path from 'path'

export default defineConfig({
    build: {
        outDir: 'public/js/e-ops-pf/starter-kit',
        emptyOutDir: true,
        rollupOptions: {
            input: 'resources/js/app.js',
            output: {
                entryFileNames: 'app.js',
            },
        },
    },
    resolve: {
        alias: {
            '@': path.resolve(__dirname, 'resources/js'),
        },
    },
})                                                                     