import { defineConfig } from 'vite'
import path from 'path'

export default defineConfig({
    build: {
        outDir: 'public', // we handle subfolders manually
        emptyOutDir: true,
        rollupOptions: {
            input: {
                js: 'resources/js/app.js',
                css: 'resources/css/app.css',
            },
            output: {
                entryFileNames: (chunkInfo) => {
                    return chunkInfo.name === 'js'
                        ? 'js/e-ops-pf/starter-kit/app.js'
                        : 'css/e-ops-pf/starter-kit/app.js' // css is still treated as a chunk
                },
                assetFileNames: (assetInfo) => {
                    if (assetInfo.name.endsWith('.css')) {
                        return 'css/e-ops-pf/starter-kit/app.css'
                    }
                    return 'assets/[name].[ext]'
                },
            },
        },
    },
    resolve: {
        alias: {
            '@': path.resolve(__dirname, 'resources/js'),
        },
    },
})                                                                     