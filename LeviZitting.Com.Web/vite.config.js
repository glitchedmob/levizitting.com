import { defineConfig } from "vite";

export default defineConfig({
    build: {
        manifest: true,
        rollupOptions: {
            input: 'assets/src/main.ts',
        },
        outDir: 'wwwroot',
        emptyOutDir: false,
    },
    publicDir: 'assets/public'
})
